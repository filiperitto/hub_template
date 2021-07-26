<?php

//require get_template_directory() . '/includes/function-admin.php';


function custom_setup() {

  // Oculta a barra de admin no front
 add_filter('show_admin_bar', '__return_false');

  // Insere a opção de imagens destacadas
  add_theme_support('post-thumbnails');
  add_image_size('hero-thumb', 1231, 494, array('center'));
  add_image_size('sidebar-thumb', 110, 78, array('center'));
  add_image_size('index-thumb', 757, 304, array('center'));

  // Caso seja uma versão anterior ou igual ao 5.0 beta
  //add_filter('gutenberg_can_edit_post', '__return_false', 5);

  add_theme_support('post-formats', array('link'));

  // Caso seja a versão posterior à 5.0
  add_filter('use_block_editor_for_post', '__return_false', 5);
}
add_action('after_setup_theme', 'custom_setup');

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );


function custom_formats_base() {
    wp_register_style('style', PW_THEME_URL . 'assets/css/style.css', null, null, 'all');
    wp_enqueue_style('style');

}
/* Carrega scripts e estilos personalizados */
add_action('wp_enqueue_scripts', 'custom_formats_base');



function wpdocs_enqueue_custom_admin_style() {
  wp_register_style( 'adminedit', PW_THEME_URL . 'assets/css/adminedit.css', false, '1.0.0' );
  wp_enqueue_style( 'adminedit' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );


// Logo login page
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(wp-content/themes/sisou/assets/img/svg/logo.svg);
		height:71px;
		width:200px;
		background-size: 100%;
		background-repeat: no-repeat;
        }
    </style>
<?php 
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );


define('PW_URL', get_home_url()); /* <?php echo PW_URL; ?> */
define('PW_THEME_URL', get_bloginfo('template_url') . '/'); /* <?php echo PW_THEME_URL; ?> */
define('PW_SITE_NAME', get_bloginfo('name')); /* <?php echo PW_SITE_NAME; ?> */
define('PW_SITE_DESCRIPTION', get_bloginfo('description')); /* <?php echo PW_SITE_DESCRIPTION; ?> */


//blog stats

  function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
  }

  function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
      array_pop($content);
      $content = implode(" ",$content).'...';
    } else {
      $content = implode(" ",$content);
    }
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
  }

function cat_edit( $links ) {

  $links = str_replace('</a> (', '<span>', $links);
  $links = str_replace(')', '</span> </a>', $links);

  return $links;

}
add_filter( 'wp_list_categories', 'cat_edit' );

// Sidebar do
function widget_setup() {

  register_sidebar(
      array(
          'name' => 'Sidebar',
          'id' => 'sidebar-1',
          'class' => 'custom',
          'description' => 'Primeiro Sidebar',
          'before_widget' => '<div class="widget-box container-style"><div class="title-widget">',
          'before_title' => '<h4><mark>',
          'after_title' => '</mark></h4></div><div class="body-widget">',
          'after_widget' => '</div></div>',
      )
  );

  register_sidebar(
      array(
          'name' => 'Sidebar Banner',
          'id' => 'sidebar-banner',
          'class' => 'custom',
          'description' => 'Primeiro Sidebar',
          'before_widget' => '<div class="widget-box side-banner container-style">',
          'before_title' => '<h4><mark>',
          'after_title' => '</mark></h4>',
          'after_widget' => '</div>',
      )
  );

}
add_action('widgets_init','widget_setup');


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
    'page_title' 	=> 'Tema Hub',
    'menu_title'	=> 'Tema Hub',
    'menu_slug' 	=> 'hub_template',
    'capability'	=> 'edit_posts',
        'parent_slug'   => '',
        'icon_url'      => '../wp-content/themes/hub_template/assets/img/favicon/favicon-16x16.png', // Add this line and replace the second inverted commas with class of the icon you like
        'position'      => 4,
  ));
    
  acf_add_options_sub_page(array(
  'page_title' 	=> 'Home',
  'menu_title'	=> 'Home',
  'parent_slug'	=> 'theme-settings',
  'capability'	=> 'edit_posts',
      'parent_slug'   => 'hub_template',
  ));
    
}
