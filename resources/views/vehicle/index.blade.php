@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">VEHICLES</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')
    {!! Form::open(['method'=>'POST','action'=>'vehicleController@store','class'=>'modal model-default','id'=>'date', 'tabindex'=>'','aria-hidden'=>'true','role'=>'dialog'] ) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Vehicles Data Entry Point
            </div>
            <div class="modal-body" id="vehicle-form">
                <div class="">
                    <div class="col-md-12">
                        <div class="form-group">
                        </div>
                    </div>
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
                                {!! Form::selectyear('yearMade',1880,\Carbon\Carbon::now()->year,\Carbon\Carbon::now()->year,['class'=>'form-control','required'=>'required']) !!}
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
    <table class="table table-bordered" id="data-table">
    <thead>
    <tr>
        <ol class="breadcrumb mb0 no-padding">
            <li>
                <a href="#">Vehicles</a>
            </li>
            <li>
                <a href="#">Data</a>
            </li>
            <li>
                <a class="btn btn-primary btn-xs" href="" data-toggle="modal" data-target="#date">+Add New Vehicle</a>
            </li>

        </ol>
    </tr>
    <tr>
        <th>Make</th>
        <th>Registered Number</th>
        <th>Chase Number</th>
        <th>Year Make</th>
        <th>Purchase Date</th>
        <th>Color </th>
        <th>Country Of Origin</th>
        <th>Cubic Centimeter</th>
        <th>Fuel</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($vehicles as $vehicle)
    <tr>
        <td>{{$vehicle->make}}</td>
        <td>{{$vehicle->regNo}}</td>
        <td>{{$vehicle->chasisNo}}</td>
        <td>{{$vehicle->yearMade}}</td>
        <td>{{$vehicle->purchaseDate}}</td>
        <td>{{$vehicle->colour}}</td>
        <td>{{$vehicle->countryOfOrigin}}</td>
        <td>{{$vehicle->cubicCentimeter}}</td>
        <td>{{$vehicle->fuel}}</td>
        <td>
            <a href="{{route('vehicle.edit',$vehicle->id)}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
        </td>
        <td>
            {!! Form::model($vehicle,['method'=>'DELETE','action'=>['vehicleController@destroy',$vehicle->id],'onsubmit' => 'return ConfirmDelete()'],['class'=>'form-inline'])!!}
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