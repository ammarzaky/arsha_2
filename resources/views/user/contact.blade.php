@extends('user.layouts.home_app')
@section('contact')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ $type->title }}</h2>
                <p>{{ $type->body }}</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">


                        @foreach ($contacts as $contact)
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>{{ $contacts[0]->addres }}</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>{{ $contacts[0]->email }}</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>{{ $contacts[0]->phone }}</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>
                    @endforeach


                </div>


                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

                    <form action="{{ route('sendMassage') }}" method="post" role="form" class="php-email-form"
                        novalidate>
                        @csrf
                        @if (session('success') != null)
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Massage</label>
                            <textarea class="form-control" name="massage" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your Massage has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Massage</button></div>
                    </form>
                </div>

            </div>


        </div>
    </section><!-- End Contact Section -->
    <div id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">


                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        @if (session('email_success') != null)
                            <div class="alert alert-success">{{ session('email_success') }}</div>
                        @endif

                        @if (session('email_errors') != null)
                            <div class="alert alert-danger">{{ session('email_errors') }}</div>
                        @endif
                        <form action="{{ route('newsletter') }}" method="post">
                            @csrf
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ $type_question->title }}</h2>
                <p>{{ $type_question->body }}</p>
            </div>

            <div class="faq-list">
                <ul>

                    @foreach ($questions as $question)
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1"> {{ $question->que }} <i
                                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    {{ $question->ans }}
                                </p>
                            </div>
                        </li>
                    @endforeach



                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
@endsection


<script src="/front/assets/vendor/aos/aos.js"></script>
<script src="/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/front/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/front/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/front/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/front/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="/front/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/front/assets/js/main.js"></script>
