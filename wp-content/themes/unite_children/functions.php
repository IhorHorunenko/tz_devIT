<?php 
	function blogtool_func($atts){
		$args = array(
	'posts_per_page' => 5,
	'post_type'   => 'films',
);
$posts = get_posts( $args );
echo '<h3 class="widget-title">Последние 5 фильмов</h3>';
	foreach($posts as $post){ 
		setup_postdata($post);
		//echo $post->post_title.'<br>';
		echo '<a href="'.$post->guid.'">'.$post->post_title.'</a><br>';
    	//echo '<pre>'.print_r($post, true).'</pre>';
	}

wp_reset_postdata(); // сброс
		// $post = get_post();
		// echo '<pre>'.print_r($post, true).'</pre>';
	}
	add_shortcode('blogtool', 'blogtool_func');
?>