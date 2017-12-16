<?php

class Locate_map extends Frontend_Controller
{

	public function __construct ()

	{

		parent::__construct();
      /* $this->load->helper('form');
        $this->load->helper('html'); */
		$this->load->model('estate_m'); 
	}
    
	public function index()
    {
        echo "hi";
    }
	
	public function location_map(){
		
		$this->data['output_data'] = $this->estate_m->city_listing();
		 $output = $this->parser->parse($this->data['settings_template'].'/'.'location_map.php', $this->data, TRUE);
        echo str_replace('assets/', base_url('templates/'.$this->data['settings_template']).'/assets/', $output); 
	}
}