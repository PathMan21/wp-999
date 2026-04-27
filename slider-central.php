<?php
/**
 * Template Name: slider-central
 * Utilise uniquement les images de la médiathèque WordPress
 */

get_header(); ?>

<div class="d-flex justify-content-center">
        <h1>Nos jeux</h1>
</div>
<section class="games-slider mx-auto">
    
    <div class="container position-relative">


        <div id="gamesCarousel" class="carousel slide" data-bs-ride="false">

            <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#gamesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <div class="carousel-inner">
 <?php
        $images = [
            [ 'image' => get_template_directory_uri() . '/assets/img/image-jeu1.png',
            'href' => 50, 
            'alt' => "jeu1"
            ],
            [ 'image' => get_template_directory_uri() . '/assets/img/image-jeu2.png',
            'href' => 52, 
            'alt' => "jeu2"
            ],
            [ 'image' => get_template_directory_uri() . '/assets/img/image-jeu-placeholder.png',
            'href' => 0, 
            'alt' => "jeu3"
            ]
        ];

        ?>

        <div id="gamesCarousel" class="carousel slide" data-bs-ride="false">

            <!-- Flèche gauche -->
            <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#gamesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <!-- Slides -->
            <div class="carousel-inner">

                <?php $active = true; ?>
                <?php foreach($images as $img): ?>
                    <div class="carousel-item <?php if($active){ echo 'active'; $active = false; } ?>">
                        <div class="row g-12 justify-content-center">
                                <div class="col-md-12">
                                    <div class="game-card">
                                        <a href="<?php echo get_permalink($img['href']); ?>">
                                            <img src="<?php echo esc_url($img['image']); ?>" alt="Jeu" class="img-fluid">
                                        </a>
                                    </div>
                                </div>

                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <!-- Flèche droite -->
            <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#gamesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>
    </div>
    </div>
</section>


<?php get_footer(); ?>