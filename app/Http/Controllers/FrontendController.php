<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Rightslider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $rightsliders = Rightslider::all();
        $categories = Categories::all();
        return view('index', compact('rightsliders', 'categories'));
    }

    public function detail()
    {
        $details = Detail::all();
        return view('detail', compact('details'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function cart()
    {
        return view('cart');
    }

    public function shop()
    {
        return view('shop');
    }
}
