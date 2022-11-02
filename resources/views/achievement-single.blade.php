<x-layout>
    <!-- Faq Section Start -->
    <div class="rs-services main-home pt-20 bg19 md-pt-50 md-pb-50">
        <div class="container">
            <div class="sec-title3 text-center mb-65 md-mb-45">
                <span class="sub-title">Achievements</span>
                <h2 class="title pb-25">
                    Achieved projects in  <br>
                    {{ $category->name }}
                </h2>
                <div class="heading-border-line"></div>
            </div>
        </div>
    </div>
    <div id="rs-faq" class="rs-faq pb-20 md-pt-10 md-pb-70">
        <div class="container">
            <div class="row y-middle">

                <div class="col-lg-12 pl-30 md-pl-15 md-pt-10 md-pb-70">
                    <div class="faq-content">
                        <div id="accordion" class="accordion">
                            @foreach($achievements as $item)
                                <div class="card">
                                    <div class="card-header ">
                                        <br>
                                        <a class="card-link sm-pb-50 @if($loop->first) @else collapsed @endif" href="#" data-bs-toggle="collapse"
                                           data-bs-target="#collapse{{ $item->id }}" aria-expanded="true">{{$item->id}}. {{ $item->project_name }}
                                        </a>
                                    </div>
                                    <div id="collapse{{ $item->id }}" class="collapse @if($loop->first)show @else @endif" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <br>
                                            <strong class="">Client:</strong> <span class="lead">{{ $item->client }}</span> <br>
                                            <strong class="">Title:</strong> <span class="lead"> {{ $item->project_name }} </span><br>
                                            <strong class="">Period:</strong>  <span class="lead">{{ $item->period }} </span><br>
                                            @if($item->location)
                                                <strong class="">Period:</strong> <span class="lead">{{ $item->location }} </span><br>
                                            @endif
                                            <br>
                                            <strong class="h4">Project Description:</strong> <p class="lead">
                                                {!! $item->description !!}
                                                <br>
                                                <img src="{{ asset('assets/images/achievement/'.$item->image) }}" class="text-left"  alt="{{ $item->name }}">
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('links')
        @foreach($categories as $category)
            <li><a href="{{ route('achievement.show', [$category->slug]) }}">{{ $category->name }}</a></li>
        @endforeach
    @stop
    <!-- Faq Section End -->
</x-layout>
