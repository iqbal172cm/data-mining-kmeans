<?php

namespace App\Http\Controllers\Admin;
use App\Produk;
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['produk'] = produk::all();

        return view('admin.produk.index', $data);
    }

    public function create()
    {

        return view('admin.produk.create');
    }

    public function store(Request $r)
    {
        $file = $r->file('gambar');


        // Mendapatkan Extension File
        $extension = $file->getClientOriginalExtension();
        
        // Mendapatkan Nama File
        $filename = rand(11111, 99999).".".$extension;
        // Mendapatkan Ukuran File
        $ukuran_file = $file->getSize();
     
        // Proses Upload File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$filename);

        $produk = new produk;
        $produk->nm_produk = $r->nm_produk;
        $produk->stock = $r->stock;
        $produk->satuan = $r->satuan;
        $produk->expired = $r->expired;
        $produk->gambar = $filename;
        $produk->save();

        

        return redirect()->route('produk_create');
    }

    public function edit($id)
    {
        
        $data['produk'] = produk::find($id);

        return view('admin.produk.edit', $data);
    }

    public function update($id, Request $r)
    {
        $produk = produk::find($id);
        $produk->nm_produk = $r->nm_produk;
        $produk->stock = $r->stock;
        $produk->satuan = $r->satuan;
        $produk->expired = $r->expired;
        
        
        if($r->hasfile('gambar')){
            $file = $r->file('gambar');
        
            // Mendapatkan Extension File
            $extension = $file->getClientOriginalExtension();
            
            // Mendapatkan Nama File
            $filename = rand(11111, 99999).".".$extension;
            // Mendapatkan Ukuran File
            $ukuran_file = $file->getSize();
         
            // Proses Upload File
            $destinationPath = 'uploads';
            $file->move($destinationPath,$filename);


            $produk->gambar = $filename;
        }
       
        $produk->save();


        return redirect()->route('produk');
    }

    public function delete(Request $r)
    {
        $pro = produk::where('id', $r->id)->first();
        $file = public_path().'/uploads/'.$pro->gambar;
         if(File::isFile($file)){
              File::delete($file);
         }
        $pro->delete();

        return redirect()->route('produk');
    }
}
