<?php

namespace App\Http\Controllers;

use App\insuranceRenewalDate;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class insuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //roadworthy of vehicles
        $insurances=insuranceRenewalDate::all();

        return view('insurance.index',compact('insurances'));
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
    public function store(Request $request)
    {
        //data entry point for repairs of vehicles
        insuranceRenewalDate::create($request->all());

        return redirect()->back()->with(['success1'=>'Successfully Posted Insurance Data. Thank You!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //road insurance
        $insurance=insuranceRenewalDate::findOrFail($id);
        return view('insurance.edit',compact('insurance'));
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
        //

        //update of insurance
        $postRequest=insuranceRenewalDate::findOrFail($id);

        $postRequest->update($request->all());

        return redirect()->route('insurance.index')->with(['success'=>'Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //deleting a particular roadworthy from the system
        try{
            $user = insuranceRenewalDate::findOrFail($id);

            $user->delete();

        }catch (ModelNotFoundException $exception){

            return back()->withError('User not found by ID ' . $id)->withInput();
        }
        return redirect()->back()->with(['success'=>'Successfully Deleted Of Insurance Data. Thank You!']);
    }
}
