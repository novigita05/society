<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Complaint;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaint = DB::table('complaint')->get();

        return view('/complaint',['complaint' => $complaint]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createComplaint');
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
            'type' => 'required',
            'content' => 'required',
            'created_at' => 'required'
        ]);

        DB::table('complaint')->insert([
            'type' => $request->type,
            'content' => $request->content,
            'created_at' => $request->created_at
        ]);

        return redirect('complaint');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $complaint = Complaint::all();

        return view('showComplaint',['complaint'=>$complaint]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $complaint = DB::table('complaint')->where('idComplaint',$id)->get();

        return view('updateComplaint',['complaint'=>$complaint]);
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
        DB::table('complaint')->where('idComplaint',$id)->update([
            'type' => $request->type,
            'content' => $request->content
        ]);

        return redirect('/complaint');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('complaint')->where('idComplaint',$id)->delete();

        return redirect('/complaint');
    }

    public function detailComplaint($id)
    {
        $data = DB::table('complaint')->where('idComplaint',$id)->get();

        return view('showDetailComplaint',['data'=> $data]);
    }
}
