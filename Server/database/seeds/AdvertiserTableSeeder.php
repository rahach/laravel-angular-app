<?php

use Illuminate\Database\Seeder;

use App\Advertiser;

use App\Helpers\SeedingHelper;
use App\Helpers\MappingHelper;

class AdvertiserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = array();        

        if (($handle = fopen('database/data-sample/attribute-options-advertisers.csv', 'r')) === false) {
            die('Error opening file');
        }        
        $headers = fgetcsv($handle, 2048, ',');
        while ($row = fgetcsv($handle, 2048, ',')) {
            $result[] = array_combine($headers, $row);
        }        
        fclose($handle);

        $json = json_encode($result);

        DB::table('advertisers')->delete();
        $data = json_decode($json);
        foreach($data as $obj){
            Advertiser::create(array(                
                'is_active' => $obj->is_active,                
                'name' => $obj->value,
                'slug' => $slug = SeedingHelper::createSlug($obj->value),                
                'frontend_label' => $obj->value,
                'network_id' => $obj->network,                
                'download_url' => $obj->url,
                'path' => './resources/tmp/datafeeds/' . $slug .'/'
            ));
        }
    }
}
