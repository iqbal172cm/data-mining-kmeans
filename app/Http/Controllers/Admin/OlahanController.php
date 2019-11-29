<?php

namespace App\Http\Controllers\Admin;
use App\Olahan;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OlahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
 
        // $data['olahan'] = olahan::all();
        $data['olahan'] = Olahan::paginate(10);

        return view('admin.olahan.index', $data);
    }

    public function create()
    {
        return view('admin.olahan.create');
    }

    public function store(Request $r)
    {
        $olahan = new Olahan;
        $olahan->olahan = $r->olahan;
        $olahan->save();

        return redirect()->route('olahan_create');
    }

    public function edit($id)
    {
        $data['olahan'] = Olahan::find($id);

        return view('admin.olahan.edit', $data);
    }

    public function update($id, Request $r)
    {
        $olahan = Olahan::find($id);
        $olahan->olahan = $r->olahan;
        $olahan->save();

        return redirect()->route('olahan');
    }

    public function delete(Request $r)
    {
        olahan::where('id', $r->id)->delete();

        return redirect()->route('olahan');
    }
}
