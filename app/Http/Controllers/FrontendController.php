<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function detail()
    {
        return view('detail');
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
