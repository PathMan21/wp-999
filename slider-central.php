<?php
/**
 * Template Name: slider-central
 * Utilise uniquement les images de la médiathèque WordPress
 */

get_header(); ?>
<div class="d-flex justify-content-center">
    <h1>Nos jeux</h1>
</div>

<section class="games-slider py-5">
    <div class="container">

        <?php
        $images = [
            [
                'image' => get_template_directory_uri() . '/assets/img/image-jeu1.png',
                'href'  => 50,
                'titre' => 'Run nuggets run',
                'desc'  => 'Le fermier vous poursuis, récupérez vos oeufs, et enclenchez la deuxième ! Vous ne devez pas le laissez vous attraper !',
            ],
            [
                'image' => get_template_directory_uri() . '/assets/img/image-jeu2.png',
                'href'  => 52,
                'titre' => 'Shadow : La voie de la faucheuse',
                'desc'  => 'Une petite ombre toute mignonne essaie de survivre - saurez vous comment lui indiquer la voie ?',
            ],
            [
                'image' => get_template_directory_uri() . '/assets/img/image-jeu-placeholder.png',
                'href'  => 0,
                'titre' => 'Bientôt ! ',
                'desc'  => 'Vous êtes impatient ? Nous aussi ! On continue à travailler dur pour vous livrer tout !',
            ],
        ];
        ?>

        <div id="gamesCarousel" class="carousel carousel-fade slide" data-bs-ride="false">

            <div class="carousel-inner">
                <?php $active = true; ?>
                <?php foreach ($images as $img) : ?>
                    <div class="carousel-item <?php if ($active) { echo 'active'; $active = false; } ?>">
                        <div class="game-slide d-flex align-items-center gap-5">

                            <!-- Image -->
                            <div class="game-slide__img-wrap">
                                <img src="<?php echo esc_url($img['image']); ?>" alt="<?php echo esc_attr($img['titre']); ?>">
                            </div>

                            <!-- Texte -->
                            <div class="game-slide__content">
                                <p class="game-slide__label">Jeu en cours...</p>
                                <h2 class="game-slide__title"><?php echo esc_html($img['titre']); ?></h2>
                                <p class="game-slide__desc"><?php echo esc_html($img['desc']); ?></p>
                                <?php if ($img['href']) : ?>
                                    <a href="<?php echo get_permalink($img['href']); ?>" class="game-slide__btn">
                                        Voir le jeu
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Flèches -->
            <div class="game-slide__arrows">
                <button class="game-arrow" type="button" data-bs-target="#gamesCarousel" data-bs-slide="prev" aria-label="Précédent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                </button>
                <button class="game-arrow" type="button" data-bs-target="#gamesCarousel" data-bs-slide="next" aria-label="Suivant">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </button>
            </div>

            <!-- Indicateurs -->
            <div class="carousel-indicators game-indicators">
                <?php foreach ($images as $i => $img) : ?>
                    <button type="button"
                        data-bs-target="#gamesCarousel"
                        data-bs-slide-to="<?php echo $i; ?>"
                        <?php echo $i === 0 ? 'class="active" aria-current="true"' : ''; ?>
                        aria-label="Slide <?php echo $i + 1; ?>">
                    </button>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>


<?php get_footer(); ?>