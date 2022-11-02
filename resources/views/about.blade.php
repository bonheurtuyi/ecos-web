<x-layout>
    @section('links')
        @foreach($categories as $category)
            <li><a href="{{ route('achievement.show', [$category->slug]) }}">{{ $category->name }}</a></li>
        @endforeach
    @stop
    <!-- Breadcrumbs Start -->
    <div class="rs-services main-home pb-10 pt-10 bg19 md-pt-50 md-pb-50">
        <div class="container">
            <div class="sec-title3 text-center mb-40 md-mb-45">
                <span class="sub-title">About</span>
                <h2 class="title pb-15">
                    Educational Consulting Success
                </h2>
                <div class="heading-border-line"></div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- About Section Start -->
    <div class="rs-about style2 pt-20 pb-100 md-pt-40 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-33 md-pr-15 md-mb-50">
                    <div class="images-part">
                        <img src="{{ asset('assets/images/about/about-5.png') }}" alt="Images">
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="sec-title ">
                        <h2 class="title pb-22 " style="font-size: 32px;">
                            "Together We Perform Smarter"
                        </h2>
                        <span class="sub-text big">The Educational Consulting Success, ECOS Ltd is a dynamic and independent
                            research & consultancy company. </span>

                        <p class="margin-0 pt-15 mine">Through the tailored consultancy, trainings, coaching and advisory
                            services, we support a wide range of International, Regional,
                            Local organizations and individuals to achieve their respective objectives in effective and efficient ways.</p>
                        <br><p class="mine">
                            No matter how difficult the challenge or how to grow the
                            process, we thoroughly examine our clients ‘operations to
                            enable them to achieve their goals, based on our extensive
                            experience and knowledge accumulated through serving
                            a wide range of clients including donor agencies,
                            Government, private institutions and civil society organizations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

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
                                <p class="services-txt"> Building on Evidence -Based Learning for Change</p>
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

    <!-- Why Choose Section Start -->
    <div class="rs-choose pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                    <div class="sec-title mb-35 mine">
                        <h2 class="title pb-30">
                            Why choose us
                        </h2>
                        <p class="margin-0"><strong>11 years</strong> of Experience in consultancy, trainings, coaching and advisory services.<br>
                            EXPERTISE IN CONSULTANCY, TRAININGS, RESEARCH, PROJECT IMPLEMENTATION AND EVALUATION.
                        </p>
                    </div>
                    <!-- Skillbar Section Start -->
                    <div class="rs-skillbar style1">
                        <div class="cl-skill-bar">
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Consultancy</span>
                            <div class="skillbar" data-percent="95">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Trainings</span>
                            <div class="skillbar" data-percent="95">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Coaching</span>
                            <div class="skillbar" data-percent="90">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Advisory Services</span>
                            <div class="skillbar margin-no" data-percent="95">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Skillbar Section End -->
                </div>
                <div class="col-lg-6">
                    <div class="rs-videos choose-video">
                        <div class="images-video">
                            <img src="{{ asset('assets/images/about/about-4.png') }}" alt="images">
                        </div>
{{--                        <div class="animate-border">--}}
{{--                            <a class="popup-border" href="#">--}}
{{--                                <i class="fa fa-play"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->
        <div class="rs-counter style1 pt-50 pb-50 mt-50 black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                        <div class="counter-area">
                            <div class="counter-list mb-20">
                                <div class="counter-number">
                                    <span class="rs-count" style="color: white;">52</span>
                                    <span class="prefix" style="color: white;">+</span>
                                </div>
                            </div>
                            <div class="content-part">
                                <h5 class="title" style="color: white;">Projects evaluated.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                        <div class="counter-area">
                            <div class="counter-list mb-20">
                                <div class="counter-number">
                                    <span class="rs-count" style="color: white;">35</span>
                                    <span class="prefix" style="color: white;">+</span>
                                </div>
                            </div>
                            <div class="content-part">
                                <h5 class="title" style="color: white;">Trainings facilitated.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                        <div class="counter-area">
                            <div class="counter-list mb-20">
                                <div class="counter-number">
                                    <span class="rs-count" style="color: white;">30</span>
                                    <span class="prefix" style="color: white;">+</span>
                                </div>
                            </div>
                            <div class="content-part">
                                <h5 class="title" style="color: white;">Workshops & conferences facilitated.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-area">
                            <div class="counter-list mb-20">
                                <div class="counter-number">
                                    <span class="rs-count" style="color: white;">15</span>
                                    <span class="prefix" style="color: white;">+</span>
                                </div>
                            </div>
                            <div class="content-part">
                                <h5 class="title" style="color: white;">Years of experience.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->
    </div>
    <!-- Why Choose Section Start -->

    <!-- Team Start -->
    <div class="rs-team-Single pt--50 pb-100">
        <div class="container custom">
            <div class="sec-title mb-35 align-items-center center">
                <h2 class="title pb-30 center">
                    About Managing Director(MD)
                </h2>
            </div>
            <div class="btm-info-team">
                <div class="row align-items-center">
                    <div class="col-lg-5 md-mb-50">
                        <div class="images-part">
                            <img src="{{ asset('assets/images/team/sylvestre.jpg') }}" alt="images">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="con-info mine">
                            <span class="designation-info">Managing Director of ECOS Ltd</span>
                            <h2 class="title">Mr.MUSENGIMANA Sylvestre</h2>
                            <div class="short-desc">
                                Mr.Sylvestre Musengimana is a seasoned consultant with over twelve years’
                                experience in the areas of Performance Assessment and Analysis, capacity
                                development and strengthening, Systems Mapping, project implementation, Monitoring,
                                evaluation and Learning (MEL). Sylvestre has extensive experience in qualitative and
                                quantitative research, Human Rights- Based Approach (HRBA) to Programming, community
                                engagement and gender, youth empowerment, social and behavior change communication (SBCC), workshops and training facilitation.
                            </div>

                            <div class="ps-informations">
                                <ul class="personal-info">
                                    <li>
                                        <span><i class="flaticon-email"></i></span>
                                        <a href="mailto:claire@rstheme.com">musengimanasyl@gmail.com</a>
                                    </li>
                                    <li>
                                        <span><i class="flaticon-call"></i></span> +(250) 788 647 326
                                    </li>
                                </ul>
{{--                                <ul class="social-info">--}}
{{--                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
{{--                                </ul>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 pr-55 md-pr-15">
                    <div class="project-con mine">
                        <h3>Biography</h3>
                        <p class="margin-0 pb-25">Sylvestre contributed to the donor-supported project's
                            evaluation in Rwanda such as World Bank; World Food Programme (WFP); U.S. Agency for International Development
                            (USAID); Foreign, Commonwealth Development Office (FCDO) Former DFID; European Union(EU);
                            United Nations Educational, Scientific, and Cultural Organization(UNESCO);
                            United Nations Children’s Fund(UNICEF); Embassy of the Kingdom of the Netherlands(EKN);
                            and Canadian Department of Foreign Affairs, Trade, and Development.</p>
                        <p class="margin-0">Sylvestre is a certified Performance Assessment and
                            Analysis Specialist by International Society for Performance Improvement (ISPI).
                            Sylvestre got BSAFE and PSEA certificates delivered by UNDSS and UNHCR- GLDCMLC.
                            Mr. Musengimana earned his B.A. in school psychology from the University of Rwanda in 2000 and his M.A.
                            in educational management and administration from Kampala International University (KIU) in 2011.
                            He is fluent in English and French.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
</x-layout>
