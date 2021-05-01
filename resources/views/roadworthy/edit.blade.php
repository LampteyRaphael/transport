@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">ROADWORTHY OF VEHICLES</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')
    <div class="row">
        {!! Form::model($roadworthy,['method'=>'PUT','action'=>['roadworthyController@update',$roadworthy->id]] ) !!}

        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('renewalDate','Renewal Date(mm/dd/yy)',['class'=>'control-label bold']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                    {!! Form::date('renewalDate',Carbon\Carbon::now(),['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('expiringDate','Expiring Date(mm/dd/yy)',['class'=>'control-label bold']) !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                    {!! Form::date('expiringDate',Carbon\Carbon::now(),['class'=>'form-control','required'=>'required']) !!}
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



        <div class="form-group col-md-1 pull-right">

            {!! Form::submit('submit',['class'=>'btn  btn-info']) !!}
        </div>

        {!! Form::close() !!}
        <div class="form-group pull-right">

            {{--{!! Form::open(['method'=>'POST','action'=>'roadworthyController@index'],['class'=>'form-inline'])!!}--}}
            {{--<button class="btn btn-danger" type="submit">Close</button>--}}
            {{--{!! Form::close() !!}--}}
        </div>

    </div>



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