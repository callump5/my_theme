
<?php $slug = get_post_field( 'post_name', get_post() ); ?>
<div class="categories col-sm-4">
    <?php $url = get_bloginfo('url'); ?>
    <?php $dash = '/'; ?>
    <h1><a href="<?php echo $url, $dash, $slug ; ?>"><?php the_title() ; ?></a></h1>

    <?php
    the_content();
    ?>
</div>


