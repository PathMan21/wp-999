<?php
/*
  Template Name: equipe-template
*/

get_header(); ?>
<main class="container py-5">
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <article class="mb-5">
                <h1 class="mb-4"><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
                <div class="container">
                    <div style="grid-template-columns: 1fr 1fr 1fr 1fr;" class="d-grid gap-3">
                        <div class="p-2">
                            <div class="card card-custom-style" >
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/team/alexandre.jpg"
                                    class="card-img-top card-custom-img" alt="Alexandre">
                                <div class="card-body">
                                    <?php echo do_shortcode('[futuristic_modal
                                    id="alexandre"
                                    btn_label="Alexandre"
                                    title="Profil de Alexandre"
                                    body="Développeur du jeu run nugget run actuellement, connu pour être un passionné, un bon développeur mais surtout un hater de wordpress"
                                    confirm="Proceed"
                                    cancel="Cancel"
                                    accent="hsl(175,100%,77%)"
                                    shadow="hsl(10,100%,60%)"
                                ]'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="card card-custom-style">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/team/fabio.png"
                                    class="card-img-top card-custom-img" alt="Fabio">
                                <div class="card-body">
                                    <?php echo do_shortcode('[futuristic_modal
                                id="fabio"
                                btn_label="Fabio"
                                title="Profil de Fabio"
                                body="Développeur du jeu run nugget run, connu pour être posé, un bon développeur et gros joueur de Lol"
                                confirm="Proceed"
                                cancel="Cancel"
                                accent="hsl(175,100%,77%)"
                                shadow="hsl(10,100%,60%)"
                            ]'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="card card-custom-style">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/team/victor.jpg"
                                    class="card-img-top card-custom-img" alt="Victor">
                                <div class="card-body">
                                    <?php echo do_shortcode('[futuristic_modal
                        id="victor"
                        btn_label="Victor"
                        title="Profil de Victor"
                        body="Manager des game dev / gère les ia - grand fan de salle de sport - à abbatus la dev web à la salle"
                        confirm="Proceed"
                        cancel="Cancel"
                        accent="hsl(175,100%,77%)"
                        shadow="hsl(10,100%,60%)"
                    ]'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="card card-custom-style">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/team/melanie.png"
                                    class="card-img-top card-custom-img" alt="melanie">
                                <div class="card-body">
                                    <?php echo do_shortcode('[futuristic_modal
                id="melanie"
                btn_label="Mélanie"
                title="Profil de Mélanie"
                body="Experte community manager - marketeuse - ceo (quelle femme), très douée sur genshin (jsp jy ai jamais joué)"
                confirm="Proceed"
                cancel="Cancel"
                        accent="hsl(175,100%,77%)"
                        shadow="hsl(10,100%,60%)"
            ]'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="card card-custom-style">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/team/vinh.png"
                                    class="card-img-top card-custom-img" alt="vinh">
                                <div class="card-body">
                                    <?php echo do_shortcode('[futuristic_modal
                id="Vinh"
                btn_label="Vinh"
                title="Vinh"
                body="Notre CEO avec Mélanie - gère léquipe - les demandes de dossiers et de tout orchestré - également a une capacité pour nous niquer sur EVA"
                confirm="Proceed"
                cancel="Cancel"
                        accent="hsl(175,100%,77%)"
                        shadow="hsl(10,100%,60%)"
            ]'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="card card-custom-style">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/team/jenna.png"
                                    class="card-img-top card-custom-img" alt="jenna">
                                <div class="card-body">
                                    <?php echo do_shortcode('[futuristic_modal
                                            id="jenna"
                                            btn_label="Jenna"
                                            title="Profil de Jenna"
                                            body="Notre modeleuse 3D avec thomas - super douée pour les design - a fait de magnifique fermiers (en tout cas jadore)"
                                            confirm="Proceed"
                                            cancel="Cancel"
                        accent="hsl(175,100%,77%)"
                        shadow="hsl(10,100%,60%)"
                                        ]'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="card card-custom-style">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/team/thomas.png"
                                    class="card-img-top card-custom-img" alt="thomas">
                                <div class="card-body">
                                    <?php echo do_shortcode('[futuristic_modal
                id="thomas"
                btn_label="Thomas"
                title="Profil de Thomas"
                body="Notre modeleur 3D, expert des maps - a fait un super travail dessus - possède un magnifique chapeau"
                confirm="Proceed"
                cancel="Cancel"
                        accent="hsl(175,100%,77%)"
                        shadow="hsl(10,100%,60%)"
            ]'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="card card-custom-style">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/team/manon.png"
                                    class="card-img-top card-custom-img" alt="manon">
                                <div class="card-body">
                                    <?php echo do_shortcode('[futuristic_modal
                id="manon"
                btn_label="Manon"
                title="Profil de Manon"
                body="Manon Lafosse  est une actrice, réalisatrice et productrice américaine née le 11 février 1969 à Los Angeles (Californie).
                Elle accède à la notoriété internationale en interprétant le personnage de Rachel Green dans la sitcom à succès Friends (1994- 2004). Grâce à ce rôle, elle obtient un Emmy Award, un Golden Globe Award et un Screen Actors Guild Award."
                img="' . get_template_directory_uri() . '/assets/team/manon.png"
                confirm="Proceed"
                cancel="Cancel"
                
                        accent="hsl(175,100%,77%)"
                        shadow="hsl(10,100%,60%)"
            ]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </article>
        <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>