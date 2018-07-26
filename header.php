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
                <a class="navbar-brand" href="#">My Theme</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <?php wp_list_pages('title_li=') ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page">








