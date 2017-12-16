<?php
class Searchlisting extends Frontend_Controller
{
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('searchlist_m');
		$this->load->library("pagination");
	}
    public function index()
    {
        echo "hi";
    }
    public function search(){
        $config = array();
		$serv_adr= $_SERVER['REMOTE_ADDR'];
		
		$remote_adr= file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=c08c955231c546467bd7dd3e991538e161a9cdd8cd8a707db9d725432c3f3e63&ip=".$serv_adr."&format=json");
        $jsn_data= json_decode($remote_adr, true);
		//print_r($jsn_data);
		$_GET['latfrom']=$jsn_data['latitude'];
		$_GET['longfrom']=$jsn_data['longitude'];
        $config["base_url"] = base_url('index.php/searchlisting/search')."/".$this->data['lang_code'];
		
        $config["total_rows"] = $this->searchlist_m->record_count($_GET);
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
		/////js1aug-------
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['prev_link'] = 'prev';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		//$config['last_link'] = 'Last';
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		
		/////js1aug-------
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        //$this->data["results"] = $this->searchlist_m->_get_listing($_GET); 
        $this->data["links"] = $this->pagination->create_links();
         $this->data['record']=$this->searchlist_m->_get_listing($_GET, $page ,$config["per_page"]);  
		 $output = $this->parser->parse($this->data['settings_template'].'/'.'page_list_view.php', $this->data, TRUE);
        echo str_replace('assets/', base_url('templates/'.$this->data['settings_template']).'/assets/', $output);  
	}
	public function grid_view(){
		 $config = array();
		$serv_adr= $_SERVER['REMOTE_ADDR'];
		
		$remote_adr= file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=c08c955231c546467bd7dd3e991538e161a9cdd8cd8a707db9d725432c3f3e63&ip=".$serv_adr."&format=json");
        $jsn_data= json_decode($remote_adr, true);
		//print_r($jsn_data);
		$_GET['latfrom']=$jsn_data['latitude'];
		$_GET['longfrom']=$jsn_data['longitude'];
        $config["base_url"] = base_url('index.php/searchlisting/grid_view')."/".$this->data['lang_code'];
		
        $config["total_rows"] = $this->searchlist_m->record_count($_GET);
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
		/////js1aug-------
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['prev_link'] = 'prev';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		//$config['last_link'] = 'Last';
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		
		/////js1aug-------
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        //$this->data["results"] = $this->searchlist_m->_get_listing($_GET); 
        $this->data["links"] = $this->pagination->create_links();
         $this->data['record']=$this->searchlist_m->_get_listing($_GET, $page ,$config["per_page"]);  
		 $output = $this->parser->parse($this->data['settings_template'].'/'.'page_grid_view.php', $this->data, TRUE);
        echo str_replace('assets/', base_url('templates/'.$this->data['settings_template']).'/assets/', $output);         		 
	}
	
	public function full_view(){
		 $config = array();
		$serv_adr= $_SERVER['REMOTE_ADDR'];
		
		$remote_adr= file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=c08c955231c546467bd7dd3e991538e161a9cdd8cd8a707db9d725432c3f3e63&ip=".$serv_adr."&format=json");
        $jsn_data= json_decode($remote_adr, true);
		//print_r($jsn_data);
		$_GET['latfrom']=$jsn_data['latitude'];
		$_GET['longfrom']=$jsn_data['longitude'];
        $config["base_url"] = base_url('index.php/searchlisting/full_view')."/".$this->data['lang_code'];
		
        $config["total_rows"] = $this->searchlist_m->record_count($_GET);
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
		/////js1aug-------
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['prev_link'] = 'prev';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		//$config['last_link'] = 'Last';
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		
		/////js1aug-------
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        //$this->data["results"] = $this->searchlist_m->_get_listing($_GET); 
        $this->data["links"] = $this->pagination->create_links();
         $this->data['record']=$this->searchlist_m->_get_listing($_GET, $page ,$config["per_page"]);  
		 $output = $this->parser->parse($this->data['settings_template'].'/'.'full_view.php', $this->data, TRUE);
        echo str_replace('assets/', base_url('templates/'.$this->data['settings_template']).'/assets/', $output);            		 
	}
	
}