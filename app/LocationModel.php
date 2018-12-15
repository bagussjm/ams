<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationModel extends Model
{
    //
	protected $table = 'ams_location';
	protected $primaryKey = 'location_id';
	public $incrementing = false;
}
