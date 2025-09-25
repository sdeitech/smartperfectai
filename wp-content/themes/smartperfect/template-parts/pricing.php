<?php /* Template Name: Pricing */ 
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
            endwhile; endif; ?>
          </h1>
          <div class="text_para">
            <?php echo get_field('subtext', get_the_ID()); ?>
          </div>
          <div class="sap_green_btn">
            <button type="button" onclick="location.href = '/contact-us';"> <?php echo get_field('button_text', get_the_ID()); ?><i class="fa-solid fa-arrow-right icon"></i></button>
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
  <section class="pricing_plan_sec">
    <div class="container">
      <div class="pricing_plan_inner">
        <h2 class="fs_xl font_semibold color_secondary"> Our <span class="text_green">Plans</span>
        </h2>
        <p>All plans include GST and are designed for clinics of every size.</p>
        <div class="table-responsive">
          <table style="width:100%">
            <tr>
              <th>Offering</th>
              <!-- <th>Base Price</th> 
              <th>Add Ons</th>-->
              <th>Tablet</th>
              <!-- <th>Total Price</th> -->
            </tr>
            <tr>
              <td>Full Product</td>
              <!-- <td>₹50,000</td> 
              <td>-</td>-->
              <td>Yes</td>
              <!-- <td>₹60,000</td> -->
            </tr>
            <tr>
              <td>3-Month Subscription</td>
              <!-- <td>₹18,000</td> 
              <td>-</td>-->
              <td>No</td>
              <!-- <td>₹18,000</td> -->
            </tr>
            <tr>
              <td>Two User Full Product (One Tablet)</td>
              <!-- <td>₹50,000</td> 
              <td>₹20,000</td>-->
              <td>Yes (1 tab)</td>
              <!-- <td>₹70,000</td> -->
            </tr>
            <tr>
              <td>Two User Full Product (Two Tablets)</td>
              <!-- <td>₹50,000</td> 
              <td>₹30,000</td>-->
              <td>Yes (2 tabs)</td>
              <!-- <td>₹80,000</td> -->
            </tr>
            <tr>
              <td>Dr Dashboard + Front Desk</td>
              <!-- <td>₹25,000</td> 
              <td>-</td>-->
              <td>No</td>
              <!-- <td>₹25,000</td> -->
            </tr>
            <tr>
              <td>+ Pharmacy</td>
              <!-- <td></td> 
              <td>₹12,500</td>-->
              <td>No</td>
              <!-- <td>₹37,500</td> -->
            </tr>
            <tr>
              <td>+ Lab</td>
              <!-- <td></td> 
              <td>₹12,500</td>-->
              <td>No</td>
              <!-- <td>₹37,500</td> -->
            </tr>
            <tr>
              <td>Two User Dr Dashboard + Front Desk</td>
              <!-- <td>₹25,000</td> 
              <td>₹10,000</td>-->
              <td>No</td>
              <!-- <td>₹35,000</td> -->
            </tr>
            <tr>
              <td>+ Pharmacy</td>
              <!-- <td></td> 
              <td>₹12,500</td>-->
              <td>No</td>
              <!-- <td>₹47,500</td> -->
            </tr>
            <tr>
              <td>Add Tablet (Optional, per unit)</td>
              <!-- <td>-</td> 
              <td>₹10,000</td>-->
              <td>-</td>
              <!-- <td>-</td> -->
            </tr>
            <tr>
              <td>Zoom Video Consultation Integration (Optional)</td>
              <!-- <td></td> 
              <td>Basic Free</td>-->
              <td>TBD</td>
             <!--  <td>-</td> -->
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>
  <?php echo get_sidebar('cta'); ?>
</main>

<?php 
get_footer();
?>
