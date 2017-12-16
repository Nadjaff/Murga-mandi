<?php 
$ci =& get_instance();
	
	

	
 $pro = $ci->db->query("SELECT * from `question`");
 $pro = $pro->result_array();
 
 //print_r($pro); 
 
      
?>

<div class="page-head">
    <!-- Page heading -->
      <h2 class="pull-left"><?php echo lang_check('Q&A')?>
      <!-- page meta -->
      <span class="page-meta"><?php echo lang_check('View all questions')?></span>
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
           <!-- <div class="col-md-12"> 
                <?php echo anchor('admin/expert/edit', '<i class="icon-plus"></i>&nbsp;&nbsp;'.lang_check('Add question'), 'class="btn btn-primary"')?>
            </div>-->
        </div>

          <div class="row">

            <div class="col-md-12">

                <div class="widget wgreen">

                <div class="widget-head">
                  <div class="pull-left"><?php echo lang_check('Questions')?></div>
                  <div class="widget-icons pull-right">
                    <a class="wminimize" href="#"><i class="icon-chevron-up"></i></a> 
                  </div>
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">
                    <?php if($this->session->flashdata('error')):?>
                    <p class="label label-important validation"><?php echo $this->session->flashdata('error')?></p>
                    <?php endif;?>
                    <table class="table table-bordered footable">
                      <thead>
                        <tr>
                        	<th>#</th>
                            <th data-hide="phone,tablet"><?php echo lang('Question');?></th>
                            <th data-hide="phone,tablet"><?php echo lang_check('Date');?></th>
                            <th data-hide="phone,tablet"><?php echo lang_check('Anawer Status');?></th>
                            <th data-hide="phone,tablet"><?php echo lang_check('Expert');?></th>
                        	<th class="control"><?php echo lang('Edit');?></th>
                        	<?php if(check_acl('expert/delete')):?><th class="control"><?php echo lang('Delete');?></th><?php endif;?>
                        </tr>
                      </thead>
                      <tbody>  
					               <?php foreach($pro as $key=>$val)
						{
					    $arrs = $val;
					   ?>
                       
                                    <tr>
                                    	<td><?php echo $val['id']; ?></td>
                                        <td>
                                        <!--<?php echo anchor('admin/expert/edit/'.$question->id, $question->question)?>&nbsp;&nbsp;<?php echo $question->is_readed == 0? '<span class="label label-warning">'.lang('Not readed').'</span>':''?>-->
										<?php echo $val['question']; ?>
                                        </td>
                                        <td>
                                        <?php echo $val['date_time'];?>
                                        </td>
										
										  
									    <td>
										 <?php 
										   
										     
												  
												  
												  $query = $this->db->query("select * from answer_pellet where queston_id = '".$val['id']."'");
                                                  $row_count = $query->num_rows();
												  
			 		                        if($row_count == '1'){   
											
										   ?>
										    
                                          <a href="" class="label label-success"><?php echo 'Done' //$categories[$question->parent_id]?></a>
											<?php } else {   ?>
											  
											   <a href="<?php echo site_url('admin/expert/edit?id='.$val['id']); ?>" class="label label-danger">Pending </a>
											  
											  
											<?php } ?>
                                        </td>
										
										
										
										 <?php $this->db->select('*');
											   $this->db->where('id',$val['doctor_id']);
                                          $query = $this->db->get('user');
								          //echo $this->db->last_query();exit();
									      $getresult = $query->row_array();
									  ?>
                             
										 
                                        <td>
                                        <?php echo $getresult['username']; ?>
                                        </td>
										  <?php  
										      $nswer = $ci->db->query("SELECT * from `answer_pellet`");
											   $nswer = $nswer->result_array();
											   
												 foreach($nswer as $keys=>$va)
																	 { 
															//print_r($values); exit();
																$arr= $va;
																	 }
																  
															   $id = $va['id'];
																//print_r($id); exit();
										  
										  
										  
										  
										  
										  ?>
                                    	<td><?php echo btn_edit('admin/expert/edit?id='.$val['id'].'&edit=dateedit');?></td>
                                    	<td><?php echo btn_delete('admin/expert/delete/'.$val['id']);?></td>
                                    </tr>
                        <?php } ?>
                                    
                                
                      </tbody>
                    </table>
                    
                    <div style="text-align: center;"><?php echo $pagination; ?></div>

                  </div>
                </div>
            </div>
          </div>
        </div>
</div>
    
    
    
    
    
</section>