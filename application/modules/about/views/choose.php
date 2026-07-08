<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Why Choose Us',
    'bc_desc' => 'Find out why ' . $company3 . ' is the most trusted name for local and domestic relocation services. Top-rated safety, reliability, and affordable shifting rates.',
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]);
?>

<!-- Glow Backdrop Wrapper -->
<div class="about-page-wrap">
    <div class="about-glow-container">
        <div class="about-glow-1"></div>
        <div class="about-glow-2"></div>
    </div>

    <!-- Main Content Area -->
    <section class="py-5 about-z-index-up">
        <div class="container">
            <div class="row">
                <!-- Left Side Content (col-lg-8) -->
                <div class="col-lg-8">
                    <div class="about-glass-panel">
                        <span class="about-badge-premium">
                            <i class="bi bi-patch-check-fill"></i> Unmatched Service
                        </span>
                        
                        <h2 class="about-title-premium">
                            Why Choose <span><?= $company3 ?></span>?
                        </h2>
                        
                        <p class="about-lead-desc">
                            Selecting a professional moving agency is critical for securing your valuables. We combine highly trained crew members, premium bubble wraps, and a transparent payment model to provide a seamless shifting process.
                        </p>

                        <!-- Glowing Hex Benefit Cards Grid -->
                        <div class="about-benefits-grid">
                            
                            <!-- Card 1 -->
                            <div class="about-benefit-card-premium">
                                <div class="about-benefit-icon-wrapper">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <h4><?= isset($experience) ? $experience : '6+' ?> Yrs Shifting Experience</h4>
                                <p>Over a half-decade of handling residential shifting and vehicle logistics across India.</p>
                            </div>

                            <!-- Card 2 -->
                            <div class="about-benefit-card-premium">
                                <div class="about-benefit-icon-wrapper">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <h4>Expert Shifting Crew</h4>
                                <p>Experienced, in-house packers skilled in wrapping fragile glassware and heavy appliance loading.</p>
                            </div>

                            <!-- Card 3 -->
                            <div class="about-benefit-card-premium">
                                <div class="about-benefit-icon-wrapper">
                                    <i class="bi bi-currency-rupee"></i>
                                </div>
                                <h4>Transparent Shifting Rates</h4>
                                <p>Upfront itemized quotes with zero hidden fees, extra tolls, or surprise charges at unloading.</p>
                            </div>

                            <!-- Card 4 -->
                            <div class="about-benefit-card-premium">
                                <div class="about-benefit-icon-wrapper">
                                    <i class="bi bi-box-seam-fill"></i>
                                </div>
                                <h4>Premium Protective Packing</h4>
                                <p>High-grade bubble wrapping, corrugated boards, foam corners, and customized wooden crates.</p>
                            </div>

                            <!-- Card 5 -->
                            <div class="about-benefit-card-premium">
                                <div class="about-benefit-icon-wrapper">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <h4>Punctual Transit Delivery</h4>
                                <p>Strict loading timelines with real-time transit status updates from dispatch to unloading.</p>
                            </div>

                            <!-- Card 6 -->
                            <div class="about-benefit-card-premium">
                                <div class="about-benefit-icon-wrapper">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <h4>Fully Insured Transit</h4>
                                <p>Secure transport in closed container trucks with complete transit insurance protection.</p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Right Side Sidebar (col-lg-4) -->
                <div class="col-lg-4">
                    <?php $this->load->view('about/company_sidebar', ['active_link' => 'why-choose-us']); ?>
                </div>
            </div>
        </div>
    </section>
</div>