<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Members;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = DB::table('members')->get();

        return view('/members',['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createMembers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'nik' => 'required',
            'no_kk' => 'required',
            'name' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'education' => 'required',
            'work' => 'required',
            'residence_status' => 'required',
            'home_number' => 'required'
        ]);

        DB::table('members')->insert([
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'name' => $request->name,
            'place_of_birth' => $request->place_of_birth,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'education' => $request->education,
            'work' => $request->work,
            'residence_status' => $request->residence_status,
            'home_number' => $request->home_number
        ]);

        return redirect('members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members = Members::all();

        return view('showMembers',['members'=>$members]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members=DB::table('members')->where('idMembers',$id)->get();

        return view('updateMembers',['members' => $members]);
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
        DB::table('members')->where('idMembers',$id)->update([
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'name' => $request->name,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'education' => $request->education,
            'work' => $request->work,
            'residence_status' => $request->residence_status,
            'home_number' => $request->home_number
        ]);

        return redirect('/members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('members')->where('idMembers',$id)->delete();

        return redirect('/members');
    }

    public function detailMembers($id)
    {
        $data = DB::table('members')->where('idMembers',$id)->get();

        return view('showDetailMembers',['data' => $data]);
    }
}
