<!DOCTYPE html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?php bloginfo('name'); ?></title>
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
    </style>
    <?php wp_head(); ?>

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
</head>


<!--Header-->

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
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </header>


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Меню</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">На главную</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/blog" >Блог</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Категории</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <?php wp_nav_menu(['items_wrap' => '%3$s']); ?>
<!--                            <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                            <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--                            <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                        </ul>
                    </li>

                </ul>
                <form>
                    <input class="form-control" type="text" placeholder="Поиск" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>



<!--    <div class="nav-scroller py-1 mb-2">-->
            <?php //wp_nav_menu(
//                    [
//                        'menu'              => 'Header_menu', // ID, имя или ярлык меню
//                        'menu_class'        => 'nav d-flex justify-content-between', // класс элемента <ul>
//                        'menu_id'           => '' , // id элемента <ul>
//                        'echo'              => true, // вывести или вернуть
//                        'items_wrap'        => '<div id="%1$s" class="%2$s">%3$s</div>',
//                    ]
//            );
            ?>
            <!--            <a class="p-2 link-secondary" href="#">World</a>-->
    </div>
</div>

