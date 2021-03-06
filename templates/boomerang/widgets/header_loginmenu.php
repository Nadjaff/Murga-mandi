<?php
/*
Widget-title: Login menu with language dropdown 
Widget-preview-image: /assets/img/widgets_preview/header_loginmenu.jpg
*/

?>
<!-- TOP HEADER --> 
    <?php _widget('custom_top_demo_geomaps_preview');?>
    <div class="top-header">
        <div class="container">
		
	    <nav id="mainNav" class="navbar navbar-default">
       
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
				<div class="header-logo-mobile">
				<a class="navbar-brand" href="{homepage_url_lang}" title="{settings_websitetitle}">
                    <img src="<?php echo $website_logo_url; ?>" alt="{settings_websitetitle}">
                </a>
				</div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <!--  <ul class="nav navbar-nav  navbar-left">
                    <li class="nav-btrj">India's Largest Marketplace</li>
                </ul> -->
				<p class="language">
				 {not_logged}
				  <a href="{front_login_url}?form_login=login" class="link"><i class="fa fa-sign-in"></i> {lang_Login}</a> &nbsp; | &nbsp; <a href="{front_login_url}?form_reg=reg" class="link"><i class="fa fa-key"></i>{lang_Registration}</a>
				  {/not_logged}
				  &nbsp; | &nbsp; <a href="<?php echo base_url(); ?>index.php/<?php echo $lang_code;?>/4/contact" class="link"><i class="fa fa-address-book"></i> {lang_Contact}</a> &nbsp; | &nbsp; {lang_SelectLanguage}: &nbsp; 
				  
                <?php
                    $lang_array = $this->language_m->get_array_by(array('is_frontend'=>1));
                    if(count($lang_array) > 1):
                ?> 
                <?php   
					$flag_icon = '';
                    if(file_exists(FCPATH.'templates/'.$settings_template.'/assets/img/flags/'.$this->data['lang_code'].'.png'))
                    {
                        $flag_icon = $this->data['lang_code'].'.png" alt="" />&nbsp;&nbsp;';
                    }
				?>
                                
                                   <!-- <a href="#"><span class="language name"><?php //echo $this->data['lang_code'].' '.$flag_icon;?></span></a>-->
                <?php 
                    echo get_lang_menu($this->language_m->get_array_by(array('is_frontend'=>1)), $this->data['lang_code'], 'id="auxLanguages" class="sub-menu"');
                ?>
                <?php endif;?>
                </p>     
                   
				  
				  <!--<a class="link">English</a> | <a href="#">हिन्दी</a></p>--->
				<ul class="nav navbar-nav  navbar-right">
					<!-- <li class="dropdown"><a href="#" class="dropdown-toggle lt-bar" data-toggle="dropdown">User <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Services</a></li>
						<li><a href="#">Quote</a></li>
					</ul>
					</li> -->
					{is_logged_user}
					<!--<li><a href="{front_login_url}#content"" class="link"><i class="fa fa-user"></i>&nbsp; My Account</a></li>-->
				
				    <li class="dropdown"><a class="link dropdown-toggle lt-bar" data-toggle="dropdown"><i class="fa fa-user"></i>
					<?php //print_r($this->session->userdata);?>
					<?php $name_surname = $this->session->userdata('name_surname'); ?>
					<?php echo $name_surname; ?>
					<span class="caret"></span></a>

					<ul class="dropdown-menu">

						<h4><i class="fa fa-list"></i> &nbsp; {lang_MyAccount}</h4>

						<li><a href="<?php echo site_url('frontend/myproperties/'.$this->data['lang_code']) ?>">{lang_Ads}</a></li>

						<li><a href="<?php echo  site_url('fmessages/mymessages/'.$this->data['lang_code']); ?>">{lang_Message}</a></li>

						<li><a href="<?php echo site_url('frontend/myprofile/'.$this->data['lang_code']) ?>">{lang_Setting}</a></li>

						<hr>

						<h4><i class="fa fa-heart"></i> &nbsp; {lang_Favorites}</h4>

						<li><a href="<?php echo site_url('ffavorites/myfavorites/'.$this->data['lang_code']) ?>">{lang_FavoritesAds}</a></li>

						<!--<li><a href="Purchased-ads.html">Purchased Ads</a></li>-->

						<h4 class="logoutdrp"><a href="{logout_url}"><i class="fa fa-power-off"></i> &nbsp; {lang_Logout}</a></h4>

					</ul>

					</li>      
					
					
					{/is_logged_user}
					
					<li><a href="<?php echo site_url('askdoctor/doctor/'.$this->data['lang_code']) ?>" class="link"><i class="fa fa-user-md"></i>&nbsp; {lang_AskDoctor}</a></li>
					
					
                    <li>
					<a href="<?php echo base_url(); ?>index.php/frontend/editproperty/<?php echo $this->data['lang_code']; ?>/" class="button-main"><button type="button" class="btn btn_org">{lang_SubmitaFreeAd}</button></a>
					</li>
					
                </ul>
            </div>
                        
            <!-- /.navbar-collapse -->
     
        <!-- /.container-fluid -->
    </nav>
            
	
			
        </div>
    </div>
<script>
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});


</script>