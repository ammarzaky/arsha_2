@extends('user.layouts.home_app')
@section('contact')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ $portfolio_t->title }}</h2>
                <p>{{ $portfolio_t->body }}</p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                @foreach ($categorise as $item)
                    <li data-filter=".{{ $item->catigories }}">{{ $item->catigories }}</li>
                @endforeach

                {{-- @dd($categorise) --}}

            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


                @foreach ($portfolio as $portfolio)
                    <div class="col-lg-4 col-md-6 portfolio-item   {{ $portfolio->catigories }}">
                        <div class="portfolio-img">
                            <img src="/image/{{ $portfolio->image }}" class="img-fluid" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4> {{ $portfolio->name }}</h4>
                            <p>{{ $portfolio->catigories }}</p>
                            <a href="/front/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 1">
                                <i class="bx bx-plus"></i></a>
                            <a href="/port_detai" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                @endforeach


                {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="/front/assets/img/portfolio/portfolio-2.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="/front/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="/port_detai" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="/front/assets/img/portfolio/portfolio-3.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <a href="/front/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="/port_detai" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="/front/assets/img/portfolio/portfolio-4.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="/front/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="/port_detai" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="/front/assets/img/portfolio/portfolio-5.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="/front/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="/port_detai" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="/front/assets/img/portfolio/portfolio-6.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="/front/assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="/port_detai" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="/front/assets/img/portfolio/portfolio-7.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="/front/assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="/port_detai" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="/front/assets/img/portfolio/portfolio-8.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="/front/assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="/port_detai" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="/front/assets/img/portfolio/portfolio-9.jpg" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="/front/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="/port_detai" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div> --}}

            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
