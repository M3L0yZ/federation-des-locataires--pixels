<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer class="foot">
        <div class="foot__grid">
            <!-- Services -->
            <div class="foot__block">
                <ul class="foot__list">
                    <h2>Services</h2>
                    <li class="foot__item"><a class="foot__link" href="#">Devenir membre</a></li>
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
                    <h2>Nouvelles</h2>
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
                    <img class="foot__icon" src="./sources/icons/facebook_logo_secondary.png"></li>
                    <img class="foot__icon" src="./sources/icons/youtube.png"></li>
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
                    <img class="foot__logo" src="../theme-flhlmq/sources/medias/logo_quebec.svg"><br>
                    <img class="foot__logo" src="../theme-flhlmq/sources/medias/logo_rohq.png"><br>
                    <img class="foot__logo" src="../theme-flhlmq/sources/medias/logo_frapru.jpeg"><br>
                    <img class="foot__logo" src="../theme-flhlmq/sources/medias/logo_cnl.png">
                </div>
            </div>
            <a class="foot__block" href="index.html">
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
