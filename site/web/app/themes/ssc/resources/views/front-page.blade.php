@extends('layouts.front-page')

@section('content')

<div class="bg-black h-screen w-full" style="background: green;">
    

    @if ( $gallery )

    <div class="carousel">
        @foreach( $gallery as $image )
            <div class="carousel-cell">
                <img class="carousel-cell-image object-cover h-screen w-full" data-flickity-lazyload="{{ $image['sizes']['hero'] }}" alt="tulip" />
            </div>
        @endforeach
    </div>

@endif

<div class="flex bg-gray-200">
    <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">
      Short
    </div>
    <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">
      Medium length
    </div>
</div>


</div>

@endsection
