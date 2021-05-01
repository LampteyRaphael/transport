@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">Drivers</p>
    </li>
@endsection
   @section('content')
   @include('includes.alert')
   {!! Form::open(['method'=>'POST','action'=>'driversController@store','class'=>'modal model-default','id'=>'date', 'tabindex'=>'','aria-hidden'=>'true','role'=>'dialog'] ) !!}
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
                           {!! Form::label('name','Driver Name',['class'=>'control-label bold']) !!}
                           <div class="input-group">
                               <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                               {!! Form::text('name',null,['class'=>'form-control','required'=>'required']) !!}
                           </div>
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="form-group ">
                           {!! Form::label('tel','Phone Number',['class'=>'control-label']) !!}
                           <div class="input-group">
                               <div class="input-group-addon"><i class="fa fa-user"></i></div>
                               {!! Form::text('tel',null,['class'=>'form-control','required'=>'required']) !!}
                           </div>
                       </div>
                   </div>

                   <div class="col-md-6">
                       <div class="form-group">
                           {!! Form::label('email','Email',['class'=>'control-label bold']) !!}
                           <div class="input-group">
                               <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                               {!! Form::text('email',null,['class'=>'form-control','required'=>'required']) !!}
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

    <table class="table table-bordered">
        <thead>
        <tr>
            <ol class="breadcrumb mb0 no-padding">
                <li>
                    <a href="#">Drivers</a>
                </li>
                <li>
                    <a href="#">Data</a>
                </li>
                <li>
                    <a class="btn btn-primary btn-xs" href="" data-toggle="modal" data-target="#date">+Add New Driver</a>
                </li>
            </ol>
        </tr>
        <tr>
            <td>Name</td>
            <td>Tel</td>
            <td>Email</td>
            <td>Vehicle</td>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($drivers as $driver)
            <tr>
                <td>{{$driver->name}}</td>
                <td>{{$driver->tel}}</td>
                <td>{{$driver->email}}</td>
                <td>{{$driver->vehicle? $driver->vehicle->make:''}}</td>
                <td><a href="{{route('drivers.edit',$driver->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></td>
                <td>
                    {!! Form::model($driver,['method'=>'DELETE','action'=>['driversController@destroy',$driver->id],'onsubmit' => 'return ConfirmDelete()',],['class'=>'form-inline'])!!}
                    <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-edit"></i></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


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