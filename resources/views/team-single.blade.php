<x-layout>
    @section('links')
        @foreach($categories as $category)
            <li><a href="{{ route('achievement.show', [$category->slug]) }}">{{ $category->name }}</a></li>
        @endforeach
    @stop
    <div class="rs-services main-home pt-20  md-pt-50 md-pb-50">
        <div class="container">
            <div class="sec-title3 text-center mb-65 md-mb-45">
                <span class="sub-title">Team-Member</span>
                <h2 class="title pb-15">
                    About <br>
                    "{{ $member->name }}"
                </h2>
                <div class="heading-border-line"></div>
            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="rs-team-Single pt-20 pb-100 md-pt-80 md-pb-60">
        <div class="container custom">
            <div class="btm-info-team">
                <div class="row align-items-center">
                    <div class="col-lg-5 md-mb-50">
                        <div class="images-part">
                            <img src="{{ asset('assets/images/team/'. $member->image) }}" alt="images">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="con-info text-justify">
                            <span class="designation-info">{{ $member->position }}</span>
                            <h2 class="title">{{ $member->name }}</h2>
                            <div class="short-desc text-justify">
                                {!! $member->description !!}
                                <br><br>
                                {!! $member->biography !!}
                            </div>
                            <div class="ps-informations">
                                <ul class="personal-info">
                                    <li>
                                        <span><i class="flaticon-email"></i></span>
                                        <a href="mailto:{{ $member->email }}">{{ $member->email }}</a>
                                    </li>
                                    <li>
                                        <span><i class="flaticon-call"></i></span>{{ $member->phone }}
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
        </div>
    </div>
    <!-- Team End -->
</x-layout>
