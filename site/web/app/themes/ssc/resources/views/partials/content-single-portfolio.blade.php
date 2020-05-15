@if ( $portfolio->slider )
    <div class="relative">
        <div class="portfolio-carousel bg-black">
            @foreach( $portfolio->slider as $image )
            <img data-lazy="{{ $image['sizes']['hero'] }}" alt="{{ $image['alt'] }}"/>
            @endforeach
            </div>
        </div>
    </div>
@endif
<div class="flex flex-wrap m-20">
    <div class="flex-none w-full md:w-1/2 mb-4 md:mb-0 border-solid border-t-2 border-b-2 border-black">
        <div class="flex items-center h-full">
            <div class="flex-1 text-center">
                <h3>{{ $portfolio->name }}</h3>
                <h4 class="uppercase">{{ $portfolio->location }}</h4>
            </div>
        </div>
    </div>
    <div class="flex-1 w-full md:w-1/2">
        <div class="md:px-16">
            <p>{{ $portfolio->description }}</p>
            @if ( $portfolio->awards )
            <p class="font-bold">Awards:</p>
            {!! $portfolio->awards !!}
            @endif
        </div>
    </div>
</div>
@if ( $portfolio->photos )
    <div class="flex flex-wrap m-16">
        @foreach( $portfolio->photos as $image )
            <div class="w-full md:w-1/2 pb-4 md:p-4">
                <img class="lozad" data-src="{{ $image['sizes']['hero'] }}" alt="{{ $image['alt'] }}">
            </div>
        @endforeach
    </div>
@endif