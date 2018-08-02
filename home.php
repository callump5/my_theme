
<?php get_header() ; ?>

    <?php

        $uncategorized = get_cat_ID('Uncategorized');
        $category_id = get_cat_ID('Category Name');


    $args = array(
            'taxonomy'           => 'category',
            'hide_empty'         => 0,
            'orderby'            => 'name',
            'order'              => 'ASC',
            'show_count'         => 0,
            'use_desc_for_title' => 0,
            'title_li'           => 0,
            'style'              => '',
            'echo'               => false,
        );
        $cats = wp_list_categories($args);

        foreach( get_categories(['hide_empty' => false]) as $category) {
            echo '<div class="categories col-sm-4">';
            printf( '<h1><a href="category/%s">%s</a></h1>', $category-> slug, $category -> name );

            echo do_shortcode(sprintf('[wp_custom_image_category term_id="%s"]',$category->term_id));
            echo '</div>';
        }
    ?>

<script>
    jQuery('h1:contains("Uncategorized")').parent().remove();
</script>



<?php get_footer() ;  ?>