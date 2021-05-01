@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <img src="{{url('/photos/logo 2.png')}}" alt="banner" width="100px" height="100px">
                        <div class="panel-body" style="padding-bottom: 200px;padding-top:10px;">
                            <h1 class="text-center">Oops you have encountered an error</h1>

                            <h1 class="text-center">404</h1>

                            <p class="error-text text-center"> It appears the page you are looking for doesn't exist.</p>

                            <p class="text-center">
                                or you dont have Permission to the page
                            </p>
                            <p class="text-center">
                                @guest
                                    <a style="color: #f3f3f3; font-size:20px" href="{{ route('login') }}">Click here to Login</a>
                                @else

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                @endguest

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
