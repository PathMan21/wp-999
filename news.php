<?php
/**
 * Template Name: news-template
 */

get_header();
?>

<main class="container py-5">

<?php
$query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 10,
    'paged'          => get_query_var('paged') ? get_query_var('paged') : 1
]);
?>

<?php if ($query->have_posts()) : ?>

<div class="row g-4">

<?php
while ($query->have_posts()) :
$query->the_post();
?>

<div class="col-12 col-md-6 col-lg-4">

    <article class="card h-100">

        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url('medium'); ?>" 
                     class="card-img-top" 
                     alt="<?php the_title_attribute(); ?>">
            </a>
        <?php endif; ?>

        <div class="card-body cardStyle">

            <h5 class="card-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h5>

            <p class="card-text">
                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
            </p>
             <a href="<?php the_permalink(); ?>">
            <div class="radio-wrapper">     
                <input class="input" name="btn" id="value-1" type="radio" />
                <div class="btn">
                <span aria-hidden=""></span>Lire
                <span class="btn__glitch" aria-hidden="">Lire</span>
                <label class="number">1</label>
                </div>
            </div></a>


        </div>

    </article>

</div>

<?php endwhile; ?>

</div>

<?php else : ?>

<div class="text-center py-5">
    <h2>Aucun article trouvé</h2>
    <p>Le flux est vide...</p>
</div>

<?php endif; ?>

<?php wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>