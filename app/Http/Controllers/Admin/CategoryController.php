<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Utility;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use Exception;

class CategoryController extends Controller
{

    public $client;

    public function __construct()
    {
        $this->client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
        $this->client->setCredentials("billingadmin;20", "123qwe", "basic");
    }

    public function index(Request $request)
    {
        try {
            $result = $this->client->call("getAllItemCategories");
            $categories = $result['return'];

            if (isset($result['faultstring'])) {
                return redirect()->route('adminDashboard')->withError($result['faultstring']);
            }

            return view('admin.category.view', ['categories' => Utility::customPagination($categories, $request->url())]);
        } catch (Exception $e) {
            return redirect()->route('admindashboard')->withError($e->getMessage());
        }

    }

    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        $item = $request->except('_token');
        $result = $this->client->call("createItemCategory", array('arg0' => $item));
        if (isset($result) && !isset($result['faultstring'])) {
            return redirect()->route('category.index')->withSuccess("msg", "Record inserted successfully.");

        } else {
            return redirect()->route('category.index')->withError($result['faultstring']);
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $result = $this->client->call("getAllItemCategories");
        $categories = $result['return'];
        $category = [];
        foreach ($categories as $category){
            if($category['id'] == $id){
                $category = $category;
                break;
            }
        }
        return view('admin.category.edit',['category'=>$category]);
    }


    public function update(Request $request, $id)
    {
        $item = $request->except('_token','_method');
        $item['id'] = $id;
        $result = $this->client->call("updateItemCategory", array('arg0' => $item));

        if (isset($result) && !isset($result['faultstring'])) {
            return redirect()->route('category.index')->withSuccess("Record updated successfully.");

        } else {
            return redirect()->route('category.index')->withError($result['faultstring']);
        }
    }


    public function destroy($id)
    {
//        return gettype((int)$id);
        $result = $this->client->call("deleteItemCategory", array('arg0' => (int)$id));

        if (isset($result) && !isset($result['faultstring'])) {
            return redirect()->route('category.index')->withSuccess("Record deleted successfully.");
        } else {
            return redirect()->route('category.index')->withError($result['faultstring']);
        }


    }

    public function downloadCSV()
    {
        $result = $this->client->call("getAllItemCategories");
        $categories = $result['return'];
//        return $categories;

        $filename = "category.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array('id', 'description', 'orderLineTypeId'));

        foreach ($categories as $row) {
            fputcsv($handle, array($row['id'], $row['description'], $row['orderLineTypeId']));
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );
        return Response::download($filename, 'category.csv', $headers);
    }
}
