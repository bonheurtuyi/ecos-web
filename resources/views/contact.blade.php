<x-layout>
    @section('links')
        @foreach($categories as $category)
            <li><a href="{{ route('achievement.show', [$category->slug]) }}">{{ $category->name }}</a></li>
        @endforeach
    @stop
    <div class="rs-services main-home pb-20 pt-20 bg19 md-pt-50 md-pb-50">
        <div class="container">
            <div class="sec-title3 text-center mb-65 md-mb-45">
                <span class="sub-title">Contact</span>
                <h2 class="title pb-15">
                    Contact Us<br>
                </h2>
                <div class="heading-border-line"></div>
            </div>
        </div>
    </div>
        <!-- Contact Section Start -->
        <div class="rs-contact contact-style2 bg9 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title mb-45 md-mb-25">
                            <h2 class="title pb-20">
                                Let us help your business to move <span>forward.</span>
                            </h2>
                            <p class="margin-0">
                                @if(\Illuminate\Support\Facades\Session::has('contact-successful'))
                                    <span class="success">{{ Session::get('contact-successful') }}</span>
                                @endif</p>
                        </div>
                        <div class="contact-wrap">
                            <livewire:contact-form />

                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Icon Section Start -->
            <div class="rs-contact main-home">
                <div class="container">
                    <div class="contact-icons-style box-address pt-100 md-pt-70">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <img src="{{ asset('assets/images/contact/icons/1.png') }}" alt="images">
                                    </div>
                                    <div class="content-text">
                                        <h2 class="title"><a href="#">Address</a></h2>
                                        <p class="services-txt">P.O Box 2113
                                            <br> KIGALI, RWANDA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <img src="{{ asset('assets/images/contact/icons/2.png') }}" alt="images">
                                    </div>
                                    <div class="content-text">
                                        <h2 class="title"><a href="#">Office</a></h2>
                                        <p class="services-txt">MOUCECORE BUILDINGS, <br> KG 686 ST</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <img src="{{ asset('assets/images/contact/icons/3.png') }}" alt="images">
                                    </div>
                                    <div class="content-text">
                                        <h2 class="title"><a href="#">Email us</a></h2>
                                        <a href="mailto:test@gamil.com">info@ecosltd.com</a><br>
                                        <a href="mailto:musengimanasyl@gmail.com">infoecos2@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <img src="{{ asset('assets/images/contact/icons/4.png') }}" alt="images">
                                    </div>
                                    <div class="content-text">
                                        <h2 class="title"><a href="#">Call us</a></h2>
                                        <a href="tel:(+250) 788 318 255">(+250)788 318 255</a>
                                        <a href="tel:(+250) 788 647 326">(+250)788 647 326</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Icon Section End -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pr-40 md-pr-15 md-mb-50">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.52967642878!2d30.07401625028242!3d-1.9407560372305486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca6a2a8c84def%3A0x5fa2b03c993505ec!2sMOUCECORE!5e0!3m2!1sen!2srw!4v1664799494394!5m2!1sen!2srw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->
</x-layout>
