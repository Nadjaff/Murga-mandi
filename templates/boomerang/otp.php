<!DOCTYPE html>
<html>  
<head>
 <?php _widget('head');?> 
 <link rel="stylesheet" href="assets/css/jslider.css" type="text/css">	<!-- jquery.min.js -->	<script type="text/javascript" src="assets/js/jshashtable-2.1_src.js"></script>	<script type="text/javascript" src="assets/js/jquery.numberformatter-1.2.3.js"></script>	<script type="text/javascript" src="assets/js/tmpl.js"></script>	<script type="text/javascript" src="assets/js/draggable-0.1.js"></script>	<script type="text/javascript" src="assets/js/jquery.slider.js"></script>
 
</head>
<body class="body-wrap pge_list <?php _widget('custom_paletteclass'); ?>">

<!-- MAIN WRAPPER -->
<div class="">
   
    <!-- HEADER -->
    <div id="divHeaderWrapper">
    <header class="header-standard-3"> 
        <?php _widget('header_loginmenu');?>
       
    </header>   
    </div>
     
    <!-- MAIN CONTENT -->
	
	
<div id="content-block" class="container">
    <div class="row padding-block">
        <div class="col-md-12">
            <div class="ads-1">
                <a href="#"><img src="assets/images/ad-1.jpg"></a>
            </div>
        </div>
    </div>
</div>

<?php //print_r($record);?>
<div class="container">    
        <div id="loginboxmain" style="margin-top:30px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info" >   
                    <div style="padding-top:30px; text-align:center;" class="panel-body" >
                        
						<img src="images/otp.png"/>
						<p style="margin: 20px 0px 35px;">Please enter the OTP sent to <?php echo $_GET['id']; ?> to register.<p>
						<?php 
						if($this->session->flashdata('error')){
                        ?>
						<p style="color:#FF0000"><?php echo $this->session->flashdata('error'); ?></p>
                          <?php } ?>
						<form id="loginform" class="form-horizontal" role="form" method="post">
						<input type="text" class="otpinput" name="otp" placeholder="Enter code" required>
						<input type="hidden" name="phone" value="<?php echo $_GET['id']; ?>" >
						<h6 style="margin-bottom: 23px;text-decoration: underline;"><a href="<?php echo base_url().'index.php/mobileregister/otpresend/'.$lang_code.'?id='.$_GET['id']; ?>">Resend code</a></h6>
						<h6><input type="submit" name="submit" value="Confirm" class="btn btn-primary"></h6>
						</form>
						  
                        </div>                     
                </div>  
        </div>
    </div>
<?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>
    </div>

		
 
</body>
</html>