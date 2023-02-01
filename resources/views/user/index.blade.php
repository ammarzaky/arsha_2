@extends('user.layouts.home_app')

@section('contact')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>{{ $type->title }}</h1>
                    <h2>{{ $type->body }}</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('about') }}" class="btn-get-started scrollto">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=iat36cV_z-U" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="/front/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    @foreach ($clints as $clint)
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="/image/{{ $clint->image }}" class="img-fluid" alt="">
                        </div>
                    @endforeach


                </div>

            </div>
        </section><!-- End Cliens Section -->
    @endsection
