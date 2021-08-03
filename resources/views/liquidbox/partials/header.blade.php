<div class="header ">
    <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
    </a>
    <div class="">
        <div class="brand inline">
            <img src="{{ asset('files/images/dc.png') }}" data-src-retina="{{ asset('files/images/dc.png') }}"
                data-src="{{ asset('files/images/dc.png') }}" alt="logo" width="50" height="50">
        </div>
        <ul
            class="d-lg-inline-block d-none notification-list no-margin d-lg-inline-block b-grey b-l b-r no-style p-l-30 p-r-20">
            <li class="p-r-10 inline">
                <div class="dropdown">
                    <a href="javascript:;" id="notification-center" class="header-icon pg pg-world"
                        data-toggle="dropdown">
                        <span class="bubble"></span>
                    </a>
                    <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                        <div class="notification-panel">
                            <div class="notification-body scrollable">
                                <div class="notification-item unread clearfix">
                                    <div class="heading open">
                                        <a href="#" class="text-complete pull-left">
                                            <i class="pg-map fs-16 m-r-10"></i>
                                            <span class="bold">Carrot Design</span>
                                            <span class="fs-12 m-l-10">David Nester</span>
                                        </a>
                                        <div class="pull-right">
                                            <div
                                                class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                                                <div><i class="fa fa-angle-left"></i>
                                                </div>
                                            </div>
                                            <span class=" time">few sec ago</span>
                                        </div>
                                        <div class="more-details">
                                            <div class="more-details-inner">
                                                <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
                                                    distinguishes between <br>
                                                    A leader and a follower.”</h5>
                                                <p class="small hint-text">
                                                    Commented on john Smiths wall.
                                                    <br> via pages framework.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option" data-toggle="tooltip" data-placement="left"
                                        title="mark as read">
                                        <a href="#" class="mark"></a>
                                    </div>
                                </div>
                                <div class="notification-item  clearfix">
                                    <div class="heading">
                                        <a href="#" class="text-danger pull-left">
                                            <i class="fa fa-exclamation-triangle m-r-10"></i>
                                            <span class="bold">98% Server Load</span>
                                            <span class="fs-12 m-l-10">Take Action</span>
                                        </a>
                                        <span class="pull-right time">2 mins ago</span>
                                    </div>
                                    <div class="option">
                                        <a href="#" class="mark"></a>
                                    </div>
                                </div>
                                <div class="notification-item  clearfix">
                                    <div class="heading">
                                        <a href="#" class="text-warning-dark pull-left">
                                            <i class="fa fa-exclamation-triangle m-r-10"></i>
                                            <span class="bold">Warning Notification</span>
                                            <span class="fs-12 m-l-10">Buy Now</span>
                                        </a>
                                        <span class="pull-right time">yesterday</span>
                                    </div>
                                    <div class="option">
                                        <a href="#" class="mark"></a>
                                    </div>
                                </div>

                                <div class="notification-item unread clearfix">
                                    <div class="heading">
                                        <div
                                            class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                                            <img width="30" height="30"
                                                data-src-retina="{{ asset('files/images/dc.png') }}"
                                                data-src="{{ asset('files/images/dc.png') }}" alt=""
                                                src="{{ asset('files/images/dc.png') }}">
                                        </div>
                                        <a href="#" class="text-complete pull-left">
                                            <span class="bold">Revox Design Labs</span>
                                            <span class="fs-12 m-l-10">Owners</span>
                                        </a>
                                        <span class="pull-right time">11:00pm</span>
                                    </div>
                                    <div class="option" data-toggle="tooltip" data-placement="left"
                                        title="mark as read">
                                        <a href="#" class="mark"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-footer text-center">
                                <a href="#" class="">Read all notifications</a>
                                <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                                    <i class="pg-refresh_new"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>

    <div class="d-flex align-items-center">

        <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
            <span class="semi-bold">
                {{ Auth::user()->role }}
            </span>
        </div>

        <div class="dropdown pull-right d-lg-block d-none">
            <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline">
                    <img src="{{ asset('files/images/dc.png') }}" alt="">
                </span>
            </button>

        </div>
        <!--<a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>-->
    </div>
</div>


<nav class="page-sidebar" data-pages="sidebar">
    <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
            <div class="col-xs-6 no-padding">
                <a href="#" class="p-l-40"><img src="{{ asset('files/media/demo/social_app.svg') }}" alt="social">
                </a>
            </div>
            <div class="col-xs-6 no-padding">
                <a href="#" class="p-l-10"><img src="{{ asset('files/media/demo/email_app.svg') }}" alt="social">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 m-t-20 no-padding">
                <a href="#" class="p-l-40"><img src="{{ asset('files/media/demo/calendar_app.svg') }}" alt="social">
                </a>
            </div>
            <div class="col-xs-6 m-t-20 no-padding">
                <a href="#" class="p-l-10"><img src="{{ asset('files/media/demo/add_more.svg') }}" alt="social">
                </a>
            </div>gh
        </div>
    </div>
    <div class="sidebar-header">
        <a href="{{ route('liquidbox.index') }}"><img src="{{ asset('files/images/dc.png') }}" alt="logo"
                class="brand" data-src="{{ asset('files/images/dc.png') }}"
                data-src-retina="{{ asset('files/images/dc.png') }}" style="width: 40px; height: 40px"></a>
    </div>
    <div class="sidebar-menu">
        <ul class="menu-items">
            <li class="m-t-30 ">
                <a href="{{ route('liquidbox.index') }}" class="detailed">
                    <span class="title">Dashboard</span>
                    <!--<span class="details">12 New Updates</span>-->
                </a>
                <span style="background-color: skyblue" class=" icon-thumbnail"><i style="padding: 10px !important;"
                        class="pg-home"></i></span>
            </li>
            <!--<li class="">
                <a href="email.html" class="detailed">
                    <span class="title">Email</span>
                    <span class="details">234 New Emails</span>
                </a>
                <span class="icon-thumbnail"><i class="pg-mail"></i></span>
            </li>
            <li class="">
                <a href="social.html"><span class="title">Social</span></a>
                <span class="icon-thumbnail"><i class="pg-social"></i></span>
            </li>-->

            <li>
                <a href="javascript:;"><span class="title">Pages</span>
                    <span class=" arrow"></span></a>
                <span class="icon-thumbnail"><i style="padding: 10px !important;" class="fs-14 pg-ui"></i></span>
                <ul class="sub-menu">

                    <li class="">
                        <a href="{{route('home.index')}}" style="color: #fff !important; font-weight: bold !important;">Home Page</a>
                        <span class="icon-thumbnail">HP</span>
                    </li>
                    <li class="">
                        <a href="{{route('projects.index')}}" style="color: #fff !important; font-weight: bold !important;">Projects</a>
                        <span class="icon-thumbnail">P</span>
                    </li>
                    <li class="">
                        <a href="{{route('sound.index')}}" style="color: #fff !important; font-weight: bold !important;">Sound
                        </a>
                        <span class="icon-thumbnail">S</span>
                    </li>
                    <!--<li class="">
                        <a href="speakers.php" style="color: #fff !important; font-weight: bold !important;">Speaker Page</a>
                        <span class="icon-thumbnail">SP</span>
                    </li>-->
                
                    <li class="">
                        <form method="POST" style="padding-right:30px !important;" action="{{ route('logout') }}">
                            @csrf
                            <x-jet-dropdown-link class="btn btn-primary text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
                    </li>

                    <!--<li class="">
                        <a href="#">Contact Page</a>
                        <span class="icon-thumbnail">CP</span>
                    </li>
                    <li class="">
                        <a href="#">Live Stream Page</a>
                        <span class="icon-thumbnail">LS</span>
                    </li>-->
                </ul>
            </li>

        </ul>
        <div class="clearfix"></div>
    </div>
</nav>
