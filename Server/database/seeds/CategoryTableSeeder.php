<?php

use Illuminate\Database\Seeder;

use App\Category;

use App\Helpers\SeedingHelper;
use App\Helpers\MappingHelper;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = array();        

        if (($handle = fopen('database/data-sample/categories.csv', 'r')) === false) {
            die('Error opening file');
        }        
        $headers = fgetcsv($handle, 2048, ',');
        while ($row = fgetcsv($handle, 2048, ',')) {
            $result[] = array_combine($headers, $row);
        }        
        fclose($handle);

        $json = json_encode($result);

//        DB::table('categories')->delete();
        $data = json_decode($json);

        foreach($data as $obj){
            Category::create(array(                
                'name' => trim($obj->name),
                'frontend_label' => trim($obj->name),
                'category_slug' => trim(SeedingHelper::createSlug($obj->name)),
                'parent_id' => $obj->parent_id,
                'children_count' => 0
            ));
        }        
    }
}
