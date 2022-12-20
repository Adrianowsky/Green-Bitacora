<?php get_header(); ?>

<div class="page-container">
	<div class="post">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post(); 
		?>
			<div class="post-title-box">
				<?php the_post_thumbnail('large'); ?>
				<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
			</div>
			<?php if ( !in_category('boletin') && !in_category('newsletter') ) { ?>
				<ul class="post-bar">
					<li class="post-bar-element post-date txt-center"><?php the_date(); ?></li>
					<li id="focus-icon" class="post-bar-element txt-center">
						<svg viewBox="0 0 512 512" class="nav-icon">
							<path class="eye-icon" d="M256 105c-101.8 0-188.4 62.4-224 151 35.6 88.6 122.2 151 224 151s188.4-62.4 224-151c-35.6-88.6-122.2-151-224-151zm0 251.7c-56 0-101.8-45.3-101.8-100.7S200 155.3 256 155.3 357.8 200.6 357.8 256 312 356.7 256 356.7zm0-161.1c-33.6 0-61.1 27.2-61.1 60.4s27.5 60.4 61.1 60.4 61.1-27.2 61.1-60.4-27.5-60.4-61.1-60.4z"/>
							<path class="close-eye-icon" d="M405 136.798L375.202 107 256 226.202 136.798 107 107 136.798 226.202 256 107 375.202 136.798 405 256 285.798 375.202 405 405 375.202 285.798 256z"/>
						</svg>
					</li>
					<li class="post-bar-element post-author txt-center"><?php the_author_posts_link(); ?></li>
					<div class="separator"></div>
				</ul>
			<?php } //END if  ?>
			<div class="post-text-box"><?php the_content(); ?></div>
				
			<div class="separator"></div>
			<div class="post-tags">
				<?php 
					if ( in_category('boletin') || in_category('newsletter') ) {
						echo "<div class='newsletter-footer'>";
							echo pll__("Newsletter-footer");
						echo "</div>";
					}
				?>
				<ul class="tags-list">
					<?php echo get_the_tag_list('<li class="entry-tag">','</li><li class="entry-tag">','</li>'); ?>
				</ul>
			</div>
	
		<?php
			// End of the loop.
		endwhile;
		?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
