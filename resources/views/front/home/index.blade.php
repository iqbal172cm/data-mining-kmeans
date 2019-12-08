@extends('front.layouts.main')

@section('title', 'Home')

@section('contents')

        <div id="fh5co-project">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Our Product</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="row">
                       @foreach($produk as $p)
                    <div class="col-md-4 col-sm-6  fh5co-project animate-box" data-animate-effect="fadeIn">
                        <a href="#"><img  width="" src="{{ asset('uploads/'.$p->gambar) }}" alt="{{ $p->nm_produk}}" class="img-responsive">
                            <h3>{{ $p->nm_produk}}</h3>
                            <span>{{ $p->stock}} KG</span>
                        </a>
                    </div>
                    @endforeach
                    

                </div>
            </div>
        </div>
        
        


        
    

    
@endsection