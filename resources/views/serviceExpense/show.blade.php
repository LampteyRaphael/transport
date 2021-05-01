@extends('layouts.master_table')

@section('dashboard')
    <li>
        <p class="navbar-text">Service-Expenses</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')

    <div class="row">
        <div class="table-responsive">
            <div class="bg-white">
                @if($repairs)
                    <table class="table">
                        <thead>
                        <tr>
                            <ol class="breadcrumb mb0 no-padding">
                                <li>
                                    <a href="{{route('serviceExpense.index')}}">Service-Expenses</a>
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
                            <th>Description</th>
                            <th>Garage Name</th>
                            <th>Date Presented</th>
                            <th>Date Returned</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($repairs as $repair)
                            <tr>
                                <td>{{$repair->vehicle->make}}</td>
                                <td>{{$repair->description}}</td>
                                <td>{{$repair->garageName}}</td>
                                <td>{{$repair->datePresented}}</td>
                                <td>{{$repair->dateReturned}}</td>
                                <td>{{$repair->amount}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>




@endsection