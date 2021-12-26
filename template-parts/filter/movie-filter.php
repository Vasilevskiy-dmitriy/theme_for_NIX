<script>
    function dynamicChangeNum() {
        var rng=document.getElementById('movie_imdb_rating');
        var p=document.getElementById('one');
        p.innerHTML=rng.value;
    }
</script>

<style>
    input#movie_imdb_rating {
        margin-right: 5px;
    }
</style>

<form action="<?php echo get_post_type_archive_link( 'movie' ); ?>" method="get">
    <div class="mb-3">
        <label for="filter_search" class="form-label">Найти фильм</label>
        <input type="text" name="filter_search" class="form-control" id="filter_search" value="<?php echo $_GET[ 'filter_search' ]; ?>">
    </div>
    <div class="mb-3">
        <label for="filter_views" class="form-label">По времени</label>
        <select name="time" id="time" >
            <option value="" <?php selected( $_GET[ 'time' ], NULL ); ?> ><?php echo  __( 'Не использовать', THEME_FN_TEXT_DOMAIN ); ?></option>
            <option value="60" <?php selected( $_GET[ 'time' ], 60 ); ?> ><?php echo  __( 'До 60', THEME_FN_TEXT_DOMAIN ); ?></option>
            <option value="90" <?php selected( $_GET[ 'time' ], 90 ); ?> ><?php echo  __( 'До 90', THEME_FN_TEXT_DOMAIN ); ?></option>
            <option value="120" <?php selected( $_GET[ 'time' ], 120 ); ?> ><?php echo  __( 'До 120', THEME_FN_TEXT_DOMAIN ); ?></option>
            <option value="999" <?php selected( $_GET[ 'time' ], 999 ); ?> ><?php echo  __( 'Больше', THEME_FN_TEXT_DOMAIN ); ?></option>
        </select>
    </div>
    <div class="mb-3">
        <label for="filter_relevance" class="form-label">Рейтинг выше:</label>
        <div class="d-flex">
            <input type="range" oninput="dynamicChangeNum()" id="movie_imdb_rating" name="movie_imdb_rating" min="0" max="10" value="<?php if(!isset($_GET[ 'movie_imdb_rating' ])){echo 0;}else{ echo $_GET[ 'movie_imdb_rating' ]; } ?>">
            <?php echo "  ";?>
            <div id="one"><?php echo $_GET[ 'movie_imdb_rating' ] ?></div>
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Найти</button>
        <a href="/movie" type="submit" class="btn btn-outline-dark">Сбросить</a>
    </div>
</form>


