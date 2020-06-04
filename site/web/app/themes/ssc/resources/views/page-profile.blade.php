@extends('layouts.page')

@section('content')
@include('partials.page-header')
        
    @foreach ($our_profile as $profile)
        @if ($profile->block_type == 'content_section_23_-_13')
            <div id="go" class="block lg:flex flex-wrap m-8 lg:mx-20 lg:my-32">
                <div class="flex-1 lg:order-last w-full lg:w-1/3">
                    <div class="lg:pl-12">
                        <img data-src="{{ $profile->image['sizes']['hero'] }}" alt="{{ $profile->image['alt'] }}" class="lozad w-full">
                    </div>
                </div>
                <div class="flex-none w-full lg:w-2/3 py-8 lg:py-0 mb-8 lg:mb-0 lg:border-solid lg:border-t-2 lg:border-b-2 lg:border-primary">
                    <div class="flex items-center h-full">
                        <div class="flex-1 text-center px-8">
                            
                            <h3 class="text-2xl lg:text-4xl mb-8 lg:mb-16">{{ $profile->title }}</h3>
                            <div class="text-lg lg:text-2xl">{!! $profile->content !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($profile->block_type == 'content_section_13_-_23')
            <div class="block lg:flex flex-wrap m-8 lg:mx-20 lg:my-32">
                <div class="flex-1 w-full lg:w-1/3">
                    <div class="lg:pr-12">
                        <img data-src="{{ $profile->image['sizes']['hero'] }}" alt="{{ $profile->image['alt'] }}" class="lozad w-full">
                    </div>
                </div>
                <div class="flex-none w-full lg:w-2/3 py-8 lg:py-0 mb-8 lg:mb-0 lg:border-solid lg:border-t-2 lg:border-b-2 lg:border-primary">
                    <div class="flex items-center h-full">
                        <div class="flex-1 text-center px-8">
                            
                            <h3 class="text-2xl lg:text-4xl mb-8 lg:mb-16">{{ $profile->title }}</h3>
                            <div class="text-lg lg:text-2xl">{!! $profile->content !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($profile->block_type == 'image_divider')
            <img data-src="{{ $profile->image['sizes']['hero'] }}" alt="{{ $profile->image['alt'] }}" class="lozad w-full my-12 lg:my-32">
        @endif
    @endforeach

    <h3 class="w-full lg:w-3/5 lg:mx-auto mb-12 lg:mb-32  text-center text-2xl lg:text-4xl">
       {!! $relationship_intro->intro !!}
    </h3> 

    @if($our_relationships)
        <div class="block lg:flex mx-8 lg:mx-32 mb-8 lg:mb-32">
            @foreach($our_relationships as $r)
                <div class="w-full lg:w-1/3">
                    <h3 class="text-lg lg:text-3xl mb-12 mt-12 lg:mt-0 font-medium">{!! $r['title'] !!}</h3>
                    <div class="text-lg lg:text-2xl leading-normal">{!! $r['list'] !!}</div>
                </div>
            @endforeach
        </div>
    @endif
        
@endsection
