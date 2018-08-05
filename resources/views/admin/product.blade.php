@extends('layouts.app')

@section('content')

    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Product</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                <li><a href="#"><span>Product</span></a></li>

            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="col-md-6 pull-left">
                        <h6 class="panel-title txt-dark">Manage Product</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-primary" href="#">Add New Product</a>
                        <a class="btn btn-info" href="#">Add New Category</a>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <p class="text-muted"></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop