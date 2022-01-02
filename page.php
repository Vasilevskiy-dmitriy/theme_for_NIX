<?php if ( $_SERVER['REQUEST_URI'] == '/likes/' ){
    if( !is_user_logged_in() ){
        wp_redirect( '/'  );
    }
}
?>
<?php get_header(); ?>
<div class="container">
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>

