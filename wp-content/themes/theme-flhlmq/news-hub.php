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
				
                    <?php
                        //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                        $arguments = array( 
                            'post_type' => 'new-article',
                            's' => 'Pétition pour des HLM de qualité'
                        );
                        //Utilisation de wp query pour rechercher un post extérieur
                        $projects = new WP_Query($arguments); 
                        while ($projects->have_posts()) : $projects->the_post(); 
                         ?>
                        <!-- Ajout des champs personnalisés du groupe news-articles -->
                        <div class="container-texte">
                            <h3 class="news-hub_une__texte"><?php the_title(); ?></h3>
                            <p class="news-hub_une__texte"><?php the_field('card-summary'); ?></p>
                            <p class="news-hub_une__texte"><?php the_field('card-date'); ?></p>
                    <?php
                        endwhile; 
                        wp_reset_postdata(); 
                    ?>      <!-- Ajout d'un lien vers un article -->
                            <a href="<?php echo home_url('/index.php/new-article//petition-pour-des-hlm-de-qualite/'); ?>">
                                <!-- Ajout d'un champ personnalisé -->
                                <button class="bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                            </a>
                            <!-- Ajout d'un lien vers un article -->
                            <a href="<?php echo home_url('/index.php/new-article//petition-pour-des-hlm-de-qualite/'); ?>">
                                <!-- Ajout d'un champ personnalisé -->
                                <button class="bouton-savoir-plus"><?php the_field('news-cta-know-more'); ?></button>
                            </a>
                        </div>
                    <?php
                        //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                        $arguments = array( 
                            'post_type' => 'new-article',
                            's' => 'Pétition pour des HLM de qualité'
                        );
                        //Utilisation de wp query pour rechercher un post extérieur
                        $projects = new WP_Query($arguments);
                        while ($projects->have_posts()) : $projects->the_post(); 
                    ?>  <!-- Ajout des champs personnalisés du groupe news-articles -->
                        <img class="news-hub_une__photo1" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                    <?php
                        endwhile; 
                        wp_reset_postdata(); 
                    ?>
                    
            </div>
        </section>

        <hr class="division-sections">

        <!-------------- EN CONTINU-------------------->

        <section class="news-hub__en-continu">
            <!-- Ajout des champs personnalisés du groupe news-hub -->
            <h1 class="titre"><?php the_field('news-continu-title'); ?></h1>
            <hr class="hr-titre">
            <div class="news-hub__en-continu__menuDeroulant">
			<?php //Recherche des différentes options du menu déroulant
			$newsFilter = get_field_object('news-filter');
			$optionsFilter = $newsFilter['choices']; 
			?>
			<div class="select-container">
				<label>Filtre :</label>
				<select>
                    <!-- Affichage de chaque option -->
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
                            <?php
                                //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array( 
                                    'post_type' => 'new-article',
                                    's' => 'Première pelletée de terre pour Unitaînés à Rimouski'
                                );
                                //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments);
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <div class="carte__textes">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="carte__textes__sous-titre"><?php the_field('card-summary'); ?></p>
                                    <p class="carte__textes__date"><?php the_field('card-date'); ?></p>
                                </div>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
                            <!-- Ajout d'un lien vers un article spécifique -->
                            <a href="<?php echo home_url('/index.php/new-article/premiere-pelletee-de-terre-pour-unitaines-a-rimouski/'); ?>">
							<button class="bouton-carte-01 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                            </a>
                        </div>

                        <hr class="hr-cartes">

                        <div class="carte--02 carte">
                            <?php
                                //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array(
                                    'post_type' => 'new-article',
                                    's' => 'Une nouvelle voie rapide pour les développeurs'
                                );
                                //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments);
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <div class="carte__textes">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="carte__textes__sous-titre"><?php the_field('card-summary'); ?></p>
                                    <p class="carte__textes__date"><?php the_field('card-date'); ?></p>
                                </div>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
                            <!-- Ajout d'un lien vers un article spécifique -->
                            <a href="<?php echo home_url('/index.php/new-article/une-nouvelle-voie-rapide-pour-les-developpeurs/'); ?>">
							<button class="bouton-carte-01 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                            </a>
                        </div>

                        <hr class="hr-cartes">

                        <div class="carte--03 carte">
                            <?php
                                //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array(
                                    'post_type' => 'new-article',
                                    's' => 'Demande record de HLM à Saguenay'
                                );
                                //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments);
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <div class="carte__textes">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="carte__textes__sous-titre"><?php the_field('card-summary'); ?></p>
                                    <p class="carte__textes__date"><?php the_field('card-date'); ?></p>
                                </div>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
                            <!-- Ajout d'un lien vers un article spécifique -->
                            <a href="<?php echo home_url('/index.php/new-article/demande-record-de-hlm-a-saguenay/'); ?>">
							<button class="bouton-carte-01 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                            </a>
                        </div>

                        <hr class="hr-cartes">
                        
						<div class="carte--04 carte">
                            <?php
                                //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array(
                                    'post_type' => 'new-article',
                                    's' => 'Pétition pour des HLM de qualité'
                                );
                                //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments); 
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <div class="carte__textes">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="carte__textes__sous-titre"><?php the_field('card-summary'); ?></p>
                                    <p class="carte__textes__date"><?php the_field('card-date'); ?></p>
                                </div>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
							<button class="bouton-carte-01 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
						

                        <hr class="hr-cartes">

                        <div class="carte--05 carte">
                            <?php
                                //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array(
                                    'post_type' => 'new-article',
                                    's' => 'Pétition pour des HLM de qualité'
                                );
                                //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments);
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <div class="carte__textes">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="carte__textes__sous-titre"><?php the_field('card-summary'); ?></p>
                                    <p class="carte__textes__date"><?php the_field('card-date'); ?></p>
                                </div>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
							<button class="bouton-carte-01 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>

                        <hr class="hr-cartes">

                        <div class="carte--06 carte">
                            <?php
                                //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                                $arguments = array( 
                                    'post_type' => 'new-article',
                                    's' => 'Pétition pour des HLM de qualité'
                                );
                                //Utilisation de wp query pour rechercher un post extérieur
                                $projects = new WP_Query($arguments); 
                                while ($projects->have_posts()) : $projects->the_post(); 
                                ?>
                                <!-- Ajout des champs personnalisés du groupe news-articles -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                                <div class="carte__textes">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="carte__textes__sous-titre"><?php the_field('card-summary'); ?></p>
                                    <p class="carte__textes__date"><?php the_field('card-date'); ?></p>
                                </div>
                                <?php
                                endwhile; 
                                wp_reset_postdata(); 
                            ?>
							<button class="bouton-carte-01 bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
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
                            <!-- Ajout d'un champ personnalisé du groupe news-hub -->
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
                            <!-- Ajout d'un champ personnalisé du groupe news-hub -->
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
                            <!-- Ajout d'un champ personnalisé du groupe news-hub -->
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
                            <!-- Ajout d'un champ personnalisé du groupe news-hub -->
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
                            <!-- Ajout d'un champ personnalisé du groupe news-hub -->
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
                            <!-- Ajout d'un champ personnalisé du groupe news-hub -->
                            <button class="bouton-carte-06  bouton-lire-article"><?php the_field('news-cta-read'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination de la section En continu -->
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
            <!-- Ajout d'un champ personnalisé du groupe news-hub -->
            <h1 class="news-hub__consultes__titre"><?php the_field('news-consult-title'); ?></h1>
            <hr class="hr-titre">
            <div class="cartes">
                <?php
                    //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                    $arguments = array(
                        'post_type' => 'new-article',
                        's' => 'Pétition pour des HLM de qualité'
                    );
                    //Utilisation de wp query pour rechercher un post extérieur
                    $projects = new WP_Query($arguments);
                    while ($projects->have_posts()) : $projects->the_post(); 
                ?>  
                    <!-- Ajout des champs personnalisés du groupe news-articles -->
                    <div class="carte--01 carte" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                        <div class="carte__textes">
                            <h2>01</h2>
                            <h3><?php the_title(); ?></h3>
                            <p class="carte__textes__sous-titre"><?php the_field('card-summary'); ?></p>
                            <p class="carte__textes__date"><?php the_field('card-date'); ?></p>
                        </div>
                    </div>
                <?php
                    endwhile; 
                    wp_reset_postdata(); 
                ?>
                
                <hr class="hr-cartes">
                
                <?php
                    //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                    $arguments = array(
                        'post_type' => 'new-article',
                        's' => 'Demande record de HLM à Saguenay'
                    );
                    //Utilisation de wp query pour rechercher un post extérieur
                    $projects = new WP_Query($arguments);
                    while ($projects->have_posts()) : $projects->the_post(); 
                ?>
                    <!-- Ajout des champs personnalisés du groupe news-articles -->
                    <div class="carte--02 carte" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                        <div class="carte__textes">
                            <h2>02</h2>
                            <h3><?php the_title(); ?></h3>
                            <p class="carte__textes__sous-titre"><?php the_field('card-summary'); ?></p>
                            <p class="carte__textes__date"><?php the_field('card-date'); ?></p>
                        </div>
                    </div>
                <?php
                    endwhile; 
                    wp_reset_postdata(); 
                ?>
                
                <hr class="hr-cartes">
                
                <?php
                    //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                    $arguments = array( 
                        'post_type' => 'new-article',
                        's' => 'Une nouvelle voie rapide pour les développeurs'
                    );
                    //Utilisation de wp query pour rechercher un post extérieur
                    $projects = new WP_Query($arguments); 
                    while ($projects->have_posts()) : $projects->the_post(); 
                ?>
                    <!-- Ajout des champs personnalisés du groupe news-articles -->
                    <div class="carte--03 carte" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
                        <div class="carte__textes">
                            <h2>03</h2>
                            <h3><?php the_title(); ?></h3>
                            <p class="carte__textes__sous-titre"><?php the_field('card-summary'); ?></p>
                            <p class="carte__textes__date"><?php the_field('card-date'); ?></p>
                        </div>
                    </div>
                <?php
                    endwhile; 
                    wp_reset_postdata(); 
                ?>
                
                <hr class="hr-cartes">
                
                <?php
                    //Recherche d'une page spécifique dans le post new-article avec le nom de la page
                    $arguments = array( 
                        'post_type' => 'new-article',
                        's' => 'Première pelletée de terre pour Unitaînés à Rimouski'
                    );
                    //Utilisation de wp query pour rechercher un post extérieur
                    $projects = new WP_Query($arguments); 
                    while ($projects->have_posts()) : $projects->the_post(); 
                ?>
                    <!-- Ajout des champs personnalisés du groupe news-articles -->
                    <div class="carte--04 carte" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
                        <div class="carte__textes">
                            <h2>04</h2>
                            <h3><?php the_title(); ?></h3>
                            <p class="carte__textes__sous-titre"><?php the_field('card-summary'); ?></p>
                            <p class="carte__textes__date"><?php the_field('card-date'); ?></p>
                        </div>
                    </div>
                <?php
                    endwhile; 
                    wp_reset_postdata(); 
                ?>
                
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