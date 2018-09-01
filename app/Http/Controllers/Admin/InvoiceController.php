<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Utility;

class InvoiceController extends Controller {

    public $client;

    public function __construct()
    {
        $this->client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
        $this->client->setCredentials("billingadmin;20", "123qwe", "basic");
    }

    public function index(Request $request)
    {
        try {
//            $result = $this->client->call("getInvoiceWS",array('arg0' => 9820));
            $result = $this->client->call("getLastInvoices",array('arg0' => 10900));
            return $result;

            if (isset($result['faultstring'])) {
                return redirect()->route('adminDashboard')->withError($result['faultstring']);
            }
            $categories = $result['return'];
            return view('admin.invoice.view', ['categories' => Utility::customPagination($categories, $request->url())]);
        } catch (Exception $e) {
            return redirect()->route('adminDashboard')->withError($e->getMessage());
        }

    }

    public function create()
    {
        return view('admin.invoice.create');
    }


    public function store(Request $request)
    {
        $item = $request->except('_token');
        $result = $this->client->call("createItemInvoice", array('arg0' => $item));
        if (isset($result) && !isset($result['faultstring'])) {
            return redirect()->route('invoice.index')->withSuccess("Record inserted successfully.");

        } else {
            return redirect()->route('invoice.index')->withError($result['faultstring']);
        }
    }


    public function show($id=9820)
    {
        try {
            $result = $this->client->call("getInvoiceWS",array('arg0' => $id));

            if (isset($result['faultstring'])) {
                return redirect()->route('adminDashboard')->withError($result['faultstring']);
            }
            $invoice = $result['return'];
//            return $invoice;
            $userId= $invoice['userId'];
            $customerResult = $this->client->call("getUserWS", array("arg0" => $userId));

            if (isset($customerResult['faultstring'])) {
                return redirect()->route('adminDashboard')->withError($customerResult['faultstring']);
            }
            $customer = $customerResult['return'];
//            return $customer;
            return view('admin.invoice.show', compact('invoice','customer'));
        } catch (Exception $e) {
            return redirect()->route('adminDashboard')->withError($e->getMessage());
        }
    }

    public function edit($id)
    {
        $result = $this->client->call("getAllItemCategories");
        $categories = $result['return'];
        $invoice = [];
        foreach ($categories as $invoice){
            if($invoice['id'] == $id){
                $invoice = $invoice;
                break;
            }
        }
        return view('admin.invoice.edit',['invoice'=>$invoice]);
    }


    public function update(Request $request, $id)
    {
        $item = $request->except('_token','_method');
        $item['id'] = $id;
        $result = $this->client->call("updateItemInvoice", array('arg0' => $item));

        if (isset($result) && !isset($result['faultstring'])) {
            return redirect()->route('invoice.index')->withSuccess("Record updated successfully.");

        } else {
            return redirect()->route('invoice.index')->withError($result['faultstring']);
        }
    }


    public function destroy($id)
    {
//        return gettype((int)$id);
        $result = $this->client->call("deleteItemInvoice", array('arg0' => (int)$id));

        if (isset($result) && !isset($result['faultstring'])) {
            return redirect()->route('invoice.index')->withSuccess("Record deleted successfully.");
        } else {
            return redirect()->route('invoice.index')->withError($result['faultstring']);
        }


    }

    public function downloadCSV()
    {
        $result = $this->client->call("getAllItemCategories");
        $categories = $result['return'];
//        return $categories;

        $filename = "invoice.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array('id', 'description', 'orderLineTypeId'));

        foreach ($categories as $row) {
            fputcsv($handle, array($row['id'], $row['description'], $row['orderLineTypeId']));
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );
        return Response::download($filename, 'invoice.csv', $headers);
    }
}