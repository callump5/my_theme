

    <?php get_header() ; ?>


    <div class="container">

   <?php
            if ( is_page('Gallery') ):
                get_template_part( 'gallery' );

            elseif ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                            get_template_part( 'content', get_post_format() );
                    endwhile;
                endif;
        ?>
    </div>


    <?php get_footer() ; ?>

