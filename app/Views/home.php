<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>


<!-- Page custom styles -->
<style>

  /* Spin animation */
  @-webkit-keyframes hero-spin {
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
  @keyframes hero-spin {
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
  .hero-animation-spin {
    -webkit-animation: hero-spin 35s linear infinite;
    animation: hero-spin 35s linear infinite;
  }

  /* Fade animation */
  @-webkit-keyframes hero-fade {
    0%, 100% { opacity: 0 }
    50% { opacity: 1 }
  }
  @keyframes hero-fade {
    0%, 100% { opacity: 0 }
    50% { opacity: 1 }
  }
  .hero-animation-fade {
    -webkit-animation: hero-fade 4s ease-in infinite;
    animation: hero-fade 4s ease-in infinite;
  }
  .hero-animation-delay-1,
  .hero-animation-delay-2,
  .hero-animation-delay-3 {
    opacity: 0;
  }
  .hero-animation-delay-1 { animation-delay: .75s; }
  .hero-animation-delay-2 { animation-delay: 1.5s; }
  .hero-animation-delay-3 { animation-delay: 2s; }
</style>


<!-- Hero + animations -->
<section class="position-relative d-flex align-items-center min-vh-100 py-5 bg-dark overflow-hidden">
  <span class="position-absolute top-0 start-0 d-dark-mode-block d-none w-100 h-100 bg-secondary opacity-75"></span>
  <div class="container position-relative dark-mode mt-5 mb-lg-5 mb-md-4 mb-3 pt-3 pb-xl-3">
    <div class="row gy-5">
      <div class="col-lg-6 pe-5">
        <div class="position-relative zindex-5 text-lg-start text-center">
          <div class="swiper py-5 py-lg-0 py-xxl-5" data-swiper-options='{
              "effect": "fade",
              "speed": 500,
              "autoplay": {
                "delay": 1500,
                "disableOnInteraction": false
              },
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": "#hero-prev",
                "nextEl": "#hero-next"
              }
            }'>
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <h1 class="display-2 text-light text-md-start from-start mb-lg-4">We <span class="text-primary">Transform</span> Your Ideas into Reality</h1>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <h1 class="display-2 text-light text-md-start from-start mb-lg-4">The Best <span class="text-primary">IT</span> Solutions for Your Business</h1>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <h1 class="display-2 text-light text-md-start from-start mb-lg-4">Top <span class="text-primary">Software</span> Engineering Company</h1>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <h1 class="display-2 text-light text-md-start from-start mb-lg-4"><span class="text-primary">24/7 Tech</span> &amp; Business Support</h1>
              </div>
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative d-md-none pt-2 mt-5"></div>
          </div>
          <p class="mb-4 pb-lg-3 pb-md-2">
            <span class="me-2 text-light">We are the Top Rated agency on</span>
            <img src="assets/img/landing/software-agency-3/clutch-rating.png" width="193" alt="Clutch rating" class="mt-n1">
          </p>
          <a href="/contact" class="btn btn-lg btn-primary">Get a Free Quote</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="position-relative ms-xl-0 ms-lg-4">
          <div class="position-absolute top-50 start-50 translate-middle ratio ratio-1x1" style="width: 125%; max-width: 49.75rem;">
            <div class="p-md-0 p-5">
              <img src="assets/img/landing/software-agency-3/hero-bg.png" alt="Shape" class="hero-animation-spin p-md-0 p-5">
            </div>
          </div>
          <div class="position-relative row row-cols-sm-2 row-cols-1 gx-xl-4 gx-lg-3 gx-md-4 gx-3">
            <div class="col">
              <div class="d-sm-grid d-flex gap-xl-4 gap-lg-3 gap-md-4 gap-sm-3 gap-2">
                <div class="d-flex align-items-center justify-content-center bg-secondary rounded-3" style="min-height: 176px; backdrop-filter: blur(6px);">
                  <div class="p-xl-4 p-sm-3 p-2 fs-xl fw-semibold text-center">
                    <span class="hero-animation-fade text-white">I need Mobile App Development</span>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-center bg-secondary rounded-3" style="min-height: 176px; backdrop-filter: blur(6px);">
                  <div class="p-xl-4 p-sm-3 p-2 fs-xl fw-semibold text-center">
                    <span class="hero-animation-fade hero-animation-delay-2 text-white">I need web development</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col mt-sm-5 mt-2 pt-sm-5">
              <div class="d-sm-grid d-flex gap-xl-4 gap-lg-3 gap-md-4 gap-sm-3 gap-2">
                <div class="d-flex align-items-center justify-content-center bg-secondary rounded-3" style="min-height: 176px; backdrop-filter: blur(6px);">
                  <div class="p-xl-4 p-sm-3 p-2 fs-xl fw-semibold text-center">
                    <span class="hero-animation-fade hero-animation-delay-1 text-white">I need MVP for startup</span>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-center bg-secondary rounded-3" style="min-height: 176px; backdrop-filter: blur(6px);">
                  <div class="p-xl-4 p-sm-3 p-2 fs-xl fw-semibold text-center">
                    <span class="hero-animation-fade hero-animation-delay-3 text-white">I need Wordpress & Shopify Expert</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Benefits (features) -->
<section class="container mt-5 mb-5 pb-md-4" id="benefits">
  <h1 class="text-center mb-4">Why Partner With Us?</h1>
  <div class="swiper pt-3" data-swiper-options='{
    "slidesPerView": 1,
    "pagination": {
      "el": ".swiper-pagination",
      "clickable": true
    },
    "breakpoints": {
      "500": {
        "slidesPerView": 2
      },
      "991": {
        "slidesPerView": 3
      }
    }
  }'>
    <div class="swiper-wrapper pt-4">

      <!-- Item -->
      <div class="swiper-slide border-end-lg px-2">
        <div class="text-center">
          <img src="/assets/img/landing/digital-agency/icons/idea.svg" width="48" alt="Bulb icon" class="d-block mb-4 mx-auto">
          <h4 class="mb-2 pb-1">Creative Solutions</h4>
          <p class="mx-auto" style="max-width: 336px;">Our ability to think outside the box can lead to innovative approaches that set your business apart from competitors and attract new customers or clients.</p>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide border-end-lg px-2">
        <div class="text-center">
          <img src="/assets/img/landing/digital-agency/icons/award.svg" width="48" alt="Award icon" class="d-block mb-4 mx-auto">
          <h4 class="mb-2 pb-1">Award Winning</h4>
          <p class="mx-auto" style="max-width: 336px;">Having been honored with the Award of Excellence, our team upholds elevated standards synonymous with exceptional quality.</p>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide px-2">
        <div class="text-center">
          <img src="/assets/img/landing/digital-agency/icons/team.svg" width="48" alt="Team icon" class="d-block mb-4 mx-auto">
          <h4 class="mb-2 pb-1">Team of Professionals</h4>
          <p class="mx-auto" style="max-width: 336px;">Our team's expertise, diversity, collaboration, adaptability, client-centric approach, innovation, and proven track record will add substantial value to our partnership.</p>
        </div>
      </div>
    </div>

    <!-- Pagination (bullets) -->
    <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
  </div>
</section>


<!-- Services -->
<section class="bg-secondary pb-md-2 pb-lg-5">
  <div class="d-none d-lg-block"></div>
  <div class="container pb-4 pt-5">
    <h2 class="h1 text-center text-md-start mb-lg-4 pt-1 pt-md-4">Our Services</h2>
    <div class="row align-items-center pb-5 mb-lg-2">
      <div class="col-md-8 text-center text-md-start">
        <p class="fs-lg text-muted mb-md-0">We are focused on helping brands grow through digital transformation services. We bring real solutions to each client’s problems through a deep understanding of their market, solution, and vision.</p>
      </div>
      <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
        <a href="/services" class="btn btn-outline-primary btn-lg">See all services</a>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2">

      <!-- Item -->
      <div class="col py-4 my-2 my-sm-3">
        <a href="/services/web-development" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
          <div class="card-body pt-3">
            <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
              <img src="/assets/img/services/icons/cms.svg" class="d-block m-1" width="40" alt="Icon">
            </div>
            <h2 class="h4 d-inline-flex align-items-center">
              Web Development
              <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
            </h2>
            <p class="fs-sm text-body mb-0">A professional website development service provider specializing in creating user-friendly and visually appealing websites to help businesses establish a strong online presence.</p>
          </div>
        </a>
      </div>

      <!-- Item -->
      <div class="col py-4 my-2 my-sm-3">
        <a href="/services/mobile-app-development" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
          <div class="card-body pt-3">
            <div class="d-inline-block bg-success shadow-success rounded-3 position-absolute top-0 translate-middle-y p-3">
              <img src="/assets/img/services/icons/mobile-app.svg" class="d-block m-1" width="40" alt="Icon">
            </div>
            <h2 class="h4 d-inline-flex align-items-center">
              Mobile App Development
              <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
            </h2>
            <p class="fs-sm text-body mb-0">A leading mobile app development service provider delivering innovative and customized solutions for businesses across various industries.</p>
          </div>
        </a>
      </div>

      <!-- Item -->
      <div class="col py-4 my-2 my-sm-3">
        <a href="/services/ecommerce-development" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
          <div class="card-body pt-3">
            <div class="d-inline-block bg-danger shadow-danger rounded-3 position-absolute top-0 translate-middle-y p-3">
              <img src="/assets/img/services/icons/timer.svg" class="d-block m-1" width="40" alt="Icon">
            </div>
            <h2 class="h4 d-inline-flex align-items-center">
              Ecommerce Development
              <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
            </h2>
            <p class="fs-sm text-body mb-0">We are providing expert ecommerce development services to create seamless online shopping experiences, from website design to payment integration.</p>
          </div>
        </a>
      </div>

      <!-- Item -->
      <div class="col py-4 my-2 my-sm-3">
        <a href="/services/it-support" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
          <div class="card-body pt-3">
            <div class="d-inline-block bg-info shadow-info rounded-3 position-absolute top-0 translate-middle-y p-3">
              <img src="/assets/img/services/icons/analytics.svg" class="d-block m-1" width="40" alt="Icon">
            </div>
            <h2 class="h4 d-inline-flex align-items-center">
              IT Support
              <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
            </h2>
            <p class="fs-sm text-body mb-0">A leading IT support service provider offering expert technical assistance and solutions for businesses of all sizes.</p>
          </div>
        </a>
      </div>

      <!-- Item -->
      <div class="col py-4 my-2 my-sm-3">
        <a href="/services/digital-marketing" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
          <div class="card-body pt-3">
            <div class="d-inline-block bg-dark shadow-dark rounded-3 position-absolute top-0 translate-middle-y p-3">
              <img src="/assets/img/services/icons/web-search.svg" class="d-block m-1" width="40" alt="Icon">
            </div>
            <h2 class="h4 d-inline-flex align-items-center">
              Digital Marketing
              <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
            </h2>
            <p class="fs-sm text-body mb-0">A leading digital marketing service provider offering comprehensive solutions to businesses for enhancing their online presence and driving growth through effective strategies and campaigns.</p>
          </div>
        </a>
      </div>

      <!-- Item -->
      <div class="col py-4 my-2 my-sm-3">
        <a href="/services/game-development" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
          <div class="card-body pt-3">
            <div class="d-inline-block bg-warning shadow-warning rounded-3 position-absolute top-0 translate-middle-y p-3">
              <img src="/assets/img/services/icons/rocket.svg" class="d-block m-1" width="40" alt="Icon">
            </div>
            <h2 class="h4 d-inline-flex align-items-center">
              Game Development
              <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
            </h2>
            <p class="fs-sm text-body mb-0">We offer comprehensive game development services, from concept to launch, including design, programming, and testing, to bring your gaming vision to life.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>


<!-- Case studies -->
<section class="bg-secondary pt-1">
  <div class="container">
    <h2 class="h1 text-center text-md-start mb-lg-4">Case Studies</h2>
    <div class="row align-items-center pb-5">
      <div class="col-md-8 col-lg-7 col-xl-6 text-center text-md-start">
        <p class="fs-lg text-muted mb-md-0">We bring real solutions to each client’s problems through a deep understanding of their market, solution, and vision.</p>
      </div>
      <div class="col-md-4 col-lg-5 col-xl-6 d-flex justify-content-center justify-content-md-end">
        <a href="/case-study" class="btn btn-outline-primary btn-lg">See all case studies</a>
      </div>
    </div>
  </div>

  <div class="position-relative py-lg-4 py-xl-5">

    <!-- Swiper tabs -->
    <div class="swiper-tabs position-absolute top-0 start-0 w-100 h-100">
    <?php
      for ($i=0; ($i < sizeof($portfolios)) && ($i < 5); $i++) {
    ?>
      <div id="image-<?= $i+1 ?>" class="jarallax position-absolute top-0 start-0 w-100 h-100 swiper-tab<?= ($i==0) ? ' active' : '' ?>" data-jarallax data-speed="0.4">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
        <div class="jarallax-img" style="background-image: url('https://www.overninja.com/assets/portfolio/<?= $portfolios[$i]['project_image'] ?>');"></div>
      </div>
    <?php
      }
    ?>
    </div>

    <!-- Swiper slider -->
    <div class="container position-relative zindex-5 py-5">
      <div class="row py-2 py-md-3">
        <div class="col-xl-5 col-lg-7 col-md-9">

          <!-- Slider controls (Prev / next) -->
          <div class="d-flex justify-content-center justify-content-md-start pb-3 mb-3">
            <button type="button" id="case-study-prev" class="btn btn-prev btn-icon btn-sm bg-white me-2">
              <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="case-study-next" class="btn btn-next btn-icon btn-sm bg-white ms-2">
              <i class="bx bx-chevron-right"></i>
            </button>
          </div>

          <!-- Card -->
          <div class="card bg-white shadow-sm p-3">
            <div class="card-body">
              <div class="swiper" data-swiper-options='{
                "spaceBetween": 30,
                "loop": true,
                "tabs": true,
                "pagination": {
                  "el": "#case-study-pagination",
                  "clickable": true
                },
                "navigation": {
                  "prevEl": "#case-study-prev",
                  "nextEl": "#case-study-next"
                }
              }'>
                <div class="swiper-wrapper">

            <?php
              for ($i=0; ($i < sizeof($portfolios)) && ($i < 5); $i++) {
            ?>

                  <!-- Item -->
                  <div class="swiper-slide" data-swiper-tab="#image-<?= $i+1 ?>">
                    <h3 class="mb-2"><?= $portfolios[$i]['client'] ?></h3>
                    <p class="fs-sm text-muted border-bottom pb-3 mb-3"><?= $portfolios[$i]['service'] ?></p>
                    <p class="pb-2 pb-lg-3 mb-3"><?= substr($portfolios[$i]['introduction'], 0, 300) ?>...</p>
                    <a href="/case-study/<?= $portfolios[$i]['id'] ?>" class="btn btn-primary">View case study</a>
                  </div>

            <?php
              }
            ?>

                </div>
              </div>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="dark-mode pt-4 mt-3">
            <div id="case-study-pagination" class="swiper-pagination position-relative bottom-0"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Industries -->
<section class="container pt-4 pb-5 mt-4 mt-lg-5 mb-md-4 mb-lg-5">
  <h2 class="h1 text-center pb-3 pb-lg-4">Industries We Serve</h2>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs flex-nowrap flex-lg-wrap justify-content-lg-center overflow-auto pb-2 mb-3 mb-lg-4" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link text-nowrap active" id="retail-tab" data-bs-toggle="tab" data-bs-target="#retail" type="button" role="tab" aria-controls="retail" aria-selected="true">
        <i class="bx bx-cart-alt fs-xl opacity-60 me-2"></i>
        Retail & Ecommerce
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-nowrap" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false">
        <i class="bx bxs-graduation fs-lg opacity-60 me-2"></i>
        Education & Learning
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-nowrap" id="healthcare-tab" data-bs-toggle="tab" data-bs-target="#healthcare" type="button" role="tab" aria-controls="healthcare" aria-selected="false">
        <i class="bx bx-run fs-xl opacity-60 me-2"></i>
        Healthcare & Fitness
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-nowrap" id="logistics-tab" data-bs-toggle="tab" data-bs-target="#logistics" type="button" role="tab" aria-controls="logistics" aria-selected="false">
        <i class="bx bxs-truck fs-lg opacity-60 me-2"></i>
        Logistics & Distribution
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-nowrap" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" type="button" role="tab" aria-controls="social" aria-selected="false">
        <i class="bx bx-chat fs-bse opacity-60 me-2"></i>
        Social Networking
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-nowrap" id="real-estate-tab" data-bs-toggle="tab" data-bs-target="#real-estate" type="button" role="tab" aria-controls="real-estate" aria-selected="false">
        <i class="bx bx-buildings fs-lg opacity-60 me-2"></i>
        Real Estate
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-nowrap" id="travel-tab" data-bs-toggle="tab" data-bs-target="#travel" type="button" role="tab" aria-controls="travel" aria-selected="false">
        <i class="bx bx-hotel fs-lg opacity-60 me-2"></i>
        Travel & Hospitality
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-nowrap" id="food-tab" data-bs-toggle="tab" data-bs-target="#food" type="button" role="tab" aria-controls="food" aria-selected="false">
        <i class="bx bx-restaurant fs-lg opacity-60 me-2"></i>
        Food & Restaurant
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-nowrap" id="on-demand-tab" data-bs-toggle="tab" data-bs-target="#on-demand" type="button" role="tab" aria-controls="on-demand" aria-selected="false">
        <i class="bx bx-support fs-lg opacity-60 me-2"></i>
        On-Demand Solutions
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-nowrap" id="gaming-tab" data-bs-toggle="tab" data-bs-target="#gaming" type="button" role="tab" aria-controls="gaming" aria-selected="false">
        <i class="bx bx-cube-alt fs-lg opacity-60 me-2"></i>
        Gaming
      </button>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content bg-secondary rounded-3 py-4">

    <!-- Retail & Ecommerce -->
    <div class="tab-pane fade show active" id="retail" role="tabpanel" aria-labelledby="retail-tab">
      <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
          <h3 class="mb-lg-4">Retail & Ecommerce</h3>
          <p>Familiar with the realm of retail, we understand its requirements for dependability, adaptability, and versatility. Our expertise lies in crafting and delivering interactive retail and hospitality solutions that ensure customer experiences remain resilient against future changes.</p>
        </div>
        <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
          <img src="/assets/img/services/industries/ecommerce.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
        </div>
      </div>
    </div>

    <!-- Education & Learning -->
    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
      <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
          <h3 class="mb-lg-4">Education & Learning</h3>
          <p>Our focus lies in providing educational app development solutions that empower educators to deliver technology-driven education directly to learners through their smartphones. Our dedicated team assists in creating meticulously organized courses, enhancing user interface and optimizing user experience to present a well-structured learning journey.</p>
        </div>
        <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
          <img src="/assets/img/services/industries/education.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
        </div>
      </div>
    </div>

    <!-- Healthcare & Fitness -->
    <div class="tab-pane fade" id="healthcare" role="tabpanel" aria-labelledby="healthcare-tab">
      <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
          <h3 class="mb-lg-4">Healthcare & Fitness</h3>
          <p>We specialize in crafting tailored solutions for Healthcare and medical app development. Our expertise lies in seamlessly integrating mobility into the healthcare sector through exceptional mobile applications that revolutionize the delivery of patient services.</p>
        </div>
        <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
          <img src="/assets/img/services/industries/fitness.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
        </div>
      </div>
    </div>

    <!-- Logistics & Distribution -->
    <div class="tab-pane fade" id="logistics" role="tabpanel" aria-labelledby="logistics-tab">
      <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
          <h3 class="mb-lg-4">Logistics & Distribution</h3>
          <p>Our extensive technological proficiency spans various industries. Our team possesses the ability to create custom software and mobile applications for a diverse range of sectors including warehousing, logistics management, container shipping, transport, courier delivery markets, and many others.</p>
        </div>
        <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
          <img src="/assets/img/services/industries/logistics.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
        </div>
      </div>
    </div>

    <!-- Social Networking -->
    <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
      <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
          <h3 class="mb-lg-4">Social Networking</h3>
          <p>Our focus is on creating interactive social media applications that captivate your audience and provide hours of entertainment. By utilizing popular social media platforms, we facilitate a closer connection between brands, labels, and their customers.</p>
        </div>
        <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
          <img src="/assets/img/services/industries/social.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
        </div>
      </div>
    </div>

    <!-- Real Estate -->
    <div class="tab-pane fade" id="real-estate" role="tabpanel" aria-labelledby="real-estate-tab">
      <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
          <h3 class="mb-lg-4">Real Estate</h3>
          <p>Our proficient and highly experienced team specializing in real estate app development delivers top-tier, innovative solutions tailored to meet your precise business needs in the real estate sector. In addition to catering to local clientele, our applications have the capability to link real estate enterprises with international purchasers, accommodating their languages, currencies, and measurement units.</p>
        </div>
        <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
          <img src="/assets/img/services/industries/real-estate.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
        </div>
      </div>
    </div>

    <!-- Travel & Hospitality -->
    <div class="tab-pane fade" id="travel" role="tabpanel" aria-labelledby="travel-tab">
      <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
          <h3 class="mb-lg-4">Travel & Hospitality</h3>
          <p>We possess an impressive capacity to conceive and craft technological solutions aimed at meeting the expanding needs of customers. Whether you represent a multimillion-dollar online travel conglomerate, a community-based tour operating venture, or a corporate travel service provider, we offer optimal application-based solutions tailored to your business requirements.</p>
        </div>
        <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
          <img src="/assets/img/services/industries/hospitality.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
        </div>
      </div>
    </div>

    <!-- Food & Restaurant -->
    <div class="tab-pane fade" id="food" role="tabpanel" aria-labelledby="food-tab">
      <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
          <h3 class="mb-lg-4">Food & Restaurant</h3>
          <p>When delving into the realm of food and restaurant app development, you'll find no superior collaborator than our team. Whether it's crafting restaurant apps, food delivery platforms, or convenient food pickup applications, we specialize in creating inventive and user-centric apps. Our goal is to empower customers with the ability to select their cherished dishes from an extensive array of menus spanning across diverse eateries.</p>
        </div>
        <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
          <img src="/assets/img/services/industries/restaurant.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
        </div>
      </div>
    </div>

    <!-- On-Demand Solutions -->
    <div class="tab-pane fade" id="on-demand" role="tabpanel" aria-labelledby="on-demand-tab">
      <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
          <h3 class="mb-lg-4">On-Demand Solutions</h3>
          <p>With extensive years of experience, our goal is to enhance the lives of individuals worldwide by creating highly efficient and exceptional on-demand apps. Our unwavering dedication to ensuring complete customer contentment drives us to deliver optimal user experiences through top-tier interfaces and captivating features.</p>
        </div>
        <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
          <img src="/assets/img/services/industries/ondemand.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
        </div>
      </div>
    </div>

    <!-- Gaming -->
    <div class="tab-pane fade" id="gaming" role="tabpanel" aria-labelledby="gaming-tab">
      <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
        <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
          <h3 class="mb-lg-4">Gaming</h3>
          <p>Utilizing the expertise of our technical specialists who excel in comic-style 2D art, animation, and lifelike 3D models, we construct and bring to life artistic concepts that imbue each game with distinctiveness, entertainment, and lasting memorability.</p>
        </div>
        <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
          <img src="/assets/img/services/industries/gaming.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Who We Work With -->
<section class="container pt-2 pt-lg-3 mb-md-3 mb-lg-5 pb-5">
  <div class="row">
    <div class="col-md-6 pb-2 pb-md-0 mb-4 mb-md-0">
      <div class="pe-lg-5">
        <img src="/assets/img/services/service03.jpg" class="rounded-3" alt="Image">
      </div>
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-center">
      <h2 class="h3 mb-sm-4">Who We Work With</h2>
      <p class="d-md-none d-xl-block pb-2 pb-md-3 mb-3">At Overninja Technologies, our expertise lies in delivering top-notch solutions within the industry. Our comprehensive array of app development services is tailored to align with specific business needs. We are catering to startups and enterprises alike.</p>
      <div class="border rounded-3 mb-4 mb-lg-5">
        <div class="row row-cols-1 row-cols-sm-2 g-0">
          <div class="col d-flex flex-column align-items-center border-end-sm border-bottom p-3">
            <div class="text-primary" style="font-size: 2em;"><i class="fas fa-user-tie"></i></div>
            <div class="pt-3 ps-2 ms-1">
              <h3 class="h6 mb-0">Start Up Business</h3>
            </div>
          </div>
          <div class="col d-flex flex-column align-items-center border-end-sm border-bottom p-3">
            <div class="text-warning" style="font-size: 2em;"><i class="fas fa-business-time"></i></div>
            <div class="pt-3 ps-2 ms-1">
              <h3 class="h6 mb-0">Small & Medium Business</h3>
            </div>
          </div>
          <div class="col d-flex flex-column align-items-center border-end-sm border-bottom p-3">
            <div class="text-danger" style="font-size: 2em;"><i class="fas fa-industry"></i></div>
            <div class="pt-3 ps-2 ms-1">
              <h3 class="h6 mb-0">Enterprise</h3>
            </div>
          </div>
          <hr class="d-sm-none">
          <div class="col d-flex flex-column align-items-center border-end-sm border-bottom p-3">
            <div class="text-success" style="font-size: 2em;"><i class="fas fa-city"></i></div>
            <div class="pt-3 ps-2 ms-1">
              <h3 class="h6 mb-0">Agencies</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex flex-column flex-sm-row">
        <a href="/contact" class="btn btn-primary mb-3 mb-sm-0 me-sm-3">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<!-- Key Features -->
<section class="bg-secondary border-bottom border-light py-5">
  <div class="container">
    <h2 class="h1 text-center pb-2">Key Features</h2>
    <div class="position-relative mx-md-2 px-md-5">

      <!-- Slider controls (Prev / next) -->
      <button type="button" id="news-prev" class="btn btn-prev btn-icon btn-sm position-absolute top-50 start-0 translate-middle-y mt-n4 d-none d-md-inline-flex">
        <i class="bx bx-chevron-left"></i>
      </button>
      <button type="button" id="news-next" class="btn btn-next btn-icon btn-sm position-absolute top-50 end-0 translate-middle-y mt-n4 d-none d-md-inline-flex">
        <i class="bx bx-chevron-right"></i>
      </button>

      <!-- Swiper slider -->
      <div class="swiper swiper-nav-onhover mx-n2" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "spaceBetween": 8,
        "pagination": {
          "el": ".swiper-pagination",
          "clickable": true
        },
        "navigation": {
          "prevEl": "#news-prev",
          "nextEl": "#news-next"
        },
        "breakpoints": {
          "0": {
            "slidesPerView": 1
          },
          "560": {
            "slidesPerView": 2
          },
          "992": {
            "slidesPerView": 3
          }
        }
      }'>
        <div class="swiper-wrapper">

          <!-- Item -->
          <div class="swiper-slide h-auto py-3">
            <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
              <div class="card-body">
                <h3 class="h4">
                  Agile Development
                </h3>
                <p>We adhere to an agile development process that enables us to deliver projects with the highest level of quality.</p>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="swiper-slide h-auto py-3">
            <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
              <div class="card-body">
                <h3 class="h4">
                  Dedicated Development Team
                </h3>
                <p>A proficient and committed team utilizes projects to deliver optimal outcomes.</p>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="swiper-slide h-auto py-3">
            <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
              <div class="card-body">
                <h3 class="h4">
                  Excellent Support
                </h3>
                <p>We are consistently available to support our clients in all conceivable ways before and after providing our services.</p>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="swiper-slide h-auto py-3">
            <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
              <div class="card-body">
                <h3 class="h4">
                  Data Backups
                </h3>
                <p>We consistently create data backups for our projects to prevent any unfortunate loss.</p>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="swiper-slide h-auto py-3">
            <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
              <div class="card-body">
                <h3 class="h4">
                  Data Protection
                </h3>
                <p>We adhere to a procedure aimed at safeguarding our clients' data and fostering a sense of security and confidence.</p>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="swiper-slide h-auto py-3">
            <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
              <div class="card-body">
                <h3 class="h4">
                  Quality Deliverance
                </h3>
                <p>Delivering quality work is the cornerstone of our success.</p>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="swiper-slide h-auto py-3">
            <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
              <div class="card-body">
                <h3 class="h4">
                  Enhancement
                </h3>
                <p>Our ongoing recommendations for edits and enhancements throughout each stage of the design and development process aim to ensure the optimal outcome.</p>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="swiper-slide h-auto py-3">
            <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
              <div class="card-body">
                <h3 class="h4">
                  Client Centric Development
                </h3>
                <p>Our attention is directed towards meeting the requirements and objectives of our clients' businesses, ensuring tailor-made solutions are provided.</p>
              </div>
            </article>
          </div>

        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
      </div>
    </div>
  </div>
</section>

<!-- Our Process -->
<section class="container mt-5 pt-md-4 pt-3">
  <h2 class="h1 mb-lg-5 mb-4 pb-lg-0 pb-md-2 text-center">Our Process</h2>

  <!-- Swiper slider -->
  <div class="swiper mb-xl-3" data-swiper-options='{
    "autoplay": {
      "delay": 3500,
      "disableOnInteraction": false
    },
    "spaceBetween": 24,
    "breakpoints": {
      "0": {
        "slidesPerView": 1
      },
      "500": {
        "slidesPerView": 2
      },
      "768": {
        "slidesPerView": 3
      },
      "1200": {
        "slidesPerView": 4
      }
    },
    "pagination": {
      "el": ".swiper-pagination",
      "clickable": true
    }
  }'>
    <div class="swiper-wrapper">

      <!-- Swiper item -->
      <div class="swiper-slide h-auto">
        <div class="card h-100">
          <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2">
            <!-- <img src="/assets/img/landing/software-agency-3/icons/01.svg" alt="Icon" class="d-block mb-3 mx-auto"> -->
            <h3 class="h5 mb-3">Requirement Gathering</h3>
            <p class="mb-0">This initial phase involves understanding and documenting the project's objectives, functionalities, and user expectations for stakeholders, clients, and end-users.</p>
          </div>
        </div>
      </div>

      <!-- Swiper item -->
      <div class="swiper-slide h-auto">
        <div class="card h-100">
          <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2">
            <!-- <img src="/assets/img/landing/software-agency-3/icons/02.svg" alt="Icon" class="d-block mb-3 mx-auto"> -->
            <h3 class="h5 mb-3">UI/UX Design</h3>
            <p class="mb-0">During this phase, designers craft wireframes, mockups, and interactive prototypes that showcase the layout, navigation, and overall look of the application for a user-centric design.</p>
          </div>
        </div>
      </div>

      <!-- Swiper item -->
      <div class="swiper-slide h-auto">
        <div class="card h-100">
          <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2">
            <!-- <img src="/assets/img/landing/software-agency-3/icons/03.svg" alt="Icon" class="d-block mb-3 mx-auto"> -->
            <h3 class="h5 mb-3">Prototype</h3>
            <p class="mb-0">Building on the design phase, a functional prototype is developed. This prototype often includes limited functionality but gives stakeholders a tangible representation of the end product's behavior.</p>
          </div>
        </div>
      </div>

      <!-- Swiper item -->
      <div class="swiper-slide h-auto">
        <div class="card h-100">
          <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2">
            <!-- <img src="/assets/img/landing/software-agency-3/icons/04.svg" alt="Icon" class="d-block mb-3 mx-auto"> -->
            <h3 class="h5 mb-3">Development</h3>
            <p class="mb-0">This phase is characterized by frequent iterations, code reviews, and collaboration among the development team members to ensure clean, maintainable, and efficient code.</p>
          </div>
        </div>
      </div>

      <!-- Swiper item -->
      <div class="swiper-slide h-auto">
        <div class="card h-100">
          <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2">
            <!-- <img src="/assets/img/landing/software-agency-3/icons/04.svg" alt="Icon" class="d-block mb-3 mx-auto"> -->
            <h3 class="h5 mb-3">Quality Assurance</h3>
            <p class="mb-0">Quality assurance engineers conduct various types of testing, including unit testing, integration testing, system testing, and user acceptance testing (UAT).</p>
          </div>
        </div>
      </div>

      <!-- Swiper item -->
      <div class="swiper-slide h-auto">
        <div class="card h-100">
          <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2">
            <!-- <img src="/assets/img/landing/software-agency-3/icons/04.svg" alt="Icon" class="d-block mb-3 mx-auto"> -->
            <h3 class="h5 mb-3">Deployment</h3>
            <p class="mb-0">Deployment involves making the software accessible to users, whether through web servers, app stores, or other distribution channels.</p>
          </div>
        </div>
      </div>

      <!-- Swiper item -->
      <div class="swiper-slide h-auto">
        <div class="card h-100">
          <div class="card-body my-md-5 my-4 py-xl-2 py-md-0 py-sm-2">
            <!-- <img src="/assets/img/landing/software-agency-3/icons/04.svg" alt="Icon" class="d-block mb-3 mx-auto"> -->
            <h3 class="h5 mb-3">Support & Maintenance</h3>
            <p class="mb-0">This stage involves continuous monitoring, bug fixes, performance optimization, and updates to address evolving user needs and technology advancements.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Swiper pagination -->
    <div class="swiper-pagination position-static mt-4 pt-lg-3 pt-2"></div>
  </div>

</section>

<!-- Why Choose Us -->
<section class="container py-5 my-2 my-md-4">
  <h2 class="h1 text-center pt-1 pt-xl-2 mb-4">Why Choose Us?</h2>
  <p class="fs-lg text-muted text-center pb-4 mb-2 mb-lg-3">We personalize how we work to fit your project needs. Our approach helps augment innovation.</p>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pb-xl-3">
    <div class="col text-center border-end">
      <div class="card d-table border-0 rounded-circle shadow-sm p-3 mx-auto mb-4">
        <img src="/assets/img/landing/software-agency-1/features/01.svg" width="32" alt="Icon">
      </div>
      <h3 class="h5 mb-2 mb-lg-0">Build a functional prototype in 24 hrs</h3>
    </div>
    <div class="col text-center border-end">
      <div class="card d-table border-0 rounded-circle shadow-sm p-3 mx-auto mb-4">
        <img src="/assets/img/landing/software-agency-1/features/02.svg" width="32" alt="Icon">
      </div>
      <h3 class="h5 mb-2 mb-lg-0">Create an MVP within two weeks</h3>
    </div>
    <div class="col text-center border-end">
      <div class="card d-table border-0 rounded-circle shadow-sm p-3 mx-auto mb-4">
        <img src="/assets/img/landing/software-agency-1/features/03.svg" width="32" alt="Icon">
      </div>
      <h3 class="h5 mb-2 mb-lg-0">Kickstart software development</h3>
    </div>
    <div class="col text-center">
      <div class="card d-table border-0 rounded-circle shadow-sm p-3 mx-auto mb-4">
        <img src="/assets/img/landing/software-agency-1/features/04.svg" width="32" alt="Icon">
      </div>
      <h3 class="h5 mb-2 mb-lg-0">Get 24/7 tech & business support</h3>
    </div>
  </div>
</section>


<?php include('includes/testimonials.php'); ?>


<?php include('includes/blogs.php'); ?>


<?php include('includes/connect.php'); ?>


<?= $this->endSection(); ?>