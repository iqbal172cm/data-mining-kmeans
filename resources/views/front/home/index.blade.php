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
                    <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                        <a href="#"><img  width="" src="{{ asset('uploads/'.$p->gambar) }}" alt="{{ $p->nm_produk}}" class="img-responsive">
                            <h3>{{ $p->nm_produk}}</h3>
                            <span>{{ $p->stock}} KG</span>
                        </a>
                    </div>
                    @endforeach
                    

                </div>
            </div>
        </div>
        <div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Happy Clients</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box-testimony animate-box">
                            <blockquote>
                                <span class="quote"><span><i class="icon-quote"></i></span></span>
                                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                            <p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="box-testimony animate-box">
                            <blockquote>
                                <span class="quote"><span><i class="icon-quote"></i></span></span>
                                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                            </blockquote>
                            <p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                        </div>
                        
                        
                    </div>
                    <div class="col-md-4">
                        <div class="box-testimony animate-box">
                            <blockquote>
                                <span class="quote"><span><i class="icon-quote"></i></span></span>
                                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                            <p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-blog" class="fh5co-bg-section">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Recent Blog</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#"><img class="img-responsive" src="images/work-4.jpg" alt=""></a>
                            <div class="blog-text">
                                <h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                <span class="posted_on">Nov. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#"><img class="img-responsive" src="images/work-2.jpg" alt=""></a>
                            <div class="blog-text">
                                <h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
                                <span class="posted_on">Nov. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#"><img class="img-responsive" src="images/work-3.jpg" alt=""></a>
                            <div class="blog-text">
                                <h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                <span class="posted_on">Nov. 15th</span>
                                <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="fh5co-started">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Lets Get Started</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="form-inline">
                            <div class="col-md-6 col-md-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default btn-block">Get In Touch</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    

    
@endsection