<?php

namespace Aerosol;

use \Aerosol\Helper\Database as Database;
use \Aerosol\Helper\Image as Image;
use \Aerosol\Aero as Aero;


class AeroManager {

	public static function makeFromStoredData(Database $dbn, string $key) : Aero|null {
		// Get information from Database
		// Parse into Aero class
		$bg = new Image();
		$fg = new Image();

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
