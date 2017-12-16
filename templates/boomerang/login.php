<!DOCTYPE html>
<html>  
<head>
 <?php _widget('head');?>
    
<link href="assets/js/footable/css/footable.core.css" rel="stylesheet">  
<script src="assets/js/footable/js/footable.js"></script>
<style>
	.btn-rjnew:focus, .btn-rjnew:hover{color:white;}
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
        <?php //_widget('header_mainmenu');?>
    </header>   
    </div>

    <!-- MAIN CONTENT -->
    <section class="slice bg-white bb" id="main">
        <div class="wp-section">
            <div id="content-block" class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="main-inner">
                <!-- MAP -->
                <?php //_widget('top_map'); ?>
                <div id="content" class="container">
                    <!-- SLOGAN -->
                    <div class="block-content block-content-small-padding">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php //_widget('center_recentproperties'); ?>  
         
        <!--<div  class="row-fluid panel panel-default panel-sidebar-1">
        <?php if(file_exists(APPPATH.'controllers/admin/packages.php')): ?>
        <div class="row-fluid clearfix">
            <div class="span12  ">-->
             <!-- <div class="panel-heading"><h4>To Make Your Free Listing, Please Login / Register With Us</h4></div>-->
          <!--  <div class="property_content ">
                <div class="widget-content">
                    <?php if($this->session->flashdata('error_package')):?>
                    <p class="alert alert-error"><?php echo $this->session->flashdata('error_package')?></p>
                    <?php endif;?>
                   <table class="table table-striped footable" style="margin-bottom: 0px;">
                      <thead>
                        <tr>
                        	<th>#</th>
                            <th><?php echo lang_check('Package name');?></th>
                            <th><?php echo lang_check('Price');?></th>
                            <th data-hide="phone,tablet"><?php echo lang_check('Free property activation');?></th>
                            <th data-hide="phone,tablet"><?php echo lang_check('Days limit');?></th>
                            <th data-hide="phone,tablet"><?php echo lang_check('Listings limit');?></th>
                            <th data-hide="phone,tablet"><?php echo lang_check('Free featured limit');?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if(count($packages)): foreach($packages as $package):
                        ?>
                                    <tr>
                                    	<td><?php echo $package->id; ?></td>
                                        <td>
                                        <?php echo $package->package_name; ?>
                                        <?php echo $package->show_private_listings==1?'&nbsp;<i class="icon-eye-open"></i>':'&nbsp;<i class="icon-eye-close"></i>'; ?>
                                        </td>
                                        <td><?php echo $package->package_price.' '.$package->currency_code; ?></td>
                                        <td><?php echo $package->auto_activation?'<i class="icon-ok"></i>':'<i class="icon-remove"></i>'; ?></td>
                                        <td><?php echo $package->package_days; ?></td>
                                        <td><?php echo $package->num_listing_limit?></td>
                                        <td><?php echo $package->num_featured_limit?></td>
                                    </tr>
                        <?php endforeach;?>
                        <?php else:?>
                                    <tr>
                                    	<td colspan="20"><?php echo lang_check('Not available');?></td>
                                    </tr>
                        <?php endif;?>           
                      </tbody>
                    </table>

                  </div>
            </div>
            </div>
        </div>
-->
        
        <?php endif; ?>
        
        <?php if(isset($settings_activation_price) && isset($settings_featured_price) &&
                 $settings_activation_price > 0 || $settings_featured_price > 0): ?>
        <div class="row-fluid clearfix">
            <div class="span12">
            <div class="property_content ">
               <!-- <div class="widget-content">
                <?php if($settings_activation_price > 0): ?>
                    <?php echo lang_check('* Property activation price:').' '.$settings_activation_price.' '.$settings_default_currency; ?><br />
                 <?php endif;?>
                 <?php if($settings_featured_price > 0): ?>
                    <?php echo lang_check('* Property featured price:').' '.$settings_featured_price.' '.$settings_default_currency; ?>
                 <?php endif;?>
                 </div>-->
            </div>
            </div>
        </div>
        <?php endif;?>
        </div>
        <div class="row-fluid">
		
			<div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div  <?php
					if (isset($_GET['form_login']) || (!isset($_GET['form_reg'])))		
				{echo 'style="display:block"';}else {echo 'style="display:none"';} ?> id="loginbox" class="panel panel-info panel-default panel-sidebar-1">
                <div class="panel-heading login_reg"><div class="panel-title">{lang_Login}</div>
				<div style="float:right; position: relative; top:-18px"><a href="<?php echo site_url('admin/user/forgetpassword'); ?>">
				<?php echo lang_check('Forget password?')?></a></div>
				</div>
				
				
				
				
            <div class="panel-body property_content widget-content box">
                <?php if($is_login):?>
                <?php echo validation_errors()?>
                <?php if($this->session->flashdata('error')):?>
                <p class="alert alert-danger"><?php echo $this->session->flashdata('error')?></p>
                <?php endif;?>
                <?php flashdata_message();?>
                <?php endif;?>
                
                  <!-- Login form -->
                  <?php echo form_open("/frontend/login/".$lang_code."?form_login=login", array('class' => 'form-horizontal'))?>
				  
				  
				  <div class="form-group">

									<div class="col-sm-12" style="padding-right:30px;padding-left:30px;">

									<div style="padding-top:15px;" >

									<p><?php echo lang_check('Log in with your social account'); ?></p>

										<div class="row">

										<div class="col-md-6 col-sm-6">
											
											<?php if(config_item('appId') != '' && !empty($login_url_facebook)): ?>
                
												<a href="<?php echo $login_url_facebook; ?>" class="btn btn-block omb_btn-facebook">

												<i class="fa fa-facebook"></i> &nbsp; <?php echo lang_check('Log in with Facebook'); ?>

											</a>

                <?php endif;?>
											
											
										</div>

										<div class="col-md-6 col-sm-6">

											<a href="<?php echo site_url('api/google_login/'); ?>" class="btn btn-block omb_btn-google">

												<i class="fa fa-google-plus"></i> &nbsp; <?php echo lang_check('Log in with Google'); ?>

											</a>

										</div>	

										</div>
										
										<div class="form-group omb_loginOr">
											<div class="col-sm-12">
												<hr class="omb_hrOr">
												<span class="omb_spanOr">or</span>
											</div>
										</div>
										<div style="margin-top:10px" class="form-group">
											<div class="col-sm-12" style="text-align:center;"><a href="<?php echo site_url();?>/mobileregister/otpsend/<?php echo $lang_code; ?>" class="btn btn-rjnew"><?php echo lang_check('LogIn with Phone Number'); ?></a></div>
										</div>
										<div class="form-group omb_loginOr">
											<div class="col-sm-12">
												<hr class="omb_hrOr">
												<span class="omb_spanOr">or</span>
											</div>
										</div>
									</div>

									</div>

								</div>
								
								
								
                    <!-- Email -->
						<div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<?php echo form_input('username', $this->input->get('username'), 'class="form-control" id="inputUsername" placeholder="'.lang('Username').'"')?>  
                        </div>
                    <!-- Password -->
                    <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <?php echo form_password('password', $this->input->get('password'), 'class="form-control" id="inputPassword" placeholder="'.lang('Password').'"')?>
                            </div>
                    <!-- Remember me checkbox and sign in button -->
                    
					<div class="form-group">
						<div class="col-sm-6 controls checkbox">
							<label>
							  <input type="checkbox" name="remember" id="remember" value="true" /> <?php echo lang('Remember me')?>
							</label>
						</div>
						<div class="col-sm-6 controls" align="right">
							<button type="submit" class="btn btn_org"><?php echo lang('Log In')?></button>
						</div>
					</div>
					<!--<div style="margin-top:10px" class="form-group" >
                                <div class="col-sm-12 controls" align="right">
									<button type="submit" class="btn btn_org"><?php// echo lang('LogIn')?></button>
								</div>
								<!--<div style="margin-top:10px" class="form-group">

									<div class="col-sm-12"><a href="phone-registration.html" class="btn btn-rjnew">Log in with Phone Number</a></div>

                                </div>-->
								
                    <!--</div>-->
                    <!----<div class="control-group">
					   <div class="controls">
							<button type="submit" class="btn btn-danger"><?php //echo lang('Sign in')?></button>
							<button type="reset" class="btn btn-default"><?php //echo lang('Reset')?></button>
                            <a href="<?php //echo site_url('admin/user/forgetpassword'); ?>"><em><?php //echo lang_check('Forget password?')?></em></a>
						</div>
                    </div>--->
                  <?php echo form_close()?>
				  
                <?php if(config_item('app_type') == 'demo'):?>
                <p class="alert alert-info"><?php echo lang_check('User creditionals: user, user')?></p>
                <?php endif;?>
                
                <?php if(config_item('appId') != '' && !empty($login_url_facebook)): ?>
                <!--<a href="<?php echo $login_url_facebook; ?>" style="text-align:center;display:block;"><img src="assets/img/login-facebook.png" /></a>-->
                <?php endif;?>
                <?php //if(config_item('glogin_enabled')): ?>
                   <!--<a href="<?php echo site_url('api/google_login/'); ?>" style="text-align:center;display:block;"><img src="assets/img/login-google.png" /></a>-->
                <?php //endif;?>
				
				<div class="form-group">
                                    <div class="col-md-12 control signup_link">
                                       
									   {lang_Donthaveanaccount} 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            {lang_Signuphere}
                                        </a>
                                    </div>
                                </div>
            </div>
			</div>
            <div  <?php
				//$lg_url = "{front_login_url}#" ;
				//print_r($_GET);
					if (isset($_GET['form_reg']))					
				{echo 'style="display:block;border: transparent;"'; } else {echo 'style="display:none;border: transparent;"'; }?> id="signupbox" class="panel panel-info register-form  panel-default panel-sidebar-1">
			<div class="panel-heading login_reg">
                            <div class="panel-title">{lang_SignUp}</div>
                            
                        </div>
            <a name="content" id="content"></a>
            <div class="panel-body property_content widget-content">
                <?php if($this->session->flashdata('error_registration') != ''):?>
                <p class="alert alert-success"><?php echo $this->session->flashdata('error_registration')?></p>
                <?php endif;?>
                <?php if($is_registration):?>
                <?php echo validation_errors()?>
                <?php endif;?>
                  <!-- Login form -->
                  <?php echo form_open("/frontend/login/".$lang_code."?form_reg=reg", array('class' => 'form-horizontal'))?>
                  <?php if(config_db_item('register_reduced') == FALSE): ?>
                                <!---<div class="control-group">
                                  <label class="control-label"><?php echo lang('FirstLast')?></label>
                                  <div class="controls">
                                    <?php //echo form_input('name_surname', set_value('name_surname', ''), 'class="form-control" id="inputNameSurname" placeholder="'.lang('FirstLast').'"')?>
                                  </div>
                                </div>--->
						
							
								<div class="col-sm-12" style="padding-bottom:16px">

									<div style="padding-top:15px;" >

									<p><?php echo lang_check('Sign up with your social account'); ?></p>

										<div class="row">

										<div class="col-md-6 col-sm-6">
											
											<?php if(config_item('appId') != '' && !empty($login_url_facebook)): ?>
                
												<a href="<?php echo $login_url_facebook; ?>" class="btn btn-block omb_btn-facebook">

												<i class="fa fa-facebook"></i> &nbsp; <?php echo lang_check('Log in with Facebook'); ?>

											</a>

                <?php endif;?>
											
											
										</div>

										<div class="col-md-6 col-sm-6">

											<a href="<?php echo site_url('api/google_login/'); ?>" class="btn btn-block omb_btn-google">

												<i class="fa fa-google-plus"></i> &nbsp; <?php echo lang_check('Log in with Google'); ?>

											</a>

										</div>	

										</div>

									</div>

									</div>

										<div style="margin-top:10px" class="form-group omb_loginOr">
											<div class="col-sm-12">
												<hr class="omb_hrOr">
												<span class="omb_spanOr">or</span>
											</div>
										</div>
								
								
										<div style="margin-top:10px" class="form-group">
											<div class="col-sm-12" style="text-align:center;"><a href="<?php echo site_url();?>/mobileregister/otpsend/<?php echo $lang_code; ?>" class="btn btn-rjnew"> <?php echo lang_check('Register with Phone Number'); ?></a></div>
										</div>
										
								<div style="margin-top:10px" class="form-group omb_loginOr">
											<div class="col-sm-12">
												<hr class="omb_hrOr">
												<span class="omb_spanOr">or</span>
											</div>
										</div>
								
                         <div style="margin-bottom: 25px;margin-top: 25px;" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<?php echo form_input('name_surname', set_value('name_surname', ''), 'class="form-control" id="inputNameSurname" placeholder="'.lang('YourName').'"')?>  
                        </div>
						<div style="margin-bottom: 25px;display:none;" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<?php echo form_input('username', set_value('username', ''), 'class="form-control" id="inputUsername" placeholder="'.lang('Username').'"')?>  
                        </div>
                    
                  <?php endif; ?>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <?php echo form_input('mail', set_value('mail', ''), 'class="form-control" id="inputMail" placeholder="'.lang('Email Id').'"')?>
                            </div>
							
                  <?php if(config_db_item('register_reduced') == FALSE): ?>
                                <div style="margin-bottom: 25px; display:none;" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <?php echo form_textarea('address', set_value('address', ''), 'placeholder="'.lang('Address').'" rows="3" class="form-control"')?>
                                 
                                </div>          
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <?php echo form_input('phone', set_value('phone', ''), 'class="form-control" pattern="^\d{10}$" id="inputPhone" placeholder="'.lang('Phone no').'"')?>
                            </div>
                   <?php endif; ?>
						
							<div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <?php echo form_password('password', set_value('password', ''), 'class="form-control" id="inputPasswordConfirm" placeholder="'.lang('Password').'" autocomplete="off"')?>
                                
                            </div>                                                           
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <?php echo form_password('password_confirm', set_value('password_confirm', ''), 'class="form-control" id="inputPasswordConfirm" placeholder="'.lang('Confirmpassword').'" autocomplete="off"')?>
                                
                            </div>
                                
                                <?php //if(config_item('captcha_disabled') === FALSE): ?>
                                <!---<div class="control-group" >
                                    <label class="control-label captcha"><?php //echo $captcha['image']; ?></label>
                                    <div class="controls">
                                        <input class="captcha form-control" name="captcha" type="text" placeholder="{lang_Captcha}" value="" />
                                        <input class="hidden" name="captcha_hash" type="text" value="<?php //echo $captcha_hash; ?>" >
                                    </div>
                                </div>-->
                                <?php  //endif; ?>
                                <?php  //if(config_item('recaptcha_site_key') !== FALSE): ?>
                               <!--<div class="control-group" >
                                    <label class="control-label captcha"></label>
                                    <div class="controls">
                                        <?php // _recaptcha(true); ?>
                                   </div>
                                </div>-->
                               <?php //endif; ?>
					<div style="margin-top:10px" class="form-group">
                                <div class="col-sm-12 controls">
									<button type="submit" class="btn btn_org"><?php echo lang('SignUp')?></button>
								</div>
								
								
                    </div>
					   <!--<div class="form-group">

									<div class="col-sm-12">

									<div style="border-top: 1px solid#888; padding-top:15px;" >

									<p>Sign up with your social account</p>

										<div class="row">

										<div class="col-md-6 col-sm-6">

											<a href="#" class="btn btn-block omb_btn-facebook">

												<i class="fa fa-facebook"></i> &nbsp; Sign up with Facebook

											</a>

										</div>

										<div class="col-md-6 col-sm-6">

											<a href="#" class="btn btn-block omb_btn-google">

												<i class="fa fa-google-plus"></i> &nbsp; Sign up with Google

											</a>

										</div>	

										</div>

									</div>

									</div>

								</div>-->
					
					
                    <!---<div class="control-group">
                        <div class="controls">
    						<button type="submit" class="btn btn-danger"><?php //echo lang('Register')?></button>
    						<button type="reset" class="btn btn-success"><?php //echo lang('Reset')?></button>
    					</div>
                    </div>---->
					<div class="form-group" style="padding-right: 15px;padding-left: 15px;">
					    <div class="col-md-12 control signup" style="border-top: 1px solid#888; padding-top:10px;">
                            <?php echo lang_check('Have an account'); ?>!
                            <a id="signinlink" href="#" onClick="$('#signupbox').hide(); $('#loginbox').show()"><?php echo lang_check('Log In Here'); ?></a>
                        </div>
                    </div>
                  <?php echo form_close()?>
            </div></div>
			</div>
		</div>
                                
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.block-content -->
                    <!-- SOCIAL -->
                    <?php //_widget('bottom_social'); ?>  
                    <!-- STATISTICS -->
                    <?php //_widget('bottom_stats'); ?> 
                </div><!-- /.container -->
            </div><!-- /#main-inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>
</div>

<?php _widget('custom_javascript');?>
<script>
$(document).ready(function(){
    $('.footable').footable();
});    
</script>
</body>
</html>