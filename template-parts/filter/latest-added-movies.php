<?php
$latest_added = get_posts( [
    'post_type' => 'movie',
    'orderby'   => 'publish_date',
    'order'     => 'DESC',
] );
?>
<style>
    .row-title {
        border: 1px solid white;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 7px;
        text-align: center;
    }
    .link_movie{
        text-decoration: none;
        color: white;
        font-weight: bold;
        border-bottom: 1px solid white;
    }
    .p-4.rounded {
        background: #212529;
    }
    h4.fst-italic {
        color: white;
        text-align: center;
    }
    .img_last{
        margin-top: 10px;
        width: 100%;
        height: auto;
    }
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