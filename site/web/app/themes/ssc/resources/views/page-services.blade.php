@extends('layouts.page')

@section('content')
@include('partials.page-header')

<div class="border-solid border-t-2 border-primary mt-8 md:mt-12 xl:mt-32 mx-8 md:mx-12 xl:mx-24"></div>
   
@foreach ($our_services as $service)
    @if ($service->block_type == 'content_section')
        <div class="mx-8 md:mx-12 xl:mx-24">
            <div id="go" class="md:flex">
                <div class="w-full md:w-1/3 font-normal lg:text-center">
                    <h3 class="pt-8 md:py-12 xl:px-16 xl:py-32">
                        {{ $service->title }}
                    </h3>
                </div>
                <div class="w-full md:w-2/3">
                    <div class="pb-12 md:py-12 xl:pb-32 xl:pr-16 xl:py-32">
                        {!! $service->content !!}
                    </div>
                </div>
            </div>
        </div>
    @elseif ($service->block_type == 'image_divider')
        <img data-src="{{ $service->image['sizes']['hero'] }}" alt="{{ $service->image['alt'] }}" class="lozad w-full">
    @endif
@endforeach

<div class="border-solid border-b-2 border-primary mb-8 md:mb-12 xl:mb-32 mx-8 md:x-12 xl:mx-24"></div>

@endsection
