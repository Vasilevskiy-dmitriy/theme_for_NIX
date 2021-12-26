<?php $image = get_field( 'logo_site', 'option' );?>
<!DOCTYPE html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?php bloginfo( 'name'); ?></title>
    <style>
        ul.dropdown-menu.show{
            padding: 20px;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        img.logoACF {
            height: 50px;
            width: 50px;
            border-radius: 30px;
            margin-right: 10px;
            margin-top: -10px;
        }
    </style>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
</head>


<!--Header-->

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#"><?php echo get_field( 'phone', 'option' ); ?></a>
                <a class="link-secondary" href="#"><?php echo get_field( 'email', 'option' ); ?></a>
            </div>
            <div class="col-4 text-center">
                <?php echo wp_get_attachment_image( $image['ID'], '', '', [ 'class' => 'logoACF' ] ); ?>
                <a class="blog-header-logo text-dark" href="/"><?php bloginfo( 'name' ); ?></a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </header>
    <?php get_template_part( '/template-parts/header/navbar' ) ?>
    </div>
</div>

