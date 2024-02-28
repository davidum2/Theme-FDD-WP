<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?> 
</head>
<header  class="site-header FDD-py-0 FDD-px-10 FDD-bg-white/50 FDD-backdrop-blur-sm FDD-z-50 FDD-flex FDD-items-center FDD-fixed FDD-top-0 FDD-w-full FDD-justify-between FDD-shadow-lg">
    <div id="branding" class="FDD-flex">
        <div class="FDD-p-1 FDD-flex FDD-items-center">
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            ?>
        </div>
        <div class="site-info FDD-flex FDD-flex-col FDD-items-center FDD-p-1">
            <h1 class="FDD-font-titulos FDD-text-branding FDD-text-primaryColor FDD-font-bold"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?>
            <span class="FDD-text-secondaryColor">.</span>
        </a></h1>
            <p class="FDD-font-sans  FDD-text-secondaryColor FDD-text-sm"><?php bloginfo( 'description' ); ?></p>
        </div>
    </div>
    <nav class="site-navigation-mobile">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => 'ul',
            'menu_class' => 'navbar'
        ));
        ?>
    </nav>
</header>

<body <?php body_class(); ?>>

<style>
    .custom-logo { /* Asegúrate de que este selector apunte a tu logo */
        width: <?php echo get_theme_mod( 'logo_size', 100 ); ?>px; /* Usa el valor predeterminado definido en add_setting */
    }
</style>
