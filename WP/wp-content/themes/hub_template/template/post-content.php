
                        <div class="content-inter container-style">
                            <a href="<?php the_permalink(); ?>" class="link-loop">
                                <div class="header-post">
                                    <div class="hero-thumb">
                                        <?php echo the_post_thumbnail('index-thumb')?>
                                    </div>
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
                                    <p>
                                        <?php echo excerpt(35); ?>
                                    </p>
                                    

                                </div>
                            </a>
                        </div>