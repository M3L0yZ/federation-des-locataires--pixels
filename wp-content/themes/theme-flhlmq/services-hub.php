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


                <?php
				if ( $card1 () ): 
					// Define WP_Query for the 'service-hub-real' custom post type
					$card1 = new WP_Query('post_type=service-hub-real');
				
					if ( $card1->have_posts() ) : 
						while ( $card1->have_posts() ) : $card1->the_post(); 
				?>


                <div class="service__insidecontainer__congres">
                    <div class="service__shadowcolor">


                        <div class="service__titrecongre">
                            <h2 class="service__congretitre"><?php the_field('card-title'); ?></h2>
                        </div>

                        <div class="service__textcongres">
                            <p class="service__congretexte">
                                <?php echo $card1['card-1-summary']; ?>
                            </p>
                        </div>

                        <div class="service__ensavoirplus">
                            <a href="./service.html"><button
                                    class="bouttonsavoirplus"><?php echo $card1['card-1-cta']; ?></button></a>
                        </div>

                    </div>
                </div>
				<?php else: ?>
					<p>No card information not  available.</p> 
                <?php endif; ?>

            </div>
        </div>

        <br>
        <br>


        <div class="service__associationbackgroundcontainer">
            <div class="service__congrecontainer">

                <div class="service__insidecontainer__association">

                    <?php
									$card2 = get_field('card-2');
										if( $card2 ): ?>
                    <div class="service__insidecontainer__congres">

                        <div class="service__shadowcolor">


                            <div class="service__titrecongre">
                                <h2 class="service__congretitre"> <?php echo $card2['card-2-title']; ?> </h2>
                            </div>

                            <div class="service__textcongres">
                                <p class="service__congretexte">
                                    <?php echo $card2['card-2-summary']; ?>
                                </p>
                            </div>

                            <div class="service__ensavoirplus">
                                <button class="bouttonsavoirplus"><?php echo $card2['card-2-cta']; ?></button>
                            </div>

                        </div>

                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="service__ccrbackgroundcontainer">
            <div class="service__congrecontainer">

                <div class="service__insidecontainer__ccr">

                    <?php
									$card3 = get_field('card-3');
										if( $card3 ): ?>
                    <div class="service__insidecontainer__congres">

                        <div class="service__shadowcolor">


                            <div class="service__titrecongre">
                                <h2 class="service__congretitre"> <?php echo $card3['card-3-title']; ?> </h2>
                            </div>

                            <div class="service__textcongres">
                                <p class="service__congretexte">
                                    <?php echo $card3['card-3-summary']; ?>
                                </p>
                            </div>

                            <div class="service__ensavoirplus">
                                <button class="bouttonsavoirplus"><?php echo $card3['card-3-cta']; ?></button>
                            </div>

                        </div>

                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="service__locatairebackgroundcontainer">
            <div class="service__congrecontainer">

                <div class="service__insidecontainer__locataire">
                    <?php
									$card4 = get_field('card-4');
										if( $card4 ): ?>
                    <div class="service__insidecontainer__congres">

                        <div class="service__shadowcolor">


                            <div class="service__titrecongre">
                                <h2 class="service__congretitre"> <?php echo $card3['card-4-title']; ?> </h2>
                            </div>

                            <div class="service__textcongres">
                                <p class="service__congretexte">
                                    <?php echo $card4['card-4-summary']; ?>
                                </p>
                            </div>

                            <div class="service__ensavoirplus">
                                <button class="bouttonsavoirplus"><?php echo $card4['card-4-cta']; ?></button>
                            </div>

                        </div>

                    </div>
                    <?php endif; ?>

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