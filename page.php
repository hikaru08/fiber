<?php
if(is_page('contact')){
  remove_filter( 'the_contact','wpautop' );
}
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <h2 class="pageTitle"><?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></h2>

        <main class="main">
            <div class="container">
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </main>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>