<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Penjualan;
use App\Produk;
use Illuminate\Http\Request;

class KmeansController extends Controller
{
    public function index()
    {
        return view('admin.kmeans.index');
    }
    public function kmeans(Request $r)
    {
        $tahun1 = $r->input('tahun1');
        $tahun2 = $r->input('tahun2');
        $tahun3 = $r->input('tahun3');

        // dd($tahun3);

        $produk = Produk::all();

        $data_awal = [];
        foreach ($produk as $p) {
            $data_awal[] = [
                'nm_produk' => $p->nm_produk,
                'tahun1'    => $this->countYear($tahun1, $p->id),
                'tahun2'    => $this->countYear($tahun2, $p->id),
                'tahun3'    => $this->countYear($tahun3, $p->id),
            ];
        }

        $centroid_awal = $this->CentroidAwal($data_awal, 3);

        $data['data_awal']     = $data_awal;
        $data['centroid_awal'] = $centroid_awal;
        $data['iterasi']       = $this->RumusPersamaanED($data_awal, $centroid_awal);
        return response()->json($data, 200);
    }

    protected function countYear($tahun, $idProduk)
    {
        $data = Penjualan::where('nm_produk', $idProduk)->whereYear('tgl_jual', $tahun)->sum('penjualan');
        return $data;
    }

    // fungsi untuk membuat atau mengambil nilai acak centroid pada data
    protected function CentroidAwal($data, $centroid)
    {
        $rand = [];
        for ($i = 0; $i < $centroid; $i++) {
            $temp   = rand(0, (count($data) - 1));
            $rand[] = $data[$temp];
        }
        // mengembalikan nilai atau hasil
        return $rand;
    }

    public function RumusPersamaanED($data, $centroid)
    {
        $hasil = [];
        foreach ($data as $key => $value) {
            foreach ($centroid as $key1 => $cnt) {
                $hasil[$key][] = sqrt(pow($value['tahun1'] - $cnt['tahun1'], 2) + pow($value['tahun2'] - $cnt['tahun2'], 2) + pow($value['tahun3'] - $cnt['tahun3'], 2));
            }
        }
        // mengambilkan nilai atau hasil
        return $hasil;

    }

    protected function NilaiTerkecil(array $cluster, $data)
    {
        // untuk menambah 1
        $no    = 0;
        $nilai = [];
        $min   = [];

        for ($i = 0; $i < count($data); $i++) {

            foreach ($cluster as $key => $value) {

                // mengambil nilai secara berpasanagan pada key
                $nilai[$i][] = $value[$no];

            }

            $no++;

        }

        // untuk jarak terdekat menentukan nilai terkecil
        foreach ($nilai as $key => $value) {

            // menentukan nilai terkecil pada nilai
            $min[] = min($value);

        }

        // mengambilkan nilai atau hasil
        return $min;

    }

}
