<?php 
$id =$_REQUEST['id'];
                   
	 $ci =& get_instance();
	
	

	
 $pro = $ci->db->query("SELECT * from `user` WHERE  id = '$id'");
   $pro = $pro->result_array();
//print_r($pro); exit();
  		  
            

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
	
	a.btn.action-btn {
    padding: 0 6px;
  
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


  
<div class="container mb30" style="margin-left: -30px;">
	<div class="head-ads">
	<div class="row">
	  <div class="col-md-6 col-sm-6"><h1>{lang_Profile}</h1></div>
	  <div class="col-md-6 col-sm-6"><h1 style="text-align:right;margin: 10px 0 0;"><a href="#" class="btn btn_org">{lang_AskaQuestion}</a></h1></div>
	</div>
	</div>
	<div class="row">
	     <?php  foreach($pro as $keys=>$values)
				{ 
				//print_r($values); exit();
					$arrs = $values;
				}	
				      
				
?>
	
	  <div class="col-md-8 col-md-offset-2">
		<div class="crops-page rjdoctor">
		  <div class="row">
			  <div class="col-md-3 col-sm-4">
			   <?php $sit= site_url(); $sit_arr =explode('index.php',$sit);?>
				<div class="main-crops"><img src="<?php echo $sit_arr[0]; ?>/files/thumbnail/<?php echo $values['image_user_filename']; ?>"></div>
			  </div>
			  <div class="col-md-9 col-sm-8">
				<h4><?php echo $values['name_surname'] ."(". $values['profession'] .")"  ?></h4>
				<h5><?php echo $values['experience']; ?> years experience &nbsp; <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
				<h5><b>Expertise:</b><?php echo $values['expertise']; ?></h5>
				<div class="drcontinfo">
				<h4>Contact</h4>
				<h5><b>Mobile Number:</b><?php echo $values['phone']; ?></h5>
				<h5><b>Office Number:</b><?php echo $values['phone2']; ?></h5>
				<h5><b>Email Id:</b> <?php echo $values['mail']; ?></h5>
				<h5><b>Address:</b> <?php echo $values['address'] .",". $values['city'] .","."(". $values['state'].")"  ?></h5>
				<h4>A little about me</h4>
				<p><?php echo $values['aboutMe']; ?></p>
			  </div>
			  </div>
			  
		  </div>
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
