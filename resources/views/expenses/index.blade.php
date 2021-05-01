@extends('layouts.master_table')
@section('dashboard')
    <li>
        <p class="navbar-text">Repairs</p>
    </li>
@endsection
@section('content')
@include('includes.alert')
<div class="table-responsive">
<div class="widget">
    <div class="widget-body bg-white">
        <table class="table table-info">
            <thead>
            <tr>
                <ol class="breadcrumb mb0 no-padding">
                    <li>
                        <a href="{{route('expenses.index')}}">Repairs</a>
                    </li>
                    <li>
                        <a href="#">Data</a>
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="" data-toggle="modal" data-target="#date">Date</a>
                    </li>
                </ol>
            </tr>
            <tr>
                <th>Make</th>
                <th>Registered Number</th>
                <th>Chase Number</th>
                <th>Color </th>
                <th>Fuel</th>
                <th colspan="2">Amount(GHS)</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td><a href="{{route('expenses.show',$vehicle->id)}}" class="btn btn-link">{{$vehicle->make}}</a></td>
                    <td>{{$vehicle->regNo}}</td>
                    <td>{{$vehicle->chasisNo}}</td>
                    <td>{{$vehicle->colour}}</td>
                    <td>{{$vehicle->fuel}}</td>
                    <td>
                        @if( $item=App\repairs::where('vehicle_id',$vehicle->id)->pluck('amount')->sum())
                            <a href="{{route('expenses.show',$vehicle->id)}}"> {{$item}}</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection