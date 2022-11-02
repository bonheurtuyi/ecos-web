<x-layout>


        <!-- Testimonial Section Start -->
        <div class="rs-testimonial style1">
            <div class="black-bg left-radius relative pt-133 pb-133 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title4 text-center mb-60">
                        <div class="sub-title secondary-color mb-6">Testimonials</div>
                        <h2 class="title white-color">What Our Clients Have To Say</h2>
                    </div>
{{--                    <div class="rs-carousel owl-carousel owl-loaded owl-drag" data-loop="true" data-items="3" data-margin="0" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="true" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">--}}
                        @foreach($testimonials as $item)
                            <div class="item text-center">
                                <div class="testi-img">
                                    <img src="{{ asset('assets/images/testimonial/avatar/1.png') }}" alt="">
                                </div>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="author-detail ">
                                    <h4 class="name">{{ $item->client }}</h4>
                                    <span class="designation"><strong>"{{ $item->role }}"</strong></span><br>
                                    <div class="desc"><p>"{!!$item->content !!}"</p></div>


                                </div>
                            </div>
                        @endforeach
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->


    @section('links')
        @foreach($categories as $category)
            <li><a href="{{ route('achievement.show', [$category->slug]) }}">{{ $category->name }}</a></li>
        @endforeach
    @stop
</x-layout>
