<?php
/*
Widget-title: Search
Widget-preview-image: /assets/img/widgets_preview/top_search.jpg
*/
?>

<section class="slice bg-white ">
        <div class="container">
				 <div class="form-bg">
  <form id="loginform" action="<?php echo base_url('index.php/searchlisting/search').'/'.$lang_code ;?>" method="get" role="form">                               
    <div class="row">
        <div class="col-md-4 col-sm-4">
        	<div class="input-group locationrequest">
			<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
            <!-- <input type="text" class="form-control-search" name="allindia" placeholder="All India" autocomplete="off"/> -->
			<input id="cityField" name="cityfield" autocomplete="off" type="text" defaultval="All India" defaultalternative="Choose city" value="<?php
			if(isset($_GET['cityfield'])){
			echo $_GET['cityfield']; } ?>" class="with-x-clear-button fleft defaultval ca2 form-control-search"/>
            </div>
        </div>
		<div class="col-md-6 col-sm-6">
            <div class="input-group">
			<span class="input-group-addon"><i class="fa fa-search"></i></span>
			<input type="text" class="form-control-search" name="ads_search" placeholder="2400 ads near you" value="<?php
			if(isset($_GET['ads_search'])){
			echo $_GET['ads_search']; } ?>">
			</div>
        </div>
		<div class="col-md-2 col-sm-2 controls">
            <button type="submit" name="submit" class="btn btn-rjnew btn-block"><i class="fa fa-search"></i> &nbsp; {lang_Search}</button>
        </div>
    </div> 
  </form> 
  </div>
	<!--	
            <div class="wp-section relative">
                <form class="form-inline form-base search-form" role="form">
                    <div class="inline-form-filters base">
                       
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-group-lg search_option_smart-select">
                                    <label class="sr-only"><?php echo _l('Search text');?></label>
                                     <input id="search_option_smart" type="text" class="form-control input-lg" value='<?php _che($search_query); ?>' placeholder="{lang_CityorCounty}">
                                    
                                </div>
                            </div>
                           
                            <div class="col-md-2">
                                <div class="form-group form-group-lg field_select">
                                     <label class="sr-only"><?php _che(${'options_name_4'}); ?></label>
                                    <select id="search_option_4" class="form-control select_styled base no-padding">
                                        <?php _che(${'options_values_4'}); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-group-lg field_select">
                                     <label class="sr-only"><?php _che(${'options_name_3'}); ?></label>
                                    <select id="search_option_3" class="form-control select_styled base no-padding">
                                        <?php _che(${'options_values_3'}); ?>
                                    </select>
                                </div>
                            </div>
							
							 <div class="col-md-2">
                                <div class="form-group form-group-lg field_select">
                                     <label class="sr-only"><?php _che(${'options_name_36'}); ?></label>
                                    <select id="search_option_36" class="form-control select_styled base no-padding">
                                        <?php _che(${'options_values_36'}); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a href="#"  id="search-start" class="btn btn-lg btn-block btn-alt btn-icon btn-icon-right btn-icon-go">
                                    <span>{lang_Search}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                 </form>
            </div>-->
        </div>
    </section>