<header class="absolute h-52 w-full bg-primary z-50">
    @php 
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    @endphp
    <div class="h-52 w-full md:pr-6">
        <div
            x-data="{ 'isDialogOpen': false }"
            @keydown.escape="isDialogOpen = false"
        >
            <div class="text-right" x-data="{ 'isHamburgerOpen': false }">
                <button
                type="button"
                title="Open the actions menu"
                class="hamburger float-right h-52 p-20 object-right object-fill mr-6"
                style="z-index: 99999999999999"
                @click="isHamburgerOpen = true"
                :class="{ 'menu-close': isHamburgerOpen }"
                >
                </button>
                <ul
                    x-show="isHamburgerOpen"
                    x-cloak
                    @click.away="isHamburgerOpen = false"
                    class="absolute right-0 w-menu h-screen bg-primary text-white list-none text-right pt-48"
                    style="z-index: -100"
                >
                    {!! wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'items_wrap' => '%3$s',
                        'class' => 'text-white text-lg'
                    ]) !!}
                </ul>
            </div>
        </div>
        <a class="brand" href="{{ home_url('/') }}">
            <img data-src="{{ $image[0] }}" class="lozad float-left lg:float-right h-20 md:h-52 pt-8 pl-8 md:p-6 lg:mr-8 object-left lg:object-right object-fill">
        </a>
    </div>   
</header>


