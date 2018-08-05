@extends('layouts.app')

@section('content')
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Dashbord</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                <li><a href="#"><span>My Account</span></a></li>

            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Dashboard</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div  class="panel-wrapper collapse in">
                    <div  class="panel-body">
                        <p>Click on link.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection