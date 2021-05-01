<ul class="nav">
    <!-- ui -->
    <li>
        <a href="javascript:;">
            <i class="fa fa-flask"></i>
            <span>Dashboard</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{route('home')}}">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
            </li>

            <li>
                {{--<a href="{{route('users.create')}}">--}}
                <span>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </span>
                {{--</a>--}}
            </li>
        </ul>
    </li>
    <!-- /ui -->

    <!-- /dashboard -->

    <!-- ui -->
    <li>
        <a href="javascript:;">
            <i class="fa fa-toggle-on"></i>
            <span>Users</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{route('audit-admins.index')}}">
                    <i class="fa fa-user"></i>
                    <span>Admins</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- /ui -->

    <!-- forms -->
    <li>
        <a href="javascript:;">
            <i class="fa fa-wrench"></i>
            <span>Verification</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{route('audit.index')}}">
                    <i class="fa fa-area-chart"></i>
                    <span>Workers</span>
                </a>
            </li>
{{--            <li>--}}
{{--                <a href="{{route('operation.index')}}">--}}
{{--                    <i class="fa fa-area-chart"></i>--}}
{{--                    <span>Operations</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="{{route('repair.index')}}">--}}
{{--                    <i class="fa fa-area-chart"></i>--}}
{{--                    <span>Repairs</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="{{route('service.index')}}">--}}
{{--                    <i class="fa fa-diamond"></i>--}}
{{--                    <span>Servicing</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="{{route('roadworthy.index')}}">--}}
{{--                    <i class="fa fa-area-chart"></i>--}}
{{--                    <span>Road worthy</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="{{route('insurance.index')}}">--}}
{{--                    <i class="fa fa-plus"></i>--}}
{{--                    <span>Insurance</span>--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>
    </li>
    <!-- charts -->

    <!-- forms -->
{{--    <li>--}}
{{--        <a href="javascript:;">--}}
{{--            <i class="fa fa-wrench"></i>--}}
{{--            <span>Expenditure</span>--}}
{{--        </a>--}}
{{--        <ul class="sub-menu">--}}
{{--            <li>--}}
{{--                <a href="{{route('expenses.index')}}">--}}
{{--                    <i class="fa fa-folder"></i>--}}
{{--                    <span>Repairs</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li>--}}
{{--                <a href="{{route('serviceExpense.index')}}">--}}
{{--                    <i class="fa fa-area-chart"></i>--}}
{{--                    <span>Servicing</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </li>--}}

{{--    <li>--}}
{{--        <a href="{{route('insuranceExpenses.index')}}">--}}
{{--            <i class="fa fa-plus"></i>--}}
{{--            <span>Expired Insurance</span>--}}
{{--        </a>--}}
{{--    </li>--}}
    <!-- charts -->
</ul>

