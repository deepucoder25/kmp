<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Loading & Unloading',
    'bc_desc' => 'Safe loading and unloading services by ' . $company3 . '. Our skilled crew utilizes ramp plates, hand trolleys, and safety ropes to handle heavy cartons.',
    'breadcrumbs' => [
        ['name' => 'Loading & Unloading']
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
                            <i class="bi bi-patch-check-fill"></i> Safe Handling
                        </span>
                        
                        <h2 class="service-title-premium">
                            Loading &amp; <span>Unloading</span>
                        </h2>
                        
                        <p class="service-lead-desc">
                            The transition of moving boxes from home to truck is where damages are most likely. At <strong><?= $company3 ?></strong>, we ensure safe loading and unloading by employing trained logistics handlers.
                        </p>

                        <!-- Featured Image -->
                        <div class="mb-4">
                            <div class="w-100 position-relative overflow-hidden rounded-4 shadow-sm service-featured-img-container">
                                <img src="<?= base_url('assets/images/services_modules/loading_unloading.jpg') ?>" alt="Loading &amp; Unloading" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy">
                            </div>
                        </div>

                        <p class="service-desc-text">
                            Our team utilizes specialized handling equipment including hydraulic tailgates, hand trucks, sliders, and heavy-duty safety anchoring ropes. We stack heavy boxes at the bottom and lighter, fragile cartons on top, ensuring nothing gets crushed during transit.
                        </p>

                        <!-- 3D metrics snippet inside card -->
                        <div class="service-metric-row">
                            <div class="service-metric-card-3d">
                                <div class="service-metric-num-3d">Safety</div>
                                <div class="service-metric-label-3d">Anchor Belts</div>
                                <div class="service-metric-desc-3d">Zero goods movement inside the container.</div>
                            </div>
                            <div class="service-metric-card-3d">
                                <div class="service-metric-num-3d">Skilled</div>
                                <div class="service-metric-label-3d">Team Crew</div>
                                <div class="service-metric-desc-3d">Physically trained handlers for heavy safety moves.</div>
                            </div>
                        </div>



                        <!-- 4-Step Process Timeline -->
                        <h3 class="service-sub-title mt-5 mb-3">Our Safe Loading Protocols</h3>
                        <div class="service-timeline">
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">01</span>
                                <div class="service-timeline-content">
                                    <h5>Path Cleared &amp; Prepared</h5>
                                    <p class="service-desc-text">Before starting, we clear the stairways and hallways, placing floor protective mats to prevent scratch marks on building floors.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">02</span>
                                <div class="service-timeline-content">
                                    <h5>Trolley Assistance</h5>
                                    <p class="service-desc-text">We load heavy objects (like refrigerators and washing machines) onto wheeled hand trolleys to ensure steady transit down ramps.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">03</span>
                                <div class="service-timeline-content">
                                    <h5>Systematic Container Stacking</h5>
                                    <p class="service-desc-text">Heavy items are placed at the base, followed by furniture, and topped with lightweight box items. All are locked down with safety belts.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">04</span>
                                <div class="service-timeline-content">
                                    <h5>Careful Destination Unloading</h5>
                                    <p class="service-desc-text">At your new address, we unlock the straps, carry cartons room-by-room, and inspect for transit damage.</p>
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
                                        <i class="bi bi-check-circle-fill"></i> Safe Handling
                                    </span>
                                </div>
                                <p class="service-quote-body-text">
                                    "Loading a heavy double-door fridge from the 4th floor was a huge concern, but the team handled it easily with ropes and a cart. Zero scratches on the fridge or the walls. Very impressive!"
                                </p>
                                <div class="service-quote-user-info mt-3">
                                    <span class="service-quote-user-avatar">KD</span>
                                    <div>
                                        <h6 class="service-quote-user-name">Kapil Dev</h6>
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
                                    "Unloaded my heavy modular cabinet from 5th floor without single scratch. Punctual, safe, and highly coordinated team."
                                </p>
                                <div class="service-quote-user-info mt-3">
                                    <span class="service-quote-user-avatar">MS</span>
                                    <div>
                                        <h6 class="service-quote-user-name">Mohit Sen</h6>
                                        <span class="service-quote-user-location">Indirapuram, Ghaziabad</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Side: Sidebar (col-lg-4) -->
                <div class="col-lg-4">
                    <?php $this->load->view('services_sidebar', ['active_link' => 'loading-and-unloading']); ?>
                </div>
            </div>
        </div>
    </section>
</div>
