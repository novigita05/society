<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity = DB::table('activity')->get();

        return view('/activity',['activity' => $activity]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createActivity');
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
            'type_activity' => 'required',
            'description' => 'required',
            'date' => 'required',
            'location' => 'required'
        ]);

        DB::table('activity')->insert([
            'type_activity' => $request->type_activity,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location
        ]);

        return redirect('activity');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::all();

        return view('showActivity',['activity'=>$activity]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = DB::table('activity')->where('idActivity',$id)->get();

        return view('updateActivity',['activity' => $activity]);
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
        DB::table('activity')->where('idActivity',$id)->update([
            'type_activity' => $request->type_activity,
            'description' => $request->description,
            'location' => $request->location
        ]);

        return redirect('/activity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('activity')->where('idActivity',$id)->delete();

        return redirect('activity');
    }

    public function detailActivity($id)
    {
        $data = DB::table('activity')->where('idActivity',$id)->get();
        return view('showDetailActivity',['data' => $data]);
    }
}
