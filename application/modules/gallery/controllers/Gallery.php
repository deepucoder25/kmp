<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function photo_gallery()
    {
        $data['title'] = "Shifting Photo Gallery | " . $this->comp['company3'];
        $data['description'] = "Explore photos of household shifting, office relocation, vehicle loading, and packing quality standard operations at " . $this->comp['company3'] . " in " . $city . ".";
        
        $this->db->where('status', 1);
        $this->db->order_by('auto_id', 'DESC');
        $data['photos'] = $this->db->get('gallery')->result();
        
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $data['title'] = "Relocation Videos & Work Demos | " . $this->comp['company3'];
        $data['description'] = "Watch live videos of our packing process, loading-unloading techniques, and customer feedbacks at " . $this->comp['company3'] . " in " . $city . ".";
        
        $this->db->where('status', 1);
        $this->db->order_by('auto_id', 'DESC');
        $data['videos'] = $this->db->get('video_gallery')->result();
        
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
}