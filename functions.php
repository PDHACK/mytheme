// Cargar Navwalker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
<?php
function elements_theme_setup() {
    // Soporte para menús
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'elements-theme')
    ));
// Añadir clases de Bootstrap 5 al menú
    add_bootstrap_classes_to_menu($ulclass) {
return preg_replace('/<a /', '<a class="nav-link" ', $ulclass);
}
add_filter('wp_nav_menu', 'add_bootstrap_classes_to_menu');
    // Soporte para widgets
    register_sidebar(array(
        'name' => __('Footer Social', 'elements-theme'),
        'id' => 'footer-social',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
    ));

    register_sidebar(array(
        'name' => __('Footer Text', 'elements-theme'),
        'id' => 'footer-text',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
    ));

    // Soporte para thumbnails
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'elements_theme_setup');

// Cargar estilos y scripts
function elements_theme_scripts() {
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'elements_theme_scripts');

// Añadir controles personalizados para About
function elements_about_customize($wp_customize) {
    // Sección About
    $wp_customize->add_section('about_section', array(
        'title' => __('About Page Settings', 'elements-theme'),
        'priority' => 30,
    ));

    // Subtítulo
    $wp_customize->add_setting('about_subtitle', array(
        'default' => 'About',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_subtitle', array(
        'label' => __('Subtitle', 'elements-theme'),
        'section' => 'about_section',
        'type' => 'text',
    ));

    // Imagen
    $wp_customize->add_setting('about_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
        'label' => __('About Image', 'elements-theme'),
        'section' => 'about_section',
        'settings' => 'about_image',
    )));
}
add_action('customize_register', 'elements_about_customize');