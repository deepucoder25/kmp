<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<section class="home-page-slider" itemscope itemtype="https://schema.org/WPHeader">
  <div class="home-page-slider-content">
    <div class="container">
      
      <div class="row mb-3">
        <div class="col-12">
          <nav class="bc-nav pm-city-slider-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-branches') ?>">Our Branches</a>
            <span class="bc-sep">›</span>
            <?php $state_slug = strtolower(str_replace(' ', '-', $state)); ?>
            <span class="bc"><?= $state ?></span>
            <span class="bc-sep">›</span>
            <span class="bc-current"><?= $city ?></span>
          </nav>
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-8 col-12 text-start hero-text-col">
          <div class="slider-eyebrow" itemprop="headline">
            <span class="txt-orange">INDIA'S</span> • <span class="txt-white">TRUSTED</span> • <span class="txt-green">RELOCATION PARTNER</span>
          </div>

          <h1 class="slider-title" itemprop="name">
            BEST PACKERS & MOVERS IN
            <span class="text-orange"><?= strtoupper($city) ?></span>
          </h1>
          <div class="slider-title-underline"></div>

          <p class="slider-desc" itemprop="description">
            Safe, affordable, and reliable packing, moving, and storage services in <?= $city ?>. Get your free moving estimate now.
          </p>
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
        <div class="col-lg-4 col-12 hero-form-col mt-4 mt-lg-0">
          <?php $this->load->view('contacts/quoteform.php') ?>
        </div>
      </div>
    </div>
  </div>

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
