@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">INSURANCE</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')

    <div class="row">
        {!! Form::model($insurance,['method'=>'PUT','action'=>['insuranceController@update',$insurance->id]] ) !!}

        <div class="col-md-12">
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

        <div class="form-group">
            {!! Form::submit('Close',['class'=>'btn  btn-danger','data-dismiss'=>'modal']) !!}
            {!! Form::submit('submit',['class'=>'btn  btn-info']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    <script type="text/javascript">

        {{--$(document).ready(function() {--}}
        {{--$(function () {--}}
        {{--$('#data-table').DataTable({--}}
        {{--processing: true,--}}
        {{--serverSide: true,--}}
        {{--ajax:"{{ route('vehicle.index') }}",--}}
        {{--columns: [--}}
        {{--{data: 'make',name:'make'},--}}
        {{--{data:'regNo',name:'regNo'},--}}
        {{--{data: 'chasisNo',name:'chasisNo'},--}}
        {{--{data: 'yearMade',name:'yearMade'},--}}
        {{--{data: 'purchaseDate',name:'purchaseDate'},--}}
        {{--{data: 'colour',name:'colour'},--}}
        {{--{data: 'countryOfOrigin',name:'countryOfOrigin'},--}}
        {{--{data: 'cubicCentimeter', name: 'cubicCentimeter'},--}}
        {{--{data: 'fuel', name: 'fuel', orderable: true, searchable: true},--}}
        {{--],--}}
        {{--});--}}

        {{--});--}}

        {{--});  --}}


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