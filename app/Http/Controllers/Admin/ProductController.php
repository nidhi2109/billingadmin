<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller {


    public $client;
    public function __construct(){
        $this->client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
        $this->client->setCredentials("billingadmin;20","123qwe","basic");
    }

    public function index()
    {
        $result = $this->client->call("getAllItems");

        if (isset($result['faultstring'])) {
            \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">'.$result['faultstring'].'.</p>
                               <div class="clearfix"></div>
                            </div>');

            return redirect()->route('admindashboard');
        }
        $products = $result['return'];
//        return $products;
        return view('admin.product.view',compact('products'));

    }

    public function create()
    {
        return view('admin.product.create');
    }


    public function store(Request $request)
    {
        $item = $request->except('_token');
        $result = $this->client->call("createItemCategory",array('arg0'=>$item));
        if(isset($result) && !isset($result['faultstring'])){
            return redirect()->route('product.index')->with("msg","record inserted successfully.");

        }else{
            return redirect()->route('product.index')->with("errorMsg",$result['faultstring']);
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.category.edit');
    }


    public function update(Request $request, $id)
    {
        $item = $request->except('_token');
        $item['id'] = $id;
        $result = $this->client->call("updateItemCategory",array('arg0'=>$item));

        if(isset($result) && !isset($result['faultstring'])){
            return redirect()->route('product.index')->with("msg","record updated successfully.");

        }else{
            return redirect()->route('product.index')->with("errorMsg",$result['faultstring']);
        }
    }


    public function destroy($id)
    {
        $result = $this->client->call("deleteItemCategory",array('arg0'=>(int)$id));

        if(isset($result) && !isset($result['faultstring'])){
            return redirect()->route('product.index')->with("msg","record deleted successfully.");
        }else{
            return redirect()->route('product.index')->with("errorMsg",$result['faultstring']);
        }


    }
}