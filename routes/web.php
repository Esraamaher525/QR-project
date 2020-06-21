<?php

use Illuminate\Support\Facades\Route;
use App\Equipment;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// details
Route::get('/fill-data/{id}', function ($id) {
    $equipment=Equipment::find($id);
    $name_machine=$equipment -> name;
    if($equipment -> type =='pump'){
        return view('fillPump',['id' => $id,'name_machine' => $name_machine]);
    }else if($equipment -> type =='boiler'){
        return view('fillBoiler',['id' => $id,'name_machine' => $name_machine]);
    }
   
});
Route::get('/details-equipment', 'detailsController@index')->middleware('is_admin');

// Route::post('/details','detailsController@store');
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/equipment/create', 'EquipmentController@create')->name('createEquipment');
Route::post('/equipment','EquipmentController@store');
Route::post('/fill-pump','fillPumpController@store');
Route::post('/fill-boiler','fillBoilerController@store');



