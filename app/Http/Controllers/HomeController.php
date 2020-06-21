<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;
use App\fillPump;
use App\fillBoiler;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $equipment=Equipment::all();
        return view('home',['equipment' => $equipment]);
    }
    public function adminHome()
    {
        $details=fillPump::all();
        $details=fillPump::leftjoin('equipment', 'equipment.id', '=', 'pump_id')
        ->select('fill_pumps.created_at as time_create','equipment.name','fill_pumps.*')
        ->get();
        $detailsBoilers=fillBoiler::all();
        $detailsBoilers=fillBoiler::join('equipment', 'equipment.id', '=', 'pump_id')
        ->select('fill_boilers.created_at as time_create_boiler','equipment.name','fill_boilers.*')
        ->get();
        return view('adminHome',['details' => $details,'detailsBoilers' => $detailsBoilers]);
    }
}
