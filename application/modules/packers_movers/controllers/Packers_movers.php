<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Packers_movers extends MX_Controller
{

    function index()
    {
        $data['title'] = "Our Branches - All India Packers and Movers Network | " . $this->comp['company3'];
        $data['description'] = "Find " . $this->comp['company3'] . " branches and service locations across India. We offer reliable, long-distance domestic relocation services nationwide.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state()
    {
        $data['title'] = "Our Branches - All India Packers and Movers Network | " . $this->comp['company3'];
        $data['description'] = "Find " . $this->comp['company3'] . " branches and service locations across India. We offer reliable, long-distance domestic relocation services nationwide.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state_services($state)
    {
        $this->load->module('home');
        $this->home->oldurl_to_newurl();
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $data = array(
            "state" => $state,
            "title" => "Best Packers and Movers in $state | " . $this->comp['company3'],
            "description" => "Hire professional and reliable packers and movers in $state. " . $this->comp['company3'] . " offers top-quality household shifting and vehicle shipping services in $state.",
            "keywords" => "$state packers and movers, movers and packers in $state, shifting services in $state, " . $this->comp['company3'] . " $state",
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }
    function get_title($city, $state)
    { 
        $seo = array(
            // "Siliguri" => array(
            //     "title" => "",
            //     "desc" => ""
            // ),
        );
        foreach ($seo as $k => $s) {
            if ($k == $city) {
                return $s;
            }
        }
        //edit by Arshad 15-11-2024
        return array(
            'title' => "Best Packers and Movers in $city, $state | " . $this->comp['company3'],
            "desc" => "Hire top-rated packers and movers in $city, $state. " . $this->comp['company3'] . " offers reliable household shifting and vehicle transport services at affordable rates."
        );
    }
    function city($state = 'Bihar', $city = 'Patna')
    {
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $city = str_replace("_", " ", $city);
        $city = urldecode(ucwords(str_replace("-", " ", $city)));
        $seo = $this->get_title($city, $state);
        $statelink=strtolower($state);
        $data = array(
            "city" => $city,
            "state" => $state,
            // 'img' => base_url('assets') . "/images/state/google/$statelink.png",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "movers and packers in $city, Packers and movers in $city, Movers near me $city, Moving companies near me $city, Best packers and movers in $city, House shifting in $city, local shifting, " . $this->comp['company3'] . " $city",
            "module" => "packers_movers",
            "view_file" => "view_service",
        );
        echo Modules::run('template/layout2', $data);
    }
   
}
