<?php
function my_custom_taxonomies() {
  //
  // Product/Service taxonomy
  $labels = array(
    'name'              => 'Type of Products/Services',
    'singular_name'     => 'Type of Product/Service',
    'search_items'      => 'Search Types of Products/Services',
    'all_items'         => 'All Types of Products/Services',
    'parent_item'       => 'Parent Type of Product/Service',
    'parent_item_colon' => 'Parent Type of Product/Service:',
    'edit_item'         => 'Edit Type of Product/Service',
    'update_item'       => 'Update Type of Product/Service',
    'add_new_item'      => 'Add New Type of Product/Service',
    'new_item_name'     => 'New Type of Product/Service Name',
    'menu_name'         => 'Type of Product/Service',
  );
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'product-types' ),
  );
  register_taxonomy( 'product-types', array( 'reviews', 'post' ), $args );
  //
  // Mood taxonomy (non-hierarchical)
  $labels = array(
    'name'                       => 'Moods',
    'singular_name'              => 'Mood',
    'search_items'               => 'Search Moods',
    'popular_items'              => 'Popular Moods',
    'all_items'                  => 'All Moods',
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => 'Edit Mood',
    'update_item'                => 'Update Mood',
    'add_new_item'               => 'Add New Mood',
    'new_item_name'              => 'New Mood Name',
    'separate_items_with_commas' => 'Separate moods with commas',
    'add_or_remove_items'        => 'Add or remove moods',
    'choose_from_most_used'      => 'Choose from the most used moods',
    'not_found'                  => 'No moods found.',
    'menu_name'                  => 'Moods',
  );
  $args = array(
    'hierarchical'          => false,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'moods' ),
  );
  register_taxonomy( 'moods', array( 'reviews', 'post' ), $args );
  //
  // Price Range taxonomy (non-hierarchical)
  $labels = array(
    'name'                       => 'Prices',
    'singular_name'              => 'Price',
    'search_items'               => 'Search Prices',
    'popular_items'              => 'Popular Prices',
    'all_items'                  => 'All Prices',
    'parent_item'                => 'Parent Type of Price',
    'parent_item_colon'          => 'Parent Type of Price:',
    'edit_item'                  => 'Edit Price',
    'update_item'                => 'Update Price',
    'add_new_item'               => 'Add New Price',
    'new_item_name'              => 'New price Name',
    'separate_items_with_commas' => 'Separate prices with commas',
    'add_or_remove_items'        => 'Add or remove prices',
    'choose_from_most_used'      => 'Choose from the most used prices',
    'not_found'                  => 'No prices found.',
    'menu_name'                  => 'Prices',
  );

  $args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'prices' ),
  );
  register_taxonomy( 'prices', array( 'reviews' ), $args );
}
add_action( 'init', 'my_custom_taxonomies');
?>
