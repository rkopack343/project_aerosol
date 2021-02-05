<?php

class database {

	private static $dbh = null;

	public static function init() {
		$filePath = "temp.db";

		self::$dbh = new PDO("sqlite:$filePath");
	}

	public static function get() { return self::$dbh; }


}
