<div class="portfolio">
	<h2>My Portfolio</h2>
	<div class="row">
	<?php

		$args = array(
			'post_type' => array( 'post', 'page' ),
			'post_status' => 'publish',
			'category_name' => 'portfolio',
			'posts_per_page' => -1
		);

		$the_query = new WP_Query($args);

		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post();
		$url = get_field('url');

	?>

	<div class="col-md-4">

		<div class="card portfolio-item">
			<a rel="nofollow" target="_blank" href="<?php

				if ($url) {
					echo $url;
				} else {
					the_permalink();
				}

			?>">
				<img alt="<?php the_title(); ?> WordPress theme" class="img-responsive card-img-top" src="<?php the_post_thumbnail_url(); ?>">
				<div class="card-body">
					<h4 class="card-title">
						<?php the_title(); ?>
					</h4>
					<a href="" class="btn btn-orange">View Project</a>
				</div>

			</a>

		</div>
	</div>


	<?php endwhile; endif;

	wp_reset_postdata(); ?>
	<div class="clearfix"></div>
	</div>
</div>