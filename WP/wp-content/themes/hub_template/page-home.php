<?php get_header(); ?>
<body id="body">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="main">
        <?php get_template_part('template/page-header');?>

        <section class="moduleHero">
            <div class="wrap grid">
                <div class="col50">
                    <h3>Alguma Tag</h3>
                    <h1>Conheça o mundo da alimentação</h1>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis</h2>
                    <a href="javascript:(0)" class="btn">CTA</a>
                </div>
                <div class="col50">
                    <div class="wrap-img">
                        <img alt="" src="<?php echo PW_THEME_URL; ?>assets/img/placeholder-hero.png">
                    </div>
                </div>

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
                    <div class="left-box">
                        <h1>
                            O Novo Jeito de ser Seguro
                        </h1>
                    </div>
                    <div class="right-box">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam.</p>
                    </div>
                </div>

            </div>
        </section>

        <?php get_footer(); ?>
    </div>

</body>