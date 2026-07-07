<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Us',
    'bc_desc' => 'Get in Touch with ' . $company3,
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]);
?>

<section class="contact-section py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Details -->
            <div class="col-lg-5">
                <div class="contact-details-box h-100">
                    <h2 class="contact-title-primary">Get In Touch</h2>
                    <p class="text-muted mb-5">Have questions or need a custom quote? Reach out to us, and our team will get back to you as soon as possible.</p>
                    
                    <div class="contact-info-row d-flex align-items-center">
                        <div class="contact-icon-wrapper icon-primary">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="contact-info-text">
                            <h6>Head Office</h6>
                            <p><?= $address ?></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-row d-flex align-items-center">
                        <div class="contact-icon-wrapper icon-secondary">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="contact-info-text">
                            <h6>Phone Number</h6>
                            <p>
                                <a href="<?= $phonehtml ?>" class="text-decoration-none"><?= $phone ?></a>
                                <?php if (!empty($phone1)): ?>
                                    <span class="mx-2" style="color: rgba(255,255,255,0.3)">/</span>
                                    <a href="<?= $phonehtml1 ?>" class="text-decoration-none"><?= $phone1 ?></a>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-info-row d-flex align-items-center">
                        <div class="contact-icon-wrapper icon-gold">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="contact-info-text">
                            <h6>Email Address</h6>
                            <p><a href="<?= $mailhtml ?>" class="text-decoration-none"><?= $mail ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="contact-form-box">
                    <h2 class="contact-title-primary">Send Us A Message</h2>
                    <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Your Name *</label>
                                <input type="text" name="name" class="form-control contact-input-rounded" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control contact-input-rounded" placeholder="Mobile Number" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control contact-input-rounded" placeholder="hello@example.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Your Message</label>
                                <textarea name="message" class="form-control contact-input-rounded" rows="5" placeholder="How can we help you?"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="contact-btn-rounded w-100">
                                    <i class="bi bi-send-fill"></i> Send Message
                                </button>
                            </div>
                        </div>
                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>