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
                    class="absolute right-0 w-screen md:w-1/2 lg:w-menu h-screen bg-primary text-white list-none text-right pt-48"
                    style="z-index: -100"
                >
                    {!! wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'items_wrap' => '%3$s',
                        'class' => 'text-white text-lg'
                    ]) !!}

                    <div class="text-right" x-data="{ 'isContactOpen': false }">
                        <a
                        style="z-index: 99999999999999"
                        @click="isContactOpen = true"
                        @click="isHamburgerOpen = false"
                        >
                        Contact
                    </a>
                        <div
                            x-show="isContactOpen"
                            x-cloak
                            @click.away="isContactOpen = false"
                            class="absolute top-0 right-0 w-screen sm:w-menu  h-screen bg-primary text-white list-none text-right pt-32"
                            style="z-index: 9999"
                        >
                            <div class="p-8 lg:px-16 py-0">
                                @php echo do_shortcode('[contact-form-7 id="67" title="Contact Form"]') @endphp
                                
                                <div class="contact text-right">
                                    <p class="text-white mb-4 text-3xl">{{ get_theme_mod( 'ssc_phone' ) }}</p>
                                    <p class="text-white text-2.5xl">{{ get_theme_mod( 'ssc_address' ) }}<br>
                                    {{ get_theme_mod( 'ssc_city' ) }}, {{ get_theme_mod( 'ssc_state' ) }} {{ get_theme_mod( 'ssc_zip' ) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </ul>
            </div>
        </div>


       

        
        <a class="brand" href="{{ home_url('/') }}">
            <img data-src="{{ $image[0] }}" class="lozad float-left lg:float-right h-20 md:h-52 pt-8 pl-8 md:p-6 lg:mr-8 object-left lg:object-right object-fill">
        </a>
    </div>   
</header>


