<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Contacts extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function index()
    {
        $data['title'] = "Contact " . $this->comp['company3'] . " | Packers and Movers " . $city;
        $data['description'] = "Get in touch with " . $this->comp['company3'] . " for all your shifting and vehicle transportation needs in " . $city . " & surrounding regions. Call us at " . $this->comp['phone'] . " or visit our office at " . $this->comp['address'] . ".";
        $data['module'] = "contacts";
        $data['view_file'] = "contacts";
        echo Modules::run('template/layout2', $data);
    }


    function booking()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        $this->form_validation->set_rules('email', "Email", 'trim|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'trim');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->bookings();
            if ($check == true) {
                echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }

    function contact()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->contact();
            if ($check == true) {
                echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }





}