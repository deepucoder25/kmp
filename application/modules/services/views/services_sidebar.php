<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$yearsExperience = isset($yearsExperience) ? $yearsExperience : '8+';
$startYear = isset($startYear) ? $startYear : '2018';
$happyClients = isset($happyClients) ? $happyClients : '10,000+';
$secureShifting = isset($secureShifting) ? $secureShifting : '100%';
$company3 = isset($company3) ? $company3 : 'Kiran Packers Movers';
?>
<aside class="company-sidebar">
    <!-- Our Services Navigation Menu -->
    <div class="sidebar-widget widget-services mb-4">
        <h3 class="widget-title">Our Services</h3>
        <ul class="sidebar-services-list" id="servicesSidebarList">
            <?php
            $sidebar_services = [
                ['slug' => 'household-shifting',     'name' => 'Household Shifting', 'icon' => 'bi-house-fill'],
                ['slug' => 'office-relocation',      'name' => 'Office Relocation',  'icon' => 'bi-building-fill'],
                ['slug' => 'packing-and-unpacking',  'name' => 'Packing & Safety',   'icon' => 'bi-box-seam-fill'],
                ['slug' => 'loading-and-unloading',  'name' => 'Loading & Unloading','icon' => 'bi-truck-flatbed'],
                ['slug' => 'bike-transportation',    'name' => 'Bike Transport',     'icon' => 'bi-bicycle'],
                ['slug' => 'car-transportation',     'name' => 'Car Transport',      'icon' => 'bi-car-front-fill'],
                ['slug' => 'warehouse-storage',      'name' => 'Warehouse Storage',  'icon' => 'bi-database-fill-gear'],
                ['slug' => 'door-to-door-shifting',  'name' => 'Door-to-Door',       'icon' => 'bi-door-open-fill'],
                ['slug' => 'cargo-services',         'name' => 'Cargo Services',     'icon' => 'bi-airplane-fill'],
            ];

            $active_link = isset($active_link) ? $active_link : '';
            foreach ($sidebar_services as $s):
                $is_active = ($active_link === $s['slug']) ? 'active' : '';
            ?>
                <li>
                    <a href="<?= site_url($s['slug']) ?>" class="d-flex align-items-center justify-content-between <?= $is_active ?>">
                        <span class="d-flex align-items-center gap-2">
                            <i class="bi <?= $s['icon'] ?> service-icon"></i>
                            <span class="service-name"><?= $s['name'] ?></span>
                        </span>
                        <i class="bi bi-chevron-right arrow-icon"></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

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
                    <span>100+ branches across India</span>
                </div>
            </li>
        </ul>
    </div>
</aside>
