<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ams_location', function (Blueprint $table) {
        	
        	$table->string('location_id','20')->primary();
        	$table->string('location_name','255');
	        $table->dateTime('date_created')->useCurrent();
	        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ams_location');
    }
}
