<?php
namespace App\Models\Aerosol;

use Aerosol\Helper\Image as Image;
use Illuminate\Database\Eloquent\Model;

class Aero extends Model implements \JsonSerializable {
	protected $table = 'aero';

	protected $primaryKey = 'key';
	protected $keyType ='string';
	public $incrementing = 'false';

	protected $casts = [
		'data' => 'array'
	];
}
