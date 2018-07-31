<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Theme</title>

        <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
        <script  type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>


        <link href="https://fonts.googleapis.com/css?family=Cinzel|Courgette|Dancing+Script|Great+Vibes|Poiret+One|Satisfy" rel="stylesheet">

        <?php wp_head(); ?>
    </head>


    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php wp_nav_menu( array( 'theme_location' => 'new-menu', 'container_class' => 'navbar-nav ml-auto' ) ); ?>
            </div>
        </nav>

        <div id="page">


            <?php

        $front = get_cat_ID('front');
        $category_id = get_cat_ID('Category Name');
        $myquery = array(
        'posts_per_page' => 30,
        'cat' => -$front
        );
        query_posts($myquery);

            ?>








