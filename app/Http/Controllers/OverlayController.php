<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class OverlayController extends Controller
{

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
