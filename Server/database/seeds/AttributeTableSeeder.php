<?php

use Illuminate\Database\Seeder;

use App\Attribute;

use App\Helpers\SeedingHelper;
use App\Helpers\MappingHelper;

class AttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = array();        

        if (($handle = fopen('database/data-sample/attributes.csv', 'r')) === false) {
            die('Error opening file');
        }        
        $headers = fgetcsv($handle, 2048, ';');
        while ($row = fgetcsv($handle, 2048, ';')) {
            $result[] = array_combine($headers, $row);
        }        
        fclose($handle);

        $json = json_encode($result);

        DB::table('attributes')->delete();
        $data = json_decode($json);
        foreach($data as $obj){
            Attribute::create(array(                
                'name' => $obj->value,
                'frontend_label' => $obj->label,                
                'slug' => SeedingHelper::createSlug($obj->value),                
                'db_slug' => SeedingHelper::createDbSlug($obj->value),                                
            ));
        }
    }
}
