@extends('layouts.page')

@section('content')
@include('partials.page-header')
        
    @foreach ($our_profile as $profile)
        @if ($profile->block_type == 'content_section_23_-_13')
            <div id="go" class="block lg:flex flex-wrap m-12 xl:mx-20 xl:my-32">
                <div class="flex-1 lg:order-last w-full lg:w-1/3">
                    <div class="lg:pl-12">
                        <img data-src="{{ $profile->image['sizes']['hero'] }}" alt="{{ $profile->image['alt'] }}" class="lozad w-full">
                    </div>
                </div>
                <div class="flex-none w-full lg:w-2/3 py-8 lg:py-0 mb-8 lg:mb-0 lg:border-solid lg:border-t-2 lg:border-b-2 lg:border-primary">
                    <div class="flex items-center h-full">
                        <div class="flex-1 text-center md:p-16">
                            <h5 class="mb-12">{{ $profile->title }}</h5>
                            <p>{!! $profile->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($profile->block_type == 'content_section_13_-_23')
            <div class="block lg:flex flex-wrap m-12 xl:mx-20 xl:my-32">
                <div class="flex-1 w-full lg:w-1/3">
                    <div class="lg:pr-12">
                        <img data-src="{{ $profile->image['sizes']['hero'] }}" alt="{{ $profile->image['alt'] }}" class="lozad w-full">
                    </div>
                </div>
                <div class="flex-none w-full lg:w-2/3 py-8 lg:py-0 mb-8 lg:mb-0 lg:border-solid lg:border-t-2 lg:border-b-2 lg:border-primary">
                    <div class="flex items-center h-full">
                        <div class="flex-1 text-center md:p-16">
                            <h5 class="mb-12">{{ $profile->title }}</h5>
                            <p>{!! $profile->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($profile->block_type == 'image_divider')
            <img data-src="{{ $profile->image['sizes']['hero'] }}" alt="{{ $profile->image['alt'] }}" class="lozad w-full my-12 xl:my-24">
        @endif
    @endforeach

    <h5 class="w-full lg:max-w-5xl lg:mx-auto mb-12 xl:mb-24 text-center leading-normal">
       {{ $relationship_intro->intro }}
    </h5> 

    @if($our_relationships)
        <div class="block lg:flex mx-8 mb-8 max-w-100 lg:mx-auto xl:mb-32">
            @foreach($our_relationships as $r)
                <div class="w-full lg:w-1/3">
                    <h3 class="mb-6 mt-12 lg:mt-0 font-medium">{!! $r['title'] !!}</h3>
                    <h2 class="leading-normal">{!! $r['list'] !!}</h2>
                </div>
            @endforeach
        </div>
    @endif
        
@endsection
