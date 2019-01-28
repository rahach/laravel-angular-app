<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('network_id');
            $table->unsignedInteger('advertiser_id');
            $table->timestamp('updated_at');

            $table->index('network_id');
            $table->foreign('network_id')->references('id')->on('networks')->onDelete('cascade');                        

            $table->index('advertiser_id');
            $table->foreign('advertiser_id')->references('id')->on('advertisers')->onDelete('cascade');                        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('updates');
    }
}
