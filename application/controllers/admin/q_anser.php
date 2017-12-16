<?php



class Q_anser extends Admin_Controller

{



	public function __construct(){

		parent::__construct();

        //$this->load->model('qa_m');

        //$this->load->model('file_m');



        // Get language for content id to show in administration

        $this->data['content_language_id'] = $this->language_m->get_content_lang();

        

        $this->data['template_css'] = base_url('templates/'.$this->data['settings']['template']).'/'.config_item('default_template_css');

	}

    

    public function index()

	{

	   

		//$this->data['subview'] = 'admin/expert/index';

        $this->load->view('admin/_layout_main', $this->data);

	}

    

    

    

}