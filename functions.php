<?php
define('TEMPPATH', get_template_directory_uri( ));
define('IMAGES', TEMPPATH . '/assets/imgs');





if (! function_exists('init_polish_theme')) {
    function init_polish_theme ( ) {
        add_theme_support('nav-menus');
        if ( class_exists( 'woocommerce' ) ){
            add_theme_support( 'woocommerce', array(
                'thumbnail_image_width' => 150,
                'single_image_width'    => 300,
        
                'product_grid'          => array(
                    'default_rows'    => 3,
                    'min_rows'        => 2,
                    'max_rows'        => 8,
                    'default_columns' => 4,
                    'min_columns'     => 2,
                    'max_columns'     => 5,
                ),
            ) );
        }
            
 
        register_nav_menus( 
            array(
                'top-menu' => 'Top Menu',
                'footer-menu-1' => 'Footer Menu 1'
            ));


        function enqueue_theme_scripts() {
            wp_register_style('custom_css', TEMPPATH . '/assets/css/main.css' , array(), false, 'all');
            wp_register_script('script', TEMPPATH . '/assets/js/script.js', array(), false, true);
            wp_register_script('uikit', TEMPPATH. '/assets/js/uikit.js', array(), false, false);
            wp_register_script('uikit_icons', TEMPPATH. '/assets/js/uikit-icons.js', array(), false, false);
            
            wp_enqueue_script('script');
            wp_enqueue_script('jquery');
            wp_enqueue_script('uikit');
            wp_enqueue_script('uikit_icons');
            wp_enqueue_style('custom_css');
        }
        add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');
        // function load_js() {
        //     wp_register_script(, $src, $deps, $in_footer);
        // }
        
    }
}

add_action('after_setup_theme', 'init_polish_theme');

?>