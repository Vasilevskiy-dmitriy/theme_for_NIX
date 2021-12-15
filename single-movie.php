<?php get_header(); ?>

<div class="container">
    <div class="row py-5">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4">
                    <?php the_post_thumbnail( 'large', [
                        'class' => 'img-fluid',
                    ] ); ?>
                </div>
                <div class="col-md-8">
                    <h2><?php the_title(); ?></h2>
                    <p class="blog-post-meta">
                        <span class="fw-bold ">
                            IMDb:
                        </span>
                        <?php echo get_field('movie_imdb_rating'); ?>
                    </p>
                    <p class="blog-post-meta">
                        <span class="fw-bold">
                            Кинопоиск:
                        </span>
                        <?php echo get_field('movie_kinopoisk_rating'); ?>
                    </p>
                    <p class="blog-post-meta">
                        <span class="fw-bold">
                            Время:
                        </span>
                        <?php echo get_field('time'); ?> мин.
                    </p>
                </div>
            </div>
            <div class="row py-2">
                <div class="col">
                    <article class="blog-post">
                        <h3 class="blog-post-title"></h3>
                        <?php the_content(); ?>
                    </article>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <?php echo get_template_part( 'template-parts/filter/latest-added-movies' ); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>