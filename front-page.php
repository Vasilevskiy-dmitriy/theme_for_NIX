<?php get_header(); ?>

    <main class="container">
        <div class="row g-5">
            <div class="col-md-8">
                <?php the_content(); ?>
            </div>
            <div class="col-md-4">
                <?php get_sidebar() ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>