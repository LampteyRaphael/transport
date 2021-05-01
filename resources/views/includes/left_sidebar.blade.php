<!-- quick launch panel -->
<div class="quick-launch-panel">
  <div class="container">
    <div class="quick-launcher-inner">
      <a href="javascript:;" class="close" data-toggle="quick-launch-panel">×</a>
      <div class="css-table-xs">
        {{--@if(Auth::user()->isAdminHeadQuarters())--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('dashboard.index')}}">--}}
              {{--<i class="icon-marquee"></i>--}}
              {{--<span>Dashboard</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('region.index')}}">--}}
              {{--<i class="icon-drop"></i>--}}
              {{--<span>Regions</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('area.index')}}">--}}
              {{--<i class="icon-search"></i>--}}
              {{--<span>Areas</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('district.index')}}">--}}
              {{--<i class="icon-speech-bubble"></i>--}}
              {{--<span>Districts</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('locals.index')}}">--}}
              {{--<i class="icon-pie-graph"></i>--}}
              {{--<span>Locals</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('regioncircular.index')}}">--}}
              {{--<i class="icon-esc"></i>--}}
              {{--<span>Announcement</span>--}}
            {{--</a>--}}
          {{--</div>--}}
        {{--@elseif(Auth::user()->isAreaAdmin())--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('areaDashboard.index')}}">--}}
              {{--<i class="icon-marquee"></i>--}}
              {{--<span>Dashboard</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('areamembers.index')}}">--}}
              {{--<i class="icon-drop"></i>--}}
              {{--<span>Church Members</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="app-messages.html">--}}
              {{--<i class="icon-mail"></i>--}}
              {{--<span>Messages</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('waiting.index')}}">--}}
              {{--<i class="icon-speech-bubble"></i>--}}
              {{--<span>Announcement</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('level.index')}}">--}}
              {{--<i class="icon-pie-graph"></i>--}}
              {{--<span>Area-local</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="javascript:;">--}}
              {{--<i class="icon-esc"></i>--}}
              {{--<span>Audit Trail</span>--}}
            {{--</a>--}}
          {{--</div>--}}

        {{--@elseif(Auth::user()->isAdminDistrict())--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('dashboard-d.index')}}">--}}
              {{--<i class="icon-marquee"></i>--}}
              {{--<span>Dashboard</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('addnew.index')}}">--}}
              {{--<i class="icon-drop"></i>--}}
              {{--<span>Church Members</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="#">--}}
              {{--<i class="icon-mail"></i>--}}
              {{--<span>Messages</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('circular1.index')}}">--}}
              {{--<i class="icon-speech-bubble"></i>--}}
              {{--<span>Announcement</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('districtAttendance')}}">--}}
              {{--<i class="icon-pie-graph"></i>--}}
              {{--<span>Attendance</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="javascript:;">--}}
              {{--<i class="icon-esc"></i>--}}
              {{--<span>Audit Trail</span>--}}
            {{--</a>--}}
          {{--</div>--}}
        {{--@elseif(Auth::user()->isAdminLocal())--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('local.index')}}">--}}
              {{--<i class="icon-marquee"></i>--}}
              {{--<span>Dashboard</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('registration.index')}}">--}}
              {{--<i class="icon-drop"></i>--}}
              {{--<span>Church Members</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('birthday.index')}}">--}}
              {{--<i class="icon-mail"></i>--}}
              {{--<span>Messages</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('nationalcircular.index')}}">--}}
              {{--<i class="icon-speech-bubble"></i>--}}
              {{--<span>Announcement</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('attendance.index')}}">--}}
              {{--<i class="icon-pie-graph"></i>--}}
              {{--<span>Attendance</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="{{route('audit-trail.index')}}">--}}
              {{--<i class="icon-esc"></i>--}}
              {{--<span>Audit Trail</span>--}}
            {{--</a>--}}
          {{--</div>--}}
        {{--@elseif(Auth::user()->isMember())--}}
          {{--<div class="col">--}}
            {{--<a href="#">--}}
              {{--<i class="icon-marquee"></i>--}}
              {{--<span>Dashboard</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="#">--}}
              {{--<i class="icon-drop"></i>--}}
              {{--<span>Church Members</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="#">--}}
              {{--<i class="icon-mail"></i>--}}
              {{--<span>Messages</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="#">--}}
              {{--<i class="icon-speech-bubble"></i>--}}
              {{--<span>Announcement</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="#">--}}
              {{--<i class="icon-pie-graph"></i>--}}
              {{--<span>Attendance</span>--}}
            {{--</a>--}}
          {{--</div>--}}
          {{--<div class="col">--}}
            {{--<a href="javascript:;">--}}
              {{--<i class="icon-esc"></i>--}}
              {{--<span>Audit Trail</span>--}}
            {{--</a>--}}
          {{--</div>--}}

        {{--@endif--}}

      </div>
    </div>
  </div>
</div>
<!-- /quick launch panel -->

<div class="app layout-fixed-header">

  <!-- sidebar panel -->
  <div class="sidebar-panel offscreen-left">

    <div class="brand">
      {{--<img src="{{asset('photos/logo4.png')}}" height="30" alt="">--}}
        <span style="color: white; padding-left:0px; font-size:1.2em; overflow:hidden; font-weight: bold; font-family:sans-serif, sans-serif">TACMS-HQ</span>
      <!-- logo -->
      <div class="brand-logo">

      </div>
      <!-- /logo -->

      <!-- toggle small sidebar menu -->
      <a href="javascript:;" class="toggle-sidebar hidden-xs hamburger-icon v3 " data-toggle="layout-small-menu">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </a>
      <!-- /toggle small sidebar menu -->

    </div>

    <!-- main navigation -->
    <nav role="navigation">

      <img class="img img-responsive" src="{{asset('photos/logo 2.png')}}" alt="banner" width="30%" height="30%" style="margin-left: 50px;">

        @if(Auth::user()->audit())

            @include('includes.audit')

        @elseif(Auth::user()->transport())

            @include('includes.transport')

        @endif

    </nav>
    <!-- /main navigation -->
  </div>

