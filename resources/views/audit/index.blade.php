@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text"> Members & Signatures</p>
    </li>
@endsection
@section('content')
{{--    @include('includes.alert')--}}
{{--    @include(('includes.form_error'))--}}
    {!! Form::open(['method'=>'PUT','action'=>['AuditController@update','loading.....'],'files'=>true,'class'=>'modal fade','id'=>'update', 'tabindex'=>'-1','aria-hidden'=>'true','role'=>'dialog','onsubmit'=>'return ConfirmUpdate()'] ) !!}
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                Data Entry Point
            </div>
            <div class="modal-body">

                <div class="row">
                    <input type="hidden" name="id" value="" id="id"/>
                    <div class="col-12">

                        <div class="col-6 pull-left">
                            <div  class="avatar avatar-sm rounded-circle img-circle" style="width:100px; height:100px;overflow: hidden;">
                                <img class="" id="myImage" src="" alt="" style="max-width: 100px;">
                            </div>
                            {!! Form::label('photo_id','Upload Profile Picture',['class'=>'control-label']) !!}
                            {!! Form::file('photo_id',null,['class'=>'form-control','required'=>'required']) !!}
                        </div>

                        <div class="col-6 pull-right">
                            <div  class="avatar avatar-sm rounded-rounded img-rounded" style="width:100px; height:100px;overflow: hidden;">
                                <img class="" id="mysignature" src="" alt="" style="max-width: 100px;">
                            </div>
                            {!! Form::label('audit_photos_id','Upload Signature',['class'=>'control-label']) !!}
                            {!! Form::file('audit_photos_id',null,['class'=>'form-control','required'=>'required']) !!}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="">
                        <div class="form-group ">
                            {!! Form::label('name','Name',['class'=>'control-label']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                {!! Form::text('name',null,['class'=>'form-control','required'=>'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-5">
                    <div class="">
                        <div class="form-group">
                            {!! Form::label('email','Email',['class'=>'control-label bold']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                                {!! Form::text('email',null,['class'=>'form-control','required'=>'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="">
                        <div class="form-group ">
                            {!! Form::label('phoneNumber','Phone Number',['class'=>'control-label']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                {!! Form::text('phoneNumber',null,['class'=>'form-control','required'=>'required']) !!}
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



    {!! Form::open(['method'=>'POST','action'=>'AuditController@store','files'=>true,'class'=>'modal fade','id'=>'add', 'tabindex'=>'-1','aria-hidden'=>'true','role'=>'dialog'] ) !!}
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
               Data Entry Point
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="">
                        <div class="form-group ">
                            {!! Form::label('name','Name',['class'=>'control-label']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                {!! Form::text('name',null,['class'=>'form-control','required'=>'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-5">
                    <div class="">
                        <div class="form-group">
                            {!! Form::label('email','Email',['class'=>'control-label bold']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-wrench"></i></div>
                                {!! Form::text('email',null,['class'=>'form-control','required'=>'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="">
                        <div class="form-group ">
                            {!! Form::label('phoneNumber','Phone Number',['class'=>'control-label']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                {!! Form::text('phoneNumber',null,['class'=>'form-control','required'=>'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="">
                        <div class="form-group ">
                            {!! Form::label('audit_photos_id','Upload Signature',['class'=>'control-label']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                {!! Form::file('audit_photos_id',null,['class'=>'form-control','required'=>'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="">
                        <div class="form-group ">
                            {!! Form::label('photo_id','Upload Profile Image',['class'=>'control-label']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                {!! Form::file('photo_id',null,['class'=>'form-control','required'=>'required']) !!}
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
{{--    <div class="panel">--}}
{{--        <div class="panel-heading panel-success">Audit Signatures</div>--}}
{{--        <div class="panel-body">--}}


            <table class="table table-striped border">
                @if ($audit)
                    <thead class="btn-info">
                    <tr>
                        <th>Image</th>
                        <th>Signature</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>
                            {!! Form::open(['method'=>'POST','action'=>'AuditSearchController@store'] ) !!}
                               {!! Form::text('search',null,['class'=>'btn-info bold','required'=>'required']) !!}

                               <button type="submit" class="btn btn-xs btn-danger">search</button>
                            {!! Form::close() !!}
                        </th>
                        <th colspan="2">
                            <a href="#" data-toggle="modal" data-target="#add" class="btn btn-xs btn-default ">Create</a>
                        </th>

                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($audit as $item)
                        <tr>

                            <td>

                                <img class="img-rounded" height="50" width="50" src="{{$item->photo? $item->photo->file :asset('images/placeholder.png')}}" alt="">
                            </td>
                            <td>
                                <img class="img-rounded" height="50" width="50" src="{{$item->signature? $item->signature->file :asset('images/placeholder.png')}}" alt="">
                            </td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phoneNumber}}</td>
                            <td>{{$item->created_at->diffForHumans()}}</td>
                            <td>{{$item->updated_at->diffForHumans()}}</td>
                            <td>
                                <a href="javascript:(0)"
                                       data-ids="{{$item->id}}"
                                       data-names="{{$item->name}}"
                                       data-emails="{{$item->email}}"
                                       data-phone="{{$item->phoneNumber}}"
                                       data-photo="{{$item->photo? $item->photo->file:''}}"
                                       data-signaturephoto="{{$item->signature? $item->signature->file:''}}"
                                       data-toggle="modal" data-target="#update" class="btn btn-primary">edit</a>
                            </td>
                            <td>
                                    <a href="javascript:(0)"
                                       data-ids="{{$item->id}}"
                                       data-names="{{$item->name}}"
                                       data-emails="{{$item->email}}"
                                       data-phone="{{$item->phoneNumber}}"
                                       data-photo="{{$item->photo? $item->photo->file:''}}"
                                       data-signaturephoto="{{$item->signature? $item->signature->file:''}}"
                                       data-toggle="modal" data-target="#delete"  class="btn btn-success">details</a>
                            </td>
                            <td>
                                <div class="row">
                                    {!! Form::open(['method'=>'DELETE','action'=>['AuditController@destroy',$item->id],'files'=>true,'onsubmit'=>'return ConfirmDelete()'] ) !!}
                                    <button class="btn btn-danger">delete</button>
                                    {!! Form::close() !!}
                                </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot class="btn-info">
                    <tr>
                        <th>Image</th>
                        <th>Signature</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th colspan="2">Action</th>
                        <th>
                            {{$audit->links()}}
                        </th>
                    </tr>
                    </tfoot>
            </table>
            @else
                <p>
                <h2 class="text-danger">No Data Available</h2>
                </p>
            @endif
{{--        </div>--}}
{{--    </div>--}}
</div>


  <div class="modal fade" id="delete"  tabindex='-1'   aria-hidden='true' role='dialog'>
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                Delete Entry Point
            </div>
            <div class="modal-body">

                <div class="row text-center">
                    <i class="fa fa-user"></i> <div id="name"></div>
                </div>
                <div class="row text-center">
                    <i class="fa fa-mail-forward"></i>  <div id="email"></div>
                </div>
                <div class="row text-center">
                    <i class="fa fa-phone"></i>  <div id="phoneNumber"></div>
                </div>
                <div class="row text-center">
                    <div  class="avatar avatar-sm rounded-circle img-circle" style="width:300px; height:300px;overflow: hidden;">
                        <img class="" id="myImage" src="" alt="" style="max-width: 300px;">
                    </div>
                </div>
                <div class="row text-center">
                    <div  class="avatar avatar-sm rounded-rounded img-rounded" style="width:300px; height:300px;overflow: hidden;">
                        <img class="" id="mysignature" src="" alt="" style="max-width: 300px;">
                    </div>
                </div>
            </div>
            <div class="modal-footer no-border">
            </div>
        </div>
    </div>
 </div>



    {{-- <script type="text/javascript">
        Swal.fire(
            'The Internet?',
            'That thing is still around?',
            'question'
        )
    </script> --}}

@endsection
