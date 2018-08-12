<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public $client;
    public function __construct(){
        $this->client = new \nusoap_client("http://67.205.185.159:8080/abill/services/apiTwo?wsdl", "true");
        $this->client->setCredentials("billingadmin;20","123qwe","basic");
    }

    public function index()
    {
        $result = $this->client->call("getAllItemCategories");
        $categories = $result['return'];

        if ($this->client->fault) {
            \Session::flash('message', '<div class="alert alert-danger alert-dismissable">
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">'.$this->client-->fault.'.</p>
                               <div class="clearfix"></div>
                            </div>');

            return redirect()->route('admindashboard');
        }
        return view('admin.category.view',compact('categories'));

    }

    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        $item = $request->except('_token');
        $result = $this->client->call("createItemCategory",array('arg0'=>$item));
        if(isset($result)){
            return redirect()->route('category.index')->with("msg","record inserted successfully.");

        }else{
            return redirect()->route('category.index')->with("msg","record not inserted.");
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $result = $this->client->call("deleteItemCategory",array('arg0'=>(int)$id));

        if(isset($result) && !isset($result['faultstring'])){
            return redirect()->route('category.index')->with("msg","record deleted successfully.");
        }else{
            return redirect()->route('category.index')->with("errorMsg",$result['faultstring']);
        }


    }
}
