<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
include 'city_content.php';
?>

<section class="pm-city-details-section">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- Shifting Overview Card -->
        <div class="pm-city-content-card">
          <div class="pm-city-section-eyebrow">Top Rated Relocation Services in <?= $city ?></div>
          <h2 class="pm-city-section-title">
            Best Packers and Movers in <span class="pm-city-accent"><?= $city ?></span> for Safe & Insured Relocation
          </h2>
          <div class="trust-widget-line mb-3"></div>
          
          <?= $htmlcontent ?>

          <!-- Feature Pills -->
          <div class="city-feature-pills-grid">
            <div class="city-pill-card bg-light-green">
              <i class="bi bi-shield-check text-green"></i>
              <span>100% Insured Shifting</span>
            </div>
            <div class="city-pill-card bg-light-orange">
              <i class="bi bi-truck text-orange"></i>
              <span>Real-time GPS Tracking</span>
            </div>
            <div class="city-pill-card bg-light-blue">
              <i class="bi bi-box-seam text-blue"></i>
              <span>Premium 4-Layer Packing</span>
            </div>
            <div class="city-pill-card bg-light-yellow">
              <i class="bi bi-clock-history text-yellow"></i>
              <span>On-Time Delivery</span>
            </div>
          </div>
        </div>

        <!-- Shifting Showcase Image Slider -->
        <div class="city-gallery-slider mt-4">
          <div class="gallery-slider-header d-flex justify-content-between align-items-center mb-3">
            <h3 class="city-section-title-sm m-0">
              <i class="bi bi-images me-2"></i> Shifting Operations Showcase
            </h3>
            <div class="gallery-arrows d-flex gap-2">
              <button class="gallery-arrow-btn prev-btn" id="gallery-prev-btn" aria-label="Previous image">
                <i class="bi bi-chevron-left"></i>
              </button>
              <button class="gallery-arrow-btn next-btn" id="gallery-next-btn" aria-label="Next image">
                <i class="bi bi-chevron-right"></i>
              </button>
            </div>
          </div>
          
          <div class="gallery-slider-container">
            <div class="gallery-slider-track" id="gallery-slider-track">
              <div class="gallery-slide-item">
                <img loading="lazy" src="https://kiranpackersmovers.com/wp-content/uploads/2026/02/WhatsApp-Image-2025-12-29-at-4.24.16-PM-768x576.jpeg" alt="Real Shifting Team in <?= $city ?>">
                <div class="gallery-slide-caption">Household Packing Shifting</div>
              </div>
              <div class="gallery-slide-item">
                <img loading="lazy" src="https://kiranpackersmovers.com/wp-content/uploads/2026/02/WhatsApp-Image-2025-12-29-at-4.24.19-PM-1-768x576.jpeg" alt="Loading Goods safely in <?= $city ?>">
                <div class="gallery-slide-caption">Safe & Insured Transportation</div>
              </div>
              <div class="gallery-slide-item">
                <img loading="lazy" src="https://kiranpackersmovers.com/wp-content/uploads/2025/03/moving-boxes-furniture-new-office-768x512.webp" alt="Shifting Office in <?= $city ?>">
                <div class="gallery-slide-caption">Professional Relocation Team</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Local Relocation Challenges Card -->
        <div class="pm-city-content-card mt-4">
          <?= $htmlcontent1 ?>
        </div>

        <!-- Shifting Map Integration Card -->
        <div class="pm-city-content-card mt-4">
          <h3 class="city-section-title-sm"><i class="bi bi-map me-2"></i> Our Shifting Presence in <?= $city ?></h3>
          <div class="trust-widget-line mb-3"></div>
          <p>Below is our service area map. We serve all sectors, residential societies, and commercial business zones inside <?= $city ?>.</p>
          <div class="pm-city-map mt-3">
            <?php include 'city_map.php';?>
          </div> 
        </div>

        <!-- Shifting Benefits Card -->
        <div class="pm-city-content-card mt-4">
          <?= $htmlcontent2 ?>
        </div>

        <!-- Customer Reviews Card -->
        <?php include 'city_reviews.php'?>

        <!-- FAQs Card -->
        <?php include 'city_faq.php'?>

      </div><!-- /col-lg-8 -->

      <!-- ============ RIGHT: SIDEBAR (col-lg-4) ============ -->
      <div class="col-lg-4">
        <?php include 'city_siderbar.php'; ?>
      </div>

    </div><!-- /row -->

    <!-- Dynamic Services Section based on City -->
    <?php 
    $allowed_cities = [];
    if(in_array(strtolower(trim($city)), $allowed_cities)): 
    ?>
        <?php include 'city_service.php'; ?>
    <?php endif; ?>

  </div><!-- /container -->
</section>

<!-- Sliders Scroll Controller script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Utility to wire scroll-snap slider buttons
    const wireSlider = (trackId, prevId, nextId, stepClass) => {
        const track = document.getElementById(trackId);
        const prev = document.getElementById(prevId);
        const next = document.getElementById(nextId);
        if (track && prev && next) {
            const step = track.querySelector(stepClass);
            const amount = step ? step.clientWidth + 16 : 300;
            prev.addEventListener('click', () => track.scrollBy({ left: -amount, behavior: 'smooth' }));
            next.addEventListener('click', () => track.scrollBy({ left: amount, behavior: 'smooth' }));
        }
    };
    wireSlider('gallery-slider-track', 'gallery-prev-btn', 'gallery-next-btn', '.gallery-slide-item');
    wireSlider('rev-slider-track', 'rev-prev-btn', 'rev-next-btn', '.rev-card-col');

    // Simple dot indicator update for reviews
    const revSlider = document.getElementById('rev-slider-track');
    const revDots = document.querySelectorAll('.rev-slider-dots .review-dot-item');
    if (revSlider && revDots.length) {
        revSlider.addEventListener('scroll', () => {
            const maxScroll = revSlider.scrollWidth - revSlider.clientWidth;
            if (maxScroll <= 0) return;
            const activeIdx = Math.min(Math.round((revSlider.scrollLeft / maxScroll) * (revDots.length - 1)), revDots.length - 1);
            revDots.forEach((dot, i) => dot.classList.toggle('active', i === activeIdx));
        });
    }
});
</script>
