<?php

namespace App\Http\Controllers\Front;
use App\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data['produk'] = Produk::all();
        
        return view('front.home.index', $data);
    }
}
