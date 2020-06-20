<?php

namespace App\Http\Controllers;

use App\fillPump;
use Illuminate\Http\Request;

class fillPumpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $this->validate(request(), [
            'h1' => 'required',
            'h2' => 'required',
            'h3' => 'required',
            'v1' => 'required',
            'v2' => 'required',
            'v3' => 'required',
        ]);
       
        $details=new fillPump();
        $details -> h1=request('h1');
        $details -> h2=request('h2');
        $details -> h3=request('h3');
        $details -> v1=request('v1');
        $details -> v2=request('v2');
        $details -> v3=request('v3');
        $details -> notes=request('notes');
        $details -> pump_id=request('id');
        $details -> user_name=request('user_name');
        $details->save();
        return redirect('home')->with('success','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fillPump  $fillPump
     * @return \Illuminate\Http\Response
     */
    public function show(fillPump $fillPump)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fillPump  $fillPump
     * @return \Illuminate\Http\Response
     */
    public function edit(fillPump $fillPump)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fillPump  $fillPump
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fillPump $fillPump)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fillPump  $fillPump
     * @return \Illuminate\Http\Response
     */
    public function destroy(fillPump $fillPump)
    {
        //
    }
}
