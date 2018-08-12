@extends('layouts.app')

@section('content')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Order</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                <li><a href="#"><span>Order</span></a></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Products</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <form method="post" ACTION="#">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="filterBy">Filter By</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                                        <input type="text" class="form-control" name="filterBy" id="filterBy" placeholder="ID, Number or Description">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="filterBy">Product Category</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                                        <select name="typeId" id="typeId" class="form-control" onchange="alert('ok');">
                                                            <option value="" selected="selected">All</option>
                                                            <option value="280201">DhavalLatepaymentpenalty1</option>
                                                            <option value="280200">DhavalLatepaymentpenalty</option>
                                                            <option value="280100">Usage</option>
                                                            <option value="2900">BillingDiscount</option>
                                                            <option value="2800">Voucher</option>
                                                            <option value="2500">Refund</option>
                                                            <option value="2401">Provisionable</option>
                                                            <option value="2400">Plans</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success mr-10">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Order #</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <form>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_2">User Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="exampleInputuname_2" placeholder="Username">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="exampleInputEmail_2" placeholder="Enter email">
                                                <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputpwd_3">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="exampleInputpwd_3" placeholder="Enter pwd">
                                                <div class="input-group-addon"><i class="icon-lock"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputpwd_42">Confirm Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="exampleInputpwd_42" placeholder="Enter pwd">
                                                <div class="input-group-addon"><i class="icon-lock"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10">Gender</label>
                                            <div>
                                                <div class="radio">
                                                    <input type="radio" name="radio2" id="radio_3" value="option1" checked="">
                                                    <label for="radio_3">
                                                        M
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="radio2" id="radio_4" value="option2" checked="">
                                                    <label for="radio_4">
                                                        F
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox_2" type="checkbox">
                                                <label for="checkbox_2"> Remember me </label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-success  mr-10">Submit</button>
                                            <button type="submit" class="btn btn-default  ">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection