<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BLight
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blight' ); ?></a>

    <header class="header">
        <!-- Main Navbar-->
        <nav class="navbar navbar-expand-lg">
            <div class="search-area">
                <div class="search-area-inner d-flex align-items-center justify-content-center">
                    <div class="close-btn"><i class="icon-close"></i></div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                            <form method="get" action="<?php echo home_url(); ?>">
                                <div class="form-group">
                                    <input type="search" name="s" id="search" placeholder="What are you looking for?">
                                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Navbar Brand -->
                <div class="navbar-header d-flex align-items-center justify-content-between">
                    <!-- Navbar Brand --><a href="index.html" class="navbar-brand">Bootstrap Blog</a>
                    <!-- Toggle Button-->
                    <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
                </div>
                <!-- Navbar Menu -->
                <div id="navbarcollapse" class="collapse navbar-collapse">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		                <?php
		                wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'menu-1',
				                'depth'             => 2,
				                'container'         => 'div',
				                'container_class'   => 'ml-auto',
				                'container_id'      => '',
				                'menu_class'        => 'navbar-nav',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
		                );
		                ?>
                    </div>
                    <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
                </div>
            </div>
        </nav>
    </header><!-- #masthead -->

	<div id="content" class="site-content">
