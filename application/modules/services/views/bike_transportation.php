<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Bike Transportation',
    'bc_desc' => 'Professional bike transportation services by ' . $company3 . '. We offer secure packaging, specialized carriers, and damage-free delivery for your two-wheeler in India.',
    'breadcrumbs' => [
        ['name' => 'Bike Transportation']
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
