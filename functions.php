<?php



function justwentyard_files() {
    
    wp_enqueue_style('google_font_1', 'https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap', [] );
    wp_enqueue_style('google_font_2', 'https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap', [] );
    wp_enqueue_style('google_font_3', 'https://fonts.googleapis.com/css2?family=Oswald&display=swap', [] );
    wp_enqueue_style('google_font_4', 'https://fonts.googleapis.com/css2?family=Lato&display=swap', [] );
    wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap-reboot.css'),  [], microtime());
    wp_enqueue_style('justwentyard-styles', get_stylesheet_uri(), [ 'bootstrap' ], microtime());
    
}
add_action('wp_enqueue_scripts', 'justwentyard_files');



function justwentyard_features(){
    add_theme_support('post-thumbnails');
    add_image_size('small_images', 320, 210, true);

    register_nav_menus(
        [
            'header'    => 'Primary Menu',
            'colophone'  => 'Footer Menu'
        ]
    );
}
add_action('after_setup_theme', 'justwentyard_features');