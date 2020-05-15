<?php 

add_action( 'init', function() {
	register_extended_post_type( 'portfolio', [

		# Add the post type to the site's main RSS feed:
		'show_in_feed' => true,

		# Show all posts on the post type archive:
		'archive' => [
			'nopaging' => true,
		],

		# Add the post type to the 'Recently Published' section of the dashboard:
		'dashboard_activity' => true,

		# Add some custom columns to the admin screen:
		'admin_cols' => [
			'portfolio_featured_image' => [
				'title'          => 'Featured Image',
				'featured_image' => 'thumbnail'
			],
			'portfolio_published' => [
				'title_icon'  => 'dashicons-calendar-alt',
				'meta_key'    => 'published_date',
				'date_format' => 'd/m/Y'
			],
        ],
        
	], [

		# Override the base names used for labels:
		'singular' => 'Portfolio',
		'plural'   => 'Portfolios',
		'slug'     => 'portfolio',

	] );

	
} );