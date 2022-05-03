<?php 
// Enable eye-catching images
add_theme_support('post-thumbnails');

function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'Recent Event';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'';
	$submenu['edit.php'][10][0] = 'Add Recent Event';
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'Recent Event';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('Add New', $name);
	$labels->add_new_item = $name; 
    $labels->new_item = 'New'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}

add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

function create_post_type() {
register_post_type( 'Articles-and-News',
    array (
      'labels' => array (
        'name' => __( 'Articles-and-News' ),
        'singular_name' => __( 'Articles-and-News一Add New' )
      ),
      'public' => true,
      'supports' => array('title','thumbnail', 'editor'), 
      'menu_position' => 4,
    )
);
}


add_action( 'init', 'create_post_type' );

function create_posttype() {
	register_post_type( 'Structure-Members',
		array (
		  'labels' => array (
			'name' => __( 'Structure-Members' ),
			'singular_name' => __( 'Structure-Members一Add New' )
		  ),
		  'public' => true,
		  'supports' => array('title','thumbnail', 'editor'), 
		  'menu_position' => 4,
		)
	);
	}
	
	
	add_action( 'init', 'create_posttype' );
	




 // Automatic conversion of custom post slugs
 function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
	if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
	  $slug = $post_ID;
	}
	return $slug;
  }
  add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );

?>