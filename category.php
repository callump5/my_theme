
    <?php get_header() ; ?>


   <?php
    if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                            get_template_part( 'template_parts/gallery-content', get_post_format() );
                    endwhile;
                endif;
    ?>

    <?php get_footer() ; ?>

<script type="text/javascript">

    jQuery('.categories').each(function () {
        jQuery(this).find('img').appendTo(this);
        jQuery(this).find('p').remove();

    })

</script>