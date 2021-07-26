<?php get_header(); ?>
<body id="body">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="main">
        <?php get_template_part('template/page-header');?>

        <section class="moduleHero">
            <div class="wrap grid">
                <?php if(get_field('hero_home', 'option')): $i = 0; ?>
                    <?php while(has_sub_field('hero_home', 'option')): $i++; ?>
                        <div class="col50">
                            <?php the_sub_field('texto'); ?>

                            <?php while(has_sub_field('link_cta', 'option')): $i++; ?>
                                <a href="<?php the_sub_field('link'); ?>" class="btn"><?php the_sub_field('nome'); ?></a>
                            <?php endwhile; ?>
                            
                        </div>
                        <div class="col50">
                            <div class="wrap-img">
                                <img alt="" src="<?php the_sub_field('imagem'); ?>">
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <div class="bg"></div>
        </section>

        <section class="moduleCategorias">
            <div class="wrap">
                <div class="title-box">
                    <h1>Nossas categorias</h1>
                </div>
    
                <div class="cats-wrap">
                <!-- Plugin usado https://br.wordpress.org/plugins/categories-images/#installation -->
                <?php foreach (get_categories() as $cat) : ?>

                    <a href="<?php echo get_category_link($cat->term_id); ?>" class="cat-box">
                    
                        <div class="wrap-title" style="background: url(<?php echo z_taxonomy_image_url($cat->term_id); ?>) no-repeat;">
    
                            <p><?php echo $cat->cat_name; ?></p>
    
                        </div>
                    </a>

                <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="moduleBanners">
            <div class="wrap grid">

                <div class="container-style cont">
                <?php if(get_field('banner_home', 'option')): $i = 0; ?>
                    <?php while(has_sub_field('banner_home', 'option')): $i++; ?>

                        <div class="left-box">
                            <h1>
                                <?php the_sub_field('texto_esquerdo'); ?>
                            </h1>
                        </div>
                        <div class="right-box">
                            <p><?php the_sub_field('texto_direito'); ?></p>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                </div>

            </div>
        </section>

        <?php get_footer(); ?>
    </div>

</body>