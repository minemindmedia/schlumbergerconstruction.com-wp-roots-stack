@extends('layouts.app')

@section('content')
@include('partials.page-header')
    
    <div class="flex flex-wrap flex-row my-32 mx-16">
        @foreach($misc as $m)
        @include('partials.content-misc', $m)
        @endforeach
    </div>
    
@endsection
