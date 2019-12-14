@extends('admin.layouts.main')

@section('title', 'produk')

@section('contents')
<div class="container-fliud">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <a href="{{ route('produk_create')}}" class="btn btn-primary">Tambah Data</a>
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
                            <th>stok</th>
                            <th>satuan</th>
                            <th>expired</th>
                            <th>Gambar Produk</th>
                            <!-- <th colspan="2">Aksi</th> -->
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no = 1; ?>
                    @foreach($produk as $p)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $p->nm_produk }}</td>
                            <td>{{ $p->stock }}</td>
                            <td>{{ $p->satuan}}</td>
                            <td>{{ $p->expired }} Bulan</td>
                            <td><img width="150px" src="{{ asset('uploads/'.$p->gambar) }}"></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Aksi
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item fa fa-edit" href=" {{ route('produk_edit', ['id' => $p->id]) }} ">Edit</a>
                                        <form action="{{ route('produk_delete') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $p->id }}">
                                            <!-- <a class="dropdown-item" href="#">Hapus</a> -->
                                            <a class="dropdown-item fa fa-trash" href="{{ route('produk_delete', ['id' => $p->id]) }} ">Delete</a>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            
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


