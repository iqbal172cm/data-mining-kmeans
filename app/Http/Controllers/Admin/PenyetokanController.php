<?php

namespace App\Http\Controllers\Admin;
use App\Penyetokan;
use App\Produk;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenyetokanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        $data['penyetokan'] = Penyetokan::with('produk')->paginate(10);

        return view('admin.penyetokan.index', $data);
        // return response()->json($data, 200);

    }

    public function create()
    {
        $data['produk'] = Produk::all();


        return view('admin.penyetokan.create', $data);
    }

    public function store(Request $r)
    {
        $produk = Produk::find($r->nm_produk);

        $penyetokan = new penyetokan;
        $penyetokan->uuid = Uuid::uuid4();
        $penyetokan->nm_produk = $r->nm_produk;
        $penyetokan->penyetokan = $r->penyetokan;
        $penyetokan->tgl_stok = $r->tgl_stok; 
        $penyetokan->save();

        if ($penyetokan) {
            $produk->stock = $produk->stock + $r->penyetokan;
            $produk->save();
        }
        
        return redirect()->route('penyetokan_create');
    }
}
