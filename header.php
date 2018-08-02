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

    <nav class="container navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php wp_nav_menu( array( 'theme_location' => 'new-menu', 'container_class' => 'collapse navbar-collapse navbar-nav  ' ) ); ?>
            </ul>
        </div>
    </nav>

    <script type="text/javascript">
        jQuery('.navbar-nav').attr('id', 'navbarSupportedContent');
    </script>


        <div id="page">
            <div class="front-panel">







