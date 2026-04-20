<?php get_header(); ?>
<main class="container py-5">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="mb-5">
                <h1 class="h2 mb-3"><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : ?>
                    <p class="lead"><?php the_excerpt(); ?></p>
                <?php endif; ?>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <div class="alert alert-warning">Aucun contenu n'a été trouvé pour le moment.</div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>