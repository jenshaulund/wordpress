<?php function testimonial_posttype() {
  $labels = array(
    'name'               => 'Testimonials',
    'singular_name'      => 'Testimonial',
    'menu_name'          => 'Testimonials',
    'name_admin_bar'     => 'Testimonial',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Testimonial',
    'new_item'           => 'New Testimonial',
    'edit_item'          => 'Edit Testimonial',
    'view_item'          => 'View Testimonial',
    'all_items'          => 'All Testimonials',
    'search_items'       => 'Search Testimonials',
    'parent_item_colon'  => 'Parent Testimonials:',
    'not_found'          => 'No testimonials found.',
    'not_found_in_trash' => 'No testimonials found in Trash.',
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
   'menu_icon'          => 'dashicons-id-alt',
    // 'menu_icon'          => 'dashicons-carrot',
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'testimonials' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'supports'           => array( 'title', 'editor', 'thumbnail'),
    'taxonomies'         => array( 'category' , 'post_tag')
  );
  register_post_type( 'testimonials', $args);
}
add_action( 'init', 'testimonial_posttype');

// Flush rewrite rules to add "review" as a permalink slug
function rewrite_flush() {
  testimonial_posttype();
  flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'rewrite_flush' );

?>
