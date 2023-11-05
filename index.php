<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PingPassion
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="infos-pub">
			<p class="infos-pub-texte-1">Plus de 50m² dédiés au ping !<br> Au centre de Paris</p>
			<span class="infos-pub-divider first"></span>
			<p class="infos-pub-texte-2">PING-PASSION</p>
			<p class="infos-pub-texte-3">VOUS ACCUEILLE ET VOUS CONSEILLE</p>
			<p class="infos-pub-texte-4">Du mardi au vendredi de 8h à 18h <br> Le samedi de 10h à 18h</p>
			<span class="infos-pub-divider second"></span>
			<p class="infos-pub-texte-5">7 QUAI D'AUSTERLITZ - 75013 PARIS</p>
		</div>

		<div class="bienvenue">
		<p>BIENVENUE SUR LE SITE PING-PASSION</p>
		</div>
		
			<div class="pub-arg-container first">
				<div class="pub-arg">
					<i class="fa-solid fa-truck" style="color: #456183;"></i>
				</div>
				<h3>LIVRAISON EN 24H</h3>
				<p>Votre colis est préparé par nos soins dès réception de votre commande et livré avec notre partenaire TNT</p>
			</div>
			
			<div class="pub-arg-container">
				<div class="pub-arg">
					<i class="fa-solid fa-tag" style="color: #456183;"></i>
				</div>
				<h3>REMISES QUANTITATIVES</h3>
				<p>Des remises dès 60€ d’achat !<br>(hors fournitures)</p>
			</div>
			
			<div class="pub-arg-container last">
				<div class="pub-arg">
					<i class="fa-solid fa-p" style="color: #456183;"></i>
				</div>
				<h3>LES AVANTAGES PING-PASSION</h3>
				<div class="list-pub">
						<div class="list-pub-horizontal">
							<i class="fa-solid fa-thumbs-up" style="color: #456183;"></i>
							<p>Montage de raquette gratuit<br>(feuilles de protection offertes)</p>
						</div>
						<div class="list-pub-horizontal">
							<i class="fa-solid fa-thumbs-up" style="color: #456183;"></i>
							<p>Découpage à la machine</p>
						</div>
						<div class="list-pub-horizontal">
							<i class="fa-solid fa-thumbs-up" style="color: #456183;"></i>
							<p>Conseil téléphonique gratuit</p>
						</div>
				</div>
			</div>
		
	</main><!-- #main -->

<?php get_footer(); ?>
