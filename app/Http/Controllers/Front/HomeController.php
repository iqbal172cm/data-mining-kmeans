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

    public function about()
    {
        return view('front.home.about');
    }

    public function visimisi()
    {
        return view('front.home.visimisi');
    }

    public function contact()
    {
        return view('front.home.contact');
    }
}
