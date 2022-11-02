<x-layout>
    @section('links')
        @foreach($categories as $category)
            <li><a href="{{ route('achievement.show', [$category->slug]) }}">{{ $category->name }}</a></li>
        @endforeach
    @stop
    <div class="rs-services main-home pb-10 pt-20 bg19 md-pt-50 md-pb-50">
        <div class="container">
            <div class="sec-title3 text-center mb-65 md-mb-45">
                <span class="sub-title">Achievements</span>
                <h2 class="title pb-15">
                    The Educational Consulting Success provided <br>advisory and consultancy services in:
                </h2>
                <div class="heading-border-line"></div>
            </div>
        </div>
    </div>
        <!-- Process Section Start -->
        <div class="rs-process style2 gray-bg2 pt-20 pb-100 md-pt-70 md-pb-70">
            <div class="container custom">
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-lg-4 col-md-6 mb-30">
                        <div class="rs-addon-number">
                            <div class="number-part">
                                <div class="number-area"> <span class="number-prefix"> {{ $category->id }}. </span></div>
                                <div class="number-title">
                                    <a href="{{ route('achievement.show', $category->slug) }}"><h3 class="title">{{ $category->name }}</h3></a>
                                </div>
                                <div class="number-txt mine">
                                    {{$category->description}}
{{--                                    <div class="loac-text">--}}

{{--                                    </div>--}}
                                </div>
                                <div class="btn-part">
                                    <a class="readon apply" href="{{ route('achievement.show', $category->slug) }}">View all projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Process Section End -->

</x-layout>
