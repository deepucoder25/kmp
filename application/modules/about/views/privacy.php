<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Privacy Policy',
    'bc_desc' => 'Read our privacy policy to understand how we collect, protect, and handle your personal information and booking details during relocation.',
    'breadcrumbs' => [
        ['name' => 'Privacy Policy']
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
                            <i class="bi bi-shield-lock-fill"></i> Data Protection
                        </span>
                        
                        <h2 class="about-title-premium">
                            Privacy <span>Policy</span>
                        </h2>
                        
                        <p class="about-lead-desc">
                            We value the trust you place in <strong><?= $company3 ?></strong>. This policy details how we collect, manage, and secure your personal details and inventory shifting files.
                        </p>

                        <!-- Premium Document Accordion -->
                        <div class="accordion about-doc-accordion" id="privacyDocAccordion">
                            
                            <!-- Doc Section 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingDocOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDocOne" aria-expanded="true" aria-controls="collapseDocOne">
                                        <i class="bi bi-info-circle-fill"></i> 1. Information We Collect
                                    </button>
                                </h2>
                                <div id="collapseDocOne" class="accordion-collapse collapse show" aria-labelledby="headingDocOne" data-bs-parent="#privacyDocAccordion">
                                    <div class="accordion-body">
                                        <p>To schedule your home or office shift and provide an accurate quotation, we process the following data points:</p>
                                        <ul class="about-doc-list">
                                            <li>Client name, phone number, and active email address.</li>
                                            <li>Complete pickup address, delivery address, floor details, and elevator status.</li>
                                            <li>Inventory list of household goods, fragile items, and vehicle registration cards (if shipping cars/bikes).</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Doc Section 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingDocTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDocTwo" aria-expanded="false" aria-controls="collapseDocTwo">
                                        <i class="bi bi-gear-fill"></i> 2. How We Use Your Data
                                    </button>
                                </h2>
                                <div id="collapseDocTwo" class="accordion-collapse collapse" aria-labelledby="headingDocTwo" data-bs-parent="#privacyDocAccordion">
                                    <div class="accordion-body">
                                        <p>Your details are processed strictly to coordinate and execute shifting services. Specifically for:</p>
                                        <ul class="about-doc-list">
                                            <li>Calculating transparent price estimates.</li>
                                            <li>Assigning crew loaders, packing supplies, and cargo trucks for scheduled dates.</li>
                                            <li>Sharing real-time vehicle transit tracking notifications.</li>
                                            <li>Resolving transit insurance claims with insurance underwriters.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Doc Section 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingDocThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDocThree" aria-expanded="false" aria-controls="collapseDocThree">
                                        <i class="bi bi-shield-fill-check"></i> 3. Security Standards
                                    </button>
                                </h2>
                                <div id="collapseDocThree" class="accordion-collapse collapse" aria-labelledby="headingDocThree" data-bs-parent="#privacyDocAccordion">
                                    <div class="accordion-body">
                                        We maintain a strict data security system. Your address lists and phone numbers are never shared or sold to third-party telemarketing or advertising agencies. Access is strictly limited to operations coordinates and dispatch managers executing your shifting order.
                                    </div>
                                </div>
                            </div>

                            <!-- Doc Section 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingDocFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDocFour" aria-expanded="false" aria-controls="collapseDocFour">
                                        <i class="bi bi-pencil-square"></i> 4. Policy Updates
                                    </button>
                                </h2>
                                <div id="collapseDocFour" class="accordion-collapse collapse" aria-labelledby="headingDocFour" data-bs-parent="#privacyDocAccordion">
                                    <div class="accordion-body">
                                        We may dynamically update this privacy policy to match legal shifts or updated logistics technologies. Revised dates and policies will be posted on this page.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Right Side Sidebar (col-lg-4) -->
                <div class="col-lg-4">
                    <?php $this->load->view('about/company_sidebar', ['active_link' => 'privacy']); ?>
                </div>
            </div>
        </div>
    </section>
</div>