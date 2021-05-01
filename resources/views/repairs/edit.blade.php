@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">REPAIRS</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')
    <div class="row">
    {!! Form::model($repair,['method'=>'PUT','action'=>['repairController@update',$repair->id]] ) !!}

        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('date','Date(mm/dd/yy)',['class'=>'control-label bold']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                    {!! Form::date('date',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group ">
                {!! Form::label('description','Description',['class'=>'control-label']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    {!! Form::textarea('description',null,['class'=>'form-control','rows'=>2,'required'=>'required']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('amount','Amount',['class'=>'control-label bold']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                    {!! Form::number('amount',null,['class'=>'form-control','step'=>'any','required'=>'required']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group ">
                {!! Form::label('garageName','Garage Name',['class'=>'control-label']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    {!! Form::text('garageName',null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('datePresented','Date Presented(mm/dd/yy)',['class'=>'control-label bold']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                    {!! Form::date('datePresented',Carbon\Carbon::now(),['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group ">
                {!! Form::label('dateReturned','Date Returned',['class'=>'control-label']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    {!! Form::date('dateReturned',Carbon\Carbon::now(),['class'=>'form-control','required'=>'required']) !!}
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

        <div class="col-md-6">
            <div class="form-group">
                {!! Form::submit('Close',['class'=>'btn  btn-danger','data-dismiss'=>'modal']) !!}
                {!! Form::submit('submit',['class'=>'btn  btn-info']) !!}
            </div>
        </div>

    </div>
    {!! Form::close() !!}


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
