<body>
  <?php
  $megaWhatsappLink = !empty($whatsapphtml) ? $whatsapphtml : '#';

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
    $active_tab = 'home';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials'])) {
    $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'home-relocation', 'office-relocation', 'packing-and-unpacking', 'loading-and-unloading', 'household-shifting', 'bike-transportation', 'car-transportation', 'warehouse-storage', 'door-to-door-shifting', 'cargo-services'])) {
    $active_tab = 'services';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-branches') {
    $active_tab = 'locations';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
    $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
    $active_tab = 'contact';
  } elseif ($class === 'tracking' || $segment1 === 'tracking') {
    $active_tab = 'tracking';
  }
  ?>

  <!-- Slim Top Bar -->
  <div class="top-bar">
    <div class="container">
      <!-- Desktop Top Bar -->
      <div class="top-bar-desktop d-none d-lg-flex justify-content-between align-items-center">
        <!-- Left Side: Email & Phone -->
        <div class="top-bar-left d-flex align-items-center gap-3">
          <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-2">
            <i class="bi bi-envelope"></i> <span><?= $mail ?></span>
          </a>
          <span class="divider-line">|</span>
          <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-2">
            <i class="bi bi-telephone"></i> <span><?= $phone ?></span>
          </a>
        </div>

        <!-- Middle-Left: Trust Badge & Happy Customers -->
        <div class="top-bar-middle d-flex align-items-center gap-3">
          <span class="top-badge-text d-flex align-items-center gap-2">
            <i class="bi bi-shield-check text-primary-light"></i> <span>Verified & Trusted</span>
          </span>
          <span class="divider-line">|</span>
          <span class="top-badge-text d-flex align-items-center gap-2">
            <i class="bi bi-people"></i> <span><?= $happyClients ?> Happy Customers</span>
          </span>
        </div>

        <!-- Right Side: Offer & Reviews Badges -->
        <div class="top-bar-right d-flex align-items-center gap-2">
          <span class="top-badge-pill highlight-offer">
            <i class="bi bi-lightning-fill text-warning"></i> 10% OFF ON YOUR FIRST MOVE
          </span>
          <span class="top-badge-pill highlight-rating">
            <i class="bi bi-star-fill text-warning"></i> <?= $ratingValue ?> Google Reviews
          </span>
        </div>
      </div>

      <!-- Mobile Top Bar -->
      <div class="top-bar-mobile d-flex d-lg-none flex-column gap-2 py-1">
        <!-- Row 1: Contact Info -->
        <div class="d-flex justify-content-center align-items-center gap-3">
          <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-1">
            <i class="bi bi-envelope"></i> <span><?= $mail ?></span>
          </a>
          <span class="divider-line">|</span>
          <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-1">
            <i class="bi bi-telephone"></i> <span><?= $phone ?></span>
          </a>
        </div>
        <!-- Row 2: Offer & Google Reviews -->
        <div class="d-flex justify-content-center align-items-center gap-2">
          <span class="top-badge-pill highlight-offer">
            <i class="bi bi-lightning-fill text-warning"></i> 10% OFF ON YOUR FIRST MOVE
          </span>
          <span class="top-badge-pill highlight-rating">
            <i class="bi bi-star-fill text-warning"></i> <?= $ratingValue ?> Google Reviews
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- SEO Friendly SiteNavigationElement Schema -->
  <?php
  $nav_schema = [
    "@context" => "https://schema.org",
    "@graph" => [
      ["@type" => "SiteNavigationElement", "name" => "Home", "url" => site_url()],
      ["@type" => "SiteNavigationElement", "name" => "About Us", "url" => site_url('about-us')],
      ["@type" => "SiteNavigationElement", "name" => "Services", "url" => site_url('our-services')],
      ["@type" => "SiteNavigationElement", "name" => "Locations", "url" => site_url('our-branches')],
      ["@type" => "SiteNavigationElement", "name" => "Blog", "url" => site_url('blog')],
      ["@type" => "SiteNavigationElement", "name" => "Contact Us", "url" => site_url('contact-us')],
      ["@type" => "SiteNavigationElement", "name" => "Track", "url" => site_url('tracking')]
    ]
  ];
  ?>
  <script type="application/ld+json">
  <?= json_encode($nav_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
  </script>

  <!-- Main Sticky Header -->
  <header class="main-header" id="mainHeader">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a href="<?= site_url() ?>" class="brand-wrap">
        <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?>" class="brand-logo" loading="lazy">
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="desktop-nav d-none d-lg-flex align-items-center gap-4" itemscope
        itemtype="https://schema.org/SiteNavigationElement">
        <a itemprop="url" href="<?= site_url() ?>" class="nav-link<?= $active_tab === 'home' ? ' active' : '' ?>"><span
            itemprop="name">Home</span></a>
            
        <div class="nav-item dropdown">
          <a href="<?= site_url('about-us') ?>"
            class="nav-link dropdown-toggle<?= $active_tab === 'about' ? ' active' : '' ?>">About Us <i
              class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item<?= $segment1 === 'about-us' ? ' active' : '' ?>"
                href="<?= site_url('about-us') ?>"><i class="bi bi-people me-2"></i> About Us</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'why-choose-us' ? ' active' : '' ?>"
                href="<?= site_url('why-choose-us') ?>"><i class="bi bi-check-circle me-2"></i> Why Choose Us</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'faqs' ? ' active' : '' ?>"
                href="<?= site_url('faqs') ?>"><i class="bi bi-question-circle me-2"></i> FAQ</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'testimonials' ? ' active' : '' ?>"
                href="<?= site_url('testimonials') ?>"><i class="bi bi-chat-left-quote me-2"></i> Testimonial</a></li>
          </ul>
        </div>
        
        <div class="nav-item dropdown">
          <a href="<?= site_url('our-services') ?>"
            class="nav-link dropdown-toggle<?= $active_tab === 'services' ? ' active' : '' ?>">Services <i
              class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item<?= $segment1 === 'home-relocation' ? ' active' : '' ?>"
                href="<?= site_url('home-relocation') ?>"><i class="bi bi-house-door me-2"></i> Home Relocation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'office-relocation' ? ' active' : '' ?>"
                href="<?= site_url('office-relocation') ?>"><i class="bi bi-building me-2"></i> Office Relocation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'packing-and-unpacking' ? ' active' : '' ?>"
                href="<?= site_url('packing-and-unpacking') ?>"><i class="bi bi-box-seam me-2"></i> Packing &amp; Unpacking</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'loading-and-unloading' ? ' active' : '' ?>"
                href="<?= site_url('loading-and-unloading') ?>"><i class="bi bi-truck-flatbed me-2"></i> Loading &amp; Unloading</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'household-shifting' ? ' active' : '' ?>"
                href="<?= site_url('household-shifting') ?>"><i class="bi bi-house-heart me-2"></i> Household Shifting</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'bike-transportation' ? ' active' : '' ?>"
                href="<?= site_url('bike-transportation') ?>"><i class="bi bi-bicycle me-2"></i> Bike Transportation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'car-transportation' ? ' active' : '' ?>"
                href="<?= site_url('car-transportation') ?>"><i class="bi bi-car-front me-2"></i> Car Transportation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'warehouse-storage' ? ' active' : '' ?>"
                href="<?= site_url('warehouse-storage') ?>"><i class="bi bi-building-down me-2"></i> Warehouse Storage</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'door-to-door-shifting' ? ' active' : '' ?>"
                href="<?= site_url('door-to-door-shifting') ?>"><i class="bi bi-door-open me-2"></i> Door-to-Door Shifting</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'cargo-services' ? ' active' : '' ?>"
                href="<?= site_url('cargo-services') ?>"><i class="bi bi-globe-americas me-2"></i> Cargo Services</a></li>
          </ul>
        </div>
        
        <a href="<?= site_url('our-branches') ?>"
          class="nav-link<?= $active_tab === 'locations' ? ' active' : '' ?>">Locations</a>
        <a href="<?= site_url('blog') ?>" class="nav-link<?= $active_tab === 'blog' ? ' active' : '' ?>">Blog</a>
        <a href="<?= site_url('contact-us') ?>"
          class="nav-link<?= $active_tab === 'contact' ? ' active' : '' ?>">Contact Us</a>
        <a href="<?= site_url('tracking') ?>"
          class="nav-link<?= $active_tab === 'tracking' ? ' active' : '' ?>">Track</a>
      </nav>

      <!-- Header Action Buttons -->
      <div class="d-flex align-items-center gap-3">
        <!-- Get a Quote Button -->
        <a href="#" class="btn-quote d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
          <i class="bi bi-file-earmark-text"></i>
          <span>Get a Quote</span>
        </a>

        <!-- Hamburger for Mobile -->
        <button class="hamburger d-flex d-lg-none" id="openMenu" aria-label="Open navigation menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Full Screen Mega Menu (overlay menu when clicking hamburger) -->
  <nav class="mega-overlay" id="megaMenu" aria-label="Main navigation">
    <button class="mega-close" id="closeMenu" aria-label="Close navigation menu">
      <i class="bi bi-x"></i>
    </button>

    <div class="mega-inner">
      <!-- Top Brand Card -->
      <div class="mega-brand-card">
        <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?>" class="mega-logo">
        <h3 class="brand-title"><?= $company3 ?></h3>
        <p>Premium & trusted packers and movers service. Shifting made easy and secure.</p>
        <div class="mega-call-btn-container">
          <a href="<?= $phonehtml ?>" class="mega-call-primary">
            <i class="bi bi-telephone-fill"></i> Call: <?= $phone ?>
          </a>
          <?php if (!empty($phone1)): ?>
          <a href="<?= $phonehtml1 ?>" class="mega-call-primary">
            <i class="bi bi-telephone-fill"></i> Call: <?= $phone1 ?>
          </a>
          <?php endif; ?>
          <a href="<?= $megaWhatsappLink ?>" target="_blank" rel="noopener" class="mega-call-secondary">
            <i class="bi bi-whatsapp"></i> Chat on WhatsApp
          </a>
        </div>
      </div>

      <!-- Navigation Accordion -->
      <div class="mobile-nav-list">
        <div class="mobile-nav-item<?= $active_tab === 'home' ? ' active' : '' ?>">
          <a href="<?= site_url() ?>" class="mobile-nav-link"><i class="bi bi-house-door me-2"></i> Home</a>
        </div>

        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'about' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span><i class="bi bi-info-circle me-2"></i> About Us</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('about-us') ?>" class="<?= $segment1 === 'about-us' ? 'active' : '' ?>"><i class="bi bi-people me-2"></i> About Us</a>
            <a href="<?= site_url('why-choose-us') ?>" class="<?= $segment1 === 'why-choose-us' ? 'active' : '' ?>"><i class="bi bi-check-circle me-2"></i> Why Choose Us</a>
            <a href="<?= site_url('faqs') ?>" class="<?= $segment1 === 'faqs' ? 'active' : '' ?>"><i class="bi bi-question-circle me-2"></i> FAQ</a>
            <a href="<?= site_url('testimonials') ?>"
              class="<?= $segment1 === 'testimonials' ? 'active' : '' ?>"><i class="bi bi-chat-left-quote me-2"></i> Testimonial</a>
          </div>
        </div>

        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'services' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span><i class="bi bi-gear me-2"></i> Services</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('home-relocation') ?>"
              class="<?= $segment1 === 'home-relocation' ? 'active' : '' ?>"><i class="bi bi-house-door me-2"></i> Home Relocation</a>
            <a href="<?= site_url('office-relocation') ?>"
              class="<?= $segment1 === 'office-relocation' ? 'active' : '' ?>"><i class="bi bi-building me-2"></i> Office Relocation</a>
            <a href="<?= site_url('packing-and-unpacking') ?>"
              class="<?= $segment1 === 'packing-and-unpacking' ? 'active' : '' ?>"><i class="bi bi-box-seam me-2"></i> Packing &amp; Unpacking</a>
            <a href="<?= site_url('loading-and-unloading') ?>"
              class="<?= $segment1 === 'loading-and-unloading' ? 'active' : '' ?>"><i class="bi bi-truck-flatbed me-2"></i> Loading &amp; Unloading</a>
            <a href="<?= site_url('household-shifting') ?>"
              class="<?= $segment1 === 'household-shifting' ? 'active' : '' ?>"><i class="bi bi-house-heart me-2"></i> Household Shifting</a>
            <a href="<?= site_url('bike-transportation') ?>"
              class="<?= $segment1 === 'bike-transportation' ? 'active' : '' ?>"><i class="bi bi-bicycle me-2"></i> Bike Transportation</a>
            <a href="<?= site_url('car-transportation') ?>"
              class="<?= $segment1 === 'car-transportation' ? 'active' : '' ?>"><i class="bi bi-car-front me-2"></i> Car Transportation</a>
            <a href="<?= site_url('warehouse-storage') ?>"
              class="<?= $segment1 === 'warehouse-storage' ? 'active' : '' ?>"><i class="bi bi-building-down me-2"></i> Warehouse Storage</a>
            <a href="<?= site_url('door-to-door-shifting') ?>"
              class="<?= $segment1 === 'door-to-door-shifting' ? 'active' : '' ?>"><i class="bi bi-door-open me-2"></i> Door-to-Door Shifting</a>
            <a href="<?= site_url('cargo-services') ?>"
              class="<?= $segment1 === 'cargo-services' ? 'active' : '' ?>"><i class="bi bi-globe-americas me-2"></i> Cargo Services</a>
          </div>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'locations' ? ' active' : '' ?>">
          <a href="<?= site_url('our-branches') ?>" class="mobile-nav-link"><i class="bi bi-geo-alt me-2"></i> Locations</a>
        </div>
        <div class="mobile-nav-item<?= $active_tab === 'blog' ? ' active' : '' ?>">
          <a href="<?= site_url('blog') ?>" class="mobile-nav-link"><i class="bi bi-journal-text me-2"></i> Blog</a>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'contact' ? ' active' : '' ?>">
          <a href="<?= site_url('contact-us') ?>" class="mobile-nav-link"><i class="bi bi-telephone me-2"></i> Contact Us</a>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'tracking' ? ' active' : '' ?>">
          <a href="<?= site_url('tracking') ?>" class="mobile-nav-link"><i class="bi bi-truck me-2"></i> Track</a>
        </div>
      </div>

      <!-- Secondary Links -->
      <div class="mobile-sec-links">
        <a href="<?= site_url('photo-gallery') ?>"><i class="bi bi-images"></i> Gallery</a>
        <a href="<?= site_url('reviews') ?>"><i class="bi bi-star"></i> Reviews</a>
        <a href="<?= site_url('privacy-policy') ?>"><i class="bi bi-shield-lock"></i> Privacy Policy</a>
        <a href="<?= site_url('terms-and-conditions') ?>"><i class="bi bi-file-earmark-text"></i> Terms &amp; Conditions</a>
      </div>
    </div>
  </nav>

  <script>
    const openMenu = document.getElementById('openMenu'),
          closeMenu = document.getElementById('closeMenu'),
          megaMenu = document.getElementById('megaMenu'),
          body = document.body,
          mainHeader = document.getElementById('mainHeader');

    const toggleMenu = (isOpen) => {
      megaMenu.classList.toggle('active', isOpen);
      openMenu.classList.toggle('active', isOpen);
      body.classList.toggle('menu-open', isOpen);
    };

    openMenu.onclick = () => toggleMenu(true);
    closeMenu.onclick = () => toggleMenu(false);
    megaMenu.onclick = (e) => e.target === megaMenu && toggleMenu(false);
    document.onkeydown = (e) => {
      if (e.key === 'Escape') toggleMenu(false);
    };
    window.onscroll = () => mainHeader.classList.toggle('scrolled', window.scrollY > 20);

    document.querySelectorAll('.mobile-dropdown-toggle').forEach(btn => {
      btn.onclick = (e) => {
        e.preventDefault();
        const parent = btn.closest('.mobile-nav-item');
        document.querySelectorAll('.mobile-nav-item.mobile-dropdown').forEach(item => {
          if (item !== parent) item.classList.remove('active');
        });
        parent.classList.toggle('active');
      };
    });
  </script>