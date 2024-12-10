<?php
	/**
 * 	Template Name: header
 * 	Template Post Type: post
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title>
		<?php bloginfo('name'); // Affiche le nom du blog ?> | 
		<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<?php 
		// Tous les .css et .js sont chargés dans le fichier functions.php
	?>

	<?php wp_head(); 
	/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
		Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
		Vous pouvez la déplacer si désiré, mais garder là. */
	?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>
<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?><?php endif; ?>
	<header class="header">
		
	<div class="header__grid">
            <!------------- BANNIÈRE ÉTUDIANTE------------------->
            <div class="header__block">
				
                <div class="head__etudiant">
					 

                    <h1 class="projet-etudiant">Projet Étudiant réalisé dans un cadre scolaire au collège Montmorency</h1>
                    <h1 class="voir-site-origine">Voir le site d'origine:<a
                            href="https://flhlmq.com/fr">www.flhlmq.com/fr</a></h1>

					<div class="bouton-x-header-wrap">

						<!-- Lien vers l'image sur Wordpress -->
						<?php
                        echo '<button class="bouton-x-header" onclick="myFunction()"><div class="boutonximg"><img src="' . get_template_directory_uri() . '/sources/icons/boutonX.png"></div></button>'
						?> 
                    </div>
					
					
                </div>
            </div>
            <!-- dons -->
            <div class="header__block">
				<!-- Lien vers l'accueil -->
                <div class="header__don"><a href="<?php echo home_url('/index.php/accueil/'); ?>">
                    <div class="logo-federation-wrap">
						
						<!-- Lien vers l'image sur Wordpress -->	
						<?php
                        echo '
                        <a href="./index.php/accueil/"><img class="logo-federation" src="' . get_template_directory_uri() . '/sources/logo/logo-federation.png"></a>'
						?>
						
                    </div></a>
                    <div class="bouton-don-wrap">
                        <button class="bouton-don" onclick="myFunction()">Dons</button>
                    </div>
                </div>
            </div>
        </div>

<!------------- NAVIGATION -------------->

		<nav class="nav">
			<?php
			//Récupération de la localisation du menu
			$menu_id = get_nav_menu_locations()['main-menu'];

			//Récupération des éléments du menu
			$menu_items = wp_get_nav_menu_items($menu_id);

				//Récupération de l'élément #5 Search
				if ($menu_items[5]) {
					echo '<img class="logo-search" src="' . get_template_directory_uri() . '/sources/icons/symbole-de-linterface-de-recherche_light.png" alt="Search">';
				}
				//Récupération de l'élément #6 World
				if ($menu_items[6]) {
					echo '<img class="logo-langue" src="' . get_template_directory_uri() . '/sources/icons/world.png" alt="World">';
				}
			?>

			<!-- Bouton hamburger -->
			<a href="javascript:void(0);" class="menu-hamburger" onclick="boutonHamburger()">
				<i class="fa fa-bars"></i>
			</a>
			<ul class="nav__list">
				<?php
					//Récupération de l'élément #0 Accueil
					if ($menu_items[0]) {
						echo '<li class="nav__item"><a href="' . esc_url($menu_items[0]->url) . '">' . esc_html($menu_items[0]->title) . '</a></li>';
					}
					//Récupération de l'élément #1 Services
					if ($menu_items[1]) {
						echo '<li class="nav__item"><a href="' . esc_url($menu_items[1]->url) . '">' . esc_html($menu_items[1]->title) . '</a></li>';
					}
					//Récupération de l'élément #2 Nouvelles
					if ($menu_items[2]) {
						echo '<li class="nav__item"><a href="' . esc_url($menu_items[2]->url) . '">' . esc_html($menu_items[2]->title) . '</a></li>';
					}
					//Récupération de l'élément #4 Facebook
					if ($menu_items[3]) {
						echo '<li class="nav__item"><img class="icone-facebook" src="' . get_template_directory_uri() . '/sources/icons/facebook.png" alt="Facebook"></li>';
					}
					//Récupération de l'élément #5 Youtube
					if ($menu_items[4]) {
						echo '<li class="nav__item"><img class="icone-youtube" src="' . get_template_directory_uri() . '/sources/icons/youtube.png" alt="YouTube"></li>';
					}
				?>
				<!-- Input de recherche -->
				<li class="nav__item">
					<input type="search" id="search" name="search" placeholder="Rechercher">
				</li>
				<!-- Bouton multilangue -->
				<li class="nav__item"><a href="#">FR/EN</a></li>
			</ul>
		</nav>
		
        

		<?php 
			// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
			bloginfo( 'description' ); 
		?>
	</header>

	<main><!-- Débute le contenu principal de notre site -->
