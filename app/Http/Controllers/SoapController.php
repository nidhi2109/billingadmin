<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class SoapController extends Controller
{
    public function __construct() {
    }

    public function server() {
        // NuSOAP service code here
        $client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
        $client->setCredentials("billingadmin;20","123qwe","basic");

        $error = $client->getError();
        if ($error) {
            echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
        }
        //get user id
        // getUserId
        echo '************************************************<br>';
        echo 'Pass User name to get User id eg : hiral<br>';
        echo '************************************************<br>';
        echo '<pre>';
        $result = $client->call("getUserId", array("arg0" => "hiral"));
        if ($client->fault) {
            echo "<h2>Fault</h2><pre>";
            print_r($result);

        }
        else {
            $error = $client->getError();
            if ($error) {
                echo "<h2>Error</h2><pre>" . $error . "</pre>";
            }
            else {

                print_r($result);

            }
        }
        // $user=array(
        //     "autoRecharge"=>"0E-10",
        //     "autoRechargeAsDecimal"=>"0.0000000000",
        //     "automaticPaymentType"=>1,
        //     "balanceType"=>1,
        //     "companyName"=>"AMRDemo",
        //     "contact"=>array("address1"=>"nvs",
        //                     "city"=>"navsari",
        //                     "countryCode"=>"IN",
        //                     "createDate"=>"2017-09-26T08:40:59Z",
        //                     "deleted"=>0,
        //                     "email"=>"g@g.com",
        //                     "firstName"=>"hina",
        //                     "id"=>113920,
        //                     "include"=>"false",
        //                     "lastName"=>"patel",
        //                     "organizationName"=>"Billng Company",

        //                     "phoneNumber"=>1234567890,
        //                     "postalCode"=>386445,
        //                     "stateProvince"=>"TS",
        //                     ),
        //         "createDatetime"=>"2017-09-26T08:40:59Z",
        //         "creditLimit"=>"0E-10",
        //         "creditLimitAsDecimal"=>"0.0000000000",
        //         "currencyId"=>20,
        //         "customerId"=>107309,
        //         "deleted"=>1,
        //         "dueDateUnitId"=>3,
        //         "dynamicBalance"=>"0E-10",
        //         "excludeAgeing"=>"false",
        //         "failedAttempts"=>0,
        //         "invoiceChild"=>"false",
        //         "isParent"=>"false",
        //         "language"=>"English",
        //         "languageId"=>1,
        //         "lastLogin"=>"2017-09-26T08:40:59Z",
        //         "lastStatusChange"=>"2017-09-26T08:40:59Z",
        //         "mainRoleId"=>5,
        //         "nextInvoiceDate"=>"2017-08-01T00:00:00Z",
        //         "notes"=>"test",
        //         "password"=>"46f94c8de14fb36680850768ff1b7f2a",
        //         "role"=>"Customer",
        //         "status"=>"Active",
        //         "statusId"=>1,
        //         "subscriberStatusId"=>1,
        //         "useParentPricing"=>"false",
        //         "userName"=>"raju",
        // );
        echo '************************************************<br>';
        echo "Create User <br>";
        echo '************************************************<br>';
        $date=date("Y-m-d\TH:i:s\Z");
        $user=array("ach"=>array("abaRouting"=>"1111111111",
            "accountName"=>"saving",
            "accountType"=>1,
            "bankAccount"=>"a10005",
            "bankName"=>"hdfc"

        ),
            "autoRecharge"=>"0.00",
            "automaticPaymentType"=>1,
            "balanceType"=>1,
            "companyName"=>"AMRDemo",
            "contact"=>array("address1"=>"nvs",
                "city"=>"navsari",
                "countryCode"=>"US",
                "createDate"=>"$date",
                "deleted"=>0,
                "email"=>"raju@gmail.com",
                "firstName"=>"raju",
                "include"=>"true",
                "lastName"=>"patel",
                "organizationName"=>"demo",
                "phoneNumber"=>"1234567890",
                "postalCode"=>"386445",
                "stateProvince"=>"gujarat",
            ),
            "createDatetime"=>date('Y-m-d'),
            "creditCard"=>array(
                "expiry"=>"0493",
                "name"=>"visa",
                "number"=>"1234567890",
            ),
            "creditLimit"=>"2000",
            "currencyId"=>20,
            "dueDateUnitId"=>1,
            "dueDateValue"=>1,
            "excludeAgeing"=>"true",
            "invoiceChild"=>"true",
            "invoiceDeliveryMethodId"=>1,
            "isParent"=>"true",
            "language"=>"english",
            "languageId"=>1,
            "mainRoleId"=>5,
            "notes"=>"test",
            "parentId"=>1,
            "partnerId"=>1,
            "password"=>"123qwe",
            "role"=>"Customer",
            "status"=>1,
            "statusId"=>1,
            "subscriberStatusId"=>1,
            "useParentPricing"=>"true",
            "userName"=>"rajupatel2109",
        );
        echo '<br> sample data<br>';
        var_dump($user);
        $result = $client->call("createUser", array("arg0" => $user));

        if ($client->fault) {
            echo "<br> fault <br>";
            print_r($result);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                echo "insert<br>";
                print_r($result);

            }
        }

        //10810
        //***********************************************************
        //get data of specific user
        echo '************************************************<br>';
        echo "Get specific user details id =10845<br>";
        echo '************************************************<br>';
        $result = $client->call("getUserWS", array("arg0" => 10845));
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

                print_r($result);

            }
        }
        echo '************************************************<br>';
        echo "GET ALL LIST OF USER<br>";
        echo '************************************************<br>';
        $result = $client->call("getUserList");
        if ($client->fault) {
            echo '<br> fault';
            print_r($client->fault);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }
        echo '************************************************<br>';
        echo "GET ALL LIST OF item<br>";
        echo '************************************************<br>';
        $result = $client->call("getAllItems");
        if ($client->fault) {
            print_r($result);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }

        echo '************************************************<br>';
        echo "GET ALL LIST OF getAllItemCategories<br>";
        echo '************************************************<br>';
        $result = $client->call("getAllItemCategories");
        if ($client->fault) {
            print_r($result);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }
        echo '************************************************<br>';
        echo 'invoices details (pass particular invoiceid 9204) <br>';
        echo '************************************************<br>';
        $result = $client->call("getInvoiceWS", array("arg0" => 9204));
        if ($client->fault) {
            print_r($client->fault);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }

        echo '************************************************<br>';
        echo 'getPayment details (pass particular paymentid 1900)<br>';
        echo '************************************************<br>';
        $result = $client->call("getPayment", array("arg0" => 1900));
        if ($client->fault) {
            print_r($client->fault);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }


        echo '************************************************<br>';
        echo 'getLatestInvoiceResponse details (pass particular userid)<br>';
        echo '************************************************<br>';
        $result = $client->call("getLatestInvoice", array("arg0" => 10890));
        if ($client->fault) {
            print_r($client->fault);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }

        echo '************************************************<br>';
        echo 'getLatestPayment details (pas particular userid)<br> ';
        echo '************************************************<br>';
        $result = $client->call("getLatestPayment", array("arg0" => 10890));
        if ($client->fault) {
            print_r($client->fault);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }
        echo '************************************************<br>';
        echo 'getLastPayments details (not working)<br>';
        echo '************************************************<br>';
        $result = $client->call("getLastPayments", array("arg0" => 1900));
        if ($client->fault) {
            print_r($client->fault);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }
        echo '************************************************<br>';
        echo 'getLastInvoice details (not working)<br>';
        echo '************************************************<br>';
        $result = $client->call("getLastPayments", array("arg0" => 1900));
        if ($client->fault) {
            print_r($client->fault);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }

        echo '************************************************<br>';
        echo 'getOrder particular order details (pass particular orderid108704 )<br>';
        echo '************************************************<br>';
        $result = $client->call("getOrder", array("arg0" => 108704));
        if ($client->fault) {
            print_r($client->fault);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }
        $user=array(
            "autoRecharge"=>"0E-10",
            "autoRechargeAsDecimal"=>"0.0000000000",
            "automaticPaymentType"=>1,
            "balanceType"=>1,
            "companyName"=>"AMRDemo",
            "contact"=>array("address1"=>"nvs",
                "city"=>"navsari123",
                "countryCode"=>"IN",
                "createDate"=>"2017-09-26T08:40:59Z",
                "deleted"=>0,
                "email"=>"gmail@g.com",
                "firstName"=>"hinapatel",
                "id"=>113920,
                "include"=>"false",
                "lastName"=>"patel",
                "organizationName"=>"Billng Company",
                "phoneAreaCode"=>123,
                "phoneCountryCode"=>91,
                "phoneNumber"=>1234567890,
                "postalCode"=>386445,
                "stateProvince"=>"TS",
            ),
            "createDatetime"=>"2017-09-26T08:40:59Z",
            "creditLimit"=>"0E-10",
            "creditLimitAsDecimal"=>"0.0000000000",
            "currencyId"=>20,
            "customerId"=>107309,
            "deleted"=>1,
            "dueDateUnitId"=>3,
            "dynamicBalance"=>"0E-10",
            "excludeAgeing"=>"false",
            "failedAttempts"=>0,
            "invoiceChild"=>"false",
            "isParent"=>"false",
            "language"=>"English",
            "languageId"=>1,
            "lastLogin"=>"2017-09-26T08:40:59Z",
            "lastStatusChange"=>"2017-09-26T08:40:59Z",
            "mainRoleId"=>5,
            "nextInvoiceDate"=>"2017-08-01T00:00:00Z",
            "notes"=>"test",
            "owingBalance"=>"1353.0000000000",
            "password"=>"46f94c8de14fb36680850768ff1b7f2a",
            "role"=>"Customer",
            "status"=>"Active",
            "statusId"=>1,
            "subscriberStatusId"=>1,
            "useParentPricing"=>"false",
            "userName"=>"test_team_demo_1",
        );
        echo '************************************************<br>';
        echo 'update user data details (not working)<br>';
        echo '************************************************<br>';
        $result = $client->call("updateUser", $user);
        if ($client->fault) {
            print_r($result);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }
        $user=array("arg0"=>10901,"contact"=>array("address1"=>"nvs",
            "city"=>"navsari123",
            "countryCode"=>"IN",
            "createDate"=>"2017-09-26T08:40:59Z",
            "deleted"=>0,
            "email"=>"gmail@g.com",
            "firstName"=>"hinapatel",
            "id"=>113920,
            "include"=>"false",
            "lastName"=>"patel",
            "organizationName"=>"Billng Company",
            "phoneAreaCode"=>123,
            "phoneCountryCode"=>91,
            "phoneNumber"=>1234567890,
            "postalCode"=>386445,
            "stateProvince"=>"TS",
        ));
        // createOrder
        // getItem
        // applyOrderToInvoice
        echo '************************************************<br>';
        echo 'update user contact data details (not working)<br>';
        echo '************************************************<br>';
        $result = $client->call("updateUserContact", $user);
        if ($client->fault) {
            print_r($result);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }

        echo '<br>================================<br>';
        echo 'update user contact data details (not working)';
        $result = $client->call("updateUserContact", $user);
        if ($client->fault) {
            print_r($result);
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo $error;
            }
            else {

                print_r($result);


            }
        }
        echo '************************************************<br>';
        echo 'Generate invoice from order 109303 <br>';
        echo '************************************************<br>';
        // $result = $client->call("createInvoiceFromOrder", array('arg0'=>109303));
        // if ($client->fault) {
        //     print_r($result);
        // }
        // else {
        //     $error = $client->getError();
        //     if ($error) {
        //       echo $error;
        //     }
        //     else {

        //         print_r($result);


        //     }
        // }
        echo '************************************************<br>';
        echo 'apply to invoice of partiular order <br>';
        echo '************************************************<br>';
        $invoice=array('balance' => 2.0000000000,
            'carriedBalance'=>"0E-10",
            'createDateTime' => "2017-09-21T00:00:00Z",
            'createTimeStamp' => "2018-01-13T09:26:24Z",
            'currencyId' => 20,
            'deleted' => 0,
            'dueDate' => "2017-09-21T00:00:00Z",
            'id' => 9204,
            'inProcessPayment' => 1,
            'invoiceLines' => array
            (
                'amount' => "2.0000000000",
                'deleted' => 0,
                'description' => "Monthly Subscription Period from 01/07/2017 to 31/07/2017",
                'id' => 9306,
                'isPercentage' => 0,
                'itemId' => 3200,
                'price' => "2.0000000000",
                'primaryKey' => 9306,
                'quantity' => "1.0000000000",
                'sourceUserId' => 10890,
            ),

            'isReview' => 0,
            'number' => 29,
            'orders' => 108700,
            'paymentAttempts' => 1,
            'statusDescr'=> "Unpaid",
            'statusId' => 2,
            'toProcess' => 1,
            'total' => "2.0000000000",
            'userId' => 10890,
        );
        // $result = $client->call("applyOrderToInvoice",array('arg0'=>109304,'arg1'=>$invoice));
        // if ($client->fault) {
        //     print_r($result);
        // }
        // else {
        //     $error = $client->getError();
        //     if ($error) {
        //       echo $error;
        //     }
        //     else {

        //         print_r($result);


        //     }
        // }
        echo '************************************************<br>';
        echo 'apply payment invoice id 9805<br>';
        echo '************************************************<br>';
        $payment=array(
            'amount' => 522.0000000000,
            'amountAsDecimal' => 522.0000000000,
            'attempt' => 1,
            'balance' => "0E-10",
            'balanceAsDecimal' => 0.0000000000,
            'cheque' => array
            (
                'bank' => "ICICI",
                'date' => "2018-04-12T00:00:00Z",
                'id' => 1700,
                'number' => 123453363,
                'primaryKey' => 1700,
            ),

            'createDatetime' => "2018-04-12T05:53:48Z",
            'currencyId' => 20,
            'deleted' => 0,
            'id' => 1900,
            'invoiceIds'=> 9805,
            'isPreauth' => 0,
            'isRefund' => 0,
            'method' => "Cheque",
            'methodId' => 1,
            'paymentDate' => "2018-04-12T00:00:00Z",
            'resultId' => 4,
            'updateDatetime' => "2018-04-12T05:53:48Z",
            'userId' => 10890
        );
        // $result = $client->call("applyPayment",array('arg0'=>$payment,'arg1'=>9805));
        // if ($client->fault) {
        //     print_r($result);
        // }
        // else {
        //     $error = $client->getError();
        //     if ($error) {
        //       echo $error;
        //     }
        //     else {

        //         print_r($result);


        //     }
        // }
        echo '************************************************<br>';
        echo 'create order <br>';
        echo '************************************************<br>';
        $order=array(
            'activeSince' => "2017-07-01T00:00:00Z",
            'billingTypeId' => 2,
            'billingTypeStr' => "post paid",
            'createDate' => "2018-01-13T10:02:28Z",
            'createdBy' => 10810,
            'currencyId' => 20,
            'deleted' => 0,
            'dueDateUnitId' => 3,
            'generatedInvoices' => array
            (
                'balance' => 2.0000000000,
                'carriedBalance' => "0E-10",
                'createDateTime' => "2018-07-08T00:00:00Z",
                'createTimeStamp' => "2018-07-12T10:04:09Z",
                'currencyId' => 20,
                'deleted' => 0,
                'dueDate' => "2018-07-08T00:00:00Z",
                'id]'=> 9307,
                'inProcessPayment' => 1,
                'invoiceLines' => array
                (
                    'amount' => 2.0000000000,
                    'deleted' => 0,
                    'description' => "Monthly Subscription Period from 01/07/2017 to 31/07/2017",
                    'id' => 9412,
                    'isPercentage' => 0,
                    'itemId' => 3200,
                    'price' => 2.0000000000,
                    'primaryKey' => 9412,
                    'quantity' => 1.0000000000,
                    'sourceUserId' => 10891,
                ),

                'isReview' => 0,
                'number' => 37,
                'order' => 108704,
                'paymentAttempts' => 1,
                'statusId' => 2,
                'toProcess' => 1,
                'total' => 2.0000000000,
                'userId' => 10891,
            ),

            'id' => 108704,
            'isCurrent' => 0,
            'lastNotified' => "2018-01-13T10:02:51Z",
            'nextBillableDay' => "2017-08-01T00:00:00Z",
            'notesInInvoice' => 0,
            'notify' => 0,
            'orderLines' => array
            (
                'amount' => 2.0000000000,
                'amountAsDecimal' => 2.0000000000,
                'createDatetime' => "2018-01-13T10:02:28Z",
                'deleted' => 0,
                'description' => "Monthly Subscription",
                'editable' => "true",
                'id' => 208904,
                'itemId' => 3200,
                'orderId' => 108704,
                'price' => 2.0000000000,
                'priceAsDecimal' => 2.0000000000,
                'provisioningStatusId' => 2,
                'quantity' => 1.0000000000,
                'quantityAsDecimal' => 1.0000000000,
                'typeId' => 1,
                'useItem' => "true",
                'versionNum' => 1,
            ),

            'period' => 200,
            'periodStr' => "Monthly",
            'statusId' => 1,
            'statusStr' => "Active",
            'total' => 2.0000000000,
            'userId' => 10891,
            'versionNum' => 1,
        );
        // $result = $client->call("createOrder",array('arg0'=>$order));
        // if ($client->fault) {
        //     print_r($result);
        // }
        // else {
        //     $error = $client->getError();
        //     if ($error) {
        //       echo $error;
        //     }
        //     else {

        //         print_r($result);


        //     }
        // }

        echo '************************************************<br>';
        echo 'create payment <br>';
        echo '************************************************<br>';
        $payment=array(
            'amount' => 522.0000000000,
            'amountAsDecimal' => 522.0000000000,
            'attempt' => 1,
            'balance' => "0E-10",
            'balanceAsDecimal' => 0.0000000000,
            'cheque' => array
            (
                'bank' => "ICICI",
                'date' => "2018-04-12T00:00:00Z",
                'id' => 1700,
                'number' => 123453363,
                'primaryKey' => 1700,
            ),

            'createDatetime' => "2018-04-12T05:53:48Z",
            'currencyId' => 20,
            'deleted' => 0,
            'id' => 1900,
            'invoiceIds'=> 9805,
            'isPreauth' => 0,
            'isRefund' => 0,
            'method' => "Cheque",
            'methodId' => 1,
            'paymentDate' => "2018-04-12T00:00:00Z",
            'resultId' => 4,
            'updateDatetime' => "2018-04-12T05:53:48Z",
            'userId' => 10890
        );
        // $result = $client->call("createPayment",array('arg0'=>$payment));
        // if ($client->fault) {
        //     print_r($result);
        // }
        // else {
        //     $error = $client->getError();
        //     if ($error) {
        //       echo $error;
        //     }
        //     else {

        //         print_r($result);


        //     }
        // }

        echo '************************************************<br>';
        echo 'createItemCategory <br>';
        echo '************************************************<br>';
         $item=array('description'=>123,"orderLineTypeId"=>1);
          $result = $client->call("createItemCategory",array('arg0'=>$item));
         if ($client->fault) {
             print_r($result);
         }
         else {
             $error = $client->getError();
             if ($error) {
               echo $error;
             }
             else {

                 print_r($result);


             }
         }

        echo '************************************************<br>';
        echo 'addServiceAliasByOrder <br>';
        echo '************************************************<br>';

        //  $result = $client->call("addServiceAliasByOrder",array('arg0'=>109303,'arg1'=>'testing service'));
        // if ($client->fault) {
        //     print_r($result);
        // }
        // else {
        //     $error = $client->getError();
        //     if ($error) {
        //       echo $error;
        //     }
        //     else {

        //         print_r($result);


        //     }
        // }
        exit;
    }
}

?>