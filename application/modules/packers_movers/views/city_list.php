<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packers and Movers in ' . ucwords($state),
    'bc_desc' => 'Find verified and professional packers and movers in ' . ucwords($state) . '. Discover our network branches and book reliable shifting services.',
    'breadcrumbs' => [
        ['name' => 'Our Branches', 'url' => site_url('our-branches')],
        ['name' => ucwords($state)],

    ]
]);
?>
<div class="pm-list-service-page">
    <div class="container pm-list-feature-section">
        <div class="row">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct):
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                ?>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>"
                        class="pm-list-city-card-link d-block h-100 text-decoration-none">
                        <div class="pm-list-city-card text-center h-100">
                            <!-- Location Icon -->
                            <div class="pm-list-icon-circle">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <!-- City Name -->
                            <h6 class="pm-list-title mb-0"><?= htmlspecialchars($ct['nm']) ?></h6>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</main>