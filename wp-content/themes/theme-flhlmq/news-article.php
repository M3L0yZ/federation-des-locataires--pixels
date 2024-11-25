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
			<section class="news-article__nouvelle">
            <h1 class="news-article__nouvelle__titre"><?php the_title();?></h1>
            <hr class="hr-titre" >
            <div class="container-informations">
                <div class="news-article__nouvelle__resume__container">
                    <p class="news-article__nouvelle__resume"><?php the_field('news-summary'); ?></p>
                </div>
                <p class="news-article__nouvelle__texte">
					<?php the_content();?>
                </p>
            </div>
            <button class="bouton-petition"><?php the_field('news-cta'); ?></button>
            <div class="div-prochaine-nouvelle"><h3 class="prochaine-nouvelle"><?php the_field('next-news-cta'); ?></h3></div>
            </div>
        </section>
		<section class="news-article__similaire">
            <h1 class="news-article__similaire__titre"><?php the_field('similar-title'); ?></h1>
            <hr class="hr-titre">
            <div class="cartes-swiper">
                <div class="swiper-container2 mySwiper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-1">
                            <div class="carte--01 carte">
							<?php the_field('similar-card-1'); ?>
                            </div>
                        </div>
                        <div class="swiper-slide slide-2">
                            <div class="carte--02 carte">
							<?php the_field('similar-card-2'); ?>
                            </div>
                        </div>
                        <div class="swiper-slide slide-3">
                            <div class="carte--03 carte">
							<?php the_field('similar-card-3'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cartes">
                <div class="carte--01 carte">
				<?php the_field('similar-card-1-img'); ?>
                </div>
                <div class="carte--02 carte">
				<?php the_field('similar-card-2'); ?>
                </div>
                <div class="carte--03 carte">
				<?php the_field('similar-card-3'); ?>
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