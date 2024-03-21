<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Medicine::all();
        return view('medicine.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
    public function obatTermahal(){
        // query builder medicines & category
        // Tampilkan kategori dan nama obat yang memiliki harga termahal
        $result = DB::table('medicines as m')
                  ->select('m.name','c.category_name','m.price','m.image','m.form','m.formula','m.description')
                  ->join('categories as c','c.id','=','m.category_id')
                  ->where('m.price',DB::raw('(select max(price) from medicines)'))
                  ->get();
                //   dd($result);
        return view('report.obat_termahal' ,compact('result'));
    }

}
