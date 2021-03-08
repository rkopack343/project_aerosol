<?php
namespace Aerosol\Helper;

use Aerosol\Helper\PlaneCoordinates as Coordinates;

class Image implements \JsonSerializable {
	protected string $imageURL;
	protected Coordinates $coordinates;
	protected $rotation;
	protected $opacity;


	public function __construct(string $imageURL, Coordinates $coordinates, $rotation, $opacity) {
		$this->imageURL = $imageURL;
		$this->$coordinates = $coordinates;
		$this->rotation = $rotation;
		$this->opacity = $opacity;
	}


	public function jsonSerialize() {
		return $this->getObjectValue();
	}


	private function getObjectValue() : array {
		$objValues = [];
		$objValues['image'] = $this->imageURL;
		$objValues['coordinates'] = $this->coordinates;
		$objValues['rotation'] = $this->rotation;
		$objValues['opacity'] = $this->opacity;

		return $objValues;
	}
}
