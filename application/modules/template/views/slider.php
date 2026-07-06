
<section class="home-page-slider" itemscope itemtype="https://schema.org/WPHeader">
  <div class="home-page-slider-content">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Column: Content -->
        <div class="col-lg-8 col-12 text-start hero-text-col">
          <!-- Top Eyebrow Pill -->
          <div class="slider-eyebrow" itemprop="headline">
            <span class="txt-orange">SAFE</span> • <span class="txt-white">SECURE</span> • <span class="txt-green">RELIABLE</span>
          </div>

          <!-- Hero Headline -->
          <h1 class="slider-title" itemprop="name">
            WE DON'T JUST
            <span class="text-orange">MOVE THINGS,</span>
            WE MOVE <span class="text-green">YOUR LIFE.</span>
          </h1>
          <div class="slider-title-underline"></div>

          <!-- Description -->
          <p class="slider-desc" itemprop="description">
            Professional packing, safe handling & on-time delivery for a stress-free moving experience.
          </p>

          <!-- Glassmorphic Features Grid -->
          <div class="slider-features">
            <div class="feat-box">
              <i class="bi bi-shield-check icon-orange"></i>
              <div class="feat-text">
                <span class="num num-orange">100%</span>
                <span class="lbl">Safe & Secure</span>
              </div>
            </div>
            <div class="feat-box">
              <i class="bi bi-clock icon-green"></i>
              <div class="feat-text">
                <span class="num num-green">On-Time</span>
                <span class="lbl">Delivery</span>
              </div>
            </div>
            <div class="feat-box">
              <i class="bi bi-people icon-orange"></i>
              <div class="feat-text">
                <span class="num num-orange">Experienced</span>
                <span class="lbl">Team</span>
              </div>
            </div>
            <div class="feat-box">
              <i class="bi bi-headset icon-green"></i>
              <div class="feat-text">
                <span class="num num-green">24x7</span>
                <span class="lbl">Support</span>
              </div>
            </div>
          </div>

          <!-- CTA Actions Bar -->
          <div class="slider-actions">
            <a href="<?= $phonehtml ?>" class="btn-call-slider">
              <div class="call-icon-wrap">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div class="call-text-wrap">
                <span class="call-label">CALL NOW</span>
                <span class="call-numbers"><span><?= $phone ?></span><span class="phone-sep"> | </span><span><?= $phone1 ?></span></span>
              </div>
            </a>
            <a href="#" class="btn-quote-slider" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-file-earmark-text-fill"></i>
              <div class="quote-text-wrap">
                <span class="quote-title">GET A FREE QUOTE</span>
                <span class="quote-subtitle">Quick & Hassle Free</span>
              </div>
            </a>
          </div>
        </div>

        <!-- Right Column: Quote Form -->
        <div class="col-lg-4 col-12 hero-form-col mt-4 mt-lg-0">
          <?php $this->load->view('contacts/quoteform.php') ?>
        </div>
      </div>
    </div>
  </div>


  <!-- Stats Bottom Bar (Inside Slider Section) -->
  <div class="slider-stats-bar">
    <div class="container">
      <div class="stats-container">
        <div class="stats-item">
          <div class="stats-icon-wrap">
            <i class="bi bi-award"></i>
          </div>
          <div class="stats-text-wrap">
            <span class="stats-number"><?= $experience ?></span>
            <span class="stats-label">Years Experience</span>
          </div>
        </div>
        <div class="stats-item">
          <div class="stats-icon-wrap primary-color">
            <i class="bi bi-people"></i>
          </div>
          <div class="stats-text-wrap">
            <span class="stats-number"><?= $happyClients ?></span>
            <span class="stats-label">Happy Clients</span>
          </div>
        </div>
        <div class="stats-item">
          <div class="stats-icon-wrap">
            <i class="bi bi-truck"></i>
          </div>
          <div class="stats-text-wrap">
            <span class="stats-number"><?= $successfullMoves ?></span>
            <span class="stats-label">Successful Moves</span>
          </div>
        </div>
        <div class="stats-item">
          <div class="stats-icon-wrap primary-color">
            <i class="bi bi-star-fill"></i>
          </div>
          <div class="stats-text-wrap">
            <span class="stats-number"><?= $ratingValue ?></span>
            <span class="stats-label">Google Rating</span>
          </div>
        </div>
        <div class="stats-item">
          <div class="stats-icon-wrap">
            <i class="bi bi-globe"></i>
          </div>
          <div class="stats-text-wrap">
            <span class="stats-number">All India</span>
            <span class="stats-label">Service Network</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
