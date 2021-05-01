<?php

namespace App\Http\Controllers;

use App\roadWorthyRenewalDate;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class roadworthyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //roadworthy of vehicles
        $roadworthys=roadWorthyRenewalDate::all();

        return view('roadworthy.index',compact('roadworthys'));

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
        roadWorthyRenewalDate::create($request->all());

        return redirect()->back()->with(['success1'=>'Successfully Posted Roadworthy Data. Thank You!']);
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
        //road worthy
        $roadworthy=roadWorthyRenewalDate::findOrFail($id);
        return view('roadworthy.edit',compact('roadworthy'));
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
        //update of roadworthy
        $postRequest=roadWorthyRenewalDate::findOrFail($id);

        $postRequest->update($request->all());

        return redirect()->route('roadworthy.index')->with(['success'=>'Successfully Updated']);
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
            $user = roadWorthyRenewalDate::findOrFail($id);

            $user->delete();

        }catch (ModelNotFoundException $exception){

            return back()->withError('User not found by ID ' . $id)->withInput();
        }
        return redirect()->back()->with(['success'=>'Successfully Deleted Of Repair Data. Thank You!']);
    }
}
