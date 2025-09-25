<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

<section class="ehssDetail">
    <div class="container">
        <div class="row top_row">
            <div class="bannerimgs" <?php if(has_post_thumbnail()) {?> style="" <?php  } else { ?> style="margin-bottom:0px;" <?php }?>>
                <?php if(has_post_thumbnail()) {
                  the_post_thumbnail();
                   }
                   ?>
            </div>
            <div class="heading_sec">
                <h2 class="section-heading leftlineheading">
                    <?php 
                    $words = explode( ' ', get_the_title());
                    array_shift( $words);
                    $variable = implode( ' ', $words);
                    ?>
                    <?php echo strtok(get_the_title(), " ") ?><span><?php echo ' ' . $variable; ?></span><span class="line"></span>
                </h2>
            </div>
            <?php echo get_the_content(); ?>
            
        </div>
    </div>
</section>


<?php 
get_sidebar('cta'); 
get_footer(); ?>