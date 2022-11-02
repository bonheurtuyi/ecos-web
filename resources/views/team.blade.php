<x-layout>
    @section('links')
        @foreach($categories as $category)
            <li><a href="{{ route('achievement.show', [$category->slug]) }}">{{ $category->name }}</a></li>
        @endforeach
    @stop
    <div class="rs-services main-home pt-20  md-pt-50 md-pb-50">
        <div class="container">
            <div class="sec-title3 text-center mb-65 md-mb-45">
                <span class="sub-title">Team</span>
                <h2 class="title pb-15">
                    OUR TEAM OF EXPERTS <br>
                    -Together we perform smarter-
                </h2>
                <div class="heading-border-line"></div>
            </div>
        </div>
    </div>
    <!-- Team Start -->
    <div id="rs-team" class="rs-team style2 pt-50 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                @foreach($teams as $team)
                   <div class="col-lg-4 col-md-6 mb-30">
                    <div class="team-item">
                        <div class="team-img">
                            <a href="{{ route('team.show', $team->id) }}"><img src="{{ asset('assets/images/team/' . $team->image) }}" alt="{{ $team->image }}"></a>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <div class="name">
                                    <a href="{{ route('team.show', $team->id) }}">{{ $team->name }}</a>
                                </div>
                                <span class="post">{{ $team->position}}</span>
                            </div>
{{--                            <ul class="social-icon">--}}
{{--                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team end -->
</x-layout>
