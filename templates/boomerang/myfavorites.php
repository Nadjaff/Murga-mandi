<!DOCTYPE html>
<html>  
<head>
 <?php _widget('head');?>
</head>
<body class="body-wrap <?php _widget('custom_paletteclass'); ?>">

<?php _widget('slidebar'); ?>
<!-- MAIN WRAPPER -->
<style>
	.not_fnd{
    width: 24%;
    margin: 0 auto;
    font-size: 20px;
    padding-top: 1%;
    color: rgba(0, 55, 255, 0.97);
	}
</style>
<div class="">
    <?php _widget('custom_palette');?>
    
    <!-- HEADER -->
    <div id="divHeaderWrapper">
    <header class="header-standard-3"> 
        <?php _widget('header_loginmenu');?>
        <?php //_widget('header_mainmenu');?>
    </header>   
    </div>
	<?php _widget('top_search');?>
    <!-- MAIN CONTENT -->
    <section class="slice bg-white bb" id="main">
        <div class="wp-section">
            <div id="content-block" class="container">
                <div class="row pd-2">
					<div class="panel">
						<div class="panel-body" id="your-ads" style="padding-left:0px;">
							<h2>Your Favorite Ads</h2>

							<p>Here, you will find your favorite Ads</p>
							
						</div>
					</div>	
				<?php
			?>
					<div class="panel" style="border: 1px solid rgba(128,128, 128, 0.22);border-radius: 4px;">
						<div class="panel-body head-block-page">
							<div class="col-md-6 pull-right">
							
								<div class="pull-right">
								<?php echo anchor(('ffavorites/myfavorites_delete_all/'), '<i class="fa fa-trash-o"></i>&nbsp; Clear all favorites '.lang(''), array('onclick' => 'return confirm(\''.lang_check('Are you sure?').'\')', 'class'=>'action-btn'))?>
								
								</div>
							</div>
						</div>
							
						<?php if($this->session->flashdata('message')):
							echo $this->session->flashdata('message');
							endif;
							if($this->session->flashdata('error')):?>
								<p class="alert alert-error"><?php echo $this->session->flashdata('error')?></p>
								<?php endif;?>
							
						<div class="fav-mainads" style="border-top: 2px solid rgba(128, 128, 128, 0.3);">
							<?php
								if(count($listings)){
									$i=0;
								foreach($listings as $listing_item){
									
								$this->db->select('*,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=36 limit 1) AS exp_price,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=3 limit 1) AS avg_wgt,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=95 limit 1 ) AS qty,(select u.name_surname from user AS u JOIN property_user AS pu on pu.user_id=u.id  where p.id=pu.property_id limit 1) AS user_name')->from('property AS p');
								$this->db->where('p.is_activated',1);	
								$this->db->where('p.id',$listing_item->property_id);
								//echo $this->db->last_query();
								$query = $this->db->get();
								$result = $query->row_array();
								?>
							<div class="row">
								<div class="col-md-12">
									<div class="crops-page">
									  <div class="row">
											<div class="col-md-3 col-sm-4">

											<div class="main-crops featuredads">
											<span class="discount_lable" <?php if($result['is_featured'] == 1){ echo 'style="display:block"'; }else{
												echo 'style="display:none"';
											}
											?>>{lang_FEATURED}</span>
											
											<a href="<?php 
											$lang_code = $this->uri->segment(3);
											echo site_url($listing_uri.'/'.$result['id'].'/'.$lang_code); ?>"><img height="162" src="<?php
											$url = $result['image_filename'];
											echo _simg($url, '470x311'); ?>"></a>
											<div class="fav-crop"><a href="#" title="Add to favorite"><i class="fa fa-heart"></i></a></div>
											</div>

										</div>
										<div class="col-md-9 col-sm-8">

											
											<a href="<?php 
											$lang_code = $this->uri->segment(3);
											echo site_url($listing_uri.'/'.$result['id'].'/'.$lang_code); ?>">
											<div class="head-crop">
																		
												<h4><b><i class="fa fa-rupee"></i> {lang_AverageRate} :</b> <span class="price_color">Rs. <?php echo $result['exp_price']; ?> / pc.</span></h4>
												<h4 style="margin-left: 2px;"><b><i class="fa fa-map-marker"></i></b><?php echo $result['address']; ?>  <span><img src="assets/images/phverify.png"></span></h4>
												<h4><b><i class="fa fa-user"></i>  {lang_FarmerName} :</b> <?php echo $result['user_name']; ?></h4>
											</div>
										<div class="row">
											<div class="col-md-6 col-sm-6"><a href="<?php 
											$lang_code = $this->uri->segment(3);
											echo site_url($listing_uri.'/'.$result['id'].'/'.$lang_code); ?>">
											<h4><b><i class="fa fa-cubes"></i> {lang_Quantity} :</b> <span><?php echo $result['qty']; ?> pcs.<span></span></span></h4>
											<h4><b><i class="fa fa-balance-scale"></i> {lang_AverageWeight} :</b> <span><?php	echo $result['avg_wgt']; ?> kg / pc.</span></h4></a>
											</div>
											<div class="col-md-6 col-sm-6">
											<h4><b><i class="fa fa-space-shuttle"></i> Within :</b> <span>
											<?php
											foreach($distnc as $key=>$v){
												if($key == $i){
												echo round($v);
												}
											}$i++;	
											?>
											km<span></span></span></h4>
											<h4><b><i class="fa fa-clock-o"></i> Ad post on :</b> <span><?php
											echo date("F j, Y h:m A" ,strtotime($result['date']));?></span></h4>
											</div>
										</div>
											</a>
										</div>

									  
									  </div>

									</div>

								  </div>

								</div>
							
							<?php		
								}
							}else{
							?>
							<div class="row">
								<div class="not_fnd">
								<?php echo lang_check('We could not find any');?>
								</div>
							</div>
							<?php
								}
							?>
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