<?php

namespace App\Models\Aerosol\Helpers;

use App\Models\Aerosol\Helpers\Database as Database;
use App\Models\Aerosol\Helpers\Image as Image;
use App\Models\Aerosol\Aero as Aero;
use App\Models\Aerosol\Helpers\PlaneCoordinates as PlaneCoordinates;
use RuntimeException;

final class AeroManager {

	const bgURLKey = "bgURL";
	const bgXPosKey = "bgX";
	const bgYPosKey = "bgY";
	const bgRotationKey = "bgRotation";
	const bgOpacityKey = "bgOpacity";

	const fgURLKey = "fgURL";
	const fgXPosKey = "fgX";
	const fgYPosKey = "fgY";
	const fgRotationKey = "fgRotation";
	const fgOpacityKey = "fgOpacity";

	public static function makeFromStoredData(Database $dbn, string $key) : Aero|null {
		// TODO: Get stored JSON data from Database
		$decodedData = json_decode($key,true);

		$bg = new Image($decodedData[self::bgURLKey],
						new PlaneCoordinates($decodedData[self::bgXPosKey],$decodedData[self::bgYPosKey]),
						$decodedData[self::bgRotationKey],
						$decodedData[self::bgOpacityKey]);

		$fg = new Image($decodedData[self::fgURLKey],
						new PlaneCoordinates($decodedData[self::fgXPosKey],$decodedData[self::fgYPosKey]),
						$decodedData[self::fgOpacityKey],
						$decodedData[self::bgURLKey]);

		//return new Aero($bg,$fg);
	}

	public static function makeFromUserInput($params) : Aero {
		// TODO: Reduce code duplication in this function.

		// Get BG info
		try {
			$bgURL = $params[self::bgURLKey] ?? null;
			$bgCoords = new PlaneCoordinates($params[self::bgXPosKey],$params[self::bgYPosKey]);
			$bgRotation = $params[self::bgRotationKey] ?? null;
			$bgOpacity = $params[self::bgOpacityKey] ?? null;

			$bg = new Image($bgURL,$bgCoords,$bgRotation,$bgOpacity);
		} catch ( \Exception $exception ) {
			// TODO: Error Handling?
			throw new RuntimeException("Unable to create Background Object from User Data.",$exception->getCode(),$exception);
		} catch ( \Error $error ) {
			throw new \Error("Error occured while creating Background Object from User Data.",$error->getCode(),$error);
		}

		//Get FG Info
		try {
			$fgURL = $params[self::fgURLKey] ?? null;
			$fgCoords = new PlaneCoordinates($params[self::fgXPosKey],$params[self::fgYPosKey]);
			$fgRotation = $params[self::fgRotationKey] ?? null;
			$fgOpacity = $params[self::fgOpacityKey] ?? null;

			$fg = new Image($fgURL,$fgCoords,$fgRotation,$fgOpacity);
		} catch ( \Exception $exception ) {
			// TODO: Error Handling?
			throw new RuntimeException("Unable to create Foreground Object from User Data.",$exception->getCode(),$exception);
		} catch ( \Error $error ) {
			throw new \Error("Error occured while creating Foreground Object from User Data.",$error->getCode(),$error);
		}

		//return new Aero($bg,$fg);
	}

}
