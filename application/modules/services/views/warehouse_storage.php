<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Warehouse Storage',
    'bc_desc' => 'Secure, temperature-controlled, and clean warehouse storage facilities by ' . $company3 . '. Short-term and long-term storage options.',
    'breadcrumbs' => [
        ['name' => 'Warehouse Storage']
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
                            <i class="bi bi-patch-check-fill"></i> Secure Storage
                        </span>
                        
                        <h2 class="service-title-premium">
                            Warehouse <span>Storage</span>
                        </h2>
                        
                        <p class="service-lead-desc">
                            Need a safe place to store your goods? At <strong><?= $company3 ?></strong>, we offer modern, fire-safe, and 24/7 CCTV-monitored warehouse storage facilities for household and corporate inventory.
                        </p>

                        <!-- Featured Image -->
                        <div class="mb-4">
                            <div class="w-100 position-relative overflow-hidden rounded-4 shadow-sm service-featured-img-container">
                                <img src="<?= base_url('assets/images/services_modules/whatsapp_image_2.jpg') ?>" alt="Warehouse Storage" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy">
                            </div>
                        </div>

                        <p class="service-desc-text">
                            We provide flexible weekly and monthly storage plans. Our warehouse features pest-controlled compartments, wooden pallets to prevent floor dampness, fire-extinguishing systems, and physical security guards around the clock. Your inventory is fully documented upon entry.
                        </p>

                        <!-- 3D metrics snippet inside card -->
                        <div class="service-metric-row">
                            <div class="service-metric-card-3d">
                                <div class="service-metric-num-3d">24/7</div>
                                <div class="service-metric-label-3d">CCTV Guards</div>
                                <div class="service-metric-desc-3d">Continuous surveillance of warehouse grounds.</div>
                            </div>
                            <div class="service-metric-card-3d">
                                <div class="service-metric-num-3d">Clean</div>
                                <div class="service-metric-label-3d">Pest Control</div>
                                <div class="service-metric-desc-3d">Frequent sanitization and rodent treatments.</div>
                            </div>
                        </div>



                        <!-- 4-Step Process Timeline -->
                        <h3 class="service-sub-title mt-5 mb-3">Our Warehousing Protocol</h3>
                        <div class="service-timeline">
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">01</span>
                                <div class="service-timeline-content">
                                    <h5>Detailed Inventory Listing</h5>
                                    <p class="service-desc-text">We inspect and note all incoming goods, creating a thorough list copy for you before sealing boxes.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">02</span>
                                <div class="service-timeline-content">
                                    <h5>Heavy-Duty Pallet Packing</h5>
                                    <p class="service-desc-text">Possessions are wrapped and placed on elevated wooden pallets to keep them safe from floor moisture.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">03</span>
                                <div class="service-timeline-content">
                                    <h5>Compartmentalized Storage</h5>
                                    <p class="service-desc-text">Your goods are stored in a designated, locked chamber, partitioned from other client lots.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">04</span>
                                <div class="service-timeline-content">
                                    <h5>Safe Dispatch</h5>
                                    <p class="service-desc-text">When you are ready to receive them, we load and deliver the goods straight to your destination.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Speech Bubble -->
                        <h3 class="service-sub-title mt-5 mb-3">Storage Reviews</h3>
                        <div class="service-quote-bubble-grid mb-4">
                            <div class="service-quote-card-premium">
                                <div class="service-quote-stars">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="service-quote-verified-badge">
                                        <i class="bi bi-check-circle-fill"></i> Secure Storage
                                    </span>
                                </div>
                                <p class="service-quote-body-text">
                                    "I stored my home furniture with Kiran Packers for 3 months during my home renovation. The warehouse is clean and dry. When I received my furniture back, there was zero dust or damage. Excellent storage service!"
                                </p>
                                <div class="service-quote-user-info mt-3">
                                    <span class="service-quote-user-avatar">NK</span>
                                    <div>
                                        <h6 class="service-quote-user-name">Neeraj Kohli</h6>
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
                                    "Highly secure, dry and clean warehouse. Kept my corporate inventory safe and dry. Excellent inventory management system."
                                </p>
                                <div class="service-quote-user-info mt-3">
                                    <span class="service-quote-user-avatar">AS</span>
                                    <div>
                                        <h6 class="service-quote-user-name">Ankit Saxena</h6>
                                        <span class="service-quote-user-location">Vaishali, Ghaziabad</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Side: Sidebar (col-lg-4) -->
                <div class="col-lg-4">
                    <?php $this->load->view('services_sidebar', ['active_link' => 'warehouse-storage']); ?>
                </div>
            </div>
        </div>
    </section>
</div>
