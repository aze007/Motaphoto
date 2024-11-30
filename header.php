<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header-wrapper">
            <div class="header-container">
                <h1 class="site-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" width="345" height="22">
                    </a>
                </h1>
                <nav class="main-navigation">
                    
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'nav-menu',
                    ));
                    ?>
                    
                    
                </nav>
                <div id="contact-btn">
                      <a href=""><h4>CONTACT</h3></a>
                      </div>

            </div>
        </div>
    </header>
    <img src="<?php echo get_template_directory_uri(); ?>/images/nathalie-11.jpeg" alt="<?php bloginfo('name'); ?>" width="1440" height="962">
