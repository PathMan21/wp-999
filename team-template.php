



<?php
/*
  Template Name: equipe-template
*/

get_header(); ?>
<main class="container py-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="mb-5">
            <h1 class="mb-4"><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>