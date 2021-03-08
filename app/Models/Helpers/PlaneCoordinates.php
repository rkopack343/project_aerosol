<?php

namespace Aerosol\Helper;

/**
 * Helper class to contain Coordinates on a 2d plane. When called as a string, returns an json_encoded string with an 'x' and 'y' key
 *
 * @param string|int $x		The X position of the object
 * @param string|int $y 	The Y position of the object
 *
 */
final class PlaneCoordinates implements \JsonSerializable {
	private $x,$y;


	public function __construct($x,$y) {
		$this->x = $x;
		$this->y = $y;
	}


	public function jsonSerialize() {
		return $this->getObjectValue();
	}


	private function getObjectValue() : array {
		$objValue = [];
		$objValue['x'] = $this->x;
		$objValue['y'] = $this->y;

		return $objValue;
	}
}
