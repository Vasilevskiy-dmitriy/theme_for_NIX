<?php get_header() ?>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/"><?php bloginfo('name'); ?></a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <?php
            $args = [
                'style'              => 'none',
                'hide_empty'         => 0,
                'exclude'            => 1,
                'separator'          => '',
            ];

            ob_start();

            wp_list_categories($args);

            $customise_content_in_ob = ob_get_contents();

            $arrayFromURI = explode('/', $_SERVER['REQUEST_URI']);

            $search = $arrayFromURI[2];
            $search = $search. '/"';

            $replace = $search . ' ' ."style = 'border-bottom: 1px solid;'";

            $b = str_replace('<a', '<a class="p-2 link-secondary"', $customise_content_in_ob);

            ob_end_clean();

            if(!empty($arrayFromURI[2])){
                echo  str_replace( $search, $replace, $b);
            }else{
                echo $b;
            }
            ?>
            <!--            <a class="p-2 link-secondary" href="#">World</a>-->
        </nav>
    </div>
</div>

<main class="container">
    <div class="row mb-2">
        <?php while ( have_posts() ): the_post(); ?>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"><?php the_category("\n"); ?></strong>
                        <h3 class="mb-0"><?php the_title(); ?></h3>
                        <div class="mb-1 text-muted"><?php the_time('M d'); ?></div>
                        <p class="card-text mb-auto"><?php the_content(); ?></p>
                        <h1></h1>
                    </div>
                    <div class="col-auto d-none d-lg-block">

                    </div>
                </div>
            </div>
        <?php endwhile;?>
    </div>
</main>

<?php get_footer() ?>



