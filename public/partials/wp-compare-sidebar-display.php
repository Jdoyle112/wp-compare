
<form method="post" action="<?php echo get_bloginfo('url'); ?>/comparables" id="compare">
	<input type="hidden" name="form-submission" value="1">
	<button type="button" value="<?php the_title(); ?>" name="add-page" class="add-page">Add New</button>
	<button type="submit" value="submit" id="submit">Compare</button>
</form>
