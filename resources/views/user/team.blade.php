@extends('user.layouts.home_app')
@section('contact')
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ $type->title }}</h2>
                <p>{{ $type->body }}</p>
            </div>

            <div class="row">

                @foreach ($team as $member)
                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="/image/{{ $member->image }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $member->name }}</h4>
                                <span>{{ $member->job }}</span>
                                <p>{{ $member->describtion }}</p>
                                <div class="social">
                                    <a href="{{ $member->twitter }}"><i class="ri-twitter-fill"></i></a>
                                    <a href="{{ $member->facebook }}"><i class="ri-facebook-fill"></i></a>
                                    <a href="{{ $member->instgram }}"><i class="ri-instagram-fill"></i></a>
                                    <a href="{{ $member->linkedin }}"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ $typePrice->title }}</h2>
                <p>{{ $typePrice->body }}</p>
            </div>

            <div class="row">

                @foreach ($pricing as $card)
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <h3>{{ $card->name }}</h3>
                            <h4><sup>$</sup>{{ $card->price }}<span>{{ $card->time }}</span></h4>
                            <ul>
                                @foreach ($pservice as $item)
                                    <li><i class="bx bx-check"></i> {{ $item->service }}</li>
                                @endforeach

                                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa ultricies</span></li>

                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section><!-- End Pricing Section -->
@endsection
