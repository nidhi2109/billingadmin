<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>aBill</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Bootstrap -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- FontAwesome (For Icons) -->
    <link type="text/css" rel="stylesheet" href="{{ asset('public/css/material-design-iconic-font.min.css') }}" />

    <!-- Spread Stylesheet (Login Stylesheet) -->
    {{--<link href="{{ asset('public/dist/css/style.css') }}" rel="stylesheet" type="text/css">--}}
    <link type="text/css" rel="stylesheet" href="{{ asset('public/css/login_styles.css') }}" />



</head>
<body class="login-body login-fonts">
<div class="container">

    <div class="row no-gutter row-eq-height-xs">
        <div class="col-md-5 col-md-offset-1 left-box">
            <div class="login-electricity-and-gas">
                <a href="{{ route('consumeRegistration') }}" class="btn btn-primary signup_btn"><i class="zmdi zmdi-assignment"></i> Sign Up Now!</a>
            </div>
        </div>
        <div class="col-md-5 right-box">
            <div class="row no-gutter">
                <div class="col-md-10 col-md-offset-1">
                    <img src="{{ asset('public/images/login-logo.png') }}" class="login-logo" alt="" />
                    <form method="POST" action="{{ URL::to('checklogin') }}" data-toggle="validator" role="form" id="formValidate" autocomplete="off">
                        @include('layouts.notifications')
                    @csrf
                        <ul class="list-unstyled form-style">
                            <li>

                                <i class="zmdi zmdi-account user-pass"></i>
                                <div class="form-group " id="eusername">

                                    <input id="username" type="text" class="form-control login-form-control" name="username" value=""  autofocus placeholder="Enter Username" autocomplete="off">

                                    <span id="errusername" ></span>
                                </div>

                            </li>
                            <li>
                                <i class="zmdi zmdi-lock user-pass"></i>
                                <div class="form-group " id="epassword">


                                    <input id="password" type="password" class="form-control login-form-control" name="password"  placeholder="Enter Password" autocomplete="off">

                                    <span id="errpassword"></span>

                                </div>

                            </li>

                            <li style="border-bottom:none;" class="m-20">
                                <button class="btn btn-primary login-btn" type="submit">Login <i class="zmdi zmdi-arrow-right" ></i></button>
                                <a href="#" class="pull-right forgot-password">Forgot Password?</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src="{{ asset('public/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('public/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>
<script src="{{ asset('public/vendors/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
<!-- Slimscroll JavaScript -->
<script src="{{ asset('public/dist/js/jquery.slimscroll.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset('public/dist/js/init.js') }}"></script>
</html>




