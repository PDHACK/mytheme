
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="hero_area">
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
                    <span>ELEMENTS</span>
                </a>
                
                <?php
               wp_nav_menu(array(
                'theme_location'  => 'primary',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarSupportedContent',
                'menu_class'      => 'navbar-nav ml-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
                'depth'           => 2
            ));
            ?>
                
                <div class="quote_btn-container d-flex justify-content-center">
                    <a href="tel:+011234567890">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/call.png" alt="">
                        CALL : +01 1234567890
                    </a>
                    <a href="mailto:demo@gmail.com">
                        <span>@</span>
                        demo@gmail.com
                    </a>
                </div>
            </nav>
        </div>
    </header>
</div>