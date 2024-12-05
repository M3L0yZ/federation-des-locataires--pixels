<?php 
/**
 * 	Template Name: services
 * 	Template Post Type: post, service
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
                    <div class="congre__contenue" >

                    
                
                        <h1 class="congre__titreservice"><?php the_title(); ?></h1>

                        <div class="congre__containerpremiertext">
                            <div class="congre__backgroundcolortext">
                                <p class="congre__premiertext"><?php the_field('service-summary'); ?></p>
                            </div>
                        </div>

                        <div class="congre__containerdeuxiemetext">
                            <p class="congre__deuxiemetext" > <?php the_content(); ?>
                                
                            </p>
                        </div>

        

                        <div class="congre__rapportcarte">

                            <div class="congre__containercarte">
                                <div class="congre__carte" > 
                                    <div class="congre__cartetext">
                                    
                                    <h3 >
                                    <?php the_field('service-report-card-1'); ?>  <?php the_field('service-report-card-1-title'); ?> </h3>
                                    </div>
                                    <div class="congre__ensavoirplus">
                                        <button class="congre__bouttonsavoirpluscongre" > <?php the_field('service-cta-all-savoir'); ?> </button>
                                    </div>   

									    
                                </div>
                            </div>
                                
                            <div class="congre__containercarte">
                                <div class="congre__carte" > 
                                
                                    <div class="congre__cartetext">
                                    
                                        <h3> <?php the_field('service-report-card-2-title'); ?> 
                                        <?php the_field('service-report-card-2'); ?> </h3>
                                        
                                    </div>
                                    <div class="congre__ensavoirplus">
                                        <button class="congre__bouttonsavoirpluscongre"> <?php the_field('service-cta-all-savoir'); ?></button>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="congre__containercarte">
                                <div class="congre__carte"> 
                                    <div class="congre__cartetext">
                                    
                                    <h3> <?php the_field('service-report-card-3-title'); ?>
                                    <?php the_field('service-report-card-3'); ?> </h3>
                                    </div>
                                    <div class="congre__ensavoirplus">
                                        <button class="congre__bouttonsavoirpluscongre"> <?php the_field('service-cta-all-savoir'); ?> </button>
                                    </div>
                                </div>
                            </div>    

                        </div>

                            <div class="congre__congreensavoirplus">
                                <button class="congre__bouttonsavoirplus" > <?php the_field('service-cta-all-report'); ?></button>
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