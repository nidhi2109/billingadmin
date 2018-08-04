<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>aBill</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- login css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Data table CSS -->
    <link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    
    <!-- Toast CSS -->
    <link href="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">
        
    <!-- Custom CSS -->
    <!-- <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css"> -->
     <style>
    .wrapper {
        background: url("/img/big/img1.jpg") !important;
    }
    .boxstyle{
            background: white;
            border: 0 none;
            border-radius: 3px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 10px 20px;
    box-sizing: border-box;
    }
    body {
            background:#F6F2F2;
        }
    .page-wrapper{
       background: #ECE9E6 !important;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    }
        .container-login100{
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            /*padding: 15px;*/
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
             /*background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), url("../../img/bg-01.jpg");*/
             /*background-image: url('');*/
        }
        .container-login100 img{
            opacity: 0.5;
    
        }
        .wrap-login100 {
    width: 390px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
}
        .p-r-55 {
    padding-right: 55px;
}
.p-l-55 {
    padding-left: 55px;
}
.p-b-30 {
    padding-bottom: 30px;
}
.p-t-80 {
    padding-top: 80px;
}
.inline-block{
    font-weight:bold;
}


    </style>
</head>
<div class="wrapper box-layout pa-0" style="background-color:#FF5733; background: url('/img/big/img1.jpg')">
    <header class="sp-header">
        <div class="sp-logo-wrap pull-left">
            <a href="index.html">
                <img class="brand-img mr-10" src="../../img/logo.png" alt="brand"/>
                <span class="brand-text">aBill</span>
            </a>
        </div>
        <div class="form-group mb-0 pull-right">
            <span class="inline-block pr-10"><b>Already have an account?</b></span>
            <a class="inline-block btn btn-warning btn-rounded btn-outline" href="/consumer/registeration"><b>Create an Account</b></a>
        </div>
        <div class="clearfix"></div>
    </header>
    <div class="page-wrapper pa-0 ma-0 auth-page">
       <div class="container-fluid container-login100">
            <div class="table-struct full-width full-height ">
                <div class="table-cell auth-form-wrap">

                    <div class="auth-form  ml-auto mr-auto no-float boxstyle wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30 ">
                        <div class="row">

                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10">Sign in to aBill</h3>
                                    <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                </div>
                                <div class="form-wrap">
                                  @if (Session::has('message'))
                                        {!! session('message') !!}
                                   @endif  
                                    <form method="POST" action="/checklogin" data-toggle="validator" role="form">
                                        @csrf
                                       
                                        <div class="form-group ">
                                            <label class="control-label mb-10" for="exampleInputEmail_2">Username</label>
                                                <input id="username" type="text" class="form-control" name="username" value="" required autofocus placeholder="Enter Username">

                                               
                                        </div>

                                        <div class="form-group ">
                                           <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>

                                           
                                                <input id="password" type="password" class="form-control" name="password" required placeholder="Enter Password">

                                               
                                           
                                        </div>

                                     
                                        
                                        <div class="form-group text-center row mb-0">
                                            <div class="col-md-12 ">
                                                <button type="submit" class="btn btn-warning  btn-rounded">
                                                    {{ __('Login') }}
                                                </button>
                                                <!-- <button type="button" class="btn btn-default  btn-rounded">
                                                    {{ __('Cancel') }}
                                                </button> -->
                                                <!-- <a class="btn btn-link" href="">
                                                    {{ __('Forgot Your Password?') }}
                                                </a> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
        <!-- Slimscroll JavaScript -->
        <script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>
        
        <!-- Init JavaScript -->
        <script src="{{ asset('dist/js/init.js') }}"></script>


        
       
       
        <!-- Progressbar Animation JavaScript -->
        <script src="{{ asset('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script>
        
        <!-- Init JavaScript -->
        <script src="{{ asset('dist/js/init.js') }}"></script>
        <script src="{{ asset('dist/js/dashboard-data.js') }}"></script>

