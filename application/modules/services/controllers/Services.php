<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function homeRelocation()
    {
        $city = $this->comp['addressRegion'];
        $data['title'] = "Best Home Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional home shifting and household relocation services from " . $this->comp['company3'] . " in " . $city . ".";
        $data['module'] = "services";
        $data['view_file'] = "home_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function officeRelocation()
    {
        $city = $this->comp['addressRegion'];
        $data['title'] = "Professional Office Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure commercial and office shifting services in " . $city . " by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "office_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function packingUnpacking()
    {
        $data['title'] = "Packing and Unpacking Services | " . $this->comp['company3'];
        $data['description'] = "Secure packing and unpacking services by " . $this->comp['company3'] . " using high quality packaging materials.";
        $data['module'] = "services";
        $data['view_file'] = "packing_unpacking";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $city = $this->comp['addressRegion'];
        $data['title'] = "Safe Loading and Unloading Services | " . $this->comp['company3'];
        $data['description'] = "Safe and professional loading and unloading services in " . $city . " by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }

    function householdShifting()
    {
        $city = $this->comp['addressRegion'];
        $data['title'] = "Best Household Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional household shifting and home relocation services from " . $this->comp['company3'] . " in " . $city . ".";
        $data['module'] = "services";
        $data['view_file'] = "household_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function bikeTransportation()
    {
        $city = $this->comp['addressRegion'];
        $data['title'] = "Reliable Bike Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike shifting carrier services from " . $this->comp['company3'] . " in " . $city . ".";
        $data['module'] = "services";
        $data['view_file'] = "bike_transportation";
        echo Modules::run('template/layout2', $data);
    }

    function carTransportation()
    {
        $city = $this->comp['addressRegion'];
        $data['title'] = "Safe Car Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and transportation services in " . $city . " by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "car_transportation";
        echo Modules::run('template/layout2', $data);
    }

    function warehouseStorage()
    {
        $city = $this->comp['addressRegion'];
        $data['title'] = "Secure Warehouse and Storage Services | " . $this->comp['company3'];
        $data['description'] = "Safe, temperature-controlled, and secure warehouse storage facilities by " . $this->comp['company3'] . " in " . $city . ".";
        $data['module'] = "services";
        $data['view_file'] = "warehouse_storage";
        echo Modules::run('template/layout2', $data);
    }

    function doorToDoorShifting()
    {
        $city = $this->comp['addressRegion'];
        $data['title'] = "Door-to-Door Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Convenient door-to-door relocation and household shifting services by " . $this->comp['company3'] . " in " . $city . ".";
        $data['module'] = "services";
        $data['view_file'] = "door_to_door_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function cargoServices()
    {
        $city = $this->comp['addressRegion'];
        $data['title'] = "Domestic Cargo & Logistics Services | " . $this->comp['company3'];
        $data['description'] = "Reliable domestic cargo shipping, freight forwarding, and logistic solutions by " . $this->comp['company3'] . " in " . $city . ".";
        $data['module'] = "services";
        $data['view_file'] = "cargo_services";
        echo Modules::run('template/layout2', $data);
    }
}
