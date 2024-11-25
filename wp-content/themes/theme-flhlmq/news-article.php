<?php 
/**
 * 	Template Name: Nouveaux articles
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<section class="news-article__nouvelle">
            <h1 class="news-article__nouvelle__titre"><?php the_title();?></h1>
            <hr class="hr-titre" >
            <div class="container-informations">
                <div class="news-article__nouvelle__resume__container">
                    <p class="news-article__nouvelle__resume"><?php the_field('News summary'); ?></p>
                </div>
                <p class="news-article__nouvelle__texte">
					<?php the_content();?>
                </p>
            </div>
            <button class="bouton-petition"><?php the_field('news-cta'); ?></button>
            <div class="div-prochaine-nouvelle"><h3 class="prochaine-nouvelle"><?php the_field('next-news-cta'); ?></h3></div>
            </div>
        </section>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>