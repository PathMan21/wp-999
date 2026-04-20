<?php get_header(); ?>

<main class="container py-5">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- HEADER -->
        <header class="text-center mb-5">

            <span class="badge bg-primary px-3 py-2 mb-3">
                Jeu
            </span>

            <h1 class="display-4 fw-bold mb-3">
                <?php the_title(); ?>
            </h1>

            <div class="lead text-muted mb-4">
                <?php the_content(); ?>
            </div>

        </header>

        <!-- CONTENU -->
        <div class="row g-4">

            <!-- CONCEPT -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg h-100 card-hover">
                    <div class="card-body p-4">

                        <h2 class="h4 fw-bold mb-3">Concept</h2>

                        <p class="text-muted mb-0">
                            Présentez le concept du jeu, l'univers et ce que le joueur découvre dès les premières minutes.
                        </p>

                    </div>
                </div>
            </div>

            <!-- FONCTIONNALITÉS -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg h-100 card-hover">
                    <div class="card-body p-4">

                        <h2 class="h4 fw-bold mb-3">Fonctionnalités</h2>

                        <ul class="list-unstyled mb-0 text-muted">
                            <li class="mb-2">✔ Gameplay immersif</li>
                            <li class="mb-2">✔ Mécaniques innovantes</li>
                            <li class="mb-2">✔ Univers narratif captivant</li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>