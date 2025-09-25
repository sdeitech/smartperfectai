<?php        
get_header();

if (have_posts()) :
  while (have_posts()) : the_post();
    $post_id = get_the_ID();
    $title = get_the_title($post_id);
    $content = get_the_content($post_id);
    $excerpt = get_the_excerpt($post_id);
    $thumbnail = get_the_post_thumbnail_url($post_id, 'full');

?>

<main>
      <section class="detail_sec">
        <div class="container">
          <div class="detail_sec_inner">
            <div class="det_img">
              <img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php echo the_title(); ?>" />
              
            </div>
            <h4 class="det_title sap_lg_head">
              <?php echo esc_html($title); ?>
            </h4>
            <div class="dettext_para">
              <?php echo apply_filters('the_content', $content); //echo $content; ?>
            </div>
          </div>
        </div>
      </section>
<?php

endwhile;
else :
  echo '<p>No content found</p>';
endif;

wp_reset_postdata();
get_sidebar('cta'); 
get_footer();
?>