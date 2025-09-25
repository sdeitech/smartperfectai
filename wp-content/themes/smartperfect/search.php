<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

//get_header(); 
get_header(); 
?>

<section class="about_us_ourvalues ehss facility_page">
	<div class="container">
		<div class="row sectionpadding-top ">  
			<div class="heading_sec">
				<h2 class="section-heading leftlineheading">
					Search Results for <span> <?php printf( __( '%s', 'twentyseventeen' ), '<strong>' . '&nbsp;' . get_search_query() . '</strong>' ); ?> </span> <span class="line"></span>
				</h2>
			</div>
		</div>
	</div>
</section>

<section class="dxp-section section-padd primary-bg">
            <div class="container">
            	<div class="row">

			
			<div id="primary" class="content-area">
				<main id="main search-main" class="site-main search_main_container" role="main">

				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();

					endwhile; 

					//echo do_shortcode('[ajax_load_more post_type="page" posts_per_page="20" search="'. get_search_query() .'" orderby="relevance" scroll="false" css_classes="plain-text" button_label="Load More" button_done_label="No Posts Remain..."]');
					echo do_shortcode('[ajax_load_more post_type="page,smart_bulletin" posts_per_page="20" search="'. get_search_query() .'" orderby="relevance" scroll="false" css_classes="plain-text" button_label="Load More" button_done_label="No Posts Remain..."]');

				else : ?>

					<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>

					<a href="javascript:void(0)" id="show-div-link" style="color: #000000;">Click here to search</a>
						<div id="hidden-div" style="display: none;">
						<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

						<form role="search" method="get" class="search-form" style="padding: 25px;" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
							<div class="container d-flex">
								<label for="<?php echo $unique_id; ?>">
									<span class="screen-reader-text"><?php echo _x( '', 'label', 'twentyseventeen' ); ?></span>
								</label>

								<?php
									$classes = get_body_class();
									//print_r($classes);
									if (in_array('search-no-results',$classes)) {
										?>
									    <input type="search" style="outline: 0;" id='search-text' class="search-field-notfound w-100" onkeyup="fetchnotsearch()" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" required/>
									    <?php
									}
								?>
								<button type="submit" id='search-button' class="search-submit"><svg id="searchNow" width="30" height="30" data-name="Search Now" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 490 490"><title>seach</title><path d="M495,466.2,377.2,348.4A205.77,205.77,0,0,0,424,217.5C424,103.5,331.5,11,217.5,11S11,103.5,11,217.5,103.4,424,217.5,424a205.41,205.41,0,0,0,130.8-46.7L466.1,495A20.4,20.4,0,0,0,495,466.2ZM217.5,382.9C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52,383,126.3,383,217.5,308.7,382.9,217.5,382.9Z" transform="translate(-11 -11)"/></svg></button>
							</div>
							
						</form>
					</div>

						<?php

				endif;
				?>
				<div id="datafetch" style="background: #ffffff;">
                        <div class="container"> 
                            <div id="dynamic_search_result_not"></div>
                        </div> 
                    </div>


				</main><!-- #main -->
			</div><!-- #primary -->
	<?php //get_sidebar(); ?>
	</div><!-- .wrap -->
</div>
</section><!-- .wrap -->

<?php get_sidebar('cta');
 get_footer();
