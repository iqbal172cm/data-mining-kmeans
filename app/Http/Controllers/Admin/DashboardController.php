<?php

namespace App\Http\Controllers\Admin;
use App\Pegawai;
use App\Penjualan;
use App\Produk;
use App\Penyetokan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['pegawai'] = Pegawai::count();
        $data['produk'] = Produk::count();
        $data['penjualan'] = Penjualan::count();
        $data['penyetokan'] = Penyetokan::count();
        // return response()->json($data, 200);
        return view('admin.dashboard.index', $data);
    }
}
