<?php

namespace App\Http\Controllers;

use App\map;
use Illuminate\Http\Request;

class mapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $map = map::all();
        return view('admin.page.map.index',[
            'map'=>$map
        ]);
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
     * @param  \App\map  $map
     * @return \Illuminate\Http\Response
     */
    public function show(map $map)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\map  $map
     * @return \Illuminate\Http\Response
     */
    public function edit(map $map)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\map  $map
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, map $map)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\map  $map
     * @return \Illuminate\Http\Response
     */
    public function destroy(map $map)
    {
        //
    }
}
