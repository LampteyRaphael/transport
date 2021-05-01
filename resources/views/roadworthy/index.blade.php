@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">ROADWORTHY OF VEHICLES</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')
    {!! Form::open(['method'=>'POST','action'=>'roadworthyController@store','class'=>'modal model-default','id'=>'date', 'tabindex'=>'','aria-hidden'=>'true','role'=>'dialog'] ) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Repairs Data Entry Point
            </div>
            <div class="modal-body" id="vehicle-form">
                <div class="">
                    <div class="col-md-12">
                        <div class="form-group">
                        </div>
                    </div>
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

    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <ol class="breadcrumb mb0 no-padding">
                    <li>
                        <a href="#">Roadworthy</a>
                    </li>
                    <li>
                        <a href="#">Data</a>
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="" data-toggle="modal" data-target="#date">+Add New Roadworthy</a>
                    </li>

                </ol>
            </tr>
            <tr>
                <th>Vehicle</th>
                <th>Renewal Date</th>
                <th>Expiring Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roadworthys as $roadworthy)
                <tr>
                     <td>{{$roadworthy->vehicle?$roadworthy->vehicle->make:''}}</td>
                    <td>{{$roadworthy->renewalDate}}</td>
                    <td>{{$roadworthy->expiringDate}}</td>
                    <td><a href="{{route('roadworthy.edit',$roadworthy->id)}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a></td>
                    <td>
                        {!! Form::model($roadworthy,['method'=>'DELETE','action'=>['roadworthyController@destroy',$roadworthy->id],'onsubmit' => 'return ConfirmDelete()',],['class'=>'form-inline'])!!}
                        <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-edit"></i></button>
                        {!! Form::close() !!}
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
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