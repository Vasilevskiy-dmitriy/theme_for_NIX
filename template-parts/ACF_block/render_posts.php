<?php

$post_type = get_field( 'select_pt' );
$quantity =  get_field( 'quantity' );

$args = array( 'post_type' => "$post_type", 'posts_per_page' => $quantity );
$the_query = new WP_Query( $args );
?>


   <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
        <div class="col-md-12">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0"><?php the_title(); ?></h3>
                    <div class="mb-1 text-muted"><?php the_time( 'M d' ); ?></div>
                    <h1></h1>
                    <a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">

                </div>
            </div>
        </div>
    <?php endwhile;?>
