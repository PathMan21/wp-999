<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>

</head>

<body class="d-flex flex-column min-vh-100">
    <?php wp_body_open(); ?>



    <!-- Sidebar réseaux sociaux (gauche) -->
    <div class="social-sidebar">

        <a href="https://instagram.com/VOTRE_COMPTE" target="_blank" rel="noopener" class="instagram" title="Instagram">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
            </svg>
        </a>
        <a href="https://youtube.com/@VOTRE_CHAINE" target="_blank" rel="noopener" class="youtube" title="YouTube">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
            </svg>
        </a>
        <a href="https://linkedin.com/in/VOTRE_PROFIL" target="_blank" rel="noopener" class="tiktok" title="tiktok">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" fill="currentColor" fillRule="evenodd">
                <path
                    d="M365.014.667C408.68 0 452.011.333 495.342 0c2.667 51 21 102.999 58.33 138.998 37.332 37 89.997 54 141.328 59.666v134.332c-47.998-1.667-96.33-11.667-139.994-32.333-19-8.667-36.665-19.667-53.998-31-.333 97.332.334 194.665-.666 291.663-2.667 46.666-18 93-44.998 131.332-43.665 64-119.328 105.665-196.992 106.999-47.664 2.666-95.329-10.334-135.994-34.333C55.028 725.658 7.696 652.992.697 574.993c-.667-16.667-1-33.333-.334-49.666 6-63.333 37.332-123.999 85.997-165.332 55.33-47.999 132.66-70.999 204.99-57.332.667 49.333-1.332 98.665-1.332 147.998-33-10.667-71.664-7.667-100.663 12.333-20.999 13.667-36.998 34.666-45.331 58.333-7 17-5 35.666-4.667 53.666 8 54.666 60.664 100.665 116.662 95.665 37.332-.333 72.997-22 92.33-53.666 6.332-11 13.332-22.333 13.665-35.333 3.334-59.666 2-118.998 2.334-178.664.333-134.332-.334-268.33.666-402.328"
                    transform="translate(165 112)" />
            </svg>
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