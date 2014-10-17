<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title><?php wp_title( '|', true, 'right' ); ?></title>


<!-- purecss.io stuff -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/pure-min.css" type="text/css" media="screen" />

<!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layouts/side-menu-old-ie.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layouts/side-menu.css">
<!--<![endif]-->

  
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
    

    <?php 

$defaults = array(
    'theme_location'  => 'primary',
    'menu'            => '',
    'container'       => 'div',
    'container_class' => 'pure-menu pure-menu-open',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
);

wp_nav_menu( $defaults );

     ?>    

</div>


    <div id="main">
        <div class="header">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2><?php bloginfo( 'description' ); ?></h2>
        </div>

        <div class="content">