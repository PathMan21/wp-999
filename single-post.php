<?php get_header(); ?>
<main class="container py-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="card shadow-sm mb-5">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
            <?php endif; ?>
            <div class="card-body">
                <h1 class="card-title mb-3"><?php the_title(); ?></h1>
                <p class="text-muted mb-4"><?php echo get_the_date(); ?></p>
                <div class="card-text">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
    <?php endwhile; else : ?>
        <div class="alert alert-warning">Aucun article trouvé.</div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>