<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceUsherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
        //  Schema::create('service_usher', function (Blueprint $table) {
         //
        //      $table->increments('id');
        //      $table->timestamps();
         //
        //      # `service_id` and `team_id` will be foreign keys, so they have to be unsigned
        //      #  Note how the field names here correspond to the tables they will connect...
        //      # `service_id` will reference the `services table` and `team_id` will reference the `ushers` table.
        //      $table->integer('service_id')->unsigned();
        //      $table->integer('team_id')->unsigned();
         //
        //      # Make foreign keys
        //      $table->foreign('service_id')->references('id')->on('services');
        //      $table->foreign('team_id')->references('id')->on('ushers');
        //  });
     }

     public function down()
     {
        //  Schema::drop('service_usher');
     }
}
