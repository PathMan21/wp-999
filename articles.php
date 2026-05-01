<?php
/**
 * Template part used to render a single article card in the news page.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card h-100'); ?> >
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'medium')); ?>"
                 class="card-img-top"
                 alt="<?php echo esc_attr(get_the_title()); ?>">
        </a>
    <?php endif; ?>

    <div class="card-body cardStyle">
        <div class="mb-2 text-uppercase text-muted small">
            <?php
            $categories = get_the_category();
            if (! empty($categories)) :
                echo esc_html($categories[0]->name);
            endif;
            ?>
            <span class="text-secondary">—</span>
            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                <?php echo esc_html(get_the_date('j F Y')); ?>
            </time>
        </div>

        <h5 class="card-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h5>

        <p class="card-text">
            <?php echo esc_html(wp_trim_words(get_the_excerpt(), 20, '...')); ?>
        </p>

<a href="<?php echo esc_url(the_permalink()); ?>">
            <div class="radio-wrapper">     
                <input class="input" name="btn" id="value-1" type="radio" onclick="window.location.href='<?php echo esc_url( get_permalink() ); ?>'" />
                <div class="btn">
                <span aria-hidden=""></span>Lire
                <span class="btn__glitch" aria-hidden="">Lire</span>
                <label class="number">1</label>
                </div>
            </div></a>
    </div>
</article>
