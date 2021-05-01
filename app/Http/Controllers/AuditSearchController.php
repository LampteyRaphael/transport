<?php

namespace App\Http\Controllers;

use App\auditworkers;
use Illuminate\Http\Request;

class AuditSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audit=auditworkers::paginate(6);

        return view('audit.index',compact('audit'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $audit = auditworkers::
              where('name', 'LIKE', '%' . $request['search']. '%')
            ->orwhere('email', 'LIKE', '%' .$request['search'] . '%')
            ->orwhere('phoneNumber', 'LIKE', '%' .$request['search'] . '%')
            ->paginate(6);

        if ($audit->count()>0){
            toast('Successfully Search','success');

        }else{
            toast('Search Not Found','error');
        }

        return view('audit.index',compact('audit'))->withSuccess('Task Created Successfully!');

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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
