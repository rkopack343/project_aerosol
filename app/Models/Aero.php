<?php
namespace Aerosol;

use Aerosol\Helper\Image as Image;
use Illuminate\Database\Eloquent\Model;

class Aero extends Model implements \JsonSerializable {

		protected $table = 'aero';
		protected $primaryKey = 'key';
		protected $keyType ='string';
		public $incrementing = 'false';

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
