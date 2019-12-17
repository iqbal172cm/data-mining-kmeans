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
        $data['literasi']       = $this->RumusPersamaanED($data_awal, $centroid_awal);
        // $data['min']            = $this->NilaiTerkecil($literasi);
        // $data['nilaiterkecil']       = $this->NilaiTerkecil($centroid_awal, $literasi);
        return response()->json($data, 200);
        // return view('admin.kmeans.proses', $data);
    }

        // $literasi = $this->literasi($centroid_awal);
        // $data['centroid_awal'] = $centroid_awal;
    

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

    protected function RumusPersamaanED($data, $centroid)
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

    protected function NilaiTerkecil(array $data, $centr)
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

    protected function CentroidBaru(array $centroid_baru)
    {
  
      // mengambilkan nilai atau hasil
      return $centroid_baru;
  
    }

     // untuk menentukan sampai cluster sama lalu berhenti
    protected function ClusterBaru(array $cluster, $literasi){

    // mengambil centroid lama
    $centroid_lama = $this->flatten_array($cluster[($literasi-1)]);
    // mengambil centroid baru
    $centroid_baru = $this->flatten_array($cluster[$literasi]);

    $jumlah_sama   = 0;

    for($i = 0; $i < count($centroid_lama); $i++){

      if($centroid_lama[$i] === $centroid_baru[$i]){

        $jumlah_sama++;

      }

    }

    // mengambilkan nilai atau hasil
    return $jumlah_sama === count($centroid_lama) ? false : true;

  }

    // untuk mengambil data yang akan dicocokkan
    protected function flatten_array($arg) {

    // mengambilkan nilai atau hasil
    return is_array($arg) ? array_reduce($arg, function ($c, $a) { return array_merge($c, flatten_array($a)); },[]) : [$arg];


  }

}
