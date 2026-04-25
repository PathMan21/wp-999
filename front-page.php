<?php
/*
  Template Name: front-page
*/





$equipe = get_page_by_path('notre-equipe');
$jeu = get_page_by_path('nos-jeux');
$equipe_link = $equipe ? get_permalink($equipe) : '#equipe';
$jeu_link = $jeu ? get_permalink($jeu) : '#nos-jeux';
get_header(); ?>

<main>
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center g-4">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>

                        <!-- TEXTE -->
                        <div class="col-lg-12">
                            <p class="text-uppercase small mb-2 ">
                                Projet 999
                            </p>

                            <h1 class="display-2 fw-bold">
                                <?php the_content(); ?>
                            </h1>

                        </div>
                        <div class="col-4">

                            <div class="page_item">

                                <a href="<?php echo esc_url($jeu_link); ?>">
                                    <h2 class="fw-bold display-6">Découvrez nos jeux</h2>
                                    <span class="logofa">
                                        <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor">
                                            <rect x="6" y="1" width="4" height="2" />
                                            <rect x="4" y="3" width="8" height="2" />
                                            <rect x="3" y="5" width="10" height="2" />
                                            <rect x="4" y="7" width="8" height="2" />
                                            <rect x="5" y="9" width="6" height="2" />
                                            <rect x="6" y="11" width="4" height="2" />
                                            <rect x="7" y="13" width="2" height="2" />
                                        </svg>
                                    </span>

                                </a>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>

            </div>
        </div>
    </section>

</main>



<?php get_footer(); ?>