<?php
/**
 * Template Name: news-template
 */

get_header();
?>

<main class="container py-5">

<?php
$allowed_types = [
    'news' => 'News',
    'devlog' => 'Devlog',
    'annexe' => 'Annexe',
];

$current_type = isset($_GET['type']) ? sanitize_text_field($_GET['type']) : 'all';
if ($current_type !== 'all' && ! array_key_exists($current_type, $allowed_types)) {
    $current_type = 'all';
}

$allowed_sorts = [
    'desc' => 'Plus récent en premier',
    'asc' => 'Plus ancien en premier',
];
$current_sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'desc';
if (! array_key_exists($current_sort, $allowed_sorts)) {
    $current_sort = 'desc';
}

$query_args = [
    'post_type'      => 'post',
    'posts_per_page' => 10,
    'orderby'        => 'date',
    'order'          => strtoupper($current_sort),
    'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
];

if ($current_type !== 'all') {
    $query_args['category_name'] = $current_type;
}

$query = new WP_Query($query_args);
?>

<div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
    <div class="btn-group" role="group" aria-label="Filtre type de news">
        <a class="btn btn-outline-primary <?php echo $current_type === 'all' ? 'active' : ''; ?>" href="<?php echo esc_url(remove_query_arg('type')); ?>">
            Tous
        </a>
        <?php foreach ($allowed_types as $slug => $label) : ?>
            <a class="btn btn-outline-primary <?php echo $current_type === $slug ? 'active' : ''; ?>"
               href="<?php echo esc_url(add_query_arg(['type' => $slug, 'paged' => 1])); ?>">
                <?php echo esc_html($label); ?>
            </a>
        <?php endforeach; ?>
    </div>

    <form method="get" class="d-flex w-25 align-items-center gap-3">
        <?php if ($current_type !== 'all') : ?>
            <input type="hidden" name="type" value="<?php echo esc_attr($current_type); ?>">
        <?php endif; ?>
        <label for="sort-select" class="mb-2 w-auto text-nowrap fs-5">Trier</label>
        <select id="sort-select" name="sort" class="form-select form-select-sm w-auto">
            <?php foreach ($allowed_sorts as $value => $label) : ?>
                <option value="<?php echo esc_attr($value); ?>" <?php selected($current_sort, $value); ?>>
                    <?php echo esc_html($label); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="btn btn-primary btn-sm">Appliquer</button>
    </form>
</div>

<?php if ($query->have_posts()) : ?>

<div class="row g-4">
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-12 col-md-6 col-lg-4">
            <?php get_template_part('articles'); ?>
        </div>
    <?php endwhile; ?>
</div>

<?php if ($query->max_num_pages > 1) : ?>
    <nav class="pagination-wrapper mt-4">
        <?php
echo paginate_links([
    'total'     => $query->max_num_pages,
    'current'   => max(1, get_query_var('paged')),
    'format'    => '?paged=%#%',
    'add_args'  => array_filter([
        'type' => $current_type !== 'all' ? $current_type : null,
        'sort' => $current_sort !== 'desc' ? $current_sort : null,
    ]),
    'prev_text' => 'Précédent',
    'next_text' => 'Suivant',
]);
?>
    </nav>
<?php endif; ?>

<?php else : ?>

<div class="text-center py-5">
    <h2>Aucun article trouvé</h2>
</div>

<?php endif; ?>

<?php wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>