<?php get_header(); ?>

<div class="sticky-post-container">
	<?php // Start the loop
	while (have_posts()) :
		the_post();

		if (is_sticky()) {
	?>
			<a href="<?php echo esc_url(get_permalink()); ?>">
				<div class="post-title-box">
					<?php the_post_thumbnail('large'); ?>
					<?php the_title('<h1 class="post-title">', '</h1>'); ?>
				</div>
			</a>
	<?php
			break; //This avoids the sticky post to appears twice

		} //endif 
	endwhile; // End of the loop  
	?>
</div>

<div id="home-post-cards">
	<div class="home-post-cards-title">
		<h2><?php echo function_exists('pll__') ? pll__('Last articles') : ''; ?></h2>
	</div>

	<?php // Start the loop
	while (have_posts()) :
		the_post();
		if (!is_sticky()) {
			static $count = 0;
	?>

			<div <?php post_class('post-card'); ?>>
				<a href="<?php echo esc_url(get_permalink()); ?>">
					<div class="post-title-box">
						<?php the_post_thumbnail('medium'); ?>
						<?php the_title('<h2 class="post-title">', '</h2>'); ?>
					</div>
				</a>
				<div class="post-text-box">
					<div class="pt-date"><?php the_date(); ?></div>
					<div class="category-container"><?php the_category(); ?></div>
				</div>
			</div>

	<?php

		} //endif check sticky

	endwhile; // End of the loop 
	?>

</div> <!-- home-post-cards -->

<?php get_footer(); ?>