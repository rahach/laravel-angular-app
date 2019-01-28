<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return $categories;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $result =   Category::all()->where('category_slug','=', $slug)->first()->products; 
        return $result;
    }


    public function products(Category $category)
    {
        return $category::products();
    }

    public function parent(Category $category)
    {
        return $category::parent();
    }    

    public function children(Category $category)
    {
        return $category::children();
    }    

}
