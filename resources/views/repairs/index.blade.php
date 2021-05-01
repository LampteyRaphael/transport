@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">REPAIRS</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')
    {!! Form::open(['method'=>'POST','action'=>'repairController@store','class'=>'modal model-default','id'=>'date', 'tabindex'=>'','aria-hidden'=>'true','role'=>'dialog'] ) !!}
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
                            {!! Form::label('date','Date(mm/dd/yy)',['class'=>'control-label bold']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                                {!! Form::date('date',null,['class'=>'form-control','required'=>'required']) !!}
                            </div>
                        </div>
                    </div>

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

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <ol class="breadcrumb mb0 no-padding">
                    <li>
                        <a href="#">Repairs</a>
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
                <th>Vehicle</th>
                <th>Date</th>
                <th>Description</th>
                <th>Amount(GHS)</th>
                <th>Garage Name</th>
                <th>Date Presented</th>
                <th>Date Returned</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <div class="table-responsive">
            @foreach($repairs as $repair)
                <tr>
                    <td>{{$repair->vehicle? $repair->vehicle->make:''}}</td>
                    <td>{{$repair->date}}</td>
                    <td>{{$repair->description}}</td>
                    <td>{{$repair->amount}}</td>
                    <td>{{$repair->garageName}}</td>
                    <td>{{$repair->datePresented}}</td>
                    <td>{{$repair->dateReturned}}</td>
                    <td><a href="{{route('repair.edit',$repair->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></td>
                    <td>
                        {!! Form::model($repair,['method'=>'DELETE','action'=>['repairController@destroy',$repair->id],'onsubmit' => 'return ConfirmDelete()',],['class'=>'form-inline'])!!}
                        <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-edit"></i></button>
                        {!! Form::close() !!}
                    </td>

                </tr>
            </div>
            @endforeach
            </tbody>
        </table>
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