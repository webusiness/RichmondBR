<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php

    global $page, $paged;

    wp_title( '|', true, 'right' );

    bloginfo( 'name' );

    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";

    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );

    ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="author" href="humans.txt" />

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.maximage.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/screen.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/kickstart.css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/meanmenu.css" media="all" />

<link href="<?php bloginfo('template_directory'); ?>/css/custom.css" rel="stylesheet">
<!-- Owl Carousel Assets -->
<link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.meanmenu.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5gallery.js"></script>


</head>

<body>
<div class="cabecera">
    <header>
        <div class="row grid" id="cabeh">
            <div class="col_3">
                <a href="<?php echo home_url(); ?>" class="float-shadow"><img src="<?php bloginfo('template_directory'); ?>/images/logo1.png"></a>
            </div>
            <div class="col_3">
                <a href="<?php echo home_url(); ?>" class="float-shadow"><img src="<?php bloginfo('template_directory'); ?>/images/logo2.png"></a>
            </div>
            <div class="col_6 lastgrid">
                <div class="telefono"><?php dynamic_sidebar( 'pbx' ); ?>
                    <li>
                        <form role="search" method="get" id="search" action="<?php echo home_url( '/' ); ?>">
                            <input type="text" name="s"  placeholder="Buscar" />
                        </form>
                    </li>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </header>
</div>
<div class="row grid" id="menuheader">
    <div class="col_6">
    </div>
    <div class="col_6 lastgrid">
        <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to the 'starkers_menu' function which can be found in functions.php.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
        <?php wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>
    </div>
</div>
<div class="clearfix"></div>