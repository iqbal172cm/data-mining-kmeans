<?php

namespace App\Http\Controllers\Admin;
use App\Pegawai;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['pegawai'] = Pegawai::all();

        return view('admin.pegawai.index', $data);
    }

    public function create()
    {
        return view('admin.pegawai.create');
    }

    public function store(Request $r)
    {
        $pegawai = new Pegawai;
        $pegawai->uuid = Uuid::uuid4();
        $pegawai->name = $r->name;
        $pegawai->role = $r->role;
        $pegawai->phone = $r->phone;
        $pegawai->email = $r->email;
        $pegawai->password = Hash::make($r->password);
        $pegawai->save();

        return redirect()->route('pegawai');  
    }

    public function edit($id)
    {
        $data['pegawai'] = Pegawai::where('uuid', $id)->first();

        // return response($data);
        return view('admin.pegawai.edit', $data);
    }

    public function update($id, Request $r)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->name = $r->name;
        $pegawai->role = $r->role;
        $pegawai->phone = $r->phone;
        $pegawai->email = $r->email;
        if ($r->password != "") {
            $pegawai->password = $r->password;
        };
        $pegawai->save();

        return redirect()->route('pegawai');
    }

    public function delete(Request $r)
    {
        pegawai::where('uuid', $r->id)->delete();

        return redirect()->route('pegawai');
    }
}
