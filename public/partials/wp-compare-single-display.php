<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       jackdoyle.co
 * @since      1.0.0
 *
 * @package    Wp_Compare
 * @subpackage Wp_Compare/public/partials
 */


get_header(); ?>
		<main class="content">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
		</section>
		<a class="back" href="<?php echo get_bloginfo('url'); ?>/comparables">Back to Archive ></a>
		<div class="container">	
			<section class="post post-compare">
				<section class="post-content">
					<div class="row">
						<div class="left">
							<?php 
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
								$url = $thumb['0']; 
							?>		
							<img src="<?php echo esc_url( $url ); ?>">
						</div>
						<div class="right">
							<h1><?php the_title(); ?></h1>
							<?php the_meta(); ?>
						</div>
					</div>
					<div class="description">
						<?php the_content(); ?>
					</div>	
				</section>
			</section>
			<section class="post-sidebar">
				<div class="sidebar-content">
					<h2>Compare</h2>
					<p>Press the button to add to comparables list. When you are finished, press "Compare".</p>
					<?php //dynamic_sidebar( 'compare-sidebar' ); 
						include('wp-compare-sidebar-display.php');
					?>

				</div>
			</section>		
		<?php endwhile; ?>
	</div>
</main>

<?php get_footer(); ?>