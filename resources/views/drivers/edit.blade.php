@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">Drivers</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')
    <div class="row">
        {!! Form::model($drivers,['method'=>'PUT','action'=>['driversController@update',$drivers->id],'files'=>true,'onsubmit'=>'return ConfirmUpdate()'],['class'=>'form-inline'] ) !!}
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('name','Driver Name',['class'=>'control-label bold']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                    {!! Form::text('name',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group ">
                {!! Form::label('tel','Phone Number',['class'=>'control-label']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    {!! Form::text('tel',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('email','Email',['class'=>'control-label bold']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                    {!! Form::text('email',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group ">
                {!! Form::label('vehicle_id','Vehicle',['class'=>'control-label']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <?php $vehicless=\App\vehicles::pluck('make','id')->all();?>
                    {!! Form::select('vehicle_id',[''=>'--Select Vehicle--']+$vehicless,null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <a href="{{route('drivers.index')}}" class="btn btn-danger btn-sm">Close</a>
        <button class="btn btn-primary btn-sm">Update</button>

        {!! Form::close() !!}
    </div>


    <script type="text/javascript">

        function ConfirmUpdate()
        {
            var x = confirm("Are you sure you want to Update?");
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