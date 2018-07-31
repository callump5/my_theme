<?php
    $category = get_the_category();
    $the_cat = $category[0]->cat_name;

    $the_string = 'category/'
?>

<div class="front-post col-sm-4">
    <h1 class="front-post-title">
        <a href="
            <?php
                if(strpos($_SERVER['REQUEST_URI'], 'category') !== false)
                    echo the_title();
                else
                    echo $the_string, $the_cat;
            ?>">
            <?php the_title() ; ?>
        </a>
    </h1>
    <p> <?php the_content()?></p>
</div>
