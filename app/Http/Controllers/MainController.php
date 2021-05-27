<?php

namespace App\Http\Controllers;
use App;
use App\Models\GrupeProizvoda;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function locale($locale)
    {
       
        session()->put('locale', $locale);

        return redirect()->back();
    }
    
    public function home()
    {
        $product_groups = GrupeProizvoda::all();

        $data = [
            'product_groups' => $product_groups,
        ];

        return view('home')->with($data);
    }

    public function products()
    {
        return view('products');
    }

    public function home_to_products($prod_group)
    {
        return view('products', compact('prod_group'));
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
