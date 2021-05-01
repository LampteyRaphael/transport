<?php

namespace App\Http\Controllers;

use App\drivers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class driversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //drivers entry
        $drivers=drivers::all();

        return view('drivers.index',compact('drivers'));
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
        //sending drivers data to database
        $post=$request->all();

        drivers::create($post);

        return redirect()->back()->with(['success'=>'Successfully Posted Drivers Data. Thank You!']);
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
        $drivers=drivers::findOrFail($id);

        return view('drivers.edit',compact('drivers'));
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
          //updated
          $postRequest=drivers::findOrFail($id);

           $postRequest->update($request->all());

        return redirect()->route('drivers.index')->with(['success'=>'Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //deleting of a particular driver for the database
        try{
            $user = drivers::findOrFail($id);

            $user->delete();

        }catch (ModelNotFoundException $exception){

            return back()->withError('Driver not found by ID ' . $id)->withInput();
        }
        return redirect()->back()->with(['success'=>'Successfully Deleted Of Driver Data. Thank You!']);
    }
}
