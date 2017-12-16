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
	   table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid #eaeaea;
}
	.blue{    color: #2965be;
    font-size: 14px;}
	
	
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
                <div class="row">
                    <div class="col-md-12">
                        <div id="main-inner">
                <!-- MAP -->
                <div  class="row pd-2">
				
				
	<h2 style="margin: 19px 0 5px;
    color: #2965be;
    font-size: 17px;
    font-weight: normal;" ><?php echo lang_check('My Message'); ?></h2>

<p><?php echo lang_check('Messages regarding your Ads and replies from other sellers'); ?></p>
<ul class="nav nav-tabs">        
<li ><a href="<?php echo site_url('frontend/myproperties/'.$this->data['lang_code']) ?>">{lang_Ads}</a></li>    
<!--<li><a href="<?php echo  site_url('fmessages/mymessages/'.$this->data['lang_code']); ?>">Message</a></li>  -->
<li class="active"><a data-toggle="tab" href="#menu3"><?php echo lang_check('Message') ?></a></li>  
<li><a data-toggle="tab" href="#menu2"><?php echo lang_check('Payment') ?></a></li>    
<li><a href="<?php echo site_url('frontend/myprofile/'.$this->data['lang_code']) ?>"><?php echo lang_check('Settings') ?></a></li>  </ul>			
<div class="tab-content">    
<div id="" class="tab-pane fade in active">				
	       <!-------------------ddd-------------------->			
				<div class="row head-block-page">	  <div class="col-md-6"></div>	  
     <div class="col-md-6">

	  <form class="navbar-form" role="search">

		<div class="input-group add-on pull-right">

		  <!--<input class="form-control" placeholder="Search..." name="srch-term" id="srch-term" type="text">-->
           <input class="form-control" type="text" id="myInput" name="srch-term"  onkeyup="myFunction()" placeholder="<?php echo lang_check('Search for user..'); ?>" title="Type in a name">
		   
		   
		   
		  <div class="input-group-btn">

			<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>

		  </div>

		</div>

	  </form>

	  </div>










	</div>	 
				
				
				
                    <!-- SLOGAN -->
                    <div class="block-content block-content-small-padding">
                        <div class="row">
                            <div class="col-sm-12">
        <div class="row-fluid">
            <div class="span12">
            <!--<div class="panel-heading"><h2><?php _l('My messages'); ?></h2></div>-->
            <div class="" style="">
                <div class="widget-content ">
                
                    <?php if($this->session->flashdata('message')):?>
                    <?php echo $this->session->flashdata('message')?>
                    <?php endif;?>
                    <?php if($this->session->flashdata('error')):?>
                    <p class="alert alert-error"><?php echo $this->session->flashdata('error')?></p>
                    <?php endif;?>
					<div class="table-responsive">
                    <table class="table table-hover" id="myTable" style="margin-top: 11px;"> 
                      <thead>
                        <tr class="blue">
                        	<th></th>                    	
                            <th data-hide="phone,tablet">{lang_User}</th>
                            <th data-hide="phone,tablet">{lang_Notification}</th>
                           <!-- <th data-hide="phone,tablet"><?php _l('Estate');?></th>--->
							<th><?php _l('Date');?></th>
                        	<!--<th class="control"><?php _l('Edit');?></th>-->
                        	
                        </tr>
                      </thead>
                      <tbody>
					  <?php //print_r($listings);exit(); ?>
                        <?php if(count($listings)): foreach($listings as $listing_item):?>
                                    <tr>
									     <td><a href="#" title="Mark with Star"><i class="fa fa-star-o"></i></a> &nbsp;<?php echo anchor('fmessages/delete/'.$lang_code.'/'.$listing_item->id, '<i class="fa fa-trash-o"></i> '.lang(''), array('onclick' => 'return confirm(\''.lang_check('Are you sure?').'\')', 'class'=>'action-btn'))?></td>
									
									
									
									
									    <!--<td><?php echo btn_delete('fmessages/delete/'.$lang_code.'/'.$listing_item->id)?></td>
                                        <td><?php echo $listing_item->id; ?>&nbsp;&nbsp;<?php echo $listing_item->readed == 0? '<span class="label label-warning">'.lang_check('Not readed').'</span>':''?></td>-->
                                        
                                        <td><i class="fa fa-mail-forward"></i>&nbsp;<?php echo $listing_item->name_surname; ?></td>
                                        <td><?php echo $listing_item->message; ?></td>
                                        <!--<td><?php echo $all_estates[$listing_item->property_id]; ?></td>
                                        <td><?php echo btn_edit('fmessages/edit/'.$lang_code.'/'.$listing_item->id)?></td>--->
                                         <td><?php echo $listing_item->date; ?></td>
                                    
                                    </tr>
                        <?php endforeach;?>
                        <?php else:?>
                                    <tr>
                                    	<td colspan="20"><?php echo lang_check('We could not find any');?></td>
                                    </tr>
                        <?php endif;?>           
                      </tbody>
                    </table>
                    </div>
                  </div>
            </div>
            </div>
        </div>
                            </div>
                        </div><!-- /.row -->
                    </div>
					</div></div>
					<!-- /.block-content -->
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

</body>
</html>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>