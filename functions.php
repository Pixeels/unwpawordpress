<?php 
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'Conference';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'';
	$submenu['edit.php'][10][0] = 'Add Conference';
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'Conference';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('Add New', $name);
	$labels->add_new_item = $name; 
    $labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}

add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

?>