<?php /* Template Name: Blog */ ?>

<?php
    $home = get_template_directory_uri();
    get_header();
?>

<section class="section-slider-carousel slider-section7">
    <div class="image-loader spinner-image">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <div class="slider-carousel slider-carousel-7">
        <div class="item">
            <div class="post-box">
                <img width="1164" height="500" src="https://corsolar.com.br/wp-content/uploads/2022/06/banner-01.jpg" class="attachment-minimag_1164_500 size-minimag_1164_500 wp-post-image" alt="">
                    <div class="entry-content">
                        <span class="post-category">
                            <a href="/category/energia/" rel="category tag" tabindex="-1">Energia</a>
                        </span>
                        <h3>
                            <a href="/category/energia/" title="Lorem ipsum" tabindex="-1">Lorem ipsum</a>
                        </h3>
                        <a href="/category/energia/" title="Read More" tabindex="-1">
                            Leia mais
                        </a>
                    </div>                
            </div>                
        </div>
        <div class="item">
            <div class="post-box">
                <img width="1164" height="500" src="https://corsolar.com.br/wp-content/uploads/2022/06/banner-02.jpg" class="attachment-minimag_1164_500 size-minimag_1164_500 wp-post-image" alt="">
                    <div class="entry-content">
                        <span class="post-category">
                            <a href="/category/energia/" rel="category tag" tabindex="-1">Energia</a>
                        </span>
                        <h3>
                            <a href="/category/energia/" title="Lorem ipsum" tabindex="-1">Lorem ipsum</a>
                        </h3>
                        <a href="/category/energia/" title="Read More" tabindex="-1">
                            Leia mais
                        </a>
                    </div>                
            </div>                
        </div>    
        <div class="item">
            <div class="post-box">
                <img width="1164" height="500" src="https://corsolar.com.br/wp-content/uploads/2022/06/banner-03.jpg" class="attachment-minimag_1164_500 size-minimag_1164_500 wp-post-image" alt="">
                    <div class="entry-content">
                        <span class="post-category">
                            <a href="/category/energia/" rel="category tag" tabindex="-1">Energia</a>
                        </span>
                        <h3>
                            <a href="/category/energia/" title="Lorem ipsum" tabindex="-1">Lorem ipsum</a>
                        </h3>
                        <a href="/category/energia/" title="Read More" tabindex="-1">
                            Leia mais
                        </a>
                    </div>                
            </div>                
        </div>                    
    </div>
</section>

<section class="section-featured-post">
    <div class="container">
        <div class="section-heading">
            <h2 class="title">Energia Solar</h2>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolorum, unde molestias cumque maxime odit consequatur.</p>
        </div>
        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) {
                    while ($loop->have_posts()) {
                        $loop->the_post(); ?>
                        <div class="col-12 col-md-4">
                            <div class="card">
                                <div class="card__image">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <img src="<?php the_post_thumbnail_url(); ?>" loading="lazy" alt="<?php the_title(); ?>" />
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(__('(more…)')); ?></p>
                                    <a href="<?php the_permalink(); ?>" title="Leia mais">Leia mais</a>
                                </div>
                            </div>
                        </div>                  
                    <?php
                    }
                }
            ?>
        </div>
        <!-- <div class="section-button">
            <a href="" class="btn btn-lg btn-primary">Show more</a>
        </div> -->
    </div>
</section>

<section class="section-latest-posts">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="latest__content">
                    <h2 class="title">Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nesciunt at maiores deleniti.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="latest__content">
                    <h2 class="title">Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nesciunt at maiores deleniti.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="latest__content">
                    <h2 class="title">Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nesciunt at maiores deleniti.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-rich-text section-rich-text--testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nesciunt at maiores deleniti rem reprehenderit.</p>
                <span class="caption">Lorem ipsum</span>
            </div>
        </div>
    </div>
</section>

<section class="section-widget-homepage">
    <div class="container">
        <?php if ( dynamic_sidebar('widget_blog_home') ) : else : endif; ?>
    </div>
</section>

<?php get_footer(); ?>