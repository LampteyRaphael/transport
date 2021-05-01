<?php

namespace App\Http\Controllers;

use App\drivers;
use App\operations;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class operationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operations=operations::all();
        $drivers=drivers::pluck('name','id')->all();

        return view('operations.index',compact('operations','drivers'));
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
        //storing point of vehicles
        operations::create($request->all());

        return redirect()->back()->with(['success1'=>'Successfully Posted Operation Data. Thank You!']);
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
        //operation
         $operations=operations::findOrFail($id);
        $drivers=drivers::pluck('name','id')->all();
         return view('operations.edit',compact('operations','drivers'));
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
        $postRequest=operations::findOrFail($id);

        $postRequest->update($request->all());

        return redirect()->route('operation.index')->with(['success'=>'Successfully Updated']);
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
            $user = operations::findOrFail($id);
            $user->delete();

        }catch (ModelNotFoundException $exception){

            return back()->withError('User not found by ID ' . $id)->withInput();
        }
        return redirect()->back()->with(['success'=>'Successfully Deleted Of Vehicle Data. Thank You!']);
    }
}
