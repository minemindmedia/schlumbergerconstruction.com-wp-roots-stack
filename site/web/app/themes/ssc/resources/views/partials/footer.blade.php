<footer class="bg-primary block p-8 lg:p-24">
    <div class="block lg:flex">
        <div class="w-full lg:w-2/3">
            <div class="block lg:flex">
                <div class="w-full lg:w-2/3">
                    <p class="leading-normal text-xl lg:text-3xl text-white">Let us know how we can assist in your next project!</p>
                    @php echo do_shortcode('[contact-form-7 id="67" title="Contact Form"]') @endphp
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/3 contact">
            <p class="text-xl lg:text-3xl text-white">
            {{ get_theme_mod( 'ssc_title' ) }}<br>
            {{ get_theme_mod( 'ssc_subtitle' ) }}
            </p>
            <p class="text-xl lg:text-3xl text-white">{{ get_theme_mod( 'ssc_phone' ) }}</p>
            <p class="text-2.5xl text-white">
            {{ get_theme_mod( 'ssc_address' ) }}<br>
            {{ get_theme_mod( 'ssc_city' ) }}, {{ get_theme_mod( 'ssc_state' ) }} {{ get_theme_mod( 'ssc_zip' ) }}
            </p>
            <p class="copyright text-2.5xl text-white">© Schlumberger Scherer Construction</p>
        </div>
    </div>
</footer>
