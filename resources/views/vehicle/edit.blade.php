@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">Vehicle</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')
<div class="row">
    {!! Form::model($vehicles,['method'=>'PATCH','action'=>['vehicleController@update',$vehicles->id],'files'=>true,'onsubmit'=>'return ConfirmUpdate()'],['class'=>'form-inline'])!!}

        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('make','Make',['class'=>'control-label bold']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                    {!! Form::text('make',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group ">
                {!! Form::label('regNo','Registered Number',['class'=>'control-label']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    {!! Form::text('regNo',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('chasisNo','Chase Number',['class'=>'control-label bold']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                    {!! Form::text('chasisNo',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group ">
                {!! Form::label('yearMade','Year Make',['class'=>'control-label']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    {!! Form::selectyear('yearMade',1990,\Carbon\Carbon::now()->year,\Carbon\Carbon::now()->year,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('purchaseDate','Purchase Date(mm/dd/yy)',['class'=>'control-label bold']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                    {!! Form::date('purchaseDate',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group ">
                {!! Form::label('colour','Color',['class'=>'control-label']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    {!! Form::text('colour',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group ">
                {!! Form::label('countryOfOrigin','Country Of Origin',['class'=>'control-label']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    {!! Form::text('countryOfOrigin',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group ">
                {!! Form::label('cubicCentimeter','Cubic Centimeter',['class'=>'control-label']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    {!! Form::text('cubicCentimeter',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group ">
                {!! Form::label('fuel','Fuel',['class'=>'control-label']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    {!! Form::text('fuel',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-2 col-md-offset-3">
            <br><br>
            <div class="form-group">
                <a href="{{route('vehicle.index')}}" class="btn btn-danger btn-sm">Close</a>
                <button class="btn btn-primary btn-sm" type="submit">Submit</button>

            </div>

        </div>
    {!! Form::close() !!}
</div>

    <script>

        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }

        function ConfirmUpdate()
        {
            var x = confirm("Are you sure you want to update?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
@endsection
