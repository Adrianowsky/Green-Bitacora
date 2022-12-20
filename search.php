<?php

get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<header class="search-results-header txt-center">
				<h1 class="search-results-title">
					<?php echo pll__("Resultados");?> "<?php echo get_search_query();?>"
				</h1>
			</header><!-- .search-results-header -->

			<div class="search-results-container txt-center">
			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();
			?>
				<div class="post-card">
					<div class="post-title-box">
						<?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					</div>
					<div class="post-text-box">
						<div class="pt-date"><?php the_date(); ?></div>
						<div class="separator"></div>
						<div class="search-post-summary">
							<?php the_excerpt(); ?>
						</div>
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

			// If no content, include the "No posts found" template.
		else :
		?>
			<header class="search-results-header txt-center">
				<h1 class="search-results-title"><?php echo pll__("Sin resultados"); ?></h1>
			</header>
		<?php
		endif;
		?>

<?php get_footer(); ?>
