
<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	

	<div id="primary" class="content-area">
		<main id="main" class="site-main clearfix" role="main">

			<?php 
			// Build product taxonomy loop from product type
			$terms = get_terms( array(
			    'taxonomy' => 'Product-Type',
			    'hide_empty' => false,
			) ); 
			//print_r($terms);
			?>
			<h2><span class="shop-stuff-name">SHOP STUFF</span></h2>
			<div id="shop-stuff">

			<?php
			foreach ($terms as $term) { ?>
				<!-- <pre><?php print_r($term) ?></pre> -->
				 <!-- template for each shop card -->

				<div class="shop-stuff-item">
				<?php $taxoimage = wp_get_attachment_image_src(get_field('image',
				$term->taxonomy . '_' . $term->term_id), 'small'); ?>
					<img class="shop-stuff-img" src="<?php echo $taxoimage[0]; ?>" />

				<div class="shop-stuff-descripton">
				<p><?php echo $term-> description ?></p>
				</div> <!--end of shop-stuff-description-->
				<a href=" <?php echo get_permalink() ?>"> <button class="shop-stuff-btn"><?php echo $term-> name?> STUFF</button> </a>
				</div><!-- end of shop-stuff-item-->
			<?php } ?>
			</div><!--end of shop-stuff-->


			<h2>INHABITENT JOURNAL</h2>
				<div class="journal">
				<?php
				$journal_query = new WP_Query(array("post_type" => "post","posts_per_page" => 3));
				while($journal_query->have_posts()):$journal_query->the_post();
					// html for blog entry goes here
					?>
					<div class="journal-item">
					<article class="journal-post" id="post-<?php the_ID();?>" <?php post_class();?>>
					<?php if (has_post_thumbnail() ) :?>
	          		<div class="journal-post-img">
	         	 	<?php the_post_thumbnail(); ?>
	          		</div>
	       			<?php endif; ?>
	       			</article>

						<h3> <?php the_title(); ?> </h3>
						<a class="journal-btn" href="<?php echo get_permalink() ?>" ><button >READ ENTRY </button></a>
					</div>			
					<?php endwhile; ?>
			</div> <!--end of journal-->


			<h2> LATEST ADVANTURES </h2>
			<div class="adventures">
				<?php
				$ad_query = new WP_Query(array("post_type" => "Adventure","posts_per_page" => 4));
				while($ad_query->have_posts()):$ad_query->the_post();
					?>
					<div class="adventures-item">
					<h3><?php the_title(); ?></h3>

						<article class="adventure-post" id="post-<?php the_ID();?>" <?php post_class();?>>
						<?php if (has_post_thumbnail() ) :?>
			          		<div class="adventure-post-img">
			         	 	<?php the_post_thumbnail(); ?>

			          		</div>
		       			<?php endif; ?>
		       			</article>
		       			<a href="<?php echo get_permalink() ?>" > <button class="adv-btn">READ MORE</button></a>	

					





					</div> <!--end of advantures-item -->
				<?php endwhile; ?>
					<?php echo get_post_type_archive_link( "Adventure" );?>

				<a href="<?php echo get_bloginfo('wpurl')?>/Adventure" id="more-adv-btn">MORE ADVENTURES</a>
			</div><!-- end of advantures -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
