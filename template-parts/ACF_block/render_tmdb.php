<?php

$page = ( !empty( $_GET[ 'pa' ] ) )? $_GET[ 'pa' ] : 1;
$popular   = ( new TMDB_API ( get_field('api_key_moviesdb', 'option') ) )->popular( $page );
?>

<div class="container">
    <h2><?php echo __( 'Популярные фильмы по рейтнгу TMDB', THEME_FN_TEXT_DOMAIN ); ?></h2>
    <div class="container" style="padding: 20px; display: flex; justify-content: space-around;">
        <a href="?pa=<?php echo ($page > 1)? $page - 1 : $page; ?>" type="button" class="btn btn-dark"><?php echo __( 'Previous', THEME_FN_TEXT_DOMAIN ); ?></a>
        <a class="myLink" style="<?php  echo ($page >= 3)? : 'display:none' ; ?>" href="?pa=<?php echo 1; ?>" >1</a>
        <div style="<?php  echo ($page >= 3)? : 'display:none' ; ?>">...</div>
        <a class="myLinkAct" href="?pa=<?php echo $page ; ?>"><?php echo $page; ?></a>
        <a class="myLink" style="<?php echo ( ($page + 1) <= 500 )?:'display:none'; ?>" href="?pa=<?php echo $page + 1; ?>" ><?php echo $page + 1; ?></a>
        <a class="myLink" style="<?php echo ( ($page + 2) <= 500 )?:'display:none'; ?>" href="?pa=<?php echo $page + 2; ?>" ><?php echo $page + 2; ?></a>
        <a class="myLink" style="<?php echo ( ($page + 3) <= 500 )?:'display:none'; ?>" href="?pa=<?php echo $page + 3; ?>" ><?php echo $page + 3; ?></a>
        <a class="myLink" style="<?php echo ( ($page + 4) <= 500 )?:'display:none'; ?>" href="?pa=<?php echo $page + 4; ?>" ><?php echo $page + 4; ?></a>
        <a class="myLink" style="<?php echo ( ($page + 5) <= 500 )?:'display:none'; ?>" href="?pa=<?php echo $page + 5; ?>" ><?php echo $page + 5; ?></a>
        <a href="?pa=<?php echo ($page < 500)? $page + 1 : $page ; ?>" type="button" class="btn btn-dark"><?php echo __( 'Next', THEME_FN_TEXT_DOMAIN ); ?></a>
    </div>
    <div class="row row-cols-4 g-4">
        <?php foreach ( array_slice( $popular->results, 0, 1000 ) as $movie ) : ?>
            <div class="col">
                <div class="card mb-3 h-100">
                    <div class="row g-0">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal"><?php echo $movie->title; ?></h4>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="https://image.tmdb.org/t/p/w500<?php echo $movie->poster_path; ?>"/>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">
                                    <span class="fw-bold"><?php echo __( 'Adult', THEME_FN_TEXT_DOMAIN ); ?>: </span>
                                    <span class="badge <?php echo $movie->adult ? 'bg-warning' : 'bg-info'; ?>">
										<?php echo __( $movie->adult ? 'Yes' : 'No', THEME_FN_TEXT_DOMAIN ); ?>
									</span>
                                </p>
                                <p class="card-text">
                                    <span class="fw-bold"><?php echo __( 'Rating', THEME_FN_TEXT_DOMAIN ); ?>: </span>
                                    <?php echo $movie->vote_average; ?>
                                </p>
                                <p class="card-text">
                                    <span class="fw-bold"><?php echo __( 'Votes', THEME_FN_TEXT_DOMAIN ); ?>: </span>
                                    <?php echo $movie->vote_count; ?>
                                </p>
                                <p class="card-text">
									<span
                                        class="fw-bold"><?php echo __( 'Release date', THEME_FN_TEXT_DOMAIN ); ?>: </span>
                                    <?php echo $movie->release_date; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <h3 style="font-size: 12px; padding: 10px"><?php echo $movie->overview; ?></h3>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="container" style="padding: 20px; display: flex; justify-content: space-around;">
        <a href="?pa=<?php echo ($page > 1)? $page - 1 : $page; ?>" type="button" class="btn btn-dark"><?php echo __( 'Previous', THEME_FN_TEXT_DOMAIN ); ?></a>
        <a class="myLink" style="<?php  echo ($page >= 3)? : 'display:none' ; ?>" href="?pa=<?php echo 1; ?>" >1</a>
        <div style="<?php  echo ($page >= 3)? : 'display:none' ; ?>">...</div>
        <a class="myLinkAct" href="?pa=<?php echo $page ; ?>"><?php echo $page; ?></a>
        <a class="myLink" style="<?php echo ( ($page + 1) <= 500 )?:'display:none'; ?>" href="?pa=<?php echo $page + 1; ?>" ><?php echo $page + 1; ?></a>
        <a class="myLink" style="<?php echo ( ($page + 2) <= 500 )?:'display:none'; ?>" href="?pa=<?php echo $page + 2; ?>" ><?php echo $page + 2; ?></a>
        <a class="myLink" style="<?php echo ( ($page + 3) <= 500 )?:'display:none'; ?>" href="?pa=<?php echo $page + 3; ?>" ><?php echo $page + 3; ?></a>
        <a class="myLink" style="<?php echo ( ($page + 4) <= 500 )?:'display:none'; ?>" href="?pa=<?php echo $page + 4; ?>" ><?php echo $page + 4; ?></a>
        <a class="myLink" style="<?php echo ( ($page + 5) <= 500 )?:'display:none'; ?>" href="?pa=<?php echo $page + 5; ?>" ><?php echo $page + 5; ?></a>
        <a href="?pa=<?php echo ($page < 500)? $page + 1 : $page ; ?>" type="button" class="btn btn-dark"><?php echo __( 'Next', THEME_FN_TEXT_DOMAIN ); ?></a>
    </div>
</div>
