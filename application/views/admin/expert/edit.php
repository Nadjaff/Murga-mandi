<?php
     $id = $_GET['id'];
         
	 $ci =& get_instance();
	
	

	//echo "SELECT * from `question` WHERE  id = '".$id."'"; exit();
 $pr = $ci->db->query("SELECT * from `question` WHERE  id = '".$id."'");
 $pr = $pr->result_array();
 //print_r($pr); 
   foreach($pr as $keys=>$values)
				         { 
				//print_r($values); exit();
					$arrs = $values;
					     }
				      
			     $id = $values['id'];
                 $doctor_id = $values['doctor_id'];  
                 $question = $values['question'];	


				 
?>

<div class="page-head">
    <!-- Page heading -->
      <h2 class="pull-left"><?php echo lang_check('Q&A')?>
          <!-- showroom meta -->
          <span class="page-meta"><?php echo empty($expert->id) ? lang_check('Add question') : lang_check('Edit question').' "' . $expert->id.'"'?></span>
        </h2>
    
    
    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
      <a href="<?php echo site_url('admin')?>"><i class="icon-home"></i> <?php echo lang('Home')?></a> 
      <!-- Divider -->
      <span class="divider">/</span> 
      <a class="bread-current" href="<?php echo site_url('admin/expert')?>"><?php echo lang_check('Q&A')?></a>
    </div>
    
    <div class="clearfix"></div>

</div>

<div class="matter">
        <div class="container">

          <div class="row">

            <div class="col-md-12">


              <div class="widget wgreen">
                
                <div class="widget-head">
                  <div class="pull-left"><?php echo lang_check('Question data')?></div>
                  <div class="widget-icons pull-right">
                    <a class="wminimize" href="#"><i class="icon-chevron-up"></i></a> 
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd" style="padding: 24px;
">
                    <?php echo validation_errors()?>
                    <?php if($this->session->flashdata('message')):?>
                    <?php echo $this->session->flashdata('message')?>
                    <?php endif;?>
                    <?php if($this->session->flashdata('error')):?>
                    <p class="label label-important validation"><?php echo $this->session->flashdata('error')?></p>
                    <?php endif;?>
                    
                    <!-- Form starts.  -->
                    <?php //echo form_open(NULL, array('class' => 'form-horizontal', 'role'=>'form'))?>
                     <form action="http://digitalbrain.co.in/murga_mandi_dynamic/index.php/admin/expert" method="post"  >					
                               <!-- <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Category')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_dropdown('parent_id', $experts_no_parents, $this->input->post('parent_id') ? $this->input->post('parent_id') : $expert->parent_id, 'class="form-control"')?>
                                  </div>
                                </div>-->
                                
                               <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Doctor')?></label>
                                  <div class="col-lg-10">
                                    <!--<?php echo form_dropdown('answer_user_id', $experts_user, $this->input->post('answer_user_id'), 'class="form-control"')?>-->
									<?php
									 $data = "SELECT * from `user` WHERE  id = '".$doctor_id."'";
                                  $prk = $ci->db->query($data);	
                                   $prk = $prk->result_array();
								      foreach($prk as $keys=>$values)
				         { 
				//print_r($values); exit();
					$arrs = $values;
					     }
				      
			 
                 $doctor_name = $values['name_surname'];  
                
								   ?>
				  <div class="form-group">
					<input type="text" name="" value="<?php echo $doctor_name ?>" readonly></div>
                                  </div>
                                </div>
                            
                           <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Date publish')?></label>
                                  <div class="col-lg-10">
                                  <div class="input-append" id="datetimepicker1">
                                    <?php echo form_input('date_publish', $this->input->post('date_publish') ? $this->input->post('date_publish') : $expert->date_publish, 'class="picker" data-format="yyyy-MM-dd hh:mm:ss"'); ?>
                                    <span class="add-on">
                                      &nbsp;<i data-date-icon="icon-calendar" data-time-icon="icon-time" class="icon-calendar">
                                      </i>
                                    </span>
                                  </div>
                                  </div>
                                </div>
                                
                                <!--<div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang('Readed')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('is_readed', '1', set_value('is_readed', $expert->is_readed), 'id="inputReaded"')?>
                                  </div>
                                </div>-->

                                
                                <h5><?php echo lang('Translation data')?></h5>
                               <div style="margin-bottom: 0px;" class="tabbable">
                                 <!-- <ul class="nav nav-tabs">
                                    <?php $i=0;foreach($this->qa_m->languages as $key_lang=>$val_lang):$i++;?>
                                    <li class="<?php echo $i==1?'active':''?>"><a data-toggle="tab" href="#<?php echo $key_lang?>"><?php echo $val_lang?></a></li>
                                    <?php endforeach;?>
                                  </ul>-->
                                  <div style="padding-top: 9px;" class="tab-content">
                                    <?php $i=0;foreach($this->qa_m->languages as $key_lang=>$val_lang):$i++;?>
                                    <div id="<?php echo $key_lang?>" class="tab-pane <?php echo $i==1?'active':''?>">
                                        <div class="form-group">
                                          <label class="col-lg-2 control-label"><?php echo lang_check('Question')?></label>
                                          <div class="col-lg-10">
                                            <?php //echo form_textarea('question_'.$key_lang, set_value('question_'.$key_lang, $expert->{'question_'.$key_lang}), 'placeholder="'.lang('Question').'" rows=4" class="form-control"')?>
											
											
											 <?php echo form_textarea('question'.$key_lang, set_value('question'.$key_lang,$question), 'placeholder="'.lang('Question').'" rows=4" class="form-control"')?>
											
											
											
											
											
                                          </div>
                                        </div> 
											
										
										
										
										
										
										
										
										
										<?php
									 $this->db->select('*');
                                     $this->db->where('docter_id',$doctor_id);
									 $this->db->where('queston_id',$id);
                                     $query = $this->db->get('answer_pellet');
                                    // echo $this->db->last_query(); exit();
                                   $getresu = $query->row_array();
								   $answer = $getresu['answer'];
									if($answer == ''){
										$ans ='N/A';
									}else{
										$ans = $answer;  
									}
								    
                                     ?>
                                        
                                     <div class="form-group">
                                          <label class="col-lg-2 control-label"><?php echo lang_check('Answer')?></label>
                                          <div class="col-lg-10" style="    margin-top: 9px;">
                                            <?php echo form_textarea('answer_'.$key_lang, set_value('answer_'.$key_lang,$ans), 'placeholder="'.lang('Answer').'" rows=4" class="form-control"')?>
											<!---<textarea class="form-group" rows="3" name="answer" cols="120">
												<?php// echo $ans; ?>
											 </textarea>--->
											
											
											
                                          </div>
                                        </div> 
                                        <div class="form-group">
                                         <input type="hidden" class="form-control" id="id" placeholder="Enter email" name="id" value="<?php   echo $id;?>">
                                       </div>
									    <div class="form-group">
                                         <input type="hidden" class="form-control" id="doctor" placeholder="Enter email" name="doctor" value="<?php   echo $doctor_id;?>">
                                      </div>
                                       <!-- <div class="form-group">
                                          <label class="col-lg-2 control-label"><?php echo lang('Keywords')?></label>
                                          <div class="col-lg-10">
                                            <?php echo form_input('keywords_'.$key_lang, set_value('keywords_'.$key_lang, $expert->{'keywords_'.$key_lang}), 'class="form-control" id="inputKeywords'.$key_lang.'" placeholder="'.lang('Keywords').'"')?>
                                          </div>
                                        </div>-->
                                    </div>
                                    <?php endforeach;?>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10" style="    margin-top: 6px;">
                                    <?php //echo form_submit('submit', lang('Save'), 'class="btn btn-primary"')?>
									<?php  
                                           if(isset($_GET['edit'])&& $_GET['edit']!=''){
									?>
									<input type="submit" name="update" value="update" class="btn btn-primary"> 
									<?php }else{  ?>
									<input type="submit" name="save" value="save" class="btn btn-primary">
									
									<?php } ?>
                                    <a href="<?php echo site_url('admin/expert')?>" class="btn btn-default" type="button"><?php echo lang('Cancel')?></a>
                                  </div>
                                </div>
                       <?php echo form_close()?>
                  </div>
                </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
              </div>  

            </div>
            
</div>
            
            


        </div>
		  </div>

<script>

/* CL Editor */
$(document).ready(function(){
    $(".cleditor2").cleditor({
        width: "auto",
        height: 250,
        docCSSFile: "<?php echo $template_css?>",
        baseHref: '<?php echo base_url('templates/'.$settings['template'])?>/'
    });
});

</script>