<?php

use Illuminate\Database\Seeder;

use App\Supplier;

use App\Helpers\SeedingHelper;
use App\Helpers\MappingHelper;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = array();        

        if (($handle = fopen('database/data-sample/attribute-options-suppliers.csv', 'r')) === false) {
            die('Error opening file');
        }        
        $headers = fgetcsv($handle, 2048, ';');
        while ($row = fgetcsv($handle, 2048, ';')) {
            $result[] = array_combine($headers, $row);
        }        
        fclose($handle);

        $json = json_encode($result);

        DB::table('suppliers')->delete();
        $data = json_decode($json);
        foreach($data as $obj){
            Supplier::create(array(                
                'name' => $obj->value,
                'slug' => SeedingHelper::createSlug($obj->value),                
                'frontend_label' => $obj->value
            ));
        }
    }
}
