<?php get_header() ?>

<main class="container">
    <div class="row mb-2">
        <?php while ( have_posts() ): the_post(); ?>
            <div class="col-md-12">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"><?php the_terms( $post->ID, 'blog' ,  ' ' ); ?></strong>
                        <h3 class="mb-0"><?php the_title(); ?></h3>
                        <div class="mb-1 text-muted"><?php the_time( 'M d' ); ?></div>
                        <p class="card-text mb-auto"><?php the_content();?></p>
                        <div class="custom_meta_blog">
                            <div class="meta_for_blog">Актуальность записи: <?php echo get_field( 'Актуальность записи' ); ?></div>
                            <div class="meta_for_blog">Ожидаемое количество просмотров: <?php echo get_field( 'Ожидаемое количество просмотров' ); ?></div>
                            <div class="meta_for_blog">Лимит слов: <?php echo get_field( 'Лимит слов' ); ?></div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="position-sticky" style="top: 2rem;">
                            <?php echo get_template_part( 'template-parts/filter/latest-added-blog' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile;?>
    </div>
</main>

<?php get_footer() ?>
