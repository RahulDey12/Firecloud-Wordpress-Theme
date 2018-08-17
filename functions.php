<?php
    //Files
    include (get_template_directory() . "/inc/customizer.php");
    include (get_template_directory() . "/inc/hooks.php");
    include (get_template_directory() . "/inc/head.php");

    if(! function_exists('firecloud_setup')):

        function firecloud_setup () {
            //Custom Logo
            add_theme_support('custom-logo', array(
                "height"    =>  100,
                "width"     => 400,
                "flex-height"   =>  true,
                "flex-width"    =>  true,
                "header-text"   =>  array('site-title', 'site-description')
            ));
            //Title Tag
            add_theme_support('title-tag');
            //Widgets In Customizer
            add_theme_support('customize-selective-refresh-widgets');

            //Menu Register
            register_nav_menus(array(
                'main-menu'     =>  __("Main Menu"),
                'footer-menu'   =>  __("Footer Menu")
            ));

            // Post Thumbnail Support
            add_theme_support('post-thumbnails');
            set_post_thumbnail_size( 546, 362, $crop = true );
        }
    endif;
    add_action('after_setup_theme', 'firecloud_setup');

    //Scrips
    function firecloud_all_scripts() {
        //All Stylesheets
        wp_enqueue_style('main-style', get_template_directory_uri().'/style.css',false, "1.0");
        wp_enqueue_style('Basic Styles', get_template_directory_uri().'/assets/css/basic.css',false, "1.0");
        wp_enqueue_style('owl-carousel-css', get_template_directory_uri().'/assets/css/owl.carousel.min.css',false, "1.0");
        //All Javascripts
        wp_enqueue_script('owl-carousel-js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), '1.0', true);

        if(is_front_page()) {
            wp_enqueue_script('waypoints.js', get_template_directory_uri().'/assets/js/jquery.waypoints.min.js', array(), '1.0', true);
            wp_enqueue_script('counterup.js', get_template_directory_uri().'/assets/js/counterup.js', array(), '1.0', true);
        }
        //Custom own Javascripts always have to be bottom
        wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array(), '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'firecloud_all_scripts');

    //Navigation Class of navbar
    if (! function_exists('firecloud_navigation_css_class')):

        function firecloud_navigation_css_class($classes, $item) {
            $classes[] = 'nav-item';
            return $classes;
        }

    endif;
    add_filter('nav_menu_css_class', 'firecloud_navigation_css_class', 10, 2);

    //Rest Api Hook
    add_action('rest_api_content', 'get_rest_api_contents', 10, 2);

    //Removing Wordpress Version
    remove_action('wp_head', 'wp_generator');


    add_action('customize_register', 'fc_customize_register');
    add_action('wp_head', 'fc_custom_head');

    //Beta Alert
    function beta_alert() { ?>
        <div class="notice notice-success is-dismissible">
            <p><?php _e('You Have Installed Beta Version Of FireCloud Awesome !!', 'Firecloud_notice') ?></p>
        </div>
    <?php }

    add_action ('admin_notices', 'beta_alert');
?>
