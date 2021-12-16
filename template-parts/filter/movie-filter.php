<script>
    function fun1() {
        var rng=document.getElementById('movie_imdb_rating'); //rng - это Input
        var p=document.getElementById('one'); // p - абзац
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
        <input type="text" name="filter_search" class="form-control" id="filter_search" value="<?php echo $_GET['filter_search']; ?>">
    </div>
    <div class="mb-3">
        <label for="filter_views" class="form-label">По времени</label>
        <select name="time" id="time" >
            <option value="" <?php if( !isset($_GET['time']) ) { echo 'selected'; } else { echo $_GET['time']; } ?> >Не использовать</option>
            <option value="60" <?php if( ($_GET['time']) == 60 ) { echo 'selected'; } ?> >До 60</option>
            <option value="90" <?php if( ($_GET['time']) == 90 ) { echo 'selected'; } ?> >До 90</option>
            <option value="120" <?php if( ($_GET['time']) == 120 ) { echo 'selected'; } ?> >До 120</option>
            <option value="999" <?php if( ($_GET['time']) == 999) { echo 'selected'; } ?> >Больше 120</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="filter_relevance" class="form-label">Рейтинг выше:</label>
        <div class="d-flex">
            <input type="range" oninput="fun1()" id="movie_imdb_rating" name="movie_imdb_rating" min="0" max="10" value="<?php if(!isset($_GET[ 'movie_imdb_rating' ])){echo 0;}else{ echo $_GET[ 'movie_imdb_rating' ]; } ?>">
            <?php echo "  ";?>
            <div id="one"><?php echo $_GET[ 'movie_imdb_rating' ] ?></div>
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Найти</button>
        <a href="/movie" type="submit" class="btn btn-outline-dark">Сбросить</a>
    </div>
</form>


