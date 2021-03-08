<?php

namespace Aerosol;

use \Aerosol\Helper\Database as Database;
use \Aerosol\Helper\Image as Image;
use \Aerosol\Aero as Aero;


class AeroManager {

	public static function makeFromStoredData(Database $dbn, string $key) : Aero|null {
		// TODO: Get stored JSON data from Database
		$decodedData = json_decode($key,true);

		// TODO: Clean this up
		$bg = new Image($decodedData['bgURL'],new \Aerosol\Helper\PlaneCoordinates($decodedData['bgX'],$decodedData['bgY']),$decodedData['bgRotation'],$decodedData['bgOpacity']);
		$fg = new Image($decodedData['fgURL'],new \Aerosol\Helper\PlaneCoordinates($decodedData['fgX'],$decodedData['fgY']),$decodedData['fgRotation'],$decodedData['fgOpacity']);

		return new Aero($bg,$fg);
	}

	public static function makeFromUserInput($params) : Aero|null {
		// Get BG info
		$bg = new Image();

		// Get FG Info
		$fg = new Image();
		return new Aero($bg,$fg);
	}

}
