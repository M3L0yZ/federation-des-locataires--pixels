<?php
/**
 * 	Template Name: partenaires
 * 	Template Post Type: post, partenaire
 */


// Fermeture de la zone de contenu principale ?>
</main>
<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>	<?php endif; ?>
    <footer class="foot">
        <?php
			//Récupération de l'emplacement du menu de navigation
			$menu_id = get_nav_menu_locations()['main-menu'];

			//Récupération de tous les éléments du menu de navigation
			$menu_items = wp_get_nav_menu_items($menu_id);
        ?>
        <div class="foot__grid">
            <!-- Services -->
            <?php $service = get_field('service'); ?>
            <div class="foot__block">
                <ul class="foot__list">
                    <?php
                    if ($menu_items[1]) {
						echo '<h2><a href="' . esc_url($menu_items[1]->url) . '">' . esc_html($menu_items[1]->title) . '</a></h2>';
					}
                    ?>
                    <li class="foot__item"><a class="foot__link" href="#"> membre </a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Droits des locataires</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Guides et règlements</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Témoignages</a></li>
                </ul>
            </div>
            
            <!-- À propos -->
            <div class="foot__block">
                <ul class="foot__list">
                    <h2>À propos</h2>
                    <li class="foot__item"><a class="foot__link" href="#">La fédération</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Notre histoire</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Notre équipe</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Nous joindre</a></li>
                </ul>
            </div>
            <!-- Publications -->
            <div class="foot__block">
                <ul class="foot__list">
                    <h2>Publications</h2>
                    <li class="foot__item"><a class="foot__link" href="#">Bulletins et infolettres</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Recherches et mémoires</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Communiqués</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Cahier de congrès</a></li>
                </ul>
            </div>
            <!-- Nouvelles -->
            <div class="foot__block">
                <ul class="foot__list">
                <?php
                    if ($menu_items[2]) {
						echo '<h2><a href="' . esc_url($menu_items[2]->url) . '">' . esc_html($menu_items[2]->title) . '</a></h2>';
					}
                    ?>
                    <li class="foot__item"><a class="foot__link" href="./news_hub.html">Actualité</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Dossiers</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Évènements et calendrier</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Capsules vidéos</a></li>
                </ul>
            </div>
            <!-- S'impliquer -->
            <div class="foot__block">
                <ul class="foot__list">
                    <h2>S'impliquer</h2>
                    <li class="foot__item"><a class="foot__link" href="#">Association de locataire</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Comité consultatif de résidents</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Conseil d'administration</a></li>
                    <li class="foot__item"><a class="foot__link" href="#">Faire un don</a></li>
                </ul>
            </div>
            <br>
            <!-- Autres -->
            <div class="foot__block">
                <div class="foot__social">
                <?php
                    // Récupérer les partenaires avec WP_Query
                    $reseaux = new WP_Query('post_type=reseau');
                    while ($reseaux->have_posts()) : $reseaux->the_post();
                        // Récupérer l'URL de l'image
                        $image = get_the_post_thumbnail_url(); // URL de l'image à la une
                        $urlreseau = get_field('urlreseau'); // URL personnalisée
                        ?>
                        <div>
                            <a class="foot__icon" href="<?php echo esc_url($urlreseau); ?>" target="_blank">
                                <img class="foot__icon"src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                            </a>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    
                </div>
            </div>
            <div class="foot__block">
                <div class="foot__contact">
                    <a class="foot__link" target="_blank" href="https://www.google.com/maps/place/2520+Av.+Lionel-Groulx+local+202,+Montr%C3%A9al,+QC+H3J+1J8/@45.484095,-73.5796457,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc91a70a26a7eb9:0x7d25ca49693610e0!8m2!3d45.4840913!4d-73.5770708?entry=ttu&g_ep=EgoyMDI0MTAwMi4xIKXMDSoASAFQAw%3D%3D">
                    2520, av. Lionel-Groulx, local 202<br>
                    Montréal, (Québec)<br>
                    H3J 1J8<br></a>
                </div>
                    </div>
            
            

            <div class="foot__block">
                <div class="foot__partenaire">
                <?php
                    // Récupérer les partenaires avec WP_Query
                    $partners = new WP_Query('post_type=partenaire');
                    while ($partners->have_posts()) : $partners->the_post();
                        // Récupérer l'URL de l'image
                        $image = get_the_post_thumbnail_url(); // URL de l'image à la une
                        $urlpartenaire = get_field('urlpartenaire'); // URL personnalisée
                        ?>
                        <div>
                            <a class="foot__logo" href="<?php echo esc_url($urlpartenaire); ?>" target="_blank">
                                <img class="foot__logo" src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                            </a>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    
                </div>
            </div>
            <a class="foot__block" href="<?php echo home_url('/index.php/accueil/'); ?>">
            <div class="foot__block">
                <div class="foot__banner"> 
                    <button class="foot__button" type="button">DONS</button>
                </div>
            </div></a>
        </div>
        <p class="droitAuteur">©2024 FLHLMQ par Pixels</p> 
    </footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
