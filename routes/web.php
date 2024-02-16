<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld',function(){
    return "Selamat pagi Pak Dosen gimana kabarnya hari ini?";
});

Route::view('/selamatdatang','welcome');

Route::get('/catalog',function(){
    return view('catalog');
});

Route::get('/catalog/medicines',function(){
    return view('medicines');
})->name('medicine');

ROute::get('/med_equip',function(){
    return view('med_equip');
})->name('medical_equipment');

Route::get('/medicines/{medicine_id}',function($medicine_id){
    return view('medicine_detail',[
        'medicine_id' => $medicine_id
    ]);
})->name('medicine_detail');

Route::get('/equipments/{equip_id}',function($equip_id){
    return view('equip_detail',[
        'equip_id' => $equip_id
    ]);
})->name('equip_detail');