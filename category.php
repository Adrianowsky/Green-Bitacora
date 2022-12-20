<?php

get_header(); ?>

			<header class="search-results-header txt-center">
				<h1 class="search-results-title"><?php single_cat_title(); ?></h1>
			</header><!-- .search-results-header -->

			<div class="search-results-container txt-center">
			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();
			?>
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
					</div>
				</div>

			<?php
				// End the loop.
			endwhile;
			?>
			</div><!-- .search-results-container -->

			<?php
			// Previous/next page navigation.
			the_posts_pagination(
				array(
					'prev_text'          => pll__("Previous"),
					'next_text'          => pll__("Next"),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
				)
			);
			?>

<?php get_footer(); ?> 
