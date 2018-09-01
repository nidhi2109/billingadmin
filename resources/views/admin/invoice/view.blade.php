@extends('layouts.app')

@section('Breadcrumb')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-dark">Invoice</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
            <li class="active"><span>Invoice</span></li>

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
                        <h6 class="panel-title txt-dark">Invoice List</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        {{--<a class="btn btn-info btn-sm" href="{{ route("invoice.create") }}">Add New Invoice</a>--}}
                        <a href="{{ route("invoice.downloadCSV") }}" class="btn btn-default btn-sm btn-anim"><i
                                    class="fa fa-download"></i><span class="btn-text">Download CSV</span></a>

                        {{--<a class="btn btn-primary" href="{{ route("category.downloadCSV") }}">Download CSV</a>--}}
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
                                        <th>Customer</th>
                                        <th>Due date</th>
                                        <th>Status</th>
                                        <th>Balance</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--@forelse($invoices as $category)--}}
                                        <tr>
                                            <td>9820</td>
                                            <td>Demo User</td>
                                            <td>27/08/2018</td>
                                            <td>Unpaid</td>
                                            <td>2.00</td>
                                            <td>
                                                <form method="post" action="{{ route('invoice.destroy',$category['id'] = 9820) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('invoice.edit',$category['id'] = 9820) }}" class="text-inverse pr-10 " title="" data-toggle="tooltip" data-original-title="Edit" aria-describedby="tooltip455971">
                                                        <i class="zmdi zmdi-edit txt-warning font-20"></i>
                                                    </a>
                                                    <a href="{{ route('invoice.show',$category['id'] = 9820) }}" class="text-inverse pr-10 " title="" data-toggle="tooltip" data-original-title="Show" aria-describedby="tooltip455971">
                                                        <i class="fa fa-file-text-o txt-warning font-20"></i>
                                                    </a>
                                                    <button type="submit" class="btn-link text-inverse" title="" data-toggle="tooltip" data-original-title="Delete" aria-describedby="tooltip455971">
                                                        <i class="zmdi zmdi-delete txt-danger font-20"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    {{--@empty--}}
                                        {{--<tr>--}}
                                            {{--<td colspan="4"> Record not found.</td>--}}
                                        {{--</tr>--}}
                                    {{--@endforelse--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-25">
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">
                                @if(isset($categories))
                                    Showing {{$categories->firstItem()}} to {{$categories->lastItem()}} of &nbsp;{{$categories->total()}} entries
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="pull-right">
                                {{ $categories->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
