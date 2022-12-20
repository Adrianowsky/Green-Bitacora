<?php get_header(); ?>

<div class="sticky-post-container">
	<?php // Start the loop
	 while ( have_posts() ) :
			the_post(); 
		
		if ( is_sticky() ) {
	?>
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<div class="post-title-box">
				<?php the_post_thumbnail('large'); ?>
				<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
			</div>
		</a>
	<?php } //endif 
	endwhile; // End of the loop  ?>
</div>
			
<div id="home-post-cards">
	<div class="home-post-cards-title">
		<h2><?php echo pll__("Last articles"); ?></h2>
	</div>
	
	<?php // Start the loop
	while ( have_posts() ) :
			the_post();
		if ( !in_category('boletin') && !in_category('newsletter') ) { 
			if ( !is_sticky() ) {
	 			static $count = 0;
				if ($count == "8") { //number of posts to display
					break; }
			else { ?>
	 
					<div  <?php post_class( 'post-card' ); ?> >
						<a href="<?php echo esc_url( get_permalink() ); ?>">
							<div class="post-title-box">
								<?php the_post_thumbnail('medium'); ?>
								<?php the_title( '<h2 class="post-title">', '</h2>' ); ?>
							</div>
						</a>
						<div class="post-text-box">
							<div class="pt-date"><?php the_date(); ?></div>
							<div class="category-container"><?php the_category(); ?></div>
							<div class="plus-icon txt-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="nav-icon"><path d="M416 277.333H277.333V416h-42.666V277.333H96v-42.666h138.667V96h42.666v138.667H416v42.666z"/>
								</svg>
							</div>
						</div>
						<div class="post-summary">
							<?php the_excerpt(); ?>
						</div>
					</div>
	 
				<?php $count++; } //endif
	 		} //endif sticky

	 	} //endif check category
	 	
 	endwhile; // End of the loop ?>

</div> <!-- home-post-cards -->

<?php get_footer(); ?> 
