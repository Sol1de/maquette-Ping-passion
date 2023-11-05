<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PingPassion
 */

get_header();
?>

	<main id="primary" class="site-main-archive">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<p>ACCUEIL / <strong id="change-black">REVÊTEMENTS</strong></p>
				<p id="nb-produits">Affichage des produits 4</p>
			</header><!-- .page-header -->

			<div class="posts">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post(); ?>

					
					<div class="post-card">
						<h2><?php the_title() ?></h2>
						<?php the_post_thumbnail() ?>
						<a href="<?php the_permalink() ?>">En Savoir plus</a>
					</div>
				<?php endwhile; ?>
			</div>
					
				<?php the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			
			
	</main><!-- #main -->

<?php
get_footer();
