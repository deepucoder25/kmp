  <div class="hero-quote-card-container" itemscope itemtype="https://schema.org/QuoteAction">
            <!-- Card Header -->
            <div class="hero-quote-header">
              <h3 class="hero-quote-title" itemprop="name">Get Your Best Moving Quote</h3>
              <p class="hero-quote-subtitle" itemprop="description">Quick, Fast & Free Estimates</p>
            </div>
            
            <div class="hero-quote-white-card">
              <!-- Card Body / Form -->
              <div class="card-body-form">
                <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
                  
                  <div class="row g-2">
                    <!-- Name Input -->
                    <div class="col-lg-6 col-md-6 col-6">
                      <div class="input-wrap-custom">
                        <i class="bi bi-person input-icon-custom"></i>
                        <input type="text" name="name" class="form-control-custom" placeholder="Your Name" >
                      </div>
                    </div>
                    
                    <!-- Phone Input -->
                    <div class="col-lg-6 col-md-6 col-6">
                      <div class="input-wrap-custom">
                        <i class="bi bi-telephone input-icon-custom"></i>
                        <input type="tel" name="phone" class="form-control-custom" placeholder="Phone Number" >
                      </div>
                    </div>
                    
                    <!-- Select Service -->
                    <div class="col-lg-12 col-md-12 col-12">
                      <div class="input-wrap-custom select-wrap-custom">
                        <span class="select-label-custom">Select Service</span>
                        <select name="mtype" class="form-select-custom" >
                          <option value="" disabled selected>Select Service</option>
                          <option>Household Relocation</option>
                          <option>Office Relocation</option>
                          <option>Car/Bike Shifting</option>
                          <option>Warehousing</option>
                        </select>
                      </div>
                    </div>
                    
                    <!-- Moving From -->
                    <div class="col-lg-6 col-md-6 col-6">
                      <div class="input-wrap-custom">
                        <i class="bi bi-geo-alt input-icon-custom"></i>
                        <input type="text" name="mfrom" class="form-control-custom" value="<?= @$city ?>" placeholder="Moving From" >
                      </div>
                    </div>
                    
                    <!-- Moving To -->
                    <div class="col-lg-6 col-md-6 col-6">
                      <div class="input-wrap-custom">
                        <i class="bi bi-geo-alt input-icon-custom"></i>
                        <input type="text" name="mto" class="form-control-custom" placeholder="Moving To" >
                      </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="col-12">
                      <button type="submit" class="btn-submit-custom">
                        <i class="bi bi-send submit-btn-icon-desktop"></i>
                        <i class="bi bi-file-earmark-text submit-btn-icon-mobile"></i>
                        <span>Get Quote</span>
                      </button>
                    </div>
                  </div>
                  
                  <div id="quoteformresults"></div>
                </form>
              </div>
              
              <!-- Card Footer / Simple Trust Bar -->
              <div class="card-footer-trust-simple text-center py-2">
                <span class="trust-simple-text">
                  <i class="bi bi-check-circle-fill"></i> IBA Approved • ISO Certified • No Hidden Charges
                </span>
              </div>
            </div>

          </div>