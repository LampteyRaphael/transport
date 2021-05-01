<?php

namespace App\Http\Controllers;

use App\servicing;
use App\vehicles;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=servicing::all();
        $vehicless=vehicles::pluck('make','id')->all();

        return view('service.index',compact('services','vehicless'));
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
        //storing point of services
        servicing::create($request->all());

        return redirect()->back()->with(['success1'=>'Successfully Posted services of vehicle Data. Thank You!']);
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
        //service
        $service=servicing::findOrFail($id);

        return view('service.edit',compact('service'));
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
        //update of service
        $postRequest=servicing::findOrFail($id);

        $postRequest->update($request->all());

        return redirect()->route('service.index')->with(['success'=>'Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //deleting a particular repair from the system
        try{
            $user = servicing::findOrFail($id);

            $user->delete();

        }catch (ModelNotFoundException $exception){

            return back()->withError('User not found by ID ' . $id)->withInput();
        }
        return redirect()->back()->with(['success'=>'Successfully Deleted Of Service Data. Thank You!']);

    }
}
