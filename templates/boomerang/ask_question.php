<?php 
$id =$_REQUEST['id'];
                   
	 $ci =& get_instance();
	
	

	
 $pro = $ci->db->query("SELECT * from `question` WHERE  doctor_id = '".$id."'");
 $pro = $pro->result_array();
//print_r($pro);  
 

?>
<!DOCTYPE html>
<html>  
<head>
 <?php _widget('head');?>
    <link href="assets/js/footable/css/footable.core.css" rel="stylesheet">  
    <script src="assets/js/footable/js/footable.js"></script>
    <script>
    $(document).ready(function(){
        $('.footable').footable();
    });    
    </script>
	<style>
	   .results tr[visible='false'],
.no-result{
  display:none;
}

.results tr[visible='true']{
  display:table-row;
}
	
	a.btn.action-btn {
    padding: 0 6px;
  
}
	
	
	</style>
</head>
<body class="body-wrap <?php _widget('custom_paletteclass'); ?>">

<?php _widget('slidebar'); ?>
<!-- MAIN WRAPPER -->
<div class="">
    <?php _widget('custom_palette');?>
    
    <!-- HEADER -->
    <div id="divHeaderWrapper">
    <header class="header-standard-3"> 
        <?php _widget('header_loginmenu');?>
        
    </header>   
    </div>
      <?php _widget('top_search');?>
    <!-- MAIN CONTENT -->
    <section class="slice bg-white bb" id="main">
        <div class="wp-section">
            <div id="content-block" class="container">        
			
<div class="container">

<div id="your-ads">

<h2 class="mb10">Ask a Question</h2>

  

  <!-- Tab panes -->

  <div class="tab-content">

    <div role="tabpanel" class="tab-pane active">

	

	  <hr>

	  

	  <div class="row head-block-page">

		  <!--<div class="col-md-6 col-sm-6"><h4><a href="ask-doctor.html"><i class="fa fa-arrow-left"></i> &nbsp; Back</a><h4></div>-->
		  <div class="col-md-6 col-sm-6"><h4><a href="<?php echo site_url('askdoctor/doctor/'.$this->data['lang_code']) ?>"><i class="fa fa-arrow-left"></i> &nbsp; Back</a><h4></div>

		  <div class="col-md-6 col-sm-6"><h1 style="text-align:right;margin: 2px 15px;"><a href="<?php echo site_url('askdoctor/qna_an/'.$this->data['lang_code']) ?>" class="btn btn-rjnew">Question & Answer</a></h1></div>

		</div>

	  <hr>

	  

	<div class="row">

        <div class="col-md-12">

            <div class="panel panel-primary">

                <div class="panel-body">
           <?php  foreach($pro as $keys=>$values)
				         { 
				//print_r($values); 
					$arrs = $values;
					
				      
				
                          ?>
                    <ul class="chat">

                        <li class="right clearfix">
						 <?php $sit= site_url(); $sit_arr =explode('index.php',$sit);?>
						<span class="chat-img pull-right"><img src="<?php echo $sit_arr[0]; ?>user_image/<?php echo $values['upload']; ?>" class="img-circle" /></span>

                            <div class="chat-body clearfix"><div class="header">
                                      <?php   
									        $date1 = $values['date_time'];
											//echo $date2;
											date_default_timezone_set("Asia/Kolkata");
											$date2 = date('H:i:s');
										   //echo $date1;
											$mins = ($date2 - $date1);
											
									  
									  
									  
									  ?>
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span><?php echo $mins; ?></small>

						 <strong class="pull-right primary-font">Me</strong></div><p><?php echo $values['question']; ?></p></div>
									
						

                        </li>
						
						<?php
									  		   $this->db->select('*');
                                     $this->db->where('id',$values['doctor_id']);
                                     $query = $this->db->get('user');
                                   //echo $this->db->last_query();
                                   $getresult = $query->row_array();
								  //print_r($getresult);  
                                    
									  ?>
						
						
                         <?php $sit= site_url(); $sit_arr =explode('index.php',$sit);?>
                        <li class="left clearfix"><span class="chat-img pull-left"><img src="<?php echo $sit_arr[0]; ?>/files/thumbnail/<?php echo $getresult['image_user_filename']; ?>" class="img-circle" /></span>

                            <div class="chat-body clearfix"><div class="header">
                                      
									  
									  
									  
									  
									  
                                    <strong class="primary-font">Dr.<?php echo $getresult['name_surname'];?></strong> <small class="pull-right text-muted">
                                      <?php
									  		   $this->db->select('*');
                                     $this->db->where('docter_id',$values['doctor_id']);
									 $this->db->where('queston_id',$values['id']);
                                     $query = $this->db->get('answer_pellet');
                                   // $this->db->last_query(); 
                                   $getresult = $query->row_array();
								 //print_r($getresult); 
								    $answer = $getresult['answer'];
									if($answer == ''){
										$ans ='N/A';
									}else{
										$ans = $answer;  
									}
                                     ?>
										 
										 
                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small></div><p>
										
										<?php echo $ans; ?>
										
										
										</p></div>

                        </li>

                    </ul>
						 <?php } ?>
                </div>
              
                <div class="panel-footer">
                   <form action="" method="post" enctype="multipart/form-data">
                    <textarea class="form-control" rows="2" placeholder="Type your message here..." name="question"></textarea>
                   
					<input style="margin-top: 20px;" type="file" name="uploadedfile" id="fileToUpload">
					 
					 <?php $id = $_GET['id'];?>
                     <input type="hidden" name="id" value="<?php echo $id ?>" />
					 
				     <input type="submit" name="submit" class="btn btn-primary" style="margin-top:20px" value="submit">
                   </form>
                </div>

            </div>

        </div>

    </div>
	

	  

	</div>

  </div>

</div>

</div>
        </div>
		</div>
    </section>
    <!-- FOOTER -->
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>
</div>

<?php _widget('custom_javascript');?>

</body>
</html>
