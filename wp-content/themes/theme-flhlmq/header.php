<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
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

	<header  class="header">
	<div class="header__grid">
            <!-- projet par etudiant -->
            <div class="header__block">
                <div class="head__etudiant">
                    <h1 class="projet-etudiant">Projet Étudiant réalisé dans un cadre scolaire au collège Montmorency
                    </h1>
                    <h1 class="voir-site-origine">Voir le site d'origine:<a
                            href="https://flhlmq.com/fr">www.flhlmq.com/fr</a></h1>
                    <div class="bouton-x-header-wrap">
                        <button class="bouton-x-header" onclick="myFunction()"> <img src="sources/icons/boutonX.png"
                                alt=""></button>
                    </div>
                </div>
            </div>
            <!-- dons -->
            <div class="header__block">
                <div class="header__don">
                    <div class="logo-federation-wrap">
                        <a href="./index.html"><img class="logo-federation" src="./sources/logo/logo-federation.png"></a>
                    </div>
                    <div class="bouton-don-wrap">
                        <button class="bouton-don" onclick="myFunction()">Dons</button>
                    </div>
                </div>
            </div>
        </div>

		<nav>
			<?php 
				// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
				wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
			?>
		</nav>

		<?php 
			// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
			bloginfo( 'description' ); 
		?>
	</header>

	<main><!-- Débute le contenu principal de notre site -->
