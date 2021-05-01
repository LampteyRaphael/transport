<?php

namespace App\Http\Controllers;

use App\AuditPhotos;
use App\auditworkers;
use App\Http\Middleware\Audit;
use App\Http\Requests\RegisterWorkerRequest;
use App\Http\Requests\WorkerUpdateRequest;
use App\Photos;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class AuditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $audit=auditworkers::paginate(6);
        // if (request()->ajax()) {
        //     return datatables()->eloquent($data)

//                ->addColumn('role_id', function($data){
//                    $Mids=$data->role? strtoupper($data->role->name): '';
//                    return $Mids;
//                })
//
//                ->addColumn('area_id',function ($data){
//                    $district=$data->district? strtoupper($data->district->name):'';
//                    return $district;
//                })
//
//                ->addColumn('district_id',function ($data){
//                    $area=$data->district? strtoupper($data->area->name):'';
//                    return $area;
//                })
//
//                ->addColumn('local_id',function ($data){
//                    $local=$data->local? strtoupper($data->local->name):'';
//                    return $local;
//                })
//
//                ->addColumn('is_active',function ($data){
//                    $role=$data->is_active==1? strtoupper('Active'):strtoupper('Not Active');
//                    return $role;
//                })
//
//                ->addColumn('datesOfBirth',function ($data){
//                    $age= Carbon::parse(date("Y-m-d", strtotime($data->birthDate)))->age;
//                    return $age;
//                })
//
//                ->addColumn('created_at', function($data){
//                    $createdAt=$data->created_at->diffForHumans();
//                    return $createdAt;
//                })
//
//                ->addColumn('photo_id', function ($data) {
//                    $url=$data->photo? $data->photo->file :asset('images/placeholder.png');
//                    return '<img class="img-rounded" height="50" width="50" src="'.$url.'" alt="">';
//                })
//
//                ->addColumn('toShow', function($data){
//                    $toshow=route('users.edit',$data->id);
//                    $btn='<a class="btn btn-primary btn-xs" onclick="return ConfirmUpdate()" href="'.$toshow.'"><i class="fa fa-edit"></i></a>';
//                    return $btn;
//                })

                // ->addColumn('delete', function ($data) {
                //     $dataDeletes = route('users.destroy', $data->id);
                //     $deletes = '<a onclick="return ConfirmDelete()" class="btn btn-danger btn-xs" href="' . $dataDeletes . '"><i class="fa fa-trash"></i></a>';
                //     return $deletes;
                // })
                // ->rawColumns(['delete'])
                // ->addIndexColumn()
                // ->make(true);
        //}
//        toast('Members with their signatures','success');

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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RegisterWorkerRequest $request)
    {
           $input = $request->all();

            if ($file = $request->file('photo_id')) {

                $name = time() . $file->getClientOriginalName();

                $file->move('images', $name);

                $photo = Photos::create(['file' => $name]);

                $input['photo_id'] = $photo->id;
            }

        if ($file = $request->file('audit_photos_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('AuditImages', $name);

            $photo = AuditPhotos::create(['file' => $name]);

            $input['audit_photos_id'] = $photo->id;
        }

            auditworkers::create($input);

        return redirect()->back()->withSuccess('Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(WorkerUpdateRequest $request, $id)
    {
        try{
            $id=$request['id'];
                $user=auditworkers::where('id',$id)->firstOrFail();
                $input=$request->all();

                if ($file = $request->file('photo_id')) {

                    $name = time() . $file->getClientOriginalName();

                    $file->move('images/', $name);

                    $photo = Photos::create(['file' => $name]);

                    $input['photo_id'] = $photo->id;
                }

            if ($file = $request->file('audit_photos_id')) {

                $names = time() . $file->getClientOriginalName();

                $file->move('AuditImages', $names);

                $audit_photos = AuditPhotos::create(['file' => $names]);

                $input['audit_photos_id'] = $audit_photos->id;
            }

                $user->update($input);

        }catch (ModelNotFoundException $exception){

            return back()->withError('User not found by ID ' . $id)->withInput();
        }
        return redirect()->back()->withSuccess('Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try{
            $user=auditworkers::where('id',$id)->firstOrFail();

            if (!empty($user->photo)) {
                if (file_exists($user->photo->file)) {
                    unlink(public_path() . $user->photo->file);
                }
            }

            if (!empty($user->signature)) {
                if (file_exists($user->signature->file)) {
                    unlink(public_path() . $user->signature->file);
                }
            }

            AuditPhotos::where('id',$user->audit_photos_id)->delete();

            Photos::where('id',$user->photo_id)->delete();

             $user->delete();


        }catch (ModelNotFoundException $exception){

            return back()->withError('User not found by ID ' . $id)->withInput();
        }

        return redirect()->back()->with(['success'=>'Successfully Deleted']);
    }

}
