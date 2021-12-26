<?php
$latest_added = get_posts( [
    'post_type' => 'movie',
    'orderby'   => 'publish_date',
    'order'     => 'DESC',
] );
?>

<style>
    <?php include 'style_filter.css';?>
</style>

<div class="p-4 rounded">
    <h4 class="fst-italic"><?php echo __( 'Последние фильмы:', THEME_FN_TEXT_DOMAIN ); ?></h4>
    <div class="list-unstyled mb-0">
        <?php foreach ( $latest_added as $blog ): ?>
            <div class="row-title">
                <a class="link_movie" href="<?php echo get_permalink( $blog ); ?>">
                    <?php echo get_the_title( $blog ); ?>
                </a>
                <?php echo get_the_post_thumbnail( $blog, 'large', [ 'class' => 'img_last' ]  );?>
            </div>
        <?php endforeach; ?>
    </ol>
</div>