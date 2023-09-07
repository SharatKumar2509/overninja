<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>

<style type="text/css">
  form .form-control,
  form .form-select {
    border: none;
    border-radius: 0;
    border-bottom: 1px solid #6366f1;;
  }
  form .form-control::placeholder,
  form .form-select::placeholder {
    color: #666;
  }
  form .form-control:hover,
  form .form-control:focus,
  form .form-select:hover,
  form .form-select:focus {
    border-color: #4044ee;
  }
</style>

<!-- Links + Contact form -->
<section class="position-relative pt-5" style="background-color: #151922;">
  <div class="container position-relative zindex-2 mt-5 pt-5">

    <div class="row">
      <!-- Contact form -->
      <div class="col-lg-10 offset-lg-1">
        <div class="card border-light shadow-lg py-3 p-sm-4 p-md-5">
          <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 rounded-3 d-none d-dark-mode-block"></div>
          <div class="card-body position-relative zindex-2">
            <h2 class="card-title text-center pb-3 mb-4 mb-md-5">Get A Free Quote</h2>
        <?php
          if(session('result')=="success") {
        ?>
            <div class="alert alert-success mb-4">
              <i class="fas fa-circle-check me-2"></i>
              Your request has been submitted successfully.
            </div>
        <?php
          }
        ?>
            <form action="/contact" method="post" class="row g-4 needs-validation" novalidate>
              <div class="col-12 col-lg-6">
                <input type="text" class="form-control form-control-lg" id="fn" name="fullname" placeholder="Full Name" required>
                <div class="invalid-feedback">Please enter your full name!</div>
              </div>
              <div class="col-12 col-lg-6">
                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email Address" required>
                <div class="invalid-feedback">Please provide a valid email address!</div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="input-group p-0">
                  <input type="tel" class="form-control" id="code" name="code" value="<?= $country_code ?>" style="max-width: 80px" required>
                  <input type="tel" class="form-control form-control-lg" id="mobile" name="mobile" placeholder="Mobile Number" required>
                  <div class="invalid-feedback">Please provide a valid mobile number!</div>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="input-group p-0">
                  <input type="tel" class="form-control" id="codew" name="codew" value="<?= $country_code ?>" style="max-width: 80px" required>
                  <input type="tel" class="form-control form-control-lg" id="whatsapp" name="whatsapp" placeholder="Whatsapp (Optional)">
                  <div class="invalid-feedback">Please provide a valid mobile number!</div>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <input type="text" class="form-control form-control-lg" id="skype" name="skype" placeholder="Skype (Optional)">
                <div class="invalid-feedback">Please provide a valid skype ID!</div>
              </div>
              <div class="col-12 col-lg-6">
                <select class="form-select form-select-lg" id="service" name="service" required>
                  <option value="" selected disabled>Choose Service</option>
                  <option>Mobile App Development</option>
                  <option>Web Development</option>
                  <option>Design</option>
                  <option>Software Development</option>
                  <option>Ecommerce Development</option>
                  <option>SEO & LEAD Generation</option>
                  <option>Emerging Technologies</option>
                  <option>Hire Hourly</option>
                </select>
                <div class="invalid-feedback">Please select a service!</div>
              </div>
              <div class="col-12" style="position: relative;">
                <label class="form-label" style="font-family: 'Manrope', sans-serif; font-size: 1em; font-weight: 400; position: absolute; top: 10px; left: 5%; color: #666">Project Budget</label>
                <div class="range-slider" data-start-min="500" data-min="500" data-max="500000" data-step="500" style="margin-top: -10px">
                  <div class="range-slider-ui"></div>
                  <input class="form-control range-slider-value-min" id="budget" name="budget" type="hidden">
                </div>
                <div class="invalid-feedback">Please provide a valid project budget!</div>
              </div>
              <div class="col-12">
                <textarea class="form-control" rows="5" placeholder="Project Description" id="description" name="description"></textarea>
                <div class="invalid-feedback">Please provide a valid description!</div>
              </div>
              <div class="col-12 pt-2 pt-sm-3">
                <button type="submit" class="btn btn-lg btn-primary w-100 w-sm-auto">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="position-absolute bottom-0 start-0 w-100 bg-light" style="height: 8rem;"></div>
</section>


<!-- Info links -->
<section class="container pt-5 pb-4 pb-sm-5 mb-2 mb-sm-0 mb-lg-3 mb-xl-4 mt-md-2 mt-lg-4 mt-xl-5">
  <div class="row row-cols-1 row-cols-sm-3 pt-sm-3 py-2">
    <div class="col d-flex d-sm-block d-lg-flex align-items-start mb-3 mb-sm-0">
      <div class="d-table bg-primary shadow-primary rounded flex-shrink-0 p-2 mb-3">
        <div  style="width: 32px; height: 32px; color: white; display: flex; align-items: center; justify-content: center; font-size: 1.5em;">
          <i class="fab fa-whatsapp"></i>
        </div>
      </div>
      <div class="ps-4 ps-sm-0 ps-lg-4 ms-lg-2 me-xl-2 pe-xl-5">
        <h3 class="h4 mb-2 mb-md-3">WhatsApp Us</h3>
        <a href="https://api.whatsapp.com/send/?phone=919998847740" target="_blank" rel="noreferrer noopener" class="btn btn-link btn-lg px-0 py-2">
          +91 - 99988 47740
        </a>
      </div>
    </div>
    <div class="col d-flex d-sm-block d-lg-flex align-items-start">
      <div class="d-table bg-primary shadow-primary rounded flex-shrink-0 p-2 mb-3">
        <div  style="width: 32px; height: 32px; color: white; display: flex; align-items: center; justify-content: center; font-size: 1.5em;">
          <i class="fab fa-skype"></i>
        </div>
      </div>
      <div class="ps-4 ps-sm-0 ps-lg-4 ms-lg-2 pe-xl-5">
        <h3 class="h4 mb-2 mb-md-3">Skype Us</h3>
        <a href="#" class="btn btn-link btn-lg px-0 py-2">
          overninja.tech
        </a>
      </div>
    </div>
    <div class="col d-flex d-sm-block d-lg-flex align-items-start mb-3 mb-sm-0">
      <div class="d-table bg-primary shadow-primary rounded flex-shrink-0 p-2 mb-3">
        <div  style="width: 32px; height: 32px; color: white; display: flex; align-items: center; justify-content: center; font-size: 1.5em;">
          <i class="fas fa-envelope"></i>
        </div>
      </div>
      <div class="ps-4 ps-sm-0 ps-lg-4 ms-lg-2 pe-xl-5">
        <h3 class="h4 mb-2 mb-md-3">Email Us</h3>
        <a href="mailto:sales@overninja.com" class="btn btn-link btn-lg px-0">
          sales@overninja.com
        </a>
      </div>
    </div>
  </div>
</section>


<?= $this->endSection(); ?>