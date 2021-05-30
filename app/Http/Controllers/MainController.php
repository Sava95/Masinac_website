<?php

namespace App\Http\Controllers;
use App;
use App\Models\{GrupeProizvoda, Proizvodi, DetaljiProizvoda};

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
        $products = Proizvodi::paginate(16);

        return view('products', compact('products'));
    }

    public function home_to_products($prod_group)

    {   
        if ($prod_group !== 'usluge') {
            $prod_group_id = GrupeProizvoda::where('grupe_prod_id', $prod_group)->pluck('id');
            $products = Proizvodi::where('id_grupe_proizvoda', $prod_group_id)->paginate(16);

            return view('products', compact('prod_group', 'products'));
        } else {
            $products = Proizvodi::paginate(16);

            return view('products', compact('products'));
        }
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
        $product = Proizvodi::where('id', $id)->get()->first();

        $image = $product-> slika; 
        $image = substr($image, 2);

        $description = GrupeProizvoda::where('id', $product->id_grupe_proizvoda)->pluck('opis')->first();

        $details = DetaljiProizvoda::where('prod_id', $product->id)->get();

        return view('product_details', compact('product', 'description', 'image', 'details'));
    }
}
