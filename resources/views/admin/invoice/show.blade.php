@extends('layouts.app')

@section('Breadcrumb')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-dark">Invoice</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('invoice.index') }}">Invoice</a></li>
            <li class="active"><span>Invoice Details</span></li>

        </ol>
    </div>
    <!-- /Breadcrumb -->
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Invoice</h6>
                    </div>
                    <div class="pull-right">
                        <h6 class="txt-dark">Order # {{$invoice['id']}}</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <address class="mb-15">
                                    <span class="address-head mb-5">aBill</span>
                                    openbrm
                                    Plot No-B-599<br>
                                    Hyderabad, Telangana 500070 <br>
                                    <abbr title="Phone">P:</abbr>(133) 456-7890
                                </address>
                            </div>
                            <div class="col-xs-6 text-right">
                                <span class="txt-dark head-font inline-block capitalize-font mb-5">Bill to:</span>
                                <address class="mb-15">
                                    @if(isset($customer['contact']['organizationName'])) {{$customer['contact']['organizationName']}} @endif <br>
                                    Address <br>
                                    {{$customer['contact']['address1']}},{{$customer['contact']['city']}} <br>
                                    {{$customer['contact']['stateProvince']}}, {{$customer['contact']['countryCode']}} {{$customer['contact']['postalCode']}}<br>
                                    <abbr title="Phone">P:</abbr>(+{{$customer['contact']['phoneCountryCode']}}) {{$customer['contact']['phoneNumber']}}
                                </address>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <address>
                                    {{--<span class="txt-dark head-font capitalize-font mb-5">Payment Method:</span>--}}
                                    <br>
                                    {{--Visa ending **** 4242<br>--}}
                                    {{--jsmith@email.com--}}
                                </address>
                            </div>
                            <div class="col-xs-6 text-right">
                                <address>
                                    <span class="txt-dark head-font capitalize-font mb-5">order date:</span>
                                    {{ date("d-m-Y", strtotime($invoice['createDateTime'])) }}<br>
                                    <span class="txt-dark head-font capitalize-font mb-5">due date:</span>
                                    {{ date("d-m-Y", strtotime($invoice['dueDate'])) }}<br><br>
                                </address>
                            </div>
                        </div>

                        <div class="seprator-block"></div>

                        <div class="invoice-bill-table">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Totals</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ $invoice['invoiceLines']['description'] }}</td>
                                        <td>${{ number_format($invoice['invoiceLines']['price'],2) }}</td>
                                        <td>{{ number_format($invoice['invoiceLines']['quantity'],2) }}</td>
                                        <td>${{ number_format($invoice['invoiceLines']['amount'],2) }}</td>
                                    </tr>
                                    {{--<tr class="txt-dark">--}}
                                        {{--<td></td>--}}
                                        {{--<td></td>--}}
                                        {{--<td>Subtotal</td>--}}
                                        {{--<td>$670.99</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr class="txt-dark">--}}
                                        {{--<td></td>--}}
                                        {{--<td></td>--}}
                                        {{--<td>Shipping</td>--}}
                                        {{--<td>$15</td>--}}
                                    {{--</tr>--}}
                                    <tr class="txt-dark">
                                        <td></td>
                                        <td></td>
                                        <td>Total</td>
                                        <td>${{ number_format($invoice['total'],2) }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="button-list pull-right">
                                <button type="submit" class="btn btn-warning mr-10">Pay Invoice</button>
                                <button type="submit" class="btn btn-primary mr-10">Send as Email</button>
                                <button type="submit" class="btn btn-success mr-10">Download PDF</button>
                                <button type="button" class="btn btn-warning btn-outline btn-icon left-icon" onclick="javascript:window.print();">
                                    <i class="fa fa-print"></i><span> Print</span>
                                </button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
