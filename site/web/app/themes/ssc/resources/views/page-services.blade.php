@extends('layouts.page')

@section('content')
@include('partials.page-header')

<div class="border-solid border-t-2 border-primary mt-8 lg:mt-16 lg:mt-32 mx-8 lg:mx-24"></div>
   
@foreach ($our_services as $service)
    @if ($service->block_type == 'content_section')
        <div class="mx-8 lg:mx-24">
            <div id="go" class="md:flex">
                <div class="w-full md:w-1/3 font-normal lg:text-center">
                    <h3 class="py-8 lg:py-16 lg:px-16 lg:py-32">
                        {{ $service->title }}
                    </h3>
                </div>
                <div class="w-full md:w-2/3">
                    <div class="pb-8 md:py-8 lg:pb-32 lg:pr-16 lg:py-32">
                        {!! $service->content !!}
                    </div>
                </div>
            </div>
        </div>
    @elseif ($service->block_type == 'image_divider')
        <img data-src="{{ $service->image['sizes']['hero'] }}" alt="{{ $service->image['alt'] }}" class="lozad w-full">
    @endif
@endforeach

<div class="border-solid border-b-2 border-primary mb-8 lg:mb-16 lg:mb-32 mx-8 lg:mx-24"></div>

@endsection
