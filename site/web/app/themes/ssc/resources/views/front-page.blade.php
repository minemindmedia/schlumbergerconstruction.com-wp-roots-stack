@extends('layouts.front-page')

@section('content')

<div class="bg-black h-screen w-full">
    @if ( $gallery )
        <div class="carousel">
            @foreach( $gallery as $image )
                <div class="carousel-cell">
                    <img class="carousel-cell-image object-cover h-screen w-full" data-flickity-lazyload="{{ $image['sizes']['hero'] }}" alt="tulip" />
                </div>
            @endforeach
        </div>
    @endif
</div>
<div class="flex flex-wrap m-20">
    @foreach ($featured as $f)
        <div class="relative w-full md:w-1/2">
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
    <div class="w-full md:w-1/2 order-first">
        <div class="flex items-center h-full">
            <div class="flex-1">
                <div class="w-4/5 mx-auto">
                    {!! $intro !!}
            </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full md:w-2/3 mx-auto border-t-2 border-b-2 border-black mb-20 pb-20">
    <div class="flex items-center h-full ">
        <div class="flex-1 my-20">
            <div class="carousel mx-auto  bg-transparent pb-20" data-flickity='{ "prevNextButtons": false, "adaptiveHeight": true, "wrapAround": true }'>
                @foreach($testimonials as $testimonial)
                    <div class="carousel-cell text-center">
                        <p>{{ $testimonial->testimonial }}</p>
                        <p>{{ $testimonial->title }}</p>
                        <p>{{ $testimonial->subtitle }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="w-full md:w-2/3 mx-auto mb-32">
    <div class="carousel bg-transparent" data-flickity='{ "prevNextButtons": false, "adaptiveHeight": true, "wrapAround": true, "autoPlay": true }'>
        @foreach($awards as $award)
            <div class="carousel-cell">
                <div class="flex items-center px-64">
                    <div class="w-1/3">
                        <a href="{{ $award->link }}" target="_blank">
                            <img data-src="{{ $award->image->url }}" alt="{{ $award->image->alt }}" class="lozad h-64">
                        </a>
                    </div>
                    <div class="w-2/3">
                        <div class="flex-1">
                            <div class="w-4/5 mx-auto">
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
