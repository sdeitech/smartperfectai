<?php        
get_header();

/*****new code for category don't touch******/


?>

<?php if ( have_posts() ) :
  while ( have_posts() ) : the_post();

    if ( in_category('healthcare') ) : ?>
      <?php get_template_part('template-parts/category-healthcare'); ?>
      
    <?php else : ?>
      <section class="ehssDetail">
        <div class="container">
          <div class="row top_row section-padd-100 testing" style="padding-top: 0;">
            <div class="bannerimgs demo">
              <?php 
                if(get_field('banner_image', get_the_ID()) != ''){
                  ?>
                  <img src="<?php echo get_field('banner_image', get_the_ID()); ?>" />
                  <?php 
                }
                else{
                  the_post_thumbnail();
                } ?>
           </div>
           <h2><?php the_title(); ?></h2>
         <?php // if ( have_posts() ) : while ( have_posts() ) : the_post();
         echo '<p>'.get_the_content().'</p>';
         ?>
       </div>
     </div>
   </section>
   <?php
 endif;

endwhile; 
else :
 echo '<p>No posts found.</p>';
endif;
?>

<?php
get_sidebar('cta'); 
get_footer();
?>