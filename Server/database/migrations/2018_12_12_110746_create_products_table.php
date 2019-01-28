<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hash');              
            $table->string('name');  
            $table->string('product_slug')->unique();              
            $table->string('sku')->unique();            
            $table->unsignedInteger('advertiser_id');  
            $table->string('advertiser_deeplink');              
            $table->string('frontend_label');  
            $table->text('short_description')->nullable($value = true)->default(null);  
            $table->text('long_description')->nullable($value = true)->default(null);  
            $table->float('price', 8, 2);  
            $table->float('pseudo_price', 8, 2)->nullable($value = true)->default(null);  
            $table->unsignedInteger('supplier_id');
            $table->string('image_file_name');
            $table->string('image_url');
            $table->string('availability')->nullable($value = true)->default(null);            
            $table->string('shipping_time')->nullable($value = true)->default(null);
            $table->string('shipping_costs')->nullable($value = true)->default(null);
            $table->text('meta_title');
            $table->text('meta_description');
            $table->timestamps();            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
