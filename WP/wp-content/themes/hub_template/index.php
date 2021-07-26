<?php get_header(); ?>

<body id="body">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="main int">
        <?php get_template_part('template/page-header-int');?>

        <section class="moduleSingle">
            <div class="wrap">

                <div class="title-page">
                    
                    <div class="title-box">
                        <h1><?php wp_title(''); ?></h1>
                    </div>
                </div>

                <div class="loop-blog">
                    <div class="post-container">
                        

                        <?php if (have_posts()) : ?>

                            <?php while (have_posts()) : the_post(); ?>
                                

                                <?php get_template_part('template/post-content', get_post_format()); ?>
                                

                            <?php endwhile; ?>
                        <?php else: ?>
                        <p>Nada encontrado :/</p>
                        <?php endif; ?>

                        <div class="btn-box-singlepost int">
                            <?php wp_pagenavi(); ?>
                            <img alt="" src="<?php echo PW_THEME_URL; ?>assets/img/arrow-right.svg">
                        </div>
                    </div>
                     
                    <?php get_template_part('template/sidebar');?>


                </div>

            </div>
        </section>

        <?php get_footer(); ?>
    </div>

</body>

</html>