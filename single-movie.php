<?php get_header(); ?>

<div class="container">
    <div class="row py-5">
        <div class="col-md-10">
            <?php the_content(); ?>
        </div>
        <div class="col-md-2">
            <div class="position-sticky" style="top: 2rem;">
                <?php echo get_template_part( 'template-parts/filter/latest-added-movies' ); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>