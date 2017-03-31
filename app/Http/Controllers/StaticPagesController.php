<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class StaticPagesController extends Controller {
	public function home() {
		return view('static_pages/home');
		//return "主页";
	}

	public function help() {
		return view('static_pages/help');
		//return "帮助页";
	}

	public function about() {
		return view('static_pages/about');
		//return "关于页";
	}
}
