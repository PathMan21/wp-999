<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white border-bottom shadow-sm ">
    <div class="container">
        <a class="navbar-brand site-branding" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#site-menu" aria-controls="site-menu" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'theme_999'); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse justify-content-center" id="site-menu">

                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'navbar-nav d-flex flex-row gap-4 align-items-center',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ]);
                } else {
                    $pages = wp_list_pages([
                        'title_li' => '',
                        'echo' => false,
                        'depth' => 1,
                    ]);

                    if ($pages) {
                        echo '<ul class="navbar-nav d-flex flex-row gap-4 align-items-center">' . $pages . '</ul>';
                    }
                }
                ?>

            </div>
    </div>
</nav>
