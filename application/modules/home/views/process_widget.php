<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$steps = [
    [
        'num' => '01',
        'title' => 'ENQUIRE & GET QUOTE',
        'desc' => 'Share your moving requirements with us and get a quick, transparent quote.',
        'color_class' => 'green-badge',
        'ring_color' => 'var(--primary-color)',
        'arrow_class' => 'green-arrow',
        'icon_svg' => '
            <svg class="proc-svg-icon" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Headband -->
                <path d="M 17 32 A 15 15 0 0 1 47 32" stroke="var(--primary-color)" stroke-width="5" stroke-linecap="round" fill="none" />
                <!-- Left Ear Capsule -->
                <rect x="11" y="26" width="8" height="16" rx="4" stroke="var(--primary-color)" stroke-width="4.5" fill="var(--white)" />
                <!-- Right Ear Capsule -->
                <rect x="45" y="26" width="8" height="16" rx="4" stroke="var(--primary-color)" stroke-width="4.5" fill="var(--white)" />
                <!-- Three dots -->
                <circle cx="27" cy="34" r="2.5" fill="var(--secondary-color)" />
                <circle cx="32" cy="34" r="2.5" fill="var(--secondary-color)" />
                <circle cx="37" cy="34" r="2.5" fill="var(--secondary-color)" />
                <!-- Microphone arm -->
                <path d="M 48 38 C 48 48, 38 48, 34 48" stroke="var(--primary-color)" stroke-width="4.5" stroke-linecap="round" fill="none" />
                <!-- Microphone head -->
                <circle cx="30" cy="48" r="4" stroke="var(--secondary-color)" stroke-width="3.5" fill="var(--white)" />
            </svg>'
    ],
    [
        'num' => '02',
        'title' => 'PLAN & SCHEDULE',
        'desc' => 'We plan the best strategy and schedule your move at your convenience.',
        'color_class' => 'orange-badge',
        'ring_color' => 'var(--secondary-color)',
        'arrow_class' => 'orange-arrow',
        'icon_svg' => '
            <svg class="proc-svg-icon" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Clipboard Board Outline in Orange -->
                <rect x="18" y="14" width="28" height="40" rx="3" stroke="var(--secondary-color)" stroke-width="4.5" fill="var(--white)" />
                <!-- Clip at the Top in Green -->
                <path d="M 28 14 V 9 H 36 V 14 Z" fill="var(--primary-color)" stroke="var(--primary-color)" stroke-width="1.5" stroke-linejoin="round" />
                <!-- Checkmarks (Green) -->
                <path d="M 23 23 L 26 26 L 31 19" stroke="var(--primary-color)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M 23 33 L 26 36 L 31 29" stroke="var(--primary-color)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M 23 43 L 26 46 L 31 39" stroke="var(--primary-color)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                <!-- Cube on the bottom right -->
                <g transform="translate(40, 36)">
                    <path d="M 9 0 L 17 4 L 9 8 L 1 4 Z" stroke="var(--primary-color)" stroke-width="3" stroke-linejoin="round" fill="var(--white)" />
                    <path d="M 1 4 V 12 L 9 16 V 8 Z" stroke="var(--secondary-color)" stroke-width="3" stroke-linejoin="round" fill="var(--white)" />
                    <path d="M 9 8 L 17 4 V 12 L 9 16 Z" stroke="var(--primary-color)" stroke-width="3" stroke-linejoin="round" fill="var(--white)" />
                </g>
            </svg>'
    ],
    [
        'num' => '03',
        'title' => 'PACKING DONE RIGHT',
        'desc' => 'Our expert team uses quality materials to pack your belongings safely and securely.',
        'color_class' => 'green-badge',
        'ring_color' => 'var(--primary-color)',
        'arrow_class' => 'green-arrow',
        'icon_svg' => '
            <svg class="proc-svg-icon" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Box Outline in Green -->
                <path d="M 14 30 L 32 20 L 50 30 V 52 L 32 62 L 14 52 Z" stroke="var(--primary-color)" stroke-width="4.5" stroke-linejoin="round" fill="var(--white)" />
                <path d="M 14 30 L 32 40 L 50 30" stroke="var(--primary-color)" stroke-width="4" stroke-linejoin="round" />
                <path d="M 32 40 V 62" stroke="var(--primary-color)" stroke-width="4" />
                <!-- Left open flap -->
                <path d="M 14 30 L 6 20 L 24 10 L 32 20" stroke="var(--primary-color)" stroke-width="3.5" stroke-linejoin="round" fill="var(--white)" />
                <!-- Right open flap -->
                <path d="M 50 30 L 58 20 L 40 10 L 32 20" stroke="var(--primary-color)" stroke-width="3.5" stroke-linejoin="round" fill="var(--white)" />
                <!-- Downward Orange Arrow -->
                <path d="M 32 4 V 22" stroke="var(--secondary-color)" stroke-width="4.5" stroke-linecap="round" />
                <path d="M 26 15 L 32 22 L 38 15" stroke="var(--secondary-color)" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>'
    ],
    [
        'num' => '04',
        'title' => 'SAFE TRANSPORTATION',
        'desc' => 'Your goods are transported safely using well-maintained vehicles with care.',
        'color_class' => 'orange-badge',
        'ring_color' => 'var(--secondary-color)',
        'arrow_class' => 'orange-arrow',
        'icon_svg' => '
            <svg class="proc-svg-icon" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Truck Cabin & Bed in Green -->
                <path d="M 18 20 H 46 V 42 H 18 Z" stroke="var(--primary-color)" stroke-width="4.5" stroke-linejoin="round" fill="var(--white)" />
                <path d="M 46 28 H 54 L 61 35 V 44 H 46 Z" stroke="var(--primary-color)" stroke-width="4.5" stroke-linejoin="round" fill="var(--white)" />
                <!-- Window -->
                <path d="M 49 30 H 53 L 57 34 H 49 Z" stroke="var(--primary-color)" stroke-width="2.5" stroke-linejoin="round" />
                <!-- Wheels (Orange outlines) -->
                <circle cx="26" cy="48" r="5" stroke="var(--secondary-color)" stroke-width="4" fill="var(--white)" />
                <circle cx="52" cy="48" r="5" stroke="var(--secondary-color)" stroke-width="4" fill="var(--white)" />
                <!-- Three Orange Speed Lines -->
                <line x1="4" y1="24" x2="13" y2="24" stroke="var(--secondary-color)" stroke-width="3.5" stroke-linecap="round" />
                <line x1="2" y1="31" x2="11" y2="31" stroke="var(--secondary-color)" stroke-width="3.5" stroke-linecap="round" />
                <line x1="6" y1="38" x2="15" y2="38" stroke="var(--secondary-color)" stroke-width="3.5" stroke-linecap="round" />
            </svg>'
    ],
    [
        'num' => '05',
        'title' => 'DELIVERY & UNLOADING',
        'desc' => 'We deliver your belongings on time and unload everything with caution.',
        'color_class' => 'green-badge',
        'ring_color' => 'var(--primary-color)',
        'arrow_class' => 'green-arrow',
        'icon_svg' => '
            <svg class="proc-svg-icon" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- House Outline in Green -->
                <path d="M 12 28 L 32 12 L 52 28" stroke="var(--primary-color)" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M 16 28 V 52 A 2 2 0 0 0 18 54 H 46 A 2 2 0 0 0 48 52 V 28" stroke="var(--primary-color)" stroke-width="4" stroke-linejoin="round" fill="var(--white)" />
                <line x1="8" y1="54" x2="56" y2="54" stroke="var(--primary-color)" stroke-width="3" stroke-linecap="round" />
                <!-- Orange Box inside -->
                <g transform="translate(23, 32)">
                    <path d="M 9 0 L 17 4 L 9 8 L 1 4 Z" stroke="var(--secondary-color)" stroke-width="3" stroke-linejoin="round" fill="var(--white)" />
                    <path d="M 1 4 V 12 L 9 16 V 8 Z" stroke="var(--secondary-color)" stroke-width="2.5" stroke-linejoin="round" opacity="0.9" />
                    <path d="M 9 8 L 17 4 V 12 L 9 16 Z" stroke="var(--secondary-color)" stroke-width="2.5" stroke-linejoin="round" opacity="0.7" />
                </g>
            </svg>'
    ],
    [
        'num' => '06',
        'title' => 'SETTLE IN HASSLE-FREE',
        'desc' => 'We make sure everything is in place so you can settle in comfortably.',
        'color_class' => 'orange-badge',
        'ring_color' => 'var(--secondary-color)',
        'arrow_class' => 'orange-arrow',
        'icon_svg' => '
            <svg class="proc-svg-icon" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Shield in Green -->
                <path d="M 32 54 C 32 54, 52 44, 52 28 V 14 L 32 8 L 12 14 V 28 C 12 44, 32 54, 32 54 Z" stroke="var(--primary-color)" stroke-width="4.5" stroke-linejoin="round" fill="var(--white)" />
                <!-- Thick Orange Checkmark -->
                <path d="M 22 30 L 29 37 L 43 21" stroke="var(--secondary-color)" stroke-width="5.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>'
    ]
];
?>

<section class="process-section-new py-5">
    <div class="container">
        <div class="services-header-new text-center mb-5">
            <div class="services-eyebrow-new">
                <h3 class="eyebrow-text">OUR PROCESS</h3>
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
                A SIMPLE PROCESS, <span class="highlight-green">SEAMLESS</span> MOVING
            </h2>
            <p class="services-subtitle-new text-muted mt-2">
                We make your move easy, efficient and worry-free.
            </p>
        </div>

        <!-- Grid of 6 Process Steps -->
        <div class="row g-4 mt-2 justify-content-center">
            <?php foreach ($steps as $index => $step): ?>
                <div class="col-xl-2 col-lg-4 col-md-6 col-6 d-flex position-relative">
                    <div class="proc-step-item text-center w-100">
                        <div class="proc-icon-wrapper">
                            <svg class="dotted-ring-svg" viewBox="0 0 100 100">
                                <path d="M 5 50 A 45 45 0 0 0 95 50" style="stroke: <?= $step['ring_color'] ?>;" stroke-dasharray="1 8" stroke-width="3.5" stroke-linecap="round" fill="none" />
                                <circle cx="5" cy="50" r="4.5" style="fill: <?= $step['ring_color'] ?>;" class="pulse-dot dot-1" />
                                <circle cx="50" cy="95" r="4.5" style="fill: <?= $step['ring_color'] ?>;" class="pulse-dot dot-2" />
                                <circle cx="95" cy="50" r="4.5" style="fill: <?= $step['ring_color'] ?>;" class="pulse-dot dot-3" />
                            </svg>
                            <div class="proc-icon-container">
                                <?= $step['icon_svg'] ?>
                            </div>
                        </div>
                        <div class="proc-card w-100">
                            <div class="proc-badge <?= $step['color_class'] ?>"><?= $step['num'] ?></div>
                            <h4 class="proc-card-title"><?= htmlspecialchars($step['title']) ?></h4>
                            <p class="proc-card-desc"><?= htmlspecialchars($step['desc']) ?></p>
                        </div>
                    </div>
                    <?php if ($index < 5): ?>
                        <div class="proc-arrow <?= $step['arrow_class'] ?>">
                            <i class="bi bi-arrow-right-short"></i>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="process-trust-bar-new mt-5">
            <div class="row align-items-center g-4 text-center text-lg-start">
                <div class="col-lg-5 col-6">
                    <div class="trust-bar-item d-flex align-items-center justify-content-center justify-content-lg-start">
                        <div class="trust-bar-icon-shield mr-3">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="trust-bar-text">
                            <h4>WE HANDLE IT LIKE<br><span class="highlight-green">IT'S OUR OWN.</span></h4>
                            <p>Your trust is our responsibility.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 trust-bar-separator">
                    <div class="trust-bar-item d-flex align-items-center justify-content-center justify-content-lg-start">
                        <div class="trust-bar-icon-circle mr-3">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="trust-bar-text">
                            <h4>READY TO MAKE YOUR MOVE?</h4>
                            <p>Let our experts take care of everything.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 text-center text-lg-end">
                    <a href="#" class="btn-orange-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                        GET A FREE QUOTE <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
