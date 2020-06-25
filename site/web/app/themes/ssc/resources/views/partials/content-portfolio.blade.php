<div class="relative w-full lg:w-1/2">
    <div class="p-4">
        <a href="{{ get_permalink() }}" title="{{ get_the_title() }}">       
            <div class="absolute top-0 right-0 bottom-0 left-1/2 bg-secondary opacity-20 z-50 m-4">
                <div class="absolute bottom-0 right-0 text-right text-white pr-8 pb-12">
                    <h6 class="m-0 text-white">{{ get_the_title() }}</h6>
                    <h6 class="m-0 text-white">{{ ArchivePortfolio::portfolioDetails(get_the_ID())->location }}</h6>
                    @if( get_field('miscellaneous_subtitle') )<h6 class="m-0 text-white">@php the_field( "miscellaneous_subtitle" ) @endphp</h6>@endif
                    <img alt="Down Arrow" src="@asset('images/arrow-next.svg')" class="w-12 mt-8 float-right" />
                </div>
            </div>     
            <img data-src="{!! the_post_thumbnail_url() !!}" class="lozad w-full">
        </a>
    </div>
</div>





