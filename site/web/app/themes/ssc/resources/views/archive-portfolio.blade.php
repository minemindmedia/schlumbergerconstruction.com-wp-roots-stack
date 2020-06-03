@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    @if (!have_posts())
        <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif
    <div class="flex flex-wrap flex-row my-32 mx-16">
        @while (have_posts()) @php the_post() @endphp
            @include('partials.content-'.get_post_type())
        @endwhile
        <div class="relative w-full md:w-1/2">
            <div class="p-4">
                <a href="/misc" title="">       
                    <div class="absolute top-0 right-0 bottom-0 left-1/2 bg-secondary opacity-20 z-50 m-4 p-4">
                        <div class="absolute bottom-0 right-0 text-right text-white pr-8 pb-8">
                            <p class="m-0 text-white text-2.5xl">Miscellaneous Projects</p>
                            <p class="m-0 text-white text-2.5xl">Roaring Fork Valley, CO</p>
                            <img alt="Down Arrow" src="@asset('images/arrow-next.svg')" class="w-12 mt-8 float-right" />
                        </div>
                    </div>     
                    
                </a>
            </div>
        </div>
    </div>

  {!! get_the_posts_navigation() !!}
@endsection
