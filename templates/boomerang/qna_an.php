<?php 
//$id =$_REQUEST['id'];
                   
	 $ci =& get_instance();
	
	

	
 $pro = $ci->db->query("SELECT * from `question`");
 $pro = $pro->result_array();
 //print_r($pro);  exit();
  



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
	.panel-group .panel {
    margin-bottom: 4px;
    border-radius: 4px;
}

	a.btn.action-btn {
    padding: 0 6px;
  
}.card.card-block {
    margin-top: 22px;
}
#news-home h2 {
    font-size: 17px;
    margin: 10px 14px 10px;
    color: #00b7d6;
}
.panel-body {
    border-top: none !important;
}
.img-responsive.user-photo {
    float: left;
    margin-right: 15px;
    width: 45px;
    border-radius: 30px;
}.label {
    display: inline;
padding: 0 10px 0 0;
font-size: 14px;
font-weight: normal;
line-height: 1;
color: #296ecb;
text-align: center;
white-space: nowrap;
vertical-align: baseline;
border-radius: .25em;

}
#holyday-choice {
    border-bottom: 1px solid #ddd;
    margin-bottom: 15px;
    margin-right: 18px;
}
.acod{
    padding-left: 0px;
    padding-right: 30px;
}	
.panel-group .panel-heading {
    padding: 6px 16px;
    position: relative;
    background: #f3f3f3;
}
.black1{
	color:#90908D;
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
		<div class="row" style="margin-top: 20px;">
		  <div class="col-md-12"  style="padding-left: 0;">

			<div id="holyday-choice">

				<ul>

				  <li class="active"><a href="#">All Question</a></li>

				  <li><a href="#">Breeding</a></li>

				  <li><a href="#">Moulting</a></li>

				  <li><a href="#">bullying</a></li>

				  <li><a href="#">Prolapse</a></li>

				</ul>

			</div>

		  </div>
		  <div class="col-md-12 acod">
			<div id="news-home">

              <div class="panel-group" id="faqAccordion">
		            <?php  
						$counter_id = 1;
					foreach($pro as $keys=>$values)
				         { 
				//print_r($values); exit();
					$arrs = $values;
					
				      
				
                          ?>
						  
					<?php
									$this->db->select('*');
                                     $this->db->where('id',$values['doctor_id']);
                                     $query = $this->db->get('user');
                                   //echo $this->db->last_query();
                                   $getresult = $query->row_array();
								  
                                    
									  ?>
									  
                              <?php
									 $this->db->select('*');
									 $this->db->from('answer_pellet');
                                     $this->db->where('docter_id',$values['doctor_id']);
									 $this->db->where('queston_id',$values['id']);
                                     $query = $this->db->get();
                               
                                   $getresu = $query->row_array();
															   
								    $answer = $getresu['answer'];
									if($answer == ''){
										$ans ='N/A';
									}else{
										$ans = $answer;  
									}
                                     ?>
                				<div class="panel panel-default line-content" id="table1">
                       
					<div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question<?php echo $getresu['queston_id']; ?>">
                        <h4 class="panel-title">
							<a class="ing">
								<?php 
								 $this->db->select('*');
									 $this->db->from('question');
                                     $this->db->where('id',$getresu['queston_id']);
                                     $query3 = $this->db->get();
									$getdate = $query3->row_array();
									//print_r($getdate);
									$da = strtotime($getdate['date_time']);
									$date1  = date('Y-m-d', $da);
									$date2 = date('Y-m-d');
									$diff = abs(strtotime($date2) - strtotime($date1));
									 
									$years = floor($diff / (365*60*60*24));

									$months = floor(($diff - $years * 365*60*60*24) / 

									(30*60*60*24));

									$days = floor(($diff - $years * 365*60*60*24 - 

									$months*30*60*60*24)/ (60*60*24));
									?>
								<?php
								$this->db->select("*");
								$this->db->from('user');
								$this->db->where('id',$values['doctor_id']);
								$query_d= $this->db->get();
								$result_doc = $query_d->result_array();
								$sitt= site_url(); $sit_ar =explode('index.php',$sitt);
								
								?>	
							
								<div class="doctor-blok question_section">
									<img src="<?php echo $sit_ar[0]; ?>user_image/<?php
									echo $values['upload']; ?>" class="img-circle">
									<h1><span class="black1">Q :</span> <?php echo  $values['question'] ;?></h1>
									<!--<h5><span class="user_clr"><?php
									//foreach($result_doc as $val_d){
									//echo $val_d['username']; } ?></span> &nbsp;-&nbsp; <span class="list_clr">Breeding</span> &nbsp;-&nbsp; <span class="day_clr">
									<?php 
										/* if($diff == 0){
											echo 'Today';
										}else{
									if($years!=0){echo $years.'year ';}
									if($months!=0){echo $months.'month '; }
										if($days!=0){echo $days.'days '; }
										echo 'ago'; }	 */ ?> </span></h5>-->
								</div>
							</a>
						</h4>
						 <!--<h4 class="panel-title"><a href="#" class="ing"><?php //echo  $values['question'] ;?></a></h4>-->
						 
					</div>

					
					
					<div id="question<?php echo $getresu['queston_id']; ?>" class="panel-collapse collapse">
                        <h2>Answered by</h2>
						<div class="panel-body">

							<div class="doctor-blok">
                              <?php $sit= site_url(); 
							  $sit_arr =explode('index.php',$sit);?>
							<img src="<?php echo $sit_arr[0]; ?>/files/thumbnail/<?php echo $getresult['image_user_filename']; ?>" class="img-circle" />

							<h4>Dr.<?php echo $getresult['name_surname'];?></h4>

							<h5><?php echo $getresult['profession'];?></h5>
							
							<h5>Answered <?php echo $getresu['date'];?></h5>

							</div>
							<?php
								$this->db->select("*");
								$this->db->from('comment_qna');
								$this->db->where('answer_id',$getresu['id']);
								$this->db->where('doctor_id',$getresu['docter_id']);
								$this->db->where('question_id',$getresu['queston_id']);
								
								$query2= $this->db->get();
								
								$result_c = $query2->result_array();
								 $total = count($result_c);
								 
								?>
							<p> <?php echo $ans;?> </p>

							<h3><a data-toggle="collapse" href="#qcoment-<?php echo $counter_id; ?>" aria-expanded="false" aria-controls="qcoment-<?php echo $counter_id; ?>"><span class="label label-primary">Comments (<?php echo $total; ?>)</span></a> <a href="qcoment_report-<?php echo $counter_id; ?>" data-toggle="modal" data-target="#qcoment_report-<?php echo $counter_id; ?>" style="float: right;" ><span class="label label-primary">Report</span></a></h3>

							
							<div class="row">
							
								<!--<h3><a data-toggle="collapse" href="#user2-reply-<?php //echo $counter_id; ?>" aria-expanded="false"><span class="label label-primary">reply</span></a> <a href="user2-report-<?php //echo $counter_id; ?>" data-toggle="modal" data-target="#user2-report-<?php //echo $counter_id; ?>"><span class="label label-primary">Report</span></a></h3>--->

								<!-- Report -->

									<div class="modal fade" id="user2-report-<?php echo $counter_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

										<div class="modal-dialog" role="document">

											<div class="modal-content">

											  <div class="modal-header">

												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

												<h4 class="modal-title" id="myModalLabel">Report Answer</h4>

											  </div>

											  <div class="modal-body">

												<form>

												<div class="radio">

												  <label>

													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">

													<b>Harassment:</b> Disparaging or adversarial towards a person or group

												  </label>

												</div>

												<div class="radio">

												  <label>

													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">

													<b>Spam:</b> Undisclosed promotion for a link or product

												  </label>

												</div>

												  <div class="form-group">

													<label>Optional: Explain this report</label>

													<textarea class="form-control" placeholder="Explain this report"></textarea>

												  </div>

												</form>

											  </div>

											  <div class="modal-footer">

												<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

												<button type="button" class="btn btn-primary">Submit</button>

											  </div>

											</div>

										  </div>

										</div>

										<!-- End Report -->
							
							</div>
							
							<!-- Report -->

							<div class="modal fade" id="qcoment_report-<?php echo $counter_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

							  <div class="modal-dialog" role="document">

								<div class="modal-content">

								  <div class="modal-header">

									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

									<h4 class="modal-title" id="myModalLabel">Report Answer</h4>

								  </div>

								  <div class="modal-body">

									<form>

									<div class="radio">

									  <label>

										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">

										<b>Harassment:</b> Disparaging or adversarial towards a person or group

									  </label>

									</div>

									<div class="radio">

									  <label>

										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">

										<b>Spam:</b> Undisclosed promotion for a link or product

									  </label>

									</div>

									  <div class="form-group">

									    <label>Optional: Explain this report</label>

										<textarea class="form-control" placeholder="Explain this report"></textarea>

									  </div>

									</form>

								  </div>

								  <div class="modal-footer">

									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

									<button type="button" class="btn btn-primary">Submit</button>

								  </div>

								</div>

							  </div>

							</div>

							<!-- End Report -->

							<!-- Comment -->

							<div class="collapse" id="qcoment-<?php echo $counter_id; ?>">

							  <div class="card card-block">

								
								<?php foreach($result_c as $val){
									
								?>
								<div class="row comment-post">
								<?php
									$da = strtotime($val['created_at']);
									$date1  = date('Y/m/d', $da);
									$date2 = date('Y/m/d');
									$diff = abs(strtotime($date2) - strtotime($date1));
									$years = floor($diff / (365*60*60*24));

									$months = floor(($diff - $years * 365*60*60*24) / 

									(30*60*60*24));

									$days = floor(($diff - $years * 365*60*60*24 - 

									$months*30*60*60*24)/ (60*60*24));?>
									<div class="col-md-12">
										<div class="panel panel-default rjcoment">
											<div class="panel-heading">
												<strong><?php echo $val['cmnt_user']; ?></strong> <span class="text-muted">
												<?php 
												if($diff == 0){
														echo 'Today';
												}else{
												if($years!=0){echo $years.'year ';}
												if($months!=0){echo $months.'month '; }
													if($days!=0){echo $days.'days '; }
													echo 'ago'; } ?>
												</span>
											</div>
											<div class="panel-body">
											<img class="img-responsive user-photo" src="assets/images/user-comment.png">
												<?php echo $val['comment'] ?>
											</div>
										</div>
									</div>
								
								</div>

						 <?php } ?>
								
								
								<div class="comment-block">

									<h4>Leave a Comment</h4>

									<div class="row">

											<div class="col-md-12">

												<form method="post" action="<?php echo base_url(); ?>index.php/askdoctor/qna_an">

													<div class="form-group">

														<label for="comment">Comment</label>

														<textarea class="form-control" id="comment" rows="2" name="comment" placeholder="Write your comment"></textarea>

													</div>
													
													<div class="form-group">

														<input type="text" class="form-control" id="cmnt_user" name="cmnt_user" placeholder="Write your name" required>

													</div>
													
													<input type="hidden" name="answer_id" value="<?php echo $getresu['id']; ?>">
													
													<input type="hidden" name="question_id" value="<?php echo $getresu['queston_id']; ?>">
													
													<input type="hidden" name="doctor_id" value="<?php echo $getresu['docter_id']; ?>">
													
													<p class="post-button">
													<input type="submit" name="post_comment" value="Post Comment" class="btn btn-primary">
													</p>

												</form>

											</div>

									</div>

								</div>
								
								
							  </div>

							</div>

							<!-- End Comment -->
								
						</div>

					</div>

				</div>
  


   <?php 
	  $counter_id++;    
	  } ?>
  
               <nav aria-label="Page navigation example" style="text-align: center;">
				  <ul class="pagination" id="pagin">
					
				  </ul>
				</nav>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
        pageSize = 5;

	var pageCount =  $(".line-content").length / pageSize;
    
     for(var i = 0 ; i<pageCount;i++){
        
       $("#pagin").append('<li><a href="#">'+(i+1)+'</a></li> ');
     }
        $("#pagin li").first().find("a").addClass("current")
    showPage = function(page) {
	    $(".line-content").hide();
	    $(".line-content").each(function(n) {
	        if (n >= pageSize * (page - 1) && n < pageSize * page)
	            $(this).show();
	    });        
	}
    
	showPage(1);

	$("#pagin li a").click(function() {
	    $("#pagin li a").removeClass("current");
	    $(this).addClass("current");
	    showPage(parseInt($(this).text())) 
	});
        
    </script>