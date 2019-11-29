<?php

namespace App\Http\Controllers\Admin;
use App\Ikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IkanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['ikan'] = Ikan::all();
    
        return view('admin.ikan.index', $data);
    }
}
