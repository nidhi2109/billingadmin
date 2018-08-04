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
        $result = $client->call("getUserId", array("arg0" => "hiral"));
        if ($client->fault) {
            echo "<h2>Fault</h2><pre>";
            print_r($result);
            echo "</pre>";
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo "<h2>Error</h2><pre>" . $error . "</pre>";
            }
            else {
                echo "<pre>";
                print_r($result);
                echo "</pre>";
            }
        }
        //10810
        //***********************************************************
        //get data of specific user
        $result = $client->call("getUserWS", array("arg0" => 10845));
        if ($client->fault) {
            echo "<h2>Fault</h2><pre>";
            print_r($result);
            echo "</pre>";
        }
        else {
            $error = $client->getError();
            if ($error) {
                echo "<h2>Error</h2><pre>" . $error . "</pre>";
            }
            else {
                echo "<pre>";
                print_r($result);
                echo "</pre>";
            }
        }
         echo '<br>==================================';

        echo '<br>================================<br>';
        echo 'getUserWS get particular user data (pass userid)';
         $result = $client->call("getUserList");
        if ($client->fault) {
            print_r($client->fault);         
        }
        else {
            $error = $client->getError();
            if ($error) {
              echo $error;
            }
            else {
                echo "<pre>";
                print_r($result);
                echo "</pre>";
               
            }
        }
         echo '<br>================================<br>';
        echo 'invoices details (pass particular invoiceid)';
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
                echo "<pre>";
                print_r($result);
                echo "</pre>";
               
            }
        }

         echo '<br>================================<br>';
        echo 'getPayment details (pass particular paymentid)';
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
                echo "<pre>";
                print_r($result);
                echo "</pre>";
               
            }
        }


        echo '<br>================================<br>';
        echo 'getLatestInvoiceResponse details (pass particular userid)';
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
                echo "<pre>";
                print_r($result);
                echo "</pre>";
               
            }
        }

        echo '<br>================================<br>';
        echo 'getLatestPayment details (pas particular userid) ';
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
                echo "<pre>";
                print_r($result);
                echo "</pre>";
               
            }
        }
        echo '<br>================================<br>';
        echo 'getLastPayments details (not working)';
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
                echo "<pre>";
                print_r($result);
                echo "</pre>";
               
            }
        }

        echo '<br>================================<br>';
        echo 'getOrder details (pass particular orderid)';
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
                echo "<pre>";
                print_r($result);
                echo "</pre>";
               
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
        echo '<br>================================<br>';
        echo 'update user data details (not working)';
         $result = $client->call("updateUser", $user);
        if ($client->fault) {
            print_r($client->fault);         
        }
        else {
            $error = $client->getError();
            if ($error) {
              echo $error;
            }
            else {
                echo "<pre>";
                print_r($result);
                echo "</pre>";
               
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
        echo '<br>================================<br>';
        echo 'update user contact data details (not working)';
         $result = $client->call("updateUserContact", $user);
        if ($client->fault) {
            print_r($client->fault);         
        }
        else {
            $error = $client->getError();
            if ($error) {
              echo $error;
            }
            else {
                echo "<pre>";
                print_r($result);
                echo "</pre>";
               
            }
        }

        echo '<br>================================<br>';
        echo 'update user contact data details (not working)';
         $result = $client->call("updateUserContact", $user);
        if ($client->fault) {
            print_r($client->fault);         
        }
        else {
            $error = $client->getError();
            if ($error) {
              echo $error;
            }
            else {
                echo "<pre>";
                print_r($result);
                echo "</pre>";
               
            }
        }
        exit;
    }
}
