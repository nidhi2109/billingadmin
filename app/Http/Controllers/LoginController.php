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

		    return redirect()->route('login');
		}

        $result = $client->call("getUserId", array("arg0" => $name));
//		return $result;
        if ($client->fault) {
            \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">Invalid Username</p>
                                 <div class="clearfix"></div>
                              </div>');

            return redirect()->route('login'); 
        }
        else {
            $error = $client->getError();
            if ($error) {
                \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">'.$error.'.</p>
                                 <div class="clearfix"></div>
                              </div>');

               return redirect()->route('login');
            }
            else {
              //if name valid then check password

              //if password correct then only store in session username n password n role
              $userid=$result['return'];
              $result = $client->call("getUserWS", array("arg0" => $userid));
              if ($client->fault) {
                  \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
                                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                       <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">'.$client->fault.'.</p>
                                       <div class="clearfix"></div>
                                    </div>');

                  return redirect()->route('login');          
              }else{
                  $actualpassword=$result['return']['password'];

//                  return $result;
                //if($actualpassword==md5($password)){
                  //set session n redirect
                  $role=$result['return']['role'];
                  $request->session()->put('name', $name);
                  $request->session()->put('userid', $userid);
                  $request->session()->put('role', $role);
                  if($role=="Customer"){
                    return redirect()->route('consumerdashboard');
                  }else if($role=="Agent") {
                    return redirect()->route('agentdashboard');
                  }else if($role=="Super user") {
                    return redirect()->route('admindashboard');
                  }
                // }else{
                //   \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
                //                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                //                  <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">Opps! Invalid Username or Password.</p>
                //                  <div class="clearfix"></div>
                //               </div>');

                //   return redirect()->route('login');
                // }
                exit;
              }
                
            }
        }   
        // $result = $client->call("getUserWS", array("arg0" => 10845));
        // if ($client->fault) {
        //     \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
        //                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        //                          <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">'.$client->fault.'.</p>
        //                          <div class="clearfix"></div>
        //                       </div>');

        //     return redirect()->route('login');          
        // }
        // else {
        //     $error = $client->getError();
        //     if ($error) {
        //         \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
        //                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        //                          <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">'.$error.'.</p>
        //                          <div class="clearfix"></div>
        //                       </div>');

        //        return redirect()->route('login');
        //     }
        //     else {
        //        $role=$result['return']['mainRoleId'];
        //        $request->session()->put('role', 4);
        //        $request->session()->put('name', 'hiral');
        //        return redirect()->route('consumerdashboard');
        //        //based on role redirect to thier dashboard [pending]

        //     }
        // }

        \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">Opps! Invalid Username or Password.</p>
                                 <div class="clearfix"></div>
                              </div>');

        return redirect()->route('login');
   }
    public function logoutuser(Request $request){
      $request->session()->flush();
      return redirect()->route('login');
    }
}