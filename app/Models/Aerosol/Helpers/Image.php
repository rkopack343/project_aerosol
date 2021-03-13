<?php
namespace App\Models\Aerosol\Helpers;

use App\Models\Aerosol\Helpers\PlaneCoordinates as Coordinates;


/**
 * Helper class to represent a single Image for Project Aerosol. This includes the image URL, its coordinates on a 2d plane,
 * as well as its rotation (screen up being 0 degrees) and opacity
 *
 * @param string $imageURL			The Image URL of the image to display
 * @param Coordinates $coordinates	A Coordinates object that represents the images location on a 2d plane
 * @param string|int $rotation		The rotation of the image in degrees, ostensibly between 0 and 359
 * @param string|int $opacity		The opacity of the image ostenibly from 0 (invisible) to 100 (fully visible).
 *
 *
 */
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
