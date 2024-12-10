<?php
	/**
 * 	Template Name: logos
 * 	Template Post Type: post, logo
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
<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
	<header  class="header">
	<div class="header__grid">
            <!-- projet par etudiant -->
			<?php the_field('header-icons'); ?>
            <div class="header__block">
				
                <div class="head__etudiant">
					 

                    <h1 class="projet-etudiant"> <?php the_field('projet-fait'); ?> </h1>
                    <h1 class="voir-site-origine"><?php the_field('voir-site-origine'); ?><a href="<?php echo esc_url('site-origine'); ?>">www.flhlmq.com/fr</a></h1>

                    <div class="bouton-x-header-wrap">
                        <button class="bouton-x-header" onclick="myFunction()"> <img src="<?php echo esc_url('boutonx'); ?>"
                        alt=""></button>
                    </div>
					
					
                </div>
            </div>
            <!-- dons -->
            <div class="header__block">
                <div class="header__don">
                    <div class="logo-federation-wrap">
                        <a href="./index.html"><img class="logo-federation" src="<?php echo esc_url('logo-federation'); ?>"></a>
                    </div>
                    <div class="bouton-don-wrap">
                        <button class="bouton-don" onclick="myFunction()">Dons</button>
                    </div>
                </div>
            </div>
        </div>
<?php endif; ?>
		<nav class="nav">
			<img class="logo-search" src="./sources/icons/symbole-de-linterface-de-recherche_light.png">
			<img class="logo-langue" src="./sources/icons/world.png">
			<a href="javascript:void(0);" class="menu-hamburger" onclick="boutonHamburger()">
				<i class="fa fa-bars"></i>
			</a>
			<ul class="nav__list">
				<?php
					//Récupération de l'emplacement du menu de navigation
					$menu_id = get_nav_menu_locations()['main-menu'];

					//Récupération de tous les éléments du menu de navigation
					$menu_items = wp_get_nav_menu_items($menu_id);

					if ($menu_items[0]) {
						echo '<li class="nav__item"><a href="' . esc_url($menu_items[0]->url) . '">' . esc_html($menu_items[0]->title) . '</a></li>';
					}
					if ($menu_items[1]) {
						echo '<li class="nav__item"><a href="' . esc_url($menu_items[1]->url) . '">' . esc_html($menu_items[1]->title) . '</a></li>';
					}
					if ($menu_items[2]) {
						echo '<li class="nav__item"><a href="' . esc_url($menu_items[2]->url) . '">' . esc_html($menu_items[2]->title) . '</a></li>';
					}
					if ($menu_items[3]) {
						echo '<li class="nav__item"><img class="icone-facebook" src=src="./sources/icons/facebook.png">></li>';
					}
					if ($menu_items[4]) {
						echo '<li class="nav__item"><img class="icone-youtube" src="' . esc_url($menu_items[4]->url) . '"></li>';
					}
				?>
				<li class="nav__item"><img class="icone-facebook" src="./sources/icons/facebook.png"></li>
				<li class="nav__item"><img class="icone-youtube" src="./sources/icons/youtube.png"></li>
				<li class="nav__item">
					<input type="search" id="search" name="search" placeholder="Rechercher">
				</li>
				<li class="nav__item"><a href="#">FR/EN</a></li>
			</ul>
		</nav>
		
        

		<?php 
			// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
			bloginfo( 'description' ); 
		?>
	</header>

	<main><!-- Débute le contenu principal de notre site -->
