

    <?php get_header() ; ?>


    <?php

        $front = get_cat_ID('front');
        $category_id = get_cat_ID('Category Name');
        $myquery = array(
        'posts_per_page' => 3,
        'cat' => $front
        );
        query_posts($myquery);
    ?>



    <div class="front-panel container">

        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
        ?>

        <?php get_template_part( 'content', get_post_format() ); ?>

        <?php
                } // end while
            } // end if
        ?>
    </div>



    <?php get_footer() ; ?>