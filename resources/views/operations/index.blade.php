@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">OPERATION</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>

            <tr>
                <ol class="breadcrumb mb0 no-padding">
                    <li>
                        <a href="#">operation</a>
                    </li>
                    <li>
                        <a href="#">Data</a>
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="" data-toggle="modal" data-target="#date">Add New Vehicle</a>
                    </li>

                </ol>            </tr>
            <tr>
                <th>Vehicle</th>
                <th>Driver Assigned </th>
                <th>departurePoint</th>
                <th>departureMileagee</th>
                <th>destination</th>
                <th>Date</th>
                <th>Officer Assigned</th>
                <th>Assignment Completion Time</th>
                <th>Arrival Mileage</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($operations as $operation)
                <tr>
                    <td>{{$operation->vehicle? $operation->vehicle->make:''}}</td>
                    <td>{{$operation->driver->name}}</td>
                    <td>{{$operation->departurePoint}}</td>
                    <td>{{$operation->departureMileage}}</td>
                    <td>{{$operation->destination}}</td>
                    <td>{{$operation->date}}</td>
                    <td>{{$operation->officerAssigned}}</td>
                    <td>{{$operation->assignmentCompletionTime}}</td>
                    <td>{{$operation->arrivalMileage}}</td>
                    <td><a href="{{route('operation.edit',$operation->id)}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a></td>
                    <td>{!! Form::open(['method'=>'DELETE','action'=>['operationController@destroy',$operation->id],'onsubmit' => 'return ConfirmDelete()',],['class'=>'form-inline'])!!}
                        <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-edit"></i></button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {!! Form::open(['method'=>'POST','action'=>'operationController@store','class'=>'modal model-default','id'=>'date', 'tabindex'=>'-1','aria-hidden'=>'true','role'=>'dialog'] ) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Operation Data Entry Point
            </div>
            <div class="modal-body" id="vehicle-form">

                    <div class="col-md-12">
                        <div class="form-group">
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
                            {!! Form::label('driver_id','Driver Assigned',['class'=>'control-label bold']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                                {!! Form::select('driver_id',[''=>'--Choose Option--']+$drivers,null,['class'=>'form-control','required'=>'required']) !!}
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

    <script type="text/javascript">
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