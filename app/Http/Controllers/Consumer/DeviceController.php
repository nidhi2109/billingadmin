<?php

namespace App\Http\Controllers\Consumer;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeviceController extends Controller {

	public function index(Request $request){
		return view('consumer.device');
	}
	 
}