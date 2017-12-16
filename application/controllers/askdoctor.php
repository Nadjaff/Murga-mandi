<?php
class Askdoctor extends Frontend_Controller
{
    public function __construct ()

	{

		parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
		$this->load->model('askquestion_m');
	}
    public function index()
    {
        echo "hi";
    }
    public function doctor(){
		
		  
		 $output = $this->parser->parse($this->data['settings_template'].'/'.'doctor.php', $this->data, TRUE);
        echo str_replace('assets/', base_url('templates/'.$this->data['settings_template']).'/assets/', $output); 
	}
	public function doctor_profile(){
		
		  
		 $output = $this->parser->parse($this->data['settings_template'].'/'.'doctor_profile.php', $this->data, TRUE);
        echo str_replace('assets/', base_url('templates/'.$this->data['settings_template']).'/assets/', $output); 
	}
	public function qna_an(){
		$data = array();
		if(isset($_POST['post_comment'])){
		$data['comment'] = $this->input->post('comment');
		$data['answer_id'] = $this->input->post('answer_id');
		$data['question_id'] = $this->input->post('question_id');
		$data['doctor_id'] = $this->input->post('doctor_id');
		$data['cmnt_user'] = $this->input->post('cmnt_user');
		
		$res = $this->askquestion_m->comment_listing($data);
			if($res){
				redirect('askdoctor/qna_an'); 
			}
		/* $res2 = $this->askquestion_m->show_comment($data);
		 var_dump($res2);exit; */ 
		}
		 
		 $output = $this->parser->parse($this->data['settings_template'].'/'.'qna_an.php', $this->data, TRUE);
        echo str_replace('assets/', base_url('templates/'.$this->data['settings_template']).'/assets/', $output); 
	}
	
	public function ask_question(){
		//print_r($_POST);
		//print_r($_FILES); 
		if( $this->input->post('submit')) {
		
		 $config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"])."/user_image/";
		$config['overwrite'] = TRUE;		
		$config['file_name'] =   $_FILES['uploadedfile']['name'];
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
			//$config['file_name'] = $_FILES['uploadedfile']['name'];	
         $this->load->library('upload',$config);			
			$this->upload->initialize($config);
			if($this->upload->do_upload('uploadedfile')){
			$uploadData = $this->upload->data();
			$picture = $uploadData['file_name'];
			
		}	
			
		 $this->data['record']=$this->askquestion_m->_question_listing($picture);  
		  }
		 $output = $this->parser->parse($this->data['settings_template'].'/'.'ask_question.php', $this->data, TRUE);
        echo str_replace('assets/', base_url('templates/'.$this->data['settings_template']).'/assets/', $output); 
	}


}