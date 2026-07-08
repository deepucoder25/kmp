<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "Best Packers and Movers Company - About Us | " . $this->comp['company3'];
        $data['description'] = "Learn more about our legacy, infrastructure, expert packing team, and commitment to providing safe, reliable, and affordable relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us for Relocation & Shifting | " . $this->comp['company3'];
        $data['description'] = "Discover what makes us the most trusted packers and movers. We offer transparent pricing, safe handling, transit insurance, and 24/7 client support.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Packers and Movers FAQs - Frequently Asked Questions | " . $this->comp['company3'];
        $data['description'] = "Find answers to common questions about house shifting charges, packing quality, transit safety, delivery times, insurance, and tracking consignment status.";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        $data['title'] = "Customer Reviews, Testimonials & Ratings | " . $this->comp['company3'];
        $data['description'] = "Read verified customer reviews and testimonials about our shifting and packers and movers services. See how we deliver absolute client satisfaction.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | " . $this->comp['company3'];
        $data['description'] = "How " . $this->comp['company3'] . " handles and protects your personal data during your relocation.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | " . $this->comp['company3'];
        $data['description'] = "The terms and conditions governing our relocation services at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }
}

