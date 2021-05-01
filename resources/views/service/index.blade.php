@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">VEHICLE SERVICES</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')
    {!! Form::open(['method'=>'POST','action'=>'servicesController@store','class'=>'modal model-default','id'=>'date', 'tabindex'=>'','aria-hidden'=>'true','role'=>'dialog'] ) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Service Data Entry Point
            </div>
            <div class="modal-body" id="vehicle-form">
                <div class="">
                    <div class="col-md-12">
                        <div class="form-group">
                        </div>
                    </div>
                    {{--<div class="col-md-12">--}}
                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('date','Date(mm/dd/yy)',['class'=>'control-label bold']) !!}--}}
                            {{--<div class="input-group">--}}
                                {{--<div class="input-group-addon"><i class="fa fa-wrench"></i></div>--}}
                                {{--{!! Form::date('date',null,['class'=>'form-control','required'=>'required']) !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="col-md-12">
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
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Data</a>
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="" data-toggle="modal" data-target="#date">+Add New service</a>
                    </li>

                </ol>
            </tr>
            <tr>
                <th>Description</th>
                <th>Amount</th>
                <th>Garage Name</th>
                <th>Date Presented</th>
                <th>Date Returned</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{$service->description}}</td>
                    <td>{{$service->amount}}</td>
                    <td>{{$service->garageName}}</td>
                    <td>{{$service->datePresented}}</td>
                    <td>{{$service->dateReturned}}</td>
                    <td><a href="{{route('service.edit',$service->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></td>
                    <td>
                        {!! Form::model($service,['method'=>'DELETE','action'=>['servicesController@destroy',$service->id],'onsubmit' => 'return ConfirmDelete()',],['class'=>'form-inline'])!!}
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