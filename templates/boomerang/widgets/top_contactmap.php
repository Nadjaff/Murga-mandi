<?php
/*
Widget-title: Contact map
Widget-preview-image: /assets/img/widgets_preview/top_contactmap.jpg
 */
?>

<!--<section class="slice no-padding">
    <div id="mapCanvas" class="map-canvas no-margin"></div>
</section> -->
<?php _widget('top_search');?>
<section class="slice bg-white " style="padding:0px;">        <div class="container">




				 	<!--	            <div class="wp-section relative">                <form class="form-inline form-base search-form" role="form">                    <div class="inline-form-filters base">                                               <div class="row">                            <div class="col-md-4">                                <div class="form-group form-group-lg search_option_smart-select">                                    <label class="sr-only"><?php echo _l('Search text');?></label>                                     <input id="search_option_smart" type="text" class="form-control input-lg" value='<?php _che($search_query); ?>' placeholder="{lang_CityorCounty}">                                                                    </div>                            </div>                                                       <div class="col-md-2">                                <div class="form-group form-group-lg field_select">                                     <label class="sr-only"><?php _che(${'options_name_4'}); ?></label>                                    <select id="search_option_4" class="form-control select_styled base no-padding">                                        <?php _che(${'options_values_4'}); ?>                                    </select>                                </div>                            </div>                            <div class="col-md-2">                                <div class="form-group form-group-lg field_select">                                     <label class="sr-only"><?php _che(${'options_name_3'}); ?></label>                                    <select id="search_option_3" class="form-control select_styled base no-padding">                                        <?php _che(${'options_values_3'}); ?>                                    </select>                                </div>                            </div>														 <div class="col-md-2">                                <div class="form-group form-group-lg field_select">                                     <label class="sr-only"><?php _che(${'options_name_36'}); ?></label>                                    <select id="search_option_36" class="form-control select_styled base no-padding">                                        <?php _che(${'options_values_36'}); ?>                                    </select>                                </div>                            </div>                            <div class="col-md-2">                                <a href="#"  id="search-start" class="btn btn-lg btn-block btn-alt btn-icon btn-icon-right btn-icon-go">                                    <span>{lang_Search}</span>                                </a>                            </div>                        </div>                    </div>                 </form>            </div>-->        </div>						<div class="col-md-12">							<div class="ads-1" style="padding:0px 268px 0px;">							<a><img src="assets/images/ad-1.jpg"></a>							</div>						  </div>		    </section>		
<script>
var map;
<?php

$color='';
if($this->session->userdata('color'))
    $color=$this->session->userdata('color').'/';
elseif(isset($settings_css_varian) && !empty ($settings_css_varian))
    $color=$settings_css_varian.'/';

?>
function initialize() {
  var myLatlng = new google.maps.LatLng({settings_gps});
  var mapOptions = {
    zoom: {settings_zoom},
	scrollwheel: false,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById('mapCanvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
	  animation: google.maps.Animation.DROP,
      title: '',
       icon: 'assets/img/markers/<?php echo $color;?>house.png'
                    
  });
  
  var contentString = '<div class="info-window-content"><h2><?php echo str_replace("'", "\'", $settings_websitetitle) ;?></h2>'+
					  '<p>{lang_Address}: <?php echo str_replace("'", "\'", $settings_address) ;?></p></div>';
					  
  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
  
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
  
  
  /* additional refreah marker color, when color template changed */
  
  $('.color-switch.color-template a').click(function(){
      marker.setMap(null);
      var color = $(this).attr('color');
      var markerNew = new google.maps.Marker({
            position: myLatlng,
            map: map,
            animation: google.maps.Animation.DROP,
            title: '',
            icon: 'assets/img/markers/'+color+'/house.png'
        });
    
    var contentString = '<div class="info-window-content"><h2><?php echo str_replace("'", "\'", $settings_websitetitle) ;?></h2>'+
					  '<p>{lang_Address}: <?php echo str_replace("'", "\'", $settings_address) ;?></p></div>';
        google.maps.event.addListener(markerNew, 'click', function() {
            infowindow.open(map,markerNew);
          });

  })
  
  $('#design-reset').click(function(){
      marker.setMap(null);
      var markerNew = new google.maps.Marker({
            position: myLatlng,
            map: map,
            animation: google.maps.Animation.DROP,
            title: '',
            icon: 'assets/img/markers/house.png'
        });
    
    var contentString = '<div class="info-window-content"><h2><?php echo str_replace("'", "\'", $settings_websitetitle) ;?></h2>'+
					  '<p>{lang_Address}:<?php echo str_replace("'", "\'", $settings_address) ;?></p></div>';
    google.maps.event.addListener(markerNew, 'click', function() {
        infowindow.open(map,markerNew);
    });

  })
  /* end additional refreah marker color */
}

google.maps.event.addDomListener(window, 'load', initialize);

$('a[data-type="gmap"]').on('shown.bs.tab', function (e) {
  initialize();
})
</script>