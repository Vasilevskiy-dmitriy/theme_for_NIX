<?php $image = get_field( 'image_slider' ); ?>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    * Гениальное решение
    <?php $quantity_img = count($image) - 1; ?>
    <div class="carousel-inner">
        <?php for ( $i = 0; $i <= $quantity_img;  $i++  ): ?>
        <div class="<?php if($i === 0){ echo 'carousel-item active'; } else { echo 'carousel-item'; }?>">
            <div style="background: #212529; width:100%; height:500px; text-align: center ">
                <img width="auto" height="500px" src="<?php echo $image[ $i ][ 'url' ]; ?>">
            </div>
        </div>
        <?php endfor; ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



