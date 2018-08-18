@if (Session::has('success'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">{{ Session::get('success') }}</p>
        <div class="clearfix"></div>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">{{ Session::get('error') }}</p>
        <div class="clearfix"></div>
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="zmdi zmdi-alert-circle-o pr-15 pull-left"></i><p class="pull-left">{{ Session::get('warning') }}</p>
        <div class="clearfix"></div>
    </div>
@endif

@if (Session::has('info'))
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="zmdi zmdi-info-outline pr-15 pull-left"></i><p class="pull-left">{{ Session::get('info') }}</p>
        <div class="clearfix"></div>
    </div>
@endif