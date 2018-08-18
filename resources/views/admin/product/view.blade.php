@extends('layouts.app')

@section('Breadcrumb')

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
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="col-md-6 pull-left">
                        <h6 class="panel-title txt-dark">Manage Product</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route("product.create") }}">Add New Product</a>
                        <a class="btn btn-info btn-sm" href="{{ route("category.create") }}">Add New Category</a>
                        <a href="{{ route("category.downloadCSV") }}" class="btn btn-default btn-anim btn-sm"><i class="fa fa-download"></i><span class="btn-text">Download CSV</span></a>
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
                                        <th>Product No.</th>
                                        <th>Description</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($products as $product)
                                        @if(!$product['deleted'])
                                                <tr>
                                                    <td>{{ $product['id'] }}</td>
                                                    <td>{{ $product['number'] }}</td>
                                                    <td>{{ $product['description'] }}</td>
                                                    <td>@if($product['orderLineTypeId']==1)Items
                                                        @elseif($product['orderLineTypeId']==2)Tax
                                                        @elseif($product['orderLineTypeId']==3)Penalty
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <form method="post" action="{{ route('product.destroy',$product['id']) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <a href="{{ route('product.edit',$product['id']) }}" class="text-inverse pr-10 " title="" data-toggle="tooltip" data-original-title="Edit" aria-describedby="tooltip455971">
                                                                <i class="zmdi zmdi-edit txt-warning font-20"></i>
                                                            </a>
                                                            <button type="submit" class="btn-link text-inverse" title="" data-toggle="tooltip" data-original-title="Delete" aria-describedby="tooltip455971">
                                                                <i class="zmdi zmdi-delete txt-danger font-20"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        @endif
                                    @empty
                                        <tr>
                                            <td colspan="4"> Record not found.</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="pull-right">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop