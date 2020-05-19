<div class="bg-black h-screen w-full">    
    <div class="absolute right-0 w-menu h-screen bg-primary pt-48">
        <div class="absolute bottom-0 p-16 pb-16">
            <h1 class="text-white text-4xl mb-10">{!! App::title() !!}</h1>
            <p class="text-white text-2xl leading-normal">{{ $page_header->intro }}</p>
            <img alt="Down Arrow" src="@asset('images/down-arrow.svg')" class="w-2 mt-16" />
        </div>
    </div>
    <img class="lozad object-cover h-screen w-full" data-src="{{ $page_header->hero['sizes']['hero'] }}" alt="tulip" />
</div>
