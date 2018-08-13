@extends('layouts.app')

@section('content')

    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Category</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                <li><a href="#"><span>Category</span></a></li>

            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


            @if(Session::has('msg'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="zmdi zmdi-check pr-15 pull-left"></i>
                    <p class="pull-left">{{ Session::get('msg') }}</p>
                    <div class="clearfix"></div>
                </div>
            @endif

            @if(Session::has('errorMsg'))
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">{{ Session::get('errorMsg') }}</p>
                        <div class="clearfix"></div>
                    </div>
            @endif



            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="col-md-6 pull-left">
                        <h6 class="panel-title txt-dark">Manage Category</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-info" href="{{ route("category.create") }}">Add New Category</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Description</th>
                                        <th>Order Line TypeId</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($categories as $category)
                                        <tr>
                                        <td>{{ $category['id'] }}</td>
                                        <td>{{ $category['description'] }}</td>
                                        <td>{{ $category['orderLineTypeId'] }}</td>
                                        <td>
                                            <form method="post" action="{{ route('category.destroy',$category['id']) }}">
                                                @csrf
                                                @method('delete')
                                                <a href="#" class="btn  btn-primary"> <i class="fa fa-pencil"></i> </a>
                                                <button type="submit" class="btn btn-danger"> <i class="fa fa-trash "></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr><td colspan="4"> Record not found.</td></tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
