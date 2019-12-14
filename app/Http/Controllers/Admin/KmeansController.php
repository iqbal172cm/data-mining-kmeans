<?php

namespace App\Http\Controllers\Admin;
use App\Penjualan;
use App\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KmeansController extends Controller
{
    public function index(){
        return view('admin.kmeans.index');
    }
    public function kmeans(Request $r) {
        $tahun1 = $r->input('tahun1');
        $tahun2 = $r->input('tahun2');
        $tahun3 = $r->input('tahun3');

        // dd($tahun3);
    
        $produk = Produk::all();
    
        $data_awal = [];
        foreach ($produk as $p) {
            $data_awal[] = [
                'nm_produk' => $p->nm_produk,
                'tahun1' => $this->countYear($tahun1, $p->id),
                'tahun2' => $this->countYear($tahun2, $p->id),
                'tahun3' => $this->countYear($tahun3, $p->id),
            ];
        }

        // public function centroid_awal()

        $data['data_awal'] = $data_awal;
        $data['centroid_awal'] = $this->CentroidAwal($data_awal, 3);
        return response()->json($data, 200);
    }
    
    protected function countYear($tahun, $idProduk) {
        $data = Penjualan::where('nm_produk', $idProduk)->whereYear('tgl_jual', $tahun)->sum('penjualan');
        return $data;
    }

     // fungsi untuk membuat atau mengambil nilai acak centroid pada data
  protected function CentroidAwal($data, $centroid)
  {

    $rand  = [];
    for ($i=0; $i < $centroid; $i++) {

      $temp = rand(0, (count($data) - 1));

      $rand[] = $temp;

      $ctr[] = [
        $data[$rand[$i]][0],
  		$data[$rand[$i]][1],
        $data[$rand[$i]][2],
        $data[$rand[$i]][3],
        $data[$rand[$i]][4]
      ];

    }
    // mengembalikan nilai atau hasil
    return $ctr;

  }

}
