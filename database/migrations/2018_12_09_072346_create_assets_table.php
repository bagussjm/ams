<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ams_assets', function (Blueprint $table) {
            $table->string('asset_id','20');
            $table->string('asset_barcode','50');
            $table->string('asset_rfid_tag','50');
            $table->string('asset_serial_number','100');
            $table->string('asset_name','255');
	        $table->string('asset_type','255');
	        $table->string('asset_type_name','255');
	        $table->enum('asset_disposal_status',['active','nonactive','sold']);
	        $table->dateTime('asset_create_at');
	        
	        $table->primary('asset_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
