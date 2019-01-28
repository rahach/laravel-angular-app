<?php
namespace Import;

use Illuminate\Support\Facades\DB;

use Import\Helpers\DataTransformation;
use Import\DownloadImages;


class TransformCSV{

    private $advertiser;
    
    private $transformationStatus;

    private $attributes;

    private $deleteImagesFromCloud = [];

    public function __construct(\App\Advertiser $advertiser){

        $this->advertiser = $advertiser;

        $this->transformationStatus = false;

        $this->attributes = $this->getAttributes();
    }

    public function run(){

//        $this->beginTransaction();

//        $this->createTmpTable();

        $this->updateData();        
        
        $this->dropTmpTable();

        $this->endTransaction();

        return $this->advertiser;        
    }

    private function getAttributes(){
        $result = DB::table('attributes')->select('db_slug', 'id')->get();
        return $result->toArray();
    }

    private function createTmpTable(){

        DB::statement('CREATE TABLE IF NOT EXISTS homestead.tmp_table (        
            `hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,            
            `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `advertiser_id` int(10) unsigned NOT NULL,
            `advertiser_deeplink` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
            `frontend_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `short_description` varchar(1000) COLLATE utf8mb4_unicode_ci,
            `long_description` varchar(5000) COLLATE utf8mb4_unicode_ci,
            `price` varchar(255) NOT NULL,
            `pseudo_price` varchar(255) DEFAULT NULL,
            `supplier_id` int(10) unsigned NOT NULL,
            `image_file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `availability` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `shipping_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `shipping_costs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `color` int(10) unsigned NOT NULL,
            `material` int(10) unsigned NOT NULL,
            `discount_value` int(10) unsigned NOT NULL,            
            `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `meta_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
            `meta_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
        ) ENGINE=MEMORY DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;');
    }


    private function updateData(){
/*
        if (($handle = fopen($this->advertiser->path . $this->advertiser->filename, 'r')) === false) {
            die('Error opening file');
        }        

        $headers = fgetcsv($handle, 1000, ';');

        $i = 0;

        while (false !== ($data = fgetcsv($handle, 4096, ';'))) {

            usleep(self::getRandomMicroseconds());
            $i++;
            $sku = "";
            $imageFilename = "";
            $hash = md5(serialize($data)); 

            $result = array_combine($headers, $data);
            $tmpData['hash'] = trim($hash);
            $tmpData['name'] = trim($result['Product_Title']);
            $slug = trim( DataTransformation::createSlug($result['Product_Title']) );
            $tmpData['product_slug'] = $slug;            
            $sku = trim( DataTransformation::createSku() );
            $tmpData['sku'] = $sku;            
            $tmpData['advertiser_id'] = trim($this->advertiser->id);
            $tmpData['advertiser_deeplink'] = $result['Deeplink_URL'];
            $tmpData['frontend_label'] = trim($result['Product_Title']);
            $tmpData['short_description'] = trim($result['Product_Description_short']);
            $tmpData['long_description'] = $result['Product_Description_long'];
            $tmpData['price'] = $result['Price'];
            $tmpData['pseudo_price'] = $result['Price_old'];
            $tmpData['supplier_id'] = 100;
            $imageFilename = trim( DataTransformation::createImageFilename($sku, $result['Image_small_URL']) );
            $tmpData['image_file_name'] = $imageFilename;
            $imagePath = trim( DataTransformation::saveImageInCloud($imageFilename, $result['Image_small_URL']) );
            $tmpData['image_url'] = $imagePath;
            $tmpData['availability'] = $result['Availability'];
            $tmpData['shipping_time'] = 'ship time';
            $tmpData['shipping_costs'] = $result['shipping'];
            $tmpData['color'] = 1;
            $tmpData['material'] = 1;
            $tmpData['discount_value'] = 50;            
            $tmpData['size'] = 'size';
            $tmpData['meta_title'] = 'meta title';
            $tmpData['meta_description'] = 'meta descr';
            
            $this->insertIntoTmpTable($tmpData);                

            echo $i . ": inserted into tmp table\n";
        }

        $deleteProductData = DB::select('SELECT p.id, p.image_file_name FROM homestead.products p LEFT JOIN homestead.tmp_table t ON p.hash = t.hash WHERE t.hash IS NULL');        
        $this->deleteProducts($deleteProductData);
*/
        $insertProductData = DB::select('SELECT t.* FROM homestead.tmp_table t LEFT JOIN homestead.products p ON p.hash = t.hash WHERE p.hash IS NULL');        
        $this->insertIntoProductsTable($insertProductData);

    }    

    private function beginTransaction(){
        DB::statement('SET foreign_key_checks=0');        
        DB::statement('SET unique_checks=0');    
        DB::statement('SET autocommit=0');
    }

    private function endTransaction(){
        DataTransformation::deleteImages($this->deleteImagesFromCloud);
        DB::statement('COMMIT');                                       
        DB::statement('set foreign_key_checks=1'); 
        DB::statement('SET unique_checks=1');             
    }    


    private function dropTmpTable(){
        DB::statement('DROP TABLE homestead.tmp_table;');        
    }

    private function insertIntoTmpTable(Array $data){
        DB::insert('insert into homestead.tmp_table (
            hash,
            name,
            product_slug,
            sku,
            advertiser_id,
            advertiser_deeplink,
            frontend_label,
            short_description,
            long_description,
            price,
            pseudo_price,
            supplier_id,
            image_file_name,
            image_url,
            availability,
            shipping_time,
            shipping_costs,
            color,
            material,
            discount_value,            
            size,
            meta_title,
            meta_description
        ) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $data['hash'],
            $data['name'],
            $data['product_slug'],
            $data['sku'],
            $data['advertiser_id'],
            $data['advertiser_deeplink'],
            $data['frontend_label'],
            $data['short_description'],
            $data['long_description'],
            $data['price'],
            $data['pseudo_price'],
            $data['supplier_id'],
            $data['image_file_name'],
            $data['image_url'],
            $data['availability'],
            $data['shipping_time'],
            $data['shipping_costs'],
            $data['color'],
            $data['material'],
            $data['discount_value'],            
            $data['size'],
            $data['meta_title'],
            $data['meta_description']
        ]);             
    }    

    private function deleteProducts(Array $data){
        $i=0;
        foreach($data as $element){
            $i++;
            DB::delete('delete from homestead.products where id=' . $element->id);             
            $this->deleteFromCategoryProductTable($element->id);        
            $this->deleteFromAttributeProductTable($element->id);                                
            array_push($this->deleteImagesFromCloud, $element->image_file_name);        
        }
        echo $i . ": deleted from product table\n";        
    }

    private function deleteFromCategoryProductTable($id){
        DB::delete('delete from homestead.category_product where product_id=' . $id); 
    }    

    private function deleteFromAttributeProductTable($id){
        DB::delete('delete from homestead.attribute_products where product_id=' . $id); 
    }    


    private function insertIntoProductsTable(Array $data){
        $i=0;
        foreach($data as $element){
            $i++;
            $query = DB::statement('
                INSERT IGNORE INTO homestead.products ( 
                    hash,
                    name,
                    product_slug,
                    sku,
                    advertiser_id,
                    advertiser_deeplink,
                    frontend_label,
                    short_description,
                    long_description,
                    price,
                    pseudo_price,
                    supplier_id,
                    image_file_name,
                    image_url,
                    availability,
                    shipping_time,
                    shipping_costs,
                    meta_title,
                    meta_description) 
            SELECT             
                    hash,
                    name,
                    product_slug,
                    sku,
                    advertiser_id,
                    advertiser_deeplink,
                    frontend_label,
                    short_description,
                    long_description,
                    price,
                    pseudo_price,
                    supplier_id,
                    image_file_name,
                    image_url,
                    availability,
                    shipping_time,
                    shipping_costs,
                    meta_title,
                    meta_description
            FROM homestead.tmp_table
            WHERE hash="' . $element->hash . '"');

            $lastInsertedId = $this->getLastInsertedId();

            $categoryIds = DataTransformation::getCategoryIds($element->name, $element->short_description, $element->long_description);        

            $this->insertIntoCategoryProductTable($lastInsertedId, $categoryIds);            

            //$this->insertIntoAttributeProductTable($lastInsertedId, $element);       
            
            //$this->saveImageInCloud($i, $element->image_file_name);
        }        
        echo $i . ": inserted into product table\n";        
    }

    private function insertIntoCategoryProductTable(String $lastInsertedId, Array $categoryIds){
        foreach($categoryIds as $categoryId){
            DB::statement('
                INSERT IGNORE INTO homestead.category_product ( 
                    product_id,
                    category_id) 
                VALUES (            
                    ' . $lastInsertedId . ',
                    ' . $categoryId . ')'
            );
        }        
    }

    private function insertIntoAttributeProductTable(String $lastInsertId, Array $data){

        foreach($this->attributes as $attribute){

            DB::statement('
            INSERT IGNORE INTO homestead.attribute_products ( 
                product_id,
                attribute_id,
                attribute_value) 
            VALUES (            
                ' . $lastInsertId . ',
                ' . $attribute->id . ',
                ' . $data[$attribute->db_slug] . ')'
            );
        }
    }


    private function getLastInsertedId(){
        $result = DB::getPdo()->lastInsertId();
        return $result;
    }


    private static function getRandomMicroseconds(){
        return mt_rand(1000000, 8000000);
    }


}