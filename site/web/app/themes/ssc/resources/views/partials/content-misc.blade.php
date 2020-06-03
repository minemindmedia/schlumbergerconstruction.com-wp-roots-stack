<div class="relative w-full md:w-1/2">
    <div class="p-4 miscellaneous">
        <img src="{{ $photo }}" class="w-full" alt="">
        <div class="overlay absolute top-0 right-0 bottom-0 left-1/2 bg-secondary opacity-20 z-50 m-4 p-4">
            <div class="absolute bottom-0 right-0 text-right text-white pr-8 pb-8">
                <p class="m-0 text-white text-2.5xl">{{ $name }}</p>
                <p class="m-0 text-white text-2.5xl">{{ $location }}</p>
                <img alt="Down Arrow" src="@asset('images/arrow-next.svg')" class="w-12 mt-8 float-right" />
            </div>
        </div>     
    </div>
</div>










