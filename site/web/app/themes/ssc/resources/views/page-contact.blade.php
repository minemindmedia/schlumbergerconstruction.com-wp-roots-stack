@extends('layouts.app')

@section('content')
<div class="bg-black h-screen w-full">    
    @if ( $page_header->intro )
        <div class="absolute right-0 w-full lg:w-menu h-screen bg-primary pt-48">
            <div class="p-8 lg:px-16 py-0">
                <p class="text-white text-lg lg:text-2xl leading-normal">{{ $page_header->intro }}</p>
                @php echo do_shortcode('[contact-form-7 id="67" title="Contact Form"]') @endphp
                <div class="contact text-right mt-20">
                    <p class="text-white mb-4 text-3xl">{{ get_theme_mod( 'ssc_phone' ) }}</p>
                    <p class="text-white text-2.5xl">{{ get_theme_mod( 'ssc_address' ) }}<br>
                    {{ get_theme_mod( 'ssc_city' ) }}, {{ get_theme_mod( 'ssc_state' ) }} {{ get_theme_mod( 'ssc_zip' ) }}</p>
                </div>
            </div>
        </div>
    @endif
    <img class="lozad object-cover h-screen w-full" data-src="{{ $page_header->hero['sizes']['hero'] }}" alt="{{ $page_header->hero['alt'] }}" />
</div>

@endsection
