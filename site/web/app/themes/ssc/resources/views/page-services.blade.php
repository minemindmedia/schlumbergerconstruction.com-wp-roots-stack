@extends('layouts.page')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="mx-8 lg:mx-24 mt-16 lg:mt-32 border-solid border-t-2 border-primary"></div>
        @if( have_rows('services') )
            
                @while ( have_rows('services') ) 
                @php the_row(); @endphp
                    @if( get_row_layout() == 'content_section' )
                        @php
                        $title = get_sub_field('section_title');
                        $content = get_sub_field('section_content');
                        @endphp
                        <div class="md:flex">
                            <div class="w-full md:w-1/3 text-2xl lg:text-4xl font-normal lg:text-center">
                                <div class="mx-8 py-16 lg:px-16 lg:py-32">
                                    {{ $title }}
                                </div>
                            </div>
                            <div class="w-full md:w-2/3 text-xl lg:text-3xl">
                                <div class="px-8 pb-16 lg:pr-16 lg:py-32">
                                    {!! $content !!}
                                </div>
                            </div>
                        </div>
                    @elseif( get_row_layout() == 'image_divider' )
                        @php $image = get_sub_field('image_divider'); @endphp
                        <img data-src="{{ $image['sizes']['hero'] }}" alt="" class="lozad w-full">
                    @endif
                @endwhile
                @else
            
        @endif
        <div class="mx-8 lg:mx-24 mb-16 lg:mb-32 border-solid border-t-2 border-primary"></div> 
    @endwhile
@endsection
