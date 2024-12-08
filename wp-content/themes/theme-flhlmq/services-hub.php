<?php 
/**
 * 	Template Name: Services hub
 * 	Template Post Type: post, service-hub-real
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<article>
    <?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<section class="service">
            <h1 class="service__titreservice"> <?php the_title(); ?> </h1>
            <hr class="hr-titre">
            
            <div class="service__congrebackgroundcontainer">
                <div class="service__congrecontainer">
					
                        <div class="service__insidecontainer__congres">
						<?php the_field('cards'); ?> 
                            <div  class="service__shadowcolor">  
							
                                <div class="service__titrecongre">
									
                                    <h2 class="service__congretitre">

										<?php the_field('card-title'); ?> 
										
									</h2>
                                </div>
                    
                                <div class="service__textcongres">
                                    <p class="service__congretexte"> 

									 <?php the_field('card-summary'); ?>

                                    </p>
                                </div>

                                <div class="service__ensavoirplus">
                                    <a href="<?php echo home_url('/index.php/service/congres/'); ?>"><button class="bouttonsavoirplus"><?php the_field('card-cta'); ?></button></a>
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
					<?php the_field('cards'); ?> 
                        <div  class="service__shadowcolor">
                            
							<div class="service__titrecongre">
                                <h2 class="service__congretitre"> <?php the_field('card-title2'); ?>  </h2>
                            </div>
                
                            <div class="service__textcongres">
                                <p class="service__congretexte">
                           
								<?php the_field('card-summary2'); ?>
                              
                                </p>
                            </div>

                            <div class="service__ensavoirplus">
                                <button class="bouttonsavoirplus"> <?php the_field('card-cta2'); ?></button>
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
					<?php the_field('cards'); ?> 
                        <div  class="service__shadowcolor">
                            <div class="service__titrecongre">
                                <h2 class="service__congretitre"> <?php the_field('card-title3'); ?></h2>
                            </div>
                            
                            <div class="service__textcongres">
                                <p class="service__congretexte">
								<?php the_field('card-summary3'); ?>
                                </p>
                            </div>

                            <div class="service__ensavoirplus">
                                <button class="bouttonsavoirplus"> <?php the_field('card-cta3'); ?></button>
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
					<?php the_field('cards'); ?> 
                        <div  class="service__shadowcolor">
                            <div class="service__titrecongre">
                                <h2 class="service__congretitre"> <?php the_field('card-title4'); ?> </h2>
                            </div>
                
                            <div class="service__textcongres">
                                <p class="service__congretexte">
                                    <?php the_field('card-summary4'); ?>
                                </p>
                            </div>

                            <div class="service__ensavoirplus">
                                <button class="bouttonsavoirplus"> <?php the_field('card-cta4'); ?></button>
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