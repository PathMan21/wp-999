<?php
$equipe = get_page_by_path('notre-equipe');
$jeu = get_page_by_path('jeu');
$equipe_link = $equipe ? get_permalink($equipe) : '#equipe';
$jeu_link = $jeu ? get_permalink($jeu) : '#jeu';
get_header(); ?>
<main>
    <section class="bg-light py-5">
       <div class="container py-5">
    <div class="row align-items-center g-4">

        <!-- TEXTE -->
        <div class="col-lg-6">
            <p class="text-uppercase text-muted small mb-2">
                Projet 999
            </p>

            <h1 class="display-5 fw-bold mb-3">
                Découvrez nos nouveaux jeux
            </h1>

            <p class="lead mb-4">
                Par les créateurs de run nugget run, découvrez nos nouvelles créations, devlog... 
            </p>

            <div class="d-flex flex-wrap gap-2">
                <a class="btn btn-primary btn-lg" href="<?php echo esc_url($jeu_link); ?>">
                    Découvrir le jeu
                </a>
                <a class="btn btn-outline-secondary btn-lg" href="<?php echo esc_url($equipe_link); ?>">
                    Notre équipe
                </a>
            </div>
        </div>

        <!-- CAROUSEL -->
        <div class="col-lg-6">

            <?php
            $images = [
                get_template_directory_uri() . '/assets/img/image1.jpg',
                get_template_directory_uri() . '/assets/img/image2.png',
            ];
            ?>

            <div id="carouselExample" class="carousel slide">

                <div class="carousel-inner rounded shadow">

                    <?php foreach ($images as $index => $img) : ?>
                        <div class="carousel-item <?php if ($index === 0) echo 'active'; ?>">
                            <img src="<?php echo $img; ?>" class="d-block w-100 h-20" alt="">
                        </div>
                    <?php endforeach; ?>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>

        </div>

    </div>
</div>
    </section>
<section class="container py-5">
    <div class="row g-4">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="col-md-6 col-lg-4 d-flex">

                <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark w-100">

                    <div class="card shadow-sm h-100 card-hover">

                        <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>

                        <div class="card-body d-flex flex-column">

                            <h3 class="card-title text-muted"><?php the_title(); ?></h3>

                            <h6 class="card-subtitle mb-2 text-muted">
                                <?php the_author(); ?> - <?php echo get_the_date(); ?>
                                <br>
                                <?php the_tags('<span>', ', ', '</span>'); ?>
                            </h6>

                            <p class="card-text">
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </p>

                        </div>

                    </div>

                </a>

            </div>

        <?php endwhile; endif; ?>

    </div>
</section>
</main>

<?php get_footer(); ?>