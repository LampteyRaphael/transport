@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">Admin Users</p>
    </li>
@endsection

@section('content')

  @include('includes.alert')
  @include('includes.form_error')

  {!! Form::open(['method'=>'POST','action'=>'usersController@store','class'=>'modal model-default','id'=>'date', 'tabindex'=>'','aria-hidden'=>'true','role'=>'dialog'] ) !!}
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            Admin Users Data Entry Point
          </div>
          <div class="modal-body" id="vehicle-form">
              <div class="row justify-content-center">
                  <div class="">
                      <div class="card">
                          <div class="card-header">{{ __('Register') }}</div>

                          <div class="card-body">
                              <form method="POST" action="{{ route('register') }}">
                                  @csrf
                                  <div class="form-group row">
                                      <label for="name" class="col-md-4 col-form-label text-md-right" style="color:red;">{{ __('Name') }}</label>

                                      <div class="col-md-6">
                                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                          @error('name')
                                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                          @enderror
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="email" class="col-md-4 col-form-label text-md-right" style="color:red;">{{ __('E-Mail Address') }}</label>

                                      <div class="col-md-6">
                                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                          @error('email')
                                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                          @enderror
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="password" class="col-md-4 col-form-label text-md-right" style="color:red;">{{ __('Password') }}</label>

                                      <div class="col-md-6">
                                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                          @error('password')
                                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                          @enderror
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color:red;">{{ __('Confirm Password') }}</label>

                                      <div class="col-md-6">
                                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                      </div>
                                  </div>

                                  {{--<div class="form-group row mb-0">--}}
                                      {{--<div class="col-md-6 offset-md-4">--}}
                                          {{--<button type="submit" class="btn btn-primary">--}}
                                              {{--{{ __('Register') }}--}}
                                          {{--</button>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="modal-footer no-border">
              <div class="form-group">
                  {!! Form::submit('Close',['class'=>'btn  btn-danger','data-dismiss'=>'modal']) !!}
                  {!! Form::submit('submit',['class'=>'btn  btn-info']) !!}
              </div>
          </div>
      </div>
  </div>
  {!! Form::close() !!}

    <table class="table table-bordered">
        <thead>
        <tr>
            <ol class="breadcrumb mb0 no-padding">
                <li>
                    <a href="#">Admin Users</a>
                </li>
                <li>
                    <a href="#">Data</a>
                </li>
                <li>
                    <a class="btn btn-primary btn-xs" href="" data-toggle="modal" data-target="#date">+Add New Admin User</a>
                </li>

            </ol>
        </tr>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a href="" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></td>
                <td>
                    {!! Form::model($user,['method'=>'DELETE','action'=>['usersController@destroy',$user->id],'onsubmit' => 'return ConfirmDelete()',],['class'=>'form-inline'])!!}
                    <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-edit"></i></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


  <script type="text/javascript">

      function ConfirmUpdate()
      {
          var x = confirm("Are you sure you want to Edit?");
          if (x)
              return true;
          else
              return false;
      }


      function ConfirmDelete()
      {
          var x = confirm("Are you sure you want to delete?");
          if (x)
              return true;
          else
              return false;
      }

  </script>


@endsection