<!DOCTYPE html>
<html>  
    <head>
        <?php _widget('head'); ?>
    </head>
	
    <body class="body-wrap <?php _widget('custom_paletteclass'); ?>">
        <?php //_widget('slidebar'); ?>
        <!-- MAIN WRAPPER -->
        <div class="">
            <?php //_widget('custom_palette'); ?>
            <!-- HEADER -->
            <div id="divHeaderWrapper">                
                <header class="header-standard-3">      	
                    <?php
                    foreach ($widgets_order->header as $widget_filename) {
                        _widget($widget_filename);
                    }
                    ?>
                </header>   
            </div>
            <!-- MAIN CONTENT -->
            <?php
            foreach ($widgets_order->top as $widget_filename) {
                _widget($widget_filename);
            }
            ?>
            <section class="slice bg-white bb">
                <div class="wp-section">
                    <div id="content-block" class="container">
					  
						  
						<div class="row padding-block">  
						  <div class="col-md-4 col-sm-4">
							<div class="stratup">
							<a><img src="assets/images/murga-3.png"></a>
							<h3><?php echo lang_check('Buy and Sell'); ?></h3>
							<p><?php echo lang_check('Buy and sell crop easily with a few clicks.'); ?></p>
							</div>
						  </div>
						  
						  <div class="col-md-4 col-sm-4">
							<div class="stratup">
							<a><img src="assets/images/murga-1.png"></a>
							<h3><?php echo lang_check('Find Location'); ?></h3>
							<p><?php echo lang_check('Find nearest location for buy and selling.'); ?></p>
							</div>
						  </div>
						  
						  <div class="col-md-4 col-sm-4">
							<div class="stratup">
							<a href="#"><img src="assets/images/murga-2.png"></a>
							<h3><?php echo lang_check('Fast Deal'); ?></h3>
							<p><?php echo lang_check('Close deals faster with chat, no spam calls.'); ?></p>
							</div>
						  </div>
						</div>  
 
						<div class="row padding-block">
							<div class="col-md-12">
								<div class="ads-1">
									<a><img src="assets/images/ad-1.jpg"></a>
								</div>
							</div>
						</div>
					
                        <div class="row">
                            <div class="col-md-9">
                                <?php
                                foreach ($widgets_order->center as $widget_filename) {
                                    _widget($widget_filename);
                                }
                                ?>
                            </div>
                            <div class="col-md-3">
                                <div class="sidebar">
                                    <?php
                                    foreach ($widgets_order->right as $widget_filename) {
                                        _widget($widget_filename);
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            //foreach ($widgets_order->bottom as $widget_filename) {
               // _widget($widget_filename);
            //}
            ?>
			
<div class="container">			  
<div class="row padding-block" style="background:#fff;">
<div class="col-md-12 col-sm-12">
<?php 

   $count=1;
   $lenth=count($featured_properties);
   foreach($featured_properties as $key=>$item){ 
			    
			if($count%3==1){	
				?>
<div class="row hide-in-rsponsive">
			<?php }?>
  <div class="col-md-4 col-sm-4">
    <div class="crop-detail">
	<a href="<?php echo $item['url']; ?>">
	<img alt="" src="<?php echo _simg($item['thumbnail_url'], '400x250'); ?>" class="img-responsive"></a>
	<h3><i class="fa fa-inr"></i> &nbsp; <?php echo $item['custom_price'];?></h3>
	<h4><i class="fa fa-map-marker"></i> &nbsp; <?php echo $item['address'];?></h4>
	</div>
  </div>
  <?php
     if(($count%3==0) || ($count==$lenth)){
		 echo "</div>";
	 }
	 $count++;
  }
	?>
 
<div class="row show-in-rsponsive">
      <?php foreach($featured_properties as $item){?>
       <div class="col-md-4 col-sm-4">
		<div class="crops-page grid-view">
		  <div class="row">
			  <div class="col-md-12">
				<div class="main-crops">
				<a href="#"><img src="<?php echo _simg($item['thumbnail_url'], '400x250'); ?>"></a>
				<div class="fav-crop"><a href="#"><i class="fa fa-heart"></i></a></div>
				</div>
			  </div>
			  <div class="col-md-12">
			  <a href="view-crop.html">
				<div class="head-crop">
				<h4><b><i class="fa fa-map-marker"></i> Location :</b>
				<?php echo $item['address'];?></h4>
				<h4><b><i class="fa fa-user"></i> Farmer Name :</b> Rakesh Singh</h4>
				</div>
				<h4><b><i class="fa fa-cubes"></i> Quantity :</b> <span><?php echo $item['option_95'];?> pcs.<span></h4>
				<h4><b><i class="fa fa-rupee"></i> Average Rate :</b> <span><?php echo $item['custom_price'];?></span></h4>
				<h4><b><i class="fa fa-balance-scale"></i> Average Weight :</b> <span><?php echo $item['option_3'];?></span></h4></a>
			  </div>
		  </div>
		</div>
	  </div>
	  <?php } ?> 
	 
</div>

  </div>
  </div>
</div>			
			 
			 
            <!-- FOOTER -->								
    <footer class="footer">	
			<div class="container">
    <div class="row padding-block">
        <div class="col-md-12">
            <div class="ads-1">
                <a href="#"><img src="assets/images/ad-1.jpg"></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mobile-app-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="apps-det"> <img src="assets/images/murgamandi-1.png"> </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <h2><?php echo lang_check('Download'); ?><b><?php echo lang_check('Android'); ?></b><?php echo lang_check('and'); ?> <b><?php echo lang_check('IOS'); ?></b><?php echo lang_check('APP'); ?></h2>
                <a href="#"><img src="assets/images/appstore-1.png" class="appstore"></a>
                <a href="#"><img src="assets/images/appstore-2.png" class="appstore"></a>
            </div>
        </div>
    </div>
</div>
<!-- Ads left and right site -->
<div id="LeftFloatAds"><img src="assets/images/ad-3.jpg" /></div>
<div id="RightFloatAds"><img src="assets/images/ad-3.jpg" /></div>
<!-- End Ads left and right site -->
<div class="panel-footer-main">
    <div class="container">
        <div class="row">
            <?php
                        foreach ($widgets_order->footer as $widget_filename) {
                            _widget($widget_filename);
                        }
                        ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="pull-left copyright" style="line-height: 40px;">
        <?php _l('All Right reserved'); ?>
    </div>
    <div class="pull-right">
        <a class="developed_by" href="http://iwinter.com.hr" target="_blank"><img height='40px' src="assets/img/partners/winter.png" alt="winter logo" /></a>
    </div>
</div>
<div class="panel-footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <p style="margin: 0px;">© 2017 <b><a>Murga Mandi</a></b> &nbsp; | &nbsp; <?php echo lang_check('AllRightsReserved'); ?></p>
            </div>
            <div class="col-md-6 col-sm-6">
                <p style="margin: 0px;text-align: right;">{lang_DesignBy} <b><a href="http://www.digitalbrain.co.in" target="_blank">Digital Brain Media</a></b></p>
            </div>
        </div>
    </div>
</div>
            </footer>
        </div>
        <?php _widget('custom_javascript'); ?>
		
    </body>
</html>