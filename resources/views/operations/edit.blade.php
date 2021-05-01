@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">OPERATION</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')
{!! Form::model($operations,['method'=>'PUT','action'=>['operationController@update',$operations->id]] ) !!}
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

        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('driver_id','Driver Assigned',['class'=>'control-label bold']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                    {!! Form::select('driver_id',$drivers,null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

            <div class="col-md-6">
                <div class="form-group ">
                    {!! Form::label('departurePoint','Departure Point',['class'=>'control-label']) !!}
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('departurePoint',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('departureMileage','Departure Mileage',['class'=>'control-label bold']) !!}
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                        {!! Form::text('departureMileage',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group ">
                    {!! Form::label('destination','Destination',['class'=>'control-label']) !!}
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('destination',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('date','Date (mm/dd/yy)',['class'=>'control-label bold']) !!}
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                        {!! Form::date('date',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group ">
                    {!! Form::label('officerAssigned','Officer Assigned',['class'=>'control-label']) !!}
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('officerAssigned',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group ">
                    {!! Form::label('assignmentCompletionTime','Assignment CompletionTime',['class'=>'control-label']) !!}
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('assignmentCompletionTime',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group ">
                    {!! Form::label('arrivalMileage','Arrival Mileage',['class'=>'control-label']) !!}
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        {!! Form::text('arrivalMileage',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>

   {!! Form::submit('Close',['class'=>'btn  btn-danger','data-dismiss'=>'modal']) !!}
   {!! Form::submit('submit',['class'=>'btn  btn-info']) !!}


{!! Form::close() !!}

@endsection