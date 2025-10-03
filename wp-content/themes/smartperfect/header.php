<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />
    <!-- google fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Customize css link -->
     <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
     <?php wp_head(); ?>
    <title>smartPerfect</title>
  
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="<?php bloginfo('template_url'); ?>/assets/img/navlogo.png" alt="navlogo"/></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link <?php if ( is_page(9) ) echo 'active'; ?>" aria-current="page" href="/">Home</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link <?php //if ( is_page(14) ) echo 'active'; ?>" href="/features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php //if ( is_page(62) ) echo 'active'; ?>" href="/pricing">Pricing</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link <?php if ( is_page(158) ) echo 'active'; ?>" href="/privacy-terms">Privacy & Terms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ( is_page(91) ) echo 'active'; ?>" href="/about-us">About</a>
              </li>
            </ul>
            <div class="sap_green_btn">
              <button type="button" onclick="location.href = '/contact-us';">Contact Support<i class="fa-solid fa-arrow-right icon"></i></button>
            </div>
          </div>
        </div>
      </nav>
    </header>

    