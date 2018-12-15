<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetModel extends Model
{
	
    protected $table = 'ams_assets';
    protected $fillable = ['asset_name','asset_type','asset_type_name'];
	protected $primaryKey = 'asset_id';
	public $incrementing = false;
	
}
