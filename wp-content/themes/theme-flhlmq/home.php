<?php 
/**
 * 	Template Name: Accueil
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
	<section class="accueil__hero">
            <div class="swiper-container mySwiper ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-1">
                        
                    </div>
                    <div class="swiper-slide slide-2">
                        <div class="fade-black"></div>
                        
                    </div>
                    <div class="swiper-slide slide-3">
                        <div class="fade-black"></div>
                        
                    </div>
                </div>
                
                <!-- Pagination (if needed) -->
                <div class="swiper-pagination"></div>
                <!-- Navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div><div class="slides__container">
                    <h1><?php the_field('hero-title-1'); ?></h1>
					<h1><?php the_field('hero-title-2'); ?></h1>
                    <button><?php the_field('hero-cta'); ?></button></div>
        </section>

        <!-------------- SERVICES -------------------->

        <section class="accueil_services">
            <div class="accueil_services__grid">
                <div class="accueil_services__block">
                    <h1  class="accueil_services__titre" ><?php the_field('service-title'); ?></h1>
                    <hr class="hr-titre">
                    <div class="container-informations">
						<?php 
						$image = get_field('service-img');
						if( !empty( $image ) ): ?>
							<img class="accueil_services__photo1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                        <h3 class="accueil_services__texte"><?php the_field('service-summary'); ?></h3>
                    </div>
                    <button class="bouton-voir-plus"><?php the_field('service-know-more'); ?></button>
                    <h3 class="savoir-plus"><?php the_field('service-show-more'); ?></h3>
                </div>
            </div>
        </section>

        <hr class="division-sections">

        <!-------------- ACTUALITÉS -------------------->

        <section class="accueil__actualites">
            <h1 class="titre"><?php the_field('news-title'); ?></h1>
            <hr class="hr-titre">
            <div class="cartes-swiper">
                <div class="swiper-container2 mySwiper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-1">
                            <div class="carte--01 carte">
								<?php
									$arguments = array( // 👈 Tableau d'arguments
										'post_type' => 'new-article',
										's' => 'Première pelletée de terre pour Unitaînés à Rimouski'
									);
									$projects = new WP_Query($arguments); // 👈 Utilisation
									while ($projects->have_posts()) : $projects->the_post(); 
									?>
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
									<h3><?php the_title(); ?></h3>
									<p><?php the_field('card-summary'); ?></p>
									<?php
									endwhile; 
									wp_reset_postdata(); 
								?>
                                <button class="bouton-carte-01 bouton-lire-article"><?php the_field('news-read'); ?></button>
                            </div>
                        </div>
                        <div class="swiper-slide slide-2">
                            <div class="carte--02 carte">
								<?php
									$arguments = array( // 👈 Tableau d'arguments
										'post_type' => 'new-article',
										's' => 'Une nouvelle voie rapide pour les développeurs'
									);
									$projects = new WP_Query($arguments); // 👈 Utilisation
									while ($projects->have_posts()) : $projects->the_post(); 
									?>
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
									<h3><?php the_title(); ?></h3>
									<p><?php the_field('card-summary'); ?></p>
									<?php
									endwhile; 
									wp_reset_postdata(); 
								?>
                                <button class="bouton-carte-02  bouton-lire-article"><?php the_field('news-read'); ?></button>
                            </div>
                        </div>
                        <div class="swiper-slide slide-3">
                            <div class="carte--03 carte">
								<?php
									$arguments = array( // 👈 Tableau d'arguments
										'post_type' => 'new-article',
										's' => 'Demande record de HLM à Saguenay'
									);
									$projects = new WP_Query($arguments); // 👈 Utilisation
									while ($projects->have_posts()) : $projects->the_post(); 
									?>
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
									<h3><?php the_title(); ?></h3>
									<p><?php the_field('card-summary'); ?></p>
									<?php
									endwhile; 
									wp_reset_postdata(); 
								?>
                                <button class="bouton-carte-03  bouton-lire-article"><?php the_field('news-read'); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cartes">
                <div class="carte--01 carte">
					<?php
						$arguments = array( // 👈 Tableau d'arguments
							'post_type' => 'new-article',
							's' => 'Première pelletée de terre pour Unitaînés à Rimouski'
						);
						$projects = new WP_Query($arguments); // 👈 Utilisation
						while ($projects->have_posts()) : $projects->the_post(); 
					?>
					<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
					<h3><?php the_title(); ?></h3>
					<p><?php the_field('card-summary'); ?></p>
					<?php
						endwhile; 
						wp_reset_postdata(); 
					?>
                    <button class="bouton-carte-01 bouton-lire-article"><?php the_field('news-read'); ?></button>
                </div>
                <hr class="hr-cartes">
                <div class="carte--02 carte">
					<?php
						$arguments = array( // 👈 Tableau d'arguments
							'post_type' => 'new-article',
							's' => 'Une nouvelle voie rapide pour les développeurs'
						);
						$projects = new WP_Query($arguments); // 👈 Utilisation
						while ($projects->have_posts()) : $projects->the_post(); 
					?>
					<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
					<h3><?php the_title(); ?></h3>
					<p><?php the_field('card-summary'); ?></p>
					<?php
						endwhile; 
						wp_reset_postdata(); 
					?>
                    <button class="bouton-carte-02 bouton-lire-article"><?php the_field('news-read'); ?></button>
                </div>
                <hr class="hr-cartes">
                <div class="carte--03 carte">
					<?php
						$arguments = array( // 👈 Tableau d'arguments
							'post_type' => 'new-article',
							's' => 'Demande record de HLM à Saguenay'
						);
						$projects = new WP_Query($arguments); // 👈 Utilisation
						while ($projects->have_posts()) : $projects->the_post(); 
					?>
					<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
					<h3><?php the_title(); ?></h3>
					<p><?php the_field('card-summary'); ?></p>
					<?php
						endwhile; 
						wp_reset_postdata(); 
					?>
                    <button class="bouton-carte-03 bouton-lire-article"><?php the_field('news-read'); ?></button>
                </div>
            </div>
            <a href="./news_hub.html"><h3 class="plus-actualites"><?php the_field('news-cta'); ?></h3></a>
            <a href="./news_hub.html"><button class="bouton-voir-plus"><?php the_field('news-cta'); ?></button></a>
        </section>


        <!------------- TÉMOIGNAGES ------------->



        <hr class="division-sections">

        <!-------------- TÉMOIGNAGES -------------------->

        <section class="accueil_temoignages">
            <h1 class="accueil_temoignages__titre"><?php the_field('testimony-title'); ?></h1>
            <hr class="hr-titre">
            <div class="accueil_temoignages__grid">

                <div class="accueil_temoignages__block">
                    <div class="accueil_temoignages__photo1"></div>
                    <div class="accueil_temoignages__couleur1">
                        <p class="accueil_temoignages__texte"><?php the_field('testimony-text-1'); ?></p>
                        <p class="accueil_temoignages__nom"><?php the_field('testimony-name-1'); ?></p>
                    </div>
                </div>

                <div class="accueil_temoignages__block">
                    <div class="accueil_temoignages__photo2"></div>
                    <div class="accueil_temoignages__couleur2">
                        <p class="accueil_temoignages__texte"><?php the_field('testimony-text-2'); ?></p>
                        <p  class="accueil_temoignages__nom"><?php the_field('testimony-name-1'); ?></p>
                    </div>
                </div>

                <div class="accueil_temoignages__block">
                    <div class="accueil_temoignages__photo3"></div>
                    <div class="accueil_temoignages__couleur3">
                        <p class="accueil_temoignages__texte"><?php the_field('testimony-text-3'); ?></p>
                        <p class="accueil_temoignages__nom"><?php the_field('testimony-name-3'); ?></p>
                    </div>
                </div>
            </div>
            <button class="accueil_temoignages__bouton"><?php the_field('testimony-show'); ?></button>
            <h3 class="accueil_temoignages__altbouton"><?php the_field('testimony-show-more'); ?></h3>
        </section>

        <!------------- NOUS SOUTENIR------------->

        <section class="accueil__nous-soutenir">
            <div class="soutenir__grid">
                <div class="soutenir__block">

                    <div class="text-nous-soutenir">
                        <h1><?php the_field('donation-title'); ?></h1>
                    </div>

                    <div class="text-mots-encouragement">
                        <h1><?php the_field('donation-summary'); ?></h1>
                    </div>

                    <div class="text-mots-merci">
                        <h1><?php the_field('donation-thanks'); ?></h1>
                    </div>

                    <div class="wrap-5-dollar">
                        <button class="bouton-dollar 5" onclick="myFunction()"><?php the_field('donation5'); ?></button>
                    </div>

                    <div class="wrap-20-dollar">
                        <button class="bouton-dollar 20" onclick="myFunction()"><?php the_field('donation20'); ?></button>
                    </div>

                    <div class="wrap-50-dollar">
                        <button class="bouton-dollar cinquente" onclick="myFunction()"><?php the_field('donation50'); ?></button>
                    </div>

                    <div class="wrap-faire-don">
                        <button class="bouton-faire-don" onclick="myFunction()"><?php the_field('donation-cta'); ?></button>
                    </div>

                    <div class="wrap-voir-plus">
                        <h3 class="en-savoir-plus">En savoir plus ></h3>
                        <button class="bouton-voir-plus" onclick="myFunction()"><?php the_field('donation-more'); ?></button>
                    </div>

                </div>

            </div>


        </section>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>