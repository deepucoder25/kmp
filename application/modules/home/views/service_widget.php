<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$services = [
    [
        'title' => 'HOUSEHOLD SHIFTING',
        'desc' => 'Safe packing and moving for your home with care and precision.',
        'icon_svg' => '
            <svg class="srv-svg-icon" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="var(--primary-color)"/>
                <rect x="13" y="13" width="6" height="6" rx="1" fill="var(--secondary-color)" stroke="var(--secondary-color)"/>
            </svg>',
        'link' => 'household-shifting'
    ],
    [
        'title' => 'OFFICE RELOCATION',
        'desc' => 'Efficient office moving solutions with minimal disruption to your business.',
        'icon_svg' => '
            <svg class="srv-svg-icon" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="4" y="2" width="16" height="20" rx="2" stroke="var(--primary-color)"/>
                <line x1="9" y1="6" x2="9" y2="6.01" stroke="var(--primary-color)"/>
                <line x1="15" y1="6" x2="15" y2="6.01" stroke="var(--primary-color)"/>
                <line x1="9" y1="11" x2="9" y2="11.01" stroke="var(--primary-color)"/>
                <line x1="15" y1="11" x2="15" y2="11.01" stroke="var(--primary-color)"/>
                <rect x="12" y="15" width="5" height="5" rx="1" fill="var(--secondary-color)" stroke="var(--secondary-color)"/>
            </svg>',
        'link' => 'office-relocation'
    ],
    [
        'title' => 'LOCAL SHIFTING',
        'desc' => 'Quick and secure local shifting services within the city.',
        'icon_svg' => '
            <svg class="srv-svg-icon" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="var(--primary-color)"/>
                <circle cx="12" cy="10" r="3" fill="var(--secondary-color)" stroke="var(--secondary-color)"/>
            </svg>',
        'link' => 'door-to-door-shifting'
    ],
    [
        'title' => 'DOMESTIC RELOCATION',
        'desc' => 'Reliable door-to-door relocation services across India.',
        'icon_svg' => '
            <svg class="srv-svg-icon" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" stroke="var(--primary-color)"/>
                <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" stroke="var(--primary-color)"/>
                <rect x="13" y="11" width="6" height="5" rx="1" fill="var(--secondary-color)" stroke="var(--secondary-color)"/>
            </svg>',
        'link' => 'cargo-services'
    ],
    [
        'title' => 'LOADING & UNLOADING',
        'desc' => 'Trained team for safe loading and unloading of your goods.',
        'icon_svg' => '
            <svg class="srv-svg-icon" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 2v16h14" stroke="var(--primary-color)"/>
                <circle cx="6" cy="20" r="2" stroke="var(--primary-color)"/>
                <rect x="9" y="8" width="8" height="8" rx="1" fill="var(--secondary-color)" stroke="var(--secondary-color)"/>
            </svg>',
        'link' => 'loading-and-unloading'
    ],
    [
        'title' => 'PACKING & UNPACKING',
        'desc' => 'High-quality packing materials and expert handling of your belongings.',
        'icon_svg' => '
            <svg class="srv-svg-icon" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z" stroke="var(--primary-color)"/>
                <path d="M12 22V12M12 12l8.73-5M12 12L3.27 7" stroke="var(--primary-color)"/>
                <path d="M12 7l4.5-2.5M12 7L7.5 4.5" stroke="var(--secondary-color)" stroke-width="3"/>
            </svg>',
        'link' => 'packing-and-unpacking'
    ],
    [
        'title' => 'CAR TRANSPORTATION',
        'desc' => 'Safe and secure car transportation across India.',
        'icon_svg' => '
            <svg class="srv-svg-icon" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 18H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2z" stroke="var(--primary-color)"/>
                <path d="M16 8h4l3 3v5h-7" stroke="var(--primary-color)"/>
                <circle cx="7.5" cy="18.5" r="2.5" stroke="var(--primary-color)"/>
                <circle cx="18.5" cy="18.5" r="2.5" stroke="var(--primary-color)"/>
                <rect x="6" y="9" width="8" height="5" rx="1" fill="var(--secondary-color)" stroke="var(--secondary-color)"/>
            </svg>',
        'link' => 'car-transportation'
    ],
    [
        'title' => 'STORAGE & WAREHOUSING',
        'desc' => 'Secure storage facilities for short-term across long-term needs.',
        'icon_svg' => '
            <svg class="srv-svg-icon" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 10v11a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V10" stroke="var(--primary-color)"/>
                <path d="M12 2L2 10h20Z" stroke="var(--primary-color)"/>
                <rect x="9" y="14" width="6" height="8" fill="var(--secondary-color)" stroke="var(--secondary-color)"/>
            </svg>',
        'link' => 'warehouse-storage'
    ]
];
?>

<section class="services-section-new py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="services-header-new text-center mb-5">
            <div class="services-eyebrow-new">
                <h3 class="eyebrow-text">OUR SERVICES</h3>
                <div class="eyebrow-line-dots">
                    <span class="eyebrow-line"></span>
                    <span class="eyebrow-dot"></span>
                    <span class="eyebrow-line-short"></span>
                    <span class="eyebrow-dot"></span>
                    <span class="eyebrow-line-short"></span>
                    <span class="eyebrow-dot"></span>
                    <span class="eyebrow-line"></span>
                </div>
            </div>
            <h2 class="services-main-title-new mt-3">
                COMPLETE <span class="highlight-green">MOVING</span> SOLUTIONS
            </h2>
            <p class="services-subtitle-new text-muted mt-2">
                Safe. Reliable. On-Time. Every Time.
            </p>
        </div>

        <!-- Grid of Services -->
        <div class="row g-4 mt-2">
            <?php foreach ($services as $service): ?>
                <div class="col-xl-3 col-lg-6 col-md-6 col-6 d-flex">
                    <a href="<?= site_url($service['link']) ?>" class="service-card-new w-100">
                        <div class="card-icon-container">
                            <?= $service['icon_svg'] ?>
                        </div>
                        <div class="card-text-section">
                            <h4 class="card-service-title"><?= htmlspecialchars($service['title']) ?></h4>
                            <p class="card-service-desc"><?= htmlspecialchars($service['desc']) ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom Trust Quality Bar -->
        <div class="services-trust-bar-new mt-5">
            <div class="row align-items-center g-4 text-center text-md-start">
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="trust-bar-item">
                        <div class="trust-bar-icon color-orange">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <div class="trust-bar-text">
                            <h4>SAFE & SECURE</h4>
                            <p>Your belongings are always in safe hands.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="trust-bar-item">
                        <div class="trust-bar-icon color-green">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div class="trust-bar-text">
                            <h4>ON-TIME DELIVERY</h4>
                            <p>We value your time and ensure timely delivery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="trust-bar-item">
                        <div class="trust-bar-icon color-orange">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="trust-bar-text">
                            <h4>EXPERIENCED TEAM</h4>
                            <p>Skilled professionals for a smooth moving experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="trust-bar-item">
                        <div class="trust-bar-icon color-green">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="trust-bar-text">
                            <h4>24X7 SUPPORT</h4>
                            <p>We're here to help you anytime, anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
