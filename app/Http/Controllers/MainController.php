<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function products()
    {
        return view('products');
    }

    public function galery()
    {
        return view('galery');
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function contact()
    {
        return view('contact');
    }

    public function details($id, $name) 
    {
        
        return view('product_details', compact('id', 'name'));
    }
}
