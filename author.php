<?php

get_header(); ?>
<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<div class="author-bio">
	<h2 class="author-name txt-center"><?php echo $curauth->display_name; ?></h2>
	<?php echo $curauth->description; ?>
</div>

<div class="search-results-container txt-center">
	<div class="home-post-cards-title">
		<h2><?php echo function_exists('pll__') ? pll__('Last articles') : ''; ?></h2>
	</div>
	<?php
	// Start the loop.
	while (have_posts()) :
		the_post();
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
				<div class="plus-icon txt-center">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="nav-icon">
						<path d="M416 277.333H277.333V416h-42.666V277.333H96v-42.666h138.667V96h42.666v138.667H416v42.666z" />
					</svg>
				</div>
			</div>
			<div class="post-summary">
				<?php the_excerpt(); ?>
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
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentysixteen') . ' </span>',
	)
);
?>

<?php get_footer(); ?>