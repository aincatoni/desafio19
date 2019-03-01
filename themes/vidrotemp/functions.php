
<?php
 
 add_theme_support( "post-thumbnails" );

function register_enqueue_style() {
    $theme_data = wp_get_theme();

    /* Registrando estilos */
    wp_register_style('bootstrap',
    get_parent_theme_file_uri('/assets/css/bootstrap.css'), null, '1.0.0', 'screen');
    wp_register_style('animate',
    get_parent_theme_file_uri('/assets/css/animate.css'), null, '1.0.0', 'screen');
    wp_register_style('icomoon',
    get_parent_theme_file_uri('/assets/css/icomoon.css'), null, '1.0.0', 'screen');
    wp_register_style('themifyIcons',
    get_parent_theme_file_uri('/assets/css/themify-icons.css'), null, '1.0.0', 'screen');
    wp_register_style('bootstrap',
    get_parent_theme_file_uri('/assets/css/bootstrap.css'), null, '1.0.0', 'screen');
    wp_register_style('owlCarouselMin',
    get_parent_theme_file_uri('/assets/css/owl.carousel.min.css'), null, '1.0.0', 'screen');
    wp_register_style('owlThemeDefaultMin',
    get_parent_theme_file_uri('/assets/css/owl.theme.default.min.css'), null, '1.0.0', 'screen');
    wp_register_style('main',
    get_parent_theme_file_uri('/assets/css/style.css'), null, '1.0.0', 'screen');


     /* Enqueue scripts */
     wp_enqueue_style('bootstrap');
     wp_enqueue_style('googleFont');
     wp_enqueue_style('animate');
     wp_enqueue_style('icomoon');
     wp_enqueue_style('themifyIcons'); 
     wp_enqueue_style('owlCarouselMin');
     wp_enqueue_style('owlThemeDefaultMin');
     wp_enqueue_style('main');

    }

    add_action( 'wp_enqueue_scripts', 'register_enqueue_style');

    // REGISTRO DE SCRIPTS
    
    
    function register_enqueue_scripts(){
        $theme_data = wp_get_theme();

        /* Deregister Scripts */
        //wp_deregister_script('jquery');
        //wp_deregister_script('jquery-migrate');
    


    /* Registrando Scripts */
    wp_register_script('jQuery',
    get_parent_theme_file_uri('/assets/js/jquery.min.js'), null, '3.3.1', true);
    wp_register_script('jQuery_easing',
    get_parent_theme_file_uri('/assets/js/jquery.easing.1.3.js'), array('jQuery'), '1.3.1', true);
    wp_register_script('bootstrap',
    get_parent_theme_file_uri('/assets/js/bootstrap.min.js'), null, '1.0.0', true);
    wp_register_script('bootstrap',
    get_parent_theme_file_uri('/assets/js/bootstrap.min.js'), null, '1.0.0', true);
    
    
    /* Enqueue scripts */
    wp_enqueue_script('jQuery');
    wp_enqueue_script('jQuery_easing');
    wp_enqueue_script('bootstrap');

}
    

    add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts');

?>








