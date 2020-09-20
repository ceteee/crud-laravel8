<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home(){
        return view('index');
    }
    public function about(){
        $nama = 'Christian Tambunan';
        return view('about', ['name' => $nama ]);
    }
}
