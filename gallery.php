<?php get_header() ; ?>
<?php
    $front = get_cat_ID('front');
    $category_id = get_cat_ID('Category Name');
    $myquery = array(
    'posts_per_page' => 30,
    'cat' => -$front
    );
    query_posts($myquery);
?>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
?>

<?php get_template_part( 'template_parts/gallery-content', get_post_format() ); ?>

<?php
        } // end while
    } // end if
?>


<?php get_footer() ; ?>


<script type="text/javascript">

    jQuery('.categories').each(function () {
        jQuery(this).find('img').appendTo(this);

        jQuery(this).find('p').remove();

    })

</script>