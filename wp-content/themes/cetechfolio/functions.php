<?php

function cetechz_styles(){
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('bootstrap',get_template_directory_uri()."/assets/bootstrap.min.css");
    wp_enqueue_style('fontawesome',get_template_directory_uri()."/assets/fontawesome/css/all.min.css");
    wp_enqueue_style('animate',get_template_directory_uri()."/assets/lib/animate/animate.min.css");
    wp_enqueue_style('owlcar',get_template_directory_uri()."/assets/lib/owlcarousel/assets/owl.carousel.min.css");
    wp_enqueue_style('lightbox',get_template_directory_uri()."/assets/lib/lightbox/css/lightbox.min.css");

    wp_enqueue_script('jquery',get_template_directory_uri()."/assets/js/jquery.min.js",array(),1.0,true);
    wp_enqueue_script('bootstrap',get_template_directory_uri()."/assets/js/bootstrap.min.js",array(),1.0,true);
    wp_enqueue_script('wow',get_template_directory_uri()."/assets/lib/wow/wow.min.js",array(),1.0,true);
    wp_enqueue_script('typed',get_template_directory_uri()."/assets/lib/typed/typed.min.js",array(),1.0,true);
    wp_enqueue_script('waypoint',get_template_directory_uri()."/assets/lib/waypoints/waypoints.min.js",array(),1.0,true);
    wp_enqueue_script('easing',get_template_directory_uri()."/assets/lib/easing/easing.min.js",array(),1.0,true);
    wp_enqueue_script('main',get_template_directory_uri()."/assets/js/main.js",array(),1.0,true);
}
add_action('wp_enqueue_scripts','cetechz_styles');
