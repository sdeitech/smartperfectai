<?php /* Template Name: Contact us */ 
global $wpdb;
get_header();
?>

<main>
  <section class="pricing_banner_sec">
    <div class="container">
      <div class="herobanner_inner_sec">
        <div class="herobanner_left">
          <h1 class="fs_xxl font_bold">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                $post_id = get_the_ID();
                $thumbnail = get_the_post_thumbnail_url($post_id, 'full');
                echo get_the_content();
                endwhile; endif; 
              ?>
          </h1>
          <div class="text_para">
            <?php echo get_field('subtext', get_the_ID()); ?>
          </div>
          <div class="sap_green_btn">
            <button type="button" onclick="location.href = '/contact-us';"><?php echo get_field('button_text', get_the_ID()); ?><i class="fa-solid fa-arrow-right icon"></i></button>
          </div>
        </div>
        <div class="herobanner_right">
          <div class="lapii_img">
            <img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php echo the_title(); ?>" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="message_sec">
    <div class="container">
      <div class="message_sec_inner">
        <h2 class="fs_xl font_semibold color_secondary"> Send Us a <span class="text_green">Message</span>
        </h2>
        <p>Fill out the form below and we'll respond as soon as possible. </p>
        <div class="message_field">
          <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form"]'); ?>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- <section class="question_sec">
    <div class="container">
      <div class="question_sec_inner">
        <h2 class="fs_xl font_semibold color_secondary"> Frequently Asked <span class="text_green">Questions</span>
        </h2>
        <p>Quick answers to common questions about contacting us</p>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <?php //echo get_field('question_1', get_the_ID()); ?> </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <?php //echo get_field('answer_1', get_the_ID()); ?> </button>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <?php //echo get_field('question_2', get_the_ID()); ?> </button></button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <?php //echo get_field('answer_2', get_the_ID()); ?> </button>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <?php //echo get_field('question_3', get_the_ID()); ?> </button></button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
               <?php //echo get_field('answer_3', get_the_ID()); ?> </button>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingfour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour"> <?php //echo get_field('question_4', get_the_ID()); ?> </button> </button>
            </h2>
            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <?php //echo get_field('answer_4', get_the_ID()); ?> </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
</main>

      
<?php 
get_footer();
?>