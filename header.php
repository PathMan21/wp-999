<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>

</head>

<body class="d-flex flex-column min-vh-100">
    <?php wp_body_open(); ?>

    <?php $icone = get_template_directory_uri() . '/assets/logofa/'; ?>

    <!-- Sidebar réseaux sociaux (gauche) -->
    <div class="social-sidebar">

            <a href="https://instagram.com/VOTRE_COMPTE" target="_blank" rel="noopener" class="instagram" title="Instagram">
                <img src="<?= $icone ?>logo_insta.png" alt="Instagram">
            </a>
            <a href="https://www.linkedin.com/company/studio-999/" target="_blank" rel="noopener" class="linkedin" title="Linkedin">
                <img src="<?= $icone ?>logo_linkedin.webp" alt="Linkedin">
            </a>
            <a href="https://instagram.com/VOTRE_COMPTE" target="_blank" rel="noopener" class="instagram" title="Instagram">
                <img src="<?= $icone ?>logo_ytb.png" alt="Instagram">
            </a>
    </div>
    <!-- <div class="scanlines"></div>

<div class="intro-wrap">
    <div class="noise"></div>
    <div class="noise noise-moving"></div>

    <div class="play" data-splitting>PLAY</div>
    <div class="time">--:--</div>
    <div class="recordSpeed">SLP 0:00:00</div>
</div> -->

    <nav class="navbar sticky-top navbar-expand-lg navbar-light navbarCss">
        <div class="container">






            <div class="collapse navbar-collapse justify-content-center mx-6" id="site-menu">
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
                        'include' => '29, 33, 10, 24',
                        'link_after' => '<span class="logofa">
                                <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor">
                                <rect x="6" y="1" width="4" height="2"/>
                                <rect x="4" y="3" width="8" height="2"/>
                                <rect x="3" y="5" width="10" height="2"/>
                                <rect x="4" y="7" width="8" height="2"/>
                                <rect x="5" y="9" width="6" height="2"/>
                                <rect x="6" y="11" width="4" height="2"/>
                                <rect x="7" y="13" width="2" height="2"/>
                                </svg>
                    </span>',
                    ]);
                    if ($pages) {

                        $items = explode('</li>', $pages);
                        $items = array_filter($items);
                        $items = array_values($items);

                        $middle = ceil(count($items) / 2);

                        echo '<ul class="navbar-nav d-flex flex-row gap-4 align-items-center">';

                        // gauche
                        for ($i = 0; $i < $middle - 1; $i++) {
                            echo $items[$i] . '</li>';
                        }


                        // logo
                        echo '<li class="menu-logo">';
                        echo '<a href="' . esc_url(home_url('/')) . '">';
                        echo '<img style="width: 5rem;" src="' . get_template_directory_uri() . '/assets/img/logo.png" alt="Logo">';
                        echo '</a>';
                        echo '</li>';

                        // droite
                        for ($i = $middle - 1; $i < count($items); $i++) {
                            echo $items[$i] . '</li>';
                        }

                        echo '</ul>';
                    }
                }
                ?>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" onchange="toggleDarkmode()" role="switch"
                    id="flexSwitchCheckChecked" checked>
            </div>
        </div>

    </nav>



    <div class="backgroundBlur"></div>