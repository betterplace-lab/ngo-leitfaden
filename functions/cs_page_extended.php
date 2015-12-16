<?php
/**
 * New Custom Post Type
 */
function cs_page_extended_register() {
    
    /**
     * Add meta boxes
     */
    global $meta_boxes;
    global $prefix;
    $meta_boxes[] = array(
        'id' => 'add-titles', 
        'title' => 'Header',
        'pages' => array( 'page' ),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name'  => 'Dachzeile',
                'id'    => $prefix . 'dachzeile',
                'type'  => 'text',
                'size'  => '50',
                'class' => 'mb-large',
            ),
        )
    );
    
}
add_action('init', 'cs_page_extended_register');
add_post_type_support( 'page', 'excerpt' );
?>