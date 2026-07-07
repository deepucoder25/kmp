<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Fetch reviews dynamically from the database
$CI =& get_instance();
$CI->load->database();
$db_reviews = $CI->db->where('status', 1)->order_by('r_id', 'desc')->limit(8)->get('reviews')->result_array();

// Predefined default testimonials for fallback
$default_testimonials = [
    [
        'name' => 'Rahul Verma',
        'r_title' => 'Mumbai',
        'stars' => 5,
        'r_desc' => 'Kiran Packers Movers made our home shifting experience completely hassle-free. The team was punctual, polite and handled everything with great care.',
        'avatar_type' => 'male',
        'r_img' => ''
    ],
    [
        'name' => 'Neha Sharma',
        'r_title' => 'Bangalore',
        'stars' => 5,
        'r_desc' => 'Excellent service for our office relocation. Everything was well-organized and completed on time with minimal disruption to our work.',
        'avatar_type' => 'female',
        'r_img' => ''
    ],
    [
        'name' => 'Arjun Mehta',
        'r_title' => 'Pune',
        'stars' => 5,
        'r_desc' => 'From packing to delivery, everything was handled professionally. Our belongings reached safely without a single scratch. Highly recommended!',
        'avatar_type' => 'male',
        'r_img' => ''
    ],
    [
        'name' => 'Priya Iyer',
        'r_title' => 'Hyderabad',
        'stars' => 5,
        'r_desc' => 'Very reliable and affordable service. The team was very supportive and ensured a smooth shifting experience.',
        'avatar_type' => 'female',
        'r_img' => ''
    ]
];

$final_testimonials = [];
if (!empty($db_reviews)) {
    foreach ($db_reviews as $r) {
        $avatar_type = 'male';
        $lower_name = strtolower($r['name']);
        if (strpos($lower_name, 'priya') !== false || strpos($lower_name, 'neha') !== false || strpos($lower_name, 'sharma') !== false || strpos($lower_name, 'iyer') !== false || strpos($lower_name, 'kumari') !== false || strpos($lower_name, 'devi') !== false || strpos($lower_name, 'singh') !== false) {
            $avatar_type = 'female';
        }
        $final_testimonials[] = [
            'name' => $r['name'],
            'r_title' => !empty($r['r_title']) ? $r['r_title'] : 'India',
            'stars' => !empty($r['stars']) ? (int)$r['stars'] : 5,
            'r_desc' => $r['r_desc'],
            'avatar_type' => $avatar_type,
            'r_img' => $r['r_img']
        ];
    }
}

// Append default testimonials if database contains fewer than 4 reviews
if (count($final_testimonials) < 4) {
    $needed = 4 - count($final_testimonials);
    for ($i = 0; $i < $needed; $i++) {
        if (isset($default_testimonials[$i])) {
            $final_testimonials[] = $default_testimonials[$i];
        }
    }
}
?>

<section class="reviews-section-new py-5">
    <div class="container">
        <!-- Section Header (Reusing classes from services/process headers) -->
        <div class="services-header-new text-center mb-5">
            <div class="services-eyebrow-new">
                <h3 class="eyebrow-text">OUR TESTIMONIALS</h3>
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
                WHAT OUR <span class="highlight-green">HAPPY CUSTOMERS</span> SAY
            </h2>
            <p class="services-subtitle-new text-muted mt-2">
                Real experiences. Real satisfaction. Real trust.
            </p>
        </div>

        <div class="row g-4 mt-2">
            <!-- Left Column: Fixed Intro Card (Does not scroll) -->
            <div class="col-lg-3 col-12 d-flex">
                <div class="rev-intro-card w-100">
                    <span class="rev-quote-icon-large">“</span>
                    <h3 class="rev-intro-title">Your Trust Drives Us Forward</h3>
                    <div class="rev-title-divider"></div>
                    <p class="rev-intro-desc">
                        We take pride in delivering safe, reliable and on-time moving services that our customers love and recommend.
                    </p>
                    <!-- Custom vector line art for the truck & house outline in orange/green -->
                    <div class="rev-intro-svg-wrapper">
                        <svg class="rev-intro-svg" viewBox="0 0 160 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- House outline (green) -->
                            <path d="M 95 65 L 115 48 L 135 65 V 90 H 95 Z" stroke="#a2ee7f" stroke-width="2.5" stroke-linejoin="round" />
                            <!-- Chimney / details (green) -->
                            <path d="M 100 55 V 45 H 106 V 60" stroke="#a2ee7f" stroke-width="2.5" />
                            <path d="M 124 55 V 45 H 130 V 60" stroke="#a2ee7f" stroke-width="2.5" />
                            <!-- House Window (green) -->
                            <rect x="102" y="70" width="10" height="8" stroke="#a2ee7f" stroke-width="2" />
                            <rect x="118" y="70" width="10" height="8" stroke="#a2ee7f" stroke-width="2" />
                            
                            <!-- Cargo Box next to house (green) -->
                            <rect x="140" y="72" width="16" height="18" rx="2" stroke="#a2ee7f" stroke-width="2" />
                            <path d="M 140 78 H 156" stroke="#a2ee7f" stroke-width="1.5" />
                            <path d="M 148 72 V 78" stroke="#a2ee7f" stroke-width="1.5" />

                            <!-- Truck outline (orange) -->
                            <path d="M 28 60 H 70 V 86 H 28 Z" stroke="#FF800D" stroke-width="2.8" stroke-linejoin="round" />
                            <path d="M 70 67 H 82 L 91 75 V 86 H 70 Z" stroke="#FF800D" stroke-width="2.8" stroke-linejoin="round" />
                            <!-- Truck Window (orange) -->
                            <path d="M 73 69 H 80 L 85 75 H 73 Z" stroke="#FF800D" stroke-width="2" stroke-linejoin="round" />
                            <!-- Wheels (orange outline) -->
                            <circle cx="38" cy="90" r="6" stroke="#FF800D" stroke-width="2.5" fill="#199416" />
                            <circle cx="78" cy="90" r="6" stroke="#FF800D" stroke-width="2.5" fill="#199416" />
                            
                            <!-- Speed lines (green) -->
                            <line x1="8" y1="65" x2="22" y2="65" stroke="#a2ee7f" stroke-width="2.5" stroke-linecap="round" />
                            <line x1="4" y1="73" x2="18" y2="73" stroke="#a2ee7f" stroke-width="2.5" stroke-linecap="round" />
                            <line x1="10" y1="81" x2="24" y2="81" stroke="#a2ee7f" stroke-width="2.5" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Right Column: Scrollable Testimonial Cards Slider -->
            <div class="col-lg-9 col-12">
                <div class="review-slider-viewport">
                    <div class="review-cards-row" id="rev-slider-track">
                        
                        <?php foreach ($final_testimonials as $index => $t): ?>
                            <div class="rev-card-col scroll-snap-card">
                                <div class="rev-testimonial-card w-100">
                                    <div class="rev-card-badge">“</div>
                                    <div class="rev-stars mb-3">
                                        <?php 
                                        $stars = isset($t['stars']) ? (int)$t['stars'] : 5;
                                        for ($s = 0; $s < 5; $s++) {
                                            if ($s < $stars) {
                                                echo '<i class="bi bi-star-fill"></i>';
                                            } else {
                                                echo '<i class="bi bi-star"></i>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <p class="rev-card-text">
                                        <?= htmlspecialchars($t['r_desc']) ?>
                                    </p>
                                    <div class="rev-profile-container d-flex align-items-center">
                                        <?php if (!empty($t['r_img'])): ?>
                                            <?php 
                                            $img_url = $t['r_img'];
                                            if (strpos($img_url, 'assets/') === 0) {
                                                $img_url = base_url($img_url);
                                            }
                                            ?>
                                            <img src="<?= $img_url ?>" alt="<?= htmlspecialchars($t['name']) ?> Packers Movers Review" class="rev-avatar">
                                        <?php else: ?>
                                            <?php if ($t['avatar_type'] === 'female'): ?>
                                                <div class="rev-avatar-icon-female">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                            <?php else: ?>
                                                <div class="rev-avatar-icon-male">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        
                                        <div class="rev-profile-details">
                                            <h5><?= htmlspecialchars($t['name']) ?></h5>
                                            <p><i class="bi bi-geo-alt-fill"></i> <?= htmlspecialchars($t['r_title']) ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Pagination Dots & Arrows -->
        <div class="rev-controls-container d-flex align-items-center justify-content-center mt-4 gap-3">
            <button class="rev-arrow-btn prev-btn" id="rev-prev-btn" aria-label="Previous slide">
                <i class="bi bi-chevron-left"></i>
            </button>
            <div class="rev-slider-dots">
                <?php foreach ($final_testimonials as $index => $t): ?>
                    <span class="review-dot-item <?= $index === 0 ? 'active' : '' ?>"></span>
                <?php endforeach; ?>
            </div>
            <button class="rev-arrow-btn next-btn" id="rev-next-btn" aria-label="Next slide">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>

        <!-- Stats Callout Bar -->
        <div class="reviews-stats-bar-new mt-5">
            <div class="row align-items-center g-4 py-2">
                <!-- Stat 1: Happy Customers -->
                <div class="col-lg col-md-6 col-6 stats-col">
                    <div class="stats-bar-item d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="stats-icon-circle mr-3">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="stats-text">
                            <h4><?= $happyClients ?></h4>
                            <p class="stats-title">Happy Customers</p>
                            <p class="stats-desc">And growing every day</p>
                        </div>
                    </div>
                </div>
                <!-- Stat 2: Moves Completed -->
                <div class="col-lg col-md-6 col-6 stats-col stats-separator">
                    <div class="stats-bar-item d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="stats-icon-circle mr-3">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="stats-text">
                            <h4><?= $successfullMoves ?></h4>
                            <p class="stats-title">Moves Completed</p>
                            <p class="stats-desc">Across India</p>
                        </div>
                    </div>
                </div>
                <!-- Stat 3: 100% Safe & Secure -->
                <div class="col-lg col-md-6 col-6 stats-col stats-separator">
                    <div class="stats-bar-item d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="stats-icon-circle mr-3">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <div class="stats-text">
                            <h4>100%</h4>
                            <p class="stats-title">Safe & Secure</p>
                            <p class="stats-desc">Your belongings, our responsibility</p>
                        </div>
                    </div>
                </div>
                <!-- Stat 4: On-Time Every Time -->
                <div class="col-lg col-md-6 col-6 stats-col stats-separator">
                    <div class="stats-bar-item d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="stats-icon-circle mr-3">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div class="stats-text">
                            <h4>On-Time</h4>
                            <p class="stats-title">Every Time</p>
                            <p class="stats-desc">We value your time</p>
                        </div>
                    </div>
                </div>
                <!-- Stat 5: 4.9/5 Rating -->
                <div class="col-lg col-md-6 col-6 stats-col stats-separator">
                    <div class="stats-bar-item d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="stats-icon-circle mr-3">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="stats-text">
                            <h4>4.9/5</h4>
                            <p class="stats-title">Customer Rating</p>
                            <p class="stats-desc">Based on real feedback</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Scroll Snap dots & arrows controller script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const slider = document.getElementById('rev-slider-track');
    const dots = document.querySelectorAll('.rev-slider-dots .review-dot-item');
    const prevBtn = document.getElementById('rev-prev-btn');
    const nextBtn = document.getElementById('rev-next-btn');
    
    if (slider) {
        // Scroll listener to update dots
        slider.addEventListener('scroll', () => {
            const maxScroll = slider.scrollWidth - slider.clientWidth;
            if (maxScroll <= 0) return;
            const scrollFraction = slider.scrollLeft / maxScroll;
            const activeIndex = Math.min(Math.round(scrollFraction * (dots.length - 1)), dots.length - 1);
            dots.forEach((dot, index) => {
                if (index === activeIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        });
        
        // Click listeners for arrows
        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', () => {
                const card = slider.querySelector('.rev-card-col');
                if (card) {
                    const scrollAmount = card.clientWidth + 20; // card width + gap
                    slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                }
            });
            nextBtn.addEventListener('click', () => {
                const card = slider.querySelector('.rev-card-col');
                if (card) {
                    const scrollAmount = card.clientWidth + 20; // card width + gap
                    slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                }
            });
        }
    }
});
</script>
