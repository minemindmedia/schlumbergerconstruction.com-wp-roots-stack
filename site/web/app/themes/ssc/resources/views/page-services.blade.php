@extends('layouts.page')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
        @if( have_rows('services') )
            @while ( have_rows('services') ) 
            @php the_row(); @endphp
                @if( get_row_layout() == 'content_section' )
                    @php
                    $title = get_sub_field('section_title');
                    $content = get_sub_field('section_content');
                    @endphp
                    <div class="md:flex">
                        <div class="w-full md:w-1/3 text-4xl font-normal text-center">
                            <div class="px-16 py-32">
                                {{ $title }}
                            </div>
                        </div>
                        <div class="w-full md:w-2/3 text-3xl">
                            <div class="pr-16 py-32">
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
    @endwhile
@endsection
