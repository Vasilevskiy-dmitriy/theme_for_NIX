<?php
$movie_likes = get_posts( [
    'post_type' => 'movie',
    'orderby'   => 'publish_date',
    'order'     => 'DESC',
] );
?>


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
            <h1>Фильмы которые вам понравились: </h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ( $movie_likes as $movie ): ?>
                <?php  $val = get_user_meta( wp_get_current_user()->ID, $movie->ID ); if( $val[0] == 1): ?>
                    <div class="col">
                        <a style="text-decoration: none; color: black;" href="<?php echo get_permalink( $movie ); ?>">
                            <div class="card shadow-sm">
                                <div>
                                    <?php echo get_the_post_thumbnail( $movie ); ?>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <?php $arr = get_the_terms( $movie->ID, 'categories_movies' ,  ' ' ); echo $arr[0]->name; ?>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-0"><?php echo get_the_title( $movie ); ?></h3>
                                    <p></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted"><?php echo get_the_time( 'd M Y', $movie ); ?></small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <h1>Фильмы которые вам не понравились: </h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ( $movie_likes as $movie ): ?>
                    <?php  $val = get_user_meta( wp_get_current_user()->ID, $movie->ID ); if( $val[0] == 0): ?>
                        <div class="col">
                            <a style="text-decoration: none; color: black;" href="<?php echo get_permalink( $movie ); ?>">
                                <div class="card shadow-sm">
                                    <div>
                                        <?php echo get_the_post_thumbnail( $movie ); ?>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                <?php $arr = get_the_terms( $movie->ID, 'categories_movies' ,  ' ' ); echo $arr[0]->name; ?>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="mb-0"><?php echo get_the_title( $movie ); ?></h3>
                                        <p></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted"><?php echo get_the_time( 'd M Y', $movie ); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>

