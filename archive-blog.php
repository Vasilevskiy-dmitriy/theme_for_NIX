<?php get_header(); ?>

<main class="container">
    <div class="row mb-3">
        <div class="col-md-3">
            <?php get_template_part( '/template-parts/filter/blog-filter' ) ?>
        </div>
        <div class="col-md-9">
        <?php while ( have_posts() ): the_post(); ?>
            <div class="col-md-12 mb-2">
                    <div class="card">
                        <div class="card-header">
                            <?php the_terms( $post->ID, 'blog' ,  ' ' ); ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Читать дальше</a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php the_time('M d'); ?>
                        </div>
                    </div>
            </div>
        <?php endwhile;?>
        </div>
</main>

<?php get_footer() ?>
