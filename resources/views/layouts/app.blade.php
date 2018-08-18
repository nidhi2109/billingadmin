<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>aBill</title>
    <meta name="description" content="Snoopy is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Snoopy Admin, Snoopyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/img/favicon.ico') }}">
    <link rel="icon" href="{{ asset('public/img/favicon.ico') }}" type="image/x-icon" />

    <!-- Data table CSS -->
    <link href="{{ asset('public/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Toast CSS -->
    <link href="{{ asset('public/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('public/vendors/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/vendors/bower_components/switchery/dist/switchery.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/vendors/bower_components/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/vendors/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/vendors/bower_components/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet" type="text/css">
    <!-- select2 CSS -->
    <link href="{{ asset('public/vendors/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- bootstrap-select CSS -->
    <link href="{{ asset('public/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- multi-select CSS -->
    <link href="{{ asset('public/vendors/bower_components/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css"/>

    <!-- bootstrap-tagsinput CSS -->
    <link href="{{ asset('public/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css"/>

    <!-- bootstrap-touchspin CSS -->
    <link href="{{ asset('public/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('public/dist/css/style.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper box-layout theme-1-active pimary-color-blue">

    @include('includes.header')
    @include('includes.right_sidebar')

    <!-- Right Sidebar Backdrop -->
    <div class="right-sidebar-backdrop"></div>
    <!-- /Right Sidebar Backdrop -->

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid pt-10">

            <div class="row heading-bg">
                @yield('Breadcrumb')
            </div>
            @include('layouts.notifications')
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="footer container-fluid pl-30 pr-30">
            <div class="row">
                {{--<div class="col-sm-12">--}}
                    {{--<p>2018 &copy; aBill. Pampered by aBill</p>--}}
                {{--</div>--}}
            </div>
        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{ asset('public/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('public/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Data table JavaScript -->
<script src="{{ asset('public/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset('public/dist/js/jquery.slimscroll.js') }}"></script>

<!-- Progressbar Animation JavaScript -->
<script src="{{ asset('public/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js ') }}"></script>
<script src="{{ asset('public/vendors/bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{ asset('public/dist/js/dropdown-bootstrap-extended.js') }}"></script>

<!-- Sparkline JavaScript -->
<script src="{{ asset('public/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

<!-- Owl JavaScript -->
<script src="{{ asset('public/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

<!-- Switchery JavaScript -->
<script src="{{ asset('public/vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>

<!-- EChartJS JavaScript -->
<script src="{{ asset('public/vendors/bower_components/echarts/dist/echarts-en.min.js') }}"></script>
<script src="{{ asset('public/vendors/echarts-liquidfill.min.js') }}"></script>

<!-- Toast JavaScript -->
<script src="{{ asset('public/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

<!-- Select2 JavaScript -->
<script src="{{ asset('public/vendors/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

<!-- Bootstrap Select JavaScript -->
<script src="{{ asset('public/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

<!-- Bootstrap Tagsinput JavaScript -->
<script src="{{ asset('public/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

<!-- Bootstrap Touchspin JavaScript -->
<script src="{{ asset('public/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>

<!-- Multiselect JavaScript -->
<script src="{{ asset('public/vendors/bower_components/multiselect/js/jquery.multi-select.js') }}"></script>


<!-- Init JavaScript -->
<script src="{{ asset('public/dist/js/init.js') }}"></script>
<script src="{{ asset('public/dist/js/dashboard-data.js') }}"></script>
</body>

</html>
