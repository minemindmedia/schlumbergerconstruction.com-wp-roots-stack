@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')

    <div class="flex flex-wrap flex-row my-32 mx-16">
        @foreach($misc as $m)
           @include('partials.content-misc', $m)
        @endforeach
    </div>


  @endwhile
@endsection
