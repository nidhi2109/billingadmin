<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportController extends Controller {

	public function index(Request $request){
		return view('admin.report');
	}
	 
}