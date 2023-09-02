<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>

<!-- Hero -->
<section class="position-relative pt-5">

  <!-- Background -->
  <div class="position-absolute top-0 start-0 w-100 bg-position-bottom-center bg-size-cover bg-repeat-0" style="background-color: #151922;">
    <div class="d-lg-none" style="height: 960px;"></div>
    <div class="d-none d-lg-block" style="height: 768px;"></div>
  </div>

  <!-- Content -->
  <div class="container position-relative dark-mode zindex-5 pt-5 mt-2">
    <div class="row pt-md-5">
      <div class="col-lg-6">

        <!-- Text -->
        <h1 class="pb-2 pb-md-3">About Overninja</h1>
        <p class="fs-xl pb-4 mb-1 mb-md-2 mb-lg-3" style="max-width: 526px;">We are a dedicated team of passionate product managers, full stack developers, UX/UI designers, QA engineers and marketing experts helping businesses of every size — from new startups to public companies — launch their projects using our services.</p>
        <p class="mb-4 pb-lg-3 pb-md-2">
          <span class="me-2 text-light">Reviewed on</span>
          <img src="assets/img/landing/software-agency-3/clutch-rating.png" width="193" alt="Clutch rating" class="mt-n1">
        </p>
        <div class="row row-cols-3 pt-4 pt-md-5 mt-2 mt-xl-4">
          <div class="col">
            <h3 class="h2 mb-2"><?= $stats['completed'] ?></h3>
            <p class="mb-0 fw-bold">Projects Completed</p>
          </div>
          <div class="col">
            <h3 class="h2 mb-2"><?= $stats['running'] ?></h3>
            <p class="mb-0 fw-bold">Projects Running</p>
          </div>
          <div class="col">
            <h3 class="h2 mb-2"><?= $stats['clients'] ?>%</h3>
            <p class="mb-0 fw-bold">Happy Clients</p>
          </div>
        </div>
      </div>

      <!-- Images -->
      <div class="col-lg-6 mt-xl-3 pt-5 pt-lg-4">
        <div class="row row-cols-2 gx-3 gx-lg-4">
          <div class="col pt-lg-5 mt-lg-1">
            <img src="/assets/img/about/hero/01.jpg" class="d-block rounded-3 mb-3 mb-lg-4" alt="Image">
            <img src="/assets/img/about/hero/02.jpg" class="d-block rounded-3" alt="Image">
          </div>
          <div class="col">
            <img src="/assets/img/about/hero/03.jpg" class="d-block rounded-3 mb-3 mb-lg-4" alt="Image">
            <img src="/assets/img/about/hero/04.jpg" class="d-block rounded-3" alt="Image">
          </div>
        </div>
      </div>
    </div>
  </div>

</section>


<!-- Features (Icon boxes) -->
<section class="container py-5 my-2 my-md-4 my-lg-5">
  <h2 class="h1 text-center pt-1 pt-xl-3 mb-lg-4">Why Us?</h2>
  <div class="swiper mx-n2" data-swiper-options='{
    "slidesPerView": 1,
    "spaceBetween": 8,
    "pagination": {
      "el": ".swiper-pagination",
      "clickable": true
    },
    "breakpoints": {
      "500": {
        "slidesPerView": 2
      },
      "800": {
        "slidesPerView": 3
      },
      "1200": {
        "slidesPerView": 4
      }
    }
  }'>
    <div class="swiper-wrapper">

      <!-- Item -->
      <div class="swiper-slide h-auto py-3">
        <div class="card h-100 card-body mx-2">
          <i class="bx bx-rocket display-5 fw-normal card-icon text-primary"></i>
          <h3 class="h5 pt-3 pb-1 mb-2">Innovative Solutions</h3>
          <p class="mb-0">We are renowned for our commitment to innovation. We consistently stay ahead of the curve by incorporating the latest trends and technologies into our projects.</p>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide h-auto py-3">
        <div class="card h-100 card-body mx-2">
          <i class="bx bx-like display-5 fw-normal card-icon text-danger"></i>
          <h3 class="h5 pt-3 pb-1 mb-2">Success Guarantee</h3>
          <p class="mb-0">We go beyond traditional service providers by offering a success guarantee. We have a success record of 100% client retention.</p>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide h-auto py-3">
        <div class="card h-100 card-body mx-2">
          <i class="bx bx-time-five display-5 fw-normal card-icon text-success"></i>
          <h3 class="h5 pt-3 pb-1 mb-2">On Time Service</h3>
          <p class="mb-0">We are committed to delivering our services promptly, adhering to project timelines without compromising quality.</p>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide h-auto py-3">
        <div class="card h-100 card-body mx-2">
          <i class="bx bx-group display-5 fw-normal card-icon text-warning"></i>
          <h3 class="h5 pt-3 pb-1 mb-2">Professional Team</h3>
          <p class="mb-0">The strength of a service provider lies in its team, and we excel in this aspect. We have a team of experienced and skilled professionals who are well-versed in various technologies and methodologies.</p>
        </div>
      </div>
    </div>

    <!-- Pagination (bullets) -->
    <div class="swiper-pagination position-relative d-xl-none pt-3 mt-4"></div>
  </div>
  <div class="d-flex flex-column flex-sm-row justify-content-center pt-3 pt-sm-4">
    <a href="/contact" class="btn btn-primary shadow-primary btn-lg">Get a Free Quote</a>
  </div>
</section>


<!-- What you get (Icon boxes) -->
<section class="container pt-1 pt-xl-3 pb-5">
  <h2 class="h1 text-center pb-3 pb-md-0 mb-md-5">What You Get</h2>
  <div class="swiper swiper-nav-onhover mt-n3 mx-n2" data-swiper-options='{
    "slidesPerView": 1,
    "spaceBetween": 8,
    "pagination": {
      "el": ".swiper-pagination",
      "clickable": true
    },
    "breakpoints": {
      "600": {
        "slidesPerView": 2
      },
      "1000": {
        "slidesPerView": 3
      }
    }
  }'>
    <div class="swiper-wrapper">

      <!-- Item -->
      <div class="swiper-slide h-auto py-3">
        <div class="card card-hover h-100 mx-2">
          <div class="card-body">
            <div class="d-table position-relative p-3 mb-2">
              <div class="bg-success text-white" style="font-size: 2em; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-headset"></i>
              </div>
            </div>
            <h3 class="h5 pb-1 mb-2">Post-Launch Support</h3>
            <p class="mb-0">Your journey with us doesn't end with project completion. We offer ongoing support and maintenance services to address any technical issues, updates, or optimizations that may be needed after your app or website goes live.</p>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide h-auto py-3">
        <div class="card card-hover h-100 mx-2">
          <div class="card-body">
            <div class="d-table position-relative p-3 mb-2">
              <div class="bg-warning text-white" style="font-size: 2em; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-swatchbook"></i>
              </div>
            </div>
            <h3 class="h5 pb-1 mb-2">Cross-Platform Compatibility</h3>
            <p class="mb-0">We understand the importance of reaching a broad audience. We develop apps and websites that function flawlessly across various platforms, including mobile devices, tablets, and desktops.</p>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="swiper-slide h-auto py-3">
        <div class="card card-hover h-100 mx-2">
          <div class="card-body">
            <div class="d-table position-relative p-3 mb-2">
              <div class="bg-danger text-white" style="font-size: 2em; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-file"></i>
              </div>
            </div>
            <h3 class="h5 pb-1 mb-2">Training and Documentation</h3>
            <p class="mb-0">If needed, we provide comprehensive training materials and documentation to help you manage and maintain your app or website effectively. This ensures that you have the knowledge and resources to make the most of your digital solution.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Pagination (bullets) -->
    <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
  </div>
</section>


<!-- Backer benefits -->
<section class="container py-2 py-sm-3 py-md-4">
  <div class="row py-5 my-md-2 my-lg-3">
    <div class="col-lg-5 col-xl-4 mb-5 mb-lg-0">
      <div class="text-center text-lg-start pe-lg-5 pe-xl-0">
        <h2 class="h1 pb-3 pb-lg-5">Only Growth, No Guess Work</h2>
        <a href="/contact" class="btn btn-lg btn-primary w-100 w-sm-auto">
          Get In Touch
          <i class="bx bx-right-arrow-alt lead ms-2 me-n1"></i>
        </a>
      </div>
      <img src="/assets/img/blog/single/cover-image.jpg" class="d-block rounded-3 d-none d-xl-inline w-100 mt-5" width="564" alt="Image">
      <img src="/assets/img/blog/single/video-cover.jpg" class="d-block rounded-3 d-none d-xl-inline w-100 mt-5" width="564" alt="Image">
    </div>
    <div class="col-lg-7 col-xl-6 offset-xl-2">
      <div class="row row-cols-1 row-cols-sm-2 gy-5">
        <div class="col pt-md-2">
          <div class="text-center text-sm-start pe-sm-3 pe-xl-4">
            <div class="d-table position-relative mb-4">
              <div class="bg-primary text-white" style="font-size: 2em; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-bullseye"></i>
              </div>
            </div>
            <h3 class="h4 mb-2">Clear Vision and Goals</h3>
            <p class="fs-lg mb-0">The team has a shared understanding of their purpose, mission, and specific goals. They know what they want to achieve and are committed to making it happen.</p>
          </div>
        </div>
        <div class="col pt-md-2">
          <div class="text-center text-sm-start pe-sm-3 pe-xl-4">
            <div class="d-table position-relative mb-4">
              <div class="bg-danger text-white" style="font-size: 2em; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-comments"></i>
              </div>
            </div>
            <h3 class="h4 mb-2">Effective Communication</h3>
            <p class="fs-lg mb-0">Open and transparent communication is crucial within the team. They actively listen to each other, share ideas, provide constructive feedback, and resolve conflicts in a respectful manner.</p>
          </div>
        </div>
        <div class="col pt-md-2">
          <div class="text-center text-sm-start pe-sm-3 pe-xl-4">
            <div class="d-table position-relative mb-4">
              <div class="bg-success text-white" style="font-size: 2em; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-gears"></i>
              </div>
            </div>
            <h3 class="h4 mb-2">Diversity and Complementary Skills</h3>
            <p class="fs-lg mb-0">A talented team consists of individuals with diverse backgrounds, experiences, and skill sets. They bring unique perspectives, which complement each other and contribute to creative problem-solving.</p>
          </div>
        </div>
        <div class="col pt-md-2">
          <div class="text-center text-sm-start pe-sm-3 pe-xl-4">
            <div class="d-table position-relative mb-4">
              <div class="bg-warning text-white" style="font-size: 2em; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-lightbulb"></i>
              </div>
            </div>
            <h3 class="h4 mb-2">Innovation and Creativity</h3>
            <p class="fs-lg mb-0">They foster an environment that encourages innovative thinking and creative problem-solving. Team members are not afraid to take risks and explore new ideas.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Stats + Partners -->
<section class="bg-secondary pb-4 pb-lg-5">
  <div class="container pt-5 pb-4">
    <div class="row align-items-center gy-5 pt-2 pt-sm-3 pt-md-4">
      <div class="col-lg-5 text-lg-start text-center">
        <h2 class="h1 mb-4 pb-lg-2">Work with top-notch and skilled professionals</h2>
        <p class="mb-4 pb-1 pb-sm-2 pb-lg-3">Overninja Technologies is renowned for being a prominent IT service provider. The company's professional structure is finely tuned to deliver effective outcomes and solutions tailored for diverse businesses facing challenges within the information and technology sector. We're a devoted team of experts - product managers, developers, designers, QA engineers, and marketing specialists. Our goal is to aid businesses, from startups to corporations, in launching projects using our software.</p>
        <a href="/contact" class="btn btn-primary">Contact us</a>
      </div>
      <div class="col-lg-6 offset-lg-1">
        <div class="row row-cols-sm-2 row-cols-1 g-4 align-items-center">
          <div class="col">
            <div class="card border-0">
              <div class="card-body m-xl-3 m-1 text-center">
                <a href="#" class="d-inline-block mb-4 pb-2">
                  <img src="/assets/img/about/clutch-logo-dark.svg" width="116" alt="Clutch" class="d-dark-mode-none d-block">
                  <img src="/assets/img/about/clutch-logo-light.svg" width="116" alt="Clutch" class="d-dark-mode-block d-none">
                </a>
                <h5 class="mb-3 fs-lg fw-normal lh-1">
                  <span class="h1 d-block w-100 mb-0">100%</span>
                  Positive Feedback
                </h5>
                <div class="mb-3 text-nowrap">
                  <i class="bx bxs-star text-warning fs-sm"></i>
                  <i class="bx bxs-star text-warning fs-sm"></i>
                  <i class="bx bxs-star text-warning fs-sm"></i>
                  <i class="bx bxs-star text-warning fs-sm"></i>
                  <i class="bx bxs-star text-warning fs-sm"></i>
                </div>
                <img src="/assets/img/about/members-light.png" width="168" alt="Members" class="d-dark-mode-none d-block mx-auto">
                <img src="/assets/img/about/members-dark.png" width="168" alt="Members" class="d-dark-mode-block d-none mx-auto">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-0">
              <div class="card-body m-xl-3 m-1 text-center">
                <img src="/assets/img/about/chat-light.svg" width="56" alt="Icon" class="d-dark-mode-none d-block mx-auto mb-4">
                <img src="/assets/img/about/chat-dark.svg" width="56" alt="Icon" class="d-dark-mode-block d-none mx-auto mb-4">
                <h5 class="mb-3 fs-lg fw-normal lh-1">
                  <span class="h1 d-block w-100 mb-0">24/7</span>
                  Customer support
                </h5>
              </div>
            </div>
            <div class="card border-0 mt-4">
              <div class="card-body m-xl-3 m-1 bg-repeat-0 bg-position-top-end" style="background-image: url(/assets/img/about/graph.svg);">
                <h5 class="mb-3 fs-lg fw-normal lh-1 mt-5">
                  <span class="h1 d-block w-100 mb-0">100%</span>
                  Client retention rates
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include('includes/testimonials.php'); ?>


<!-- FAQ (Accordion) -->
<section class="container mt-5 mb-5">
  <div class="bg-secondary rounded-3 py-5 px-3 px-sm-4 px-md-0">
    <h2 class="text-center pt-md-1 pt-lg-3 pt-xl-4 pb-4 mt-xl-1 mb-2">Frequently Asked Questions</h2>
    <div class="row justify-content-center pb-lg-4 pb-xl-5">
      <div class="col-xl-8 col-lg-9 col-md-10 pb-md-2">
        <div class="accordion" id="faq">

          <!-- Item -->
          <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
            <h3 class="accordion-header">
              <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-1" aria-expanded="false" aria-controls="q-1">What services does your IT company offer?</button>
            </h3>
            <div class="accordion-collapse collapse" id="q-1" data-bs-parent="#faq">
              <div class="accordion-body fs-sm pt-0">
                <ul>
                  <li>Web Development</li>
                  <li>Mobile App Development</li>
                  <li>Game Development</li>
                  <li>IT Support and Managed Services</li>
                  <li>Digital Marketing & Advertising</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
            <h3 class="accordion-header">
              <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-2" aria-expanded="false" aria-controls="q-2">How experienced is your team in handling IT projects and technologies?</button>
            </h3>
            <div class="accordion-collapse collapse" id="q-2" data-bs-parent="#faq">
              <div class="accordion-body fs-sm pt-0">
                <p>We have top-notch talent working with us, the team is well qualified and highly experienced to handle any kind of project deliverables.</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
            <h3 class="accordion-header">
              <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-3" aria-expanded="false" aria-controls="q-3">What industries does your IT company specialize in serving?</button>
            </h3>
            <div class="accordion-collapse collapse" id="q-3" data-bs-parent="#faq">
              <div class="accordion-body fs-sm pt-0">
                <ul>
                  <li>Healthcare</li>
                  <li>Finance and Banking</li>
                  <li>Retail and E-commerce</li>
                  <li>Manufacturing</li>
                  <li>Education</li>
                  <li>Hospitality and Tourism</li>
                  <li>Government and Public Sector</li>
                  <li>Energy and Utilities</li>
                  <li>Professional Services and many more</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
            <h3 class="accordion-header">
              <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-4" aria-expanded="false" aria-controls="q-4">How do you ensure data security and protect sensitive information?</button>
            </h3>
            <div class="accordion-collapse collapse" id="q-4" data-bs-parent="#faq">
              <div class="accordion-body fs-sm pt-0">
                <ul>
                  <li>Access Control</li>
                  <li>Data Backups and Disaster Recovery</li>
                  <li>Regular Security Audits and Assessments</li>
                  <li>Employee Training and Awareness</li>
                  <li>Secure Development Practices</li>
                  <li>Data Privacy Compliance</li>
                  <li>Physical Security</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
            <h3 class="accordion-header">
              <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-5" aria-expanded="false" aria-controls="q-5">How do you handle IT infrastructure setup, maintenance, and support?</button>
            </h3>
            <div class="accordion-collapse collapse" id="q-5" data-bs-parent="#faq">
              <div class="accordion-body fs-sm pt-0">
                <ul>
                  <li>Requirement Gathering</li>
                  <li>Infrastructure Design</li>
                  <li>Implementation and Setup</li>
                  <li>Testing and Optimization</li>
                  <li>Ongoing Maintenance and Support</li>
                  <li>Help Desk and Technical Support</li>
                  <li>Scalability and Upgrades</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
            <h3 class="accordion-header">
              <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-6" aria-expanded="false" aria-controls="q-6">How do you stay updated with the latest technology trends and advancements?</button>
            </h3>
            <div class="accordion-collapse collapse" id="q-6" data-bs-parent="#faq">
              <div class="accordion-body fs-sm pt-0">
                <p>Continuous Learning and Certification: Pursuing continuous learning through online courses, certifications, and training programs helps professionals stay updated with the latest technologies, frameworks, and best practices.</p>
                <p>Collaboration and Knowledge Sharing: Actively collaborating with colleagues, participating in brainstorming sessions, and engaging in cross-functional teams can foster an environment of shared knowledge and insights on technology trends.</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
            <h3 class="accordion-header">
              <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-7" aria-expanded="false" aria-controls="q-7">What is the typical process for collaborating with clients on IT projects?</button>
            </h3>
            <div class="accordion-collapse collapse" id="q-7" data-bs-parent="#faq">
              <div class="accordion-body fs-sm pt-0">
                <ul>
                  <li>Initial Consultation and Requirement Gathering</li>
                  <li>Project Planning and Proposal</li>
                  <li>Project Kickoff</li>
                  <li>Design and Development</li>
                  <li>Regular Progress Updates</li>
                  <li>Testing and Quality Assurance</li>
                  <li>Deployment and Implementation</li>
                  <li>Post-Implementation Support</li>
                  <li>Project Evaluation and Closure</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
            <h3 class="accordion-header">
              <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-8" aria-expanded="false" aria-controls="q-8">How do you handle technical issues or emergencies, and what is your response time?</button>
            </h3>
            <div class="accordion-collapse collapse" id="q-8" data-bs-parent="#faq">
              <div class="accordion-body fs-sm pt-0">
                <p>We provide help desk services and support channels where clients can report technical issues or emergencies. This can be in the form of phone support, email support, or ticketing systems.Our response time is immediate within a couple of minutes in working hours, response may delay after working hours and on weekends.</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
            <h3 class="accordion-header">
              <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-9" aria-expanded="false" aria-controls="q-9">What is your approach to project management and communication during IT projects?</button>
            </h3>
            <div class="accordion-collapse collapse" id="q-9" data-bs-parent="#faq">
              <div class="accordion-body fs-sm pt-0">
                <ul>
                  <li>Project Initiation</li>
                  <li>Project Planning</li>
                  <li>Communication Plan</li>
                  <li>Regular Progress Updates</li>
                  <li>Issue and Risk Management</li>
                  <li>Change Management</li>
                  <li>Stakeholder Engagement</li>
                  <li>Quality Assurance and Testing</li>
                  <li>Project Closure and Evaluation</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="accordion-item border-0 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-10" aria-expanded="false" aria-controls="q-10">How is Overninja different from other IT companies?</button>
            </h3>
            <div class="accordion-collapse collapse" id="q-10" data-bs-parent="#faq">
              <div class="accordion-body fs-sm pt-0">
                <p>We believe in effective project management and communication foster collaboration, ensure transparency, and facilitate timely decision-making. Adhering to a structured approach and utilizing appropriate project management methodologies, such as Agile helps us to streamline processes and achieve project goals.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<?php include('includes/blogs.php'); ?>


<?php include('includes/connect.php'); ?>


<?= $this->endSection(); ?>