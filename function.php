<?php
/**
 * midprogram functions and definitions
 *
 * @package midprogram
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
/*
* Portfolio post type
* See http://colorlabsproject.com/tutorials/adding-custom-post-types-to-wordpress-theme/ */

add_action('init', 'create_project_post_type' );

 function create_project_post_type() {
	$args=array(
		'description'=> 'Project Post Type',
		'show_ui'=> true,
		'menu_position' => 4,
		'exclude_from_search' => true,
		'labels' => array(
				'name'=> 'mcad projects',
				'singular_name' => 'mcad project',
				'add_new' => 'add new mcad project',
				'add_new_item' => 'add new project',
				'edit' => 'edit mcad projects',
				'edit_item' => 'edit project',
				'new_item' => 'new project',
				'search_item' => 'search project',
				'view_item' => 'view project',
				'not_found' => 'no projects found',
				'not_found_in_trash' => 'no projects found in trash',
				'parent' => 'parent portfolio'
				),
			'public' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'comments')
);
	register_post_type( 'portfolio' , $args);
}

/*-----------------------------------------------------------
Register Custom Taxonomies
---------------------------------------------------------------*/
add_action('init', 'register_portfolio_taxonomy');

function register_portfolio_taxonomy(){
	register_taxonomy ('portfolio_category', 'portfolio',
	array( 
		'labels' => array (
											'name' => 'Portfolio Categories',
											'singular_name' => 'project categories',
											'search_items'	=> 'search project categories',
											'popular_items' => 'popular project categories',
											'all_items'=> 'all proeject categories',
											'parent_item'=> 'parent project category',
											'parent_item_colon' => 'parent project category',
											'edit_item' => 'edit project category',
											'update_item'=>'update project category',
											'add_new_item' => 'add new project category',
											'new_item_name' => 'new project category',
											),
											'hierarchical' =>true,
											'show_ui'=>true,
											'show_tagcloud'=>true,
											'rewrite'=>false,
											'public'=>true
										),
								
add_filter("manage_edit_project_columns", "project_edit_columns");
function portfolio_custom_columns($column){
	global $post;
	switch ($column){
		case "photo":
		if(has_post_thumbnail()) the_post_thumbnail(array(50,50));
		break;
		case "portfolio_category":
			echo get_the_term_list($post ->ID, 'portfolio_category', '', ', ', '');
			break;
			
if ( isset($_GET['post_type']) ){
	$post_type =$_GET['post_type'];
}else {
	$post_type =' ';
}		

if ( $post_type == 'portfolio'){
	add_action('restrict_manage_posts', 'portfolio_filter_list');
	add_filter('parse_query', 'perform_filtering');
}	

function portfolio_filter_list(){
	global $typenow, $wp_query;
	if ($typenow=='portfolio') {
		wp_dropdown_categories(array(
			'show_option_all'=>'show all project category',
			'taxonomy'=>'project category',
			'name'=>'project_category',
			'orderby'=> 'name',
			'selected'=> (isset( $wp_query->query['portfolio_category']) ? $wp_query->query['portfolio_category'] : ' '),
			'hierarchical'=> false,
			'depth'=> 3,
			'show_count'=> false,
			'hide_empty'=> true,	
		);
	}
}

function perform_filtering( $query) {
	$qv = &$query->query_vars; 
	if(( $qv[ 'project_category'] ) && is_numeric($qv['project_category' ] ) ){
		$term = get_term_by ('id', $qv[ 'project_category'], 'project_category');
		$qv[ 'portfolio_category'] = $term -> slug;
	}
}			
			
}
?>
