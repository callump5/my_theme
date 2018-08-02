
<?php $slug = get_post_field( 'post_name', get_post() ); ?>
<div class="post">
    <h1><a href="<?php echo get_permalink() ; ?>"><?php the_title() ; ?></a></h1>
    <div class="post-content">
        <div class="post-img"></div>
        <div class="post-txt"></div>
        <?php
        the_content();
        ?>
    </div>
</div>