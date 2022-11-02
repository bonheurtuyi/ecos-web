<x-layout>
    @section('links')
        @foreach($categories as $category)
            <li><a href="{{ route('achievement.show', [$category->slug]) }}">{{ $category->name }}</a></li>
        @endforeach
    @stop
    <div class="rs-services main-home pt-20 pb-10 bg19 md-pt-50 md-pb-50">
        <div class="container">
            <div class="sec-title3 text-center mb-65 md-mb-45">
                <span class="sub-title">Clients</span>
                <h2 class="title pb-15">
                    Our Clients<br>
                </h2>
                <div class="heading-border-line"></div>
            </div>
        </div>
    </div>
    <!-- Iconbox Area Section Start -->
    <div id="rs-iconbox-area" class="rs-iconbox-area pt-20 pb-100 md-pt-70 md-pb-70">
        <div class="container custom">
            <div class="row y-middle">
                @foreach($partners as $partner)
                    <div class="col-lg-4 col-md-6 mb-30">
                    <div class="box-inner">
                        <div class="box-item">
                            <div class="icon-box">
                                <a href="{{ $partner->link }}" target="_blank"><img class="dance_hover" src="{{ asset('assets/images/partner/main-home/' . $partner->image) }}"
                                                 alt="{{ $partner->name }}"></a>
                            </div>
                            <div class="text-area">
                                <p class="services-txt">{!! $partner->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Iconbox Area Section End -->

    <!-- Cta Section End -->
    <div class="rs-cta style1 bg13 pt-100 pb-95 md-pt-70 md-pb-65">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-30">
                    <div class="sec-title2">
                        <div class="sub-text">Become a Partner</div>
                        <h2 class="title white-color margin-0">Our experts always ready to<br>
                            work <span class="new-next">with you.</span></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="btn-part text-right md-left">
                        <a class="readon consultant discover" href="{{ route('contact') }}">Become a Partner</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Section End -->

    <!-- Contact Section Start -->
    <div class="rs-contact contact-style2 pt-95 pb-100 md-pt-65 md-pb-70">
        <div class="container">
            <div class="sec-title2 mb-55 md-mb-35 text-center">
                <div class="sub-text">Quick contact</div>
                <h2 class="title mb-0">Let us help your business to<br> move<span>forward.</span></h2>
            </div>
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="contact-img">
                        <img src="{{ asset('assets/images/contact/computer.jpg') }}" alt="Contact">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-wrap">
                        <div id="form-messages"></div>
                        <livewire:contact-form />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->
</x-layout>
