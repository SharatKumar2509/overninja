<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>


<!-- Hero -->
<section class="dark-mode position-relative pt-5" style="background-color: #151922;">

  <!-- Content -->
  <div class="container position-relative zindex-2 pt-5 pb-2 pb-md-0">
    <div class="row justify-content-center pt-3 mt-3">
      <div class="col-lg-8 col-sm-10 text-center">
        <h1 class="mb-4">IT Support</h1>
        <p class="fs-lg pb-3 mb-3">Have a project in mind? To request a quote contact us directly or fill out the form and let us know how we can help.</p>
        <a href="/contact" class="btn btn-lg btn-primary shadow-primary">Start your project</a>
      </div>
    </div>
  </div>

  <!-- Bottom shape -->
  <div class="d-flex position-absolute top-100 start-0 w-100 overflow-hidden mt-n5" style="color: #151922;">
    <div class="position-relative start-50 translate-middle-x flex-shrink-0 mt-n5 mt-md-n3 mt-lg-n1" style="width: 3788px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="3788" height="144" viewBox="0 0 3788 144"><path fill="currentColor" d="M0,0h3788.7c-525,90.2-1181.7,143.9-1894.3,143.9S525,90.2,0,0z"/></svg>
    </div>
  </div>
</section>


<!-- Feature section (Trading) -->
<section class="container mt-5 pt-5 my-md-2 my-lg-4 my-xl-5 pb-4">

  <div class="mt-5 pt-5"></div>

  <!-- Text -->
  <h2 class="h1 text-center mx-auto mt-n2 mt-sm-0 pt-md-2" style="max-width: 530px;">Process We Follow</h2>
  <ul class="list-unstyled d-flex flex-wrap justify-content-center mb-5">
    <li class="d-flex fs-xl mx-3 mt-2 mt-sm-3">
      <i class="bx bx-check lead text-primary mt-1 me-2"></i>
      <span>Requirement Gathering</span>
    </li>
    <li class="d-flex fs-xl mx-3 mt-2 mt-sm-3">
      <i class="bx bx-check lead text-primary mt-1 me-2"></i>
      <span>UI/UX Design</span>
    </li>
    <li class="d-flex fs-xl mx-3 mt-2 mt-sm-3">
      <i class="bx bx-check lead text-primary mt-1 me-2"></i>
      <span>Prototye</span>
    </li>
    <li class="d-flex fs-xl mx-3 mt-2 mt-sm-3">
      <i class="bx bx-check lead text-primary mt-1 me-2"></i>
      <span>Development</span>
    </li>
    <li class="d-flex fs-xl mx-3 mt-2 mt-sm-3">
      <i class="bx bx-check lead text-primary mt-1 me-2"></i>
      <span>Testing</span>
    </li>
    <li class="d-flex fs-xl mx-3 mt-2 mt-sm-3">
      <i class="bx bx-check lead text-primary mt-1 me-2"></i>
      <span>Deployment</span>
    </li>
    <li class="d-flex fs-xl mx-3 mt-2 mt-sm-3">
      <i class="bx bx-check lead text-primary mt-1 me-2"></i>
      <span>Support & Maintenance</span>
    </li>
  </ul>
</section>


<!-- What we offer -->
<section class="overflow-hidden pt-md-2 pt-lg-3 pb-3 pb-md-4 pb-xl-5">
  <div class="container">
    <div class="d-flex flex-column flex-md-row flex-md-nowrap align-items-start">
      <div class="col-md-7 ps-0 pe-lg-4 mb-5 mb-md-0">
        <div style="max-width: 660px;">
          <h2 class="h1 pb-3 mb-2 mb-md-3">What We Offer</h2>
          <div class="row row-cols-1 row-cols-sm-2 gx-lg-5 g-4">
            <div class="col pt-1 pt-sm-2 pt-lg-3">
              <i class="bx bx-rocket d-block fs-2 text-primary mb-2 mb-sm-3"></i>
              <h3 class="h5 pb-sm-1 mb-2">Innovative Solutions</h3>
              <p class="mb-0">We are renowned for our commitment to innovation. We consistently stay ahead of the curve by incorporating the latest trends and technologies into our projects.</p>
            </div>
            <div class="col pt-1 pt-sm-2 pt-lg-3">
              <i class="bx bx-like d-block fs-2 text-success mb-2 mb-sm-3"></i>
              <h3 class="h5 pb-sm-1 mb-2">Success Guarantee</h3>
              <p class="mb-0">We go beyond traditional service providers by offering a success guarantee. We have a success record of 100% client retention.</p>
            </div>
            <div class="col pt-1 pt-sm-2 pt-lg-3">
              <i class="bx bx-group d-block fs-2 text-danger mb-2 mb-sm-3"></i>
              <h3 class="h5 pb-sm-1 mb-2">On Time Service</h3>
              <p class="mb-0">We are committed to delivering our services promptly, adhering to project timelines without compromising quality.</p>
            </div>
            <div class="col pt-1 pt-sm-2 pt-lg-3">
              <i class="bx bx-time-five d-block fs-2 text-warning mb-2 mb-sm-3"></i>
              <h3 class="h5 pb-sm-1 mb-2">Professional Team</h3>
              <p class="mb-0">The strength of a service provider lies in its team, and we excel in this aspect. We have a team of experienced and skilled professionals who are well-versed in various technologies and methodologies.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <img src="/assets/img/about/gallery/01.jpg" width="836" class="ms-3 ms-sm-5 ms-xl-3" alt="Dashboard">
      </div>
    </div>
  </div>
</section>


<!-- How we work (Steps) -->
<section class="container pb-5 mb-md-2 mb-lg-4 mb-xl-5">
  <h2 class="h1 pb-2 pb-md-0 mb-4 mb-md-5">How We Work?</h2>
  <div class="steps steps-sm steps-horizontal-md pb-2 pb-sm-3">
    <div class="step">
      <div class="step-number">
        <div class="step-number-inner bg-primary text-light">1</div>
      </div>
      <div class="step-body">
        <h3 class="h4 mb-3">Collecting Information to Identify the Problem</h3>
        <p class="mb-0">A successful product begins with understanding its purpose through research and stakeholder discussions. Identifying gaps and pain points, gathered from surveys, interviews, and industry trends, forms the foundation for user-focused development.</p>
      </div>
    </div>
    <div class="step">
      <div class="step-number">
        <div class="step-number-inner bg-success text-light">2</div>
      </div>
      <div class="step-body">
        <h3 class="h4 mb-3">Conducting User Research</h3>
        <p class="mb-0">User research steers product development by uncovering user preferences and pain points. Insights from methods like interviews and surveys inform design, ensuring the product meets user expectations and needs.</p>
      </div>
    </div>
    <div class="step">
      <div class="step-number">
        <div class="step-number-inner bg-danger text-light">3</div>
      </div>
      <div class="step-body">
        <h3 class="h4 mb-3">Creating Low-Fidelity Prototypes</h3>
        <p class="mb-0">Low-fidelity prototypes translate ideas into basic visualizations, aiding brainstorming and quick feedback. Their simplicity encourages exploring design directions and iterative development before committing to detailed features.</p>
      </div>
    </div>
    <div class="step">
      <div class="step-number">
        <div class="step-number-inner bg-warning text-light">4</div>
      </div>
      <div class="step-body">
        <h3 class="h4 mb-3">Building product MVP version</h3>
        <p class="mb-0">The MVP is the initial product version with essential features, addressing user needs and validating assumptions. It gathers real user feedback, minimizing resource investment in unproven features and focusing on core functionalities.</p>
      </div>
    </div>
  </div>
</section>


<!-- Brands (Carousel) -->
<section class="container pb-5 mb-xl-4">
  <h2 class="text-center pb-md-2">Technologies We Work On</h2>
  <div class="swiper mx-n2" data-swiper-options='{
    "slidesPerView": 2,
    "speed": 500,
    "autoplay": {
      "delay": 1500,
      "disableOnInteraction": false
    },
    "pagination": {
      "el": ".swiper-pagination",
      "clickable": true
    },
    "breakpoints": {
      "500": {
        "slidesPerView": 3,
        "spaceBetween": 8
      },
      "650": {
        "slidesPerView": 4,
        "spaceBetween": 8
      },
      "900": {
        "slidesPerView": 5,
        "spaceBetween": 8
      },
      "1100": {
        "slidesPerView": 6,
        "spaceBetween": 8
      }
    }
  }'>
    <div class="swiper-wrapper">

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/21.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">Flutter</div>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/31.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">Shopify</div>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/35.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">WordPress</div>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/37.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">Joomla</div>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/07.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">Node</div>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/22.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">React</div>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/41.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">Vue</div>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/16.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">Asp.Net</div>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/42.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">Unity</div>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/10.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">Android Studio</div>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/20.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">Xcode</div>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/43.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">Mailchimp</div>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide py-3">
        <div class="card card-body card-hover p-2 mx-2">
          <div class="d-flex align-items-end justify-content-center">
            <img src="/assets/img/technologies/44.png" width="40" style="width: 50px; height: auto" alt="Brand">
            <div class="h6 ms-2">Google Ads</div>
          </div>
        </div>
      </div>

    </div>

    <!-- Pagination (bullets) -->
    <div class="swiper-pagination position-relative pt-2 mt-4"></div>
  </div>
</section>


<!-- CTA carousel -->
<section class="pb-5 mb-2 mb-md-4 mb-lg-5" style="padding-top: 80px;">
  <div class="bg-secondary pb-lg-4 pb-xl-5">
    <div class="container pb-4 pb-md-5">
      <div class="row">
        <div class="col-xl-5 col-lg-6" style="margin-top: -80px;">

          <!-- Swiper tabs -->
          <div class="swiper-tabs mx-auto" style="max-width: 526px;">
            <div id="image-1" class="swiper-tab active">
              <img src="/assets/img/service/01.jpg" class="rounded-3" alt="Image">
            </div>
            <div id="image-2" class="swiper-tab">
              <img src="/assets/img/service/02.jpg" class="rounded-3" alt="Image">
            </div>
            <div id="image-3" class="swiper-tab">
              <img src="/assets/img/service/03.jpg" class="rounded-3" alt="Image">
            </div>
            <div id="image-4" class="swiper-tab">
              <img src="/assets/img/service/04.jpg" class="rounded-3" alt="Image">
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 offset-xl-1 pt-2 pt-md-4 pt-lg-5 mt-4">

          <!-- Slider prev/next buttons -->
          <div class="d-flex justify-content-center justify-content-lg-start pb-3 mb-3">
            <button type="button" id="prev" class="btn btn-prev btn-icon btn-sm me-2">
              <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="next" class="btn btn-next btn-icon btn-sm ms-2">
              <i class="bx bx-chevron-right"></i>
            </button>
          </div>

          <!-- Swiper slider -->
          <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
            "spaceBetween": 30,
            "loop": true,
            "tabs": true,
            "navigation": {
              "prevEl": "#prev",
              "nextEl": "#next"
            }
          }'>
            <div class="swiper-wrapper text-center text-lg-start">

              <!-- Item -->
              <div class="swiper-slide pb-4" data-swiper-tab="#image-1">
                <h2 class="h1 mb-4">Let’s create meaningful stories together</h2>
                <p class="pb-2 pb-xl-0 mb-4 mb-xl-5">Mobile technology courses through our veins, infusing our creations with more than just code – they embody brands. Opting for us will stand as your finest choice.</p>
                <a href="/contact" class="btn btn-success btn-lg shadow-success">Get In Touch</a>
              </div>

              <!-- Item -->
              <div class="swiper-slide pb-4" data-swiper-tab="#image-2">
                <h2 class="h1 mb-4">Excellence delivery is our belief</h2>
                <p class="pb-2 pb-xl-0 mb-4 mb-xl-5">Our core belief revolves around delivering excellence consistently. We are committed to surpassing expectations and setting a remarkable standard in everything we undertake.</p>
                <a href="/contact" class="btn btn-danger btn-lg shadow-danger">Get In Touch</a>
              </div>

              <!-- Item -->
              <div class="swiper-slide pb-4" data-swiper-tab="#image-3">
                <h2 class="h1 mb-4">Expertise is just one click away</h2>
                <p class="pb-2 pb-xl-0 mb-4 mb-xl-5">A wealth of expertise is at your fingertips – a single click connects you to seasoned professionals ready to assist, ensuring swift and effective solutions to your needs.</p>
                <a href="/contact" class="btn btn-primary btn-lg shadow-primary">Get In Touch</a>
              </div>

              <!-- Item -->
              <div class="swiper-slide pb-4" data-swiper-tab="#image-4">
                <h2 class="h1 mb-4">Navigating towards innovative solutions</h2>
                <p class="pb-2 pb-xl-0 mb-4 mb-xl-5">Presenting a comprehensive roadmap to access emerging and effective services, guiding you toward cutting-edge solutions that meet your needs efficiently and with maximum impact.</p>
                <a href="/contact" class="btn btn-warning btn-lg shadow-warning">Get In Touch</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Image + Text sections -->
<section class="container pb-sm-1 pb-md-3">

  <!-- Row 1 -->
  <div class="row align-items-lg-center pb-5 mb-2 mb-lg-4 mb-xl-5">
    <div class="col-md-6 mb-4 mb-md-0">
      <img src="/assets/img/about/gallery/04.jpg" class="rounded-3" alt="Image">
    </div>
    <div class="col-md-6">
      <div class="ps-xl-5 ms-md-2 ms-lg-4">
        <h2 class="h1 mb-3 mb-sm-4">We tailor our approach to match your project requirements</h2>
        <p class="mb-4 mb-lg-5">Our methodology is adaptable, ensuring a custom fit for your project's specific demands. We shape our approach to align seamlessly with your unique requirements.</p>
        <a href="/contact" class="btn btn-lg btn-primary shadow-primary">Start your project</a>
      </div>
    </div>
  </div>

  <!-- Row 2 -->
  <div class="row align-items-lg-center pt-md-3 pb-5 mb-2 mb-lg-4 mb-xl-5">
    <div class="col-md-6 order-md-2 mb-4 mb-md-0">
      <img src="/assets/img/about/gallery/03.jpg" class="rounded-3" alt="Image">
    </div>
    <div class="col-md-6 order-md-1">
      <div class="pe-xl-5 me-md-2 me-lg-4">
        <h2 class="h1 mb-3 mb-sm-4">Superior expertise in product development</h2>
        <p class="mb-3 mb-sm-4">Leveraging extensive expertise, we excel in intricate product development. Our innovation-focused approach, skilled team, and holistic problem-solving ensure exceptional outcomes.</p>
        <ul class="list-unstyled mb-0">
          <li class="d-flex mb-2">
            <i class="bx bx-check text-primary lead me-2"></i>
            <span class="text-primary fw-bold">Skilled Team:&nbsp;</span>
            Industry experts understand unique project needs.
          </li>
          <li class="d-flex mb-2">
            <i class="bx bx-check text-primary lead me-2"></i>
            <span class="text-primary fw-bold">Innovation:&nbsp;</span>
            Pushing boundaries for cutting-edge results.
          </li>
          <li class="d-flex">
            <i class="bx bx-check text-primary lead me-2"></i>
            <span class="text-primary fw-bold">Holistic Approach:&nbsp;</span>
            Smooth journey from concept to market.
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php include('includes/blogs.php'); ?>


<?php include('includes/connect.php'); ?>


<?= $this->endSection(); ?>