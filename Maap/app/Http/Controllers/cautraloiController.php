<?php

namespace App\Http\Controllers;

use App\cautraloi;
use Illuminate\Http\Request;
use Auth;

class cautraloiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::check()){
            $cautralois = cautraloi::all();
            return view('admin.page.answer.index',[
                'cautralois'=>$cautralois
            ]);
        }
        else return view('page.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cautraloi  $cautraloi
     * @return \Illuminate\Http\Response
     */
    public function show(cautraloi $cautraloi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cautraloi  $cautraloi
     * @return \Illuminate\Http\Response
     */
    public function edit(cautraloi $cautraloi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cautraloi  $cautraloi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cautraloi $cautraloi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cautraloi  $cautraloi
     * @return \Illuminate\Http\Response
     */
    public function destroy(cautraloi $cautraloi)
    {
        //
    }
    public function deleteItem(Request $req)
    {
        cautraloi::find($req->id)->delete();
        return response()->json();
    }
    public function editseen(Request $req){
        $cautraloiUpdate = cautraloi::where('id', $req->id)
            ->Update([
                'seen' => 1
            ]);
        if($cautraloiUpdate){
            echo response()->json();
        }
    }
}
