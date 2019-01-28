<?php

use Illuminate\Database\Seeder;

use App\Network;

use App\Helpers\SeedingHelper;
use App\Helpers\MappingHelper;

class NetworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = array();        

        if (($handle = fopen('database/data-sample/attribute-options-networks.csv', 'r')) === false) {
            die('Error opening file');
        }        
        $headers = fgetcsv($handle, 2048, ';');
        while ($row = fgetcsv($handle, 2048, ';')) {
            $result[] = array_combine($headers, $row);
        }        
        fclose($handle);

        $json = json_encode($result);

        DB::table('networks')->delete();
        $data = json_decode($json);
        foreach($data as $obj){
            Network::create(array(                
                'name' => $obj->value
            ));
        }
    }
}
