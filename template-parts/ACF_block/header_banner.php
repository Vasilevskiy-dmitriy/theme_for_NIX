<?php $image = get_field( 'background_img' ); ?>


    <div style="background-image: url('<?php echo $image[ 'url' ]; ?>'); background-size: 100% auto;">
        <div class="p-4 p-md-5 mb-4 text-white rounded" style="background-color: rgba(0, 0, 0, 0.7); ">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic"><?php bloginfo( 'name' ); ?></h1>
                <p class="lead my-3"><?php bloginfo( 'description') ; ?></p>
            </div>
        </div>
    </div>

