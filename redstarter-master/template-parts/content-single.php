
<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>
<?php get_header() ?>
<?php echo get_post_type(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if (get_post_type() == "product" || get_post_type() == "post"){;?>
			<div class="product-image">
			 <?php if ( has_post_thumbnail() ) : ?>
				 <?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?> 
			</div>
		<?php } ?>


		<div class="product-description">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php the_content('<p class="sing-adv-text">','</h1>'); ?>
			<?php if (get_post_type() == "product"){?>
				<p>$ <?php echo get_field ('price') ?></p>
				<p><?php echo get_field ('description') ?></p>
			<?php } ?>
		</div><!-- end of product description-->

		<?php if (get_post_type() == "post") { ?>
			<div class="entry-meta">
			 <?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
			</div><!-- .entry-meta -->
		<?php } ?>	

		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<!-- <?php the_content(); ?> -->
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
