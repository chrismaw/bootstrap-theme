<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description');?>">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <header class="blog-header pt-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-4 order-md-last text-center text-md-right pb-1 pt-md-1">
                <div class="d-flex flex-md-column justify-content-around">
                    <span>Nashville <span class="d-none d-md-inline">252.462.0025</span><a class="text-info d-md-none" href="tel:2524620025">252.462.0025</a></span>
                    <span>Raleigh <span class="d-none d-md-inline">919.239.4006</span><a class="text-info d-md-none" href="tel:9192394006">919.239.4006</a></span>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <a href="#"><span class="blog-header-logo text-dark">CrossPointe</span><br><span class="text-dark text-no-wrap" style="font-size: 1rem">Biblical&nbsp;Counseling Center</span></a>
            </div>

            <div class="col-md-4 order-md-first text-center text-md-left pb-1 pt-md-1">
            </div>
        </div>
    </header>

    <nav class="navbar navbar-default navbar-expand-md navbar-light bg-white border-bottom pt-3" role="navigation">
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu( array(
        'theme_location'  => 'primary',
        'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'bs-example-navbar-collapse-1',
        'menu_class'      => 'navbar-nav mx-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </nav>

</div>
