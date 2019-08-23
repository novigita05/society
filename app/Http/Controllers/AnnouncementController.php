<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Announcement;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcement = DB::table('announcement')->get();

        return view('/announcement',['announcement' => $announcement]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createAnnouncement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'description' => 'required'
        ]);

        DB::table('announcement')->insert([
            'description' => $request->description
        ]);

        return redirect('announcement');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = Announcement::all();

        return view('showAnnouncement',['announcement'=>$announcement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $announcement = DB::table('announcement')->where('idAnnouncement',$id)->get();

        return view('updateAnnouncement', ['announcement' => $announcement]);
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
        DB::table('announcement')->where('idAnnouncement',$id)->update([
            'description' => $request->description
        ]);

        return redirect('/announcement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('announcement')->where('idAnnouncement',$id)->delete();

        return redirect('/announcement');
    }

    public function detailAnnouncement($id)
    {
        $data = DB::table('announcement')->where('idAnnouncement',$id)->get();

        return view('showDetailAnnouncement',['data' => $data]);
    }
}
