<?php
	add_filter( 'wp_nav_menu_items', 'close_button', 10, 2 );
	function close_button ( $items, $args ) {

		if ($args->theme_location == 'primary') {    
		    $myMenu='<li><a class="close_button menu-item menu-item-type-post_type menu-item-object-page nav-item">close</a></li>';
		    $items .= $myMenu;
		    return $items;
		} else {
			return $items;
		}
	}
?>