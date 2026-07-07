<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="city-content-card mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="city-section-title-sm m-0">
      <i class="bi bi-chat-left-quote me-2"></i> What Our Customers Say
    </h3>
    <div class="rev-arrows-top d-flex gap-2">
      <button class="rev-arrow-btn prev-btn" id="rev-prev-btn" aria-label="Previous review">
        <i class="bi bi-chevron-left"></i>
      </button>
      <button class="rev-arrow-btn next-btn" id="rev-next-btn" aria-label="Next review">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>
  </div>

  <div class="review-carousel-wrapper">
    <div class="rev-slider-track" id="rev-slider-track">
      <?php
      $city_reviews = [
        [
          "name" => "Rohit Sharma",
          "avatar" => "R",
          "rating" => 5,
          "text" => "Shifted my flat inside $city. They arrived at 8 AM sharp and finished packing faster than expected. No damage to kitchen items."
        ],
        [
          "name" => "Ananya Gupta",
          "avatar" => "A",
          "rating" => 5,
          "text" => "We moved office equipment during the weekend. The team coordinated with building security and handled everything properly. Great experience!"
        ],
        [
          "name" => "Sandeep Verma",
          "avatar" => "S",
          "rating" => 4,
          "text" => "Booked them after searching Packers and Movers Near Me in $city. Pricing stayed exactly as discussed earlier. That rarely happens these days."
        ],
        [
          "name" => "Priya Nair",
          "avatar" => "P",
          "rating" => 5,
          "text" => "Helpful staff. My parents were stressed about furniture scratches, but packing quality was genuinely good. Highly recommended!"
        ],
      ];
      foreach ($city_reviews as $r):
      ?>
      <div class="rev-card-col">
        <div class="rev-testimonial-card w-100">
          <div class="rev-stars mb-2">
            <?php for ($s = 0; $s < 5; $s++): ?>
              <?php if ($s < $r['rating']): ?>
                <i class="bi bi-star-fill text-warning"></i>
              <?php else: ?>
                <i class="bi bi-star text-warning"></i>
              <?php endif; ?>
            <?php endfor; ?>
          </div>
          <p class="rev-card-text">"<?= htmlspecialchars($r['text']) ?>"</p>
          <div class="rev-profile-container d-flex align-items-center">
            <div class="rev-avatar"><?= $r['avatar'] ?></div>
            <div class="rev-profile-details">
              <h5><?= htmlspecialchars($r['name']) ?></h5>
              <p><i class="bi bi-geo-alt-fill text-green"></i> <?= $city ?>, India</p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="rev-slider-dots-container d-flex justify-content-center mt-3">
    <div class="rev-slider-dots">
      <?php foreach ($city_reviews as $index => $r): ?>
        <span class="review-dot-item <?= $index === 0 ? 'active' : '' ?>"></span>
      <?php endforeach; ?>
    </div>
  </div>
</div>