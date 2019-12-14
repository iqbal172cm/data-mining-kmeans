<?php

namespace App\Http\Controllers\Admin;
use App\Penjualan;
use App\Olahan;
use App\Produk;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['penjualan'] = Penjualan::orderBy('created_at', 'DESC')->with('produk')->paginate(10);

        return view('admin.penjualan.index', $data);
        // return response()->json($data, 200);
    }

    public function create()
    {
        $data['produk'] = produk::all();
        $data['olahan'] = olahan::all();

        return view('admin.penjualan.create', $data);
    }

    public function store(Request $r)
    {
        $produk = Produk::find($r->nm_produk);

        $penjualan = new penjualan;
        $penjualan->uuid = Uuid::uuid4();
        $penjualan->nm_produk = $r->nm_produk;
        $penjualan->olahan = $r->olahan;
        $penjualan->penjualan = $r->penjualan;
        $penjualan->tgl_jual = $r->tgl_penjualan; 
        $penjualan->save();

        if ($penjualan) {
            $produk->stock = $produk->stock - $r->penjualan;
            $produk->save();
        }
        
        return redirect()->route('penjualan_create');
    }

    public function edit($id)
    {
        $data['produk'] = produk::all();
        $data['olahan'] = olahan::all();

        // $data['penjualan'] = penjualan::orderBy('created_at', 'DESC')->with('penjualan')->paginate(10);

        return view('admin.penjualan.edit', $data);
    }

    public function update($id, Request $r)
    {
        $penjualan = penjualan::find($id);
        $penjualan->nm_produk = $r->nm_produk;
        $penjualan->olahan = $r->olahan;
        $penjualan->banyak = $r->banyak;
        $penjualan->tgl_jual = $r->tgl_penjualan;
        $pegawai->save();

        return redirect()->route('penjualan');
    }

    public function delete(Request $r)
    {
        penjualan::where('uuid', $r->id)->delete();

        return redirect()->route('penjualan');
    }

    public function cetak_pdf()
    {
    	$pegawai = Penjualan::all();
 
    	$pdf = PDF::loadview('penjualan_pdf',['penjualan'=>$penjualan]);
    	return $pdf->download('laporan-penjualan-pdf');
    }
}
