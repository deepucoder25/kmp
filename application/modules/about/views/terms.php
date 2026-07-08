<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Terms and Conditions',
    'bc_desc' => 'Review our terms of service, shifting policies, and booking guidelines to understand customer rights and insurance protection terms.',
    'breadcrumbs' => [
        ['name' => 'Terms and Conditions']
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
                            <i class="bi bi-file-earmark-text-fill"></i> Agreement Policy
                        </span>
                        
                        <h2 class="about-title-premium">
                            Terms & <span>Conditions</span>
                        </h2>
                        
                        <p class="about-lead-desc">
                            Please read these terms and conditions carefully before booking your move with <strong><?= $company3 ?></strong>. Hacking or booking shifting order implies acceptance of these guidelines.
                        </p>

                        <!-- Premium Document Accordion -->
                        <div class="accordion about-doc-accordion" id="termsDocAccordion">
                            
                            <!-- Doc Section 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTermsOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTermsOne" aria-expanded="true" aria-controls="collapseTermsOne">
                                        <i class="bi bi-check-circle-fill"></i> 1. Booking & Rescheduling
                                    </button>
                                </h2>
                                <div id="collapseTermsOne" class="accordion-collapse collapse show" aria-labelledby="headingTermsOne" data-bs-parent="#termsDocAccordion">
                                    <div class="accordion-body">
                                        Shifting dates are officially locked only after we receive a token advance payment. Rescheduling requests must be sent at least 48 hours in advance, subject to slot availability on the requested dates.
                                    </div>
                                </div>
                            </div>

                            <!-- Doc Section 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTermsTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTermsTwo" aria-expanded="false" aria-controls="collapseTermsTwo">
                                        <i class="bi bi-wallet2"></i> 2. Quotation Estimates & Payments
                                    </button>
                                </h2>
                                <div id="collapseTermsTwo" class="accordion-collapse collapse" aria-labelledby="headingTermsTwo" data-bs-parent="#termsDocAccordion">
                                    <div class="accordion-body">
                                        <p>Our relocation quotation is calculated based on the itemized inventory checklist provided during booking. Additional items loaded on shifting day will be charged extra. Payment terms are as follows:</p>
                                        <ul class="about-doc-list">
                                            <li>The outstanding balance invoice must be cleared upon loading completion.</li>
                                            <li>Government service taxes (GST), municipal entry tolls, and green tax receipt costs are billed on actuals.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Doc Section 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTermsThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTermsThree" aria-expanded="false" aria-controls="collapseTermsThree">
                                        <i class="bi bi-exclamation-triangle-fill"></i> 3. Restricted & Prohibited Items
                                    </button>
                                </h2>
                                <div id="collapseTermsThree" class="accordion-collapse collapse" aria-labelledby="headingTermsThree" data-bs-parent="#termsDocAccordion">
                                    <div class="accordion-body">
                                        <p>For safety reasons during road cargo transit, the following items are strictly prohibited. We are not liable for packing or moving these under any circumstances:</p>
                                        
                                        <div class="about-doc-alert-box">
                                            <h5><i class="bi bi-shield-slash-fill"></i> Danger - Strictly Prohibited List</h5>
                                            <ul class="about-doc-alert-list">
                                                <li><strong>Hazardous/Flammable:</strong> Gas cylinders, liquid fuels, oils, kerosene, chemicals, and matches.</li>
                                                <li><strong>High-Value Items:</strong> Gold or silver ornaments, currency cash, original property deeds, bank lockers files, and personal laptops.</li>
                                                <li><strong>Transit Risk:</strong> Pet animals, liquid containers, and live house plants (for interstate shipping).</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Doc Section 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTermsFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTermsFour" aria-expanded="false" aria-controls="collapseTermsFour">
                                        <i class="bi bi-shield-fill-check"></i> 4. Shifting Insurance & Claims
                                    </button>
                                </h2>
                                <div id="collapseTermsFour" class="accordion-collapse collapse" aria-labelledby="headingTermsFour" data-bs-parent="#termsDocAccordion">
                                    <div class="accordion-body">
                                        <p>We offer cargo transit insurance policies. In case of transit damage, customers must declare the issue on the delivery receipt copy during unloading:</p>
                                        <ul class="about-doc-list">
                                            <li>Damage claims must be sent in writing within 48 hours of shipment delivery.</li>
                                            <li>Claim values are resolved subject to the guidelines and inspection of the insurance underwriter.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Right Side Sidebar (col-lg-4) -->
                <div class="col-lg-4">
                    <?php $this->load->view('about/company_sidebar', ['active_link' => 'terms']); ?>
                </div>
            </div>
        </div>
    </section>
</div>