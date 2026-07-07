<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="about-section-new py-5">
    <!-- Decorative Circle Backdrop -->
    <div class="about-circle-decor d-none d-lg-block"></div>
    
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-6 col-12">
                <div class="services-header-new text-left mb-4">
                    <div class="services-eyebrow-new text-left justify-content-start">
                        <h3 class="eyebrow-text">ABOUT US</h3>
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
                        MOVING LIVES, <span class="highlight-green">DELIVERING TRUST.</span>
                    </h2>
                </div>

                <div class="about-heading-divider mb-4">
                    <span class="divider-line-long"></span>
                    <span class="divider-dot"></span>
                    <span class="divider-dot"></span>
                </div>

                <div class="about-body-text">
                    <p class="mb-3">
                        Kiran Packers Movers is a trusted name in the moving industry, providing reliable, affordable and hassle-free relocation services across India. With years of experience and a team of trained professionals, we have successfully helped thousands of families and businesses move to their new destinations with complete peace of mind.
                    </p>
                    <p class="mb-4">
                        From careful packing to safe delivery, we handle every step with professionalism, transparency and care. Our mission is simple - to deliver a moving experience that is smooth, secure and satisfying.
                    </p>
                </div>

                <div class="about-metrics-bar mb-4">
                    <div class="row g-0 align-items-center">
                        
                        <div class="col-3 text-center metric-item">
                            <div class="metric-icon green-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h4 class="metric-number green-text"><?= $happyClients ?></h4>
                            <p class="metric-label">Happy Customers</p>
                        </div>
                        
                        <div class="col-3 text-center metric-item">
                            <div class="metric-icon orange-icon">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <h4 class="metric-number orange-text"><?= $successfullMoves ?></h4>
                            <p class="metric-label">Successful Moves</p>
                        </div>
                        
                        <div class="col-3 text-center metric-item">
                            <div class="metric-icon green-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <h4 class="metric-number green-text"><?= $statesCovered ?></h4>
                            <p class="metric-label">States Served</p>
                        </div>
                        
                        <div class="col-3 text-center metric-item">
                            <div class="metric-icon orange-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h4 class="metric-number orange-text"><?= $secureShifting ?></h4>
                            <p class="metric-label">Safe & Secure</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Right Column: Flipped Image with decor & overlays -->
            <div class="col-lg-6 col-12 position-relative">
                <div class="about-dots-decor d-none d-lg-block"></div>
                <div class="about-image-wrapper">
                    <img src="<?= base_url('assets/images/home_modules/about-showcase.jpg') ?>" alt="Kiran Packers Movers loading delivery truck" class="about-showcase-img img-fluid">
                    
                    <div class="about-responsibility-badge">
                        <div class="badge-icon-circle">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <div class="badge-text">
                            <p class="badge-subtitle">Your Belongings,</p>
                            <h4 class="badge-title">Our Responsibility.</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="why-choose-us-new py-5">
    <div class="container">
        <div class="services-header-new text-center mb-5">
            <div class="services-eyebrow-new text-center justify-content-center">
                <h3 class="eyebrow-text">WHY CHOOSE US</h3>
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
            <p class="services-subtitle-new text-muted mt-3 max-width-700 mx-auto">
                We go the extra mile to make your move smooth and worry-free. Our focus is always on quality service, complete transparency and customer satisfaction.
            </p>
        </div>

        <div class="wcu-grid">
            
            <div class="wcu-item">
                <div class="wcu-icon-circle wcu-circle-green">
                    <i class="bi bi-person-fill-check"></i>
                </div>
                <div class="wcu-text-wrap">
                    <h4 class="wcu-title text-wcu-green">EXPERIENCED PROFESSIONALS</h4>
                    <p class="wcu-desc">Our skilled and trained team handles your belongings with care and ensures a smooth moving experience.</p>
                </div>
            </div>

            <div class="wcu-item">
                <div class="wcu-icon-circle wcu-circle-orange">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
                <div class="wcu-text-wrap">
                    <h4 class="wcu-title text-wcu-orange">QUALITY PACKING MATERIALS</h4>
                    <p class="wcu-desc">We use high-quality packing materials to protect your items from damage during transit.</p>
                </div>
            </div>

            <div class="wcu-item">
                <div class="wcu-icon-circle wcu-circle-green">
                    <i class="bi bi-truck"></i>
                </div>
                <div class="wcu-text-wrap">
                    <h4 class="wcu-title text-wcu-green">ON-TIME DELIVERY</h4>
                    <p class="wcu-desc">We value your time and ensure timely pickup and delivery as per the committed schedule.</p>
                </div>
            </div>

            <div class="wcu-item">
                <div class="wcu-icon-circle wcu-circle-orange">
                    <i class="bi bi-shield-fill-check"></i>
                </div>
                <div class="wcu-text-wrap">
                    <h4 class="wcu-title text-wcu-orange">SAFE & SECURE HANDLING</h4>
                    <p class="wcu-desc">Your safety is our priority. We follow best practices to ensure secure loading, transportation and unloading.</p>
                </div>
            </div>

            <div class="wcu-item">
                <div class="wcu-icon-circle wcu-circle-green">
                    <i class="bi bi-coin"></i>
                </div>
                <div class="wcu-text-wrap">
                    <h4 class="wcu-title text-wcu-green">AFFORDABLE PRICING</h4>
                    <p class="wcu-desc">Get the best moving services at competitive prices with no hidden charges.</p>
                </div>
            </div>

            <div class="wcu-item">
                <div class="wcu-icon-circle wcu-circle-orange">
                    <i class="bi bi-headphones"></i>
                </div>
                <div class="wcu-text-wrap">
                    <h4 class="wcu-title text-wcu-orange">24/7 CUSTOMER SUPPORT</h4>
                    <p class="wcu-desc">Our support team is available 24/7 to assist you at every step of your move.</p>
                </div>
            </div>

        </div>
    </div>
</section>

