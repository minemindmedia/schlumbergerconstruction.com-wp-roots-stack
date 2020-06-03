@extends('layouts.page')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

    @foreach ($our_people as $people)

        @if ($people->block_type == 'content_section_23_-_13')
            <div id="go" class="block lg:flex flex-wrap m-8 lg:mx-20 lg:my-32">
                <div class="flex-1 lg:order-last w-full lg:w-1/3">
                    <div class="lg:pl-12">
                        <img data-src="{{ $people->image['sizes']['hero'] }}" alt="" class="lozad w-full">
                    </div>
                </div>
                <div class="flex-none w-full lg:w-2/3 py-8 lg:py-0 mb-8 lg:mb-0 lg:border-solid lg:border-t-2 lg:border-b-2 lg:border-primary">
                    <div class="flex items-center h-full">
                        <div class="flex-1 text-center px-8">
                            
                            <h3 class="text-2xl lg:text-4xl mb-8 lg:mb-16">{{ $people->title }}</h3>
                            <div class="text-lg lg:text-2xl">{!! $people->content !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($people->block_type == 'content_section_13_-_23')
            <div class="block lg:flex flex-wrap m-8 lg:mx-20 lg:my-32">
                <div class="flex-1 w-full lg:w-1/3">
                    <div class="lg:pr-12">
                        <img data-src="{{ $people->image['sizes']['hero'] }}" alt="" class="lozad w-full">
                    </div>
                </div>
                <div class="flex-none w-full lg:w-2/3 py-8 lg:py-0 mb-8 lg:mb-0 lg:border-solid lg:border-t-2 lg:border-b-2 lg:border-primary">
                    <div class="flex items-center h-full">
                        <div class="flex-1 text-center px-8">
                            
                            <h3 class="text-2xl lg:text-4xl mb-8 lg:mb-16">{{ $people->title }}</h3>
                            <div class="text-lg lg:text-2xl">{!! $people->content !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($people->block_type == 'image_divider')
            <img data-src="{{ $people->image['sizes']['hero'] }}" alt="" class="lozad w-full my-12 lg:my-32">
        @endif

    @endforeach
 
    @if($our_team)
        <div class="block lg:flex mx-8 lg:mx-64 mb-8 lg:mb-32">
            @foreach($our_team as $t)
                <div class="w-full lg:w-1/3">
                    <div class="w-1/2 mx-auto text-center lg:text-left">
                        <h3 class="text-lg lg:text-3xl mb-12 mt-12 lg:mt-0 font-medium">{!! $t['title'] !!}</h3>
                        <div class="text-lg lg:text-2xl leading-normal">{!! $t['list'] !!}</div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
        
    @endwhile
@endsection
