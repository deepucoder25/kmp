<!-- FOOTER SECTION -->
<?php
$floatingPhoneNumber = preg_replace('/\D+/', '', (string) $phone);
$floatingWhatsappLink = !empty($whatsapphtml)
  ? $whatsapphtml
  : (!empty($floatingPhoneNumber) ? 'https://wa.me/' . $floatingPhoneNumber : '#');
?>
<footer class="footer-section">
  <div class="footer-main">
    <div class="container">
      <div class="row g-4">
        
        <!-- Column 1: Company Info -->
        <div class="col-lg-3 col-md-6 col-12">
          <div class="footer-brand">
            <div class="footer-brand-title">
              <span class="text-orange">Kiran</span> <span class="text-green">Packers Movers</span>
            </div>
            <p class="footer-brand-copy">
              We are a professional packing and moving company dedicated to providing safe, secure & reliable moving solutions for homes and businesses.
            </p>
            
            <div class="footer-trust-list">
              <div class="trust-item">
                <span class="trust-icon-circle bg-orange"><i class="bi bi-shield-check"></i></span>
                <span class="trust-label">Safe & Secure Move</span>
              </div>
              <div class="trust-item">
                <span class="trust-icon-circle bg-green"><i class="bi bi-clock"></i></span>
                <span class="trust-label">On-Time Delivery</span>
              </div>
              <div class="trust-item">
                <span class="trust-icon-circle bg-orange"><i class="bi bi-people"></i></span>
                <span class="trust-label">Experienced Team</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Column 2: Our Services -->
        <div class="col-lg-2 col-md-6 col-6">
          <div class="footer-widget widget-orange">
            <h4>Our Services</h4>
            <ul>
              <li><a href="<?= site_url('household-shifting') ?>">Household Shifting</a></li>
              <li><a href="<?= site_url('office-relocation') ?>">Office Relocation</a></li>
              <li><a href="<?= site_url('packing-and-unpacking') ?>">Packing &amp; Unpacking</a></li>
              <li><a href="<?= site_url('loading-and-unloading') ?>">Loading &amp; Unloading</a></li>
              <li><a href="<?= site_url('bike-transportation') ?>">Bike Transportation</a></li>
              <li><a href="<?= site_url('car-transportation') ?>">Car Transportation</a></li>
              <li><a href="<?= site_url('warehouse-storage') ?>">Warehouse Storage</a></li>
              <li><a href="<?= site_url('door-to-door-shifting') ?>">Door-to-Door Shifting</a></li>
              <li><a href="<?= site_url('cargo-services') ?>">Cargo Services</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 3: Company -->
        <div class="col-lg-2 col-md-6 col-6">
          <div class="footer-widget widget-green">
            <h4>Company</h4>
            <ul>
              <li><a href="<?= site_url('about-us') ?>">About Us</a></li>
              <li><a href="<?= site_url('why-choose-us') ?>">Why Choose Us</a></li>
              <li><a href="<?= site_url('our-branches') ?>">Locations</a></li>
              <li><a href="<?= site_url('blog') ?>">Blog</a></li>
              <li><a href="<?= site_url('reviews') ?>">Reviews</a></li>
              <li><a href="<?= site_url('contact-us') ?>">Contact Us</a></li>
              <li><a href="<?= site_url('tracking') ?>">Tracking</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 4: Useful Links -->
        <div class="col-lg-2 col-md-6 col-6">
          <div class="footer-widget widget-orange">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="<?= site_url('testimonials') ?>">Testimonials</a></li>
              <li><a href="<?= site_url('faqs') ?>">FAQs</a></li>
              <li><a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
              <li><a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 5: Contact Us -->
        <div class="col-lg-3 col-md-6 col-12">
          <div class="footer-widget widget-green footer-contact-widget">
            <h4>Contact Us</h4>
            <div class="footer-contact-list-new">
              <div class="contact-item-new">
                <i class="bi bi-telephone text-orange"></i>
                <div class="contact-text-new">
                  <a href="<?= $phonehtml ?>" class="contact-link-new"><?= $phone ?></a>
                  <a href="<?= $phonehtml1 ?>" class="contact-link-new"><?= $phone1 ?></a>
                </div>
              </div>
              <a href="<?= $mailhtml ?>" class="contact-item-new">
                <i class="bi bi-envelope text-green"></i>
                <div class="contact-text-new">
                  <span><?= $mail ?></span>
                </div>
              </a>
              <div class="contact-item-new">
                <i class="bi bi-geo-alt text-orange"></i>
                <div class="contact-text-new">
                  <span><?= $address ?></span>
                </div>
              </div>
            </div>
            
            <div class="footer-social-section mt-4">
              <span class="social-title">Follow Us :</span>
              <div class="social-icons-row">
                <a href="<?= $facebookhtml ?>" class="social-icon fb" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="<?= $instagramhtml ?>" class="social-icon ig" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="<?= $whatsapphtml ?>" class="social-icon wa" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                <a href="<?= $youtubehtml ?>" class="social-icon yt" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom-new mt-4 pt-3">
        <div class="footer-bottom-content">
          <span class="footer-copyright">
            &copy; 2020 Kiran Packers Movers. We served all over India. All Rights Reserved.
          </span>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="floating-actions-new">
  <!-- Call Button Group -->
  <div class="float-btn-group">
    <button type="button" class="float-btn-circle float-call-btn" id="floatCallBtn" aria-expanded="false" title="Call Us">
      <i class="bi bi-telephone-fill"></i>
    </button>
    <div class="float-call-menu" id="floatCallMenu">
      <a href="<?= $phonehtml ?>" class="menu-item-call">
        <i class="bi bi-telephone-fill"></i> <?= $phone ?>
      </a>
      <a href="<?= $phonehtml1 ?>" class="menu-item-call">
        <i class="bi bi-telephone-fill"></i> <?= $phone1 ?>
      </a>
    </div>
  </div>

  <!-- WhatsApp Button -->
  <a href="<?= $floatingWhatsappLink ?>" class="float-btn-circle float-whatsapp-btn" title="WhatsApp Us" target="_blank" rel="noopener">
    <i class="bi bi-whatsapp"></i>
  </a>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const callBtn = document.getElementById("floatCallBtn");
  const callMenu = document.getElementById("floatCallMenu");
  
  if (callBtn && callMenu) {
    callBtn.addEventListener("click", function(e) {
      e.stopPropagation();
      const expanded = this.getAttribute("aria-expanded") === "true";
      this.setAttribute("aria-expanded", !expanded);
      callMenu.classList.toggle("show");
    });
    
    document.addEventListener("click", function(e) {
      if (!callMenu.contains(e.target) && e.target !== callBtn) {
        callBtn.setAttribute("aria-expanded", "false");
        callMenu.classList.remove("show");
      }
    });
  }
});
</script>

<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('contacts/review_modal'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/form.js"></script>
</body>

</html>