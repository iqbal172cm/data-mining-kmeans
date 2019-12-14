@extends('admin.layouts.main')

@section('title', 'proses')

@section('contents')
<div class="container-fliud">
    <div class="col-md-12 col-sm-12 col-xs-12">
        {{-- <a href="{{ route('produk_create')}}" class="btn btn-primary">Tambah Data</a> --}}
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
                            <th>no</th>
                            <th>Nama Produk</th>
                            <th>Tahun ke 1</th>
                            <th>Tahun ke 2</th>
                            <th>Tahun ke 3</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no = 1; ?>
                    @foreach($data_awal as $p)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $p['nm_produk'] }}</td>
                            <td>{{ $p['tahun1'] }}</td>
                            <td>{{ $p['tahun2'] }}</td>
                            <td>{{ $p['tahun3'] }}</td>
                        </tr>
                        
                        </tr>
                      </tbody>
                    @endforeach
                    </table>

                  </div>
                </div>

                <div class="x_panel">
                        <div class="x_title">
                          <h2>Centroid awal</h2>
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
                                  <th>no</th>
                                  <th>Tahun ke 1</th>
                                  <th>Tahun ke 2</th>
                                  <th>Tahun ke 3</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php $c = 1; ?>
                          @foreach($centroid_awal as $p)
                              <tr>
                                  <td>C{{ $c++ }}</td>
                                  <td>{{ $p['tahun1'] }}</td>
                                  <td>{{ $p['tahun2'] }}</td>
                                  <td>{{ $p['tahun3'] }}</td>
                              </tr>
                              
                              </tr>
                            </tbody>
                          @endforeach
                          </table>
      
                        </div>
                      </div>
                </div>

        </div>

</div>


@endsection


