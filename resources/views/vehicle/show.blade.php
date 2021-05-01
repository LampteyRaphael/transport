@extends('layouts.master_table')

@section('dashboard')
    <li>
    <p class="navbar-text">{{strtoupper($vehicle->make)}}</p>
    </li>
@endsection
@section('content')
    @include('includes.alert')

    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <ol class="breadcrumb mb0 no-padding">
                        <li>
                            <a href="#">Vehicles</a>
                        </li>
                        <li>
                            <a href="#">Data</a>
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
                </tr>
                </thead>
                <tbody>
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
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="bold" colspan="8">OPERATION OF {{strtoupper($vehicle->make)}}</th>
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
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>


    <div class="row">
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="bold" colspan="6">REPAIR OF {{strtoupper($vehicle->make)}}</th>
            </tr>
            <tr>
                <th>Date</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Garage Name</th>
                <th>Date Presented</th>
                <th>Date Returned</th>
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
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>




    <div class="row">
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="bold" colspan="5">SERVICES OF {{strtoupper($vehicle->make)}}</th>
            </tr>
            <tr>
                <th>Description </th>
                <th>Amount</th>
                <th>Garage Name</th>
                <th>Date Presented</th>
                <th>Date Returned</th>
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
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>

    <div class="row">
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="bold" colspan="5"> {{strtoupper('Road Worthy'. ' '.$vehicle->make)}}</th>
            </tr>
            <tr>
                <th>Renewal Date </th>
                <th>Expiring Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roadworthy as $roadworthys)
                <tr>
                    <td>{{$roadworthys->renewalDate}}</td>
                    <td>{{$roadworthys->expiringDate}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>

    <div class="row">
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="bold" colspan="5"> {{strtoupper('Insurance'. ' '.$vehicle->make)}}</th>
            </tr>
            <tr>
                <th>Renewal Date </th>
                <th>Expiring Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($insurances as $insurance)
                <tr>
                    <td>{{$insurance->renewalDate}}</td>
                    <td>{{$insurance->expiringDate}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>

@endsection