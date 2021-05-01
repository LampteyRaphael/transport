@include('includes.header')

@include('includes.left_sidebar')
    <!-- content panel -->
    <div class="main-panel">
        <!-- top header -->
        <header class="header navbar">

            <div class="brand visible-xs">
                <!-- toggle offscreen menu -->
                <div class="toggle-offscreen">
                    <a href="#" class="hamburger-icon visible-xs" data-toggle="offscreen" data-move="ltr">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <!-- /toggle offscreen menu -->


                <!-- logo -->
                <div class="brand-logo">
                    TACMS
                </div>
                <!-- /logo -->

                <!-- toggle chat sidebar small screen-->
                <div class="toggle-chat">
                    <a href="javascript:;" class="hamburger-icon v2 visible-xs" data-toggle="layout-chat-open">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <!-- /toggle chat sidebar small screen-->
            </div>


            <ul class="nav navbar-nav hidden-xs" style="text-transform: capitalize;font-weight: bold; font-family: Roboto; font-size:1em;">
                @yield('dashboard')
                {{--<marquee behavior="" direction="left">You can now use the chat room for any help. thank you</marquee>--}}
            </ul>


            <ul class="nav navbar-nav navbar-right hidden-xs">
                <li>
                    <a href="javascript:;" data-toggle="quick-launch-panel">
                        <i class="fa fa-circle-thin"></i>
                    </a>
                </li>

                <li>
                    <a href="javascript:;" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <div class="status bg-danger border-danger animated bounce"></div>
                    </a>
                    <ul class="dropdown-menu notifications">
                        <li>
                            <ul class="notifications-list">
                                <li>
                                    <a href="javascript:;">
                                    <span class="pull-left mt2 mr15">
                                                {{--<img src="images/avatar.jpg" class="avatar avatar-xs img-circle" alt="">--}}
                                            </span>
                                        <div class="overflow-hidden">
                                            {{--<span>Sean launched a new application</span>--}}
                                            {{--<span class="time">2 seconds ago</span>--}}
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="pull-left mt2 mr15">
                                            <div class="circle-icon bg-danger">
                                                <i class="fa fa-chain-broken"></i>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden">
                                            {{--<span>Removed chrome from app list</span>--}}
                                            {{--<span class="time">4 Hours ago</span>--}}
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                               <span class="pull-left mt2 mr15">
                                                {{--<img src="images/face3.jpg" class="avatar avatar-xs img-circle" alt="">--}}
                                            </span>
                                        <div class="overflow-hidden">
                                            {{--<span class="text-muted">Jack Hunt has registered</span>--}}
                                            {{--<span class="time">9 hours ago</span>--}}
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="notifications-footer">
                            {{--<a href="javascript:;">See all messages</a>--}}
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" data-toggle="dropdown">
                        <img src="{{Auth::user()->photo? Auth::user()->photo->file:asset('images/logo 2.png')}}" class="header-avatar img-circle ml10" alt="user" title="user" height="40" width="40">
                        <span class="pull-left">{{Auth::user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li>
                                <a href="javascript:;">
                                    <span class="label bg-danger pull-right">34</span>
{{--                                    <span>User Manual</span>--}}
                                </a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="">Help</a>--}}
{{--                            </li>--}}
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endguest
                    </ul>
                </li>

                {{--<li>--}}
                    {{--<a href="javascript:;" class="hamburger-icon v2" data-toggle="layout-chat-open">--}}
                        {{--<span></span>--}}
                        {{--<span></span>--}}
                        {{--<span></span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            </ul>
        </header>
        <!-- /top header -->
        <!-- main area -->
        <div class="main-content">
            @yield('content')
            @include('sweetalert::alert')
        </div>
        <!-- /main area -->
    </div>
    <!-- /content panel -->
@include('includes.footer_table')
