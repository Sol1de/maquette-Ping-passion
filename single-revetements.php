<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PingPassion
 */
$datarevetements = get_fields();

get_header();
?>

	<main id="primary" class="site-main-single">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<div class="single-post">
				<?php the_post_thumbnail(); ?>
				<div class="infos-post">
					<h2><?php the_title(); ?></h2>
					<span class="single-divider"></span>
					<div class="prix">
						<p>169,90€</p>
						<p>TVA incluse</p>
					</div>
					<a href="#">AJOUTER AU PANIER</a>
					<section>
						<p>RAPIDITÉ: <span><?php echo $datarevetements["rapidite"] ?></span></p>
						<p>CONTRÔLE: <span><?php echo $datarevetements["controle"] ?></span></p>
						<p>ADHÉRENCE: <span><?php echo $datarevetements["adherence"] ?></span></p>
						<p>EPAISSEUR: <span><?php echo $datarevetements["epaisseur"] ?></span></p>
					</section>
				</div>
			</div>
			
			<div class="single-content">
				<?php the_content(); ?>
			</div>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>

		<?php endwhile; ?>

	</main><!-- #main -->

<?php
get_footer();
