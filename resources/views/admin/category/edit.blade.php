@extends('layouts.app')

@section('Breadcrumb')

    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-dark">Category</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ URL::to('admin/category') }}"><span>Category</span></a></li>
            <li class="active"><span>update category</span></li>
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
                        <h6 class="panel-title txt-dark">update category</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <form method="post" ACTION="{{ route('category.update',$category['id']) }}">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10"
                                                           for="description">Description</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                                        <input type="text" class="form-control" name="description"
                                                               id="description"
                                                               value="@if(isset($category['description'])){{$category['description']}}@endif"
                                                               placeholder="description">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="filterBy">Product
                                                        Category</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                                        <select name="orderLineTypeId" class="form-control"
                                                                id="orderLineTypeId">
                                                            <option value="1"
                                                                    @if($category['orderLineTypeId'] == 1)selected @endif>
                                                                Items
                                                            </option>
                                                            <option value="2"
                                                                    @if($category['orderLineTypeId'] == 2)selected @endif>
                                                                Tax
                                                            </option>
                                                            <option value="3"
                                                                    @if($category['orderLineTypeId'] == 3)selected @endif>
                                                                Penalty
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('category.index') }}" class="btn btn-danger mr-10 pull-right">Cancel</a>
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