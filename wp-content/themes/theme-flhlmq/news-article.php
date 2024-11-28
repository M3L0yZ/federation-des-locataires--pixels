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
                        <?php 
                        $similarCard1 = get_field( 'similar-card-1');
                        if ( $similarCard1 ):
                        ?>
                        <div class="carte--01 carte">
                        <img src="<?php echo esc_url( $similarCard1['similar-card-1-img']['url'] ); ?>" alt="<?php echo esc_attr( $similarCard1['similar-card-1-title'] ); ?>" />
                        <h3><?php echo esc_html( $similarCard1['similar-card-1-title'] ); ?></h3>
                        <p><?php echo esc_html( $similarCard1['similar-card-1-content'] ); ?></p>
                        </div>
                        <?php endif; ?>
                        </div>
                        <div class="swiper-slide slide-2">
                        <?php 
                        $similarCard2 = get_field( 'similar-card-2');
                        if ( $similarCard2 ):
                        ?>
                        <div class="carte--02 carte">
                        <img src="<?php echo esc_url( $similarCard2['similar-card-2-img']['url'] ); ?>" alt="<?php echo esc_attr( $similarCard2['similar-card-2-title'] ); ?>" />
                        <h3><?php echo esc_html( $similarCard2['similar-card-2-title'] ); ?></h3>
                        <p><?php echo esc_html( $similarCard2['similar-card-2-content'] ); ?></p>
                        </div>
                        <?php endif; ?>
                        </div>
                        <div class="swiper-slide slide-3">
                        <?php 
                        $similarCard3 = get_field( 'similar-card-3');
                        if ( $similarCard3 ):
                        ?>
                        <div class="carte--03 carte">
                        <img src="<?php echo esc_url( $similarCard3['similar-card-3-img']['url'] ); ?>" alt="<?php echo esc_attr( $similarCard3['similar-card-3-title'] ); ?>" />
                        <h3><?php echo esc_html( $similarCard3['similar-card-3-title'] ); ?></h3>
                        <p><?php echo esc_html( $similarCard3['similar-card-3-content'] ); ?></p>
                        </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cartes">
                        <?php 
                        $similarCard1 = get_field( 'similar-card-1');
                        if ( $similarCard1 ):
                        ?>
                        <div class="carte--01 carte">
                        <img src="<?php echo esc_url( $similarCard1['similar-card-1-img']['url'] ); ?>" alt="<?php echo esc_attr( $similarCard1['similar-card-1-title'] ); ?>" />
                        <h3><?php echo esc_html( $similarCard1['similar-card-1-title'] ); ?></h3>
                        <p><?php echo esc_html( $similarCard1['similar-card-1-content'] ); ?></p>
                        </div>
                        <?php endif; ?>

                        <?php 
                        $similarCard2 = get_field( 'similar-card-2');
                        if ( $similarCard2 ):
                        ?>
                        <div class="carte--02 carte">
                        <img src="<?php echo esc_url( $similarCard2['similar-card-2-img']['url'] ); ?>" alt="<?php echo esc_attr( $similarCard2['similar-card-2-title'] ); ?>" />
                        <h3><?php echo esc_html( $similarCard2['similar-card-2-title'] ); ?></h3>
                        <p><?php echo esc_html( $similarCard2['similar-card-2-content'] ); ?></p>
                        </div>
                        <?php endif; ?>

                        <?php 
                        $similarCard3 = get_field( 'similar-card-3');
                        if ( $similarCard3 ):
                        ?>
                        <div class="carte--03 carte">
                        <img src="<?php echo esc_url( $similarCard3['similar-card-3-img']['url'] ); ?>" alt="<?php echo esc_attr( $similarCard3['similar-card-3-title'] ); ?>" />
                        <h3><?php echo esc_html( $similarCard3['similar-card-3-title'] ); ?></h3>
                        <p><?php echo esc_html( $similarCard3['similar-card-3-content'] ); ?></p>
                        </div>
                        <?php endif; ?>
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