<?php get_header(); ?>

<body id="body">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="main int page">
        
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
                        <div class="content-inter container-style">
                            <div class="content-post-inner">
                                
                                <?php the_content(); ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        
        <?php get_footer(); ?>
    </div>

</body>

</html>