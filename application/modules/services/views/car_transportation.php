<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Car Transportation',
    'bc_desc' => 'Secure car carrier and vehicle transportation services by ' . $company3 . '. We utilize open and enclosed car carriers for damage-free delivery.',
    'breadcrumbs' => [
        ['name' => 'Car Transportation']
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
                            <i class="bi bi-patch-check-fill"></i> Car Carrier Shifting
                        </span>
                        
                        <h2 class="service-title-premium">
                            Car <span>Transportation</span>
                        </h2>
                        
                        <p class="service-lead-desc">
                            Relocating your car over long distances is stressful. At <strong><?= $company3 ?></strong>, we provide safe, professional, and licensed car shipping services using multi-car carrier trailers.
                        </p>

                        <!-- Featured Image -->
                        <div class="mb-4">
                            <div class="w-100 position-relative overflow-hidden rounded-4 shadow-sm service-featured-img-container">
                                <img src="<?= base_url('assets/images/services_modules/whatsapp_image_1.jpg') ?>" alt="Car Transportation" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy">
                            </div>
                        </div>

                        <p class="service-desc-text">
                            We offer both open-trailer carriers and premium enclosed container trucks for luxury cars. Our team secures the wheels of your vehicle using specialized wheel locks and safety harnesses to prevent structural movement during transit.
                        </p>

                        <!-- 3D metrics snippet inside card -->
                        <div class="service-metric-row">
                            <div class="service-metric-card-3d">
                                <div class="service-metric-num-3d">Secure</div>
                                <div class="service-metric-label-3d">Wheel Strapping</div>
                                <div class="service-metric-desc-3d">Specialized locks keep wheels fixed.</div>
                            </div>
                            <div class="service-metric-card-3d">
                                <div class="service-metric-num-3d">Real-Time</div>
                                <div class="service-metric-label-3d">GPS Tracking</div>
                                <div class="service-metric-desc-3d">Get updates on your car location.</div>
                            </div>
                        </div>



                        <!-- 4-Step Process Timeline -->
                        <h3 class="service-sub-title mt-5 mb-3">Our Car Shipping Standards</h3>
                        <div class="service-timeline">
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">01</span>
                                <div class="service-timeline-content">
                                    <h5>Detailed Vehicle Condition Assessment</h5>
                                    <p class="service-desc-text">We verify registration documents, note body scratches, take photos of all sides, and document them in a transit receipt.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">02</span>
                                <div class="service-timeline-content">
                                    <h5>Protective Wrapping</h5>
                                    <p class="service-desc-text">Side mirrors, bumpers, and handles are wrapped with protective tape and sheets to avoid loading scratches.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">03</span>
                                <div class="service-timeline-content">
                                    <h5>Safe Carrier Loading</h5>
                                    <p class="service-desc-text">The car is driven up ramps onto a specialized car carrier truck, and all four tires are secured with safety locks.</p>
                                </div>
                            </div>
                            <div class="service-timeline-item">
                                <div class="service-timeline-dot"></div>
                                <span class="service-timeline-year">04</span>
                                <div class="service-timeline-content">
                                    <h5>On-Time Doorstep Drop</h5>
                                    <p class="service-desc-text">The car is unloaded at the destination city and delivered straight to your new home address.</p>
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
                                    "I moved my Hyundai Creta from Ghaziabad to Kolkata. The container carrier team kept me updated via GPS, and my car was delivered safely. Highly professional car moving service!"
                                </p>
                                <div class="service-quote-user-info mt-3">
                                    <span class="service-quote-user-avatar">VK</span>
                                    <div>
                                        <h6 class="service-quote-user-name">Vijay Kumar</h6>
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
                                    "Shipped my Honda City without single scratch. Regular GPS tracking alerts and prompt response. Extremely reliable vehicle logistics."
                                </p>
                                <div class="service-quote-user-info mt-3">
                                    <span class="service-quote-user-avatar">DN</span>
                                    <div>
                                        <h6 class="service-quote-user-name">Deepak Negi</h6>
                                        <span class="service-quote-user-location">Vasundhara, Ghaziabad</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Side: Sidebar (col-lg-4) -->
                <div class="col-lg-4">
                    <?php $this->load->view('services_sidebar', ['active_link' => 'car-transportation']); ?>
                </div>
            </div>
        </div>
    </section>
</div>
