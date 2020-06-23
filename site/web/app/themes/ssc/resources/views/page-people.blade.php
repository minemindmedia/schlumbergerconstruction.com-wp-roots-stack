@extends('layouts.page')

@section('content')
@include('partials.page-header')

    @foreach ($our_people as $people)

        @if ($people->block_type == 'content_section_23_-_13')
            <div id="go" class="block lg:flex flex-wrap m-8 md:m-12 xl:mx-20 xl:my-32">
                <div class="flex-1 lg:order-last w-full lg:w-1/3">
                    <div class="lg:pl-12">
                        <img data-src="{{ $people->image['sizes']['hero'] }}" alt="" class="lozad w-full">
                    </div>
                </div>
                <div class="flex-none w-full lg:w-2/3 py-8 mb-8 lg:mb-0 lg:border-solid lg:border-t-2 lg:border-b-2 lg:border-primary">
                    <div class="flex items-center h-full">
                        <div class="flex-1 text-center md:px-8">
                            <h5 class="mb-8 lg:mb-8 xl:mb-16">{{ $people->title }}</h5>
                            <p>{!! $people->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($people->block_type == 'content_section_13_-_23')
            <div class="block lg:flex flex-wrap m-8 md:m-12 xl:mx-20 xl:my-32">
                <div class="flex-1 w-full lg:w-1/3">
                    <div class="lg:pr-12">
                        <img data-src="{{ $people->image['sizes']['hero'] }}" alt="" class="lozad w-full">
                    </div>
                </div>
                <div class="flex-none w-full lg:w-2/3 py-8 mb-8 lg:mb-0 lg:border-solid lg:border-t-2 lg:border-b-2 lg:border-primary">
                    <div class="flex items-center h-full">
                        <div class="flex-1 text-center md:px-8">
                            
                            <h5 class="mb-8 lg:mb-8 xl:mb-16">{{ $people->title }}</h5>
                            <p>{!! $people->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($people->block_type == 'image_divider')
            <img data-src="{{ $people->image['sizes']['hero'] }}" alt="" class="lozad w-full my-12 xl:my-32">
        @endif

    @endforeach
 
    @if($our_team)
        <div class="block lg:flex mx-8 max-w-100 mx-12 xl:max-w-900px xl:mx-auto mb-12 xl:mb-32">
            @foreach($our_team as $t)
                <div class="w-full lg:w-1/3">
                    <div class="lg:pl-24 xxl:pl-12 text-center lg:text-left">
                        <h3 class=" mb-7 mt-12 lg:mt-0 font-medium">{!! $t['title'] !!}</h3>
                        <p class="leading-normal">{!! $t['list'] !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
        
@endsection
