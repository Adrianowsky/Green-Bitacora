<?php

/* Theme Setup */

if (!function_exists('greenbitacora_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   */
  function greenbitacora_setup()
  {

    /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
    add_theme_support('title-tag');


    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(730, 250);


    // Registers menu to be use with wp_nav_menu()
    register_nav_menus(
      array(
        'primary' => __('Primary Menu', 'greenbitacora'),
        'footer_menu_1' => __('Footer Menu 1', 'greenbitacora'),
        'footer_menu_2' => __('Footer Menu 2', 'greenbitacora')
      )
    );
  }
endif; // greenbitacora_setup
add_action('after_setup_theme', 'greenbitacora_setup');

// Function to change email sender name
function wp_sender_name($original_email_from)
{
  return 'Green Bitácora';
}
add_filter('wp_mail_from_name', 'wp_sender_name');

//Remove Wordpress Lazy load feature
add_filter('wp_lazy_loading_enabled', '__return_false');


//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
  if (!is_admin() && isset($scripts->registered['jquery'])) {
    $script = $scripts->registered['jquery'];

    if ($script->deps) { // Check whether the script has any dependencies
      $script->deps = array_diff($script->deps, array(
        'jquery-migrate'
      ));
    }
  }
}

add_action('wp_default_scripts', 'remove_jquery_migrate');

/* Add category to body class */
add_filter('body_class', 'add_category_to_single', 10, 2);
function add_category_to_single($classes, $class)
{
  if (is_single()) {
    global $post;
    foreach ((get_the_category($post->ID)) as $category) {
      $classes[] = 'sgl-cat-' . $category->category_nicename;
    }
  }
  return $classes;
}

/* Remove newsletter entries from front-page */
function exclude_category_home($query)
{
  if ($query->is_home) {
    $query->set('cat', '-85, -88');
  }
  return $query;
}

add_filter('pre_get_posts', 'exclude_category_home');

/* Disable the emoji's */
/*function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );*/

/* Limit image upload size */
function greenbitacora_max_image_size($file)
{
  $size = $file['size'];
  $size = $size / 1024;
  $type = $file['type'];
  $is_image = strpos($type, 'image') !== false;
  $limit = 1024; /* 1024 kb */
  $limit_output = '1MB';
  if ($is_image && $size > $limit) {
    $file['error'] = 'Images must be smaller than ' . $limit_output;
  } //end if
  return $file;
} //end nelio_max_image_size()
add_filter('wp_handle_upload_prefilter', 'greenbitacora_max_image_size');

/* Enable upload for webp image files */
function webp_upload_mimes($existing_mimes)
{
  $existing_mimes['webp'] = 'image/webp';
  return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

/* Enable preview / thumbnail for webp image files */
function webp_is_displayable($result, $path)
{
  if ($result === false) {
    $displayable_image_types = array(IMAGETYPE_WEBP);
    $info = @getimagesize($path);

    if (empty($info)) {
      $result = false;
    } elseif (!in_array($info[2], $displayable_image_types)) {
      $result = false;
    } else {
      $result = true;
    }
  }

  return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);


/* Enqueues scripts and styles */
function greenbitacora_scripts()
{

  // Add main css file
  wp_enqueue_style('style', get_stylesheet_uri());

  // Add pages css
  if (is_page('')) {
    wp_enqueue_style('pages-style', get_template_directory_uri() . '/css/pages-style.css');
  }

  // Add posts css
  if (is_single('')) {
    wp_enqueue_style('posts-style', get_template_directory_uri() . '/css/posts-style.css');
  }

  //Add main js file
  wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), null, true);
} // greenbitacora_scripts
add_action('wp_enqueue_scripts', 'greenbitacora_scripts');

//Replace style-login.css with our custom CSS file
function custom_login_css()
{
  wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/css/login.css');
}
add_action('login_enqueue_scripts', 'custom_login_css');

/* Allow HTML in author bio */
//disable WordPress sanitization to allow more than just $allowedtags from /wp-includes/kses.php
remove_filter('pre_user_description', 'wp_filter_kses');
//add sanitization for WordPress posts
add_filter('pre_user_description', 'wp_filter_post_kses');


/* Limit titles length */
function max_title_length($title)
{
  $max = 80; //number of characters
  if (strlen($title) > $max) {
    return substr($title, 0, $max) . " &hellip;";
  } else {
    return $title;
  }
}
add_filter('the_title', 'max_title_length');

/* Post excerpt for search results */
if (!function_exists('greenbitacora_excerpt')) :

  function greenbitacora_excerpt($class = 'post-summary')
  {
    $class = esc_attr($class);

    if (is_search()) :
?>
      <div class="<?php echo $class; ?>">
        <?php the_excerpt(); ?>
      </div>
    <?php
    endif;
  }
endif;

function custom_excerpt_length($length)
{
  return 45; //excerpt max number of words
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

if (!function_exists('greenbitacora_excerpt_more') && !is_admin()) :
  /**
   * Replaces "[...]" (appended to automatically generated excerpts) with ... and
   * a 'Continue reading' link.
   */
  function greenbitacora_excerpt_more()
  {
    $link = sprintf(
      '<a href="%1$s" class="more-link">%2$s</a>',
      esc_url(get_permalink(get_the_ID())),
      /* translators: %s: Name of current post */
      sprintf(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen'), get_the_title(get_the_ID()))
    );
    return ' &hellip; ' . $link;
  }
  add_filter('excerpt_more', 'greenbitacora_excerpt_more', 999);
endif;

add_filter('get_the_excerpt', function ($excerpt, $post) {
  if (has_excerpt($post) && !is_search()) {
    $excerpt_length = apply_filters('excerpt_length', 45);
    $excerpt_more   = apply_filters('excerpt_more', ' ' . '[&hellip;]');
    $excerpt        = wp_trim_words($excerpt, $excerpt_length, $excerpt_more);
  }
  return $excerpt;
}, 10, 2);


/* Register widget areas */
function greenbitacora_widgets_init()
{

  register_sidebar(array(
    'name'          => 'Sidebar widgets',
    'id'            => 'sidebar_right_1',
    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'greenbitacora_widgets_init');

/* Create sharing social media widget */
class greenbitacora_Share_Widget extends WP_Widget
{


  // Set up the widget name and description.
  public function __construct()
  {
    $widget_options = array('classname' => 'share_widget', 'description' => 'Share in social media widget');
    parent::__construct('share_widget', 'Share in Social Media Widget', $widget_options);
  }


  // Create the widget output.
  public function widget($args, $instance)
  {
    global $post;
    $url = get_permalink($post->ID);
    $url = esc_url($url);
    $post_title = str_replace(' ', '%20', get_the_title());


    $widget_title = apply_filters('widget_title', $instance['title']);

    echo $args['before_widget'] . $args['before_title'] . $widget_title . $args['after_title'];

    echo "<div class='facebook share-icon'><a target='_blank' href='http://www.facebook.com/sharer.php?u=" . urlencode($url) . "'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M426.8 64H85.2C73.5 64 64 73.5 64 85.2v341.6c0 11.7 9.5 21.2 21.2 21.2H256V296h-45.9v-56H256v-41.4c0-49.6 34.4-76.6 78.7-76.6 21.2 0 44 1.6 49.3 2.3v51.8h-35.3c-24.1 0-28.7 11.4-28.7 28.2V240h57.4l-7.5 56H320v152h106.8c11.7 0 21.2-9.5 21.2-21.2V85.2c0-11.7-9.5-21.2-21.2-21.2z'/></svg></a></div>";

    echo "<div class='twitter share-icon'><a target='_blank' href='https://twitter.com/share?url=" . urlencode($url) . "'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M492 109.5c-17.4 7.7-36 12.9-55.6 15.3 20-12 35.4-31 42.6-53.6-18.7 11.1-39.4 19.2-61.5 23.5C399.8 75.8 374.6 64 346.8 64c-53.5 0-96.8 43.4-96.8 96.9 0 7.6.8 15 2.5 22.1-80.5-4-151.9-42.6-199.6-101.3-8.3 14.3-13.1 31-13.1 48.7 0 33.6 17.2 63.3 43.2 80.7-16-.4-31-4.8-44-12.1v1.2c0 47 33.4 86.1 77.7 95-8.1 2.2-16.7 3.4-25.5 3.4-6.2 0-12.3-.6-18.2-1.8 12.3 38.5 48.1 66.5 90.5 67.3-33.1 26-74.9 41.5-120.3 41.5-7.8 0-15.5-.5-23.1-1.4C62.8 432 113.7 448 168.3 448 346.6 448 444 300.3 444 172.2c0-4.2-.1-8.4-.3-12.5C462.6 146 479 129 492 109.5z'/></svg></a></div>";

    echo "<div class='linkedin share-icon'><a target='_blank' href='https://www.linkedin.com/shareArticle?mini=true&url=" . urlencode($url) . "&amp;title=" . $post_title . "'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M417.2 64H96.8C79.3 64 64 76.6 64 93.9V415c0 17.4 15.3 32.9 32.8 32.9h320.3c17.6 0 30.8-15.6 30.8-32.9V93.9C448 76.6 434.7 64 417.2 64zM183 384h-55V213h55v171zm-25.6-197h-.4c-17.6 0-29-13.1-29-29.5 0-16.7 11.7-29.5 29.7-29.5s29 12.7 29.4 29.5c0 16.4-11.4 29.5-29.7 29.5zM384 384h-55v-93.5c0-22.4-8-37.7-27.9-37.7-15.2 0-24.2 10.3-28.2 20.3-1.5 3.6-1.9 8.5-1.9 13.5V384h-55V213h55v23.8c8-11.4 20.5-27.8 49.6-27.8 36.1 0 63.4 23.8 63.4 75.1V384z'/></svg></a></div>";

    echo "<div class='email share-icon'><a href='mailto:?subject=" . $post_title . "&amp;body=" . urlencode($url) . "'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z'/></svg></a></div>";

    echo $args['after_widget'];
  }


  // Create the admin area widget settings form.
  public function form($instance)
  {
    $title = !empty($instance['title']) ? $instance['title'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
      <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>" />
    </p><?php
      }


      // Apply settings to the widget instance.
      public function update($new_instance, $old_instance)
      {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
      }
    }

    // Register the widget.
    function greenbitacora_register_share_widget()
    {
      register_widget('greenbitacora_Share_Widget');
    }
    add_action('widgets_init', 'greenbitacora_register_share_widget');


    /* Green Bitacora strings translations */
    try {
      pll_register_string("Last articles", "Last articles");
      pll_register_string("Categorias", "Categorias");
      pll_register_string("Sin resultados", "Sin resultados");
      pll_register_string("Resultados", "Resultados");
      pll_register_string("Previous", "Previous");
      pll_register_string("Next", "Next");
      pll_register_string("Newsletter-footer", "Newsletter-footer");
    } catch (\Throwable $th) {
      //throw $th;
    }
        ?>