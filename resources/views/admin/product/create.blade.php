@extends('layouts.app')

@section('Breadcrumb')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-dark">Product</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ URL::to('admin/product') }}"><span>Product</span></a></li>
            <li class="active"><span>add new product</span></li>
        </ol>
    </div>
    <!-- /Breadcrumb -->
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">add new product</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <form method="post" ACTION="{{ route('product.store') }}">
                                        @csrf
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="number">Product Code</label>
                                                    <input type="text" class="form-control" name="number"
                                                           id="number" placeholder="number">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="description">Description</label>
                                                    <input type="text" class="form-control" name="description"
                                                           id="description" placeholder="description">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Categories</label>
                                                    <select class="selectpicker" multiple data-style="form-control btn-default btn-outline">
                                                        @foreach($categories as $category)
                                                            <option value="{{$category['id']}}">{{$category['description']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="glCode">GL Code</label>
                                                    <input type="text" class="form-control" name="glCode"
                                                           id="glCode" placeholder="GL Code">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="percentageAsDecimal">Line Percentage</label>
                                                    <input type="text" class="form-control" name="percentageAsDecimal"
                                                           id="percentageAsDecimal" placeholder="Line Percentage">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10"
                                                           for="percentageAsDecimal">&nbsp;</label>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="checkbox checkbox-warning">
                                                                <input name="hasDecimals" id="hasDecimals"
                                                                       type="checkbox" checked="">
                                                                <label for="hasDecimals"> Allow decimal
                                                                    quantity </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="checkbox checkbox-warning">
                                                                <input name="metaFields['defaultValue']" id="metaFields['defaultValue']"
                                                                       type="checkbox">
                                                                <label for="metaFields['defaultValue']"> isprovisionable </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="seprator-block"></div>
                                        <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>Price</h6>
                                        <hr class="light-grey-hr">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="prices['20']">Indian Rupees</label>
                                                    <input type="text" class="form-control" name="prices['20']"
                                                           id="prices['20']" placeholder="indian rupees">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10"
                                                           for="percentageAsDecimal">&nbsp;</label>
                                                    <div class="checkbox checkbox-warning">
                                                        <input name="product['priceManual']" id="product['priceManual']"
                                                               type="checkbox">
                                                        <label for="product['priceManual']"> Allow manual
                                                            pricing </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <a href="{{ route('product.index') }}" class="btn btn-danger mr-10 pull-right">Cancel</a>
                                        <button type="submit" class="btn btn-primary mr-10 pull-right">Submit</button>
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