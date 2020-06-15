@extends('layouts.front-page')

@section('content')

<div class="h-screen w-full">
    @if ( $gallery )
        <div class="carousel"
        data-flickity='{
            "wrapAround": true,
            "lazyLoad": 1,
            "imagesLoaded": true,
            "initialIndex": 2,
            "pageDots": false,
            "cellSelector": ".property-slide",
            "arrowShape": {
              "x0": 0,
              "x1": 80, "y1": 41,
              "x2": 90, "y2": 40,
              "x3": 12
            }
          }'
        >
            @foreach( $gallery as $image )
                <div class="carousel-cell">
                    <img 
                    data-flickity-lazyload="{{ $image['sizes']['large'] }}"
                    data-flickity-lazyload-srcset="
                        {{ $image['sizes']['hero'] }} 1280w,
                        {{ $image['sizes']['large'] }} 1024w"
                    sizes="(min-width: 1024px) 1280px, 1024px"
                    alt="{{ $image['alt'] }}"
                    class="carousel-cell-image object-cover h-screen w-full lg:h-screen portfolio-slide" />
                </div>
            @endforeach
        </div>
    @endif
</div>
<div class="flex-container m-4 lg:m-20">
    <div class="flex-item w-full lg:w-1/2">
        <div class="flex items-center h-full">
            <div class="flex-1">
                <div class="w-90 lg:mx-auto text-md">
                    {!! $intro !!}
            </div>
            </div>
        </div>
    </div>
    @foreach ($featured as $f)
        <div class="flex-item relative w-full lg:w-1/2">
            <div class="p-4">
                <a href="{{ $f->permalink }}" title="{{ $f->title }}">       
                    <div class="absolute top-0 right-0 bottom-0 left-1/2 bg-secondary opacity-20 z-50 m-4 p-4">
                        <div class="absolute bottom-0 right-0 text-right text-white pr-8 pb-8">
                            <p class="m-0 text-white">{{ $f->title }}</p>
                        </div>
                    </div>     
                    {!! $f->thumbnail !!}
                </a>
            </div>
        </div>
    @endforeach  
</div>
<div class="w-full md:w-2/3 mx-auto border-t-2 border-b-2 border-black mb-8 lg:mb-20 pb-20">
    <div class="flex items-center h-full ">
        <div class="flex-1 my-6 px-8 lg:my-20">
            <div class="carousel mx-auto  bg-transparent pb-20" data-flickity='{ "prevNextButtons": false, "adaptiveHeight": true, "wrapAround": true }'>
                @foreach($testimonials as $testimonial)
                    <div class="carousel-cell text-center">
                        <h4 class="text-2xl">{{ $testimonial->testimonial }}</h4>
                        <h5 class="text-md">{{ $testimonial->title }}<br>
                        {{ $testimonial->subtitle }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="w-full mx-auto mb-8 lg:mb-32">
    <div class="carousel bg-transparent" data-flickity='{ "prevNextButtons": false, "adaptiveHeight": true, "wrapAround": true }'>
        @foreach($awards as $award)
            <div class="carousel-cell">
                <div class="block lg:flex items-center px-8 lg:px-64">
                    <div class="w-full md:w-1/3">
                        <a href="{{ $award->link }}" target="_blank">
                            <img data-src="{{ $award->image->url }}" alt="{{ $award->image->alt }}" class="lozad h-64 mx-auto mb-8 md:ml-auto">
                        </a>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="flex-1">
                            <div class="w-full lg:w-4/5 px-4 lg:mx-auto">
                                <p class="font-medium">{{ $award->title }}</p>
                                <p>{!! $award->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>









@endsection
