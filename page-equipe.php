<?php get_header(); ?>
<main class="container py-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="mb-5">
            <span class="badge bg-primary mb-3">Équipe</span>
            <h1 class="display-5 mb-3"><?php the_title(); ?></h1>
            <div class="mb-4"><?php the_content(); ?></div>
        </header>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h2 class="h5">Direction</h2>
                        <p>Un descriptif court de la personne en charge du projet et de la vision globale.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h2 class="h5">Développement</h2>
                        <p>Expliquez les compétences techniques de votre équipe et les technologies utilisées pour le jeu.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h2 class="h5">Création</h2>
                        <p>Présentez la partie artistique, narrative ou le design qui donne de l’identité au projet.</p>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>