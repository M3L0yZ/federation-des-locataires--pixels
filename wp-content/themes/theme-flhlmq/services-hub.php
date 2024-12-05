<?php 
/**
 * 	Template Name: Services hub
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<article>
    <?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<section class="service">
            <h1 class="service__titreservice">Nos services</h1>
            <hr class="hr-titre">
            
            <div class="service__congrebackgroundcontainer">
                <div class="service__congrecontainer">
                        <div class="service__insidecontainer__congres">
                            <div  class="service__shadowcolor">
                                <div class="service__titrecongre">
                                    <h2 class="service__congretitre"> Congrès </h2>
                                </div>
                    
                                <div class="service__textcongres">
                                    <p class="service__congretexte"> 
                                        La FLHLMQ regroupe sur une base volontaire  <br>
                                        quelque 300 associations de locataires et CCR qui sont 
                                        libres et indépendants. Beaucoup d'efforts sont consentis 
                                        pour s'assurer une vie associative forte et démocratique. 
                                        En plus des réunions du CA de la fédération qui réunit des 
                                        représentants de toutes les régions du Québec
                                    </p>
                                </div>

                                <div class="service__ensavoirplus">
                                    <a href="./service.html"><button class="bouttonsavoirplus">en savoir plus</button></a>
                                </div>

                            </div>
                        </div>
                </div>
            </div>

            <br>
            <br>
            

            <div class="service__associationbackgroundcontainer">
                <div class="service__congrecontainer">
                    
                    <div class="service__insidecontainer__association">
                        <div  class="service__shadowcolor">
                            <div class="service__titrecongre">
                                <h2 class="service__congretitre"> Association </h2>
                            </div>
                
                            <div class="service__textcongres">
                                <p class="service__congretexte">
                           
                                    Une association de locataires, c'est le regroupement 
                                    des locataires d'un ou de plusieurs HLM. Cette association 
                                    est mise sur pied par les locataires et pour les locataires.
                                     L'association est gérée comme un OBNL et doit avoir son propre 
                                     conseil d'administration qu'on appelle parfois comité.
                              
                                </p>
                            </div>

                            <div class="service__ensavoirplus">
                                <button class="bouttonsavoirplus"> en savoir plus</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="service__ccrbackgroundcontainer">
                <div class="service__congrecontainer">
                    
                    <div class="service__insidecontainer__ccr">
                        <div  class="service__shadowcolor">
                            <div class="service__titrecongre">
                                <h2 class="service__congretitre"> CCR </h2>
                            </div>
                            
                            <div class="service__textcongres">
                                <p class="service__congretexte">
                                    Un Comité consultatif de résidant-e-s est 
                                    une instance qui permet aux locataires de HLM de 
                                    participer à la gestion de leur immeuble et de faire 
                                    des recommandations à la direction de l'OMH sur toutes 
                                    les questions qui les touchent. n CCR est composé uniquement 
                                    de locataires désignés par les associations.
                                </p>
                            </div>

                            <div class="service__ensavoirplus">
                                <button class="bouttonsavoirplus"> en savoir plus</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="service__locatairebackgroundcontainer">
                <div class="service__congrecontainer">
                    
                    <div class="service__insidecontainer__locataire">
                        <div  class="service__shadowcolor">
                            <div class="service__titrecongre">
                                <h2 class="service__congretitre"> Locataire au CA </h2>
                            </div>
                
                            <div class="service__textcongres">
                                <p class="service__congretexte">
                                    Tous les administrateurs égaux en droit. 
                                    Cela signifie que peu importe que vous soyez locataires, 
                                    élus municipaux ou représentants socio-économiques.
                                </p>
                            </div>

                            <div class="service__ensavoirplus">
                                <button class="bouttonsavoirplus"> en savoir plus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
               

       

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