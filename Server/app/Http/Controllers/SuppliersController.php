<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();

        return $suppliers;
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $result = Supplier::all()->where('supplier_slug','=', $slug)->first()->products; 
        return $result;
    }

}