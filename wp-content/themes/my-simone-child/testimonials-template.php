<?php
  $args = array(
    'post_type' => 'reviews',
    'posts_per_page' => 63,
    'orderby' => 'rand'
  );

  $testimonials = new WP_Query( $args);


  echo '<aside id="testimonials" class"clear">';
  while( $testimonials->have_posts()) {
    $testimonials->the_post();
    echo '<div class="testimonials-items">'; the_title(); the_time(); echo '</div>';
    // the_category();
    // the_content();
    // $testimonials->the_post();
  }
  echo '</aside>';


  wp_reset_query();
 ?>
