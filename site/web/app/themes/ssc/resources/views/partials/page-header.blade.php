<div class="w-full">    
    @if ( $page_header->intro )
        <div class="absolute right-0 w-full md:w-1/2 lg:w-menu hero bg-primary pt-48">
            <div class="absolute bottom-0 p-8 lg:p-16 pb-16">
                @if (is_singular())
                <h1 class="text-white text-2xl lg:text-4xl mb-10">{!! App::title() !!}</h1>
                @elseif (is_archive())
                <h1 class="text-white text-2xl lg:text-4xl mb-10">{{ post_type_archive_title( '', false ) }}</h1>
                @endif
                <p class="text-white text-lg lg:text-2xl leading-normal">{{ $page_header->intro }}</p>
                <a href="#go">
                    <img alt="Down Arrow" src="@asset('images/down-arrow.svg')" class="w-2 mt-16" />
                </a>
            </div>
        </div>
    @endif
    <img class="lozad object-cover hero w-full" data-src="{{ $page_header->hero['sizes']['hero'] }}" alt="{{ $page_header->hero['alt'] }}" />
</div>
