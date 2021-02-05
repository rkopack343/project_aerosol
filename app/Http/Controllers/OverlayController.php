<?php

namespace App\Http\Controllers;

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

	public function codeGenerate($bottom,$top) {
		$urlBottom = "https://i.imgur.com/$bottom.jpg";
		$urlTop = "https://i.imgur.com/$top.jpg";

		$data = [];
		$data['urlBottom'] = $urlBottom;
		$data['urlTop'] = $urlTop;

		$json = json_encode($data);
		$baseEncoded = base64_encode($json);

		return View::make('overlaycontroller.codeGenerate',['code' => $baseEncoded]);
	}

}
