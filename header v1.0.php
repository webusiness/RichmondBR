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
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

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
<link rel="author" href="humans.txt" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
        <script src="html5.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/kickstart.css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/meanmenu.css" media="all" />
<link href="<?php bloginfo('template_directory'); ?>/css/custom.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/owl.theme.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/fondo.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/hover.css" rel="stylesheet">
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js"></script>


<?php
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
    wp_head();
?>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fullscreen.min.js"></script>
    <script>
    $.noConflict();
        jQuery( document ).ready(function( $ ) {
            $('#gallery').fullscreenGallery();
        });
    </script>
    <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.meanmenu.js"></script>
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
            <div class="col_6">
                <div><img src="<?php bloginfo('template_directory'); ?>/images/phoneheader.png"></div>
                <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to the 'starkers_menu' function which can be found in functions.php.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
                <?php wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>
            </div>
            <div class="clearfix"></div>
        </div>



    </header>
</div>