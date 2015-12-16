<?php
/*
 * Vars
 */
$meta_boxes = array( );
$prefix = 'cs_';

/*
 * Includes
 */
include TEMPLATEPATH . '/functions/cs_page_extended.php';

/*
 * Action hooks
 */
add_action('after_setup_theme', 'theme_setup' );
add_action('admin_init', 'cs_register_meta_boxes' );
add_action('admin_head', 'cs_admin_head');
remove_action( 'wp_head', 'feed_links', 2 ); // remove post + comments feed
remove_action( 'wp_head', 'feed_links_extra', 3 ); // remove the links to the extra feeds such as category feeds

/*
 * Basic Theme Setup
 */
function theme_setup() {
    
    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style('css/editor-style.css');
    
    // Disable the theme / plugin text editor in Admin
    define('DISALLOW_FILE_EDIT', true);
    
    // restrict RTE
    function change_mce_options( $init ) {
        $init['theme_advanced_blockformats'] = 'p,h2,h3,h4';
        $init['theme_advanced_disable'] = 'forecolor';
        //$init['theme_advanced_styles'] = 'Box=well';
        
        // Define the style_formats array
        $style_formats = array(  
          // Each array child is a format with it's own settings
          array(  
            'title' => 'Box',  
            'block' => 'div',  
            'classes' => 'well well-small',
            'wrapper' => true,
          ),
          array(  
            'title' => 'Autor',  
            'inline' => 'small',  
            'classes' => 'autor muted',
            //'wrapper' => true,
          ),  
        );  
        // Insert the array, JSON ENCODED, into 'style_formats'
        $init['style_formats'] = json_encode( $style_formats );  
  
        return $init;
    }
    add_filter('tiny_mce_before_init', 'change_mce_options');
    
         
    function change_mce_buttons($buttons){
      array_unshift( $buttons, 'styleselect' );
      return $buttons;
    }
    add_filter( 'mce_buttons_2', 'change_mce_buttons' );
    
    // Post Thumbnails
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 784, 441, true );
    add_image_size( 'reference-preview', 260, 200, true );
    
    // sidebars
    register_sidebar(array(
      'name' => 'Sidebar',
      'id' => 'sidebar-widgets',
      'description' => 'Widget Area in der Sidebar',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '',
      'after_title' => ''
    ));
       
    // remove brackets from excerpt
    add_filter('excerpt_more', 'new_excerpt_more');
    
    // menus
    register_nav_menus( array(
        'main'    => 'Globale Navigation',
        'toc'     => 'Inhaltsverzeichnis',
        'footer'  => 'Footer-Navigation'
    ));
    
}

/*
 * Custom Functions
 */
function cs_register_meta_boxes(){
    global $meta_boxes;

    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if ( class_exists( 'RW_Meta_Box' ) ) {
        foreach ( $meta_boxes as $meta_box ) {
            new RW_Meta_Box( $meta_box );
        }
    }
}

 /* =============================================================================
 Function: add bootstrap class to cf7
 ========================================================================== */
add_filter( 'wpcf7_form_class_attr', 'bootstrap_form_class' );
function bootstrap_form_class( $class ) {
  $class .= ' form-horizontal';
  return $class;
}

 
 /* =============================================================================
 Function: Get page URL by Slug
 ========================================================================== */
function get_page_link_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page){
        return get_permalink( $page->ID );
    }
    else {
        return '#';
    }
}

/* =============================================================================
   Function: Real separator for wp_nav_menu
   ========================================================================== */
function nav_menu_first_last( $items ) {
    $position = strrpos($items, 'class="menu-item', -1);
    $items = substr_replace($items, 'menu-item-last ', $position+7, 0);
    $position = strpos($items, 'class="menu-item');
    $items = substr_replace($items, 'menu-item-first ', $position+7, 0);
    return $items;
}
add_filter( 'wp_nav_menu_items', 'nav_menu_first_last' );

 // make current menu item comaptible with bootstraps active class
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
} 

// remove brackets from excerpt
function new_excerpt_more($more) {
    // no brackets, please
    return '&hellip;';
}

// add custom styles to admin panel
function cs_admin_head() {
    ?>
<style type="text/css">
    .mb-medium input {
        min-width: 100px;
        width: 40%;
    }
    .mb-large input {
        min-width: 100px;
        width: 60%;
    }
</style>
<?php
}

// Customise the footer in admin area
function wpfme_footer_admin () {
    echo 'Theme developed by <a href="http://herr-schuessler.de" target="_blank">Christoph Schüßler</a> and powered by <a href="http://wordpress.org" target="_blank">WordPress</a>.';
}
add_filter('admin_footer_text', 'wpfme_footer_admin');