					<?php _widget('top_search');?>			
					
					<div class="container">			
						<div class="row padding-block">	
							<div class="col-md-12">		
								<div class="ads-1">			
									<a href="#">			
										<img src="assets/images/ad-1.jpg">
									</a>				
								</div>	
							</div>						
						</div>		
					</div>					   					   
					
						<style type="text/css">
            div#map {
                position: relative;
            }

            div#crosshair {
                position: absolute;
                top: 192px;
                height: 19px;
                width: 19px;
                left: 50%;
                margin-left: -8px;
                display: block;
                background: url(crosshair.gif);
                background-position: center center;
                background-repeat: no-repeat;
            }
        </style>
		 
			<?php
				$pro_id = $this->uri->segment(2); 								
				$this->db->select('*,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=36 limit 1 ) AS exp_price,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=3 limit 1 ) AS avg_wgt,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=95 limit 1 ) AS qty,(select u.name_surname from user AS u JOIN property_user AS pu on pu.user_id=u.id  where p.id=pu.property_id limit 1 ) AS user_name')->from('property AS p');
				$this->db->where('p.is_activated',1);	
				$this->db->where('p.id',$pro_id);
				$query = $this->db->get();
				$result = $query->row_array();
			?>
			
		
                    <?php
					if(count($slideshow_property_images)>0):?>					
					<div class="row">
					<div class="container">
                    <div class="col-md-8 clearfix">
                        <div>								
					<div class="crop-view" style="margin-top: 25px;color: black;">
					<div class="row">
					  <div class="col-md-12">
						<h4><i class="fa fa-info-circle"></i> {page_title}, #{estate_data_id} &nbsp; <i class="fa fa-rupee"></i>
						 Average Rate : 
						<span class="price_color"><?php if(!empty($estate_data_option_36) || !empty($estate_data_option_37)): ?>
                                <?php 
                                if(!empty($estate_data_option_36))echo price_format($estate_data_option_36, $lang_id);
                                if(!empty($estate_data_option_37))echo ' '.price_format($estate_data_option_37, $lang_id);
                                ?>
                                <?php else: ?>
                                <?php endif; ?>/ pc.</span>
						 </h4>
						<h5><i class="fa fa-map-marker"></i>
						<?php echo $result['address']; ?> &nbsp; <i class="fa fa-desktop"></i> <?php 
						echo 'Added '.date("F j, Y h:m A" ,strtotime($result['date']));?></h5>
						</div>
					</div>
					
					</div>
					
					<div class="crop-view" style="margin-top: 0px;">
						<div class="row">
							<div class="col-md-12">
								<div class="main-crops">
                                    <div class="primary-image">
                                        <div id="myCarousel" class="carousel carousel-property slide" data-ride="carousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                            <?php foreach($slideshow_property_images as $file): ?>
                                                <a href="<?php echo _simg($file['url'], '470x311');?>"  data-link="<?php echo $file['url']; ?>" class=" item <?php echo  $file['first_active'];?>" rel="group" hidefocus="true">
                                                    <img style="width: 100%;" src="<?php echo _simg($file['url'], '470x311');?>" class="img-responsive" alt="<?php echo _ch($file['alt']);?>">
                                                </a>

                                            <?php endforeach; ?>
                                            </div>
                                            <?php if(count($slideshow_property_images)>1):?>
                                                <!-- Carousel nav -->
                                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            <?php endif;?> 
                                        </div>
                                    </div>
									<div class="fav-crop"><a href="#"><i class="fa fa-heart"></i></a></div>
                                    <!---<div class="thumbnail-images">
                                        <?php //if(count($slideshow_property_images)>1):?>
                                            <?php //foreach($slideshow_property_images as $k=>$file): ?>
                                            <a href="<?php //echo _simg($file['url'], '470x311'); ?>" data-link="<?php //echo $file['url']; ?>" data-to='<?php //echo $k;?>' title="<?php //echo $file['filename']; ?>"  alt="" class="" rel="group" hidefocus="true">
                                                <img src="<?php //echo _simg($file['url'],  '470x311'); ?>" alt="<?php //echo _ch($file['alt']);?>">
                                            </a>
                                            <?php// endforeach; ?>
                                        <?php //endif;?>
                                    </div>-->
								</div>
								
								<div class="head-crop">
									<h4><b><i class="fa fa-map-marker"></i></b><?php echo $result['address'];?> <span><img src="assets/images/phverify.png"></span></h4>
									<h4><b><i class="fa fa-user"></i> Farmer Name :</b> <?php echo $result['user_name']; ?></h4>
								</div>    
								<h4><b><i class="fa fa-cubes"></i> Quantity :</b> <span><?php echo $result['qty'];
								?></span>
								</h4>
								<h4>
								<b><i class="fa fa-rupee"></i> Average Rate :</b> 
								<span>Rs. <?php echo $result['exp_price']; ?>/ pc.</span></h4>
					
								<h4><b><i class="fa fa-balance-scale"></i> Average Weight :</b> <span><?php
								echo $result['avg_wgt'];?></span></h4>
								<h4><b><i class="fa fa-space-shuttle"></i> Within :</b> <span><?php echo round($all_estates['dd']);?>km</span></h4>
								
							</div>
						</div>
					</div>
                   
					<div class="row" style="margin-top: 25px;">
						<div class="col-md-12">
							<a class="btn btn_org col-md-3 col-md-offset-4" id="add_to_favorites" href="javascript:void(0)" style="<?php echo ($favorite_added)?'display:none;':''; ?>"><i class="icon-star icon-white"></i> <?php echo lang_check('Add to favorites'); ?> <i class="load-indicator"></i></a>
						</div>
						<div class="col-md-12">
							<a class="btn btn_org col-md-12" id="remove_from_favorites" href="#" style="<?php echo (!$favorite_added)?'display:none;':''; ?>"><i class="icon-star icon-white"></i> <?php echo lang_check('Remove from favorites'); ?> <i class="load-indicator"></i></a>
						</div>
					</div>
					
					<div class="row">

					   <div class="col-md-12" style="margin-top:20px">
					   <h4>Location:</h4>
						<?php $id = $this->uri->segment(2);
						//$gps='';
						foreach($all_estates as $val){
							/*if(in_array($id, $val)){
								$gps = $val['gps'];
								echo $gps;
							}*/
							if($id == $val['id'])
							{
								$gps = $val['gps'];
							}
						}
						//echo $gps;
						$lat_long = explode(',', $gps);
						
						?>
						<!---------------map------------------>
						<div onload="initialize()">
							<div id="map">
								<div id="map_canvas" style="width:100%; height:300px"></div>
							</div>


						</div>
						<!------------------------------>
												
					   </div>

					</div>
					</div>          
                                <?php if(file_exists(APPPATH.'controllers/admin/favorites.php')):?>
                                <?php
                                    $favorite_added = false;
                                    if(count($not_logged) == 0)
                                    {
                                        $CI =& get_instance();
                                        $CI->load->model('favorites_m');
                                        $favorite_added = $CI->favorites_m->check_if_exists($this->session->userdata('id'), 
                                                                                            $estate_data_id);
                                        if($favorite_added>0)$favorite_added = true;
                                    }
                                ?>
                                <!--<div class="pull-left favorite clearfix" style="margin-bottom: 20px;">
                                    <a class="btn btn-warning" id="add_to_favorites" href="#" style="<?php echo ($favorite_added)?'display:none;':''; ?>"><i class="icon-star icon-white"></i> <?php echo lang_check('Add to favorites'); ?> <i class="load-indicator"></i></a>
                                    <a class="btn btn-success" id="remove_from_favorites" href="#" style="<?php echo (!$favorite_added)?'display:none;':''; ?>"><i class="icon-star icon-white"></i> <?php echo lang_check('Remove from favorites'); ?> <i class="load-indicator"></i></a>
                                </div>-->
                                <?php endif; ?>
                                <?php _widget('custom_property_center_reports');?>
                            </div>
                            <div class="col-md-4 col-sm-4" style="margin-top: 25px;">
							<h4 class="headingcropm">Farmer Details</h4>
							<div class="row" style="margin-top: 10px;margin-bottom:10px;">								
								<div class="col-md-12" style="text-align:right;">
								
								<img src="assets/images/phverify.png">
								</div>							
							</div>
							
							<div class="row prof-view">							   
								<div class="col-md-3  col-sm-3 col-xs-3">	
									<div class="prof-img">
										<img src="assets/images/client-1.jpg"><i class="fa fa-circle"></i>
									</div>							  
								</div>							  
								<div class="col-md-9 col-sm-9 col-xs-9">								  
									<h4><?php echo $result['user_name']; ?></h4>
									<h5>Offline</h5>	
									<p>( Active on site since <?php 					
						foreach($user_dt as $pro){
						$da = strtotime($pro['registration_date']);
						$date1  = date('Y/m/d', $da);
						$date2 = date('Y/m/d');
						$diff = abs(strtotime($date2) - strtotime($date1));
						$years = floor($diff / (365*60*60*24));

						$months = floor(($diff - $years * 365*60*60*24) / 

						(30*60*60*24));

						$days = floor(($diff - $years * 365*60*60*24 - 

						$months*30*60*60*24)/ (60*60*24));
						if($years!=0){echo $years.'year ';}
						if($months!=0){echo $months.'month '; }
						if($days!=0){echo $days.'days '; }	
						
					} 
					?>
					 )</p><h3>
									<?php 
									
									foreach($user_dt as $nm){
										echo $nm['address']; 
									 }?></h3>						
									<h3><a href="<?php echo base_url();?>index.php/searchlisting/search/<?php echo $lang_code; ?>?user_id=<?php foreach($user_dt as $nm){
										echo $nm['id']; 
									 } ?>">All ads for this farmer</a></h3>							
								</div>						
							</div>
							
							<div class="row" style="margin-top: 25px;">		  
								<div class="col-md-12">
									<h4 class="headingcropm">Contact with Seller</h4>
									
									<a href="tel:+911231231234" class="btn btn-primary callbtn btn-block"><i class="fa fa-phone"></i> (+91) 123 123 1234</a>								
								</div>							
							</div>												
							
							<div class="row" style="margin-top: 25px;">		

								<?php _widget('property_right_enquiry-form');?>
															
							</div>
							
							<div class="row" style="margin-top: 25px;">
							
							<div class="col-md-12"><h4>Share On:</h4>								
								<div class="list-group list-group-horizontal">
								
								
									<!-- Facebook -->
									<a href="http://www.facebook.com/sharer.php?u=<?php echo "{page_current_url}";?>" target="_blank">
										<img src="assets/images/rj-fb.png" alt="Facebook" />
									</a>
									
									 <!-- Twitter -->
									<a href="https://twitter.com/share?url=<?php echo "{page_current_url}";?>" target="_blank">
										<img src="assets/images/rj-tw.png" alt="Twitter" />
									</a>	
									
									 <!-- Google+ -->
									<a href="https://plus.google.com/share?url=<?php echo "{page_current_url}";?>" target="_blank">
										<img src="assets/images/rj-gp.png" alt="Google">	
									</a>									
									<img src="assets/images/rj-yt.png">								
								</div>							
								
							</div>						
							</div>									
										
								<div class="row" style="margin-top: 25px;">								
								<div class="col-md-12">
								<h4 class="headingcropm">Safety Tips for Buyers</h4>								
								<ol class="safety-tips">
								<li>Meet seller at a safe location.</li>								
								<li>Ask the buyer to provide photo ID and proof of address.</li>								  <li>Pay only after collecting item</li>								 
								<li>Do not share your financial information except the one required for payment.</li>								
								</ol>								
								<p style="text-align:right;"><a href="{homepage_url_lang}index.php/<?php echo $lang_code;?>/188/">Know more <i class="fa fa-angle-double-right"></i></a></p>							
								</div>					
								</div>
								<div class="row" style="margin-top: 25px;">								
								<div class="col-md-12"><a href="{homepage_url_lang}index.php/<?php echo $lang_code;?>/4/contact" class="btn btn_org btn-block"><i class="fa fa-flag"></i> &nbsp; Report Ad</a>
								</div>						
								</div>					
								</div>														</div>								
								<!---<div class="col-md-5">
                        <?php else: ?>
                            <div class="col-md-12">
                        <?php endif;?>
                                <div class="product-info">
                                    <h3>{page_title}, #{estate_data_id}</h3>
                                    <div class="wp-block property list no-border">
                                        <div class="wp-block-content clearfix">
                                            <p class="description mb-15"><?php echo _ch($estate_data_option_8, ''); ?></p>
                                            <span class="pull-left">
                                                <span class="price">
                                                <?php if(!empty($estate_data_option_36) || !empty($estate_data_option_37)): ?>
                                                <?php 
                                                    if(!empty($estate_data_option_36))echo $options_prefix_36.price_format($estate_data_option_36, $lang_id).$options_suffix_36;
                                                    if(!empty($estate_data_option_37))echo ' '.$options_prefix_37.price_format($estate_data_option_37, $lang_id).$options_suffix_37;
                                                ?>
                                                <?php else: ?>
                                                <?php endif; ?>
                                                </span> 
                                            </span>
                                        </div>
                                        <div class="wp-block-footer style2 mt-15">
                                            <ul class="aux-info">
                <?php
                    $custom_elements = _get_custom_items();
					
					
                    $i=0;
                    if(count($custom_elements) > 0):
                    foreach($custom_elements as $key=>$elem):
                    if(!empty(${"estate_data_option_".$elem->f_id}) && $i++<3)
                    if($elem->type == 'DROPDOWN' || $elem->type == 'INPUTBOX'):
                     ?>
                <li><i class="fa <?php _che($elem->f_class); ?>"></i><?php echo _ch(${"estate_data_option_".$elem->f_id}, '-'); ?> <?php echo _ch(${"options_suffix_$elem->f_id"}, ''); ?> <span style="<?php _che($elem->f_style); ?>"><?php echo _ch(${"options_name_$elem->f_id"}, '-'); ?></span></li>
                     <?php 
                    elseif($elem->type == 'CHECKBOX'):
                     ?>
                <li><i class="fa <?php _che($elem->f_class); ?>"></i><small> <strong class="<?php echo (!empty(${"estate_data_option_".$elem->f_id})) ? 'glyphicon glyphicon-ok':'glyphicon glyphicon-remove';  ?>"></strong> <?php echo _ch(${"options_name_$elem->f_id"}, '-'); ?></small></li>
                     <?php 
                    endif;                    
                    endforeach;  
                    else:
                ?>
                <li><i class="fa fa-building"></i><?php echo _ch($estate_data_option_57, '-'); ?> <?php echo _ch($options_suffix_57, '-'); ?></li>
                <li><i class="fa fa-user"></i><?php echo _ch($estate_data_option_20, '-'); ?> <?php echo _ch($options_name_20, '-'); ?></li>
                <li><i class="fa fa-tint"></i><?php echo _ch($estate_data_option_19, '-'); ?> <?php echo _ch($options_name_19, '-'); ?></li>
                <li><i class="fa fa-car"></i><small> <strong class="<?php echo (!empty($estate_data_option_32)) ? 'glyphicon glyphicon-ok':'glyphicon glyphicon-remove';  ?>"></strong> <?php echo _ch($options_name_32, '-'); ?></small></li>
                <?php endif; ?>

                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <span class="clearfix"></span> 
                                    
                                </div>--->
                                <?php if(file_exists(APPPATH.'controllers/admin/favorites.php') && count($slideshow_property_images)==0):?>
                                <?php
                                    $favorite_added = false;
                                    if(count($not_logged) == 0)
                                    {
                                        $CI =& get_instance();
                                        $CI->load->model('favorites_m');
                                        $favorite_added = $CI->favorites_m->check_if_exists($this->session->userdata('id'), 
                                                                                            $estate_data_id);
                                        if($favorite_added>0)$favorite_added = true;
                                    }
                                ?>
                               <!--- <div class="pull-left favorite clearfix" style="margin-bottom: 20px;">
                                    <a class="btn btn-warning" id="add_to_favorites" href="#" style="<?php echo ($favorite_added)?'display:none;':''; ?>"><i class="icon-star icon-white"></i> <?php echo lang_check('Add to favorites'); ?> <i class="load-indicator"></i></a>
                                    <a class="btn btn-success" id="remove_from_favorites" href="#" style="<?php echo (!$favorite_added)?'display:none;':''; ?>"><i class="icon-star icon-white"></i> <?php echo lang_check('Remove from favorites'); ?> <i class="load-indicator"></i></a>
                                </div>-->
                                <?php endif; ?>
                                <?php //if(count($slideshow_property_images)==0):?>
                                    <?php// _widget('custom_property_center_reports');?>
                                <?php // endif; ?>
                                
                            </div>
                     <!---</div>--->  
					 
						</div>
                           
                           
<script>
    
$(document).ready(function(){
        
    $(document).on('touchstart click', '.carousel-inner a', function () {
        var myLinks = new Array();
        var current_link = $(this).attr('data-link');
        var curIndex=0;
        $('.carousel-inner a').each(function (i) {
            var img_link = $(this).attr('data-link');
            myLinks[i] = img_link;
            if(current_link == img_link)
                curIndex = i;
        });
        options = {index: curIndex};
        blueimp.Gallery(myLinks,options);
        
        return false;
    });   
    
    if (!$('#blueimp-gallery').length)
    $('body').append('<div id="blueimp-gallery" class="blueimp-gallery">\n\
                     <div class="slides"></div>\n\
                     <h3 class="title"></h3>\n\
                     <a class="prev">&lsaquo;</a>\n\
                     <a class="next">&rsaquo;</a>\n\
                     <a class="close">&times;</a>\n\
                     <a class="play-pause"></a>\n\
                     <ol class="indicator"></ol>\n\
                     </div>');
})
    
</script>  
        <script type="text/javascript">
		$(document).ready(function(){
            var map;
            var geocoder;
            var centerChangedLast;
            var reverseGeocodedLast;
            var currentReverseGeocodeResponse;
			var lat1 = <?php echo $lat_long[0]; ?>;
			var log = <?php echo $lat_long[1]; ?>;
	
            //function initialize() {
				
                var latlng = new google.maps.LatLng(lat1,log);
                var myOptions = {
                    zoom: 10,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                geocoder = new google.maps.Geocoder();
                var marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    title: "Map!"
                });

            //}
		});
        </script>  
<script>
 $(document).ready(function() {

            // [START] Add to favorites //  

        $("#add_to_favorites").click(function(){
			//alert('hello');

            var data = { property_id: {estate_data_id} };

            var load_indicator = $(this).find('.load-indicator');
            load_indicator.css('display', 'inline-block');
            $.post("{api_private_url}/add_to_favorites/{lang_code}", data, 
                   function(data){

               // ShowStatus.show(data.message);

                load_indicator.css('display', 'none');

                if(data.success)
                {
                    $("#add_to_favorites").css('display', 'none');
                    $("#remove_from_favorites").css('display', 'inline-block');
                }
            });

            return false;
        });

        $("#remove_from_favorites").click(function(){

            var data = { property_id: {estate_data_id} };

            var load_indicator = $(this).find('.load-indicator');
            load_indicator.css('display', 'inline-block');
            $.post("{api_private_url}/remove_from_favorites/{lang_code}", data, 
                   function(data){

                ShowStatus.show(data.message);

                load_indicator.css('display', 'none');

                if(data.success)
                {
                    $("#remove_from_favorites").css('display', 'none');
                    $("#add_to_favorites").css('display', 'inline-block');
                }
            });

            return false;
        });

        });

</script>		
                           