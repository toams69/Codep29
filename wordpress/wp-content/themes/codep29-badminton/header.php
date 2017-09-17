<?php
/**
 * @package WordPress
 * @subpackage codep29Badminton
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/inc/css/main.css">

        <script src="<?php bloginfo('template_url'); ?>/inc/js/libs/modernizr-2.6.2.min.js"></script>

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        
        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
        
        <?php wp_head(); ?>

    </head>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu(
                array(
                    'menu_class'      => 'navbar-nav mr-auto',
                    'container'       => false,
                    'menu_id'         => 'main-menu',
                    'depth'           => 3,
                    'walker'          => new WP_Bootstrap_Navwalker(),
                )
			); ?>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <body <?php body_class(); ?>>

    	<!--[if lt IE 7]>
    	    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    	<![endif]-->