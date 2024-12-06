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
<?php endif; ?>
	<article>
		
			<nav class="nav">
        <img class="logo-search" src="./sources/icons/symbole-de-linterface-de-recherche_light.png">
        <img class="logo-langue" src="./sources/icons/world.png">
        <a href="javascript:void(0);" class="menu-hamburger" onclick="boutonHamburger()">
            <i class="fa fa-bars"></i>
        </a>
        <ul class="nav__list">
            <li class="nav__item"><a href="./news_hub.html">Nouvelles</a></li>
            <li class="nav__item"><a href="./service-hub.html">Services</a></li>
            <li class="nav__item"><a href="./team.html">Équipe</a></li>
            <li class="nav__item"><a href="./about.html">À propos</a></li>
            <li class="nav__item"><a href="./contact-us.html">Nous joindre</a></li>
            <li class="nav__item"><img class="icone-facebook" src="./sources/icons/facebook.png"></li>
            <li class="nav__item"><img class="icone-youtube" src="./sources/icons/youtube.png"></li>
            <li class="nav__item">
                <input type="search" id="search" name="search" placeholder="Rechercher">
            </li>
            <li class="nav__item"><a href="#">FR/EN</a></li>
        </ul>
    </nav>
		
		
		<?php the_content(); // Contenu principal de la page ?>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>