@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    @if (!have_posts())
        <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif
    <div class="block lg:flex flex-wrap flex-row m-4 md:m-8 xl:my-32 xl:mx-16">
        @while (have_posts()) @php the_post() @endphp
            @include('partials.content-'.get_post_type())
        @endwhile
    </div>

  {!! get_the_posts_navigation() !!}
@endsection
