<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $category = Category::all();
        return view('category.index',compact('category'));
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
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }

    public function showList($id){
       $data = Category::find($id);
       $nameCategory = $data->category_name;

       $result = $data->medicines;

       if($result)
        {
            $getTotalData = $result->count();
        }
        else{
            $getTotalData = 0;
        }

        return view('report.list_medicine_by_category',compact('id','nameCategory','result','getTotalData'));
    }

    public function showProducts()
    {
        $cat=Category::find($_POST['category_id']);
        $nama=$cat->nama_kategori;
        $data=$cat->products;
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('category.showProducts',compact('nama','data'))->render()
        ),200);
    }

}
