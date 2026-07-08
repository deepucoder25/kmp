<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Cargo Services',
    'bc_desc' => 'Reliable domestic cargo shipping, freight forwarding, and logistic solutions by ' . $company3 . '. Secure and timely transport of industrial and household cargo.',
    'breadcrumbs' => [
        ['name' => 'Cargo Services']
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
                            <i class="bi bi-patch-check-fill"></i> Freight &amp; Logistics
                        </span>
                        
                        <h2 class="service-title-premium">
                            Cargo <span>Services</span>
                        </h2>
                        
                        <p class="service-lead-desc">
                            Reliable shipping for bulk items. At <strong><?= $company3 ?></strong>, we provide cost-effective domestic cargo shipping, freight forwarding, and freight logistics solutions across India.
                        </p>

                        <!-- Featured Image -->
                        <div class="mb-4">
                            <div class="w-100 position-relative overflow-hidden rounded-4 shadow-sm service-featured-img-container">
                                <img src="<?= base_url('assets/images/services_modules/whatsapp_image_2.jpg') ?>" alt="Cargo Services" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy">
                            </div>
                        </div>

                        <p class="service-desc-text">
                            Whether you need to ship industrial raw materials, commercial machinery parts, or bulk household items, our network of shipping routes handles it. We partner with air, rail, and road freight lines to deliver your logistics package on schedule.
                        </p>

                        <!-- 3D metrics snippet inside card -->
                        <div class="service-metric-row">
                            <div class="service-metric-card-3d">
                                <div class="service-metric-num-3d">Wide</div>
                                <div class="service-metric-label-3d">Network Routes</div>
                                <div class="service-metric-desc-3d">Connecting all major commercial cities in India.</div>
                            </div>
                            <div class="service-metric-card-3d">
                                <div class="service-metric-num-3d">Secure</div>
                                <div class="service-metric-label-3d">Handling</div>
                                <div class="service-metric-desc-3d">Heavy-duty pallet wraps and box crating.</div>
                            </div>
                        </div>



                        <!-- 4-Step Process Timeline -->
                        <h3 class="service-sub-title mt-5 mb-3">Our Cargo Shipping Flow</h3>
                        <div class="service-timeline">
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">01</span>
                                <div class="service-timeline-content">
                                    <h5>Cargo Inspection &amp; Booking</h5>
                                    <p class="service-desc-text">We verify weight, volume, and dimensions, checking cargo manifests and tax invoices for hassle-free interstate transport.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">02</span>
                                <div class="service-timeline-content">
                                    <h5>Heavy Pallet Wrapping</h5>
                                    <p class="service-desc-text">Bulk boxes are stacked on pallets, covered in high-strength shrink wrap, and strap-secured to prevent load shift.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">03</span>
                                <div class="service-timeline-content">
                                    <h5>Logistics Route Transit</h5>
                                    <p class="service-desc-text">The cargo is dispatched via optimized air, rail, or express road freight lines to ensure speedy delivery.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">04</span>
                                <div class="service-timeline-content">
                                    <h5>Doorstep Consignment Handover</h5>
                                    <p class="service-desc-text">We deliver the consignments directly to the warehouse or commercial doorstep of your recipient.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Speech Bubble -->
                        <h3 class="service-sub-title mt-5 mb-3">Cargo Reviews</h3>
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
                                    "We ship regular commercial machine parts from Ghaziabad to our clients in Chennai. Kiran Packers offers very competitive pricing and prompt cargo tracking. Highly recommended!"
                                </p>
                                <div class="service-quote-user-info mt-3">
                                    <span class="service-quote-user-avatar">SL</span>
                                    <div>
                                        <h6 class="service-quote-user-name">S. Logistix</h6>
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
                                    "Reliable rail and road cargo. Timely consignment drop at our client locations with complete documentation. Outstanding support."
                                </p>
                                <div class="service-quote-user-info mt-3">
                                    <span class="service-quote-user-avatar">HC</span>
                                    <div>
                                        <h6 class="service-quote-user-name">Harish Chander</h6>
                                        <span class="service-quote-user-location">Vaishali, Ghaziabad</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Side: Sidebar (col-lg-4) -->
                <div class="col-lg-4">
                    <?php $this->load->view('services_sidebar', ['active_link' => 'cargo-services']); ?>
                </div>
            </div>
        </div>
    </section>
</div>
