<?php get_header(); ?>

<body id="body">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="main int">
        <?php get_template_part('template/page-header-int');?>

        <section class="moduleSingle">
            <div class="wrap">

                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>

                            <div class="hero-single container-style">
                                <img alt="" src="<?php echo the_post_thumbnail_url('hero-thumb')?>">
                            </div>

                            <div class="loop-blog">

                                <div class="post-container">

                                    <div class="content-inter container-style">
                                        <div class="header-post">
                                            <div class="info-header">
                                            <?php
                                            $i = 0;
                                            $sep = ', ';
                                            $cats = '';
                                                foreach ( ( get_the_category() ) as $category ) {
                                                    if (0 < $i)
                                                        $cats .= $sep;
                                                    $cats .= $category->cat_name;
                                                    $i++;
                                                }
                                            ?>
                                                <p><?php the_time('l j, M Y'); ?> - <?php echo $cats; ?></p>
                                            </div>
                                            <h1>
                                                <mark><?php the_title() ?></mark>
                                            </h1>
                                        </div>

                                        <div class="content-post-inner">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>

                                    <div class="btn-box-singlepost">
                                        <?php
                                            $prev = get_adjacent_post(false, '', true);
                                            $next = get_adjacent_post(false, '', false);

                                            //use an if to check if anything was returned and if it has, display a link
                                            if ($next) {
                                            $url = get_permalink($next->ID);
                                            echo '
                                            <a href="' . $url . '" class="btn light-color">
                                                <svg width="80" height="24" viewBox="0 0 80 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.939339 10.9393C0.353554 11.5251 0.353554 12.4749 0.939339 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92894 13.1924 1.97919 12.6066 1.3934C12.0208 0.807617 11.0711 0.807617 10.4853 1.3934L0.939339 10.9393ZM80 10.5L2 10.5L2 13.5L80 13.5L80 10.5Z" fill="#ADB5A5"/>
                                                </svg>
                                                    
                                                <mark>Matéria Anterior</mark>
                                            </a>';
                                            }




                                            if ($prev) {
                                                $url = get_permalink($prev->ID);
                                                echo '
                                                <a href="' . $url . '" class="btn light-color">
                                                    <mark>Proxima Matéria</mark>
                                                    <svg width="80" height="24" viewBox="0 0 80 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M79.0607 13.0607C79.6464 12.4749 79.6464 11.5251 79.0607 10.9393L69.5147 1.3934C68.9289 0.807611 67.9792 0.807611 67.3934 1.3934C66.8076 1.97919 66.8076 2.92893 67.3934 3.51472L75.8787 12L67.3934 20.4853C66.8076 21.0711 66.8076 22.0208 67.3934 22.6066C67.9792 23.1924 68.9289 23.1924 69.5147 22.6066L79.0607 13.0607ZM0 13.5H78V10.5H0V13.5Z" fill="#ADB5A5"/>
                                                    </svg>
                                                        
                                                </a>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <?php get_template_part('template/sidebar');?>

                            </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </section>
        
        <?php get_footer(); ?>
    </div>

</body>

</html>


