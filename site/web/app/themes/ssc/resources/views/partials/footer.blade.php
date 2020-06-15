<footer class="bg-primary block p-8 lg:p-24">
    <div class="block lg:flex">
        <div class="w-full lg:w-2/3">
            <div class="block lg:flex">
                <div class="w-full lg:w-2/3">
                    <p class="leading-normal text-24px text-white">Let us know how we can assist in your next project!</p>
                    @php echo do_shortcode('[contact-form-7 id="67" title="Contact Form"]') @endphp
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/3 contact">
            <h4 class="text-24px text-white mb-8">
            {{ get_theme_mod( 'ssc_title' ) }}<br>
            {{ get_theme_mod( 'ssc_subtitle' ) }}
            </h4>
            <a href="tel:{{ get_theme_mod( 'ssc_phone' ) }}" class="text-xl lg:text-3xl text-white mb-16">{{ get_theme_mod( 'ssc_phone' ) }}</a>
            <p class="text-2.5xl text-white mt-8">
            {{ get_theme_mod( 'ssc_address' ) }}<br>
            {{ get_theme_mod( 'ssc_city' ) }}, {{ get_theme_mod( 'ssc_state' ) }} {{ get_theme_mod( 'ssc_zip' ) }}
            </p>
            <h5 class="copyright text-2xl text-white">© Schlumberger Scherer Construction</h5>
        </div>
    </div>
</footer>
