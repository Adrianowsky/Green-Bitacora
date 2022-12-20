<?php get_header(); ?>

<div class="page-container">
	<div class="page-box">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post(); 
		?>
			<?php //the_title( '<h1 class="page-title">', '</h1>' ); ?>
			<div class="page-title-box">
				<?php the_post_thumbnail('large'); ?>
				<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			</div>
			<div class="page-text-box"><?php the_content(); ?></div>
	
		<?php
			// End of the loop.
		endwhile;
		?>
	</div>
</div>

<?php get_footer(); ?>
