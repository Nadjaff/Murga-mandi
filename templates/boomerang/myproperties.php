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
			
<div class="row pd-2">


  
<h2 style="margin: 19px 0 5px;
    color: #2965be;
    font-size: 17px;
    font-weight: normal;"><?php echo lang_check('Your Murga Mandi Ads') ?></h2>

<p><?php echo lang_check('You can manage your Ads here') ?></p>
  
<ul class="nav nav-tabs">        
<li class="active"><a data-toggle="tab" href="#home"><?php echo lang_check('Ads') ?></a></li>    
<li><a href="<?php echo  site_url('fmessages/mymessages/'.$this->data['lang_code']); ?>"><?php echo lang_check('Message') ?></a></li>    
<li><a data-toggle="tab" href="#menu2"><?php echo lang_check('Payment') ?></a></li>    
<li><a href="<?php echo site_url('frontend/myprofile/'.$this->data['lang_code']) ?>"><?php echo lang_check('Settings') ?></a></li>  </ul>  
<div class="tab-content">    
<div id="home" class="tab-pane fade in active">               <div role="tabpanel" class="tab-pane active">	<div class="row head-block-page">	  <div class="col-md-6"></div>	  
     <div class="col-md-6">

	  <form class="navbar-form" role="search">

		<div class="input-group add-on pull-right">

		  <!--<input class="form-control" placeholder="Search..." name="srch-term" id="srch-term" type="text">-->
           <input class="form-control" type="text" id="myInput" name="srch-term"  onkeyup="myFunction()" placeholder="<?php echo lang_check('Search for address..') ?>" title="Type in a name">
		   
		   
		   
		  <div class="input-group-btn">

			<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>

		  </div>

		</div>

	  </form>

	  </div>










	</div>	  
<div class="table-responsive">             
      
 <table class="table table-hover" id="myTable" style="margin-top: 11px;"> 
 <thead>
 <tr class="blue">
 <!--<th>
 <input type="checkbox"></th>-->
 <th><?php echo lang_check('id') ?></th>
 <th><?php echo lang_check('Date') ?></th>              
 <th><?php echo lang_check('Ad Photo') ?></th>              
 <th><?php echo lang_check('Address') ?></th>
 <th><?php echo lang_check('AverageRate') ?></th>
 <th><?php echo lang_check('Action') ?></th>
 </tr>          
 </thead>          
<tbody>		


<?php $i=0; ?>
    
  <?php 
  if(count($estates)>0){
   foreach($estates as $k=>$value) { 
       $i++;
	   //$value = $val;
	  	$this->db->select('*,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=36 limit 1) AS exp_price,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=3 limit 1) AS avg_wgt,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=95 limit 1 ) AS qty,(select u.name_surname from user AS u JOIN property_user AS pu on pu.user_id=u.id  where p.id=pu.property_id) AS user_name')->from('property AS p');
								$this->db->where('p.is_activated',1);	
								$this->db->where('p.id',$value->id);
								$query = $this->db->get();
								$result = $query->row_array();
	//print_r($result);
	?>
        <tr>
		  <!--<td><input type="checkbox"  name="table_records[]" value="<?php $val->id; ?>"></td>-->
		    <?php $s = $value->date;
             $dt = new DateTime($s);

            $date = $dt->format('d/m/Y');
			?>
			<td>
               <?php 
			   echo '0'.$i;
			   
			   ?>			
			</td>			
			<td><?php echo $date; ?></td>
			  <?php $sit= site_url(); $sit_arr =explode('index.php',$sit);?>
			  <td><a href="<?php echo site_url().'/property/'.$value->id.'/'.$lang_code.'?preview=true'; ?>"><img style="width:45px;" src="<?php echo $sit_arr[0]; ?>/files/thumbnail/<?php echo $value->image_filename; ?> "></a></td>
		      <td><?php echo $value->address; ?></td>
		      <td>Rs.<?php echo $result['exp_price']; ?></td>
		      <td>
			  <!--<a href="view-crop.html"><button type="button" class="btn btn-success action-btn" title="View More"></button></a> -->
			  <?php echo anchor('property/'.$value->id.'/'.$lang_code.'?preview=true', '<i class="fa fa-eye"></i> ', array('class'=>'btn btn-success action-btn'))?>
			  
			  
			  
			  
			  <?php echo anchor('frontend/editproperty/'.$lang_code.'/'.$value->id, '<i class="fa fa-pencil-square-o"></i> '.lang(''), array('class'=>'btn btn-warning action-btn '))?>
			  <?php echo anchor('frontend/deleteproperty/'.$lang_code.'/'.$value->id, '<i class="fa fa-trash-o"></i> '.lang(''), array('onclick' => 'return confirm(\''.lang_check('Are you sure?').'\')', 'class'=>'btn btn-danger action-btn'))?>
				  
			 </td>

           
		</tr>
<?php   } } ?>
 
</tbody>      
 </table>      
 </div><!--end of .table-responsive-->	         
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
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
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