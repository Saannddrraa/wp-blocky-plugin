<?php $args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'category_name' => 'news',
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
        <?php
    }
    wp_reset_postdata();
} else {
    echo 'No posts found.';
}
