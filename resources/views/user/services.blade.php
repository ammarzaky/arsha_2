@extends('user.layouts.home_app')
@section('contact')
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ $service->title }}</h2>
                <p>{{ $service->body }}</p>
            </div>

            <div class="row">


                @foreach ($services as $Service)
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">{{ $Service->title }}</a></h4>
                            <p>{{ $Service->describtion }}</p>
                        </div>
                    </div>
                @endforeach



            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>{{ $service_call->title }}</h3>
                    <p> {{ $service_call->body }}</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="/contact_u">Call To Action</a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->
@endsection
