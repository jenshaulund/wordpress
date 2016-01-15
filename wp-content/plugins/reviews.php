<?php
/**
 * Plugin Name: Jens' Plugin for Reviews
 * Description: A plugin for Runefilms
 * Version: 0.1
 * Author: Jens Haulund
 * License: GPL2
*/

/* Copyright 2016 Jens Haulund

 {Plugin Name} is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 2 of the License, or
 any later version.

 {Plugin Name} is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with {Plugin Name}. If not, see {License URI}.

 */

 function my_custom_reviews() {
   $labels = array(
    'name'               => 'Reviews',
    'singular_name'      => 'Review',
    'menu_name'          => 'Reviews',
    'name_admin_bar'     => 'Review',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Review',
    'new_item'           => 'New Review',
    'edit_item'          => 'Edit Review',
    'view_item'          => 'View Review',
    'all_items'          => 'All Reviews',
    'search_items'       => 'Search Reviews',
    'parent_item_colon'  => 'Parent Reviews:',
    'not_found'          => 'No Reviews found.',
    'not_found_in_trash' => 'No Reviews found in Trash.',
);

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_icon'          => 'dashicons-star-half',
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'reviews' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'comments', 'author' ),
    'taxonomies'         => array('category', 'post_tag')
  );
    register_post_type( 'reviews', $args);
 }

 add_action( 'init', 'my_custom_reviews');

 // Flush rewrite rules to add "review" as a permalink slug
 function my_rewrite_flush_reviews() {
     my_custom_reviews();
     flush_rewrite_rules();
 }
 register_activation_hook( __FILE__, 'my_rewrite_flush_reviews' );
?>
