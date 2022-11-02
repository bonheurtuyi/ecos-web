<x-layout>
    @section('links')
        @foreach($categories as $category)
            <li><a href="{{ route('achievement.show', [$category->slug]) }}">{{ $category->name }}</a></li>
        @endforeach
    @stop
    <div class="rs-services main-home pb-5 pt-20 bg19 md-pt-50 md-pb-20">
        <div class="container">
            <div class="sec-title3 text-center mb-65 md-mb-45">
                <span class="sub-title">Services</span>
                <h2 class="title pb-15">
                    Our area of Expertise<br>
                </h2>
                <div class="heading-border-line"></div>
            </div>
        </div>
    </div>
    <!-- Services Section Start -->
    <div id="rs-services" class="rs-services style1 modify shape-bg  md-pt-70 pb-140 md-pb-80">
        <div class="container">
            <div class="row service-wrap mr-0 ml-0">
                @foreach($services as $service)
                    <div class="col-lg-4 padding-0 pr-1">
                        <div class="service-grid">
                            <div class="service-icon mb-23">
                                {{--                                <img src="{{ asset('assets/images/icons/head.svg') }}" alt="">--}}
                            </div>
                            <h4 class="title mb-18">{{ $service->name }}</h4>
                            <div class="desc mb-12 mine">{!! $service->description !!} </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
    <!-- Services Section End -->

    <!-- Process Section Start -->
    <div class="rs-process style1 mt-10 white-bg pt-100 pb-100 md-pt-70 md-pb-80">
        <div class="container custom">
            <div class="row y-middle">
                <div class="col-lg-7">
                    <div class="sec-title md-text-center mb-30">
                        <h2 class="title title2 ">
                           Please contact us if you are interested in working with us.
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="btn-part text-right md-text-center">
                        <a class="readon consultant discover" href="{{ route('contact') }}">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Section End -->
</x-layout>
