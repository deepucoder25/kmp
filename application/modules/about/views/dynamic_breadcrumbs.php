<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Build Schema for Breadcrumbs
$schema_items = [];
$schema_items[] = [
    '@type' => 'ListItem',
    'position' => 1,
    'name' => 'Home',
    'item' => site_url()
];

$position = 2;
if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    foreach ($breadcrumbs as $crumb) {
        $name = isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '');
        $url = (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)') ? $crumb['url'] : null;

        $item = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $name
        ];
        if ($url) {
            // Need absolute URL for schema if it's relative, but site_url() or base_url() is often used in $crumb['url']
            // If it's just a fragment, we assume it's correctly formatted by the controller/view.
            $item['item'] = $url;
        }
        $schema_items[] = $item;
        $position++;
    }
} else if (isset($bc_current) && !empty($bc_current)) {
    $schema_items[] = [
        '@type' => 'ListItem',
        'position' => $position,
        'name' => $bc_current
    ];
}

$schema_json = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $schema_items
];

?>

<script type="application/ld+json">
<?= json_encode($schema_json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- Breadcrumbs Section -->
<section class="dynamic-bc-section">
    <!-- Glowing background elements for premium feel -->
    <div class="bc-glow-sphere-1"></div>
    <div class="bc-glow-sphere-2"></div>
    <div class="bc-pattern-overlay"></div>
    
    <!-- Glitter Stars & Circles -->
    <div class="bc-glitter-container">
        <!-- Floating Circles -->
        <div class="bc-glitter-circle circle-xs circle-green" style="top: 15%; left: 15%; animation-delay: 0s;"></div>
        <div class="bc-glitter-circle circle-sm circle-orange" style="top: 40%; right: 25%; animation-delay: 1.5s;"></div>
        <div class="bc-glitter-circle circle-md circle-green" style="bottom: 45%; left: 35%; animation-delay: 3s;"></div>
        <div class="bc-glitter-circle circle-lg circle-orange" style="top: 20%; right: 10%; animation-delay: 4.5s;"></div>
        
        <!-- Twinkling Glitter Stars -->
        <i class="bi bi-sparkles bc-glitter-star star-orange" style="top: 25%; right: 20%; font-size: 16px; animation-delay: 0.5s;"></i>
        <i class="bi bi-star-fill bc-glitter-star star-gold" style="bottom: 50%; left: 12%; font-size: 11px; animation-delay: 2s;"></i>
        <i class="bi bi-sparkles bc-glitter-star star-white" style="top: 55%; left: 55%; font-size: 14px; animation-delay: 3.5s;"></i>
        <i class="bi bi-star-fill bc-glitter-star star-gold" style="top: 15%; left: 40%; font-size: 9px; animation-delay: 1s;"></i>
        <i class="bi bi-sparkles bc-glitter-star star-orange" style="bottom: 30%; right: 35%; font-size: 12px; animation-delay: 2.5s;"></i>
    </div>
    
    <div class="container">
        <div class="bc-content-wrapper">
            <nav class="dyn-bc-nav" aria-label="breadcrumb">
                <a href="<?= site_url() ?>" class="dyn-bc-item home-link">
                    <i class="bi bi-house-door-fill"></i>
                    <span>Home</span>
                </a>
                <?php if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)): ?>
                    <?php foreach ($breadcrumbs as $crumb): ?>
                        <span class="dyn-bc-sep"><i class="bi bi-chevron-right"></i></span>
                        <?php if (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)'): ?>
                            <a href="<?= $crumb['url'] ?>" class="dyn-bc-item"><?= isset($crumb['name']) ? $crumb['name'] : $crumb['title'] ?></a>
                        <?php else: ?>
                            <span class="dyn-bc-item dyn-bc-current"><?= isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '') ?></span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <span class="dyn-bc-sep"><i class="bi bi-chevron-right"></i></span>
                    <span class="dyn-bc-item dyn-bc-current"><?= isset($bc_current) ? $bc_current : '' ?></span>
                <?php endif; ?>
            </nav>
            
            <div class="bc-title-area">
                <h1>
                    <?php 
                    if (isset($bc_h1) && !empty($bc_h1)) {
                        echo $bc_h1;
                    } elseif (isset($bc_title_white) || isset($bc_title_orange)) {
                        $full_title = (isset($bc_title_white) ? $bc_title_white : '') . ' ' . (isset($bc_title_orange) ? $bc_title_orange : '');
                        // If it's a city shifting service, append city name dynamically if available
                        if (isset($city) && !empty($city) && strpos(strtolower($full_title), strtolower($city)) === false) {
                            $full_title .= ' ' . $city;
                        }
                        echo trim($full_title);
                    }
                    ?>
                </h1>
                <div class="bc-title-underline"></div>
            </div>
            
            <?php if (isset($bc_desc) && !empty($bc_desc)): ?>
                <p class="dyn-bc-desc"><?= $bc_desc ?></p>
            <?php endif; ?>
        </div>
    </div>

    <!-- SVG Wave Divider (Dual-Layered) -->
    <div class="bc-wave-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" preserveAspectRatio="none">
            <!-- Back Wave (Semi-transparent accent) -->
            <path class="back-wave" d="M0,32L48,37.3C96,43,192,53,288,58.7C384,64,480,64,576,58.7C672,53,768,43,864,42.7C960,43,1056,53,1152,53.3C1248,53,1344,43,1392,37.3L1440,32L1440,120L1392,120C1320,120,1200,120,1080,120C960,120,840,120,720,120C600,120,480,120,360,120C240,120,120,120,60,120L0,120Z"></path>
            <!-- Front Wave (Matches body background color) -->
            <path class="main-wave" d="M0,64L48,69.3C96,75,192,85,288,85.3C384,85,480,75,576,69.3C672,64,768,64,864,69.3C960,75,1056,85,1152,85.3C1248,85,1344,75,1392,69.3L1440,64L1440,120L1392,120C1320,120,1200,120,1080,120C960,120,840,120,720,120C600,120,480,120,360,120C240,120,120,120,60,120L0,120Z"></path>
        </svg>
    </div>
</section>