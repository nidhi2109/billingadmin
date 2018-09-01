<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Utility;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Exception;
use Response;

class ProductController extends Controller
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
            $result = $this->client->call("getAllItems");

            if (isset($result['faultstring'])) {
                return redirect()->route('adminDashboard')->withError($result['faultstring']);
            }

            $products = $result['return'];
//        return $products;
            return view('admin.product.view', ['products' => Utility::customPagination($products, $request->url())]);
        } catch (Exception $e) {
            return redirect()->route('adminDashboard')->withError($e->getMessage());
        }
    }

    public function create()
    {
        try {
            $result = $this->client->call("getAllItemCategories");
            if (isset($result['faultstring'])) {
                return redirect()->route('product.index')->withError($result['faultstring']);
            }
            $categories = $result['return'];
            return view('admin.product.create',compact('categories'));
        }catch (Exception $e){
            return redirect()->route('product.index')->withError($e->getMessage());
        }
    }


    public function store(Request $request)
    {
        try {
            $item = $request->except('_token');
            $result = $this->client->call("createItemCategory", array('arg0' => $item));
            if (isset($result) && !isset($result['faultstring'])) {
                return redirect()->route('product.index')->with("msg", "record inserted successfully.");
            } else {
                return redirect()->route('product.index')->withError($result['faultstring']);
            }
        } catch (Exception $e) {
            return redirect()->route('product.index')->withError($e->getMessage());
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $result = $this->client->call("getAllItemCategories");
        $products = $this->client->call("getAllItems");
        if (isset($result['faultstring'])) {
            return redirect()->route('product.index')->withError($result['faultstring']);
        }
        $categories = $result['return'];

        $product = [];
        foreach ($products['return'] as $product){
            if($product['id'] == $id){
                $product = $product;
                break;
            }
        }
        return view('admin.product.edit',compact('categories','product'));
    }


    public function update(Request $request, $id)
    {
        try {
//            $item = $request->except('_token','_method');
            $item['id'] = $id;
            $item['description'] = "Item API working.";
            $item = array_filter($item);
//            return $item;
            $result = $this->client->call("updateItem", array('arg0' => $item));
            if (isset($result) && !isset($result['faultstring'])) {
                return redirect()->route('product.index')->withSuccess("record updated successfully.");
            } else {
                if(isset($result['faultstring'])){
                    return redirect()->route('product.index')->withError($result['faultstring']);
                }
            }
        } catch (Exception $e) {
            return redirect()->route('product.index')->withError($e->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            $result = $this->client->call("deleteItem", array('arg0' => (int)$id));

            if (isset($result) && !isset($result['faultstring'])) {
                return redirect()->route('product.index')->withSuccess("record deleted successfully.");
            } else {
                return redirect()->route('product.index')->withError($result['faultstring']);
            }
        } catch (Exception $e) {
            return redirect()->route('product.index')->withError($e->getMessage());
        }

    }

    public function downloadCSV()
    {
        try {
            $result = $this->client->call("getAllItems");
            $products = $result['return'];
//        return $products;

            $filename = "category.csv";
            $handle = fopen($filename, 'w+');
            fputcsv($handle, array('id', 'productCode', 'itemTypes','hasDecimals','priceManual','percentage','prices'));

            foreach ($products as $row) {

                if(is_array($row['types'])){
                    $row['types'] = implode(",",$row['types']);
                }else{
                    $row['types'] = $row['types'];
                }
                fputcsv($handle, array($row['id'], $row['number'],$row['types'] , $row['hasDecimals'], $row['priceManual'], isset($row['percentage']) ? $row['percentage'] :"",isset($row['price']) ? $row['price'] : ""));
            }

            fclose($handle);

            $headers = array(
                'Content-Type' => 'text/csv',
            );
            return Response::download($filename, 'product.csv', $headers);
        }catch (Exception $e){
            return redirect()->route('product.index')->withError($e->getMessage());
        }
    }
}