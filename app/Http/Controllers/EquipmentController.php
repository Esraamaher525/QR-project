<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;

class EquipmentController extends Controller
{
    
    public function create(){
        return view('createEquipment');
    }
    public function store(){
        $this->validate(request(), [
            'name' => 'required',
            'type' => 'required',
        ]);
        $equipment=new Equipment();
        $equipment -> id=request('id');
        $equipment -> name=request('name');
        $equipment -> type=request('type');
        $equipment ->save();
        $equipmentId =$equipment ->id;
        $equipmentName=$equipment ->name;
        $url = 'http://localhost:8000/fill-data/'. $equipmentId;
        $imageName =  $equipmentName .'.png';
        $storagePath =  storage_path('app/public/');
        $imagePath   = $storagePath .  $imageName ;
        $qr = \SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')
        ->color(0,0,0)
        ->size(500)
        ->encoding('UTF-8')
        ->generate($url, $imagePath);
        $equipment->qr_code = $imageName;
        $equipment->update();
        return redirect('list')->with('success','Item created successfully!');
    }
}
