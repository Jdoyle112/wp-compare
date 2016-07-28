<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$values = $_POST['checks'];

	foreach ($values as $value) {
		echo $value;
	}
}

get_header(); ?>
		<main class="content">

</main>

<?php get_footer(); ?>