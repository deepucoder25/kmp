<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================
     CITY PAGE SIDEBAR
     Available vars: $city, $state, $company3, $experience,
                     $startYear, $phone, $phone1, $phonehtml,
                     $phonehtml1, $whatsapphtml, $cities, $st
  ====================================================== -->

<aside class="pm-city-sidebar">

  <!-- Redesigned Need Help Moving Card -->
  <div class="sidebar-help-widget text-center">
    <div class="help-phone-circle">
      <i class="bi bi-telephone-fill"></i>
    </div>
    
    <h3 class="help-title">Need Help Moving?</h3>
    <p class="help-subtitle">Talk to our relocation experts now.</p>
    
    <div class="help-badge-pill">
      We're Available 24/7
    </div>
    
    <div class="help-btn-list">
      <!-- Call Support 1 -->
      <a href="<?= $phonehtml ?>" class="help-btn-card">
        <span class="help-card-icon-circle">
          <i class="bi bi-telephone-fill"></i>
        </span>
        <span class="help-card-text">
          <span class="help-card-label">Call Support 1</span>
          <span class="help-card-value"><?= $phone ?></span>
        </span>
        <i class="bi bi-chevron-right help-card-arrow"></i>
      </a>

      <?php if (!empty($phone1)): ?>
      <!-- Call Support 2 -->
      <a href="<?= $phonehtml1 ?>" class="help-btn-card">
        <span class="help-card-icon-circle bg-orange-icon">
          <i class="bi bi-telephone-fill"></i>
        </span>
        <span class="help-card-text">
          <span class="help-card-label">Call Support 2</span>
          <span class="help-card-value"><?= $phone1 ?></span>
        </span>
        <i class="bi bi-chevron-right help-card-arrow"></i>
      </a>
      <?php endif; ?>
      
      <!-- WhatsApp Button -->
      <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="help-btn-card">
        <span class="help-card-icon-circle bg-whatsapp-icon">
          <i class="bi bi-whatsapp"></i>
        </span>
        <span class="help-card-text">
          <span class="help-card-label">WhatsApp Chat</span>
          <span class="help-card-value"><?= $phone ?></span>
        </span>
        <i class="bi bi-chevron-right help-card-arrow"></i>
      </a>
    </div>
    
    <!-- Get Free Quote Solid Button -->
    <button type="button" class="help-btn-quote-solid" data-bs-toggle="modal" data-bs-target="#qteModal">
      <i class="bi bi-clipboard-check-fill"></i> Get Free Quote
    </button>
  </div>

  <!-- Redesigned Trust Badges Widget -->
  <div class="sidebar-trust-widget-transparent mt-4" id="sidebarTrustWidget">
    <h4 class="trust-widget-title">
      <i class="bi bi-patch-check-fill text-success"></i> Why Choose <?= $company3 ?>?
    </h4>
    <div class="trust-widget-line"></div>
    
    <ul class="trust-widget-list">
      <li class="trust-item item-blue">
        <div class="trust-icon-box">
          <i class="bi bi-clock-history"></i>
        </div>
        <div class="trust-content">
          <strong><?= $yearsExperience ?> Years Experience</strong>
          <span>Trusted since <?= $startYear ?></span>
        </div>
      </li>
      <li class="trust-item item-green">
        <div class="trust-icon-box">
          <i class="bi bi-people-fill"></i>
        </div>
        <div class="trust-content">
          <strong><?= $happyClients ?> Happy Clients</strong>
          <span>Families and businesses trust us</span>
        </div>
      </li>
      <li class="trust-item item-orange">
        <div class="trust-icon-box">
          <i class="bi bi-patch-check-fill"></i>
        </div>
        <div class="trust-content">
          <strong>Verified & Licensed</strong>
          <span>ISO certified packers and movers</span>
        </div>
      </li>
      <li class="trust-item item-red">
        <div class="trust-icon-box">
          <i class="bi bi-shield-fill-check"></i>
        </div>
        <div class="trust-content">
          <strong><?= $secureShifting ?> Secure Shifting</strong>
          <span>Complete transit insurance options</span>
        </div>
      </li>
      <li class="trust-item item-yellow">
        <div class="trust-icon-box">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
        <div class="trust-content">
          <strong>Pan-India Coverage</strong>
          <span>100+ branches across <?= $statesCovered ?> states</span>
        </div>
      </li>
    </ul>
  </div>

  <!-- Related Locations (Nearby Cities) -->
  <div class="sidebar-nearby-widget mt-4" id="sidebarRelatedLocations">
    <div class="nearby-header d-flex align-items-start justify-content-between">
      <div class="nearby-header-left">
        <h4 class="nearby-title">
          <i class="bi bi-geo-alt-fill text-green"></i> Nearby Cities
        </h4>
        <p class="nearby-subtitle">Packers and Movers near <?= $city ?>.</p>
      </div>
      <div class="nearby-decor-wrap d-none d-sm-block">
        <i class="bi bi-map opacity-25" style="font-size: 24px; color: var(--primary-color);"></i>
      </div>
    </div>
    
    <div class="nearby-tags-grid" id="relatedCityTags">
      <?php
      $count = 0;
      foreach ($cities as $ct):
        if ($ct['nm'] == $city) continue;
        if ($count >= 8) break;
        $link      = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
        $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
      ?>
      <a href="<?= site_url("$link-packers-movers-$statename") ?>"
         class="nearby-tag"
         id="relatedCity-<?= $count ?>">
        <span class="tag-arrow">&rarr;</span> <?= $ct['nm'] ?>
      </a>
      <?php
        $count++;
      endforeach;
      ?>
    </div>
  </div>

</aside><!-- /city-sidebar -->


