<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Posting;

class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $post = DB::table('post')->get();

        return view('/posting',['post' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createPosting');
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
            'content'   => 'required',
            'created_at' => 'required'

        ]);

        DB::table('post')->insert([
            'content' => $request->content,
            'created_at' => $request->created_at
        ]);

        return redirect('posting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $post = Posting::all();

        return view('showPosting',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = DB::table('post')->where('idPost',$id)->get();

        return view('updatePosting',['post' => $post]);
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
        DB::table('post')->where('idPost',$id)->update([
            'content' => $request->content
        ]);

        return redirect('/posting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('post')->where('idPost',$id)->delete();

        return redirect('/posting');
    }

    public function detailPosting($id)
    {
        $data = DB::table('post')->where('idPost',$id)->get();
        return view ('showDetailPosting',['data'=> $data]);
    }
}
