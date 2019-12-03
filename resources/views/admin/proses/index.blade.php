@extends('admin.layouts.main')

@section('title', 'proses')

@section('contents')
<div class="container-fliud">
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Produk</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Penyetokan</th>
                            <th>Penjualan</th>
                            <th>Stok</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php ?>
                      @foreach($produk as $p)
                        <tr>
                            <td>{{ $p['nm_produk'] }}</td>
                            <td>{{ $p['penyetokan']}}</td>
                            <td>{{ $p['penjualan'] }}</td>
                            <td>{{ $p['stock'] }}</td>
                            {{-- <td value="{{ $p->id }} "> {{ $p->stock}}</td> --}}
                        </tr>
                        
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    <br>


                  </div>
                </div>
              </div>
    
        
        </div>

    </div>
@endsection


