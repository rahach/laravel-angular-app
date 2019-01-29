<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdvertiserTableSeeder::class);        
        $this->call(AttributeTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(NetworkTableSeeder::class);
        $this->call(SupplierTableSeeder::class);                                
    }
}
