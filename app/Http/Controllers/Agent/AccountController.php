<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller {

	public function index(Request $request){
		return view('agent.account');
	}
	 
}