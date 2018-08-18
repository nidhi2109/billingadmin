<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

	public function index(Request $request){
		return view('login');
	}
	 public function checkdata(Request $request){
		$name = $request->input('username');
		$password = $request->input('password');
		
		//call api to get role of login user
		$client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true", "true");
		$client->setCredentials("billingadmin;20","123qwe","basic");

		$error = $client->getError();
		if ($error) {
		      \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
		                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                         <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">Error'.$error.'.</p>
		                         <div class="clearfix"></div>
		                      </div>');

		    return redirect()->route('login')->withError("Opps! ".$error);
		}


        $result = $client->call("getUserId", array("arg0" => $name));
//		return $result;
        if ($client->fault) {
            return redirect()->route('login')->withError("Opps! Invalid Username.");
        }
        else {
            $error = $client->getError();
            if ($error) {
               return redirect()->route('login')->withError("Opps! ".$error);
            }
            else {
              //if name valid then check password

              //if password correct then only store in session username n password n role
              $userid=$result['return'];
              $result = $client->call("getUserWS", array("arg0" => $userid));
              if ($client->fault) {
                  return redirect()->route('login')->withError($client->fault);
              }else {
                  $actualpassword = $result['return']['password'];

//                  return $result;
                  if ($actualpassword == md5($password) || $actualpassword == md5(md5($password))) {
                      //set session n redirect
                      $role = $result['return']['role'];
                      $request->session()->put('name', $name);
                      $request->session()->put('userid', $userid);
                      $request->session()->put('role', $role);
                      if ($role == "Customer") {
                          return redirect()->route('consumerDashboard')->withInfo("Welcome to Abill Dashboard.");
                      } else if ($role == "Agent") {
                          return redirect()->route('agentdashboard')->withInfo("Welcome to Abill Dashboard.");
                      } else if ($role == "Super user") {
                          return redirect()->route('adminDashboard')->withInfo("Welcome to Abill Dashboard.");
                      }
                      exit;
                  }
              }
                
            }
        }   

        return redirect()->route('login')->withError("Opps! Invalid Username or Password.");
   }
    public function logoutUser(Request $request){
      $request->session()->flush();
      return redirect()->route('login')->withSuccess("Logout Successfully.");
    }
}
