@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">Service Expenditure</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')

    <table class="table table-bordered">
        <thead>
        <tr>
            <ol class="breadcrumb mb0 no-padding">
                <li>
                    <a href="#">Service-Expenses</a>
                </li>
                <li>
                    <a href="#">Data</a>
                </li>
                <li>
                    <a class="btn btn-primary btn-xs" href="" data-toggle="modal" data-target="#date">+Add New Insurance</a>
                </li>
            </ol>
        </tr>
        <tr>
            <th>Make</th>
            <th>Registered Number</th>
            <th>Chase Number</th>
            <th>Color </th>
            <th>Fuel</th>
            <th>Amount(GHS)</th>
        </tr>

        </thead>
        <tbody>

        @foreach($vehicles as $vehicle)
            <tr>
                <td><a href="{{route('serviceExpense.show',$vehicle->id)}}" class="btn btn-link">{{$vehicle->make}}</a></td>
                <td>{{$vehicle->regNo}}</td>
                <td>{{$vehicle->chasisNo}}</td>
                <td>{{$vehicle->colour}}</td>
                <td>{{$vehicle->fuel}}</td>
                <td>
                    @if( $item=App\servicing::where('vehicle_id',$vehicle->id)->pluck('amount')->sum())
                        <a href="{{route('serviceExpense.show',$vehicle->id)}}"> {{$item}}</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection