@extends('layouts.master_table')

@section('dashboard')
    <li>
    <p class="navbar-text">{{strtoupper($vehicle->make)}}</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')

    <div class="row">
        <div class="panel">
            <div class="panel-heading"></div>
            <div class="panel-body">
                <div class="pull-left">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Make</th>
                            <th>Registered Number</th>
                            <th>Chase Number</th>
                            <th>Year Make</th>
                            <th>Purchase Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$vehicle->make}}</td>
                            <td>{{$vehicle->regNo}}</td>
                            <td>{{$vehicle->chasisNo}}</td>
                            <td>{{$vehicle->yearMade}}</td>
                            <td>{{$vehicle->purchaseDate}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pull-right">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Color </th>
                            <th>Country Of Origin</th>
                            <th>Cubic Centimeter</th>
                            <th>Fuel</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>{{$vehicle->colour}}</td>
                            <td>{{$vehicle->countryOfOrigin}}</td>
                            <td>{{$vehicle->cubicCentimeter}}</td>
                            <td>{{$vehicle->fuel}}</td>
                            <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
                            <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="bold">OPERATION OF {{strtoupper($vehicle->make)}}</th>
            </tr>
            <tr>
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
                    <td>{{$operation->driverAssigned}}</td>
                    <td>{{$operation->departurePoint}}</td>
                    <td>{{$operation->departureMileage}}</td>
                    <td>{{$operation->destination}}</td>
                    <td>{{$operation->date}}</td>
                    <td>{{$operation->officerAssigned}}</td>
                    <td>{{$operation->assignmentCompletionTime}}</td>
                    <td>{{$operation->arrivalMileage}}</td>
                    <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
                    <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="bold">REPAIR OF {{strtoupper($vehicle->make)}}</th>
            </tr>
            <tr>
                <th>Date</th>
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
            @foreach($repairs as $repair)
                <tr>
                    <td>{{$repair->date}}</td>
                    <td>{{$repair->description}}</td>
                    <td>{{$repair->amount}}</td>
                    <td>{{$repair->garageName}}</td>
                    <td>{{$repair->datePresented}}</td>
                    <td>{{$repair->dateReturned}}</td>
                    <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
                    <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>




    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="bold">SERVICES OF {{strtoupper($vehicle->make)}}</th>
            </tr>
            <tr>
                <th>Description </th>
                <th>Amount</th>
                <th>Garage Name</th>
                <th>Date Presented</th>
                <th>Date Returned</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($servicing as $servicings)
                <tr>
                    <td>{{$servicings->description}}</td>
                    <td>{{$servicings->amount}}</td>
                    <td>{{$servicings->garageName}}</td>
                    <td>{{$servicings->datePresented}}</td>
                    <td>{{$servicings->dateReturned}}</td>
                    <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
                    <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="bold"> {{strtoupper('Road Worthy'. ' '.$vehicle->make)}}</th>
            </tr>
            <tr>
                <th>Renewal Date </th>
                <th>Expiring Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roadworthy as $roadworthys)
                <tr>
                    <td>{{$roadworthys->renewalDate}}</td>
                    <td>{{$roadworthys->expiringDate}}</td>
                    <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
                    <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="bold"> {{strtoupper('Insurance'. ' '.$vehicle->make)}}</th>
            </tr>
            <tr>
                <th>Renewal Date </th>
                <th>Expiring Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($insurances as $insurance)
                <tr>
                    <td>{{$insurance->renewalDate}}</td>
                    <td>{{$insurance->expiringDate}}</td>
                    <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
                    <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection