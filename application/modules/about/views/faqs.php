<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions',
    'bc_desc' => 'Got questions about your upcoming move? Read our FAQs on packers and movers rates, insurance, shifting processes, and safety guidelines.',
    'breadcrumbs' => [
        ['name' => 'Frequently Asked Questions']
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
                            <i class="bi bi-question-circle-fill"></i> Help Center
                        </span>
                        
                        <h2 class="about-title-premium">
                            Frequently Asked <span>Questions</span>
                        </h2>
                        
                        <p class="about-lead-desc">
                            Need help understanding your upcoming relocation process? Filter questions by category below to find detailed answers quickly.
                        </p>

                        <!-- Interactive Category Tab list -->
                        <div class="about-faq-tab-list">
                            <button type="button" class="about-faq-tab-btn active" data-filter="all">All Questions</button>
                            <button type="button" class="about-faq-tab-btn" data-filter="pricing">Pricing & Cost</button>
                            <button type="button" class="about-faq-tab-btn" data-filter="packing">Packing & Safety</button>
                            <button type="button" class="about-faq-tab-btn" data-filter="billing">Billing & GST</button>
                        </div>

                        <!-- FAQ Accordion List -->
                        <div class="accordion about-faq-accordion" id="faqAccordionParent">
                            
                            <!-- FAQ 1 (Pricing) -->
                            <div class="accordion-item faq-item" data-category="pricing">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How much do packers and movers charge?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordionParent">
                                    <div class="accordion-body">
                                        The total cost of hiring packers movers depends on multiple factors including the distance to destination, volume of household goods, quality of wrapping supplies required, and truck size. We provide free customized quotes after listing your items.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 (Pricing) -->
                            <div class="accordion-item faq-item" data-category="pricing">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Are there any hidden costs or surprise tolls?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordionParent">
                                    <div class="accordion-body">
                                        No. Kiran Packers and Movers provides standard quotes specifying all packing, labor, transit, and toll rates upfront. There are absolutely zero hidden fees or surprise costs.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 (Packing) -->
                            <div class="accordion-item faq-item" data-category="packing">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What packing materials do you use for fragile goods?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordionParent">
                                    <div class="accordion-body">
                                        We wrap electronics and glassware using multi-layered bubble wraps, high-density foam panels, stretch wraps, cardboard edge protectors, and specialized double-walled packaging containers.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 4 (Packing) -->
                            <div class="accordion-item faq-item" data-category="packing">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Do you provide transit insurance options?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordionParent">
                                    <div class="accordion-body">
                                        Yes. We provide transit insurance protection plans to secure your household furniture and vehicles against any unexpected external accidents or road damage during transit.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 5 (Billing) -->
                            <div class="accordion-item faq-item" data-category="billing">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Do you issue proper GST invoices for office claims?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordionParent">
                                    <div class="accordion-body">
                                        Yes, we provide legitimate GST invoices, consignment notes (LR copy), and itemized shifting lists so that corporate and government employees can smoothly claim relocation allowance reimbursements.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 6 (Billing) -->
                            <div class="accordion-item faq-item" data-category="billing">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        What are the standard payment terms?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordionParent">
                                    <div class="accordion-body">
                                        We collect a small booking token advance to confirm your shifting date. The remaining invoice amount can be cleared securely using cash, bank transfer, or UPI apps upon loading or delivery completion.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Right Side Sidebar (col-lg-4) -->
                <div class="col-lg-4">
                    <?php $this->load->view('about/company_sidebar', ['active_link' => 'faqs']); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Category filtering script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const tabButtons = document.querySelectorAll(".about-faq-tab-btn");
    const faqItems = document.querySelectorAll(".faq-item");

    tabButtons.forEach(button => {
        button.addEventListener("click", function () {
            // Remove active state from all tabs
            tabButtons.forEach(btn => btn.classList.remove("active"));
            // Add active state to clicked tab
            this.classList.add("active");

            const filter = this.getAttribute("data-filter");

            faqItems.forEach(item => {
                const category = item.getAttribute("data-category");

                if (filter === "all" || category === filter) {
                    // Show item
                    item.style.display = "block";
                } else {
                    // Hide item
                    item.style.display = "none";
                }
            });
        });
    });
});
</script>