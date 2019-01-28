<?php

use Magento\Framework\App\Bootstrap;

 
$rootDirectory = '/var/www/html/m2'; 
require $rootDirectory . '/app/bootstrap.php';

require_once 'class.db.php';

class UpdateData{    

    private $connection;

    private $prefix;

    private $updateStatus;
    
    private $tempTableName;     
    
    private $advertiserWebsite;

    private $categoryDescriptions;
    
    private $message;         
    
    private $productCollection;
    private $categoryCollection;   
    private $product;

    private $bootstrap;
    private $objectManager;    

    private $currencyModel;
    
    private $deleteCounter;
    private $updateCounter;
    private $insertCounter;    
    
    public function __construct( $theTempTableName=NULL, $thePrefix=NULL, $theAdvertiserWebsite=NULL ){       

        $this->bootstrap = Bootstrap::create(BP, $_SERVER);        

        $this->objectManager = $this->bootstrap->getObjectManager();
        
        $this->objectManager->get('Magento\Framework\App\State')->setAreaCode('frontend');        
        
        $this->currencyModel = $this->objectManager->get('\Magento\Directory\Model\Currency');
        
        $this->productCollection = $this->getProductCollection();
        $this->categoryCollection = $this->getCategoryCollection();  
        $this->product = $this->createProduct();
        
        $this->connection = $this->createConnection();

        $this->prefix = $thePrefix;
        $this->tempTableName = $theTempTableName; 
        $this->advertiserWebsite = $theAdvertiserWebsite; 
        $this->deleteCounter = 0;
        $this->updateCounter = 0;
        $this->insertCounter = 0;    

    }

    private function createConnection(){

        $newConnection = new db();

        return $newConnection;
    }

    private function getProductCollection(){

        $productCollection = $this->objectManager->create('Magento\Catalog\Model\ResourceModel\Product\CollectionFactory');

        $collection = $productCollection->create()
                    ->addAttributeToSelect('*')
                    ->load();
       
        return $collection;
    }


    private function getCategoryCollection(){

        $categoryCollection = $this->objectManager->get('\Magento\Catalog\Model\CategoryFactory');
       
        return $categoryCollection;
    }
    
    private function createProduct(){

        $product = $this->objectManager->create('\Magento\Catalog\Model\Product');
       
        return $product;
    }    
    
    
    public function deleteProcess(){

        $query = "SELECT " . $this->tempTableName . ".name " .
                  "FROM " . $this->tempTableName . " ;";

        if ( $result = $this->connection->getAll($query) ) {        
        

            foreach ($this->productCollection as $product){

                $isInTempTable = false;
                foreach ( $result as $row ) {

                    $isInTempTable = false;

                    if( ($product->getName()===$row['name']) ){
                        $isInTempTable = true;
                        break;
                    }          
                }


                if(($isInTempTable === false) && ($product->getData('advertiserurl') === $this->advertiserWebsite)){

                    $this->deleteProduct($product->getSku());

                }
            }    
        } else {
            $this->message .= "no success: deleteProcess()" . "\n";            
        }
    }    
    
    private function resetRegistry(){
        $registry = $this->objectManager->get('\Magento\Framework\Registry');
        if($registry->registry('isSecureArea') === null) {
            $registry->register('isSecureArea', false);
        }        
        
    }
    
    public function updateProcess(){

        $query = "SELECT " . $this->tempTableName . ".name " .
                  "FROM " . $this->tempTableName . " ;";        
        
        if ( $result = $this->connection->getAll($query) ) {

            foreach ( $result as $row ) {

                $isInCollection = false;
                foreach ($this->productCollection as $product){

                    if( ($product->getName()===$row['name'])  && ($product->getData('advertiserurl') === $this->advertiserWebsite)){

                        $isInCollection = true;
                        $this->updateProducts($row['name'], $product->getSku());     
                        continue;
                    }          
                }
                
                if($isInCollection===false){
                    $this->insertNewProducts($row['name']);
                }             
            }
        } else {
            $this->message .= "no success: insertPosts()" . "\n";  
        } 
    }
    
    function getStoreID($id = null) {
        $theID = $this->objectManager->get('Magento\Store\Model\StoreManagerInterface');
        return $theID->getStore($id);
    }    
    
    public function getWebsiteID(){
        $storeManager = $this->objectManager->get('\Magento\Store\Model\StoreManagerInterface');
        $websiteId = $storeManager->getStore()->getWebsiteId();
        return $websiteId;
    }    
    
    private function getImage($url) {         
        $headers[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg, image/png';              
        $headers[] = 'Connection: Keep-Alive';         
        $headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';         
        $user_agent = 'php';         
        $process = curl_init($url);         
        curl_setopt($process, CURLOPT_HTTPHEADER, $headers);         
        curl_setopt($process, CURLOPT_HEADER, 0);         
        curl_setopt($process, CURLOPT_USERAGENT, $user_agent); //check here         
        curl_setopt($process, CURLOPT_TIMEOUT, 30);         
        curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);         
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);         
        $return = curl_exec($process);         
        curl_close($process);         
        return $return;     
    } 
    

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    

    function deleteImages($sku){
        
        $cache = $this->objectManager->create('Magento\Catalog\Model\Product\Image\Cache')->getDataPublic();
        $cache = array_map("unserialize", array_unique(array_map("serialize", $cache)));

        $storeManager = $this->objectManager->get('\Magento\Store\Model\StoreManagerInterface');
        $appEmulation = $this->objectManager->get('\Magento\Store\Model\App\Emulation');
        $productRepositoryFactory = $this->objectManager->get('\Magento\Catalog\Api\ProductRepositoryInterfaceFactory');
        $imageHelperFactory = $this->objectManager->get('\Magento\Catalog\Helper\ImageFactory');

        // get the store ID from somewhere (maybe a specific store?)
        $storeId = $storeManager->getStore()->getId();
        // emulate the frontend environment
        $appEmulation->startEnvironmentEmulation($storeId, \Magento\Framework\App\Area::AREA_FRONTEND, true);
        // load the product however you want
        $product = $productRepositoryFactory->create()->get($sku);

        $imageUrls = [];
        foreach($cache as $key=>$value){
            // now the image helper will get the correct URL with the frontend environment emulated 
            array_push($imageUrls, $imageHelperFactory->create()->init($product, $value['id'])->getUrl());
        }
        $imageUrls = array_unique($imageUrls);
        foreach($imageUrls as $key=>$value){
            if (strpos($value, 'placeholder') === false) {

                try{
                    $imagePath = str_replace( "http://www.gartenhaus-angebot.de/" , "/var/www/html/m2/" , $value);
                    exec( 'rm ' . $imagePath, $output, $return);            
                }
                catch (Exception $e) {
                    echo $e->getMessage();                
                }
            }    
        }

        $appEmulation->stopEnvironmentEmulation();                
        
    }

    private function getDiscountValue($price, $pseudo_price){
        $percentage = number_format(($pseudo_price - $price) * 100 / $pseudo_price,0);
        return $percentage;
    }    
    

    private function getDiscountClass($percentage){

        $discountClass = "";
        $percentage = intval($percentage);
        
        switch ($percentage):
            case ( $percentage <= 10  ? true : false):
                $discountClass = "bis zu 10%";
                break;         
            case ( $percentage > 10 && $percentage <= 20  ? true : false):
                $discountClass = "10% - 20%";
                break;         
            case ( $percentage > 20 && $percentage <= 30  ? true : false):
                $discountClass = "20% - 30%";
                break;         
            case ( $percentage > 30 && $percentage <= 40  ? true : false):
                $discountClass = "30% - 40%";
                break;         
            case ( $percentage > 40 && $percentage <= 50  ? true : false):
                $discountClass = "40% - 50%";
                break;         
            case ( $percentage > 50 && $percentage <= 60  ? true : false):
                $discountClass = "50% - 60%";
                break;         
            case ( $percentage > 60 && $percentage <= 70  ? true : false):
                $discountClass = "60% - 70%";
                break;         
            case ( $percentage > 70 && $percentage <= 80  ? true : false):
                $discountClass = "70% - 80%";
                break;         
            case ( $percentage > 80 && $percentage <= 90  ? true : false):
                $discountClass = "80% - 90%";
                break;                     
            case ( $percentage > 90  ? true : false):
                $discountClass = "mehr als 90%";
                break;                                 
        endswitch;        
        return $discountClass;
    }        
    
    function deleteProduct($sku){    
        try{

            $theProduct = $this->createProduct();

            $theProduct->load($theProduct->getIdBySku($sku));    

            $productRepository = $this->objectManager->create('\Magento\Catalog\Api\ProductRepositoryInterface');

            $registry = $this->objectManager->get('\Magento\Framework\Registry');

            $this->deleteImages($sku);            
            
            $existingMediaGalleryEntries = $theProduct->getMediaGalleryEntries();
            foreach ($existingMediaGalleryEntries as $key => $entry) {
                unset($existingMediaGalleryEntries[$key]);
            }
            $theProduct->setMediaGalleryEntries($existingMediaGalleryEntries);
            $productRepository->save($theProduct);

            if($registry->registry('isSecureArea') === null) {
                $registry->register('isSecureArea', true);
            }
            echo "delete: ";
            echo $theProduct->getName() . "\n";
            $productRepository->deleteById($sku);
            $this->deleteCounter += 1;                     
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function updateProducts($row_name, $sku){

        $query = "SELECT * FROM " . $this->tempTableName . " WHERE name = '" . $row_name . "';";    

        if( $row = $this->connection->getOne($query) ){

            try{

                date_default_timezone_set('Europe/Berlin');
                $theDate = strval(date('j.n.Y H:i'));                
                
                $categoryIDs = explode(",", $row["categoryID"]);                   
                
                $collection = $this->categoryCollection->create()->getCollection()->addAttributeToFilter('name',$this->advertiserWebsite)->setPageSize(1);

                if ($collection->getSize()) {
                    $advertiserCategoryId = $collection->getFirstItem()->getId();
                    array_push($categoryIDs, $advertiserCategoryId);
                }

                $theProduct = $this->createProduct();

                $theProduct->load($theProduct->getIdBySku($sku));

   /*             
                $this->deleteImages($sku);            

                $existingMediaGalleryEntries = $theProduct->getMediaGalleryEntries();
                foreach ($existingMediaGalleryEntries as $key => $entry) {
                    unset($existingMediaGalleryEntries[$key]);
                }
                $theProduct->setMediaGalleryEntries($existingMediaGalleryEntries);
*/

                $theProduct->setSku($sku); // Set your sku here                
                $theProduct->setIsMassupdate(true);
                $theProduct->setWebsiteIds([$this->getWebsiteID()]);

                
                $thePrice = $this->currencyModel->format($row["price"], array(), false, false);
                $thePseudoPrice = $this->currencyModel->format($row["pseudo_price"], array(), false, false);                
                
                $theProduct->setName($row["name"]); // Name of Product
                $theProduct->setDescription($row["product_short_description"]); // Product Short Description                
                $theProduct->setCategoryIds($categoryIDs);
                $theProduct->setAttributeSetId(4); // Attribute set id
                $theProduct->setStatus(1); // Status on product enabled/ disabled 1/0
                $theProduct->setWeight(1); // weight of product
                $theProduct->setVisibility(4); // visibilty of product (catalog / search / catalog, search / Not visible individually)
                $theProduct->setTaxClassId(0); // Tax class id
                $theProduct->setTypeId('simple'); // type of product (simple/virtual/downloadable/configurable)
                $theProduct->setPrice($row["price"]); // price of product

                $theProduct->setStockData(
                                        array(
                                            'use_config_manage_stock' => 0,
                                            'manage_stock' => 1,
                                            'is_in_stock' => 1,
                                            'qty' => 1
                                        )
                                    );
                                
                $theProduct->setCustomAttribute('manufacturer', $row['supplier']);                            
                $theProduct->setCustomAttribute('color_string', $row['color']);                 
                $theProduct->setCustomAttribute('material_string', $row['material']);                              
                $theProduct->setCustomAttribute('category_ids', $categoryIDs);                 
                $theProduct->setCustomAttribute('advertiserurl', $this->advertiserWebsite);                 
                $theProduct->setCustomAttribute('deeplink', $row['deeplink']); 
                $theProduct->setCustomAttribute('shippingtime', $row['shippingtime']); 
                $theProduct->setCustomAttribute('shippingstatus', $row['shippingstatus']); 
                $theProduct->setCustomAttribute('shippingcosts', $row['shippingcosts']);     
                $theProduct->setCustomAttribute('pseudo_price', $row['pseudo_price']);       
                $theProduct->setCustomAttribute('update_date_time', $theDate);                                                                 
                
                $thePrice = $this->currencyModel->format($row['price'], array(), false, false);
                $thePseudoPrice = $this->currencyModel->format($row['pseudo_price'], array(), false, false);
                
                if (!empty($row['pseudo_price']) && ($row['pseudo_price'] != $row['price'])  && (intval($row['pseudo_price']) != 0)){

                    $theDiscountValue = $this->getDiscountValue($row['price'], $row['pseudo_price']);                
                    $theProduct->setCustomAttribute('discount_value', $theDiscountValue);    

                    $theDiscountClass = $this->getDiscountClass($theDiscountValue);
                    $theProduct->setCustomAttribute('discount_class_string', $theDiscountClass);    

                    $valueId = $theProduct->getResource()->getAttribute('discount_class')->getSource()->getOptionId($theDiscountClass);
                    $theProduct->setData('discount_class', $valueId);     
                }
                
                $valueId = $theProduct->getResource()->getAttribute('color')->getSource()->getOptionId($row['color']);
                $theProduct->setData('color', $valueId);

                $valueId = $theProduct->getResource()->getAttribute('material')->getSource()->getOptionId($row['material']);
                $theProduct->setData('material', $valueId);

                $valueId = $theProduct->getResource()->getAttribute('advertiser_class')->getSource()->getOptionId($this->advertiserWebsite);
                $theProduct->setData('advertiser_class', $valueId);
                
                $theProduct->save();      

                echo "update: ";                
                echo $theProduct->getName() . "\n";
                $this->updateCounter += 1;                                        
            } catch (Exception $e) {
		echo $e->getMessage();
	    }                                    
        }
    }

    private function checkSKU($sku){    

        foreach ($this->productCollection as $product){

            if( $sku != $product->getSku() ){
                continue;
            }          
            else{
                return false;
            }
        }        
        return true;
    }   
    
    private function getSKU(){
        
        $uniqueId = uniqid();
        
        if ($this->checkSKU($uniqueId)){ 
            return $uniqueId;
        }
        else{
            $this->getSKU();
        }
        
    }
    
    
    private function getMimeType($url){
        $header = get_headers($url,1);

        try{
            if(array_key_exists ( 'Content-Type' , $header )){

                if (is_array($header['Content-Type'])){

                    if(in_array("image/jpeg", $header['Content-Type'], true) ) {                
                        $mimeType = "jpg";    
                    }                    
                    if(in_array("image/gif", $header['Content-Type'], true) ) {                
                        $mimeType = "gif";    
                    }  
                    if(in_array("image/png", $header['Content-Type'], true) ) {                
                        $mimeType = "png";    
                    }  
                    if(in_array("image/x-bitmap", $header['Content-Type'], true) ) {                
                        $mimeType = "bmp";    
                    }                
                    return $mimeType;
                } else {
                    if($header['Content-Type']==="image/jpeg" ) {                
                        $mimeType = "jpg";    
                    }    
                    elseif($header['Content-Type']==="image/gif" ) {                
                        $mimeType = "gif";
                    }    
                    elseif($header['Content-Type']==="image/png" ) {                
                        $mimeType = "png";    
                    }                  
                    elseif($header['Content-Type']==="image/x-bitmap" ) {                
                        $mimeType = "bmp";    
                    }
                    return $mimeType;
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }    
    }    
    
    
    private function getImageFileName($sku){

    }

    
    function insertNewProducts($row_name){

        $query = "SELECT * FROM " . $this->tempTableName . " WHERE name = '" . $row_name . "';";    

        if( $row = $this->connection->getOne($query) ){
            
           try{ 
                $sku = $this->getSKU();               

                date_default_timezone_set('Europe/Berlin');
                $theDate = strval(date('j.n.Y H:i'));                
                
                $imageFileName = "sku-" . $sku . "-" . $this->generateRandomString() . "." . $this->getMimeType($row["product_image_url"]);        
                $imagePath = '/var/www/html/m2/pub/media/tmp/upload/' . $imageFileName;

                if(!file_exists($imagePath)){
                    $image = $this->getImage($row["product_image_url"]); 
                    file_put_contents($imagePath, $image);            
                }

                $categoryIDs = explode(",", $row["categoryID"]);                   

                $collection = $this->categoryCollection->create()->getCollection()->addAttributeToFilter('name',$this->advertiserWebsite)->setPageSize(1);

                if ($collection->getSize()) {
                    $advertiserCategoryId = $collection->getFirstItem()->getId();
                    array_push($categoryIDs, $advertiserCategoryId);
                }                
                
                $theProduct = $this->createProduct();
                
                $theProduct->setSku($sku); // Set your sku here

                $theProduct->setWebsiteIds([$this->getWebsiteID()]);                
                $theProduct->setName($row["name"]); // Name of Product
                $theProduct->setDescription($row["product_short_description"]); // Product Short Description                                
                $theProduct->setCategoryIds($categoryIDs);
                $theProduct->setAttributeSetId(4); // Attribute set id
                $theProduct->setStatus(1); // Status on product enabled/ disabled 1/0
                $theProduct->setWeight(1); // weight of product
                $theProduct->setVisibility(4); // visibilty of product (catalog / search / catalog, search / Not visible individually)
                $theProduct->setTaxClassId(0); // Tax class id
                $theProduct->setTypeId('simple'); // type of product (simple/virtual/downloadable/configurable)
                $theProduct->setPrice($row["price"]); // price of product
                $theProduct->addImageToMediaGallery($imagePath, array('image', 'small_image', 'thumbnail'), false, false);
                $theProduct->setStockData(
                                        array(
                                            'use_config_manage_stock' => 0,
                                            'manage_stock' => 1,
                                            'is_in_stock' => 1,
                                            'qty' => 1
                                        )
                                    );
                
                $theProduct->setCustomAttribute('manufacturer', $row['supplier']);                            
                $theProduct->setCustomAttribute('color_string', $row['color']);                 
                $theProduct->setCustomAttribute('material_string', $row['material']);                              
                $theProduct->setCustomAttribute('category_ids', $categoryIDs);                 
                $theProduct->setCustomAttribute('advertiserurl', $this->advertiserWebsite);                 
                $theProduct->setCustomAttribute('deeplink', $row['deeplink']); 
                $theProduct->setCustomAttribute('shippingtime', $row['shippingtime']); 
                $theProduct->setCustomAttribute('shippingstatus', $row['shippingstatus']); 
                $theProduct->setCustomAttribute('shippingcosts', $row['shippingcosts']);     
                $theProduct->setCustomAttribute('pseudo_price', $row['pseudo_price']);                                                 
                $theProduct->setCustomAttribute('update_date_time', $theDate);                                                 
                
                $thePrice = $this->currencyModel->format($row['price'], array(), false, false);
                $thePseudoPrice = $this->currencyModel->format($row['pseudo_price'], array(), false, false);
                
                if (!empty($row['pseudo_price']) && ($row['pseudo_price'] != $row['price'])  && (intval($row['pseudo_price']) != 0)){

                    $theDiscountValue = $this->getDiscountValue($row['price'], $row['pseudo_price']);                
                    $theProduct->setCustomAttribute('discount_value', $theDiscountValue);    

                    $theDiscountClass = $this->getDiscountClass($theDiscountValue);
                    $theProduct->setCustomAttribute('discount_class_string', $theDiscountClass);    

                    $valueId = $theProduct->getResource()->getAttribute('discount_class')->getSource()->getOptionId($theDiscountClass);
                    $theProduct->setData('discount_class', $valueId);     
                }
                
                $valueId = $theProduct->getResource()->getAttribute('color')->getSource()->getOptionId($row['color']);
                $theProduct->setData('color', $valueId);

                $valueId = $theProduct->getResource()->getAttribute('material')->getSource()->getOptionId($row['material']);
                $theProduct->setData('material', $valueId);

                $valueId = $theProduct->getResource()->getAttribute('advertiser_class')->getSource()->getOptionId($this->advertiserWebsite);
                $theProduct->setData('advertiser_class', $valueId);                
                
                $theProduct->save();            
                
                exec( 'rm ' . $imagePath, $output, $return);
                
                echo "insert: ";
                echo $theProduct->getName() . "\n";
                $this->insertCounter += 1;                                                                           
            } catch (Exception $e) {
		echo $e->getMessage();
            }                        
        }
    }
    
    public function getCounter(){
        $countData = "deleted: " . $this->deleteCounter . " items\n" .
                     "updated: " . $this->updateCounter . " items\n" .
                     "inserted: " . $this->insertCounter . " items\n";
        return $countData;        
    }    

    public function __destruct(){
        $this->connection->disconnect();        
        unset($this->updateStatus);
        unset($this->client);
        unset($this->prefix);
        unset($this->tempTableName);     
        unset($this->advertiserWebsite);
        unset($this->categoryDescriptions);
        unset($this->message);
    }    
   
}