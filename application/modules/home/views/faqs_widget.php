<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$faqs = [
    [
        'question' => '1. What services do Kiran Packers Movers provide?',
        'answer' => 'We offer household shifting, office relocation, local shifting, domestic relocation, bike transportation, car transportation, loading & unloading, and packing & unpacking services.',
        'icon' => 'bi-shield-check'
    ],
    [
        'question' => '2. How much do packers and movers shifting services cost?',
        'answer' => 'The cost of hiring packers and movers depends on factors like travel distance, volume of goods, packing quality, and specific transport vehicle requirements. We offer competitive and transparent quotes with zero hidden fees.',
        'icon' => 'bi-people'
    ],
    [
        'question' => '3. Can I get a free price estimate before booking?',
        'answer' => 'Yes! We provide free, no-obligation moving estimates after assessing your items. You can request a quote online or contact our customer support team directly.',
        'icon' => 'bi-box-seam'
    ],
    [
        'question' => '4. Is my belongings insured during the move?',
        'answer' => 'Yes, we offer comprehensive transit insurance options to secure your valuable goods and vehicles against any unexpected losses or damages during transit.',
        'icon' => 'bi-truck'
    ],
    [
        'question' => '5. How far in advance should I book my move?',
        'answer' => 'We recommend booking your shifting services at least 3 to 7 days before your moving date to ensure smooth scheduling and proper coordination.',
        'icon' => 'bi-calendar-check'
    ],
    [
        'question' => '6. Do you offer storage and warehousing facilities?',
        'answer' => 'Yes, we have secure, pest-controlled, and round-the-clock guarded warehousing and storage units for short-term and long-term storage needs.',
        'icon' => 'bi-clock'
    ],
    [
        'question' => '7. Do you transport vehicles?',
        'answer' => 'Yes, we specialize in safe car transportation and bike shifting using dedicated open or closed car carriers across India.',
        'icon' => 'bi-car-front'
    ],
    [
        'question' => '8. What areas do you serve?',
        'answer' => 'We offer local packers and movers services within all major metropolitan cities and domestic household shifting services across all locations in India.',
        'icon' => 'bi-geo-alt'
    ],
    [
        'question' => '9. How long does a typical move take?',
        'answer' => 'Local shifting takes 4 to 8 hours depending on the size of the house, while domestic or intercity shifting depends on the distance between source and destination.',
        'icon' => 'bi-clock'
    ],
    [
        'question' => '10. What if something gets damaged?',
        'answer' => 'In the rare event of damage, our dedicated support team will assist you in filling out the claim documentation for quick resolution.',
        'icon' => 'bi-shield-check'
    ]
];
?>

<section class="faq-section-new py-5">
    <div class="container">
        <!-- Section Header (Using same classes as services/process section headers) -->
        <div class="services-header-new text-center mb-5">
            <div class="services-eyebrow-new">
                <h3 class="eyebrow-text">FAQS</h3>
                <div class="eyebrow-line-dots">
                    <span class="eyebrow-line"></span>
                    <span class="eyebrow-dot"></span>
                    <span class="eyebrow-line-short"></span>
                    <span class="eyebrow-dot"></span>
                    <span class="eyebrow-line-short"></span>
                    <span class="eyebrow-dot"></span>
                    <span class="eyebrow-line"></span>
                </div>
            </div>
            <h2 class="services-main-title-new mt-3">
                FREQUENTLY <span class="highlight-green">ASKED QUESTIONS</span>
            </h2>
            <p class="services-subtitle-new text-muted mt-2">
                Find quick answers to common questions about our moving services.
            </p>
        </div>

        <div class="row g-4 mt-2">
            <!-- Accordion split into 2 columns on desktop (Full Width) -->
            <div class="col-12">
                <div class="row g-3">
                    
                    <!-- Left Column: Questions 1 to 5 -->
                    <div class="col-md-6 col-12">
                        <div class="accordion" id="faqAccordionLeft">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <?php if (isset($faqs[$i])): ?>
                                    <div class="faq-card-new mb-3">
                                        <div class="faq-card-header collapsed"
                                             data-bs-toggle="collapse"
                                             data-bs-target="#faq-left-<?= $i ?>"
                                             aria-expanded="false"
                                             role="button">
                                            <div class="faq-icon-circle mr-3">
                                                <i class="bi <?= $faqs[$i]['icon'] ?>"></i>
                                            </div>
                                            <h3 class="faq-question-text m-0"><?= htmlspecialchars($faqs[$i]['question']) ?></h3>
                                            <span class="faq-arrow-btn">
                                                <i class="bi bi-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div id="faq-left-<?= $i ?>" class="collapse" data-bs-parent="#faqAccordionLeft">
                                            <div class="faq-card-body-new">
                                                <p class="faq-answer-text m-0">
                                                    <?= htmlspecialchars($faqs[$i]['answer']) ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <!-- Right Column: Questions 6 to 10 -->
                    <div class="col-md-6 col-12">
                        <div class="accordion" id="faqAccordionRight">
                            <?php for ($i = 5; $i < 10; $i++): ?>
                                <?php if (isset($faqs[$i])): ?>
                                    <div class="faq-card-new mb-3">
                                        <div class="faq-card-header collapsed"
                                             data-bs-toggle="collapse"
                                             data-bs-target="#faq-right-<?= $i ?>"
                                             aria-expanded="false"
                                             role="button">
                                            <div class="faq-icon-circle mr-3">
                                                <i class="bi <?= $faqs[$i]['icon'] ?>"></i>
                                            </div>
                                            <h3 class="faq-question-text m-0"><?= htmlspecialchars($faqs[$i]['question']) ?></h3>
                                            <span class="faq-arrow-btn">
                                                <i class="bi bi-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div id="faq-right-<?= $i ?>" class="collapse" data-bs-parent="#faqAccordionRight">
                                            <div class="faq-card-body-new">
                                                <p class="faq-answer-text m-0">
                                                    <?= htmlspecialchars($faqs[$i]['answer']) ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer Help/Contact Callout Bar -->
        <div class="faq-help-bar-new mt-5">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between gap-4">
                
                <!-- Left Part: Headphone Circle + Text Info -->
                <div class="d-flex align-items-center gap-3 help-left-wrap">
                    <div class="help-headphones-circle-new">
                        <div class="headphones-icon-wrap">
                            <i class="bi bi-headphones"></i>
                            <span class="headphones-text-247">24/7</span>
                        </div>
                    </div>
                    
                    <div class="help-left-divider d-none d-lg-block"></div>
                    
                    <div class="help-bar-text text-center text-lg-start">
                        <h4>STILL HAVE QUESTIONS?</h4>
                        <h3 class="help-subheading">WE'RE HERE TO HELP!</h3>
                        <p>Our support team is available 24/7 to assist you.</p>
                    </div>
                </div>

                <div class="help-center-divider d-none d-lg-block"></div>

                <!-- Right Part: Contact Details -->
                <div class="help-right-wrap d-flex flex-column flex-md-row align-items-center gap-4 flex-grow-1 justify-content-around">
                    
                    <!-- Call Us -->
                    <div class="help-bar-subitem d-flex align-items-center gap-3">
                        <div class="help-subicon-circle">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="help-subtext">
                            <p class="help-label">Call Us</p>
                            <a href="<?= $phonehtml ?>" class="help-value"><?= $phone ?></a>
                        </div>
                    </div>

                    <div class="help-subitem-divider d-none d-md-block"></div>

                    <!-- Email Us -->
                    <div class="help-bar-subitem d-flex align-items-center gap-3">
                        <div class="help-subicon-circle">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="help-subtext">
                            <p class="help-label">Email Us</p>
                            <a href="mailto:<?= $mail ?>" class="help-value"><?= $mail ?></a>
                        </div>
                    </div>

                    <div class="help-subitem-divider d-none d-md-block"></div>

                    <!-- Live Chat -->
                    <div class="help-bar-subitem d-flex align-items-center gap-3">
                        <div class="help-subicon-circle">
                            <i class="bi bi-chat-dots-fill"></i>
                        </div>
                        <div class="help-subtext">
                            <p class="help-label">Live Chat</p>
                            <span class="help-value">On Our Website</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>
