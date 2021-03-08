<?php
namespace Aerosol;

use Aerosol\Helper\Image as Image;

class Aero implements \JsonSerializable {
		private Image $background,$foreground;


		public function __construct(Image $background,Image $foreground) {
			$this->background = $background;
			$this->foreground = $foreground;
		}


		public function jsonSerialize() {
			return $this->getObjectValue();
		}


		private function getObjectValue() : array {
			$objValue = [];
			$objValue['bg'] = $this->background;
			$objValue['fg'] = $this->foreground;

			return $objValue;
		}
}
