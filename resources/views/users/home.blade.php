@extends('layouts.user')
@section('title', config('constants.web_name') . ' - Home page')

@section('content')


    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{ asset('img/home/banner_1.avif') }});"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Beyond Time <span>Beyond Time</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="#"
                                    class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{ asset('img/home/banner_2.jpg') }});"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Colorlib Music <span>Colorlib
                                        Music</span>
                                </h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="#"
                                    class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    @auth
        <!-- ##### Latest Albums Area Start ##### -->
        <section class="latest-albums-area section-padding-100" style="background-color: #1e1e2f;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2 class="text-white">
                                <i class="fa fa-user-circle me-2 text-primary"></i>
                                My Albums/Songs
                            </h2>
                            <p class="text-muted">These are the songs and albums you've uploaded.</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12 text-end">
                        <a href="{{ route('users.my-albums-songs') }}" class="btn btn-outline-primary me-2">
                            <i class="fa fa-upload me-1"></i> Creative albums/songs
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="albums-slideshow owl-carousel">
                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                            <a href="{{ route('users.my-albums-songs') }}" class="btn oneMusic-btn">Load More <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Latest Albums Area End ##### -->

        <!-- ##### Latest Albums Area Start ##### -->
        <section class="latest-albums-area section-padding-100" style="background-color: #173b3e;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2 class="text-white">
                                <i class="fa fa fa-headphones text-primary"></i>
                                My Playlists
                            </h2>
                            <p class="text-muted mb-0">Browse and manage your personal playlists.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12 text-end">
                        <a href="" class="btn btn-outline-success">
                            <i class="fa fa-plus me-1"></i> Create New Playlist
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="albums-slideshow owl-carousel">
                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    {{-- <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p> --}}
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                            <a href="{{ route('users.my-playlists') }}" class="btn oneMusic-btn">Load More <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Latest Albums Area End ##### -->
    @else
        <!-- ##### Latest Albums Area Start ##### -->
        <section class="latest-albums-area section-padding-100" style="background-color: #1e1e2f; padding-bottom: 10px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-heading">
                            <h2 class="text-white">
                                <i class="fa fa-lock me-2 text-warning"></i>
                                Please log in to view your albums, songs and playlists
                            </h2>
                            <p class="text-muted mb-4">
                                Sign in to manage your uploaded music and explore your personal content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Latest Albums Area End ##### -->
    @endauth





    <!-- ##### Latest Albums Area Start ##### -->
    <section class="latest-albums-area section-padding-100" style="background-color: #172e3e;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2 class="text-white">
                            <i class="fa fa-fire text-danger"></i>
                            Hot Musics
                        </h2>
                        <p class="text-muted">These are the most streamed and liked albums and songs by our community in
                            recent times.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                            <span class="position-absolute top-0 start-0 bg-danger text-white px-2 small"
                                style="border-bottom-right-radius: 4px;">
                                🔥 HOT
                            </span>
                            <div class="album-info">
                                <a href="#">
                                    <h5 class="text-white">The Cure</h5>
                                </a>
                                <p>Second Song</p>
                                <p class="text-muted small mb-0">
                                    <i class="fa fa-headphones me-1"></i> 12.3k listens
                                    &nbsp;&nbsp;
                                    <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                </p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                            <span class="position-absolute top-0 start-0 bg-danger text-white px-2 small"
                                style="border-bottom-right-radius: 4px;">
                                🔥 HOT
                            </span>
                            <div class="album-info">
                                <a href="#">
                                    <h5 class="text-white">The Cure</h5>
                                </a>
                                <p>Second Song</p>
                                <p class="text-muted small mb-0">
                                    <i class="fa fa-headphones me-1"></i> 12.3k listens
                                    &nbsp;&nbsp;
                                    <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                </p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                            <span class="position-absolute top-0 start-0 bg-danger text-white px-2 small"
                                style="border-bottom-right-radius: 4px;">
                                🔥 HOT
                            </span>
                            <div class="album-info">
                                <a href="#">
                                    <h5 class="text-white">The Cure</h5>
                                </a>
                                <p>Second Song</p>
                                <p class="text-muted small mb-0">
                                    <i class="fa fa-headphones me-1"></i> 12.3k listens
                                    &nbsp;&nbsp;
                                    <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                </p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                            <span class="position-absolute top-0 start-0 bg-danger text-white px-2 small"
                                style="border-bottom-right-radius: 4px;">
                                🔥 HOT
                            </span>
                            <div class="album-info">
                                <a href="#">
                                    <h5 class="text-white">The Cure</h5>
                                </a>
                                <p>Second Song</p>
                                <p class="text-muted small mb-0">
                                    <i class="fa fa-headphones me-1"></i> 12.3k listens
                                    &nbsp;&nbsp;
                                    <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                </p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                            <span class="position-absolute top-0 start-0 bg-danger text-white px-2 small"
                                style="border-bottom-right-radius: 4px;">
                                🔥 HOT
                            </span>
                            <div class="album-info">
                                <a href="#">
                                    <h5 class="text-white">The Cure</h5>
                                </a>
                                <p>Second Song</p>
                                <p class="text-muted small mb-0">
                                    <i class="fa fa-headphones me-1"></i> 12.3k listens
                                    &nbsp;&nbsp;
                                    <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Albums Area End ##### -->


    <!-- ##### Latest Albums Area Start ##### -->
    <section class="latest-albums-area section-padding-100" style="background-color: #1e1e2f;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2 class="text-white">
                            <i class="fa fa-compact-disc text-white"></i>
                            New Musics
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5 class="text-white">The Cure</h5>
                                </a>
                                <p>Second Song</p>
                                <p class="text-muted small mb-0">
                                    <i class="fa fa-headphones me-1"></i> 12.3k listens
                                    &nbsp;&nbsp;
                                    <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                </p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5 class="text-white">The Cure</h5>
                                </a>
                                <p>Second Song</p>
                                <p class="text-muted small mb-0">
                                    <i class="fa fa-headphones me-1"></i> 12.3k listens
                                    &nbsp;&nbsp;
                                    <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                </p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5 class="text-white">The Cure</h5>
                                </a>
                                <p>Second Song</p>
                                <p class="text-muted small mb-0">
                                    <i class="fa fa-headphones me-1"></i> 12.3k listens
                                    &nbsp;&nbsp;
                                    <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                </p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5 class="text-white">The Cure</h5>
                                </a>
                                <p>Second Song</p>
                                <p class="text-muted small mb-0">
                                    <i class="fa fa-headphones me-1"></i> 12.3k listens
                                    &nbsp;&nbsp;
                                    <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                </p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5 class="text-white">The Cure</h5>
                                </a>
                                <p>Second Song</p>
                                <p class="text-muted small mb-0">
                                    <i class="fa fa-headphones me-1"></i> 12.3k listens
                                    &nbsp;&nbsp;
                                    <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Albums Area End ##### -->

    @auth
        <!-- ##### Latest Albums Area Start ##### -->
        <section class="latest-albums-area section-padding-100" style="background-color: #173b3e;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2 class="text-white">
                                <i class="fa fa-gift text-danger"></i>
                                Musics for you
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="albums-slideshow owl-carousel">
                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                            <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Latest Albums Area End ##### -->

        <!-- ##### Latest Albums Area Start ##### -->
        <section class="latest-albums-area section-padding-100" style="background-color: #172e3e;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2 class="text-white">
                                <i class="fa fa-clock text-danger"></i>
                                Recent Listens
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="albums-slideshow owl-carousel">
                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>

                            <!-- Single Album -->
                            <div class="single-album">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div class="album-info">
                                    <a href="#">
                                        <h5 class="text-white">The Cure</h5>
                                    </a>
                                    <p>Second Song</p>
                                    <p class="text-muted small mb-0">
                                        <i class="fa fa-headphones me-1"></i> 12.3k listens
                                        &nbsp;&nbsp;
                                        <i class="fa fa-heart me-1 text-danger"></i> 1.2k likes
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                            <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Latest Albums Area End ##### -->
    @else
        <!-- ##### Latest Albums Area Start ##### -->
        <section class="latest-albums-area section-padding-100" style="background-color: #173b3e;padding-bottom: 10px">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2 class="text-white">
                                <i class="fa fa-lock me-2 text-warning"></i>
                                Please log in to view your albums and songs suggestions.
                            </h2>
                            <p class="text-muted mb-4">
                                Sign in to view personalized song recommendations just for you.
                            </p>
                        </div>
                    </div>
                </div>
        </section>
        <!-- ##### Latest Albums Area End ##### -->
    @endauth

    <!-- ##### Buy Now Area Start ##### -->
    {{-- <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>See what’s new</p>
                        <h2>Buy What’s New</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/b1.jpg" alt="">
                            <!-- Album Price -->
                            <div class="album-price">
                                <p>$0.90</p>
                            </div>
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Garage Band</h5>
                            </a>
                            <p>Radio Station</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/b2.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Noises</h5>
                            </a>
                            <p>Buble Gum</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="300ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/b3.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Jess Parker</h5>
                            </a>
                            <p>The Album</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/b4.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Noises</h5>
                            </a>
                            <p>Buble Gum</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="500ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/b1.jpg" alt="">
                            <!-- Album Price -->
                            <div class="album-price">
                                <p>$0.90</p>
                            </div>
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Garage Band</h5>
                            </a>
                            <p>Radio Station</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="600ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/b2.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Noises</h5>
                            </a>
                            <p>Buble Gum</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/b3.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Jess Parker</h5>
                            </a>
                            <p>The Album</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/b4.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Noises</h5>
                            </a>
                            <p>Buble Gum</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="300ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/b1.jpg" alt="">
                            <!-- Album Price -->
                            <div class="album-price">
                                <p>$0.90</p>
                            </div>
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Garage Band</h5>
                            </a>
                            <p>Radio Station</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/b2.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Noises</h5>
                            </a>
                            <p>Buble Gum</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="500ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/b3.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Jess Parker</h5>
                            </a>
                            <p>The Album</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="600ms">
                        <div class="album-thumb">
                            <img src="img/bg-img/b4.jpg" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Noises</h5>
                            </a>
                            <p>Buble Gum</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ##### Buy Now Area End ##### -->

    <!-- ##### Featured Artist Area Start ##### -->
    {{-- <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed"
        style="background-image: url(img/bg-img/bg-4.jpg);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                        <img src="img/bg-img/fa.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>See what’s new</p>
                            <h2>Buy What’s New</h2>
                        </div>
                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius
                            rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi,
                            ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante. Donec in velit
                            non elit pulvinar pellentesque et non eros.</p>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>01. Main Hit Song</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ##### Featured Artist Area End ##### -->

    <!-- ##### Miscellaneous Area Start ##### -->
    {{-- <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- ***** Weeks Top ***** -->
                <div class="col-12 col-lg-4">
                    <div class="weeks-top-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>This week’s top</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt1.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Sam Smith</h6>
                                <p>Underground</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="150ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt2.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Power Play</h6>
                                <p>In my mind</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt3.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Cristinne Smith</h6>
                                <p>My Music</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="250ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt4.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>The Music Band</h6>
                                <p>Underground</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="300ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt5.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Creative Lyrics</h6>
                                <p>Songs and stuff</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="350ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/wt6.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>The Culture</h6>
                                <p>Pop Songs</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ***** New Hits Songs ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>New Hits</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp"
                            data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt7.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Sam Smith</h6>
                                    <p>Underground</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp"
                            data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt8.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Power Play</h6>
                                    <p>In my mind</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp"
                            data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt9.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Cristinne Smith</h6>
                                    <p>My Music</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp"
                            data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt10.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>The Music Band</h6>
                                    <p>Underground</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp"
                            data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt11.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Creative Lyrics</h6>
                                    <p>Songs and stuff</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp"
                            data-wow-delay="350ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt12.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>The Culture</h6>
                                    <p>Pop Songs</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- ***** Popular Artists ***** -->
                <div class="col-12 col-lg-4">
                    <div class="popular-artists-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>Popular Artist</h2>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa1.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Sam Smith</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="150ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa2.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>William Parker</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa3.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Jessica Walsh</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="250ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa4.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Tha Stoves</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa5.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>DJ Ajay</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="350ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa6.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Radio Vibez</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="400ms">
                            <div class="thumbnail">
                                <img src="img/bg-img/pa7.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Music 4u</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ##### Miscellaneous Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    {{-- <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img"
        style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i
                                            class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ##### Contact Area End ##### -->




    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>


@endsection
