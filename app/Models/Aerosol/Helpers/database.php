<?php

namespace Aerosol\Helper;

class Database {

	private static $dbh = null;

	public static function init() {
		$filePath = "aero.db";

		self::$dbh = new \PDO("sqlite:$filePath");
	}

	public static function get() { return self::$dbh; }


}
