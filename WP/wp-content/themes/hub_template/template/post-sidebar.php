<?php

/*
@package sisou
---Default Post Format - Post

*/
?>
<a href="<?php the_permalink(); ?>">
        <div class="blog-container">
            <div class="img-wrap">
                <?php echo the_post_thumbnail('sidebar-thumb')?>
            </div>
            <div class="text">
            <h3><?php echo mb_strimwidth(get_the_title(), 0, 60, '...'); ?></h3>
            <p class="date"><?php the_time('l j, M Y'); ?></p>
            </div>
        </div>
    </a>