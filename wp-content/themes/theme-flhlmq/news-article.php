<?php 
/**
 * 	Template Name: new-article
 * 	Template Post Type: post, new-article
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article class="news-article">
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>

            <!--------------- HERO ------------->
        <section class="news-article__hero">
            <!-- Swiper slides -->
            <div class="swiper-container mySwiper ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-1">
                    </div>
                    <div class="swiper-slide slide-2">
                    </div>
                    <div class="swiper-slide slide-3">
                    </div>
                </div>

               <!-- Pagination swiper -->
                <div class="swiper-pagination"></div>
            </div>
            <div class="slides__texte">
                <!--  Chercher le titre -->
                <h1><?php the_field('hero-title'); ?></h1>
                <!--  Chercher le résumé -->
                <p><?php the_field('hero-summary'); ?></p>
            </div>
        </section>

		<section class="news-article__nouvelle">
            
            <h1 class="news-article__nouvelle__titre"><?php the_title();?></h1> <!--  Chercher le titre -->
            <hr class="hr-titre" >
            <div class="container-informations">
                <div class="news-article__nouvelle__resume__container">
                    <p class="news-article__nouvelle__resume"><?php the_field('news-summary'); ?></p> <!--  Chercher le résumer-->
                </div>
                <p class="news-article__nouvelle__texte">
					<?php the_content();?> <!--  Chercher le contenue de la page-->
                </p>
            </div>
            <button class="bouton-petition"><?php the_field('news-cta'); ?></button>  <!--  Chercher le bouton de pétition-->
            <div class="div-prochaine-nouvelle"><h3 class="prochaine-nouvelle"><?php the_field('next-news-cta'); ?></h3></div> <!--  Chercher le bouton de la prochaine nouvelle-->
            </div>
        </section>
        
		<section class="news-article__similaire">
            <h1 class="news-article__similaire__titre"><?php the_field('similar-title'); ?></h1> <!--  Chercher meme titre -->
            <hr class="hr-titre">
            <div class="cartes-swiper">
                <div class="swiper-container2 mySwiper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-1">
                            <div class="carte--01 carte">
                            <?php
                            //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array( 
                                    'post_type' => 'new-article',
                                    's' => 'Première pelletée de terre pour Unitaînés à Rimouski'
                                );
                                //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments); 
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                 <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_field('card-summary'); ?></p>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
                            </div>
                        </div>
                        <div class="swiper-slide slide-2">
                            <div class="carte--02 carte">
                            <?php
                            //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array( 
                                    'post_type' => 'new-article',
                                    's' => 'Une nouvelle voie rapide pour les développeurs'
                                );
                                //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments); 
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_field('card-summary'); ?></p>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
                            </div>
                        </div>
                        <div class="swiper-slide slide-3">
                            <div class="carte--03 carte">
                            <?php
                            //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array( 
                                    'post_type' => 'new-article',
                                    's' => 'Demande record de HLM à Saguenay'
                                );
                                 //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments);
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_field('card-summary'); ?></p>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
                            </div>
                        </div>
                        <div class="swiper-slide slide-4">
                            <div class="carte--04 carte">
                            <?php
                            //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array( 
                                    'post_type' => 'new-article',
                                    's' => 'Pétition pour des HLM de qualité'
                                );
                                //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments); 
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_field('card-summary'); ?></p>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cartes">
                        <div class="carte--01 carte">
                            <?php
                             //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array( 
                                    'post_type' => 'new-article',
                                    's' => 'Première pelletée de terre pour Unitaînés à Rimouski'
                                );
                                //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments); 
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_field('card-summary'); ?></p>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
                        </div>

                        <div class="carte--02 carte">
                            <?php
                            //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array( 
                                    'post_type' => 'new-article',
                                    's' => 'Pétition pour des HLM de qualité'
                                );
                                //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments);  
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_field('card-summary'); ?></p>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
                        </div>


                        <div class="carte--03 carte">
                            <?php
                            //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array( 
                                    'post_type' => 'new-article',
                                    's' => 'Demande record de HLM à Saguenay'
                                );
                                //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments); 
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_field('card-summary'); ?></p>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
                        </div>
            </div>
        </section>

		<?php endif; ?>

	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>