<?php 

                   
	 $ci =& get_instance();
     $class = $ci->db->query("SELECT * from `user` where type= 'DOCTOR'");
     $class = $class->result_array();
     //print_r($class); exit();
  		  
            

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
			
<div class="row pd-2">
<div class="head-ads">

	<div class="row">

	  <div class="col-md-6 col-sm-6"><h1>{lang_DoctorsList}</h1></div>

	  <div class="col-md-6 col-sm-6"><h1 style="text-align:right;margin: 10px 0 0;"><a href="<?php echo site_url('askdoctor/qna_an/'.$this->data['lang_code']) ?>" class="btn btn-rjnew">{lang_QuestionAnswer}</a></h1></div>
	</div>

	</div>
<div class="row">
<?php  foreach($class as $keys=>$values)
				{ 
				//print_r($values); exit();
					$arrs = $values;
					
				      
				
?>
	  <div class="col-md-12">

		<div class="crops-page rjdoctor">

		  <div class="row">

			  <div class="col-md-2 col-sm-4">

				<div class="main-crops">
                 <?php $sit= site_url(); $sit_arr =explode('index.php',$sit);?>
				 
				 
				<a href="<?php echo site_url('askdoctor/doctor_profile/'.$this->data['lang_code']) ?>?id=<?php echo $values['id']; ?>"><img src="
				
				
				<?php echo $sit_arr[0]; ?>/files/thumbnail/<?php echo $values['image_user_filename']; ?>"></a>

				</div>

			  </div>
         
			  <div class="col-md-7 col-sm-8">

				<a href="<?php echo site_url('askdoctor/doctor_profile/'.$this->data['lang_code']) ?>?id=<?php echo $values['id']; ?>">
				<h4>Dr.<?php echo $values['name_surname'] ."(". $values['profession'] .")"  ?></h4>

				<h5><?php echo $values['experience']; ?> years experience</h5>

				<h5><b>Expertise:</b><?php echo $values['expertise']; ?></h5></a>

			  </div>

			  <div class="col-md-3 col-sm-8">

				<h4><a href="<?php echo site_url('askdoctor/ask_question/'.$this->data['lang_code']) ?>?id=<?php echo $values['id']; ?>"><button class="btn btn_org btn-block mt5 mb5">{lang_AskaQuestion}</button></a></h4>

			  </div>

		  </div>

		</div>

	  </div>
				<?php } ?>
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
