<form action="<?php echo get_post_type_archive_link( 'blog' ); ?>" method="get">
    <div class="mb-3">
        <label for="filter_search" class="form-label">Найти фразу</label>
        <input type="text" name="filter_search" class="form-control" id="filter_search" value="<?php echo $_GET[ 'filter_search' ]; ?>">
    </div>
    <div class="mb-3">
        <label for="filter_views" class="form-label">Ожидаемое количество просмотров</label>
        <select name="filter_views" id="filter_views" >
            <option value="" <?php if( !isset($_GET[ 'filter_views' ]) ) { echo 'selected'; } ?> >Не использовать</option>
            <option value="10000" <?php if( ($_GET[ 'filter_views' ]) == 10000 ) { echo 'selected'; } ?> >10000</option>
            <option value="25000" <?php if( ($_GET[ 'filter_views' ]) == 25000 ) { echo 'selected'; } ?> >25000</option>
            <option value="50000" <?php if( ($_GET[ 'filter_views' ]) == 50000 ) { echo 'selected'; } ?> >50000</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="filter_relevance" class="form-label">Актуальность записи</label>
        <select name="filter_relevance" id="filter_relevance" >
            <option value="" <?php if( !isset($_GET[ 'filter_relevance' ]) ) { echo 'selected'; } ?> >Не использовать</option>
            <option value="Низкая" <?php if( ($_GET[ 'filter_relevance' ]) == 'Низкая' ) { echo 'selected'; } ?> >Низкая</option>
            <option value="Средняя" <?php if( ($_GET[ 'filter_relevance' ]) == 'Средняя' ) { echo 'selected'; } ?> >Средняя</option>
            <option value="Высокая" <?php if( ($_GET[ 'filter_relevance' ]) == 'Высокая' ) { echo 'selected'; } ?> >Высокая</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>