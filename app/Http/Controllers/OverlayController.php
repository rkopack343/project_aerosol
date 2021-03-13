<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use \App\Models\Aerosol\Aero as Aero;


class OverlayController extends Controller
{

	/*public function test() {

		foreach( Aero::all() as $aero ) {
			echo $aero->key; echo PHP_EOL;
			echo "data:";
			echo $aero->data; echo PHP_EOL;
			echo "json:";
			echo $aero->getParsedJson(); echo PHP_EOL;
			echo PHP_EOL;
		}
	}*/

	public function landing() {

		return View::make('overlaycontroller.landing');
	}

	public function codeView($code) {

		$data = json_decode(base64_decode($code),true);

		return View::make('overlaycontroller.codeView',
			[
				'code' => $code,
				'data' => $data
			]);
	}

	public function codeGenerate(Request $request) {

		$urlBottom = $request->input('bottom');
		$urlTop = $request->input('top');

		$data = [];
		$data['urlBottom'] = $urlBottom;
		$data['urlTop'] = $urlTop;

		$json = json_encode($data);
		$baseEncoded = base64_encode($json);

		return View::make('overlaycontroller.codeGenerate',['code' => $baseEncoded]);
	}

}
