<form action="<?php echo get_post_type_archive_link( 'blog' ); ?>" method="get">
    <div class="mb-3">
        <label for="filter_search" class="form-label">Найти фразу</label>
        <input type="text" name="filter_search" class="form-control" id="filter_search" value="<?php echo $_GET[ 'filter_search' ]; ?>">
    </div>
    <div class="mb-3">
        <label for="filter_views" class="form-label">Ожидаемое количество просмотров</label>
        <select name="filter_views" id="filter_views" >
            <option value="" <?php selected( $_GET[ 'filter_views' ], NULL ); ?>  ><?php echo  __( 'Не использовать', THEME_FN_TEXT_DOMAIN ); ?></option>
            <option value="10000" <?php selected( $_GET[ 'filter_views' ], 10000 ); ?> ><?php echo  __( '10000', THEME_FN_TEXT_DOMAIN ); ?></option>
            <option value="25000" <?php selected( $_GET[ 'filter_views' ], 25000 ); ?>  ><?php echo  __( '25000', THEME_FN_TEXT_DOMAIN ); ?></option>
            <option value="50000" <?php selected( $_GET[ 'filter_views' ], 50000 ); ?>  ><?php echo  __( '50000', THEME_FN_TEXT_DOMAIN ); ?></option>
        </select>
    </div>
    <div class="mb-3">
        <label for="filter_relevance" class="form-label">Актуальность записи</label>
        <select name="filter_relevance" id="filter_relevance" >
            <option value="" <?php selected( $_GET[ 'filter_views' ], NULL ); ?>  ><?php echo  __( 'Не использовать', THEME_FN_TEXT_DOMAIN ); ?></option>
            <option value="Низкая" <?php selected( $_GET[ 'filter_relevance' ], 'Низкая' ); ?> ><?php echo  __( 'Низкая', THEME_FN_TEXT_DOMAIN ); ?></option>
            <option value="Средняя" <?php selected( $_GET[ 'filter_relevance' ], 'Средняя' ); ?> ><?php echo  __( 'Средняя', THEME_FN_TEXT_DOMAIN ); ?></option>
            <option value="Высокая" <?php selected( $_GET[ 'filter_relevance' ], 'Высокая' ); ?> ><?php echo  __( 'Высокая', THEME_FN_TEXT_DOMAIN ); ?></option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>