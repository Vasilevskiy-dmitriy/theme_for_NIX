<?php
$image =    get_field( 'image_banner_content' );
$title =    get_field( 'title' );
$subtitle = get_field( 'sub_title' );
?>



<div style="background-image: url('<?php echo $image[ 'url' ]; ?>'); background-size: 100% auto;">
    <div class="p-4 p-md-5 mb-4 text-white" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="col-md-6 px-0">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead mb-0">
                <?php echo $subtitle ?>
            </p>
        </div>
    </div>
</div>

