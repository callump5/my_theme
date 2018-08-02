
    <?php get_header() ; ?>


   <?php
    if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                            get_template_part( 'template_parts/single-content', get_post_format() );
                    endwhile;
                endif;
    ?>

    <?php get_footer() ; ?>

    <script type="text/javascript">

        jQuery('.post-content').each(function () {
            jQuery(this).find('img').appendTo(this);
            jQuery(this).find('p').appendTo(jQuery('.post-txt'));
            jQuery(this).find('img').appendTo(jQuery('.post-img'));
        })
</script>