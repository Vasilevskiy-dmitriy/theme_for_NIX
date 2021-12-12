<?php get_header() ?>

<main class="container">
    <div class="row mb-2">
        <?php while ( have_posts() ): the_post(); ?>
            <div class="col-md-12">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"><?php the_category("\n"); ?></strong>
                        <h3 class="mb-0"><?php the_title(); ?></h3>
                        <div class="mb-1 text-muted"><?php the_time('M d'); ?></div>
                        <p class="card-text mb-auto"><?php the_content(); ?></p>
                        <h1></h1>
                    </div>
                    <div class="col-auto d-none d-lg-block">

                    </div>
                </div>
            </div>
        <?php endwhile;?>
    </div>
</main>

<?php get_footer() ?>
