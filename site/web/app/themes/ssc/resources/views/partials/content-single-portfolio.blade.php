@if ( $portfolio->slider )
    <div class="relative md:pt-0">
        <div class="portfolio-carousel"
            data-flickity='{
            "wrapAround": true,
            "lazyLoad": 1,
            "imagesLoaded": true,
            "pageDots": false,
            "cellSelector": ".property-slide",
            "autoPlay": true,
            "pauseAutoPlayOnHover": false,
            "arrowShape": {
                "x0": 0,
                "x1": 80, "y1": 41,
                "x2": 90, "y2": 40,
                "x3": 12
            }
            }'
        >
            @foreach( $portfolio->slider as $image )
            <img
            data-flickity-lazyload="{{ $image['sizes']['large'] }}"
            data-flickity-lazyload-srcset="
            {{ $image['sizes']['hero'] }} 1280w,
            {{ $image['sizes']['large'] }} 1024w"
            sizes="(min-width: 1024px) 1280px, 1024px"
            alt="{{ $image['alt'] }}" class="property-slide lg:h-screen"/>
            @endforeach
            </div>
        </div>
    </div>
@endif

<div class="flex flex-wrap m-8 md:m-12 xxl:mx-20 xxl:my-24">
    <div class="w-full md:w-1/2 pb-4 md:p-4">
        <div class="flex items-center h-full border-solid border-t-2 border-b-2 border-primary">
            <div class="flex-1 text-center py-4 lg:p-0">
                <h5>{{ $portfolio->name }}</h5>
                <p class="uppercase">{{ $portfolio->location }}</p>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/2 pb-4 md:p-4">
        <div class="md:px-8 xl:px-16 mt-8 md:mt-0">
            <p class="mb-12">{{ $portfolio->description }}</p>
            @if ( $portfolio->awards )
            <p class="font-bold">Awards:</p>
            <p>{!! $portfolio->awards !!}</p>
            @endif
        </div>
    </div>
</div>


@if ( $portfolio->photos )
    <div class="flex flex-wrap m-8 md:m-12 xxl:mx-20 xxl:mb-32 mb-">
        @foreach( $portfolio->photos as $image )
            <div class="single-photos w-full md:w-1/2 pb-4 md:p-4">
                <img class="lozad w-full" data-src="{{ $image['sizes']['hero'] }}" alt="{{ $image['alt'] }}">
            </div>
        @endforeach
    </div>
@endif