<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use \App\Models\Aerosol\Aero as Aero;


class OverlayController extends Controller
{

	public function test() {
		echo phpinfo();
	}

	public function landing() {

		return View::make('overlaycontroller.landing');
	}

	public function codeView($code) {
		// Retrieve the code from database;
		$imageData = Aero::where('key',$code)->get();

		return View::make('overlaycontroller.codeView',
		[
			'code' => $code,
			'data' => $imageData
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
