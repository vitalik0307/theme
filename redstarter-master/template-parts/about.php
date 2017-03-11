<?php
/**
 *Template Name: about
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<h1><?php the_title(); ?></h1>
<h2> <?php echo get_field ('header1') ?></h2>
<div class="about-text"><p> <?php echo get_field  ('first_content') ?></p></div>
<h2> <?php echo get_field ('header2') ?> </h2>
<div class="about-text"><p> <?php echo get_field ('second_content') ?> </p></div>

<?php get_footer(); ?>