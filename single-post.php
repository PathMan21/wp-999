<?php
/**
 * single.php — Affichage d'un article individuel
 */

get_header(); ?>

<section class="container py-5">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article>

            <!-- Titre -->
            <div class="d-flex justify-content: center mb-4">
                <h1><?php the_title(); ?></h1>
            </div>

            <!-- Métadonnées -->
            <div class="mb-3" style="color: var(--link-color-text); font-size: 0.9rem;">
                Publié le <?php the_date(); ?>
                par <?php the_author(); ?>
                dans <?php the_category(', '); ?>
            </div>

            <!-- Image à la une -->
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('small'); ?>"
                     alt="<?php the_title_attribute(); ?>"
                     class="image-rounded w-100 mb-4"
                     style="max-height: 10rem; object-fit: cover;">
            <?php endif; ?>

            <!-- Contenu -->
            <div class="article-content">
                <?php the_content(); ?>
            </div>

            <!-- Navigation article précédent / suivant -->
            <div class="d-flex justify-content-between mt-5">
                <a href="<?php echo get_permalink(get_adjacent_post(false, '', true)); ?>" class="game-slide__btn">
                    ← Article précédent
                </a>
                <a href="<?php echo get_permalink(get_adjacent_post(false, '', false)); ?>" class="game-slide__btn">
                    Article suivant →
                </a>
            </div>

        </article>

    <?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>