<?php
$image             = get_field( 'image_movie' );
$rating_imdb       = get_field( 'rating_imdb' );
$rating_kinopoiskt = get_field( 'rating_kinopoiskt' );
$time              = get_field( 'time' );
$name_film         = get_field( 'name_film' );

?>

<div class="col-md-8">
    <div class="row">
        <div class="col-md-4">
            <?php echo wp_get_attachment_image( $image['ID'], [ 230 ] ); ?>
        </div>
        <div class="col-md-8">
            <h2><?php echo $name_film; ?></h2>
            <p class="blog-post-meta">
                        <span class="fw-bold ">
                            IMDb:
                        </span>
                <?php echo $rating_imdb; ?>
            </p>
            <p class="blog-post-meta">
                        <span class="fw-bold">
                            Кинопоиск:
                        </span>
                <?php echo $rating_kinopoiskt ?>
            </p>
            <p class="blog-post-meta">
                        <span class="fw-bold">
                            Время:
                        </span>
                <?php echo $time; ?> мин.
            </p>
        </div>
    </div>
</div>
