

    <?php get_header() ; ?>


    <div class="front-panel container">
        <?php
            $wp_query->set('posts_per_page', 3);
            $wp_query->query($wp_query->query_vars); ?>


        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
        ?>

        <div class="front-post col-sm-4 fade-out">
            <h1><?php the_title() ; ?> </h1>
            <?php the_content() ; ?>

        </div>

        <?php
                } // end while
            } // end if
        ?>
    </div>


    <?php get_footer() ; ?>