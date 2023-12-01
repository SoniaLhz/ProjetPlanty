<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>    

        <header id="header-planty" class= "top" role="banner">
            <a class="logo-link" href="http://planty.local/home/">
                <img class="logo" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/image/Logo.png' ); ?>" alt="image du logo Planty">
            </a> 
            <nav id="menu-planty" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
        </header>


<div id="container">
    <main id="content" role="main">