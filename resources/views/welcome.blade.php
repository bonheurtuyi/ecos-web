<x-layout>
    @section('links')
        @foreach($categories as $category)
         <li><a href="{{ route('achievement.show', [$category->slug]) }}">{{ $category->name }}</a></li>
        @endforeach
    @stop
        <!-- Banner Section Start -->
        <div class="rs-banner banner-home-style2">
            <div class="container custom">
                <div class="row y-middle">
                    <div class="col-lg-7">
                        <div class="content-wrap">
                            <span class="sub-text">Consulting company</span>
                            <h2 class="title">Educational Consulting Success</h2>
                            <div class="description mb-38">
                                We are experts in Consultancy, Training, Research<br>
                                Project implementation & evaluation...
                            </div>
                            <div class="btn-part">
                                <a class="readon consultant paste-btn" href="{{ route('contact') }}">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 pl-50 md-pl-15  md-pt-60 md-mb-100 xs-mb-70">
                        <div class="rs-contact ">
                            <div class="contact-wrap">
                                <div class="content-part mb-30">
                                    <h2 class="title">Book an Appointment</h2>
                                    <div class="description">
                                        We here to help you 24/7 with experts <br>

                                    </div>
                                </div>
                                <livewire:book-appointment />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->

        <!-- Services Section Start -->
        <div class="rs-services style7 black-bg3 pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('assets/images/services/style7/icons/2.png') }}" alt="Images">
                            </div>
                            <div class="services-content">
                                <h2 class="title"> Vision</h2>
                                <p class="services-txt"> Building on Evidence -Based Learning for Change.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('assets/images/services/style7/icons/1.png') }}" alt="Images">
                            </div>
                            <div class="services-content">
                                <h2 class="title"> Values</h2>
                                <p class="services-txt"> Respect,
                                    Teamwork,
                                    Innovation,
                                    Professionalism.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('assets/images/services/style7/icons/3.png') }}" alt="Images">
                            </div>
                            <div class="services-content">
                                <h2 class="title">Mission</h2>
                                <p class="services-txt">Providing tailored consultancy, training,
                                    coaching and advisory services based on the specific
                                    needs of clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- About Section Start -->
        <div id="rs-about" class="rs-about style5 relative pt-140 md-pt-80">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-6 pr-72">
                        <div class="left-side">
                            <img src="{{ asset('assets/images/about/about.png') }}" alt="Field debrief">
                            <div class="skill-tag"><span>15+</span> Years <br> Experience</div>
                            <img class="left-pattern" src="{{ asset('assets/images/pattern/pattern1.png') }}" alt="Experience">
                        </div>
                    </div>
                    <div class="col-lg-6 md-pt-50">
                        <div class="sec-title4 mb-30 mine">
                            <div class="sub-title secondary-color mb-10">About</div>
                            <h2 class="title primary-color">Educational Consulting <br>Success (ECOS) </h2>
                            <div class="desc left-line-v">
                                <div class="draw-line start-draw"></div>
                                ECOS Ltd is a dynamic and independent research & consultancy company.
                                Through the tailored consultancy, trainings, coaching and advisory services,
                                we support a wide range of International, Regional, Local organizations and
                                individuals to achieve their     respective objectives in effective and efficient ways.
                            </div>
                        </div>
                        <div class="row mb-40">
                            <div class="col-md-6">
                                <ul class="services">
                                    <li><i class="fa fa-check"></i>Affordable Support</li>
                                    <li><i class="fa fa-check"></i>Client Oriented</li>
                                    <li><i class="fa fa-check"></i>Years of Experience</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="services">
                                    <li><i class="fa fa-check"></i>Professional Team</li>
                                    <li><i class="fa fa-check"></i>24/7 Active Service</li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-part">
                            <a class="readon2" href="{{ route('about') }}">Learn More <div class="btn-arrow"></div></a>
                        </div>
                    </div>
                </div>
                <div class="pattern-img">
                    <img class="left-pattern" src="{{ asset('assets/images/pattern/pattern1.png') }}" alt="">
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Services Section Start -->
        <div id="rs-services" class="rs-services style1 modify shape-bg pt-128 md-pt-70 pb-140 md-pb-80">
            <div class="container">
                <div class="sec-title4 text-center mb-60">
                    <div class="sub-title mb-6">Services</div>
                    <h2 class="title primary-color">Area of Expertise</h2>
                </div>
                <div class="row service-wrap mr-0 ml-0">
                    @foreach($services as $service)
                     <div class="col-lg-4 padding-0 pr-1">
                        <div class="service-grid">
                            <div class="service-icon mb-23">
{{--                                <img src="{{ asset('assets/images/icons/head.svg') }}" alt="">--}}
                            </div>
                            <h4 class="title mb-18 mine">{{ $service->name }}</h4>
                            <div class="desc mb-12 mine">{!! $service->description !!} </div>
{{--                            <div class="btn-wrap">--}}
{{--                                <a class="readmore" href="#">Read more <div class="btn-arrow"></div></a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="view-btn text-center mt-40">
                    <a class="readon2" href="{{ route('services') }}">All Services <div class="btn-arrow"></div></a>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Testimonial Section Start -->
        <div class="rs-testimonial style1">
            <div class="black-bg left-radius relative pt-133 pb-133 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title4 text-center mb-60">
                        <div class="sub-title secondary-color mb-6">Testimonials</div>
                        <h2 class="title white-color">What Our Clients Have To Say</h2>
                    </div>
                    <div class="rs-carousel owl-carousel owl-loaded owl-drag" data-loop="true" data-items="3" data-margin="0" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="true" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
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
                                <div class="desc"><p>"{!!Str::limit($item->content, 250, ' (Read More...)')  !!}"</p></div>
                                <h4 class="name">{{ $item->client }}</h4>
                                <span class="designation">{{ $item->role }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="view-btn text-center mt-40">
                        <a class="readon2" href="{{ route('testimonials') }}">All Testimonials <div class="btn-arrow"></div></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->

        <!-- Partner Section Start -->
        <div class="rs-partner gray-bg pt-74 pb-65">
            <div class="container">
                <div class="rs-carousel owl-carousel owl-loaded owl-drag" data-loop="true" data-items="4" data-margin="0" data-autoplay="false" data-autoplay-timeout="7000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="true" data-md-device-dots="false">
                    @foreach($partners as $item)
                        <div class="item">
                            <a href="{{ $item->link }}"><img src="{{ asset('assets/images/partner/main-home/'. $item->image) }}" alt="{{ $item->name }}"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Partner Section End -->

        <!-- Achievement Section Start -->
        <div class="rs-achievement style1 relative pt-171 pb-150 md-pt-80">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-6 pr-0">
                        <div class="sec-title4 mb-35">
                            <div class="sub-title mb-6">Achievement</div>
                            <h2 class="title">What We Have Done in these Few Years</h2>
                            <div class="desc left-line-v mine">
                                <div class="draw-line start-draw"></div>
                                For consulting service delivery purpose, ECOS brings together over 35 consultants (national, regional and
                                internationals) with a diverse experience and expertise. Our consultants are knowledgeable of the markets
                                and environment in the respective industries and provide the optimum services through their extensive
                                experience. <br>
                                ECOS has a roster of over 150 well-trained males and females who actively and professionally support
                                our field research works in different countries.
                            </div>
                        </div>
                        <div class="rs-counter hover-box pt-35">
                            <div class="rs-counter-list box-item active">
                                <div class="counter-icon"><i class="fa fa-check-circle"></i></div>
                                <h3 class="counter-number">52</h3>
                                <div class="counter-text">Projects evaluated</div>
                            </div>
                            <div class="rs-counter-list box-item">
                                <div class="counter-icon"><i class="fa fa-building"></i></div>
                                <h3 class="counter-number">30</h3>
                                <div class="counter-text">Workshops & conferences facilitated</div>
                            </div>
                            <div class="rs-counter-list box-item">
                                <div class="counter-icon"><i class="fa fa-pencil"></i></div>
                                <h3 class="counter-number">35</h3>
                                <div class="counter-text">Trainings facilitated</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-10 md-pt-50">
                        <div class="img-part">
                            <img src="{{ asset('assets/images/achievement/achievement.svg') }}" alt="Achievement">
                        </div>
                    </div>
                </div>
                <img class="pattern-img" src="{{ asset('assets/images/pattern/pattern4.png') }}" alt="">
            </div>
        </div>
        <!-- Achievement Section End -->


        <!-- Call to Action Section Start -->
        <div class="rs-cta style1 black-bg relative pt-128 pb-128 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-7">
                        <div class="sec-title4">
                            <div class="sub-title secondary-color mb-6">Talk to us</div>
                            <h2 class="title white-color left-line-v margin-0">
                                <div class="draw-line start-draw"></div>
                                Ready to Get Started for First Class Consultant?
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-5 md-pt-30">
                        <div class="cta-btn text-center text-md-left">
                            <a class="readon2 hover-light" href="{{ route('contact') }}">Contact Us Now <div class="btn-arrow"></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action Section End -->

        <!-- Blog Section Start -->
{{--        <div id="rs-blog" class="rs-blog style1 shape-bg pt-130 md-pt-70 sm-pt-10 pb-120 md-pb-60">--}}
{{--            <div class="container">--}}
{{--                <div class="sec-title4 text-center mb-50">--}}
{{--                    <div class="sub-title mb-6">Blog</div>--}}
{{--                    <h2 class="title">Latest News</h2>--}}
{{--                </div>--}}
{{--                <div class="rs-carousel owl-carousel owl-loaded owl-drag" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">--}}
{{--                    <div class="blog-wrap">--}}
{{--                        <div class="blog-img">--}}
{{--                            <img src="assets/images/blog/home-6/1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="blog-contant">--}}
{{--                            <h4 class="title"><a href="#">Our Top Visitors Know</a></h4>--}}
{{--                            <div class="desc">Praesent eu dolor eu orci vehicula euismod Vivamus sed solli.</div>--}}
{{--                            <div class="blog-meta">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <img class="avatar" src="assets/images/blog/home-6/avatar.jpg" alt="">--}}
{{--                                        <a href="#">Admin</a>--}}
{{--                                    </li>--}}
{{--                                    <li><i class="fa fa-clock-o"></i>Nov 1, 2019</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blog-wrap">--}}
{{--                        <div class="blog-img">--}}
{{--                            <img src="assets/images/blog/home-6/2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="blog-contant">--}}
{{--                            <h4 class="title"><a href="#">Business Structured</a></h4>--}}
{{--                            <div class="desc">Praesent eu dolor eu orci vehicula euismod Vivamus sed solli.</div>--}}
{{--                            <div class="blog-meta">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <img class="avatar" src="assets/images/blog/home-6/avatar.jpg" alt="">--}}
{{--                                        <a href="#">Admin</a>--}}
{{--                                    </li>--}}
{{--                                    <li><i class="fa fa-clock-o"></i>Oct 7, 2019</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blog-wrap">--}}
{{--                        <div class="blog-img">--}}
{{--                            <img src="assets/images/blog/home-6/3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="blog-contant">--}}
{{--                            <h4 class="title"><a href="#">Big Ideas for Business</a></h4>--}}
{{--                            <div class="desc">Praesent eu dolor eu orci vehicula euismod Vivamus sed solli.</div>--}}
{{--                            <div class="blog-meta">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <img class="avatar" src="assets/images/blog/home-6/avatar.jpg" alt="">--}}
{{--                                        <a href="#">Admin</a>--}}
{{--                                    </li>--}}
{{--                                    <li><i class="fa fa-clock-o"></i>Dec 3, 2019</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Blog Section End -->


</x-layout>
