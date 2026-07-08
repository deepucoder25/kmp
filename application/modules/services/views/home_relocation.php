<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Home Relocation',
    'bc_desc' => 'Stress-free household shifting and home relocation services by ' . $company3 . '. Expert packing, secure loading, and timely delivery of your household goods.',
    'breadcrumbs' => [
        ['name' => 'Home Relocation']
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
                            <i class="bi bi-patch-check-fill"></i> Verified Shifting
                        </span>
                        
                        <h2 class="service-title-premium">
                            Home <span>Relocation</span>
                        </h2>
                        
                        <p class="service-lead-desc">
                            Relocating your home is one of life's major milestones, but it does not have to be stressful. At <strong><?= $company3 ?></strong>, we specialize in offering seamless, secure, and stress-free domestic household shifting services tailored to your specific requirements.
                        </p>

                        <!-- Featured Image -->
                        <div class="mb-4">
                            <div class="w-100 position-relative overflow-hidden rounded-4 shadow-sm service-featured-img-container">
                                <img src="<?= base_url('assets/images/services_modules/whatsapp_image_2.jpg') ?>" alt="Home Relocation" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy">
                            </div>
                        </div>

                        <p class="service-desc-text">
                            Our team of highly skilled shifting specialists handles every aspect of your household move. From wrapping delicate glassware with premium bubble sheets to disassembling large furniture pieces (like beds and wardrobes) and securing them inside clean, enclosed container trucks, we treat your valuable possessions as if they were our own.
                        </p>

                        <!-- 3D metrics snippet inside card -->
                        <div class="service-metric-row">
                            <div class="service-metric-card-3d">
                                <div class="about-metric-num-3d">100%</div>
                                <div class="about-metric-label-3d">Safe Packing</div>
                                <div class="about-metric-desc-3d">Premium multi-layer materials.</div>
                            </div>
                            <div class="service-metric-card-3d">
                                <div class="about-metric-num-3d">On-Time</div>
                                <div class="about-metric-label-3d">Delivery Guarantee</div>
                                <div class="about-metric-desc-3d">Committed shifting schedules.</div>
                            </div>
                        </div>



                        <!-- 4-Step Process Timeline -->
                        <h3 class="service-sub-title mt-5 mb-3">Our Relocation Process</h3>
                        <div class="service-timeline">
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">01</span>
                                <div class="service-timeline-content">
                                    <h5>Pre-Move Survey &amp; Estimation</h5>
                                    <p class="service-desc-text">We inspect your inventory via physical visit or video call to provide a transparent, flat-rate quote with zero hidden charges.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">02</span>
                                <div class="service-timeline-content">
                                    <h5>Premium Multi-Layer Packing</h5>
                                    <p class="service-desc-text">We wrap everything with high-grade bubble wrap, corrugated sheets, foam rolls, and heavy-duty tape to absorb road transit shocks.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">03</span>
                                <div class="service-timeline-content">
                                    <h5>Secure Loading &amp; Transit</h5>
                                    <p class="service-desc-text">Our crew carefully loads packages using specialized safety gears into fully enclosed container trucks to keep them dust and rain-free.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">04</span>
                                <div class="service-timeline-content">
                                    <h5>Unpacking &amp; Placement</h5>
                                    <p class="service-desc-text">At the destination, we unpack and position all heavy furniture and boxes in their respective rooms according to your preference.</p>
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
                                    "I relocated my 3 BHK home stuff from Ghaziabad to Pune. The crew did a fantastic job wrapping my television, refrigerator, and double bed. Everything arrived in perfect condition, on time."
                                </p>
                                <div class="service-quote-user-info mt-3">
                                    <span class="service-quote-user-avatar">AM</span>
                                    <div>
                                        <h6 class="service-quote-user-name">Amit Mishra</h6>
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
                                    "Relocated my 2 BHK flat locally in Ghaziabad. Excellent support, punctual and neat packing. The packing team was quick and highly professional."
                                </p>
                                <div class="service-quote-user-info mt-3">
                                    <span class="service-quote-user-avatar">RS</span>
                                    <div>
                                        <h6 class="service-quote-user-name">Ritu Sharma</h6>
                                        <span class="service-quote-user-location">Vaishali, Ghaziabad</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Accordion -->
                        <h3 class="service-sub-title mt-5 mb-3">Frequently Asked Questions</h3>
                        <div class="service-doc-accordion accordion" id="faqShiftingAccordion">
                            <!-- FAQ 1 -->
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingShifting1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseShifting1" aria-expanded="false" aria-controls="collapseShifting1">
                                        Do you provide transit insurance for household goods?
                                    </button>
                                </h4>
                                <div id="collapseShifting1" class="accordion-collapse collapse" aria-labelledby="headingShifting1" data-bs-parent="#faqShiftingAccordion">
                                    <div class="accordion-body service-desc-text">
                                        Yes, we offer comprehensive transit insurance options covering your valuable belongings against any accidental physical damage or theft during road transit.
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ 2 -->
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="headingShifting2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseShifting2" aria-expanded="false" aria-controls="collapseShifting2">
                                        How many days before the move should I book?
                                    </button>
                                </h4>
                                <div id="collapseShifting2" class="accordion-collapse collapse" aria-labelledby="headingShifting2" data-bs-parent="#faqShiftingAccordion">
                                    <div class="accordion-body service-desc-text">
                                        We suggest booking at least 3 to 7 days in advance. This ensures we can lock in the container trucks and allocate our best wrapping crew for your specific move day.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Side: Sidebar (col-lg-4) -->
                <div class="col-lg-4">
                    <?php $this->load->view('services_sidebar', ['active_link' => 'home-relocation']); ?>
                </div>
            </div>
        </div>
    </section>
</div>
