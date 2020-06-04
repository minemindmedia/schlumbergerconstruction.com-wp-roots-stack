@extends('layouts.page')

@section('content')
    @while(have_posts()) @php the_post() @endphp
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


        @if( have_rows('relationships') )
            @while( have_rows('relationships') )
            @php the_row() @endphp
                <h3 class="w-full lg:w-3/5 lg:mx-auto mb-12 lg:mb-32  text-center text-2xl lg:text-4xl"><?php the_sub_field('intro'); ?></h3> 
                <div class="block lg:flex mx-8 lg:mx-32 mb-8 lg:mb-32">
                    <div class="w-full lg:w-1/3">
                        @if( have_rows('architects') )
                            @while( have_rows('architects') )
                            @php
                            the_row();
                            $title = get_sub_field('title');
                            $list = get_sub_field('list');
                            @endphp
                                <h3 class="text-lg lg:text-3xl mb-12 mt-12 lg:mt-0 font-medium">{!! $title !!}</h3>
                                <div class="text-lg lg:text-2xl leading-normal">{!! $list !!}</div>
                            @endwhile
                        @endif
                    </div>
                    <div class="w-full lg:w-1/3">
                        @if( have_rows('interior_designers') )
                            @while( have_rows('interior_designers') )
                            @php
                            the_row();
                            $title = get_sub_field('title');
                            $list = get_sub_field('list');
                            @endphp
                                <h3 class="text-lg lg:text-3xl mb-12 mt-12 lg:mt-0 font-medium">{!! $title !!}</h3>
                                <div class="text-lg lg:text-2xl leading-normal">{!! $list !!}</div>
                            @endwhile
                        @endif
                    </div>
                    <div class="w-full lg:w-1/3">
                        @if( have_rows('landscape_architects') )
                            @while( have_rows('landscape_architects') )
                            @php
                            the_row();
                            $title = get_sub_field('title');
                            $list = get_sub_field('list');
                            @endphp
                                <h3 class="text-lg lg:text-3xl mb-12 mt-12 lg:mt-0 font-medium">{!! $title !!}</h3>
                                <div class="text-lg lg:text-2xl leading-normal">{!! $list !!}</div>
                            @endwhile
                        @endif
                    </div>
                </div>	
            @endwhile
        @endif
    @endwhile
@endsection
