<?php 
  /* Template Name: Homepage */ 
  global $wpdb;
  get_header();
?> 
<main>
  <section class="herobanner_sec">
    <div class="container">
      <div class="bannerhomepageslider" id="bannerhomepageslider">
        <div class="row">
          <div class="herobanner_inner_sec">
            <div class="herobanner_left">
              <h1 class="fs_xxl font_bold"> <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                      echo get_the_content();
                  endwhile; endif; ?> </h1>
              <div class="text_para"> <?php echo get_field('subtext', get_the_ID()); ?> </div>
              <div class="sap_green_btn">
                <button type="button" onclick="location.href = '/contact-us';"> <?php echo get_field('button_text', get_the_ID()); ?><i class="fa-solid fa-arrow-right icon"></i> </button>
                <div id="play-overlay" style="display:none;">
                    <button>Play Video with Sound</button>
                </div>
              </div>
            </div>
            <div class="herobanner_right">
              <div class="lapii_img">
                <img class="w-100" src="<?php bloginfo('template_url'); ?>/assets/img/actionimg.png" alt="actionimg" />
                  <video class="video-on-screen" loop controls>
                    <source src="<?php bloginfo('template_url'); ?>/assets/img/perfectvideo.mp4" type="video/mp4"> Your browser does not support the video tag.
                  </video>
                <img class="audioshade" src="
                    <?php bloginfo('template_url'); ?>/assets/img/banneraudioshade.png" alt="audioshade" />
                <a href="#">
                  <img class="audio" src="<?php bloginfo('template_url'); ?>/assets/img/banneraudio.png" alt="audio" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="herobanner_inner_sec">
            <div class="herobanner_left">
              <h1 class="fs_xxl font_bold"> <?php echo get_field('second_slider_title', get_the_ID()); ?> </h1>
              <div class="text_para"> <?php echo get_field('second_slider_description', get_the_ID()); ?> </div>
              <div class="sap_green_btn">
                <button type="button" onclick="location.href = '/contact-us';"> <?php echo get_field('second_slider_button_title', get_the_ID()); ?><i class="fa-solid fa-arrow-right icon"></i> </button>
              </div>
            </div>
            <div class="herobanner_right">
              <div class="lapii_img">
                <img class="w-100" src="<?php echo get_field('second_slider_image', get_the_ID()); ?>" alt="actionimg" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="herobanner_inner_sec">
            <div class="herobanner_left">
              <h1 class="fs_xxl font_bold"> <?php echo get_field('third_slider_title', get_the_ID()); ?> </h1>
              <div class="text_para"> <?php echo get_field('third_slider_description', get_the_ID()); ?> </div>
              <div class="sap_green_btn">
                <button type="button" onclick="location.href = '/contact-us';"> <?php echo get_field('third_slider_button_title', get_the_ID()); ?><i class="fa-solid fa-arrow-right icon"></i> </button>
              </div>
            </div>
            <div class="herobanner_right">
              <div class="lapii_img">
                <img class="w-100" src="<?php echo get_field('third_slider_image', get_the_ID()); ?>" alt="actionimg" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="herobanner_inner_sec">
            <div class="herobanner_left">
              <h1 class="fs_xxl font_bold"> <?php echo get_field('fourth_slider_title', get_the_ID()); ?> </h1>
              <div class="text_para"> <?php echo get_field('fourth_slider_description', get_the_ID()); ?> </div>
              <div class="sap_green_btn">
                <button type="button" onclick="location.href = '/contact-us';"> <?php echo get_field('fourth_slider_button_title', get_the_ID()); ?><i class="fa-solid fa-arrow-right icon"></i> </button>
              </div>
            </div>
            <div class="herobanner_right">
              <div class="lapii_img">
                <img class="w-100" src="<?php echo get_field('fourth_slider_image', get_the_ID()); ?>" alt="actionimg" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <!--  <section class="action_sec">
    <img class="action_bt" src="<?php //bloginfo('template_url'); ?>/assets/img/actionbottom.png" alt="actionbottom" />
    <div class="container">
      <div class="clinic_inner_sec">
        <ul>
          <li> 40% <span>Reduction in <br /> No-Shows </span>
          </li>
          <li> 33% <span>Faster Operations <br /> For Your Clinic </span>
          </li>
          <li> 50% <span>Reduction In <br /> Manual work </span>
          </li>
          <li> ₹20K <span>Increase in <br /> Monthly Income </span>
          </li>
        </ul>
      </div>
      <div class="action_sec_inner">
        <h2 class="fs_xl font_semibold color_secondary">
          <img src="<?php //bloginfo('template_url'); ?>/assets/img/navlogo.png" alt="action" /> In Action
        </h2>
        <div class="action_img">
          <img class="w-100" src="<?php //bloginfo('template_url'); ?>/assets/img/actionimg.png" alt="actionimg" />
          <video class="video-on-screen" controls>
            <source src="<?php //bloginfo('template_url'); ?>/assets/img/perfectvideo.mp4" type="video/mp4"> Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </section> -->
  <section class="clinic_sec pt-0">
    <div class="container">
      <div class="clinic_inner_sec">
        <h2 class="fs_xl font_semibold color_secondary"> <?php echo get_field('second_block_heading', get_the_ID()); ?>
        </h2>
        <h4 class="fs_md font_semibold color_secondary"> <?php echo get_field('second_block_sub_heading', get_the_ID()); ?> </h4>
        <div class="text_para">
          <?php echo get_field('second_block_description', get_the_ID()); ?>
        </div>
      </div>
      <div class="clinic_inner">
        <div class="clinic_item">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/clinicone.png" alt="clinicimg">
          <h4>
            <span class="text_red">AI</span> Driven
          </h4>
          <h2>Diagnosis</h2>
          <span>Offers faster, smarter clinical decisions</span>
        </div>
        <div class="clinic_item">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/clinictwo.png" alt="clinicimg">
          <h4>
            <span class="text_red">AI</span> Driven
          </h4>
          <h2>SOAP Notes</h2>
          <span>Generate structured SOAP notes</span>
        </div>
        <div class="clinic_item">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/clinicthree.png" alt="clinicimg">
          <h4>
            <span class="text_red">AI</span> Driven
          </h4>
          <h2>Prescription</h2>
          <span>Ensure faster, accurate medication suggestions</span>
        </div>
        <div class="clinic_item">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/clinicfour.png" alt="clinicimg">
          <h4>
            <span class="text_red">100%</span> Digitized
          </h4>
          <h2>Appointment Scheduling</h2>
          <span>For faster bookings and zero manual errors</span>
        </div>
        <div class="clinic_item">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/clinicfive.png" alt="clinicimg">
          <h4>
            <span class="text_red">100% </span> Digitized
          </h4>
          <h2>Follow Ups</h2>
          <span>Ensure 100% digitized follow-ups via WhatsApp</span>
        </div>
        <div class="clinic_item">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/clinicsix.png" alt="clinicimg">
          <h4>
            <span class="text_red">100%</span> Digitized
          </h4>
          <h2>Patient Records</h2>
          <span>For instant access, improved accuracy, and streamlined care delivery</span>
        </div>
      </div>
      <div class="sap_green_btn">
        <button type="button" onclick="location.href = '/features';">View All Features <i class="fa-solid fa-arrow-right icon"></i>
        </button>
      </div>
    </div>
  </section>
  <section class="choose_sec">
    <img class="choose_dot" src="
              <?php bloginfo('template_url'); ?>/assets/img/chooseleft.png" alt="chooseleft" />
    <div class="container">
      <div class="choose_sec_inner">
        <div class="choose_left">
          <h2 class="fs_xl font_semibold color_secondary"> <?php echo get_field('third_block_heading', get_the_ID()); ?> </h2>
          <div class="text_para"> <?php echo get_field('third_block_description', get_the_ID()); ?> </div>
          <div class="sap_green_btn">
            <button type="button" onclick="location.href = '/contact-us';"> <?php echo get_field('third_button_text', get_the_ID()); ?> <i class="fa-solid fa-arrow-right icon"></i></button>
          </div>
        </div>
        <div class="choose_right">
          <div class="choose_card">
            <div class="choose_icon">
              <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect x="0.642944" y="0.642822" width="61.7143" height="61.7143" rx="10.2857" fill="#2BAA95" />
                <mask id="mask0_98_1551" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="8" y="10" width="47" height="43">
                  <rect x="8.20862" y="10.9282" width="46.583" height="41.1437" fill="url(#pattern0_98_1551)" />
                </mask>
                <g mask="url(#mask0_98_1551)">
                  <rect x="8.20862" y="10.9282" width="46.583" height="41.1437" fill="white" />
                </g>
                <defs>
                  <pattern id="pattern0_98_1551" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_98_1551" transform="scale(0.00299401 0.00338983)" />
                  </pattern>
                  <image id="image0_98_1551" width="334" height="295" preserveAspectRatio="none" xlink:href="data:image/png;base64,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" />
                </defs>
              </svg>
            </div>
            <h4 class="fs_xs font_semibold">HIPAA Compliant</h4>
            <div class="text_para">
              <p> Our platform is fully HIPAA compliant, safeguarding patient data with top-level security. </p>
            </div>
          </div>
          <div class="choose_card">
            <div class="choose_icon">
              <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.642822" y="0.642822" width="61.7143" height="61.7143" rx="10.2857" fill="#3ACDBB" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7245 15.8407C19.3126 15.2999 23.3127 13.2235 26.3732 11H36.6267C39.6873 13.2235 43.6873 15.2999 48.2755 15.8407C48.4752 15.8635 48.6596 15.9606 48.7933 16.1134C48.9271 16.2661 49.0006 16.4637 49 16.6683V31.477C49 41.5198 38.9843 49.9586 31.5 52C24.0157 49.9586 14 41.5198 14 31.4771V16.6683C13.9993 16.4637 14.0729 16.2661 14.2066 16.1133C14.3403 15.9606 14.5248 15.8635 14.7245 15.8407ZM16.4558 18.1055V31.4771C16.4558 32.6122 16.6108 33.7373 16.8982 34.8333C18.5893 41.2845 25.2667 47.4192 31.4991 49.3973C35.4011 48.1528 39.3469 45.2671 41.9979 42.2247C44.5818 39.2593 46.5441 35.5253 46.5441 31.4771V18.1055C42.7032 17.4001 39.0881 15.7338 35.8563 13.5H27.1437C23.9119 15.7338 20.2968 17.4001 16.4558 18.1055ZM18.0931 19.4599V31.4771C18.0931 32.4661 18.2298 33.4487 18.4801 34.4037C19.9899 40.1634 25.9797 45.6867 31.4976 47.642C34.9304 46.4178 38.404 43.8375 40.773 41.1187C43.0822 38.4685 44.9068 35.1019 44.9068 31.4771V19.4599C41.4999 18.6395 38.2833 17.1253 35.3595 15.1667H27.6405C24.7167 17.1253 21.5001 18.6395 18.0931 19.4599ZM34.1225 22.0278H28.8776C28.7691 22.028 28.6651 22.0719 28.5884 22.15C28.5117 22.2281 28.4685 22.334 28.4682 22.4444V26.6693H24.3178C24.2093 26.6696 24.1053 26.7135 24.0286 26.7916C23.9519 26.8697 23.9087 26.9756 23.9085 27.086V32.425C23.9085 32.6545 24.0924 32.8417 24.3178 32.8417H28.4682V37.0666C28.4682 37.2961 28.6521 37.4833 28.8776 37.4833H34.1225C34.348 37.4833 34.5318 37.2961 34.5318 37.0666V32.8417H38.6822C38.9076 32.8417 39.0915 32.6545 39.0915 32.425V27.086C39.0915 26.8565 38.9076 26.6693 38.6822 26.6693H34.5318V22.4444C34.5316 22.334 34.4884 22.2281 34.4117 22.15C34.335 22.0719 34.231 22.028 34.1225 22.0278Z" fill="white" />
              </svg>
            </div>
            <h4 class="fs_xs font_semibold">On-Premises Option</h4>
            <div class="text_para">
              <p> Providing clinics with the choice of local hosting for enhanced data control and compliance. </p>
            </div>
          </div>
          <div class="choose_card">
            <div class="choose_icon">
              <svg width="63" height="62" viewBox="0 0 63 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.642944" y="0.142822" width="61.7143" height="61.7143" rx="10.2857" fill="#2196F3" />
                <path d="M24.1312 24.1016L21.5321 24.3024C20.8089 24.3583 20.1648 24.7373 19.7648 25.3423L16.7674 29.8758C16.464 30.3346 16.4158 30.9087 16.6383 31.4117C16.8608 31.9147 17.3182 32.2652 17.8616 32.3494L20.2414 32.7179C20.7981 29.7637 22.1307 26.8166 24.1312 24.1016ZM29.7821 42.2587L30.1507 44.6385C30.2349 45.1819 30.5854 45.6392 31.0883 45.8617C31.2933 45.9527 31.5151 45.9998 31.7394 46C32.0543 45.9998 32.362 45.9068 32.6243 45.7326L37.1579 42.7352C37.7629 42.3352 38.1419 41.691 38.1977 40.9679L38.3985 38.3689C35.6834 40.3694 32.7365 41.7021 29.7821 42.2587ZM28.8871 40.6092C28.9697 40.6092 29.0528 40.6024 29.1357 40.5886C30.3734 40.3817 31.5664 40.033 32.7044 39.5767L22.9234 29.7957C22.4671 30.9336 22.1185 32.1266 21.9115 33.3644C21.83 33.8523 21.9936 34.3493 22.3434 34.6992L27.801 40.1568C28.0914 40.4471 28.4833 40.6092 28.8871 40.6092ZM44.1079 29.3009C46.5014 24.6735 46.5901 19.7836 46.465 17.4902C46.4221 16.7044 45.7957 16.0779 45.0098 16.0351C44.572 16.0115 44.1335 15.9998 43.695 16C41.1306 16 37.073 16.3884 33.1992 18.3921C30.1206 19.9845 26.0837 23.4908 23.702 28.0987C23.7301 28.1207 23.7576 28.144 23.7835 28.1699L34.3302 38.7167C34.3561 38.7426 34.3794 38.77 34.4014 38.7982C39.0093 36.4164 42.5156 32.3795 44.1079 29.3009ZM33.9432 22.3422C35.6565 20.6288 38.4444 20.6286 40.1579 22.3422C40.9879 23.1721 41.445 24.2757 41.445 25.4495C41.445 26.6233 40.9879 27.7269 40.1579 28.5569C39.3013 29.4135 38.1757 29.8419 37.0506 29.842C35.925 29.8421 34.8 29.4137 33.9432 28.5569C33.1132 27.7269 32.656 26.6233 32.656 25.4495C32.656 24.2757 33.1132 23.1721 33.9432 22.3422Z" fill="white" />
                <path d="M35.1861 27.3139C36.2141 28.3419 37.887 28.342 38.915 27.3139C39.413 26.8159 39.6873 26.1538 39.6873 25.4495C39.6873 24.7452 39.413 24.0831 38.915 23.5851C38.401 23.0711 37.7258 22.8141 37.0506 22.8141C36.3754 22.8141 35.7002 23.0711 35.1862 23.5851C34.6882 24.0831 34.4139 24.7452 34.4139 25.4495C34.4139 26.1538 34.6881 26.8159 35.1861 27.3139ZM17.3968 40.7228C17.6218 40.7228 17.8467 40.637 18.0183 40.4653L20.8878 37.5958C21.231 37.2526 21.231 36.6961 20.8878 36.3529C20.5446 36.0096 19.9881 36.0096 19.6448 36.3529L16.7753 39.2224C16.4321 39.5656 16.4321 40.1221 16.7753 40.4653C16.8569 40.5471 16.9537 40.6119 17.0604 40.6561C17.1671 40.7003 17.2814 40.7229 17.3968 40.7228ZM23.5175 38.9826C23.1743 38.6394 22.6178 38.6394 22.2746 38.9826L16.7577 44.4995C16.4145 44.8427 16.4145 45.3992 16.7577 45.7424C16.9293 45.914 17.1543 45.9998 17.3792 45.9998C17.6041 45.9998 17.8291 45.914 18.0007 45.7424L23.5174 40.2256C23.8607 39.8823 23.8607 39.3259 23.5175 38.9826ZM24.9042 41.6124L22.0348 44.4818C21.6916 44.8251 21.6916 45.3815 22.0348 45.7248C22.2064 45.8964 22.4314 45.9822 22.6562 45.9822C22.8811 45.9822 23.1061 45.8965 23.2777 45.7248L26.1472 42.8553C26.4904 42.5121 26.4904 41.9556 26.1472 41.6124C25.804 41.2691 25.2475 41.2691 24.9042 41.6124Z" fill="white" />
              </svg>
            </div>
            <h4 class="fs_xs font_semibold">Plug-and-Play Setup</h4>
            <div class="text_para">
              <p>Ensuring rapid and hassle-free deployment.</p>
            </div>
          </div>
          <div class="choose_card">
            <div class="choose_icon">
              <svg width="63" height="62" viewBox="0 0 63 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.642944" y="0.142822" width="61.7143" height="61.7143" rx="10.2857" fill="#00ACC1" />
                <path d="M43.4689 20.9078C43.0649 19.2885 42.1618 17.8199 40.8823 16.7199C39.4163 15.4597 37.5461 14.7657 35.616 14.7657C34.1681 14.7657 32.781 15.1395 31.5568 15.8537C30.2604 14.6668 28.5605 14 26.7743 14C22.9431 14 19.8118 17.0574 19.6868 20.8627C18.3624 21.2334 17.1631 21.9878 16.2464 23.04C15.1208 24.3315 14.5004 25.9874 14.5001 27.7014C14.5001 31.6159 17.6812 34.8004 21.5914 34.8004H41.4088C45.319 34.8004 48.5001 31.6159 48.5001 27.7014C48.5001 24.5629 46.4208 21.8058 43.4689 20.9078ZM25.1915 36.7949V38.6929H21.6656C21.2307 37.1602 19.821 36.0339 18.1525 36.0339C16.1386 36.0339 14.5001 37.6741 14.5001 39.6902C14.5001 41.7063 16.1386 43.3465 18.1525 43.3465C19.8211 43.3465 21.2309 42.2201 21.6657 40.6872H26.1876C26.7375 40.6872 27.1837 40.2411 27.1837 39.69V36.7949H25.1915ZM32.4962 40.8267V36.7949H30.504V40.8267C28.9729 41.262 27.8478 42.6733 27.8478 44.3437C27.8478 46.3598 29.4862 48 31.5001 48C33.514 48 35.1525 46.3598 35.1525 44.3437C35.1525 42.6733 34.0273 41.262 32.4962 40.8267ZM44.8478 36.0339C43.1793 36.0339 41.7695 37.1602 41.3347 38.6929H37.8087V36.7949H35.8165V39.69C35.8165 40.2411 36.2628 40.6872 36.8126 40.6872H41.3346C41.7693 42.2201 43.1791 43.3465 44.8478 43.3465C46.8617 43.3465 48.5001 41.7063 48.5001 39.6902C48.5001 37.6741 46.8617 36.0339 44.8478 36.0339Z" fill="white" />
              </svg>
            </div>
            <h4 class="fs_xs font_semibold">Cloud-Based SaaS</h4>
            <div class="text_para">
              <p> For effortless access, automatic updates, and seamless scalability. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <section class="product_sec">
    <div class="container">
      <div class="product_sec_inner">
        <h2 class="font_semibold fs_xl color_secondary"> <?php //echo get_field('problem_solution_block_heading', get_the_ID()); ?> </h2>
        <div class="text_para"> <?php //echo get_field('problem_solution_block_sub_heading', get_the_ID()); ?> </div>
        <div class="product_inner">
          <div class="product_inner_left">
            <ul>
              <li>
                <div class="product_inner_head">
                  <h5 class="font_semibold color_secondary fs_sm"> Missed or Double Booked Appointments </h5>
                  <span>Leads to lost revenue, wasted time, frustrated patients</span>
                </div>
                <div class="prosearch_icon">
                  <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35.7344 31.7264L29.183 25.1904C29.1499 25.1574 29.111 25.1332 29.0765 25.1097C28.4716 26.033 27.7722 26.8909 26.9896 27.6693C26.2094 28.4546 25.3479 29.1546 24.4197 29.7577C24.452 29.7915 24.4762 29.8311 24.5092 29.8634L31.0475 36.4141C31.6694 37.0343 32.5119 37.3825 33.3902 37.3825C34.2685 37.3825 35.111 37.0343 35.7329 36.4141C36.3531 35.7918 36.7014 34.9491 36.7016 34.0706C36.7019 33.192 36.3541 32.3492 35.7344 31.7264ZM26.0559 5.14194C20.1042 -0.808301 10.422 -0.808301 4.46956 5.14341C-1.48875 11.0936 -1.48949 20.7832 4.46516 26.7356C10.4198 32.6851 20.1042 32.6851 26.0559 26.7349C32.0076 20.7832 32.0069 11.0929 26.0559 5.14194ZM7.27071 23.933C2.86419 19.5265 2.86565 12.3526 7.27218 7.95043C11.6787 3.54464 18.8482 3.54464 23.2533 7.94823C27.6569 12.3526 27.6554 19.5184 23.2533 23.9315C18.8475 28.3241 11.6787 28.3402 7.27071 23.933Z" fill="#DB222A"/>
                    <path d="M10.4088 17.1695C10.085 15.8393 8.752 13.9939 7.63037 14.5819C6.74143 15.0356 6.99174 17.1159 7.41089 18.3461C9.28419 23.9404 16.0969 25.1229 16.8053 24.4153C17.5019 23.7194 11.6919 22.4334 10.4088 17.1695Z" fill="#DB222A"/>
                  </svg>
                  <div class="prosearch_head">
                    <h6>Problem</h6>
                    <span>01</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="product_inner_head">
                  <h5 class="font_semibold color_secondary fs_sm"> Paper-Based or Scattered Patient Records </h5>
                  <span>Time wasted searching files, risk of misplaced or incomplete histories</span>
                </div>
                <div class="prosearch_icon">
                  <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35.7344 31.7264L29.183 25.1904C29.1499 25.1574 29.111 25.1332 29.0765 25.1097C28.4716 26.033 27.7722 26.8909 26.9896 27.6693C26.2094 28.4546 25.3479 29.1546 24.4197 29.7577C24.452 29.7915 24.4762 29.8311 24.5092 29.8634L31.0475 36.4141C31.6694 37.0343 32.5119 37.3825 33.3902 37.3825C34.2685 37.3825 35.111 37.0343 35.7329 36.4141C36.3531 35.7918 36.7014 34.9491 36.7016 34.0706C36.7019 33.192 36.3541 32.3492 35.7344 31.7264ZM26.0559 5.14194C20.1042 -0.808301 10.422 -0.808301 4.46956 5.14341C-1.48875 11.0936 -1.48949 20.7832 4.46516 26.7356C10.4198 32.6851 20.1042 32.6851 26.0559 26.7349C32.0076 20.7832 32.0069 11.0929 26.0559 5.14194ZM7.27071 23.933C2.86419 19.5265 2.86565 12.3526 7.27218 7.95043C11.6787 3.54464 18.8482 3.54464 23.2533 7.94823C27.6569 12.3526 27.6554 19.5184 23.2533 23.9315C18.8475 28.3241 11.6787 28.3402 7.27071 23.933Z" fill="#DB222A"/>
                    <path d="M10.4088 17.1695C10.085 15.8393 8.752 13.9939 7.63037 14.5819C6.74143 15.0356 6.99174 17.1159 7.41089 18.3461C9.28419 23.9404 16.0969 25.1229 16.8053 24.4153C17.5019 23.7194 11.6919 22.4334 10.4088 17.1695Z" fill="#DB222A"/>
                  </svg>
                  <div class="prosearch_head">
                    <h6>Problem</h6>
                    <span>02</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="product_inner_head">
                  <h5 class="font_semibold color_secondary fs_sm"> Manual Billing & Payment Tracking </h5>
                  <span>Delayed payments, calculation errors, untracked dues</span>
                </div>
                <div class="prosearch_icon">
                  <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35.7344 31.7264L29.183 25.1904C29.1499 25.1574 29.111 25.1332 29.0765 25.1097C28.4716 26.033 27.7722 26.8909 26.9896 27.6693C26.2094 28.4546 25.3479 29.1546 24.4197 29.7577C24.452 29.7915 24.4762 29.8311 24.5092 29.8634L31.0475 36.4141C31.6694 37.0343 32.5119 37.3825 33.3902 37.3825C34.2685 37.3825 35.111 37.0343 35.7329 36.4141C36.3531 35.7918 36.7014 34.9491 36.7016 34.0706C36.7019 33.192 36.3541 32.3492 35.7344 31.7264ZM26.0559 5.14194C20.1042 -0.808301 10.422 -0.808301 4.46956 5.14341C-1.48875 11.0936 -1.48949 20.7832 4.46516 26.7356C10.4198 32.6851 20.1042 32.6851 26.0559 26.7349C32.0076 20.7832 32.0069 11.0929 26.0559 5.14194ZM7.27071 23.933C2.86419 19.5265 2.86565 12.3526 7.27218 7.95043C11.6787 3.54464 18.8482 3.54464 23.2533 7.94823C27.6569 12.3526 27.6554 19.5184 23.2533 23.9315C18.8475 28.3241 11.6787 28.3402 7.27071 23.933Z" fill="#DB222A"/>
                    <path d="M10.4088 17.1695C10.085 15.8393 8.752 13.9939 7.63037 14.5819C6.74143 15.0356 6.99174 17.1159 7.41089 18.3461C9.28419 23.9404 16.0969 25.1229 16.8053 24.4153C17.5019 23.7194 11.6919 22.4334 10.4088 17.1695Z" fill="#DB222A"/>
                  </svg>
                  <div class="prosearch_head">
                    <h6>Problem</h6>
                    <span>03</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="product_inner_head">
                  <h5 class="font_semibold color_secondary fs_sm"> Difficulty Managing Follow-Ups </h5>
                  <span>Missed patient follow-ups leading to loss of continuity in care</span>
                </div>
                <div class="prosearch_icon">
                  <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35.7344 31.7264L29.183 25.1904C29.1499 25.1574 29.111 25.1332 29.0765 25.1097C28.4716 26.033 27.7722 26.8909 26.9896 27.6693C26.2094 28.4546 25.3479 29.1546 24.4197 29.7577C24.452 29.7915 24.4762 29.8311 24.5092 29.8634L31.0475 36.4141C31.6694 37.0343 32.5119 37.3825 33.3902 37.3825C34.2685 37.3825 35.111 37.0343 35.7329 36.4141C36.3531 35.7918 36.7014 34.9491 36.7016 34.0706C36.7019 33.192 36.3541 32.3492 35.7344 31.7264ZM26.0559 5.14194C20.1042 -0.808301 10.422 -0.808301 4.46956 5.14341C-1.48875 11.0936 -1.48949 20.7832 4.46516 26.7356C10.4198 32.6851 20.1042 32.6851 26.0559 26.7349C32.0076 20.7832 32.0069 11.0929 26.0559 5.14194ZM7.27071 23.933C2.86419 19.5265 2.86565 12.3526 7.27218 7.95043C11.6787 3.54464 18.8482 3.54464 23.2533 7.94823C27.6569 12.3526 27.6554 19.5184 23.2533 23.9315C18.8475 28.3241 11.6787 28.3402 7.27071 23.933Z" fill="#DB222A"/>
                    <path d="M10.4088 17.1695C10.085 15.8393 8.752 13.9939 7.63037 14.5819C6.74143 15.0356 6.99174 17.1159 7.41089 18.3461C9.28419 23.9404 16.0969 25.1229 16.8053 24.4153C17.5019 23.7194 11.6919 22.4334 10.4088 17.1695Z" fill="#DB222A"/>
                  </svg>
                  <div class="prosearch_head">
                    <h6>Problem</h6>
                    <span>04</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="product_inner_head">
                  <h5 class="font_semibold color_secondary fs_sm"> No Centralized View of Clinic Performance </h5>
                  <span>Hard to track service performance, patient trends, and revenue without consolidated data.</span>
                </div>
                <div class="prosearch_icon">
                  <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35.7344 31.7264L29.183 25.1904C29.1499 25.1574 29.111 25.1332 29.0765 25.1097C28.4716 26.033 27.7722 26.8909 26.9896 27.6693C26.2094 28.4546 25.3479 29.1546 24.4197 29.7577C24.452 29.7915 24.4762 29.8311 24.5092 29.8634L31.0475 36.4141C31.6694 37.0343 32.5119 37.3825 33.3902 37.3825C34.2685 37.3825 35.111 37.0343 35.7329 36.4141C36.3531 35.7918 36.7014 34.9491 36.7016 34.0706C36.7019 33.192 36.3541 32.3492 35.7344 31.7264ZM26.0559 5.14194C20.1042 -0.808301 10.422 -0.808301 4.46956 5.14341C-1.48875 11.0936 -1.48949 20.7832 4.46516 26.7356C10.4198 32.6851 20.1042 32.6851 26.0559 26.7349C32.0076 20.7832 32.0069 11.0929 26.0559 5.14194ZM7.27071 23.933C2.86419 19.5265 2.86565 12.3526 7.27218 7.95043C11.6787 3.54464 18.8482 3.54464 23.2533 7.94823C27.6569 12.3526 27.6554 19.5184 23.2533 23.9315C18.8475 28.3241 11.6787 28.3402 7.27071 23.933Z" fill="#DB222A"/>
                    <path d="M10.4088 17.1695C10.085 15.8393 8.752 13.9939 7.63037 14.5819C6.74143 15.0356 6.99174 17.1159 7.41089 18.3461C9.28419 23.9404 16.0969 25.1229 16.8053 24.4153C17.5019 23.7194 11.6919 22.4334 10.4088 17.1695Z" fill="#DB222A"/>
                  </svg>
                  <div class="prosearch_head">
                    <h6>Problem</h6>
                    <span>05</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="product_inner_right product_inner_left">
            <ul>
              <li>
                <div class="product_inner_head">
                  <h5 class="font_semibold color_secondary fs_sm"> Smart Appointment Scheduling </h5>
                  <span>Automated reminders via SMS/WhatsApp, easy rescheduling, no overlaps</span>
                </div>
                <div class="prosearch_icon">
                  <svg
                    width="51"
                    height="51"
                    viewBox="0 0 51 51"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M28.6867 50.9312H22.4085C20.9436 50.9312 19.2694 49.6755 19.2694 47.1642V42.7695C19.2694 40.6768 18.223 38.7933 16.5488 37.3284C12.7819 34.3986 10.8984 30.2131 10.8984 25.6091C11.1077 17.6567 17.5952 11.3785 25.3383 11.1692C29.3145 11.1692 33.0814 12.6341 35.802 15.3547C38.5225 18.0752 40.1967 21.8421 40.1967 25.8183C40.1967 30.2131 38.3132 34.3986 34.7556 37.1191C32.8721 38.584 31.8258 40.886 31.8258 42.9788V47.7921C31.8258 49.4663 30.3609 50.9312 28.6867 50.9312ZM25.5476 13.2619C18.8508 13.2619 13.2004 18.9123 12.9912 25.6091C12.9912 29.5853 14.6654 33.3522 17.8045 35.6542C20.1065 37.5377 21.3621 40.0489 21.3621 42.7695V47.1642C21.3621 47.5828 21.3621 48.8384 22.4085 48.8384H28.6867C29.3145 48.8384 29.733 48.4199 29.733 47.7921V42.9788C29.733 40.2582 31.198 37.3284 33.5 35.4449C36.4298 33.1429 38.104 29.5853 38.104 25.8183C38.104 22.47 36.8483 19.3309 34.3371 16.8196C32.0351 14.5176 28.8959 13.2619 25.5476 13.2619Z"
                      fill="white"
                      stroke="white"
                      stroke-width="1.42343"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M30.7794 44.653H20.3157C19.6879 44.653 19.2694 44.2345 19.2694 43.6066C19.2694 42.9788 19.6879 42.5603 20.3157 42.5603H30.7794C31.4072 42.5603 31.8258 42.9788 31.8258 43.6066C31.8258 44.2345 31.4072 44.653 30.7794 44.653ZM25.5476 6.98377C24.9197 6.98377 24.5012 6.56522 24.5012 5.9374V1.75193C24.5012 1.12411 24.9197 0.705566 25.5476 0.705566C26.1754 0.705566 26.5939 1.12411 26.5939 1.75193V5.9374C26.5939 6.56522 26.1754 6.98377 25.5476 6.98377ZM39.5689 12.8434C39.3596 12.8434 38.9411 12.8434 38.7318 12.6342C38.3132 12.2156 38.3132 11.5878 38.7318 11.1692L41.6616 8.23941C42.0802 7.82086 42.708 7.82086 43.1265 8.23941C43.5451 8.65796 43.5451 9.28578 43.1265 9.70433L40.1967 12.6342C40.1967 12.6342 39.7782 12.8434 39.5689 12.8434ZM49.614 26.8648H45.4285C44.8007 26.8648 44.3822 26.4462 44.3822 25.8184C44.3822 25.1906 44.8007 24.772 45.4285 24.772H49.614C50.2418 24.772 50.6604 25.1906 50.6604 25.8184C50.6604 26.4462 50.2418 26.8648 49.614 26.8648ZM42.4987 43.8159C42.2894 43.8159 41.8709 43.8159 41.6616 43.6066L38.7318 40.6768C38.3132 40.2583 38.3132 39.6304 38.7318 39.2119C39.1503 38.7933 39.7782 38.7933 40.1967 39.2119L43.1265 42.1417C43.5451 42.5603 43.5451 43.1881 43.1265 43.6066C43.1265 43.8159 42.9173 43.8159 42.4987 43.8159ZM8.59642 43.8159C8.38715 43.8159 7.9686 43.8159 7.75932 43.6066C7.34078 43.1881 7.34078 42.5603 7.75932 42.1417L10.6892 39.2119C11.1077 38.7933 11.7355 38.7933 12.1541 39.2119C12.5726 39.6304 12.5726 40.2583 12.1541 40.6768L9.22424 43.6066C9.01497 43.8159 8.80569 43.8159 8.59642 43.8159ZM5.66659 26.8648H1.48112C0.8533 26.8648 0.434753 26.4462 0.434753 25.8184C0.434753 25.1906 0.8533 24.772 1.48112 24.772H5.66659C6.29441 24.772 6.71296 25.1906 6.71296 25.8184C6.71296 26.4462 6.29441 26.8648 5.66659 26.8648ZM11.5262 12.8434C11.317 12.8434 10.8984 12.8434 10.6892 12.6342L7.75932 9.49505C7.34078 9.07651 7.34078 8.44869 7.75932 8.03014C8.17787 7.61159 8.80569 7.61159 9.22424 8.03014L12.1541 10.96C12.5726 11.3785 12.5726 12.0063 12.1541 12.4249C11.9448 12.6342 11.7355 12.8434 11.5262 12.8434ZM33.9185 26.8648C33.2907 26.8648 32.8721 26.4462 32.8721 25.8184C32.8721 21.8422 29.5238 18.4938 25.5476 18.4938C24.9197 18.4938 24.5012 18.0753 24.5012 17.4474C24.5012 16.8196 24.9197 16.4011 25.5476 16.4011C30.7794 16.4011 34.9649 20.5865 34.9649 25.8184C34.9649 26.4462 34.5463 26.8648 33.9185 26.8648Z"
                      fill="white"
                      stroke="white"
                      stroke-width="1.42343"
                      stroke-linejoin="round"
                    />
                  </svg>
                  <div class="prosearch_head">
                    <h6>Solution</h6>
                    <span>01</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="product_inner_head">
                  <h5 class="font_semibold color_secondary fs_sm"> Digital Patient Records </h5>
                  <span>Secure, searchable, accessible anywhere, instantly updated</span>
                </div>
                <div class="prosearch_icon">
                  <svg
                    width="51"
                    height="51"
                    viewBox="0 0 51 51"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M28.6867 50.9312H22.4085C20.9436 50.9312 19.2694 49.6755 19.2694 47.1642V42.7695C19.2694 40.6768 18.223 38.7933 16.5488 37.3284C12.7819 34.3986 10.8984 30.2131 10.8984 25.6091C11.1077 17.6567 17.5952 11.3785 25.3383 11.1692C29.3145 11.1692 33.0814 12.6341 35.802 15.3547C38.5225 18.0752 40.1967 21.8421 40.1967 25.8183C40.1967 30.2131 38.3132 34.3986 34.7556 37.1191C32.8721 38.584 31.8258 40.886 31.8258 42.9788V47.7921C31.8258 49.4663 30.3609 50.9312 28.6867 50.9312ZM25.5476 13.2619C18.8508 13.2619 13.2004 18.9123 12.9912 25.6091C12.9912 29.5853 14.6654 33.3522 17.8045 35.6542C20.1065 37.5377 21.3621 40.0489 21.3621 42.7695V47.1642C21.3621 47.5828 21.3621 48.8384 22.4085 48.8384H28.6867C29.3145 48.8384 29.733 48.4199 29.733 47.7921V42.9788C29.733 40.2582 31.198 37.3284 33.5 35.4449C36.4298 33.1429 38.104 29.5853 38.104 25.8183C38.104 22.47 36.8483 19.3309 34.3371 16.8196C32.0351 14.5176 28.8959 13.2619 25.5476 13.2619Z"
                      fill="white"
                      stroke="white"
                      stroke-width="1.42343"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M30.7794 44.653H20.3157C19.6879 44.653 19.2694 44.2345 19.2694 43.6066C19.2694 42.9788 19.6879 42.5603 20.3157 42.5603H30.7794C31.4072 42.5603 31.8258 42.9788 31.8258 43.6066C31.8258 44.2345 31.4072 44.653 30.7794 44.653ZM25.5476 6.98377C24.9197 6.98377 24.5012 6.56522 24.5012 5.9374V1.75193C24.5012 1.12411 24.9197 0.705566 25.5476 0.705566C26.1754 0.705566 26.5939 1.12411 26.5939 1.75193V5.9374C26.5939 6.56522 26.1754 6.98377 25.5476 6.98377ZM39.5689 12.8434C39.3596 12.8434 38.9411 12.8434 38.7318 12.6342C38.3132 12.2156 38.3132 11.5878 38.7318 11.1692L41.6616 8.23941C42.0802 7.82086 42.708 7.82086 43.1265 8.23941C43.5451 8.65796 43.5451 9.28578 43.1265 9.70433L40.1967 12.6342C40.1967 12.6342 39.7782 12.8434 39.5689 12.8434ZM49.614 26.8648H45.4285C44.8007 26.8648 44.3822 26.4462 44.3822 25.8184C44.3822 25.1906 44.8007 24.772 45.4285 24.772H49.614C50.2418 24.772 50.6604 25.1906 50.6604 25.8184C50.6604 26.4462 50.2418 26.8648 49.614 26.8648ZM42.4987 43.8159C42.2894 43.8159 41.8709 43.8159 41.6616 43.6066L38.7318 40.6768C38.3132 40.2583 38.3132 39.6304 38.7318 39.2119C39.1503 38.7933 39.7782 38.7933 40.1967 39.2119L43.1265 42.1417C43.5451 42.5603 43.5451 43.1881 43.1265 43.6066C43.1265 43.8159 42.9173 43.8159 42.4987 43.8159ZM8.59642 43.8159C8.38715 43.8159 7.9686 43.8159 7.75932 43.6066C7.34078 43.1881 7.34078 42.5603 7.75932 42.1417L10.6892 39.2119C11.1077 38.7933 11.7355 38.7933 12.1541 39.2119C12.5726 39.6304 12.5726 40.2583 12.1541 40.6768L9.22424 43.6066C9.01497 43.8159 8.80569 43.8159 8.59642 43.8159ZM5.66659 26.8648H1.48112C0.8533 26.8648 0.434753 26.4462 0.434753 25.8184C0.434753 25.1906 0.8533 24.772 1.48112 24.772H5.66659C6.29441 24.772 6.71296 25.1906 6.71296 25.8184C6.71296 26.4462 6.29441 26.8648 5.66659 26.8648ZM11.5262 12.8434C11.317 12.8434 10.8984 12.8434 10.6892 12.6342L7.75932 9.49505C7.34078 9.07651 7.34078 8.44869 7.75932 8.03014C8.17787 7.61159 8.80569 7.61159 9.22424 8.03014L12.1541 10.96C12.5726 11.3785 12.5726 12.0063 12.1541 12.4249C11.9448 12.6342 11.7355 12.8434 11.5262 12.8434ZM33.9185 26.8648C33.2907 26.8648 32.8721 26.4462 32.8721 25.8184C32.8721 21.8422 29.5238 18.4938 25.5476 18.4938C24.9197 18.4938 24.5012 18.0753 24.5012 17.4474C24.5012 16.8196 24.9197 16.4011 25.5476 16.4011C30.7794 16.4011 34.9649 20.5865 34.9649 25.8184C34.9649 26.4462 34.5463 26.8648 33.9185 26.8648Z"
                      fill="white"
                      stroke="white"
                      stroke-width="1.42343"
                      stroke-linejoin="round"
                    />
                  </svg>
                  <div class="prosearch_head">
                    <h6>Solution</h6>
                    <span>02</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="product_inner_head">
                  <h5 class="font_semibold color_secondary fs_sm"> Integrated Billing System </h5>
                  <span>Auto-generate invoices, track payments, and send payment reminders</span>
                </div>
                <div class="prosearch_icon">
                  <svg
                    width="51"
                    height="51"
                    viewBox="0 0 51 51"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M28.6867 50.9312H22.4085C20.9436 50.9312 19.2694 49.6755 19.2694 47.1642V42.7695C19.2694 40.6768 18.223 38.7933 16.5488 37.3284C12.7819 34.3986 10.8984 30.2131 10.8984 25.6091C11.1077 17.6567 17.5952 11.3785 25.3383 11.1692C29.3145 11.1692 33.0814 12.6341 35.802 15.3547C38.5225 18.0752 40.1967 21.8421 40.1967 25.8183C40.1967 30.2131 38.3132 34.3986 34.7556 37.1191C32.8721 38.584 31.8258 40.886 31.8258 42.9788V47.7921C31.8258 49.4663 30.3609 50.9312 28.6867 50.9312ZM25.5476 13.2619C18.8508 13.2619 13.2004 18.9123 12.9912 25.6091C12.9912 29.5853 14.6654 33.3522 17.8045 35.6542C20.1065 37.5377 21.3621 40.0489 21.3621 42.7695V47.1642C21.3621 47.5828 21.3621 48.8384 22.4085 48.8384H28.6867C29.3145 48.8384 29.733 48.4199 29.733 47.7921V42.9788C29.733 40.2582 31.198 37.3284 33.5 35.4449C36.4298 33.1429 38.104 29.5853 38.104 25.8183C38.104 22.47 36.8483 19.3309 34.3371 16.8196C32.0351 14.5176 28.8959 13.2619 25.5476 13.2619Z"
                      fill="white"
                      stroke="white"
                      stroke-width="1.42343"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M30.7794 44.653H20.3157C19.6879 44.653 19.2694 44.2345 19.2694 43.6066C19.2694 42.9788 19.6879 42.5603 20.3157 42.5603H30.7794C31.4072 42.5603 31.8258 42.9788 31.8258 43.6066C31.8258 44.2345 31.4072 44.653 30.7794 44.653ZM25.5476 6.98377C24.9197 6.98377 24.5012 6.56522 24.5012 5.9374V1.75193C24.5012 1.12411 24.9197 0.705566 25.5476 0.705566C26.1754 0.705566 26.5939 1.12411 26.5939 1.75193V5.9374C26.5939 6.56522 26.1754 6.98377 25.5476 6.98377ZM39.5689 12.8434C39.3596 12.8434 38.9411 12.8434 38.7318 12.6342C38.3132 12.2156 38.3132 11.5878 38.7318 11.1692L41.6616 8.23941C42.0802 7.82086 42.708 7.82086 43.1265 8.23941C43.5451 8.65796 43.5451 9.28578 43.1265 9.70433L40.1967 12.6342C40.1967 12.6342 39.7782 12.8434 39.5689 12.8434ZM49.614 26.8648H45.4285C44.8007 26.8648 44.3822 26.4462 44.3822 25.8184C44.3822 25.1906 44.8007 24.772 45.4285 24.772H49.614C50.2418 24.772 50.6604 25.1906 50.6604 25.8184C50.6604 26.4462 50.2418 26.8648 49.614 26.8648ZM42.4987 43.8159C42.2894 43.8159 41.8709 43.8159 41.6616 43.6066L38.7318 40.6768C38.3132 40.2583 38.3132 39.6304 38.7318 39.2119C39.1503 38.7933 39.7782 38.7933 40.1967 39.2119L43.1265 42.1417C43.5451 42.5603 43.5451 43.1881 43.1265 43.6066C43.1265 43.8159 42.9173 43.8159 42.4987 43.8159ZM8.59642 43.8159C8.38715 43.8159 7.9686 43.8159 7.75932 43.6066C7.34078 43.1881 7.34078 42.5603 7.75932 42.1417L10.6892 39.2119C11.1077 38.7933 11.7355 38.7933 12.1541 39.2119C12.5726 39.6304 12.5726 40.2583 12.1541 40.6768L9.22424 43.6066C9.01497 43.8159 8.80569 43.8159 8.59642 43.8159ZM5.66659 26.8648H1.48112C0.8533 26.8648 0.434753 26.4462 0.434753 25.8184C0.434753 25.1906 0.8533 24.772 1.48112 24.772H5.66659C6.29441 24.772 6.71296 25.1906 6.71296 25.8184C6.71296 26.4462 6.29441 26.8648 5.66659 26.8648ZM11.5262 12.8434C11.317 12.8434 10.8984 12.8434 10.6892 12.6342L7.75932 9.49505C7.34078 9.07651 7.34078 8.44869 7.75932 8.03014C8.17787 7.61159 8.80569 7.61159 9.22424 8.03014L12.1541 10.96C12.5726 11.3785 12.5726 12.0063 12.1541 12.4249C11.9448 12.6342 11.7355 12.8434 11.5262 12.8434ZM33.9185 26.8648C33.2907 26.8648 32.8721 26.4462 32.8721 25.8184C32.8721 21.8422 29.5238 18.4938 25.5476 18.4938C24.9197 18.4938 24.5012 18.0753 24.5012 17.4474C24.5012 16.8196 24.9197 16.4011 25.5476 16.4011C30.7794 16.4011 34.9649 20.5865 34.9649 25.8184C34.9649 26.4462 34.5463 26.8648 33.9185 26.8648Z"
                      fill="white"
                      stroke="white"
                      stroke-width="1.42343"
                      stroke-linejoin="round"
                    />
                  </svg>
                  <div class="prosearch_head">
                    <h6>Solution</h6>
                    <span>03</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="product_inner_head">
                  <h5 class="font_semibold color_secondary fs_sm"> Automated Follow-Up Alerts </h5>
                  <span>Track due check-ups, send reminders to both doctor & patient</span>
                </div>
                <div class="prosearch_icon">
                  <svg
                    width="51"
                    height="51"
                    viewBox="0 0 51 51"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M28.6867 50.9312H22.4085C20.9436 50.9312 19.2694 49.6755 19.2694 47.1642V42.7695C19.2694 40.6768 18.223 38.7933 16.5488 37.3284C12.7819 34.3986 10.8984 30.2131 10.8984 25.6091C11.1077 17.6567 17.5952 11.3785 25.3383 11.1692C29.3145 11.1692 33.0814 12.6341 35.802 15.3547C38.5225 18.0752 40.1967 21.8421 40.1967 25.8183C40.1967 30.2131 38.3132 34.3986 34.7556 37.1191C32.8721 38.584 31.8258 40.886 31.8258 42.9788V47.7921C31.8258 49.4663 30.3609 50.9312 28.6867 50.9312ZM25.5476 13.2619C18.8508 13.2619 13.2004 18.9123 12.9912 25.6091C12.9912 29.5853 14.6654 33.3522 17.8045 35.6542C20.1065 37.5377 21.3621 40.0489 21.3621 42.7695V47.1642C21.3621 47.5828 21.3621 48.8384 22.4085 48.8384H28.6867C29.3145 48.8384 29.733 48.4199 29.733 47.7921V42.9788C29.733 40.2582 31.198 37.3284 33.5 35.4449C36.4298 33.1429 38.104 29.5853 38.104 25.8183C38.104 22.47 36.8483 19.3309 34.3371 16.8196C32.0351 14.5176 28.8959 13.2619 25.5476 13.2619Z"
                      fill="white"
                      stroke="white"
                      stroke-width="1.42343"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M30.7794 44.653H20.3157C19.6879 44.653 19.2694 44.2345 19.2694 43.6066C19.2694 42.9788 19.6879 42.5603 20.3157 42.5603H30.7794C31.4072 42.5603 31.8258 42.9788 31.8258 43.6066C31.8258 44.2345 31.4072 44.653 30.7794 44.653ZM25.5476 6.98377C24.9197 6.98377 24.5012 6.56522 24.5012 5.9374V1.75193C24.5012 1.12411 24.9197 0.705566 25.5476 0.705566C26.1754 0.705566 26.5939 1.12411 26.5939 1.75193V5.9374C26.5939 6.56522 26.1754 6.98377 25.5476 6.98377ZM39.5689 12.8434C39.3596 12.8434 38.9411 12.8434 38.7318 12.6342C38.3132 12.2156 38.3132 11.5878 38.7318 11.1692L41.6616 8.23941C42.0802 7.82086 42.708 7.82086 43.1265 8.23941C43.5451 8.65796 43.5451 9.28578 43.1265 9.70433L40.1967 12.6342C40.1967 12.6342 39.7782 12.8434 39.5689 12.8434ZM49.614 26.8648H45.4285C44.8007 26.8648 44.3822 26.4462 44.3822 25.8184C44.3822 25.1906 44.8007 24.772 45.4285 24.772H49.614C50.2418 24.772 50.6604 25.1906 50.6604 25.8184C50.6604 26.4462 50.2418 26.8648 49.614 26.8648ZM42.4987 43.8159C42.2894 43.8159 41.8709 43.8159 41.6616 43.6066L38.7318 40.6768C38.3132 40.2583 38.3132 39.6304 38.7318 39.2119C39.1503 38.7933 39.7782 38.7933 40.1967 39.2119L43.1265 42.1417C43.5451 42.5603 43.5451 43.1881 43.1265 43.6066C43.1265 43.8159 42.9173 43.8159 42.4987 43.8159ZM8.59642 43.8159C8.38715 43.8159 7.9686 43.8159 7.75932 43.6066C7.34078 43.1881 7.34078 42.5603 7.75932 42.1417L10.6892 39.2119C11.1077 38.7933 11.7355 38.7933 12.1541 39.2119C12.5726 39.6304 12.5726 40.2583 12.1541 40.6768L9.22424 43.6066C9.01497 43.8159 8.80569 43.8159 8.59642 43.8159ZM5.66659 26.8648H1.48112C0.8533 26.8648 0.434753 26.4462 0.434753 25.8184C0.434753 25.1906 0.8533 24.772 1.48112 24.772H5.66659C6.29441 24.772 6.71296 25.1906 6.71296 25.8184C6.71296 26.4462 6.29441 26.8648 5.66659 26.8648ZM11.5262 12.8434C11.317 12.8434 10.8984 12.8434 10.6892 12.6342L7.75932 9.49505C7.34078 9.07651 7.34078 8.44869 7.75932 8.03014C8.17787 7.61159 8.80569 7.61159 9.22424 8.03014L12.1541 10.96C12.5726 11.3785 12.5726 12.0063 12.1541 12.4249C11.9448 12.6342 11.7355 12.8434 11.5262 12.8434ZM33.9185 26.8648C33.2907 26.8648 32.8721 26.4462 32.8721 25.8184C32.8721 21.8422 29.5238 18.4938 25.5476 18.4938C24.9197 18.4938 24.5012 18.0753 24.5012 17.4474C24.5012 16.8196 24.9197 16.4011 25.5476 16.4011C30.7794 16.4011 34.9649 20.5865 34.9649 25.8184C34.9649 26.4462 34.5463 26.8648 33.9185 26.8648Z"
                      fill="white"
                      stroke="white"
                      stroke-width="1.42343"
                      stroke-linejoin="round"
                    />
                  </svg>
                  <div class="prosearch_head">
                    <h6>Solution</h6>
                    <span>04</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="product_inner_head">
                  <h5 class="font_semibold color_secondary fs_sm"> Reports & Analytics </h5>
                  <span>See daily/weekly/monthly trends, patient volume and revenue stats</span>
                </div>
                <div class="prosearch_icon">
                  <svg
                    width="51"
                    height="51"
                    viewBox="0 0 51 51"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M28.6867 50.9312H22.4085C20.9436 50.9312 19.2694 49.6755 19.2694 47.1642V42.7695C19.2694 40.6768 18.223 38.7933 16.5488 37.3284C12.7819 34.3986 10.8984 30.2131 10.8984 25.6091C11.1077 17.6567 17.5952 11.3785 25.3383 11.1692C29.3145 11.1692 33.0814 12.6341 35.802 15.3547C38.5225 18.0752 40.1967 21.8421 40.1967 25.8183C40.1967 30.2131 38.3132 34.3986 34.7556 37.1191C32.8721 38.584 31.8258 40.886 31.8258 42.9788V47.7921C31.8258 49.4663 30.3609 50.9312 28.6867 50.9312ZM25.5476 13.2619C18.8508 13.2619 13.2004 18.9123 12.9912 25.6091C12.9912 29.5853 14.6654 33.3522 17.8045 35.6542C20.1065 37.5377 21.3621 40.0489 21.3621 42.7695V47.1642C21.3621 47.5828 21.3621 48.8384 22.4085 48.8384H28.6867C29.3145 48.8384 29.733 48.4199 29.733 47.7921V42.9788C29.733 40.2582 31.198 37.3284 33.5 35.4449C36.4298 33.1429 38.104 29.5853 38.104 25.8183C38.104 22.47 36.8483 19.3309 34.3371 16.8196C32.0351 14.5176 28.8959 13.2619 25.5476 13.2619Z"
                      fill="white"
                      stroke="white"
                      stroke-width="1.42343"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M30.7794 44.653H20.3157C19.6879 44.653 19.2694 44.2345 19.2694 43.6066C19.2694 42.9788 19.6879 42.5603 20.3157 42.5603H30.7794C31.4072 42.5603 31.8258 42.9788 31.8258 43.6066C31.8258 44.2345 31.4072 44.653 30.7794 44.653ZM25.5476 6.98377C24.9197 6.98377 24.5012 6.56522 24.5012 5.9374V1.75193C24.5012 1.12411 24.9197 0.705566 25.5476 0.705566C26.1754 0.705566 26.5939 1.12411 26.5939 1.75193V5.9374C26.5939 6.56522 26.1754 6.98377 25.5476 6.98377ZM39.5689 12.8434C39.3596 12.8434 38.9411 12.8434 38.7318 12.6342C38.3132 12.2156 38.3132 11.5878 38.7318 11.1692L41.6616 8.23941C42.0802 7.82086 42.708 7.82086 43.1265 8.23941C43.5451 8.65796 43.5451 9.28578 43.1265 9.70433L40.1967 12.6342C40.1967 12.6342 39.7782 12.8434 39.5689 12.8434ZM49.614 26.8648H45.4285C44.8007 26.8648 44.3822 26.4462 44.3822 25.8184C44.3822 25.1906 44.8007 24.772 45.4285 24.772H49.614C50.2418 24.772 50.6604 25.1906 50.6604 25.8184C50.6604 26.4462 50.2418 26.8648 49.614 26.8648ZM42.4987 43.8159C42.2894 43.8159 41.8709 43.8159 41.6616 43.6066L38.7318 40.6768C38.3132 40.2583 38.3132 39.6304 38.7318 39.2119C39.1503 38.7933 39.7782 38.7933 40.1967 39.2119L43.1265 42.1417C43.5451 42.5603 43.5451 43.1881 43.1265 43.6066C43.1265 43.8159 42.9173 43.8159 42.4987 43.8159ZM8.59642 43.8159C8.38715 43.8159 7.9686 43.8159 7.75932 43.6066C7.34078 43.1881 7.34078 42.5603 7.75932 42.1417L10.6892 39.2119C11.1077 38.7933 11.7355 38.7933 12.1541 39.2119C12.5726 39.6304 12.5726 40.2583 12.1541 40.6768L9.22424 43.6066C9.01497 43.8159 8.80569 43.8159 8.59642 43.8159ZM5.66659 26.8648H1.48112C0.8533 26.8648 0.434753 26.4462 0.434753 25.8184C0.434753 25.1906 0.8533 24.772 1.48112 24.772H5.66659C6.29441 24.772 6.71296 25.1906 6.71296 25.8184C6.71296 26.4462 6.29441 26.8648 5.66659 26.8648ZM11.5262 12.8434C11.317 12.8434 10.8984 12.8434 10.6892 12.6342L7.75932 9.49505C7.34078 9.07651 7.34078 8.44869 7.75932 8.03014C8.17787 7.61159 8.80569 7.61159 9.22424 8.03014L12.1541 10.96C12.5726 11.3785 12.5726 12.0063 12.1541 12.4249C11.9448 12.6342 11.7355 12.8434 11.5262 12.8434ZM33.9185 26.8648C33.2907 26.8648 32.8721 26.4462 32.8721 25.8184C32.8721 21.8422 29.5238 18.4938 25.5476 18.4938C24.9197 18.4938 24.5012 18.0753 24.5012 17.4474C24.5012 16.8196 24.9197 16.4011 25.5476 16.4011C30.7794 16.4011 34.9649 20.5865 34.9649 25.8184C34.9649 26.4462 34.5463 26.8648 33.9185 26.8648Z"
                      fill="white"
                      stroke="white"
                      stroke-width="1.42343"
                      stroke-linejoin="round"
                    />
                  </svg>
                  <div class="prosearch_head">
                    <h6>Solution</h6>
                    <span>05</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <?php echo get_sidebar('cta'); ?>
</main> 
<?php 
get_footer();
?>