@extends('layouts.page')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="mx-8 lg:mx-24 mt-16 lg:mt-32 border-solid border-t-2 border-primary"></div>
    @foreach ($our_services as $service)
        @if ($service->block_type == 'content_section')
            <div id="go" class="md:flex">
                <div class="w-full md:w-1/3 text-2xl lg:text-4xl font-normal lg:text-center">
                    <div class="mx-8 py-16 lg:px-16 lg:py-32">
                        {{ $service->title }}
                    </div>
                </div>
                <div class="w-full md:w-2/3 text-xl lg:text-3xl">
                    <div class="px-8 pb-16 lg:pr-16 lg:py-32">
                        {!! $service->content !!}
                    </div>
                </div>
            </div>
        @elseif ($service->block_type == 'content_section')
            <img data-src="{{ $service->image['sizes']['hero'] }}" alt="" class="lozad w-full">
        @endif
    @endforeach
        <div class="mx-8 lg:mx-24 mb-16 lg:mb-32 border-solid border-t-2 border-primary"></div> 
    @endwhile
@endsection
