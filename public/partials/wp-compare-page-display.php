<?php

get_header(); 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$values = $_POST['checks'];
	$reset = $_POST['reset'];
	$categories = $_POST['categories'];
	if(!empty($reset)){
		$_SESSION['checks'] = '';
		$_SESSION['cat'] = '';
	}
	$_SESSION['checks'] = $values;
	$_SESSION['cat'] = $categories;
}


if(!empty($_SESSION['checks'])){
	foreach ($_SESSION['checks'] as $value) {
		$name = strtolower($value);

		$page = get_page_by_title( $name, OBJECT, 'comparables' );
		if($page){
			$post_ids[] = $page->ID;
		}
	}
}	

?>
<main class="content">
	<div class="container">
		<div class="categories-form">
			<?php $tax_terms = get_terms($taxonomy); 
				if($tax_terms){ ?>
			<form method="post" action="#">
				<select name="categories">
			<?php 
				foreach ($tax_terms as $val) { ?>
					<option value="<?php echo $val->slug; ?>"><?php echo $val->name; ?></option>

					<?php } ?>
				</select>
				<input type="submit" value="submit">
			</form>
			<?php } ?>
		</div> 
		<section>
			<?php
			echo $_SESSION['cat'];
				$args = array(
					'post_type' => 'comparables',
					'ignore_sticky_posts' => 1,
					'category_name' => $_SESSION['cat'],
					'post__in' => $post_ids
				);

				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) {
					echo '<div class="comparables-items">';
					while ( $the_query->have_posts() ) {
						$i = 1;
						$the_query->the_post(); ?>						
						<div class="item">
							<a href="<?php echo get_permalink(); ?>">
							<?php 
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
								$url = $thumb['0']; 
							?>		
							<div class="image-wrap" style="background: url(<?php echo $url; ?>) center center">						
							</div>
							<h2><?php the_title(); ?></h2>
							<div class="details">
								<?php the_meta(); ?>
							</div>
							</a>
						</div>
					<?php  
						$i++;
						if($i > 3){
							$i = i;
							echo 'div class="clearfix"></div>';
						}
					}
					echo '</div>';
				}
			?>
						
		</section>
		<div class="clearfix"></div>
		<div class="reset">
			<form method="post" action="#">
				<label>
					<input type="submit" value="reset" name="reset">
				</label>
			</form>
		</div>
	</div>
</main>

<?php get_footer(); ?>