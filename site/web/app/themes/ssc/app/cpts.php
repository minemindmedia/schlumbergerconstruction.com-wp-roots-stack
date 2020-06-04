<?php 

add_action( 'init', function() {
	register_extended_post_type( 'portfolio', [

		# Add the post type to the site's main RSS feed:
		'show_in_feed' => true,

		'supports' => [
			'title',
			'thumbnail' ,
			'custom-fields' ,
			'page-attributes',
		  ],

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
		
		'site_sortables' => [
			'menu_order' => array(
			  'post_field' => 'menu_order',
			  'default'  => 'ASC',
			),
		  ]
        
	], [

		# Override the base names used for labels:
		'singular' => 'Portfolio',
		'plural'   => 'Portfolios',
		'slug'     => 'portfolio',

	] );

} );

add_action( 'pre_get_posts', function($query) {

	if ( !is_admin() && $query->is_main_query() && is_post_type_archive('portfolio') ) {
	  $query->set( 'posts_per_page', 100 );
	  $query->set( 'orderby', 'menu_order' );
	  $query->set( 'order', 'ASC' );
	  $query->set(
		'meta_query', array(
		  'meta_query' => array(
			'relation' => 'OR',
			array(
			  'key' => 'private_listing',
			  'compare' => 'NOT EXISTS'
			),
			array(
			  'key'     => 'private_listing',
			  'compare' => '!=',
			  'value'   => 1,
			),
		  )
		)
	  );
	} elseif ( is_admin() && $query->is_main_query() && is_post_type_archive('portfolio') ) {
	  $query->set( 'orderby', 'menu_order' );
	  $query->set( 'order', 'ASC' );
	}
  } );