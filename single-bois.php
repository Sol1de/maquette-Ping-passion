<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PingPassion
 */

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
				</div>
			</div>
			
			<div class="single-content">
				<?php the_content(); ?>
			</div>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
