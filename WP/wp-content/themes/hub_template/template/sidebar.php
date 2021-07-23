<div class="sidebar-container">
    <?php get_search_form(); ?>

<div id="post-recent" class="widget-box container-style">

    <div class="title-widget">
        <h4><mark>Materias Recentes</mark></h4>
    </div>
    <?php // WP_Query arguments
        $args = array (
            'post_type'              => array( 'post' ),
            'posts_per_page'         => '3',
            'paged'                  => $paged,
        );

        // The Query
        $query = new WP_Query( $args );
        
        // The Loop
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();?>

            <?php get_template_part('template/post-sidebar', get_post_format()); ?>

        <?php }
        }

        // Restore original Post Data
        wp_reset_postdata();

    ?>
</div>

<?php dynamic_sidebar('sidebar-1'); ?>

<?php dynamic_sidebar('sidebar-banner'); ?>

</div>