<?php 
/**
 * 	Template Name: À la une
 * 	Template Post Type: page
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<section class="news-hub_une">
            <h1 class="news-hub_une__titre"><?php the_title();?></h1>
            <hr class="hr-titre">
			<?php 
            $newsOne = get_field( 'news-one');
            if ( $newsOne ):
            ?>
            <div class="container-informations">
				<div class="container-texte">
            
            <h3  class="news-hub_une__texte"><?php echo esc_html( $newsOne['news-one-title'] ); ?></h3>
            <p><?php echo esc_html( $newsOne['similar-card-1-content'] ); ?></p>
                    <p class="news-hub_une__texte"><?php echo esc_html( $newsOne['news-one-summary'] ); ?></p>
                    <p class="news-hub_une__texte"><?php echo esc_html( $newsOne['news-one-date'] ); ?></p>
                    <a href="./news_article.html">
                        <button class="bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                    </a>
                    <a href="./news_article.html">
                        <button class="bouton-savoir-plus"><?php the_field('news-cta-know-more'); ?></button>
                    </a>
                </div>
				<img class="news-hub_une__photo1" src="<?php echo esc_url( $newsOne['news-one-img']['url'] ); ?>" alt="<?php echo esc_attr( $newsOne['news-one-img'] ); ?>" />
            </div>
            <?php endif; ?>
        </section>

        <hr class="division-sections">

        <!-------------- EN CONTINU-------------------->

        <section class="news-hub__en-continu">
            <h1 class="titre"><?php the_field('news-continu-title'); ?></h1>
            <hr class="hr-titre">
            <div class="news-hub__en-continu__menuDeroulant">
			<?php
			$newsFilter = get_field_object('news-filter');
			$optionsFilter = $newsFilter['choices']; 
			?>
			<div class="select-container">
				<label>Filtre :</label>
				<select>
					<?php foreach ($optionsFilter as $value => $label): ?>
						<option value="<?php echo esc_attr($value); ?>" <?php selected($newsFilter, $value); ?>>
							<?php echo esc_html($label); ?>
						</option>
					<?php endforeach; ?>
				</select>
			</div>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-1">
                    <div class="cartes">



                    
						<?php 
                        $newsContinu1 = get_field( 'news-continu-1');
                        if ( $newsContinu1 ):
                        ?>
                        <div class="carte--01 carte">
                        	<img src="<?php echo esc_url( $newsContinu1['news-continu-img']['url'] ); ?>" alt="<?php echo esc_attr( $newsContinu1['news-continu-img'] ); ?>" />
							<div class="carte__textes">
                                <h3><?php echo esc_html( $newsContinu1['news-continu-title'] ); ?></h3>
                                <p class="carte__textes__sous-titre"><?php echo esc_html( $newsContinu1['news-continu-summary'] ); ?></p>
                                <p class="carte__textes__date"><?php echo esc_html( $newsContinu1['news-continu-date'] ); ?></p>
                            </div>
							<button class="bouton-carte-01 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <?php endif; ?>

                        <hr class="hr-cartes">

                        <?php 
                        $newsContinu2 = get_field( 'news-continu-2');
                        if ( $newsContinu2 ):
                        ?>
                        <div class="carte--02 carte">
						<img src="<?php echo esc_url( $newsContinu2['news-continu-img']['url'] ); ?>" alt="<?php echo esc_attr( $newsContinu2['news-continu-img'] ); ?>" />
							<div class="carte__textes">
                                <h3><?php echo esc_html( $newsContinu2['news-continu-title'] ); ?></h3>
                                <p class="carte__textes__sous-titre"><?php echo esc_html( $newsContinu2['news-continu-summary'] ); ?></p>
                                <p class="carte__textes__date"><?php echo esc_html( $newsContinu2['news-continu-date'] ); ?></p>
                            </div>
							<button class="bouton-carte-02 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <?php endif; ?>

                        <hr class="hr-cartes">

                        <?php 
                        $newsContinu3 = get_field( 'news-continu-3');
                        if ( $newsContinu3 ):
                        ?>
                        <div class="carte--03 carte">
                        	<img src="<?php echo esc_url( $newsContinu3['news-continu-img']['url'] ); ?>" alt="<?php echo esc_attr( $newsContinu3['news-continu-img'] ); ?>" />
							<div class="carte__textes">
                                <h3><?php echo esc_html( $newsContinu3['news-continu-title'] ); ?></h3>
                                <p class="carte__textes__sous-titre"><?php echo esc_html( $newsContinu3['news-continu-summary'] ); ?></p>
                                <p class="carte__textes__date"><?php echo esc_html( $newsContinu3['news-continu-date'] ); ?></p>
                            </div>
							<button class="bouton-carte-03 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <?php endif; ?>

                        <hr class="hr-cartes">
                        
						<?php 
                        $newsContinu4 = get_field( 'news-continu-4');
						if ( $newsContinu4 ) :
						?>
						<div class="carte--04 carte">
							<img src="<?php echo esc_url( $newsContinu4['news-continu-img']['url'] ); ?>" alt="<?php echo esc_attr( $newsContinu4['news-continu-img'] ); ?>" />
							<div class="carte__textes">
								<h3><?php echo esc_html( $newsContinu4['news-continu-title'] ); ?></h3>
								<p class="carte__textes__sous-titre"><?php echo esc_html( $newsContinu4['news-continu-summary'] ); ?></p>
								<p class="carte__textes__date"><?php echo esc_html( $newsContinu4['news-continu-date'] ); ?></p>
							</div>
							<button class="bouton-carte-04 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
						</div>
						<?php endif; ?>
						

                        <hr class="hr-cartes">

                        <?php 
                        $newsContinu5 = get_field( 'news-continu-5');
                        if ( $newsContinu5 ):
                        ?>
                        <div class="carte--05 carte">
                        	<img src="<?php echo esc_url( $newsContinu5['news-continu-img']['url'] ); ?>" alt="<?php echo esc_attr( $newsContinu5['news-continu-img'] ); ?>" />
							<div class="carte__textes">
                                <h3><?php echo esc_html( $newsContinu5['news-continu-title'] ); ?></h3>
                                <p class="carte__textes__sous-titre"><?php echo esc_html( $newsContinu5['news-continu-summary'] ); ?></p>
                                <p class="carte__textes__date"><?php echo esc_html( $newsContinu5['news-continu-date'] ); ?></p>
                            </div>
							<button class="bouton-carte-05 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <?php endif; ?>

                        <hr class="hr-cartes">

                        <?php 
                        $newsContinu6 = get_field( 'news-continu-6');
                        if ( $newsContinu6 ):
                        ?>
                        <div class="carte--06 carte">
                        	<img src="<?php echo esc_url( $newsContinu6['news-continu-img']['url'] ); ?>" alt="<?php echo esc_attr( $newsContinu6['news-continu-img'] ); ?>" />
							<div class="carte__textes">
                                <h3><?php echo esc_html( $newsContinu6['news-continu-title'] ); ?></h3>
                                <p class="carte__textes__sous-titre"><?php echo esc_html( $newsContinu6['news-continu-summary'] ); ?></p>
                                <p class="carte__textes__date"><?php echo esc_html( $newsContinu6['news-continu-date'] ); ?></p>
                            </div>
							<button class="bouton-carte-06 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="swiper-slide slide-2">
                    <div class="cartes">
                        <div class="carte--01 carte">
                            <img src="./sources/medias/actualite_27_aout_innondations.jpg">
                            <div class="carte__textes">
                                <h3>Inondations dans Lanaudière</h3>
                                <p class="carte__textes__sous-titre">La SHQ s’occupe de ses locataires.</p>
                                <p class="carte__textes__date">27 août, 2024</p>
                            </div>
                            <button class="bouton-carte-01 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <hr class="hr-cartes">
                        <div class="carte--02 carte">
                            <img src="./sources/medias/actualite_27_aout_hlm.jpg">
                            <div class="carte__textes">
                                <h3>Des HLM préfabriqués ?</h3>
                                <p class="carte__textes__sous-titre">Une occasion en or pour les offices.</p>
                                <p class="carte__textes__date">27 août, 2024</p>
                            </div>
                            <button class="bouton-carte-02  bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <hr class="hr-cartes">
                        <div class="carte--03 carte">
                            <img src="./sources/medias/actualite_22_aout_strategie.jpg">
                            <div class="carte__textes">
                                <h3>Une stratégie qui limite à 4% le nombre de logements sociaux à venir</h3>
                                <p class="carte__textes__sous-titre">Des objectifs minables pour les ménages à
                                    faible
                                    revenu.</p>
                                <p class="carte__textes__date">22 août, 2024</p>
                            </div>
                            <button class="bouton-carte-03  bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <hr class="hr-cartes">
                        <div class="carte--04 carte">
                            <img src="./sources/medias/actualite_21_aout_construction.jpg">
                            <div class="carte__textes">
                                <h3>Un plan radical de construction en Angleterre</h3>
                                <p class="carte__textes__sous-titre">Dix fois mieux que le Québec !</p>
                                <p class="carte__textes__date">21 août, 2024</p>
                            </div>
                            <button class="bouton-carte-04  bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <hr class="hr-cartes">
                        <div class="carte--05 carte">
                            <img src="./sources/medias/actualite_20_aout_manifestation.png">
                            <div class="carte__textes">
                                <h3>Manifestons à Québec les 14 et 15 septembre</h3>
                                <p class="carte__textes__sous-titre">La FLHLMQ sera présente pour réclamer des HLM.
                                </p>
                                <p class="carte__textes__date">20 août, 2024</p>
                            </div>
                            <button class="bouton-carte-05  bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>gffffffhg
                        <hr class="hr-cartes">
                        <div class="carte--06 carte">
                            <img src="./sources/medias/actuaite_19_aout_benoit.jpg">
                            <div class="carte__textes">
                                <h3>Rencontre avec Benoit Dorais</h3>
                                <p class="carte__textes__sous-titre">Montréal attend beaucoup de son office !</p>
                                <p class="carte__textes__date">19 août, 2024</p>
                            </div>
                            <button class="bouton-carte-06  bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination (if needed) -->
            <div class="menu-pages">
                <div class="menu-pages__cercles">
                    <button onclick="changerSlide(0)" class="pagination-button menu-pages__cercle active"
                        id="button0">1</button>
                    <button onclick="changerSlide(1)" class="pagination-button menu-pages__cercle"
                        id="button1">2</button>
                </div>
            </div>

        </section>

        <hr class="division-sections">

        <!-------------- LES PLUS CONSULTÉS -------------------->

        <section class="news-hub__consultes">
            <h1 class="news-hub__consultes__titre"><?php the_field('news-consult-title'); ?></h1>
            <hr class="hr-titre">
            <div class="cartes">
                <div class="carte--01 carte">
                    <img src="./sources/medias/actualite_27_aout_innondations.jpg">
                    <div class="carte__textes">
                        <h2>01</h2>
                        <h3>Inondations dans Lanaudière</h3>
                        <p class="carte__textes__sous-titre">La SHQ s’occupe de ses locataires.</p>
                        <p class="carte__textes__date">27 août, 2024</p>
                    </div>
                </div>
                <hr class="hr-cartes">
                <div class="carte--02 carte">
                    <img src="./sources/medias/actualite_27_aout_hlm.jpg">
                    <div class="carte__textes">
                        <h2>02</h2>
                        <h3>Des HLM préfabriqués ?</h3>
                        <p class="carte__textes__sous-titre">Une occasion en or pour les offices.</p>
                        <p class="carte__textes__date">27 août, 2024</p>
                    </div>
                </div>
                <hr class="hr-cartes">
                <div class="carte--03 carte">
                    <img src="./sources/medias/actuaite_19_aout_benoit.jpg">
                    <div class="carte__textes">
                        <h2>03</h2>
                        <h3>Rencontre avec Benoit Dorais</h3>
                        <p class="carte__textes__sous-titre">Montréal attend beaucoup de son office !</p>
                        <p class="carte__textes__date">19 août, 2024</p>
                    </div>
                </div>
                <hr class="hr-cartes">
                <div class="carte--04 carte">
                    <img src="./sources/medias/actualite_20_aout_manifestation.png">
                    <div class="carte__textes">
                        <h2>04</h2>
                        <h3>Manifestons à Québec les 14 et 15 septembre</h3>
                        <p class="carte__textes__sous-titre">La FLHLMQ sera présente pour réclamer des HLM.</p>
                        <p class="carte__textes__date">20 août, 2024</p>
                    </div>
                </div>
            </div>
        </section>
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