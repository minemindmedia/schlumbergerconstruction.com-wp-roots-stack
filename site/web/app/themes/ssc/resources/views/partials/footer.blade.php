<footer class="bg-primary block p-8 lg:p-24">
    <div class="block lg:flex">
        <div class="w-full lg:w-2/3">
            <div class="block lg:flex">
                <div class="w-full lg:w-2/3">
                    <h3 class="leading-normal text-white mb-8">Let us know how we can assist in your next project!</h3>
                    @php echo do_shortcode('[contact-form-7 id="67" title="Contact Form"]') @endphp
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/3 contact text-right">
            <h3 class="text-white mb-4">
            {{ get_theme_mod( 'ssc_title' ) }}<br>
            {{ get_theme_mod( 'ssc_subtitle' ) }}
            </h3>
            <a href="tel:{{ get_theme_mod( 'ssc_phone' ) }}" class="text-xl lg:text-3xl text-white">{{ get_theme_mod( 'ssc_phone' ) }}</a>
            <h3 class="text-white mt-4 mb-16">
            {{ get_theme_mod( 'ssc_address' ) }}<br>
            {{ get_theme_mod( 'ssc_city' ) }}, {{ get_theme_mod( 'ssc_state' ) }} {{ get_theme_mod( 'ssc_zip' ) }}
            </h3>
            <h3 class="copyright text-white">© Schlumberger Scherer Construction</h3>
        </div>
    </div>
</footer>
