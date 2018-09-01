<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Utility;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use Exception;

class OrderController extends Controller {
    public $client;

    public function __construct()
    {
        $this->client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
        $this->client->setCredentials("billingadmin;20", "123qwe", "basic");
    }
	public function index(Request $request)
    {
        try {
        	$client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
        	$client->setCredentials("billingadmin;20", "123qwe", "basic");
        	$result = $client->call("getOrder", array("arg0" => 108704));
            $orders = $result['return'];
            // echo '<pre>';
            // print_r($orders);
            // echo $orders['id'].'<br>';
            // exit;
            $userid=$orders['userId'];
            $result = $client->call("getUserWS", array("arg0" => $userid));
	        if ($client->fault) {
	            echo "<h2>Fault</h2>";
	            print_r($result);
	        }
	        else {
	            $error = $client->getError();
	            if ($error) {
	                echo "<h2>Error</h2><pre>" . $error . "</pre>";
	            }
	            else {
	               
	                $username=$result['return']['contact']['firstName'].' '.$result['return']['contact']['lastName'];
	                $companyname=$result['return']['companyName'];
	            }
	        }
            $orders['customername']=$username;
            $orders['companyname']=$companyname;
            if (isset($result['faultstring'])) {
                \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">' . $result['faultstring'] . '.</p>
                               <div class="clearfix"></div>
                            </div>');

                return redirect()->route('admindashboard');
            }

            return view('admin.order.list', ['orders' => $orders]);
        } catch (Exception $e) {
        
            return redirect()->route('admindashboard')->with("errorMsg", $e->getMessage());
        }

    }
     public function create()
    {
         $result = $this->client->call("getUserList");
        if ($this->client->fault) {
            echo '<br> fault';
            print_r($this->client->fault);         
        }
        else {
            $error = $this->client->getError();
            if ($error) {
              echo $error;
            }
            else {
               
                $consumer=$result['return'];
              
               
            }
        }
         return view('admin.order.create', ['consumer' => $consumer]);
    }
     public function createorder($id)
    {
       
         return view('admin.order.createorder', ['consumer' => $id]);
    }


    public function applyinvoice($id)
    {
        $client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
        $client->setCredentials("billingadmin;20", "123qwe", "basic");
        $result = $client->call("getOrder", array("arg0" => $id));
        $orders = $result['return'];
        $date=date("Y-m-d\TH:i:s\Z");
        $date = strtotime($date);
        $date = strtotime("+7 day", $date);
        $duedate= date('Y-m-d', $date);
        $date=date("Y-m-d\TH:i:s\Z");

        $invoice=array('balance' => $orders['orderLines']['amount'],
            'carriedBalance'=>"0E-10",
            'createDateTime' => $date,
            'createTimeStamp' => $date,
            'currencyId' => 20,
            'deleted' => 0,
            'dueDate' => $duedate,
            'inProcessPayment' => 1,
            'invoiceLines' => array
                (
                    'amount' => $orders['orderLines']['amount'],
                    'deleted' => 0,
                    'description' => $orders['orderLines']['description'],
                    'isPercentage' => 0,
                    'itemId' => $orders['orderLines']['itemId'],
                    'price' => $orders['orderLines']['price'],
                    'quantity' => $orders['orderLines']['quantity'],
                    'sourceUserId' => $orders['userId'],
                ),

            'isReview' => 0,
            'orders' => $orders['id'],
            'paymentAttempts' => 0,
            'statusDescr'=> $orders['statusStr'],
            'statusId' => $orders['statusId'],
            'toProcess' => 1,
            'total' => $orders['total'],
            'userId' => $orders['userId'],
        );
        $result = $this->client->call("applyOrderToInvoice",array('arg0'=>$id,'arg1'=>$invoice));
        if ($this->client->fault) {
                return redirect()->route('adminDashboard')->withError($result['faultstring']);
        }
        else {
            $error = $this->client->getError();
            if ($error) {
                 return redirect()->route('adminDashboard')->withError($error);
            }
            else {
                 return redirect()->route('adminorder')->withSuccess("msg", "Apply Invoice to order successfully."); 
            }
        }

        //redirect to particular invoice view page
    }


    public function generateinvoice($id)
    {
        try {
            $result = $this->client->call("createInvoiceFromOrder", array('arg0'=>$id));
            if ($this->client->fault) {
                return redirect()->route('adminDashboard')->withError($result['faultstring']);
            }
            else {
                $error = $this->client->getError();
                if ($error) {
                    return redirect()->route('adminDashboard')->withError($error);
                }
                else {
                    // echo $invoiceid=$result['return'];exit;
                    //redirect to particular invoice view page 
                    return redirect()->route('adminorder')->withSuccess("msg", "Invoice Generated successfully."); 
                }
            }
          } catch (Exception $e) {
            return redirect()->route('admindashboard')->withError($e->getMessage());
        }
    }

    public function view($id)
    {

          try {
            $client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
            $client->setCredentials("billingadmin;20", "123qwe", "basic");
            $result = $client->call("getOrder", array("arg0" => $id));
            $orders = $result['return'];
          
            $userid=$orders['userId'];
            $result = $client->call("getUserWS", array("arg0" => $userid));
        
            if ($client->fault) {
               return redirect()->route('adminDashboard')->withError($result['faultstring']);
            }
            else {
                
                   $uname=$result['return']['userName'];
                    $username=$result['return']['contact']['firstName'].' '.$result['return']['contact']['lastName'];
                    $companyname=$result['return']['companyName'];
               
            }
            $orders['customername']=$username;
            $orders['companyname']=$companyname;
            $orders['username']=$uname;
           // print_r($orders);exit;
            return view('admin.order.view', ['orders' => $orders]);
        } catch (Exception $e) {
        
            return redirect()->route('adminDashboard')->with("errorMsg", $e->getMessage());
        }
    }

     public function downloadCSV()
    {
        $result = $this->client->call("getOrder", array("arg0" => 108704));
        $orders = $result['return'];
        $filename = "orders.csv";
        $handle = fopen($filename, 'w+');
      
        $userid=$orders['userId'];
        $result = $this->client->call("getUserWS", array("arg0" => $userid));
        if ($this->client->fault) {
             return redirect()->route('adminDashboard')->withError($result['faultstring']);
        }
        else {
            $error = $this->client->getError();
            if ($error) {
                 return redirect()->route('adminDashboard')->withError($error);
            }
            else {
               
                $username=$result['return']['contact']['firstName'].' '.$result['return']['contact']['lastName'];
                $companyname=$result['return']['companyName'];
            }
        }
        $orders['customername']=$username;
          fputcsv($handle, array('id', 'userId', 'userName','status','period','billingType','currency','total','activeSince','activeUntil','cycleStart','createdDate','nextBillableDay','isMainSubscription','notes','lineItemId','lineProductCode','lineQuantity','linePrice','lineAmount','lineDescription'));
          $date=date('Y-m-d',strtotime($orders['createDate']));
          $nextdate=date('Y-m-d',strtotime($orders['nextBillableDay']));
          if($orders['currencyId']==20)
            $currency="Indian Rupees";
        // foreach ($categories as $row) {
            fputcsv($handle, array($orders['id'], $orders['userId'], $orders['customername'],$orders['statusStr'],$orders['periodStr'],$orders['billingTypeStr'],$currency,$orders['total'],$orders['activeSince'],'','',$date,$nextdate,'','',$orders['orderLines']['itemId'],'',$orders['orderLines']['quantity'],$orders['orderLines']['price'],$orders['orderLines']['amount'],$orders['orderLines']['description']));
        // }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );
        return Response::download($filename, 'orders.csv', $headers);
    }
    
	 
}