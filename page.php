<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package upply-landing
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="header-container">
			<div class="img-inner">
				<span class="yellow img">
					<img src="/wp-content/uploads/2020/03/ASSETS-UPPLY-YELLOW-06-e1584542045186.png" alt="">
				</span>
				<span class="orange img">
					<img src="/wp-content/uploads/2020/03/ASSETS-UPPLY-ORANGE-02.png" alt="">
				</span>
				<span class="logo img">
					<img src="/wp-content/uploads/2020/03/UPPLY-LOGO-NAVY-09.png" alt="">
				</span>
				<div class="text">
					<h1>Cheeseburger With Bacon</h1>
					<p>The palatable sensation we lovingly refer to as The Cheeseburger has a 
					distinguished and illustrious history. It was born from humble roots, only to rise to well-seasoned 
					greatness.
					</p>
				</div>
			</div><!-- img-inner -->
			<div class="form-container">
				<?php the_field('shortcode'); ?>
			</div>
		</div><!-- header-container -->
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
