<?php

namespace App\Http\Controllers\Admin;
use App\Penjualan;
use App\Penyetokan;
use App\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProsesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $produk = produk::all();

        $pro = [];
        foreach ($produk as $p) {
            $pro[] = [
                'nm_produk' => $p->nm_produk,
                'penjualan' => $this->penjualan($p->id),
                // $data['penjualan'] = penjualan::orderBy('created_at', 'DESC')->with('penjualan')->paginate(10);

            ];
        }
    
        
        // return response()->json($pro);
        $data['produk'] = $pro;
        return view('admin.proses.index', $data);
    }

    protected function penjualan($id) {
        $penjualan = penjualan::where('nm_produk', $id)->sum('penjualan');
        return $penjualan;
    }

    protected function penyetokan($id) {
        $penyetokan = penyetokan::where('nm_produk', $id)->sum('penyetokan');
        return $penyetokan;
    }
}
