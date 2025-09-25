<?php /* Template Name: About us*/ 
global $wpdb;
get_header();
?>

<main>
  <section class="pricing_banner_sec aboutbanner_sec">
    <div class="container">
      <div class="herobanner_inner_sec">
        <div class="herobanner_left">
          <h1 class="fs_xxl font_bold"> <?php echo get_field('subtext', get_the_ID()); ?> </h1>
          <div class="text_para">
            <?php echo get_field('subtext_description', get_the_ID()); ?>
          </div>
        </div>
        <div class="herobanner_right">
          <div class="lapii_img">
            <img class="w-100" src="<?php echo get_field('main_image', get_the_ID()); ?>" alt="bannerlapii" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="aboutus_sec">
    <div class="container">
      <div class="aboutus_inner">
        <div class="about_left">
          <img src="<?php echo get_field('second_section_image', get_the_ID()); ?>" alt="aboutimg">
        </div>
        <div class="about_right">
          <h2 class="fs_xl font_semibold color_secondary">
            <span class="text_green">About</span> Us
          </h2>
          <div class="text_para">
            <?php echo get_field('second_block_description', get_the_ID()); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about_smartcare_sec">
    <div class="container">
      <h2 class="fs_xl font_semibold color_secondary"> Why Choose <span class="text_green">smartCare AI</span>
      </h2>
      <p class="text">Trusted by Healthcare Organizations Worldwide</p>
      <div class="about_smartcare_inner">
        <div class="about_smartcare_item">
          <div class="smart_icon">
            <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect y="0.5" width="60" height="60" rx="10" fill="#2BAA95" />
              <path d="M24.9406 41.4786C25.4902 41.9612 26.0576 42.4591 26.6412 42.9752L26.6533 42.9859L28.5948 44.6629C28.8549 44.8877 29.1778 45 29.5006 45C29.8235 45 30.1464 44.8876 30.4066 44.6629L32.3477 42.9859L32.3597 42.9753C36.2032 39.5763 39.0848 36.9741 41.1696 34.4362C43.6046 31.4721 44.7387 28.7921 44.7387 26.002C44.7387 20.9541 40.7847 17 35.7369 17C33.4682 17 31.2266 17.8543 29.5006 19.3351C27.7743 17.8542 25.5326 17 23.2638 17C18.2159 16.9999 14.2617 20.9541 14.2617 26.0019C14.2617 32.1037 18.51 35.8332 24.9406 41.4786ZM23.9577 28.2289H27.6526V24.5338H31.3477V28.2289H35.0427V31.9238H31.3477V35.6187H27.6526V31.9238H23.9577V28.2289Z" fill="white" />
            </svg>
          </div>
          <h4>Healthcare Expertise</h4>
          <div class="text_para">
            <p>Deep understanding of healthcare workflows, compliance requirements, and industry challenges.</p>
          </div>
        </div>
        <div class="about_smartcare_item">
          <div class="smart_icon">
            <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect y="0.5" width="60" height="60" rx="10" fill="#2BAA95" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5532 35.6828H20.7884V45.0619H16.5532V35.6828ZM35.7233 23.3143H31.9446V29.5528C33.7769 27.8787 35.087 25.7143 35.7233 23.3143ZM40.7395 23.3143C39.9854 27.5647 37.4026 31.3199 33.5794 33.5272C33.0479 33.8342 32.5013 34.1049 31.9452 34.341V45.0625H43.4472V23.3143H40.7401H40.7395ZM29.6776 31.2121C30.1488 30.9399 30.6026 30.6388 31.0364 30.3104V28.3088H21.6972V32.8598C24.4728 33.1867 27.2548 32.6125 29.6776 31.2121ZM21.6972 34.8063V45.0625H31.0364V34.6914C28.0335 35.7344 24.7646 35.786 21.6972 34.8063ZM33.1241 32.7403C37.5491 30.1856 40.0335 25.5602 40.0587 20.793H42.2132L38.3583 16.9381L34.5034 20.793H37.0429C36.7786 25.2924 34.3288 29.5762 30.1335 31.999C27.3778 33.5887 24.3052 34.1248 21.379 33.7364C25.1126 35.1151 29.4099 34.886 33.1253 32.7397L33.1241 32.7403Z" fill="white" />
            </svg>
          </div>
          <h4>Global Scalability</h4>
          <div class="text_para">
            <p>Cloud-native architecture that scales globally while maintaining local compliance standards.</p>
          </div>
        </div>
        <div class="about_smartcare_item">
          <div class="smart_icon">
            <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect y="0.5" width="60" height="60" rx="10" fill="#2BAA95" />
              <path d="M39.8345 22.2437L30.7595 18.0625L30.6189 18.0062C30.2129 17.903 29.7875 17.903 29.3814 18.0062L29.2408 18.0625L20.1658 22.2437C19.7371 22.4411 19.3781 22.7632 19.1355 23.168C18.893 23.5728 18.7783 24.0414 18.8064 24.5125L19.1252 29.8375C19.3061 32.9002 20.3539 35.8484 22.1466 38.3383C23.9393 40.8281 26.4029 42.757 29.2502 43.9C29.4888 44.0074 29.7479 44.0618 30.0095 44.0593C30.2583 44.0632 30.5048 44.0119 30.7314 43.9093C33.5822 42.7692 36.0497 40.8415 37.8459 38.3515C39.642 35.8614 40.6927 32.9117 40.8752 29.8468L41.1939 24.5218C41.224 24.0492 41.1102 23.5786 40.8676 23.1719C40.6249 22.7653 40.2648 22.4417 39.8345 22.2437ZM34.922 28.8062L29.9158 34.4312C29.8344 34.5244 29.7353 34.6006 29.6242 34.6553C29.5132 34.71 29.3924 34.7422 29.2689 34.75H29.222C28.9865 34.7517 28.7589 34.6647 28.5845 34.5062L25.1439 31.3375C24.9612 31.1684 24.8531 30.9336 24.8434 30.6849C24.8337 30.4361 24.9233 30.1937 25.0924 30.0109C25.2614 29.8281 25.4962 29.72 25.745 29.7104C25.9937 29.7007 26.2362 29.7903 26.4189 29.9593L29.1564 32.4812L33.5158 27.5687C33.6831 27.3945 33.9113 27.2916 34.1526 27.2815C34.394 27.2713 34.6299 27.3548 34.8113 27.5143C34.9926 27.6739 35.1054 27.8974 35.126 28.138C35.1466 28.3787 35.0736 28.6181 34.922 28.8062Z" fill="white" />
            </svg>
          </div>
          <h4>Security First</h4>
          <div class="text_para">
            <p>Built with enterprise-grade security and privacy controls from the ground up.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bird_sec about_bird_sec">
    <div class="container">
      <div class="bird_inner_sec">
        <div class="bird_left">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/birdimg.png" alt="birdimg" />
        </div>
        <div class="bird_right">
          <h4 class="font_bold color_primary fs_lg"> Transforming <span class="text_green">Healthcare</span> Through Trust, Innovation, and Smart Technology </h4>
          <p class="font_md">
            <span class="text_green">For More Information</span>
          </p>
          <div class="sap_green_btn">
            <button type="button" onclick="location.href = 'https://www.smartdatainc.com';">Go To Our Website <i class="fa-solid fa-arrow-right icon"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php 
get_footer();
?>
