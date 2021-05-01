@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">Insurance</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')

    <table class="table table-bordered">
        <thead>
        <tr>
            <ol class="breadcrumb mb0 no-padding">
                <li>
                    <a href="#">Insurance</a>
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
            <th>Renewal Date</th>
            <th>Expiring Date</th>

            <th>expiring-renew</th>


        </tr>

        </thead>
        <tbody>
        @foreach($vehicles as $vehicle)

            <tr>
                <td><a class="btn-link" href="#">{{$vehicle->vehicle->make}}</a></td>
                <td>{{$vehicle->renewalDate}}</td>
                <td>{{$vehicle->expiringDate}}</td>
                <td>
                    @if($vehicle->expiringDate==\Carbon\Carbon::now()->format('Y-m-d'))
                        <span style="color: blue">{{"Insurance expired"}}</span>
                        @elseif(Carbon\Carbon::parse($vehicle->expiringDate)->format('Y-m')===\Carbon\Carbon::now()->format('Y-m'))
                        <span style="color:red;">{{"One Month More For Your Insurance To expired"}}</span>
                        @else
                        <span style="color: red">{{"Active Insurance"}}</span>
                    @endif
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection