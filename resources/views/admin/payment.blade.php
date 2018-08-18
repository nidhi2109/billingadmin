@extends('layouts.app')

@section('Breadcrumb')

    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-dark">Payment</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('adminDashboard') }}">Dashboard</a></li>
            <li><a href="#"><span>Payment</span></a></li>

        </ol>
    </div>
    <!-- /Breadcrumb -->

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="col-md-6 pull-left">
                        <h6 class="panel-title txt-dark">Manage Payment</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-primary" href="{{ route("product.create") }}">Add New Payment</a>
                        {{--<a href="{{ route("Payment.downloadCSV") }}" class="btn btn-default btn-anim"><i--}}
                        {{--class="fa fa-download"></i><span class="btn-text">Download CSV</span></a>--}}
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                Payment Content
                            </div>
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection