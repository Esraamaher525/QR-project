<?php

namespace App\Http\Controllers;

use App\fillBoiler;
use Illuminate\Http\Request;
use Session;
class fillBoilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if($request->input('boiler')=='on'){
            $this->validate(request(), [
                'pressure' => 'required',
                'coils_tempreture1' => 'required',
                'coils_tempreture2' => 'required',
                'coils_tempreture3' => 'required',
                'coils_tempreture4' => 'required',
                'coils_tempreture5' => 'required',
                'coils_tempreture6' => 'required',
                'blowdown_working'  => 'required',
                'stack_temperature' => 'required'
            ]);
            
        }elseif($request->input('boiler')=='off'){
            $this->validate(request(), [
                'pressure' => '',
                'coils_tempreture1' => '',
                'coils_tempreture2' => '',
                'coils_tempreture3' => '',
                'coils_tempreture4' => '',
                'coils_tempreture5' => '',
                'coils_tempreture6' => '',
                'blowdown_working'  => '',
                'stack_temperature' => ''
            ]);
        }else{
            $this->validate(request(), [
                'boiler' => 'required',
            ]);
        }
        $boilerDetails=new fillBoiler();
        $boilerDetails -> boiler=$request->has('boiler') ? $request->input('boiler') : NULL;
        $boilerDetails -> pressure=request('pressure');
        $boilerDetails -> coils_tempreture1=request('coils_tempreture1');
        $boilerDetails -> coils_tempreture2=request('coils_tempreture2');
        $boilerDetails -> coils_tempreture3=request('coils_tempreture3');
        $boilerDetails -> coils_tempreture4=request('coils_tempreture4');
        $boilerDetails -> coils_tempreture5=request('coils_tempreture5');
        $boilerDetails -> coils_tempreture6=request('coils_tempreture6');
        $boilerDetails -> blowdown_working=$request->has('blowdown_working') ? $request->input('blowdown_working') : NULL;
        $boilerDetails -> stack_temperature=request('stack_temperature');
        $boilerDetails -> notes=request('notes');
        $boilerDetails -> pump_id=request('id');
        $boilerDetails -> user_name=request('user_name');
        $boilerDetails->save();
        return redirect('home')->with('success','Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fillBoiler  $fillBoiler
     * @return \Illuminate\Http\Response
     */
    public function show(fillBoiler $fillBoiler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fillBoiler  $fillBoiler
     * @return \Illuminate\Http\Response
     */
    public function edit(fillBoiler $fillBoiler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fillBoiler  $fillBoiler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fillBoiler $fillBoiler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fillBoiler  $fillBoiler
     * @return \Illuminate\Http\Response
     */
    public function destroy(fillBoiler $fillBoiler)
    {
        //
    }
}
