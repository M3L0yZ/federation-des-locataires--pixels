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
            <div class="container-informations">
                <div class="container-texte">
                    <h3 class="news-hub_une__texte">
                        Pétition pour des HLM de qualité
                    </h3>
                    <p class="news-hub_une__texte"> La FLHLMQ souhaite récolter 10 000 signatures.</p>
                    <p class="news-hub_une__texte">11 septembre, 2024</p>
                    <a href="./news_article.html">
                        <button class="bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                    </a>
                    <a href="./news_article.html">
                        <button class="bouton-savoir-plus">En savoir plus</button>
                    </a>
                </div>
                <img class="news-hub_une__photo1" src="./sources/medias/actualite_11_sept_petition.png">
            </div>

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
                        <div class="carte--01 carte">
                            <img src="./sources/medias/actualite_11_sept_mepris.png">
                            <div class="carte__textes">
                                <h3>Le mépris a assez duré !</h3>
                                <p class="carte__textes__sous-titre">L'Office d'habitation du lac Abitibi doit
                                    changer
                                    d'attitude.</p>
                                <p class="carte__textes__date">11 septembre 2024</p>
                            </div>
                            <button class="bouton-carte-01 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <hr class="hr-cartes">
                        <div class="carte--02 carte">
                            <img src="./sources/medias/actualite_10_sept_unitaines.png">
                            <div class="carte__textes">
                                <h3>Première pelletée de terre pour Unitaînés à Rimouski</h3>
                                <p class="carte__textes__sous-titre">Les offices ne doivent pas dépendre des autres
                                    pour
                                    remplir leur mission.</p>
                                <p class="carte__textes__date">10 septembre, 2024</p>
                            </div>
                            <button class="bouton-carte-02  bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <hr class="hr-cartes">
                        <div class="carte--03 carte">
                            <img src="./sources/medias/actualite_5_sept_securite.jpg">
                            <div class="carte__textes">
                                <h3>Sécurité communautaire dans un HLM de Montréal</h3>
                                <p class="carte__textes__sous-titre">Les locataires ne sont pas seuls !</p>
                                <p class="carte__textes__date">5 septembre, 2024</p>
                            </div>
                            <button class="bouton-carte-03  bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <hr class="hr-cartes">
                        <div class="carte--04 carte">
                            <img src="./sources/medias/actualite_4_sept_manifestation.png">
                            <div class="carte__textes">
                                <h3>Manifestation du 15 septembre à Québec</h3>
                                <p class="carte__textes__sous-titre">On marche derrière la bannière « Je veux un HLM
                                    » !
                                </p>
                                <p class="carte__textes__date">4 septembre, 2024</p>
                            </div>
                            <button class="bouton-carte-04  bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <hr class="hr-cartes">
                        <div class="carte--05 carte">
                            <img src="./sources/medias/actualite_3_sept_demande.png">
                            <div class="carte__textes">
                                <h3>Demande record de HLM à Saguenay</h3>
                                <p class="carte__textes__sous-titre">La liste explose de 200-300 à 454 personnes en
                                    attente.</p>
                                <p class="carte__textes__date">3 septembre, 2024</p>
                            </div>
                            <button class="bouton-carte-05  bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                        <hr class="hr-cartes">
                        <div class="carte--06 carte">
                            <img src="./sources/medias/actualite_30_aout_voie.png">
                            <div class="carte__textes">
                                <h3>Une nouvelle voie rapide pour les développeurs</h3>
                                <p class="carte__textes__sous-titre">Les offices d'habitation doivent être du
                                    nombre.
                                </p>
                                <p class="carte__textes__date">30 août, 2024</p>
                            </div>
                            <button class="bouton-carte-06  bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
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
                        </div>
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