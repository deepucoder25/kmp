<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function homeRelocation()
    {
        $data['title'] = "Best Packers and Movers for Home Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Get professional and affordable home relocation services. Hire our verified packers and movers for safe, reliable, and hassle-free household shifting.";
        $data['module'] = "services";
        $data['view_file'] = "home_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function officeRelocation()
    {
        $data['title'] = "Best Office Relocation & Commercial Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Minimize downtime with our secure corporate office relocation services. Get professional and hassle-free commercial shifting at budget-friendly rates.";
        $data['module'] = "services";
        $data['view_file'] = "office_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function packingUnpacking()
    {
        $data['title'] = "Professional Packing and Unpacking Services | " . $this->comp['company3'];
        $data['description'] = "Ensure the safety of your goods with professional packing and unpacking services. We use high-quality materials to protect your belongings during transit.";
        $data['module'] = "services";
        $data['view_file'] = "packing_unpacking";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Safe Loading and Unloading Services for Shifting | " . $this->comp['company3'];
        $data['description'] = "Prevent damage to your goods with our expert loading and unloading services. Our trained team ensures safe handling and transit of your heavy belongings.";
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }

    function householdShifting()
    {
        $data['title'] = "Reliable Household Shifting & Local Home Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Get safe, secure, and professional household shifting services. We offer reliable local and domestic home relocation at affordable shifting charges.";
        $data['module'] = "services";
        $data['view_file'] = "household_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function bikeTransportation()
    {
        $data['title'] = "Safe Bike Transportation & Two-Wheeler Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Shift your two-wheeler safely with our premium bike transportation services. We use specialized carriers for scratch-free, timely delivery of your motorcycle.";
        $data['module'] = "services";
        $data['view_file'] = "bike_transportation";
        echo Modules::run('template/layout2', $data);
    }

    function carTransportation()
    {
        $data['title'] = "Secure Car Transportation & Carrier Services | " . $this->comp['company3'];
        $data['description'] = "Relocate your car securely with our professional car carrier and transportation services. We ensure safe, closed-cage transit and on-time door-to-door delivery.";
        $data['module'] = "services";
        $data['view_file'] = "car_transportation";
        echo Modules::run('template/layout2', $data);
    }

    function warehouseStorage()
    {
        $data['title'] = "Secure Warehouse & Household Goods Storage Services | " . $this->comp['company3'];
        $data['description'] = "Store your household goods or commercial items in our clean, safe, and secure warehousing facilities. We offer short-term and long-term storage options.";
        $data['module'] = "services";
        $data['view_file'] = "warehouse_storage";
        echo Modules::run('template/layout2', $data);
    }

    function doorToDoorShifting()
    {
        $data['title'] = "Hassle-Free Door-to-Door Relocation & Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Enjoy seamless moving with our professional door-to-door relocation and household shifting services. We handle everything from packing at origin to unpacking at destination.";
        $data['module'] = "services";
        $data['view_file'] = "door_to_door_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function cargoServices()
    {
        $data['title'] = "Best Domestic Cargo Shifting & Logistics Courier Services | " . $this->comp['company3'];
        $data['description'] = "Reliable, fast, and secure domestic cargo shipping and logistics solutions. Get parcel delivery, freight forwarding, and commercial cargo moving services.";
        $data['module'] = "services";
        $data['view_file'] = "cargo_services";
        echo Modules::run('template/layout2', $data);
    }
}
