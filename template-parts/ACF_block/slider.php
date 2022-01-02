<?php $image = get_field( 'image_slider' ); ?>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php foreach ( $image as $key => $value ): ?>
        <div class="<?php echo ($key == 0)? 'carousel-item active' :'carousel-item'; ?>">
            <div style="background: #212529; width:100%; height:500px; text-align: center ">
                <img width="auto" height="500px" src="<?php echo $value[ 'url' ]; ?>">
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"><?php echo __( 'Previous', THEME_FN_TEXT_DOMAIN ); ?></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"><?php echo __( 'Next', THEME_FN_TEXT_DOMAIN ); ?></span>
    </button>
</div>



