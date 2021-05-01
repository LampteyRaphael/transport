<?php

namespace App\Http\Controllers;

use App\Http\Requests\vehicleRequest;
use App\insuranceRenewalDate;
use App\operations;
use App\repairs;
use App\roadWorthyRenewalDate;
use App\servicing;
use App\vehicles;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class vehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //displaying all vehicles
        $vehicles=vehicles::all();

        return view('vehicle.index',compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(vehicleRequest $request)
    {
        //storing point of vehicles
         vehicles::create($request->all());

         return redirect()->back()->with(['success1'=>'Successfully Posted Vehicle Data. Thank You!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            //calling for vehicle with id
            $vehicle=vehicles::findOrFail($id);
            $operations=operations::where('vehicle_id',$id)->get();
            $repairs=repairs::where('vehicle_id',$id)->get();
            $servicing=servicing::where('vehicle_id',$id)->get();
            $roadworthy=roadWorthyRenewalDate::where('vehicle_id',$id)->get();
            $insurances=insuranceRenewalDate::where('vehicle_id',$id)->get();

        }catch (ModelNotFoundException $exception){

            return back()->withError('Can\'t find ID' . $id)->withInput();
         }


        return view('vehicle.show',compact('vehicle','operations','repairs','servicing','roadworthy','insurances'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicles=vehicles::findOrFail($id);

        return view('vehicle.edit',compact('vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //updating vehicle

        $input=$request->all();

        $post=vehicles::findOrFail($id);

        $post->update($input);

        return redirect()->route('vehicle.index')->with(['success'=>'Successfully Updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //deleting a particular vehicle from the system
        try{
            $user = vehicles::findOrFail($id);

            $user->delete();

        }catch (ModelNotFoundException $exception){

            return back()->withError('User not found by ID ' . $id)->withInput();
        }
        return redirect()->back()->with(['success'=>'Successfully Deleted Of Vehicle Data. Thank You!']);

    }
}
