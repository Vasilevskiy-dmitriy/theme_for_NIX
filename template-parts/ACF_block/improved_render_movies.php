<?php
$quantity_movies = get_field( 'quantity_movies' );

$args = array( 'post_type' => "movie", 'posts_per_page' => "$quantity_movies" );
$the_query = new WP_Query( $args );
?>

<style>
    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .feature-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 4rem;
        height: 4rem;
        margin-bottom: 1rem;
        font-size: 2rem;
        color: #fff;
        border-radius: .75rem;
    }

    .icon-link {
        display: inline-flex;
        align-items: center;
    }
    .icon-link > .bi {
        margin-top: .125rem;
        margin-left: .125rem;
        transition: transform .25s ease-in-out;
        fill: currentColor;
    }
    .icon-link:hover > .bi {
        transform: translate(.25rem);
    }

    .icon-square {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 3rem;
        height: 3rem;
        font-size: 1.5rem;
        border-radius: .75rem;
    }

    .rounded-4 { border-radius: .5rem; }
    .rounded-5 { border-radius: 1rem; }

    .text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
    .text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
    .text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

    .card-cover {
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }
    .custom-card{
        display: none;
    }
    .card:hover .custom-card{
        display: flex;
    }
</style>

<div class="container px-4 mb-5" id="custom-cards">
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
            <div class="col" style="height: 320px">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                    <div class="custom-card flex-column h-100 p-5 pb-3 text-white text-shadow-1" style="background: rgba(0,0,0,0.77);" >
                        <h3><?php the_title(); ?></h3>
                        <h4>
                            <a href="<?php the_permalink(); ?>">
                                <button type="button" class="btn btn-outline-success">Читать далее</button>
                            </a>
                        </h4>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                                    <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                                </svg>
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small><?php the_terms( $post->ID, 'categories_movies' ,  ' ' );?></small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-badge-3d-fill" viewBox="0 0 16 16">
                                    <path d="M10.157 5.968h-.844v4.06h.844c1.116 0 1.621-.667 1.621-2.02 0-1.354-.51-2.04-1.621-2.04z"/>
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm5.184 4.368c.646 0 1.055.378 1.06.9.008.537-.427.919-1.086.919-.598-.004-1.037-.325-1.068-.756H3c.03.914.791 1.688 2.153 1.688 1.24 0 2.285-.66 2.272-1.798-.013-.953-.747-1.38-1.292-1.432v-.062c.44-.07 1.125-.527 1.108-1.375-.013-.906-.8-1.57-2.053-1.565-1.31.005-2.043.734-2.074 1.67h1.103c.022-.391.383-.751.936-.751.532 0 .928.33.928.813.004.479-.383.835-.928.835h-.632v.914h.663zM8.126 11h2.189C12.125 11 13 9.893 13 7.985c0-1.894-.861-2.984-2.685-2.984H8.126V11z"/>
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>