<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
	<div class="preloader-it">
	    <div class="la-anim-1"></div>
	</div>
    <div class="wrapper box-layout theme-1-active pimary-color-blue">
          @include('includes.header')
	</div>
    <div class="page-wrapper">
        <div class="container-fluid"> 
            @yield('content')
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
						</div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <footer class="row">
       @include('includes.footer')
    </footer>
</body>
</html>