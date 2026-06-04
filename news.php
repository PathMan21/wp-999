<?php
/**
 * Template Name: news-template
 */

get_header();
?>

<main class="container py-5">

<?php
$allowed_types = [
    'news'   => ['label' => 'News',   'icon' => '▸'],
    'devlog' => ['label' => 'Devlog', 'icon' => '▸'],
    'annexe' => ['label' => 'Annexe', 'icon' => '▸'],
];

$current_type = isset($_GET['type']) ? sanitize_text_field($_GET['type']) : 'all';
if ($current_type !== 'all' && !array_key_exists($current_type, $allowed_types)) {
    $current_type = 'all';
}

$allowed_sorts = ['desc' => 'Récent', 'asc' => 'Ancien'];
$current_sort  = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'desc';
if (!array_key_exists($current_sort, $allowed_sorts)) $current_sort = 'desc';

$query_args = [
    'post_type'      => 'post',
    'posts_per_page' => 10,
    'orderby'        => 'date',
    'order'          => strtoupper($current_sort),
    'paged'          => get_query_var('paged') ?: 1,
];
if ($current_type !== 'all') $query_args['category_name'] = $current_type;

$query = new WP_Query($query_args);
?>

<div class="cyber-bar">

    <div class="cyber-bar__top">
        <span class="cyber-bar__title">// NEWS_FEED</span>
        <div class="cyber-bar__line"></div>
        <span class="cyber-bar__count">
            <span class="cyber-bar__count-dot"></span>
            <?php echo $query->found_posts; ?> article<?php echo $query->found_posts > 1 ? 's' : ''; ?>
            <?php if ($current_type !== 'all') echo '› ' . esc_html($allowed_types[$current_type]['label']); ?>
        </span>
    </div>

    <div class="cyber-bar__row">

        <!-- Filtres catégories -->
        <nav class="cyber-bar__tags">
            <a class="cyber-tag <?php echo $current_type === 'all' ? 'is-active' : ''; ?>"
               href="<?php echo esc_url(remove_query_arg(['type', 'paged'])); ?>">
                <span class="cyber-tag__bar"></span>ALL
            </a>
            <?php foreach ($allowed_types as $slug => $data) : ?>
                <a class="cyber-tag <?php echo $current_type === $slug ? 'is-active' : ''; ?>"
                   href="<?php echo esc_url(add_query_arg(['type' => $slug, 'paged' => 1])); ?>">
                    <span class="cyber-tag__bar"></span>
                    <?php echo esc_html($data['label']); ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <!-- Tri -->
        <form method="get" class="cyber-bar__sort">
            <?php if ($current_type !== 'all') : ?>
                <input type="hidden" name="type" value="<?php echo esc_attr($current_type); ?>">
            <?php endif; ?>
            <span class="cyber-bar__sort-label">SORT_BY</span>
            <?php foreach ($allowed_sorts as $value => $label) : ?>
                <label class="cyber-sort-btn <?php echo $current_sort === $value ? 'is-active' : ''; ?>">
                    <input type="radio" name="sort" value="<?php echo esc_attr($value); ?>"
                           <?php checked($current_sort, $value); ?>
                           onchange="this.form.submit()">
                    <?php echo $value === 'desc' ? '↓' : '↑'; ?> <?php echo esc_html($label); ?>
                </label>
            <?php endforeach; ?>
        </form>

    </div>

</div>

<!-- Articles -->
<?php if ($query->have_posts()) : ?>
    <div class="row g-4">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-12 col-md-6 col-lg-4">
                <?php get_template_part('articles'); ?>
            </div>
        <?php endwhile; ?>
    </div>

    <?php if ($query->max_num_pages > 1) : ?>
        <nav class="cyber-pagination mt-5">
            <?php echo paginate_links([
                'total'     => $query->max_num_pages,
                'current'   => max(1, get_query_var('paged')),
                'format'    => '?paged=%#%',
                'add_args'  => array_filter([
                    'type' => $current_type !== 'all' ? $current_type : null,
                    'sort' => $current_sort !== 'desc' ? $current_sort : null,
                ]),
                'prev_text' => '← Précédent',
                'next_text' => 'Suivant →',
            ]); ?>
        </nav>
    <?php endif; ?>

<?php else : ?>
    <div class="cyber-empty">
        <p class="cyber-empty__code">// 404</p>
        <p class="cyber-empty__msg">AUCUN ARTICLE TROUVÉ</p>
    </div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>