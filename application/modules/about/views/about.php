<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About Us',
    'bc_desc' => 'Learn more about ' . $company3 . ', the leading packing and moving company in India. Discover our history, mission, and professional relocation standards.',
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]);
?>

<!-- Main Page Content Section -->
<section class="mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-12">
                <div class="service-main-content">


                </div>
            </div>


        </div>
    </div>
</section>