<!--
    Template for base pages
 -->

<div class="page-post container">
    <div class="page-content">

        <h1><a href="<?php echo get_permalink() ; ?>"><?php the_title() ; ?></a></h1>

        <?php
        the_content();
        ?>
    </div>
</div>