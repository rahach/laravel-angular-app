<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisers', function (Blueprint $table) {
            $table->increments('id');          
            $table->string('name')->unique();
            $table->string('frontend_label');
            $table->string('advertiser_slug')->unique();
            $table->integer('network_id')->unsigned();            
            $table->text('download_url')->nullable()->default(NULL);    
            $table->tinyInteger('is_active')->unsigned();    
            $table->string('checksum')->nullable()->default(NULL);   
            $table->string('path')->nullable()->default(NULL);           
            $table->string('filename')->nullable()->default(NULL);                                                            
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
        Schema::dropIfExists('advertisers');
    }
}
