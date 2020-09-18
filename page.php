<?php
if(is_page('contact')){
  remove_filter( 'the_contact','wpautop' );
}
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <h2 class="pageTitle"><?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></h2>
        <div class="page-header">
            <div class="page-header__inner">
                <h1 class="page-header__heading">
                <span>CONTACT</span>
                </h1>
                <span class="page-header__subtitle">お問い合わせ</span>
            </div>
        </div>
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