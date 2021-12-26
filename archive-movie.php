<?php get_header(); ?>

    <style>
        a{
            text-decoration: none;
            color: white;
        }
        img.attachment-post-thumbnail.size-post-thumbnail.wp-post-image {
            height: 320px;
            width: 225px;
        }
        h3.mb-0 {
            font-size: 20px;
            width: 192px;
        }
        .col{
            width: auto;
        }
        .btn-group, .btn-group-vertical {
            position: absolute;
            display: inline-flex;
            vertical-align: middle;
            margin-left: -220px;
            margin-top: 300px;
        }
        button.btn.btn-sm.btn-outline-secondary {
            background: #000000;
            color: white;
            font-weight: bold;
        }
        .col-md-3 {
            margin-bottom: 50px;
        }
    </style>

<main>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-3">
                <div class="position-sticky" style="top: 2rem;">
                    <?php get_template_part('template-parts/filter/movie-filter') ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php while ( have_posts() ): the_post(); ?>
                        <div class="col">
                            <a style="text-decoration: none; color: black;" href="<?php the_permalink(); ?>">
                                <div class="card shadow-sm">
                                    <div>
                                        <?php the_post_thumbnail(); ?>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                <?php the_terms( $post->ID, 'categories_movies' ,  ' ' );?>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="mb-0"><?php the_title(); ?></h3>
                                        <p></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted"><?php the_time('d M Y'); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>