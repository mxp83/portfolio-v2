<?php

	// Register Custom Post Type
	function custom_post_type() {

		$labels = array(
			'name'                  => _x( 'Portfolio Cases', 'Portfolio Case General Name', 'understrap' ),
			'singular_name'         => _x( 'Portfolio Case', 'Portfolio Case Singular Name', 'understrap' ),
			'menu_name'             => __( 'Portfolio Cases', 'understrap' ),
			'name_admin_bar'        => __( 'Portfolio Case', 'understrap' ),
			'archives'              => __( 'Case Archives', 'understrap' ),
			'parent_item_colon'     => __( 'Parent Case:', 'understrap' ),
			'all_items'             => __( 'All Cases', 'understrap' ),
			'add_new_item'          => __( 'Add New Case', 'understrap' ),
			'add_new'               => __( 'Add New', 'understrap' ),
			'new_item'              => __( 'New Case', 'understrap' ),
			'edit_item'             => __( 'Edit Case', 'understrap' ),
			'update_item'           => __( 'Update Case', 'understrap' ),
			'view_item'             => __( 'View Case', 'understrap' ),
			'search_items'          => __( 'Search Case', 'understrap' ),
			'not_found'             => __( 'Not found', 'understrap' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'understrap' ),
			'featured_image'        => __( 'Featured Image', 'understrap' ),
			'set_featured_image'    => __( 'Set featured image', 'understrap' ),
			'remove_featured_image' => __( 'Remove featured image', 'understrap' ),
			'use_featured_image'    => __( 'Use as featured image', 'understrap' ),
			'insert_into_item'      => __( 'Insert into Case', 'understrap' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Case', 'understrap' ),
			'items_list'            => __( 'Cases list', 'understrap' ),
			'items_list_navigation' => __( 'Cases list navigation', 'understrap' ),
			'filter_items_list'     => __( 'Filter Cases list', 'understrap' ),
		);
		$args = array(
			'menu_icon'				=> 'dashicons-admin-appearance',
			'label'                 => __( 'Portfolio Case', 'understrap' ),
			'description'           => __( 'Portfolio Case Description', 'understrap' ),
			'labels'                => $labels,
			'supports'              => array( ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'portfolio_cases', $args );

	}
	add_action( 'init', 'custom_post_type', 0 );

	function custom_portfolio_cases($atts = null, $content = null, $tag = null) {

	$odd = TRUE;
    $out = '';

    $args = array( 
        'numberposts' => '8', 
        'post_status' => 'publish', 
        'post_type' => 'portfolio_cases',
    );

    $recent = wp_get_recent_posts( $args );

    if ( $recent ) {

    		$out .= '<div id="portfolio-cases" class="row">';


	        foreach ( $recent as $item ) {

	        		$out .= '<div class="case_item col-sm-12 col-md-6">';
		        	$out .= '<div class="case_img" style="background-image:url(';
		        	$out .= get_field('header_image',$item['ID']);
		            //$out .= get_the_post_thumbnail_url( $item['ID'] );
		            $out .= ')"><a class="case_link" href="'. get_permalink( $item['ID'] ) . '"></a></div><div class="case_text"><h5>';
		            $out .= get_the_title($item['ID']);
		            $out .= '</h5><p></p>';
		            $out .= '</div>';
		            $out .= '</div>';
	        }

	        $out .= '</div>';
	    }

	    if ( $tag ) {
	        return $out;
	    } else {
	        echo $out;
	    }

	}

	add_shortcode( 'recentposts', 'custom_recent_posts' );
?>