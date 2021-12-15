<?php
$latest_added = get_posts( [
    'post_type' => 'movie',
    'orderby'   => 'publish_date',
    'order'     => 'DESC',
] );
?>

<div class="p-4 bg-light rounded">
    <h4 class="fst-italic"><?php echo __( 'Последние фильмы:', THEME_FN_TEXT_DOMAIN ); ?></h4>
    <ol class="list-unstyled mb-0">
        <?php foreach ( $latest_added as $blog ): ?>
            <li>
                <a href="<?php echo get_permalink( $blog ); ?>">
                    <?php echo get_the_title( $blog ); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ol>
</div>