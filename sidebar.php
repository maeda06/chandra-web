<aside class="sidebar">
    <div>
		<?php
		$args = array(
			'post_type' => 'column',
			'posts_per_page' => 5,
		);
		$the_query = new WP_Query($args);
		if( $the_query->have_posts() ):
		?>
		<section class="new-post">
			<h3>NEW POST</h3>
				<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
				<div class="new-post__item">
					<div class="new-post__img"><?php the_post_thumbnail("medium", array("alt" => get_the_title(), "class" => "sample")); ?></div>
					<div class="new-post__text">
						<span class="new-post__date"><?php echo get_the_date(); ?></span>
						<h4><?php the_title(); ?></h4>
					</div>
				</div>
				<?php endwhile; ?>
		</section>
      
    <?php endif; ?>
  </aside>