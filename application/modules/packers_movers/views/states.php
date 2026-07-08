<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Branches',
    'bc_desc' => 'Explore ' . $company3 . ' network branches. Find local shifting services, booking offices, and contact details for packers and movers near you.',
    'breadcrumbs' => [
        ['name' => 'Our Branches']
    ]
]);
?>

<?php
$state = [
    [
        "image" => "haryana.jpg",
        "category" => "Haryana",
        "link" => "haryana"
    ],
    [
        "image" => "uttar-pradesh.jpg",
        "category" => "Uttar Pradesh",
        "link" => "uttar-pradesh"
    ],
];
?>

<!-- Branch Section -->
<section class="portfolio-area py-5 bg-light">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Our Presence Across <span class="pm-states-title-span">India</span>
            </h2>
            <p class="text-muted">
                Reliable packing and moving services available in major states.
            </p>
        </div>

        <div class="row g-4">

            <?php foreach ($state as $item): ?>

                <!-- 4 Columns in One Row on Desktop -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="pm-states-card position-relative rounded-4 overflow-hidden shadow">
                        <a href="<?= site_url($item['link']) ?>" class="pm-states-link-wrapper">
                            <!-- Image -->
                            <img class="pm-states-card-img" src="<?= base_url('assets/images/state/' . $item['image']) ?>" alt="<?= $item['category'] ?>">
                            
                            <!-- Gradient Overlay -->
                            <div class="pm-states-gradient"></div>
                            
                            <!-- Card Content -->
                            <div class="pm-states-content">
                                <span class="pm-states-badge">Branch Office</span>
                                <h4 class="pm-states-title"><?= htmlspecialchars($item['category']) ?></h4>
                                <div class="pm-states-action">
                                    <span>Explore Services</span>
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>