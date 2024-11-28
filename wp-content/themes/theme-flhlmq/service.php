<?php 
/**
 * 	Template Name: Service
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<section class="congre">
            <div class="congre__container">

            
                <div class="congre__backgroundcolor">
                    <div class="congre__contenue">

                    
                
                        <h1 class="congre__titreservice"> Congrès</h1>

                        <div class="congre__containerpremiertext">
                            <div class="congre__backgroundcolortext">
                                <p class="congre__premiertext">
                                    La FLHLMQ regroupe sur une base volontaire quelque 
                                    300 associations de locataires et CCR qui sont libres 
                                    et indépendants. Beaucoup d'efforts sont consentis pour 
                                    s'assurer une vie associative forte et démocratique. 
                                    En plus des réunions du CA de la fédération qui réunit 
                                    des représentants de toutes les régions du Québec, 
                                    il y a régulièrement des rencontres régionales qui 
                                    permettent les échanges entre les locataires et/ou 
                                    les membres des CA des associations.
                                </p>
                            </div>
                        </div>

                        <div class="congre__containerdeuxiemetext">
                            <p class="congre__deuxiemetext">
                                Le congrès qui se tient généralement à tous 
                                les mois de juin est un moment crucial de la 
                                vie associative. Plus de 200 délégué-e-s s'y 
                                retrouvent pour échanger, voter les grandes 
                                orientations de la fédération et élire le conseil 
                                d'administration. Chaque association et CCR peut 
                                présenter des propositions qui sont discutées et 
                                votées par les délégué-e-s. C'est à partir des 
                                propositions qui ont été adoptées que s'articulera 
                                le travail de la fédération, en particulier celui 
                                du CA et de l'équipe de travail, pour la prochaine année.
                            </p>
                        </div>

                        <div class="congre__containertroisièmetext">
                            <p class="congre__troisièmetext">
                                Chaque congrès permet aussi des échanges entre les délégué-e-s 
                                et certains ministres clés du gouvernement - affaires municipales, 
                                emploi et solidarité, secrétariat aux aînés 
                                - ou des représentants de la SHQ. Les caucus
                                régionaux profitent du congrès pour choisir leur représentant au conseil 
                                d'administration de la FLHLMQ.
                            </p>
                        </div>

                        <div class="congre__rapportcarte">

                            <div class="congre__containercarte">
                                <div class="congre__carte">
                                    <div class="congre__cartetext">
                                        <h3>Rapport d’activité <br>du 16 Juin 2021 </h3>
                                    </div>
                                    <div class="congre__ensavoirplus">
                                        <button class="congre__bouttonsavoirpluscongre"> en savoir plus</button>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="congre__containercarte">
                                <div class="congre__carte">
                                    <div class="congre__cartetext">
                                        <h3>Rapport d’activité <br> du 30 Juin 2020 </h3>
                                    </div>
                                    <div class="congre__ensavoirplus">
                                        <button class="congre__bouttonsavoirpluscongre"> en savoir plus</button>
                                    </div>
                                </div>
                            </div>

                            <div class="congre__containercarte">
                                <div class="congre__carte">
                                    <div class="congre__cartetext">
                                        <h3>Rapport d’activité <br> du 16 Juin 2019 </h3>
                                    </div>
                                    <div class="congre__ensavoirplus">
                                        <button class="congre__bouttonsavoirpluscongre"> en savoir plus</button>
                                    </div>
                                </div>
                            </div>    

                        </div>

                            <div class="congre__congreensavoirplus">
                                <button class="congre__bouttonsavoirplus"> Tout les rapports</button>
                            </div>
                    </div>        
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