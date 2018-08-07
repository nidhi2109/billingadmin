<!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="mobile-only-brand pull-left">
        <div class="nav-header pull-left">
            <div class="logo-wrap">
                <a href="{{ URL::to('login') }}">
                    <img class="brand-img" src="{{ asset('public/img/logo.gif') }}" alt="brand"/>
                    <span class="brand-text">aBill</span>
                </a>
            </div>
        </div>
        <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i
                    class="zmdi zmdi-menu"></i></a>
        <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view"
           href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
        <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
        <form id="search_form" role="search" class="top-nav-search collapse pull-left">
            <div class="input-group">
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                <button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse"
                        aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
                </span>
            </div>
        </form>
    </div>
    <div id="mobile_only_nav" class="mobile-only-nav pull-right">
        <ul class="nav navbar-right top-nav pull-right">

            <li class="dropdown app-drp">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="zmdi zmdi-apps top-nav-icon"></i></a>
                <ul class="dropdown-menu app-dropdown" data-dropdown-in="slideInRight" data-dropdown-out="flipOutX">
                    <li>
                        <div class="app-nicescroll-bar">
                            <ul class="app-icon-wrap pa-10">
                                <li>
                                    <a href="weather.html" class="connection-item">
                                        <i class="zmdi zmdi-cloud-outline txt-info"></i>
                                        <span class="block">weather</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="inbox.html" class="connection-item">
                                        <i class="zmdi zmdi-email-open txt-success"></i>
                                        <span class="block">e-mail</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar.html" class="connection-item">
                                        <i class="zmdi zmdi-calendar-check txt-primary"></i>
                                        <span class="block">calendar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="vector-map.html" class="connection-item">
                                        <i class="zmdi zmdi-map txt-danger"></i>
                                        <span class="block">map</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="chats.html" class="connection-item">
                                        <i class="zmdi zmdi-comment-outline txt-warning"></i>
                                        <span class="block">chat</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact-card.html" class="connection-item">
                                        <i class="zmdi zmdi-assignment-account"></i>
                                        <span class="block">contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="app-box-bottom-wrap">
                            <hr class="light-grey-hr ma-0"/>
                            <a class="block text-center read-all" href="javascript:void(0)"> more </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown full-width-drp">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="zmdi zmdi-more-vert top-nav-icon"></i></a>
                <ul class="dropdown-menu mega-menu pa-0" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <li class="product-nicescroll-bar row">
                        <ul class="pa-20">
                            <li class="col-md-3 col-xs-6 col-menu-list">
                                <a href="javascript:void(0);">
                                    <div class="pull-left"><i class="ti-desktop mr-20"></i><span
                                                class="right-nav-text">Dashboard</span></div>
                                    <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <hr class="light-grey-hr ma-0"/>
                                <ul>
                                    <li>
                                        <a href="index.html">Analytical</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">Demographic</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">Project</a>
                                    </li>
                                    <li>
                                        <a href="index4.html">Hospital</a>
                                    </li>
                                    <li>
                                        <a href="index5.html">HRM</a>
                                    </li>
                                    <li>
                                        <a href="index6.html">Real Estate</a>
                                    </li>
                                    <li>
                                        <a href="profile.html">profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-md-3 col-xs-6 col-menu-list">
                                <a href="javascript:void(0);">
                                    <div class="pull-left">
                                        <i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">E-Commerce</span>
                                    </div>
                                    <div class="pull-right"><span class="label label-success">hot</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                                <hr class="light-grey-hr ma-0"/>
                                <ul>
                                    <li>
                                        <a href="e-commerce.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="product.html">Products</a>
                                    </li>
                                    <li>
                                        <a href="product-detail.html">Product Detail</a>
                                    </li>
                                    <li>
                                        <a href="add-products.html">Add Product</a>
                                    </li>
                                    <li>
                                        <a href="product-orders.html">Orders</a>
                                    </li>
                                    <li>
                                        <a href="product-cart.html">Cart</a>
                                    </li>
                                    <li>
                                        <a href="product-checkout.html">Checkout</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-md-6 col-xs-12 preview-carousel">
                                <a href="javascript:void(0);">
                                    <div class="pull-left"><span class="right-nav-text">latest products</span></div>
                                    <div class="clearfix"></div>
                                </a>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="product-carousel owl-carousel owl-theme text-center">
                                    <a href="#">
                                        <img src="{{ asset('public/img/chair.jpg') }}" alt="chair">
                                        <span>Circle chair</span>
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('public/img/chair.jpg') }}" alt="chair">
                                        <span>square chair</span>
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('public/img/chair.jpg') }}" alt="chair">
                                        <span>semi circle chair</span>
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('public/img/chair.jpg') }}" alt="chair">
                                        <span>wooden chair</span>
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('public/img/chair.jpg') }}" alt="chair">
                                        <span>square chair</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown alert-drp">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="zmdi zmdi-notifications top-nav-icon"></i><span
                            class="top-nav-icon-badge">5</span></a>
                <ul class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                    <li>
                        <div class="notification-box-head-wrap">
                            <span class="notification-box-head pull-left inline-block">notifications</span>
                            <a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)">
                                clear all </a>
                            <div class="clearfix"></div>
                            <hr class="light-grey-hr ma-0"/>
                        </div>
                    </li>
                    <li>
                        <div class="streamline message-nicescroll-bar">
                            <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="icon bg-green">
                                        <i class="zmdi zmdi-flag"></i>
                                    </div>
                                    <div class="sl-content">
                                        <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                        New subscription created</span>
                                        <span class="inline-block font-11  pull-right notifications-time">2pm</span>
                                        <div class="clearfix"></div>
                                        <p class="truncate">Your customer subscribed for the basic plan. The customer
                                            will pay $25 per month.</p>
                                    </div>
                                </a>
                            </div>
                            <hr class="light-grey-hr ma-0"/>
                            <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="icon bg-yellow">
                                        <i class="zmdi zmdi-trending-down"></i>
                                    </div>
                                    <div class="sl-content">
                                        <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
                                        <span class="inline-block font-11 pull-right notifications-time">1pm</span>
                                        <div class="clearfix"></div>
                                        <p class="truncate">Some technical error occurred needs to be resolved.</p>
                                    </div>
                                </a>
                            </div>
                            <hr class="light-grey-hr ma-0"/>
                            <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="icon bg-blue">
                                        <i class="zmdi zmdi-email"></i>
                                    </div>
                                    <div class="sl-content">
                                        <span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
                                        <span class="inline-block font-11  pull-right notifications-time">4pm</span>
                                        <div class="clearfix"></div>
                                        <p class="truncate"> The last payment for your G Suite Basic subscription
                                            failed.</p>
                                    </div>
                                </a>
                            </div>
                            <hr class="light-grey-hr ma-0"/>
                            <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="sl-avatar">
                                        <img class="img-responsive" src="{{ asset('public/img/avatar.jpg') }}" alt="avatar"/>
                                    </div>
                                    <div class="sl-content">
                                        <span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
                                        <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                        <div class="clearfix"></div>
                                        <p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit
                                            amet, consectetur, adipisci velit</p>
                                    </div>
                                </a>
                            </div>
                            <hr class="light-grey-hr ma-0"/>
                            <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="icon bg-red">
                                        <i class="zmdi zmdi-storage"></i>
                                    </div>
                                    <div class="sl-content">
                                        <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
                                        <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                        <div class="clearfix"></div>
                                        <p class="truncate">consectetur, adipisci velit.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="notification-box-bottom-wrap">
                            <hr class="light-grey-hr ma-0"/>
                            <a class="block text-center read-all" href="javascript:void(0)"> read all </a>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown auth-drp">
                @php
                    $role = Session::get('role');
                    $name = Session::get('name');
                @endphp
                <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">
                    <img src="{{ asset('public/img/user1.png') }}" alt="{{ $name }}" title="{{ $name }}" class="user-auth-img img-circle">
                    {{--{{ $name }}--}}
                    <span class="user-online-status"></span></a>
                <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">

                    <li>
                        <a href="{{ URL::to('admin/account') }}"><i class="zmdi zmdi-account"></i><span>My Account</span></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ URL::to('logout') }}">
                            <i class="zmdi zmdi-power"></i><span>{{ __('Logout') }}</span>
                        </a>
                    </li>

                    <form id="logout-form" action="" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- /Top Menu Items -->

<!-- Left Sidebar Menu -->
    <div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Main</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        @if($role == "Super user")
            <li>
                <a class="active" href="{{ URL::to('admin/dashboard') }}">
                    <div class="pull-left"><i class="ti-desktop mr-20"></i><span class="right-nav-text">Dashboard</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>
            <li>
                <a class="active" href="{{ URL::to('admin/createagent') }}">
                    <div class="pull-left"><i class="pe-7s-add-user mr-20"></i><span
                                class="right-nav-text">Create Agent</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a class="active" href="{{ URL::to('admin/invoice') }}">
                    <div class="pull-left"><i class="fa fa-file-text-o mr-20"></i>
                        <span class="right-nav-text">Invoice</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li>
                <a class="active" href="{{ URL::to('admin/payment') }}">
                    <div class="pull-left"><i class="pe-7s-cash mr-20"></i>
                        <span class="right-nav-text">Payment</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li>
                <a class="active" href="{{ URL::to('admin/order') }}">
                    <div class="pull-left"><i class="pe-7s-portfolio mr-20"></i>
                        <span class="right-nav-text">Order</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li>
                <a class="active" href="{{ URL::to('admin/subscription') }}">
                    <div class="pull-left"><i class="fa fa-flag mr-20"></i>
                        <span class="right-nav-text">Subscription</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li>
                <a class="active" href="{{ URL::to('admin/billing') }}">
                    <div class="pull-left"><i class="pe-7s-news-paper mr-20"></i><span class="right-nav-text">Billing Information</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li>
                <a class="active" href="{{ URL::to('admin/mediation') }}">
                    <div class="pull-left"><i class="ti-wheelchair mr-20"></i><span class="right-nav-text">Mediation</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>


            <li>
                <a class="active" href="{{ URL::to('admin/product') }}">
                    <div class="pull-left"><i class="fa fa-product-hunt mr-20"></i>
                        <span class="right-nav-text">Product</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li>
                <a class="active" href="{{ URL::to('admin/report') }}">
                    <div class="pull-left"><i class="pe-7s-note2 mr-20"></i>
                        <span class="right-nav-text">Report</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li>
                <a class="active" href="{{ URL::to('admin/configuration') }}">
                    <div class="pull-left"><i class="icon-settings mr-20"></i>
                        <span class="right-nav-text">Configuration</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a class="active" href="{{ URL::to('admin/adminrole') }}">
                    <div class="pull-left"><i class="pe-7s-server mr-20"></i>
                        <span class="right-nav-text">Roles Management</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a class="active" href="">
                    <div class="pull-left"><i class="pe-7s-cloud-upload mr-20"></i><span class="right-nav-text">Bulk Data Upload</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>


        @elseif($role == "Customer")
            <li>
                <a class="active" href="{{ URL::to('consumer/dashboard') }}">
                    <div class="pull-left"><i class="icon-layers mr-20"></i><span class="right-nav-text">Dashboard</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>
            <li>
                <a class="active" href="{{ URL::to('consumer/account') }}">
                    <div class="pull-left"><i class="icon-people mr-20"></i><span class="right-nav-text">My Account</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>
            <li>
                <a class="active" href="{{ URL::to('consumer/billing') }}">
                    <div class="pull-left"><i class="pe-7s-news-paper mr-20"></i><span class="right-nav-text">Billing Information</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>
            <li>
                <a class="active" href="{{ URL::to('consumer/device') }}">
                    <div class="pull-left"><i class=" icon-wrench mr-20"></i><span
                                class="right-nav-text">Device Information</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>
            <li>
                <a class="active" href="{{ URL::to('consumer/notification') }}">
                    <div class="pull-left"><i class="pe-7s-bell mr-20"></i><span class="right-nav-text">Notifications</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>

        @elseif($role == "Agent")
            <li>
                <a class="active" href="{{ URL::to('location') }}">
                    <div class="pull-left"><i class="pe-7s-user mr-20"></i><span
                                class="right-nav-text">Assigned Location</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>
            <li>
                <a class="active" href="javascript:void(0);">
                    <div class="pull-left"><i class="pe-7s-user mr-20"></i><span class="right-nav-text">My Account</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>
            <li>
                <a class="active" href="javascript:void(0);">
                    <div class="pull-left"><i class="pe-7s-news-paper mr-20"></i><span class="right-nav-text">Consumer Information</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>
            <li>
                <a class="active" href="javascript:void(0);">
                    <div class="pull-left"><i class="icon-wrench mr-20"></i><span
                                class="right-nav-text">Device Information</span></div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>
            <li>
                <a class="active" href="javascript:void(0);">
                    <div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Submit Meter Reading</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>
            <li>
                <a class="active" href="javascript:void(0);">
                    <div class="pull-left"><i class="glyphicon glyphicon-oil mr-20"></i><span class="right-nav-text">Add Additional Product</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>

            </li>
        @endif
    </ul>
</div>
<!-- /Left Sidebar Menu -->