<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Car Transportation',
    'bc_desc' => 'Safe and efficient car carrier and transportation services by ' . $company3 . '. Fully insured transit, specialized enclosed trailers, and real-time tracking across India.',
    'breadcrumbs' => [
        ['name' => 'Car Transportation']
    ]
]);
?>

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content">
                </div>
            </div>
        </div>
    </div>
</section>
