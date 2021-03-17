<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
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
		$aeroModel = Aero::where('uuidKey',$code)->firstOrFail();

		return View::make('overlaycontroller.codeView',
		[
			'code' => $code,
			'model' => $aeroModel
		]);
	}

	public function codeGenerate(Request $request) {

		$urlBottom = $request->input('bottom');
		$urlTop = $request->input('top');

		$data = [];
		$data['urlBottom'] = $urlBottom;
		$data['urlTop'] = $urlTop;

		$newAero = new Aero;
		$newAero->uuidKey = Str::uuid();
		$newAero->data = $data;
		$newAero->save();

		return View::make('overlaycontroller.codeGenerate',
		[
			'code' => $newAero->uuidKey,
			'data' => $newAero
		]);
	}

}
