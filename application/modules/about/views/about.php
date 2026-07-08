<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About Us',
    'bc_desc' => 'Learn more about ' . $company3 . ', the leading packing and moving company in India. Discover our history, mission, and professional relocation standards.',
    'breadcrumbs' => [
        ['name' => 'About Us']
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
                            <i class="bi bi-award-fill"></i> Shifting Legacy
                        </span>
                        
                        <h2 class="about-title-premium">
                            About <span><?= $company3 ?></span>
                        </h2>
                        
                        <p class="lead about-lead-text">
                            At <strong><?= $company3 ?></strong>, we take pride in being recognized among the <strong>best packers movers</strong> Ghaziabad has to offer. With over <strong><?= $experience ?> years</strong> of hands-on experience in the relocation industry, we have successfully helped hundreds of families and businesses move safely and smoothly across India. Our commitment to quality, reliability, and customer satisfaction has made us a trusted name for shifting solutions.
                        </p>

                        <!-- 3D Floating Metrics Card Row -->
                        <div class="about-metric-row">
                            <div class="about-metric-card-3d">
                                <div class="about-metric-num-3d"><?= $experience ?> Yrs</div>
                                <div class="about-metric-label-3d">Proven Experience</div>
                                <div class="about-metric-desc-3d">Shifting lives safely since 2018.</div>
                            </div>
                            <div class="about-metric-card-3d">
                                <div class="about-metric-num-3d"><?= $happyClients ?></div>
                                <div class="about-metric-label-3d">Happy Relocations</div>
                                <div class="about-metric-desc-3d">Families & offices moved.</div>
                            </div>
                            <div class="about-metric-card-3d">
                                <div class="about-metric-num-3d"><?= $secureShifting ?></div>
                                <div class="about-metric-label-3d">Secure Transit</div>
                                <div class="about-metric-desc-3d">Fully covered claim options.</div>
                            </div>
                        </div>

                        <!-- Company Journey / Timeline Section -->
                        <h3 class="about-sub-title mt-5 mb-3">Our Journey</h3>
                        <p class="about-desc-text">
                            From humble beginnings to a trusted logistics network, here is how we grew:
                        </p>
                        
                        <div class="about-timeline">
                            <!-- Year 2018 -->
                            <div class="about-timeline-item">
                                <div class="about-timeline-dot"></div>
                                <span class="about-timeline-year">2018</span>
                                <div class="about-timeline-content">
                                    <h5>Company Founded</h5>
                                    <p>Launched operations in Ghaziabad with a small crew and a single container vehicle.</p>
                                </div>
                            </div>
                            
                            <!-- Year 2020 -->
                            <div class="about-timeline-item">
                                <div class="about-timeline-dot"></div>
                                <span class="about-timeline-year">2020</span>
                                <div class="about-timeline-content">
                                    <h5>Network Expansion</h5>
                                    <p>Expanded local shifting operations to include long-distance domestic cargo shipping.</p>
                                </div>
                            </div>
                            
                            <!-- Year 2022 -->
                            <div class="about-timeline-item">
                                <div class="about-timeline-dot"></div>
                                <span class="about-timeline-year">2022</span>
                                <div class="about-timeline-content">
                                    <h5>ISO & Quality Standard Certification</h5>
                                    <p>Earned certified packer and mover status with verified handling procedures.</p>
                                </div>
                            </div>
                            
                            <!-- Year 2024+ -->
                            <div class="about-timeline-item">
                                <div class="about-timeline-dot"></div>
                                <span class="about-timeline-year">2024+</span>
                                <div class="about-timeline-content">
                                    <h5>Trusted Industry Leader</h5>
                                    <p>Delivering premier packing and shifting services across India with 24/7 client coordination.</p>
                                </div>
                            </div>
                        </div>

                        <div class="about-mv-grid">
                            <div class="about-mv-card">
                                <div class="about-mv-icon-wrap">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <h3>Our Mission</h3>
                                <p>
                                    To deliver reliable, secure, and stress-free relocation services that redefine the standards of packers and movers. We are committed to providing professional packing and timely transport.
                                </p>
                            </div>
                            <div class="about-mv-card vision-card">
                                <div class="about-mv-icon-wrap">
                                    <i class="bi bi-eye-fill"></i>
                                </div>
                                <h3>Our Vision</h3>
                                <p>
                                    To become the most trusted relocation brand in India by combining packing innovation, secure carrier trucks, and absolute customer-centric values.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Sidebar (col-lg-4) -->
                <div class="col-lg-4">
                    <?php $this->load->view('about/company_sidebar', ['active_link' => 'about-us']); ?>
                </div>
            </div>
        </div>
    </section>
</div>