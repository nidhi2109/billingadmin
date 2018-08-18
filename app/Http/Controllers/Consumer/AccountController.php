<?php

namespace App\Http\Controllers\Consumer;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller {

    public function index(Request $request){
        $userid = $request->session()->get('userid');
        $client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
        $client->setCredentials("billingadmin;20","123qwe","basic");
        $result = $client->call("getUserWS", array("arg0" => $userid));
        if ($client->fault) {
            \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">'.$client->fault.'.</p>
                               <div class="clearfix"></div>
                            </div>');

            return redirect()->route('consumerDashboard');
        }else{

            return view('consumer.account')->with('account', $result);
        }
    }

    public function regform(){
        return view('consumer.registration');
    }
    public function saveData(Request $request){
        $client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
        $client->setCredentials("billingadmin;20","123qwe","basic");

        $error = $client->getError();
        if ($error) {
            \Session::flash('message', '<div class="alert alert-success alert-dismissable">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 <i class="></i><p class="pull-left">'.$error.'</p>
                                 <div class="clearfix"></div>
                              </div>');

            return redirect()->route('consumeRegistration');
        }

        $username = $request->input('loginname');
        $password = md5($request->input('password'));
        $balance_type = $request->input('balance_type');
        $prefered_type = $request->input('prefered_type');
        $address1 = $request->input('address1');
        $address2 = $request->input('address2');
        $city = $request->input('city');
        $country = $request->input('country');
        $email = $request->input('email');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $organizationname = $request->input('organizationname');
        $notes = $request->input('notes');
        $pincode = $request->input('pincode');
        $state = $request->input('state');
        $currency = $request->input('currency');
        $language = $request->input('language');
        $date=date("Y-m-d\TH:i:s\Z");
        $phonenumber = $request->input('phonenumber');
        $include=$request->input('include_in_noti');
        if($include=="on")
            $include="true";
        if($include=="")
            $include="false";
        $contacttype = $request->input('contacttype');
        $contactdesc="";
        if($contacttype==20){
            $contactdesc="Primary";
        }else{
            $contactdesc="Secondary";
        }
        $user=array(
            "companyName"=>"AMRDemo",
            "contact"=>array("address1"=>$address1,
                "address2"=>$address2,
                "city"=>$city,
                "contactTypeDescr"=>$contactdesc,
                "contactTypeId"=>$contacttype,
                "countryCode"=>"IN",
                "createDate"=>$date,
                "deleted"=>0,
                "email"=>$email,
                "firstName"=>$firstname,
                "include"=>$include,
                "lastName"=>$lastname,
                "organizationName"=>$organizationname,
                "postalCode"=>$pincode,
                "stateProvince"=>$state,
                "phoneNumber"=>$phonenumber,
                "phoneAreaCode"=>"079",
            ),
            "createDatetime"=>$date,
            "deleted"=>0,
            "mainRoleId"=>5,
            "password"=>$password,
            "role"=>"Customer",
            "status"=>"Active",
            "statusId"=>1,
            "userName"=>$username,
            "currencyId"=>20

        );


        $result = $client->call("createUser", array("arg0" => $user));

        if ($client->fault) {

            \Session::flash('message', '<div class="alert alert-success alert-dismissable">
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               <i class="></i><p class="pull-left">'.$result.'</p>
                               <div class="clearfix"></div>
                            </div>');

            return redirect()->route('consumerregisteration');
        }
        else {
            \Session::flash('message', '<div class="alert alert-success alert-dismissable">
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               <i class="></i><p class="pull-left">Registeration Successfully.Please Login</p>
                               <div class="clearfix"></div>
                            </div>');

            return redirect()->route('login');
        }
    }
    public function editdata(Request $request){
        $userid=\Request::segment(4);
        $client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
        $client->setCredentials("billingadmin;20","123qwe","basic");

        $result = $client->call("getUserWS", array("arg0" => $userid));
        if ($client->fault) {
            \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">'.$client->fault.'.</p>
                       <div class="clearfix"></div>
                    </div>');

            return redirect()->route('consumerDashboard');
        }else{

            return view('consumer.editaccount')->with(array('account'=>$result,'id'=>$userid));
        }
    }
    public function editsavedata(Request $request){
        $userid=\Request::segment(4);
        $client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
        $client->setCredentials("billingadmin;20","123qwe","basic");

        $error = $client->getError();
        if ($error) {
            \Session::flash('message', '<div class="alert alert-success alert-dismissable">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 <i class="></i><p class="pull-left">'.$error.'</p>
                                 <div class="clearfix"></div>
                              </div>');

            return redirect()->route('consumerRegistration');
        }

        $username = $request->input('loginname');
        $password = md5($request->input('password'));
        $balance_type = $request->input('balance_type');
        $prefered_type = $request->input('prefered_type');
        $address1 = $request->input('address1');
        $address2 = $request->input('address2');
        $city = $request->input('city');
        $country = $request->input('country');
        $email = $request->input('email');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $organizationname = $request->input('organizationname');
        $notes = $request->input('notes');
        $pincode = $request->input('pincode');
        $state = $request->input('state');
        $currency = $request->input('currency');
        $languageid = $request->input('language');
        $date=date("Y-m-d\TH:i:s\Z");

        $include=$request->input('include_in_noti');
        $creditLimit=$request->input('credit_limit');
        $excludeageing=$request->input('exclude_ageing');
        $isparent=$request->input('allow_sub_account');
        $invoicechild=$request->input('invoice_child');
        $statusId=$request->input('status');
        $subscriberStatusId=$request->input('subscriberstatus');
        $autorecharge_threshold=$request->input('autorecharge_threshold');

        $parentid=$request->input('parentid');
        $partnerid=$request->input('partnerid');
        $invoice_delivery_method=$request->input('invoice_delivery_method');
        $card_name=$request->input('card_name');
        $card_number=$request->input('card_number');
        $ach_routing=$request->input('ach_routing');
        $account_number=$request->input('account_number');
        $bank_name=$request->input('bank_name');
        $customer_name=$request->input('customer_name');
        $account_type=$request->input('account_type');
        $status='';
        if($statusId==1){
            $status="Active";
        }
        else if($statusId==2){
            $status="Overdue";
        }
        else if($statusId==3){
            $status="Overdue 2";
        }
        else if($statusId==4){
            $status="Overdue 3";
        }
        else if($statusId==5){
            $status="Suspended";
        }
        else if($statusId==6){
            $status="Suspended 2";
        }
        else if($statusId==7){
            $status="Suspended 3";
        }
        $language="";
        if($language==1){
            $language="English";
        }else if($language==2){
            $language="French";
        }
        $securityCode='';
        $type='';
        $expiry='';
        $dateexpiry='';
        $parentId='';
        $partnerId='';
        $user=array(
            "ach"=>array("abaRouting"=>$ach_routing,
                "accountName"=>$customer_name,
                "accountType"=>$account_type,
                "bankAccount"=>$account_number,
                "bankName"=>$bank_name
            ),
            "autoRechargeAsDecimal"=>$autorecharge_threshold,
            "automaticPaymentType"=>$prefered_type,
            "balanceType"=>$balance_type,
            "companyName"=>"AMRDemo",
            "contact"=>array("address1"=>$address1,
                "address2"=>$address2,
                "city"=>$city,
                "countryCode"=>$country,
                "createDate"=>$date,
                "deleted"=>0,
                "email"=>$email,
                "firstName"=>$firstname,
                "id"=>$userid,
                "include"=>$include,
                "lastName"=>$lastname,
                "organizationName"=>$organizationname,
                "postalCode"=>$pincode,
                "stateProvince"=>$state,
            ),
            "createDatetime"=>$dateexpiry,
            "creditCard"=>array("expiry"=>$expiry,
                "name"=>$card_name,
                "number"=>$card_number,
                "securityCode"=>$securityCode,
                "type"=>$type,
            ),
            "invoiceDeliveryMethodId"=>$invoice_delivery_method,
            "creditLimit"=>"0E-10",
            "creditLimitAsDecimal"=>$creditLimit,
            "currencyId"=>$currency,
            "deleted"=>0,
            "excludeAgeing"=>$excludeageing,
            "invoiceChild"=>$invoicechild,
            "isParent"=>$isparent,
            "languageId"=>$languageid,
            "language"=>$language,
            "mainRoleId"=>5,
            "notes"=>$notes,
            "password"=>$password,
            "role"=>"Customer",
            "status"=>$status,
            "statusId"=>$statusId,
            "subscriberStatusId"=>$subscriberStatusId,
            "userName"=>$username,
            "parentId"=>$parentId,
            "partnerId"=>$partnerId

        );
        $result = $client->call("updateUser", array("arg0" => $user));

        if ($client->fault) {
            \Session::flash('message', '<div class="alert alert-success alert-dismissable">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 <i class="></i><p class="pull-left">'.$client->fault.'</p>
                                 <div class="clearfix"></div>
                              </div>');

            return redirect()->route('consumerRegistration');
        }
        else {
            \Session::flash('message', '<div class="alert alert-success alert-dismissable">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 <i class="></i><p class="pull-left">Account Details updated successfully</p>
                                 <div class="clearfix"></div>
                              </div>');

            return redirect()->route('consumerAccount', ['id' => $userid]);
        }
    }
}