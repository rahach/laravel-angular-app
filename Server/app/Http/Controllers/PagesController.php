<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home(){
        $tasks = [
            'Go to market',
            'Go to store',
            'Go to work'
        ];

        return view('welcome', [
            'tasks' =>  $tasks,
            'foo' => 'good',
            'newfoo' => request('title')

        ]);
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }

}
