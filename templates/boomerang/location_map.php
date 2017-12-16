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
<style>
a {
    text-transform: capitalize;
}
.body-bg-1 {
    background: #fff;
}
a:focus, a:hover {
    color: #fe8544;
}
a{color:#2965BE;}

</style>
<body class="body-wrap <?php _widget('custom_paletteclass'); ?>">

<?php _widget('slidebar'); ?>

    <?php _widget('custom_palette');?>
    
    <!-- HEADER -->
    <div id="divHeaderWrapper">
    <header class="header-standard-3"> 
        <?php _widget('header_loginmenu');?>
        
    </header>   
    </div>
      <?php _widget('top_search');?>
    <!-- MAIN CONTENT -->
<!-- MAIN WRAPPER -->
<div class="container" style="margin-top: 20px;">
	<div class="row">
			<div class="col-md-12">
			<div class="location-map">
			<h2 class="heading-main">Location Map</h2>			
			<h4>Available locations (<?php echo count($output_data); ?>)</h4>
				<div class="row mb20">
					<div class="col-md-3">
						<ul>
						<?php foreach($output_data as $value){ ?>
							<li>
								
								<?php 
									$this->db->select('*');
									$this->db->where('address',$value['address']);
									$query = $this->db->get('property');
									$count = $query->result_array();
								?>
							
								<a href="<?php echo base_url(); ?>index.php/searchlisting/search/<?php echo $lang_code; ?>?cityfield=<?php echo $value['address']; ?>"><?php echo $value['address'].' ('.count($count).')'; ?></a>
							</li>
						<?php }  ?>
						</ul>
					</div>				  
				</div>
			</div>
		</div>
	</div>
 <!-- FOOTER -->
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>
</div>

<?php _widget('custom_javascript');?>

</body>
</html>
	
	