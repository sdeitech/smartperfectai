<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();
?>

<section class="about_us_ourvalues ehss facility_page gallerypage">
	<div class="container">
		<div class="row sectionpadding-top section-padd-80" style="padding-bottom: 0;">

			<?php
			while ( have_posts() ) : the_post();
				echo the_content();
			endwhile;
			?>

		</div>
	</div>
</section>

<?php get_footer();
