<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Bike Transportation',
    'bc_desc' => 'Professional bike transportation and two-wheeler carrier services by ' . $company3 . '. Secure packaging, specialized carriers, and damage-free delivery.',
    'breadcrumbs' => [
        ['name' => 'Bike Transportation']
    ]
]);
?>

<!-- Main Content Area -->
<div class="service-details-wrap">
    <div class="service-glow-container">
        <div class="service-glow-1"></div>
        <div class="service-glow-2"></div>
    </div>

    <section class="py-5 service-z-index-up">
        <div class="container">
            <div class="row">
                <!-- Left Side: Service Details (col-lg-8) -->
                <div class="col-lg-8">
                    <div class="service-glass-panel">
                        <span class="service-badge-premium">
                            <i class="bi bi-patch-check-fill"></i> Two-Wheeler Shifting
                        </span>
                        
                        <h2 class="service-title-premium">
                            Bike <span>Transportation</span>
                        </h2>
                        
                        <p class="service-lead-desc">
                            Secure transport for your motorcycle. At <strong><?= $company3 ?></strong>, we provide specialized bike shifting services using high-quality bubble sheets, foam cushions, and enclosed transport carriers.
                        </p>

                        <!-- Featured Image -->
                        <div class="mb-4">
                            <div class="w-100 position-relative overflow-hidden rounded-4 shadow-sm service-featured-img-container">
                                <img src="<?= base_url('assets/images/services_modules/bike_transport.jpg') ?>" alt="Bike Transportation" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy">
                            </div>
                        </div>

                        <p class="service-desc-text">
                            We load your two-wheelers using safety ramps and anchor them tightly using heavy-duty belts inside enclosed container trucks. This prevents paint scratches, dented mudguards, and mirror damages. We offer doorstep pickup and delivery services across India.
                        </p>

                        <!-- 3D metrics snippet inside card -->
                        <div class="service-metric-row">
                            <div class="service-metric-card-3d">
                                <div class="service-metric-num-3d">Anchor</div>
                                <div class="service-metric-label-3d">Tie-Downs</div>
                                <div class="service-metric-desc-3d">Heavy-duty belts prevent road bumps shake.</div>
                            </div>
                            <div class="service-metric-card-3d">
                                <div class="service-metric-num-3d">Doorstep</div>
                                <div class="service-metric-label-3d">Pickup &amp; Drop</div>
                                <div class="service-metric-desc-3d">Hassle-free shipping directly from your gate.</div>
                            </div>
                        </div>



                        <!-- 4-Step Process Timeline -->
                        <h3 class="service-sub-title mt-5 mb-3">Our Bike Shifting Process</h3>
                        <div class="service-timeline">
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">01</span>
                                <div class="service-timeline-content">
                                    <h5>Pre-Shifting Inspection</h5>
                                    <p class="service-desc-text">We verify the RC copy and insurance details, note existing odometer readings and scratches, and draft an inspection report.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">02</span>
                                <div class="service-timeline-content">
                                    <h5>Specialized Multi-Layer Packing</h5>
                                    <p class="service-desc-text">We wrap headlights, indicators, speedometer, and silencer in heavy bubble wraps and foam padding to absorb shocks.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">03</span>
                                <div class="service-timeline-content">
                                    <h5>Secure Loading &amp; Anchoring</h5>
                                    <p class="service-desc-text">The bike is rolled up ramp plates into the carrier, where it is secured upright using tie-down straps.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">04</span>
                                <div class="service-timeline-content">
                                    <h5>Doorstep Delivery</h5>
                                    <p class="service-desc-text">We deliver the two-wheeler directly to your new address, allowing you to inspect it before signing off.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Speech Bubble -->
                        <h3 class="service-sub-title mt-5 mb-3">Customer Shifting Reviews</h3>
                        <div class="service-quote-bubble-grid mb-4">
                            <div class="service-quote-card-premium">
                                <div class="service-quote-stars">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="service-quote-verified-badge">
                                        <i class="bi bi-check-circle-fill"></i> Verified Shifting
                                    </span>
                                </div>
                                <p class="service-quote-body-text">
                                    "I shipped my Royal Enfield from Ghaziabad to Hyderabad. The wrapping was excellent and they locked the bike securely. Arrived on the 4th day with zero scratches. Very satisfied!"
                                </p>
                                <div class="service-quote-user-info mt-3">
                                    <span class="service-quote-user-avatar">SR</span>
                                    <div>
                                        <h6 class="service-quote-user-name">Suresh Raina</h6>
                                        <span class="service-quote-user-location">Ghaziabad, India</span>
                                    </div>
                                </div>
                            </div>

                            <div class="service-quote-card-premium">
                                <div class="service-quote-stars">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="service-quote-verified-badge">
                                        <i class="bi bi-check-circle-fill"></i> Verified Shifting
                                    </span>
                                </div>
                                <p class="service-quote-body-text">
                                    "Delivered my Honda Activa safely from Ghaziabad to Bangalore. On-time delivery and continuous support from the supervisor. Highly professional transport service."
                                </p>
                                <div class="service-quote-user-info mt-3">
                                    <span class="service-quote-user-avatar">NT</span>
                                    <div>
                                        <h6 class="service-quote-user-name">Nitin Tyagi</h6>
                                        <span class="service-quote-user-location">Vaishali, Ghaziabad</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Side: Sidebar (col-lg-4) -->
                <div class="col-lg-4">
                    <?php $this->load->view('services_sidebar', ['active_link' => 'bike-transportation']); ?>
                </div>
            </div>
        </div>
    </section>
</div>
