<?php 
/* function getColor template */
        if(!empty($settings_css_variant) && !preg_match('/styles.css$/', $settings_css_variant)){
           $_color= substr($settings_css_variant, strrpos($settings_css_variant, 'assets/css/styles_')+strlen('assets/css/styles_') );
           $_color= explode('.', $_color);
           $color= $_color[0].'/';
        }else {
           $color='';
        }
/* end function getColor template */
?>

<!-- Essentials -->
<?php cache_file('big_js_cus.js', 'assets/js/modernizr.custom.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/bootstrap/js/bootstrap.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/bootstrap-select.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/typeahead.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.mousewheel-3.0.6.pack.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.easing.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.metadata.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.hoverup.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.hoverdir.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.stellar.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.placeholder.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/blueimp-gallery.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/boomerang.js'); ?>

<!-- Boomerang mobile nav - Optional  -->
<?php cache_file('big_js_cus.js', 'assets/libraries/responsive-mobile-nav/js/jquery.dlmenu.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/responsive-mobile-nav/js/jquery.dlmenu.autofill.js'); ?>

<!-- Forms -->
<?php cache_file('big_js_cus.js', 'assets/libraries/ui-kit/js/jquery.powerful-placeholder.min.js'); ?> 
<?php cache_file('big_js_cus.js', 'assets/libraries/ui-kit/js/cusel.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/sky-forms/js/jquery.form.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/sky-forms/js/jquery.validate.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/sky-forms/js/jquery.maskedinput.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/sky-forms/js/jquery.modal.js'); ?>

<!-- Assets -->
<?php cache_file('big_js_cus.js', 'assets/libraries/hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/page-scroller/jquery.ui.totop.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/mixitup/jquery.mixitup.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/mixitup/jquery.mixitup.init.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/fancybox/jquery.fancybox.pack.js?v=2.1.5'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/waypoints/waypoints.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/milestone-counter/jquery.countTo.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/easy-pie-chart/js/jquery.easypiechart.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/social-buttons/js/rrssb.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/nouislider/js/jquery.nouislider.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/owl-carousel/owl.carousel.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/bootstrap/js/tooltip.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/bootstrap/js/popover.js'); ?>

<!-- Sripts for individual pages, depending on what plug-ins are used -->

<!-- Temp -- You can remove this once you started to work on your project -->
<?php cache_file('big_js_cus.js', 'assets/js/jquery.cookie.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/wp.switcher.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/wp.ga.js'); ?>

<?php cache_file('big_js_cus.js', 'assets/js/jquery.helpers.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.number.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.h5validate.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/bootstrap-datetimepicker.min.js'); ?>

<!-- Boomerang App JS -->
<?php cache_file('big_js_cus.js', 'assets/js/wp.app.js'); ?>
<?php cache_file('big_js_cus.js', NULL, false); ?>
<!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
<![endif]-->




<!-- jquery.cookiebar -->
<!-- url -- http://www.primebox.co.uk/projects/jquery-cookiebar/ -->
<?php if(config_item('cookie_warning_enabled') === TRUE): ?>
<script type="text/javascript">
 $('document').ready(function(){
    $.cookieBar({
    //declineButton: true,
    message: "<p><?php _l('Accept cookiebar');?></p><br>",
    acceptText: "<?php _l('I Agree');?>",
    //declineText: "<?php _l('I dont agree');?>",
});
}) 

</script>
<?php endif;?>
<!--end jquery.cookiebar -->

<?php if(file_exists(APPPATH.'controllers/admin/reviews.php')): ?>
    <script src="assets/js/ratings/bootstrap-rating-input.js"></script> 
<?php endif; ?>


<script type="text/javascript">
    
    $('document').ready(function(){
        if ( ! Modernizr.objectfit ) {
          $('.object-fit-container').each(function () {
            var $container = $(this),
                imgUrl = $container.find('img').prop('src');
            if (imgUrl) {
              $container
                .css('background-image', 'url("'+imgUrl+'")')
                .addClass('compat-object-fit');
            }  
          });
        }

    })
    
/*
 $(window).load(function(){
    if($('.resize-block .jumbotron-right').length>0){
        $('.resize-block  .jumbotron-left .carousel-inner,.resize-block .carousel-1.carousel-fixed-height .item').animate(
                                                                            {height:parseInt($('.resize-block  .jumbotron-right').outerHeight())}
                                                                            ,50);
    }
 })
 */
 /*
 * 
 * Resize arrow slider
 * 
 */
/*
$(window).load(function(){
        $(window).on('resize', function(){
               $('.resize-block  .jumbotron-left .carousel-inner,.resize-block .carousel-1.carousel-fixed-height .item').animate(
                                                                            {height:parseInt($('.resize-block  .jumbotron-right').outerHeight())}
                                                                            ,50);
        });
})
*/

/*
 * END Resize arrow slider
 */
</script>    
    
<script type="text/javascript">



var timerMap;
var ad_galleries;
var firstSet = false;
var mapRefresh = true;
var loadOnTab = true;
var zoomOnMapSearch = 9;
var clusterConfig = null;
var markerOptions = null;
var mapDisableAutoPan = false;
var mapStyle = [{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}];
var rent_inc_id = '55';
var scrollWheelEnabled = false;
var myLocationEnabled = true;
var rectangleSearchEnabled = true;

var mapRefresh = true;
var map_main;
var styles;
var timerMap;
var firstSet = false;
var selectorResults = '.results_conteiner';

var c_mapTypeId = "style1"; // google.maps.MapTypeId.ROADMAP;
var c_mapTypeIds = ["style1",
                    google.maps.MapTypeId.ROADMAP,
                    google.maps.MapTypeId.HYBRID];   
  // Cluster config start //
            clusterConfig = {
              radius: 60,
              // This style will be used for clusters with more than 2 markers
//              2: {
//                content: "<div class='cluster cluster-1'>CLUSTER_COUNT</div>",
//                width: 53,
//                height: 52
//              },
              // This style will be used for clusters with more than 5 markers
              5: {
                content: "<div class='cluster cluster-1'>CLUSTER_COUNT</div>",
                width: 53,
                height: 52
              },
              // This style will be used for clusters with more than 20 markers
              20: {
                content: "<div class='cluster cluster-2'>CLUSTER_COUNT</div>",
                width: 56,
                height: 55
              },
              // This style will be used for clusters with more than 50 markers
              50: {
                content: "<div class='cluster cluster-3'>CLUSTER_COUNT</div>",
                width: 66,
                height: 65
              },
              events: {
                click:function(cluster, event, object) {
                    try {
                        var same_address = true;
                        var adr = '';
                        $.each(object.data.markers, function(item) {
                            
                            if(adr == '')
                                adr = object.data.markers[item].adr;
                            
                            if(adr != object.data.markers[item].adr)
                                same_address = false;
                        });
                        
                        if(same_address)
                        {
                            cluster.main.map.panTo(object.data.latLng);
                            cluster.main.map.setZoom(19);
                        }
                        else
                        {
                            cluster.main.map.panTo(object.data.latLng);
                            cluster.main.map.setZoom(cluster.main.map.getZoom()+1);
                        }
                    }
                    catch(err) {
                        cluster.main.map.panTo(object.data.latLng);
                        cluster.main.map.setZoom(cluster.main.map.getZoom()+1);
                    }
                }
              }
            };
            // Cluster config end //
$(window).load(function() {
    /***********************************************************
     * ISOTOPE
     ***********************************************************/
   /* var isotope_works = $('.properties-items');
    isotope_works.isotope({
        'itemSelector': '.property-item'
    });

    $('.properties-filter a').click(function() {
        $(this).parent().parent().find('li').removeClass('selected');
        $(this).parent().addClass('selected');

        var selector = $(this).attr('data-filter');
        isotope_works.isotope({ filter: selector });
        return false;
    });*/
});

$(document).ready(function() {
	//'use strict';
    

  
    /***********************************************************
     * palette
     ***********************************************************/
    
    // LAYOUT COLOR/dark
    
    // Select option
    if($("#wpStylesheet").attr("href") == "assets/css/styles_dark.css"){
        $("#cmbLayoutColor").find('option[value="2"]').attr("selected",true)
    } else if ($("#wpStylesheet").attr("href") == "assets/css/styles.css"){
        $("#cmbLayoutColor").find('option[value="1"]').attr("selected",true)
    }
    
    $("#cmbLayoutColor").change(function(){
            if($("#cmbLayoutColor").val() == 2){
                $('body').addClass('dark-style');
                $("#template_style").attr("href", "assets/css/template_dark.css");
            }
            else{
                $('body').removeClass('dark-style');
                $("#template_style").attr("href", "");
            }
    });
    // end LAYOUT COLOR/dark

    // SCHEMES
    $("#cmdSchemeRed").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_red.css");
            return false;
    });
    $("#cmdSchemeViolet").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_violet.css");
            return false;
    });
    $("#cmdSchemeBlue").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_blue.css");
            return false;
    });
    $("#cmdSchemeGreen").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_green.css");
            return false;
    });
    $("#cmdSchemeYellow").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_yellow.css");
            return false;
    });
    $("#cmdSchemeOrange").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_orange.css");
            return false;
    });

    // SPECIAL SCHEMES
    $("#cmdSchemeBW").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_bw.css");
            return false;
    });
    $("#cmdSchemeDark").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_dark.css");
            return false;
    });
    $("#cmdSchemeFlat").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_flat.css");
            return false;
    });


//// SCHEMES SETOPTION
var scheme = $.cookie('scheme');

if($("#wpStylesheet").attr("href") == "assets/css/styles_red.css") {
	// Select option
	$("#cmdSchemeRed").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_red.css");
}
else if($("#wpStylesheet").attr("href") == "assets/css/styles_violet.css") {
	// Select option
	$("#cmdSchemeViolet").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_violet.css");
}
else if($("#wpStylesheet").attr("href") == "assets/css/styles_blue.css") {
	// Select option
	$("#cmdSchemeBlue").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_blue.css");
}
else if($("#wpStylesheet").attr("href") == "assets/css/styles_green.css") {
	// Select option
	$("#cmdSchemeGreen").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_green.css");
}
else if($("#wpStylesheet").attr("href") == "assets/css/styles_yellow.css") { 
	// Select option
	$("#cmdSchemeYellow").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_yellow.css");
}
else if($("#wpStylesheet").attr("href") == "assets/css/styles_orange.css") {
	// Select option
	$("#cmdSchemeOrange").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_orange.css");
}

// SPECIAL SCHEMES
else if($("#wpStylesheet").attr("href") == "assets/css/styles_bw.css") {
	// Select option
	$("#cmdSchemeBW").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_bw.css");
}
else if(scheme == "dark") {
	// Select option
	$("#cmdSchemeDark").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_dark.css");
}
else if($("#wpStylesheet").attr("href") == "assets/css/styles_flat.css") {
	// Select option
	$("#cmdSchemeFlat").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_flat.css");
}

$('#design-reset').click(function(){
    $('body').attr('class','body-wrap');
    $("#wpStylesheet").attr("href", "assets/css/styles.css");
    
})


    $('.color-switch:not(#cmbBodyBg) a').click(function (e) { 
      e.preventDefault();
      manualSearch(0,false,false,$(this).attr('color'));
      return false;
    });


    $('#design-reset').click(function (e) { 
      e.preventDefault();
      $('.color-switch a').removeClass('active');
      $('body').removeClass('dark-style');
      $("#template_style").attr("href", "");
      manualSearch(0,false,false, 'default');
      return false;
    });
    
    /***********************************************************
     * end palette
     ***********************************************************/
    
    
    
    
    
    
    /***********************************************************
     * blueimp gallery
     ***********************************************************/
    $('div.image-gallery a.post-picture-target').bind("click touchstart", function(event)
    {
        var myLinks = new Array();
        var current = $(this).attr('href');
        var curIndex = 0;
        
        $('div.image-gallery a.post-picture-target').each(function (i) {
            var img_href = $(this).attr('href');
            myLinks[i] = img_href;

            if(current == img_href)
                curIndex = i;
        });

        var options = {index: curIndex};
        
        blueimp.Gallery(myLinks, options);
        
        return false;
    });
    
    /***********************************************************
     * blueimp gallery2
     ***********************************************************/
    $('div.image-gallery-agents a.post-picture-target').bind("click touchstart", function(event)
    {
        var myLinks = new Array();
        var current = $(this).attr('href');
        var curIndex = 0;
        
        $(this).parent().find('a.post-picture-target').each(function (i) {
            var img_href = $(this).attr('href');
            myLinks[i] = img_href;

            if(current == img_href)
                curIndex = i;
        });

        var options = {index: curIndex};
        
        blueimp.Gallery(myLinks, options);
        
        return false;
    });

    /***********************************************************
     * FLEXSLIDER
     ***********************************************************/
    /*$('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
    
    $('.flexslider-top').flexslider({
        animation: "slide"
    });
    */
    $(window).on('resize', function(){
        //$('#wrapper, #main-wrapper').css('display', 'block');
        //$('#wrapper, #main-wrapper').css('display', 'table');
    });
    
    //Typeahead
   /* $('#search_option_smart').typeahead({
        minLength: 1,
        source: function(query, process) {
            $.post('{typeahead_url}/smart', { q: query, limit: 8 }, function(data) {
                process(JSON.parse(data));
            });
        }
    });*/
    
    //main-wrapper

    /***********************************************************
     * CHAINED SELECT BOXES
     ***********************************************************/
    //$('#select-location').chained('#select-country');
    //$('#select-sublocation').chained('#select-location');

    /***********************************************************
     * BXSLIDER
     ***********************************************************/
	/*$('.bxslider').bxSlider({
  		minSlides: 1,
  		maxSlides: 6,
  		slideWidth: 170,
  		slideMargin: 30,
        responsive: false
	});*/

    /***********************************************************
     * ACCORDION
     ***********************************************************/
    $('.panel-heading a[data-toggle="collapse"]').on('click', function () {
        if ($(this).closest('.panel-heading').hasClass('active')) {
            $(this).closest('.panel-heading').removeClass('active');
        } else {
            $('.panel-heading a[data-toggle="collapse"]').closest('.panel-heading').removeClass('active');
            $(this).closest('.panel-heading').addClass('active');
        }
    });

    /***********************************************************
     * MAP
     ***********************************************************/
    var locations = new Array();
    var contents = new Array();
    var types = new Array();
    var images = new Array();

    // various map styles
    styles = new Array(
        [{"featureType":"landscape","stylers":[{"hue":"#FFA800"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#53FF00"},{"saturation":-73},{"lightness":40},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FBFF00"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#00FFFD"},{"saturation":0},{"lightness":30},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#00BFFF"},{"saturation":6},{"lightness":8},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#679714"},{"saturation":33.4},{"lightness":-25.4},{"gamma":1}]}],
        [{"stylers":[{"visibility":"off"}]},{"featureType":"road","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},{"featureType":"road.arterial","stylers":[{"visibility":"on"},{"color":"#fee379"}]},{"featureType":"road.highway","stylers":[{"visibility":"on"},{"color":"#fee379"}]},{"featureType":"landscape","stylers":[{"visibility":"on"},{"color":"#f3f4f4"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#7fc8ed"}]},{},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#83cead"}]},{"elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"weight":0.9},{"visibility":"off"}]}],
        [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.business","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]}],
        [{"featureType":"water","stylers":[{"color":"#19a0d8"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"weight":6}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#e85113"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-40}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-20}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"road.highway","elementType":"labels.icon"},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","stylers":[{"lightness":20},{"color":"#efe9e4"}]},{"featureType":"landscape.man_made","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"hue":"#11ff00"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"hue":"#4cff00"},{"saturation":58}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#f0e4d3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-10}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"simplified"}]}],
        [{"featureType":"administrative","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#5f94ff"},{"lightness":26},{"gamma":5.86}]},{},{"featureType":"road.highway","stylers":[{"weight":0.6},{"saturation":-85},{"lightness":61}]},{"featureType":"road"},{},{"featureType":"landscape","stylers":[{"hue":"#0066ff"},{"saturation":74},{"lightness":100}]}],
        [{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]}],
        [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}],
        [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#b5cbe4"}]},{"featureType":"landscape","stylers":[{"color":"#efefef"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#83a5b0"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bdcdd3"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e3eed3"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}],
        [{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}]
    );

    function get_gps_ranges(center_lat, center_lng, range_level_lat, range_level_lng) {
        var lat = center_lat + (Math.random() * (range_level_lat + range_level_lat) - range_level_lat);
        var lng = center_lng + (Math.random() * (range_level_lng + range_level_lng) - range_level_lng);
        return Array(lat, lng);
    }
    //var icons = new Array('apartment', 'building-area', 'condo', 'cottage', 'family-house', 'flatblocks', 'flatblocks2', 'house', 'single-home', 'villa');

    // generate random content for properties map
//    for (var i=0; i < 50; i++) {
//        var icon_name = icons[Math.floor(Math.random()*icons.length)];
//        locations.push(get_gps_ranges(40.67, -73.94, 0.08, 0.60));
//        contents.push('<div class="infobox"><div class="infobox-header"><h3 class="infobox-title"><a href="#">30 Miller Pl Apt 3</a></h3><h4 class="infobox-subtitle"><a href="#">San Francisco, CA</a></h4></div><div class="infobox-picture"><a href="#"><img src="assets/img/tmp/properties/medium/'+Math.floor((Math.random()*10)+1) +'.jpg" alt=""></a><div class="infobox-price">$ 13,000</div></div></div>');
//        types.push('apartment');
//        images.push('<img src="assets/img/icons/' + icon_name + '.png" alt="">');
//    }

    <?php foreach($all_estates as $item): ?>
        <?php
            if(!isset($item['gps']))break;
        ?>
        locations.push(new google.maps.LatLng(<?php _che($item['gps']); ?>));
        contents.push("<?php echo _generate_popup($item, true); ?>");
        
        //console.log('<?php _che($item['gps']); ?>');
        types.push('<?php _che($item['option_6']); ?>');
        images.push('<img src="assets/img/icons/<?php _che($item['option_6']); ?>.png" alt="">');
    <?php endforeach; ?>


    if ($('#map').length !== 0) {
        map_main = $('#map').aviators_map({
            locations: locations,
            contents: contents,
            types: types,
           // images: images,
            transparentMarkerImage: 'assets/img/marker-transparent.png',
            transparentClusterImage:  'assets/img/clusterer-transparent.png',
            zoom: {settings_zoom},
            <?php if(config_item('custom_map_center') === FALSE): ?>
            center: new google.maps.LatLng({all_estates_center}),
            <?php else: ?>
            center: new google.maps.LatLng(<?php echo config_item('custom_map_center'); ?>),
            <?php endif; ?>
            enableGeolocation: false,
            styles: styles[$('#map').data('style')]
        });
    }
    
    {has_settings_gps}
    /***********************************************************
     * PROPERTY MAP
     ***********************************************************/
    if ($('#map-property').length !== 0) {
       var map= $("#map-property").gmap3({
            map:{
                // CENTRAL MAP DEFAULT
                /*address:"JAKARTA, INDONESIA",*/
                options:{
                    zoom:{settings_zoom},
                     center: {
                          latLng: [{settings_gps}],
                    },
                    scaleControl: false,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                    },
                   
                }
            },
            marker:{
                // DATA LOCATION
                values:[
                {
                    latLng:  [{settings_gps}],
                    options:{
                        icon: 'assets/img/markers/house.png'
                    }
                },
                ],
                events:{
                    mouseover: function(marker, event, context){
                        $(this).gmap3(
                        {
                            clear:"overlay"
                        },

                        {
                            overlay:{
                                latLng: marker.getPosition(),
                            }
                        });
                    }
                    
                }
            }
			
        });

    }
    {/has_settings_gps}
    
    <?php if(!empty($estate_data_gps)): ?>
    /***********************************************************
     * PROPERTY MAP 2
     ***********************************************************/
    if ($('#map-property-2').length !== 0) {
             if ($('#map-property-2').length !== 0) {
          $(function(){
       var map= $("#map-property-2").gmap3({
            map:{
                // CENTRAL MAP DEFAULT
                /*address:"JAKARTA, INDONESIA",*/
                options:{
                    zoom:{settings_zoom},
                     center: {
                          latLng: [{all_estates_center}],
                    },
                    scaleControl: false,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                    },
                   
                }
            },
            marker:{
                // DATA LOCATION
                values:[
                {
                    latLng:  [{estate_data_gps}],
                    options:{
                        icon: 'assets/img/markers/<?php echo (file_exists('templates/'.$settings_template.'/assets/img/markers/'.  strtolower($estate_data_option_6).'.png')) ? $estate_data_option_6 : 'house'; ?>.png'
                    }
                },
                ],
                events:{
                    mouseover: function(marker, event, context){
                        $(this).gmap3(
                        {
                            clear:"overlay"
                        },

                        {
                            overlay:{
                                latLng: marker.getPosition(),
                            }
                        });
                    }
                    
                }
            }
			
        });
    });

    } 
    }
    <?php endif; ?>

                // Filters Start //
            
            $(".checkbox_am").click((function(){
                var option_id = $(this).attr('option_id');
                
                if($(this).prop('checked'))
                {
                    $("#search_option_"+option_id).prop('checked', true);
                }
                else
                {
                    $("#search_option_"+option_id).prop('checked', false);
                }
                //console.log(option_id);
            }));
            
            $(".input_am").focusout((function(){
                var option_id = $(this).attr('option_id');
                
                $("#search_option_"+option_id).val($(this).val());
                //console.log(option_id);
            }));
            
            $(".input_am_from").focusout((function(){
                var option_id = $(this).attr('option_id');
                $("#search_option_"+option_id+"_from").val($(this).val());
                //console.log(option_id);
            }));
            
            $(".input_am_to").focusout((function(){
                var option_id = $(this).attr('option_id');
                
                $("#search_option_"+option_id+"_to").val($(this).val());
                //console.log(option_id);
            }));
            
            <?php if(empty($_GET['search']) && empty($search_query)): ?>
            $(".checkbox_am, .search-form .advanced-form-part label.checkbox input").prop('checked', false);
            $(".input_am, .input_am_from, .input_am_to, .search-form input[type=text], .search-form select").val('');
            <?php endif; ?>
            
            $('.search-form select.selectpicker').selectpicker('render');
            
            $("button.refresh_filters").click(function () { 
                manualSearch(0);
                return false;
            });
            showCounters([]);
            // Filters End //    
            
    
        // [START] Save search //  
        
        $("#search-save").click(function(){
            manualSearch(0, '#content-block', true);
            
            return false;
        });
        
        // [END] Save search //
        //Typeahead

            $('#search_option_smart').typeahead({
                minLength: 1,
                source: function(query, process) {
                    $.post('{typeahead_url}/smart', { q: query, limit: 8 }, function(data) {
                        process(JSON.parse(data));
                    });
                }
            });
            
            $('.twitter-typeahead input:first-child').attr('style', 'position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1')
            $('#search_option_smart').attr('style', 'position: relative; vertical-align: top;')
            
            /* Search start */

            $('.menu-onmap li a').click(function () { 
              if(!$(this).parent().hasClass('list-property-button'))
              {
                  $(this).parent().parent().find('li').removeClass("active");
                  $(this).parent().addClass("active");
                  
                  if(loadOnTab) manualSearch(0);
                  return false;
              }
            });
            
            <?php if(config_item('all_results_default') !== TRUE): ?>
            if($('.menu-onmap li.active').length == 0)
            {
                if(!$('.menu-onmap li:first').hasClass('list-property-button'))
                    $('.menu-onmap li:first').addClass('active');
            }
            <?php else: ?>
            if($('.menu-onmap li.active').length == 0)
            {
                $('.menu-onmap li.all-button').addClass('active');
            }
            <?php endif; ?>
            
            $('#search-start').click(function () { 
              manualSearch(0);
              return false;
            });
            /* Search end */
            
            <?php $dates_list = ''; if(isset($available_dates) && file_exists(APPPATH.'controllers/admin/booking.php')): ?>
            var dates_list = [];
            <?php foreach($available_dates as $date_format => $unix_format): ?>
            <?php
                $dates_list.='"'.$date_format.'", ';
            ?>
            <?php endforeach; ?>
            <?php
                if($dates_list != '')
                    $dates_list = substr($dates_list, 0, -2);
            ?>dates_list = [<?php echo $dates_list; ?>];
            <?php endif; ?>
            
            /* Date picker */
            
                        // Calendar translation start //
            
            var translated_cal = {
    			days: ["{lang_cal_sunday}", "{lang_cal_monday}", "{lang_cal_tuesday}", "{lang_cal_wednesday}", "{lang_cal_thursday}", "{lang_cal_friday}", "{lang_cal_saturday}", "{lang_cal_sunday}"],
    			daysShort: ["{lang_cal_sun}", "{lang_cal_mon}", "{lang_cal_tue}", "{lang_cal_wed}", "{lang_cal_thu}", "{lang_cal_fri}", "{lang_cal_sat}", "{lang_cal_sun}"],
    			daysMin: ["{lang_cal_su}", "{lang_cal_mo}", "{lang_cal_tu}", "{lang_cal_we}", "{lang_cal_th}", "{lang_cal_fr}", "{lang_cal_sa}", "{lang_cal_su}"],
    			months: ["{lang_cal_january}", "{lang_cal_february}", "{lang_cal_march}", "{lang_cal_april}", "{lang_cal_may}", "{lang_cal_june}", "{lang_cal_july}", "{lang_cal_august}", "{lang_cal_september}", "{lang_cal_october}", "{lang_cal_november}", "{lang_cal_december}"],
    			monthsShort: ["{lang_cal_jan}", "{lang_cal_feb}", "{lang_cal_mar}", "{lang_cal_apr}", "{lang_cal_may}", "{lang_cal_jun}", "{lang_cal_jul}", "{lang_cal_aug}", "{lang_cal_sep}", "{lang_cal_oct}", "{lang_cal_nov}", "{lang_cal_dec}"]
    		};
            
            if(typeof(DPGlobal) != 'undefined'){
                DPGlobal.dates = translated_cal;
            }
            
            if($(selectorResults).length <= 0)
                selectorResults = '.wrap-content .container';
            
            // Calendar translation End //
            
            var nowTemp = new Date();
            
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

            $('.datetimepicker_standard').datepicker().on('changeDate', function(ev) {
                $(this).datepicker('hide');
            });

            var checkin = $('#datetimepicker1').datepicker({
                onRender: function(date) {
                    
                    //console.log(date.valueOf());
                    //console.log(date.toString());
                    //console.log(now.valueOf());
                    
                    var dd = date.getDate();
                    var mm = date.getMonth()+1;//January is 0!`
                    
                    var yyyy = date.getFullYear();
                    if(dd<10){dd='0'+dd}
                    if(mm<10){mm='0'+mm}
                    var today_formated = yyyy+'-'+mm+'-'+dd;
                    
                    
                    if(date.valueOf() < now.valueOf()) // Just for performance
                    {
                        return 'disabled';
                    }
                    <?php if(file_exists(APPPATH.'controllers/admin/booking.php')): ?>
                    else if(dates_list.indexOf(today_formated )>= 0)
                    {
                        return '';
                    }
                    
                    return 'disabled red';
                    <?php else: ?>
                    return '';
                    <?php endif;?>
                }
            }).on('changeDate', function(ev) {
                if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 7);
                    checkout.setValue(newDate);
                }
                checkin.hide();
                $('#datetimepicker2')[0].focus();
            }).data('datepicker');
                var checkout = $('#datetimepicker2').datepicker({
                onRender: function(date) {

                    var dd = date.getDate();
                    var mm = date.getMonth()+1;//January is 0!`
                    
                    var yyyy = date.getFullYear();
                    if(dd<10){dd='0'+dd}
                    if(mm<10){mm='0'+mm}
                    var today_formated = yyyy+'-'+mm+'-'+dd;
                    
                    
                    if(date.valueOf() <= checkin.date.valueOf()) // Just for performance
                    {
                        return 'disabled';
                    }                    
                    <?php if(file_exists(APPPATH.'controllers/admin/booking.php')): ?>
                    else if(dates_list.indexOf(today_formated )>= 0)
                    {
                        return '';
                    }
                    
                    return 'disabled red';
                    <?php else: ?>
                    return '';
                    <?php endif;?>
            }
            }).on('changeDate', function(ev) {
                checkout.hide();
            }).data('datepicker');
            
        <?php if(file_exists(APPPATH.'controllers/admin/booking.php')): ?>
            /* Search booking form */
            
            var checkin_booking = $('#booking_date_from').datepicker({
                place: function(){
                    var element = this.component ? this.component : this.element;
                    element.after(this.picker);
		},   
                onRender: function(date) {
                    var dd = date.getDate();
                    var mm = date.getMonth()+1;//January is 0!`
                    
                    var yyyy = date.getFullYear();
                    if(dd<10){dd='0'+dd}
                    if(mm<10){mm='0'+mm}
                    var today_formated = yyyy+'-'+mm+'-'+dd;
                    
                    
                    if(date.valueOf() < now.valueOf())
                    {
                        return 'disabled';
                    }
                    
                    return '';
                }
            }).on('changeDate', function(ev) {
                if (ev.date.valueOf() > checkout_booking.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 7);
                    checkout_booking.setValue(newDate);
                }
                checkin_booking.hide();
                $('#booking_date_to')[0].focus();
            }).data('datepicker');
                var checkout_booking = $('#booking_date_to').datepicker({
                place: function(){
                    var element = this.component ? this.component : this.element;
                    element.after(this.picker);
		},   
                    
                    
                onRender: function(date) {

                    var dd = date.getDate();
                    var mm = date.getMonth()+1;//January is 0!`
                    
                    var yyyy = date.getFullYear();
                    if(dd<10){dd='0'+dd}
                    if(mm<10){mm='0'+mm}
                    var today_formated = yyyy+'-'+mm+'-'+dd;
                    
                    
                    if(date.valueOf() <= checkin_booking.date.valueOf())
                    {
                        return 'disabled';
                    }
                    
                    return '';
            }
            }).on('changeDate', function(ev) {
                checkout_booking.hide();
            }).data('datepicker');
            <?php endif;?>
            
            $('a.available.selectable').click(function(){
                $('#datetimepicker1').val($(this).attr('ref'));
                $('#datetimepicker2').val($(this).attr('ref_to'));
                $('div.property-form form input:first').focus();
                
                var nowTemp = new Date($(this).attr('ref'));
                var date_from = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                
                //console.log(date_from);
                
                checkin.setValue(date_from);
                date_from.setDate(date_from.getDate() + 7);
                checkout.setValue(date_from);
            });
            
            
            /* Date picker end */

            {has_extra_js}
            loadjQueryUpload();

            $(".cleditor").cleditor({
                width: "400px",
                height: "auto"
            });
            
            $('.tabbable li.rtab a').click(function () { 
                var tab_width = 0;
                var tab_width_real = 0;
                $('.tab-content').find('div.cleditorToolbar:first .cleditorGroup').each(function (i) {
                    tab_width += $(this).width();
                });
                
                tab_width_real = $('.tab-content').find('div.cleditorToolbar').width();
                var rows = parseInt(tab_width/tab_width_real+1)
                
                $('.tab-content').find('div.cleditorToolbar').height(rows*27);
                
                try {
                    $('.tab-content').find('.cleditor').refresh();
                }
                catch(err) {
                    // console.log(err.message);
                    // $(...).find(...).refresh is not a function
                }
                
            });
            
            $('.zoom-button').bind("click touchstart", function()
            {
                var myLinks = new Array();
                var current = $(this).attr('href');
                var curIndex = 0;
                
                $('.files-list-u .zoom-button').each(function (i) {
                    var img_href = $(this).attr('href');
                    myLinks[i] = img_href;
                    if(current == img_href)
                        curIndex = i;
                });
    
                options = {index: curIndex}
                
                blueimp.Gallery(myLinks, options);
                
                return false;
            });
            
            /* [Edit property] */
    
            // If alredy selected
            if($('#inputGps').length && $('#inputGps').val() != '')
            {
                savedGpsData = $('#inputGps').val().split(", ");
                
                $("#mapsAddress").gmap3({
                    map:{
                      options:{
                        center: [parseFloat(savedGpsData[0]), parseFloat(savedGpsData[1])],
                        zoom: 14
                      }
                    },
                    marker:{
                    values:[
                      {latLng:[parseFloat(savedGpsData[0]), parseFloat(savedGpsData[1])]},
                    ],
                    options:{
                      draggable: true
                    },
                    events:{
                        dragend: function(marker){
                          if($("#inputAddress").attr("readonly"))
                          {
                            alert('<?php _l('Location change disabled'); ?>');
                            return false;
                          }
                          else
                          {
                            $('#inputGps').val(marker.getPosition().lat()+', '+marker.getPosition().lng());
                          }
                        }
                  }}});
                
                firstSet = true;
            }
            else
            {
                $("#mapsAddress").gmap3({
                    map:{
                      options:{
                        center: [{settings_gps}],
                        zoom: 12
                      },
                    },
                marker:{
                    values:[
                      {latLng:[{settings_gps}]},
                    ],
                    options:{
                      draggable: true
                    },
                    events:{
                        dragend: function(marker){
                          if($("#inputAddress").attr("readonly"))
                          {
                            alert('<?php _l('Location change disabled'); ?>');
                            return false;
                          }
                          else
                          {
                            $('#inputGps').val(marker.getPosition().lat()+', '+marker.getPosition().lng());
                          }
                        }
                  }}
                  });
                  
                  firstSet = true;
            }
                
            $('#inputAddress').keyup(function (e) {
                clearTimeout(timerMap);
                timerMap = setTimeout(function () {
                    
                    $("#mapsAddress").gmap3({
                      getlatlng:{
                        address:  $('#inputAddress').val(),
                        callback: function(results){
                          if ( !results ){
                            ShowStatus.show('<?php echo str_replace("'", "\'", lang_check('Address not found!')); ?>');
                            return;
                          } 
                          
                            if(firstSet){
                                $(this).gmap3({
                                    clear: {
                                      name:["marker"],
                                      last: true
                                    }
                                });
                            }
                          
                          // Add marker
                          $(this).gmap3({
                            marker:{
                              latLng:results[0].geometry.location,
                               options: {
                                  id:'searchMarker',
                                  draggable: true
                              },
                              events: {
                                dragend: function(marker){
                                  if($("#inputAddress").attr("readonly"))
                                  {
                                    alert('<?php _l('Location change disabled'); ?>');
                                    return false;
                                  }
                                  else
                                  {
                                    $('#inputGps').val(marker.getPosition().lat()+', '+marker.getPosition().lng());
                                  }
                                }
                              }
                            }
                          });
                          
                          // Center map
                          $(this).gmap3('get').setCenter( results[0].geometry.location );
                          
                          $('#inputGps').val(results[0].geometry.location.lat()+', '+results[0].geometry.location.lng());
                          
                          firstSet = true;
    
                        }
                      }
                    });
                }, 2000);
                
            });
            
            /* [/Edit property] */
            
            {/has_extra_js}

     reloadElements();

});

        function manualSearch(v_pagenum, scroll_enabled, onlysave, color)
        {
            if (typeof scroll_enabled === 'undefined') scroll_enabled = "#content-block";
            if (typeof onlysave === 'undefined') onlysave = false;
            if (typeof color === 'undefined') color = false;

            
            // Order ASC/DESC
            var v_order = $('.selectpicker-small').val();
            
            // View List/Grid
            var v_view = $('.view-type.active').attr('ref');          
            
            //Define default data values for search
            var data = {
                order: v_order,
                view: v_view,
                page_num: v_pagenum
            };
            
            if(color) {
                data['color'] = color;
            }
            
            if($('#booking_date_from').length > 0)
            {
                if($('#booking_date_from').val() != '')
                    data['v_booking_date_from'] = $('#booking_date_from').val();
            }
            
            if($('#booking_date_to').length > 0)
            {
                if($('#booking_date_to').val() != '')
                    data['v_booking_date_to'] = $('#booking_date_to').val();
            }
            
            // Purpose, "for custom tabbed selector"
            /*
            if($('#search_option_4 .active a').length > 0)
            {
                data['v_search_option_4'] = $('#search_option_4 .active a').html();
            }
            */
            
            // Improved tabbed selector code
//            $(".tabbed-selector").each(function() {
//              var selected_text = $(this).find(".active:not(.all-button) a").html();
//              data['v_'+$(this).attr('id')] = selected_text;
//            });
            
            // Add custom data values, automatically by fields inside search-form
            $('.search-form  input:not(.skip), .search-form  select:not(.skip)').each(function (i) {
                if($(this).attr('type') == 'checkbox')
                {
                    if ($(this)[0].checked)
                    {
                        data['v_'+$(this).attr('id')] = $(this).val();
                    }
                }
                else if($(this).attr('type') == 'radio')
                {   
                    if ($(this)[0].checked)
                    {
                        //console.log($(this));
                        data['v_'+$(this).attr('name')] = $(this).attr('rel');
                    }
                }
                else if($(this).hasClass('tree-input'))
                {
                    if($(this).val() != '')
                    {
                        var tre_id_split = $(this).attr('id').split('_');
                        //console.log($(this).find("option:selected").attr('value'));
                        //console.log(tre_id_split);
                        if(data['v_search_option_'+tre_id_split[2]] == undefined)
                            data['v_search_option_'+tre_id_split[2]] = '';
                        
                        data['v_search_option_'+tre_id_split[2]]+= $(this).find("option:selected").text()+' - ';
                    }
                }
                else
                {
                    data['v_'+$(this).attr('id')] = $(this).val();
                }
            });
            
            //console.log(data);
            
            // Custom tags filter Start
            if($('#tags-filters').length > 0)
            {
                var tags_html = '';
                
                // Add custom data values, automatically by fields inside search-form
                $('.search-form form input, .search-form form select').each(function (i) {
                    if($(this).attr('type') == 'checkbox')
                    {
                        if ($(this).attr('checked'))
                        {
                            data['v_'+$(this).attr('id')] = $(this).val();
                            
                            var option_name = '';
                            //var attr = $(this).attr('placeholder');
                            var attr = $(this).attr('value').substring(4);
                            if(typeof attr !== 'undefined' && attr !== false)
                            {
                                option_name = attr;
                            }
                            
                            if($(this).val() != '')
                                tags_html+='<button class="btn btn-small btn-warning filter-tag ck" rel="'+$(this).attr('id')+'" type="button"><span class="icon-remove icon-white"></span> '+option_name+'</button>&nbsp;';
                        
                        }
                    }
                    else if($(this).hasClass('tree-input'))
                    {
                        // different way
                    }
                    else
                    {
                        data['v_'+$(this).attr('id')] = $(this).val();
                        
                        var option_name = '';
                        var attr = $(this).attr('placeholder');
                        if(typeof attr !== 'undefined' && attr !== false)
                        {
                            option_name = attr+': ';
                        }
                        
                        if($(this).val() != '')
                            tags_html+='<button class="btn btn-small btn-primary filter-tag" rel="'+$(this).attr('id')+'" type="button"><span class="icon-remove icon-white"></span> '+option_name+$(this).val()+'</button>&nbsp;';
                    
                    }
                });
                
                if(typeof data['v_search_option_4'] != 'undefined')
                if(data['v_search_option_4'].length > 0)
                    tags_html+='<button class="btn btn-small btn-danger filter-tag" rel="4" type="button"><span class="icon-remove icon-white"></span> '+data['v_search_option_4']+'</button>&nbsp;';
                
                if(tags_html != '')
                {
                    $("#tags-filters").css('display', 'block');
                    
                    $("#tags-filters").html(tags_html);
                    
                    $(".filter-tag").click(function(){
                        var m_id = $(this).attr('rel').substring(14);
                        
                        if($(this).hasClass('ck'))
                        {
                            $('#'+$(this).attr('rel')).prop('checked', false);
                        }
                        else
                        {
                            $("input.id_"+m_id).val('');
                            $("input#"+$(this).attr('rel')).val('');
                            
                            $("select#"+$(this).attr('rel')).val('');
                            $("select.id_"+m_id).val('');
                            $("select#"+$(this).attr('rel')+".selectpicker").selectpicker('render');
                            $("select.id_"+m_id+".selectpicker").selectpicker('render');
                        }
                        
                        $(this).remove();
                        
                        
                        if($(this).attr('rel') == '4')
                        {
                            $('#search_option_4 .active').removeClass('active');
                        }
                        
                        if($(this).hasClass('ck'))
                        {
                            $("input.checkbox_am[option_id='"+m_id+"']").prop('checked', false);
                        }
                        
                        manualSearch(0);
                    });
                }
                else
                {
                    $("#tags-filters").css('display', 'none');
                }
            }
            // Custom tags filter End
            
            $("#ajax-indicator-1").show();
            
            if(onlysave == true)
            {
                $.post("{api_private_url}/save_search/{lang_code}", data, 
                       function(data){
                    //console.log(data);
                    //console.log(data.message);
                    
                    ShowStatus.show(data.message);
                                    
                    $("#ajax-indicator-1").hide();
                });
                
                return;
            }
            
            <?php if(config_item('enable_ajax_url') == true): ?>
            if(support_history_api() == true)
            {
                if(data.page_num)
                    data.page_num = data.page_num.replace("#content", "");
                    
            	var json_string=JSON.stringify(data);
                json_string = json_string.replace("&amp;", "%26"); 
                
                history.pushState(data, '', '{page_current_url}?search='+json_string);
            }
            <?php endif; ?>
                
             /* color_path */
                if(data['color']=='default'){
                    var _color ='default';
                } else if( data['color']) {
                    var _color = data['color']+'/';
                } else {
                    
                    var _color = '';
                    if($('.color-switch a').hasClass('active')){
                        _color = $('.color-switch a.active').attr('color')+'/';
                    }
                }
                 
            /* end color_path */
                 
            <?php if(config_item('search_listing_page')&&$page_id!=config_item('search_listing_page')): ?>
                
                if( data['v_search_radius']==0)
                    data['v_search_radius'] ='';
                <?php
                
                // get title;
                $CI =& get_instance();
                $CI->load->model('page_m');
                $_page = $CI->page_m->get_lang(config_item('search_listing_page'),false,$lang_id);
                $_title=$_page->{'navigation_title_'.$lang_id};
                
                ?>
                window.location.href='<?php echo site_url($lang_code.'/'.config_item('search_listing_page').'/'.url_title_cro($_title, '-', TRUE))?>?search='+JSON.stringify(data);
                return false;
                
            <?php endif;?>     
                
            showCounters(data);  
            $.post("{ajax_load_url}/"+v_pagenum, data,
             function(data){
             $("#wrap-map").gmap3({
                        clear: {
                            name:["marker"]
                        }
                    });
                if(mapRefresh && $('#wrap-map').length > 0)
                {
                    //Remove all markers
                   /* map_main.aviators_map('removeMarkers');*/
                    if(data.results.length > 0)
                    {
                 
                 var markers = new Array();
                 
                 /*console.log(data.results);*/
                    $.each(data.results, function( index, listing ) {
                    /*
                    if(!_color)  {    
                        
                        var icon= 'assets/img/markers/<?php echo $color;?>'+listing.options.cssclass+'.png'
                        
                    }else if(_color=='default') {
                        var icon= 'assets/img/markers/'+listing.options.cssclass+'.png'
                     } else {
                         var icon= 'assets/img/markers/'+_color+listing.options.cssclass+'.png'
                    }*/
                        
                    if( typeof listing.latLng !== 'undefined'){
                    
                     var icon =  listing.options.icon;
                    markers.push( {
                        latLng:[listing.latLng[0], listing.latLng[1]],
                        data:{
                            /*img_preview: listing.options.icon, */
                            /*img_preview: listing.options.icon, */
                            content:listing.data
                        }, 
                        options:{
                          /*icon: listing.options.icon*/
                                icon: icon
                        },
                    });
                }
                });
                 
            $("#wrap-map").gmap3({
                       map:{
                // CENTRAL MAP DEFAULT
                options:{
                    center: {lat:data.results_center[0], lng: data.results_center[1]},
                }
            },
            marker:{
                // DATA LOCATION
                values:markers,
                cluster: clusterConfig,	
                events:{
                    <?php echo map_event(); ?>: function(marker, event, context){
                        $(this).gmap3(
                        {
                            clear:"overlay"
                        },

                        {
                                overlay:{
                                latLng: marker.getPosition(),
                                options:{
                                    content:   context.data.content,
                                    offset: {
                                        x:-38,
                                        y:-163
                                    }
                                }
                            }
                        });
                    }
                    
                }
            }
			
        });
    
                    }
                }
                
                /* add row count */
                
                if($('#count_row').length>0){
                     $('#count_row').html(data.total_rows);
                 }
                /* end add row count */
                
                $(selectorResults).html(data.print);
                
                reloadElements();
                
                $("#ajax-indicator-1").hide();
                if(scroll_enabled && $(scroll_enabled).length){
                    if($('.navbar.mega-nav').length && $('.navbar.mega-nav').hasClass('affix') )
                        $(document).scrollTop( $(scroll_enabled).offset().top-70 );
                    else
                        $(document).scrollTop( $(scroll_enabled).offset().top-150 );
                } else if(scroll_enabled && $('.results_conteiner').length){
                    if($('.navbar.mega-nav').length && $('.navbar.mega-nav').hasClass('affix') )
                        $(document).scrollTop( $('.results_conteiner').offset().top-70 );
                    else
                        $(document).scrollTop( $('.results_conteiner').offset().top-150 );
                }
                
//                $(selectorResults).hide(1000,function(){
//                    $(selectorResults).html(data.print);
//                    reloadElements();
//                    $(selectorResults).show(1000);
//                });
            }, "json");
            return false;
        }
        
    $.fn.startLoading = function(data){
        //$('#saveAll, #add-new-page, ol.sortable button, #saveRevision').button('loading');
    }
    
    $.fn.endLoading = function(data){
        //$('#saveAll, #add-new-page, ol.sortable button, #saveRevision').button('reset');       
        <?php if(config_item('app_type') == 'demo'):?>
            ShowStatus.show('<?php echo str_replace("'", "\'", lang('Data editing disabled in demo')); ?>');
        <?php else:?>
            //ShowStatus.show('<?php echo lang('data_saved')?>');
        <?php endif;?>
    }

        function reloadElements()
        {          

            $('.selectpicker-small').change(function() {
                manualSearch(0);
                return false;
            });

            $('.view-type').click(function () { 
              $(this).parent().find('.view-type').removeClass("active");
              $(this).addClass("active");
              manualSearch(0);
              return false;
            });
            
            $('.pagination.properties a').click(function () { 
              var page_num = $(this).attr('href');
              var n = page_num.lastIndexOf("/"); 
              page_num = page_num.substr(n+1);
              
              manualSearch(page_num);
              return false;
            });
            
            $('.pagination.news a').click(function () { 
                var page_num = $(this).attr('href');
                var n = page_num.lastIndexOf("/"); 
                page_num = page_num.substr(n+1);
                
                $.post($(this).attr('href'), {search: $('#search_showroom').val()}, function(data){
                    $('.property_content_position').html(data.print);
                    
                    reloadElements();
                }, "json");
                
                return false;
            });

            //InitChosen();
        }
        
    {has_extra_js}
    function loadjQueryUpload()
    {
        $('form.fileupload').each(function () {
            $(this).fileupload({
            <?php if(config_item('app_type') != 'demo'):?>
            autoUpload: true,
            <?php endif;?>
            // The maximum width of the preview images:
            previewMaxWidth: 160,
            // The maximum height of the preview images:
            previewMaxHeight: 120,
            uploadTemplateId: null,
            downloadTemplateId: null,
            uploadTemplate: function (o) {
                var rows = $();
                $.each(o.files, function (index, file) {
                    /*
                    var row = $('<li class="img-rounded template-upload">' +
                        '<div class="preview"><span class="fade"></span></div>' +
                        '<div class="filename"><code>'+file.name+'</code></div>'+
                        '<div class="options-container">' +
                        '<span class="cancel"><button  class="btn btn-mini btn-warning"><i class="icon-ban-circle icon-white"></i></button></span></div>' +
                        (file.error ? '<div class="error"></div>' :
                                '<div class="progress">' +
                                    '<div class="bar" style="width:0%;"></div></div></div>'
                        )+'</li>');
                    row.find('.name').text(file.name);
                    row.find('.size').text(o.formatFileSize(file.size));
                    if (file.error) {
                        row.find('.error').text(
                            locale.fileupload.errors[file.error] || file.error
                        );
                    }
                    */
                    var row = $('<div> </div>');
                    rows = rows.add(row);
                });
                return rows;
            },
            downloadTemplate: function (o) {
                var rows = $();
                $.each(o.files, function (index, file) {
                    var row = $('<li class="img-rounded template-download fade">' +
                        '<div class="preview"><span class="fade"></span></div>' +
                        '<div class="filename"><code>'+file.short_name+'</code></div>'+
                        '<div class="options-container">' +
                        (file.zoom_enabled?
                            '<a data-gallery="gallery" class="zoom-button btn btn-mini btn-success" download="'+file.name+'"><i class="icon-search icon-white"></i></a>'
                            : '<a target="_blank" class="btn btn-mini btn-success" download="'+file.name+'"><i class="icon-search icon-white"></i></a>') +
                        ' <span class="delete"><button class="btn btn-mini btn-danger" data-type="'+file.delete_type+'" data-url="'+file.delete_url+'"><i class="icon-trash icon-white"></i></button>' +
                        ' <input type="checkbox" value="1" name="delete"></span>' +
                        '</div>' +
                        (file.error ? '<div class="error"></div>' : '')+'</li>');
                    
                    var added=false;
                    
                    if (file.error) {
                        ShowStatus.show(file.error);
                        
//                        row.find('.name').text(file.name);
//                        row.find('.error').text(
//                            file.error
//                        );
                    } else {
                        added=true;
                        row.find('.name a').text(file.name);
                        if (file.thumbnail_url) {
                            row.find('.preview').html('<img class="img-rounded" alt="'+file.name+'" data-src="'+file.thumbnail_url+'" src="'+file.thumbnail_url+'">');  
                        }
                        row.find('a').prop('href', file.url);
                        row.find('a').prop('title', file.name);
                        row.find('.delete button')
                            .attr('data-type', file.delete_type)
                            .attr('data-url', file.delete_url);
                    }
                    if(added)
                        rows = rows.add(row);
                });
                
                return rows;
            },
            destroyed: function (e, data) {
                $.fn.endLoading();
                <?php if(config_item('app_type') != 'demo'):?>
                if(data.success)
                {
                }
                else
                {
                    ShowStatus.show('<?php echo lang_check('Unsuccessful, possible permission problems or file not exists'); ?>');
                }
                <?php endif;?>
                return false;
            },
            <?php if(config_item('app_type') == 'demo'):?>
            added: function (e, data) {
                $.fn.endLoading();
                return false;
            },
            <?php endif;?>
            finished: function (e, data) {
                $('.zoom-button').unbind('click touchstart');
                $('.zoom-button').bind("click touchstart", function()
                {
                    var myLinks = new Array();
                    var current = $(this).attr('href');
                    var curIndex = 0;
                    
                    $('.files-list-u .zoom-button').each(function (i) {
                        var img_href = $(this).attr('href');
                        myLinks[i] = img_href;
                        if(current == img_href)
                            curIndex = i;
                    });
            
                    options = {index: curIndex}
            
                    blueimp.Gallery(myLinks, options);
                    
                    return false;
                });
            },
            dropZone: $(this)
        });
        });       
        
        $("ul.files").each(function (i) {
            $(this).sortable({
                update: saveFilesOrder
            });
            $(this).disableSelection();
        });
    
    }
    
    function filesOrderToArray(container)
    {
        var data = {};

        container.find('li').each(function (i) {
            var filename = $(this).find('.options-container a:first').attr('download');
            data[i+1] = filename;
        });
        
        return data;
    }
    
    function saveFilesOrder( event, ui )
    {
        var filesOrder = filesOrderToArray($(this));
        var pageId = $(this).parent().parent().parent().attr('id').substring(11);
        var modelName = $(this).parent().parent().parent().attr('rel');
        
        $.fn.startLoading();
		$.post('<?php echo site_url('files/order'); ?>/'+pageId+'/'+modelName, 
        { 'page_id': pageId, 'order': filesOrder }, 
        function(data){
            $.fn.endLoading();
		}, "json");
    }
    
    {/has_extra_js}
        
    function showCounters(data_params)
    {
        // load json

        //var data_post = $('#test-form').serializeArray();
        //data.push({name: 'property_id', value: "<?php //echo $property_id; ?>"});
        //data.push({name: 'agent_id', value: "<?php //echo $agent_id; ?>"});

        //console.log('data_params');
        //console.log(data_params);

        $.post('<?php echo site_url('api/get_all_counters/'.$lang_id.'/1')?>', data_params, function(data){
            //console.log('data');
            //console.log(data);

            // remove all
            $("input.checkbox_am").parent().find('span').html('');

            $.each(data.counters, function( index, obj ) {
              //console.log(obj.option_id);
              var m_id = obj.option_id;
              if(!$("input.checkbox_am[option_id='"+m_id+"']").is(":checked"))
              $("input.checkbox_am[option_id='"+m_id+"']").parent().find('span').html('&nbsp('+obj.count+')');
            });

        }, "json");
    }
            
        
        /* [START] NumericFields */
        
        $(function() {
            <?php if(config_db_item('swiss_number_format') == TRUE): ?>
            
            $('input.DECIMAL').number( true, 2, '.', '\'' );
            $('input.INTEGER').number( true, 0, '.', '\'' );
             
            <?php else: ?>
            
            $('input.DECIMAL').number( true, 2 );
            $('input.INTEGER').number( true, 0 );
            
            <?php endif; ?>
        });
    
        /* [END] NumericFields */
        
        /* [START] ValidateFields */
        
        $(function() {
            $('form.form-estate').h5Validate();
        });
        
        /* [END] ValidateFields */
        
    /* [START] Dependent fields */
    $(document).ready(function(){
        //console.log('Dependent fields for search loading');
        <?php 
        // Fetch dependent fields
        $CI =& get_instance();
        $CI->load->model('dependentfield_m');
        $dependent_fields = $CI->dependentfield_m->get();
        $dependent_fields_prepare = array();
        foreach($dependent_fields as $key_d_field=>$d_field)
        {
            $dependent_fields_prepare[$d_field->field_id][$d_field->selected_index] = $d_field->hidden_fields_list;
        }
        
        $id_lang = $lang_id;
        
        foreach($dependent_fields_prepare as $d_field_id=>$d_field_indexes):
        ?>
        //console.log('fields: <?php echo $d_field_id; ?>');
        
        $("form.search-form select[name='option<?php echo $d_field_id.'_'.$id_lang; ?>'], "+
          "form.search-form input[rel][name='option<?php echo $d_field_id.'_'.$id_lang; ?>']").change(function () {
            
            var index = $(this).children('option:selected').index();
            var parent_elem = $(this).parent().parent().parent();
            var parent_elem_hide = $(this).parent().parent();
            
            var index_tree = $(this).attr('rel');
            if (typeof index_tree !== typeof undefined && index_tree !== false) {
              index = index_tree;
              parent_elem = parent_elem.parent();
              parent_elem_hide = parent_elem_hide.parent();
            }
            
            $('.dependenthide').removeClass('dependenthide');
            
            //console.log('changed');
            
            if (typeof index_tree !== typeof undefined && index_tree !== false) {
              // include all parent elements
              $(this).parent().parent().find('select').each(function(){
                if($(this).val() != '')
                {
                    hide_related_<?php echo $d_field_id.'_'.$id_lang; ?>(parent_elem, parent_elem_hide, $(this).val());
                }
              });
            }
            else
            {
                hide_related_<?php echo $d_field_id.'_'.$id_lang; ?>(parent_elem, parent_elem_hide, index);
            }
            
        });
        
        //$("select[name='option<?php echo $d_field_id.'_'.$id_lang; ?>']").trigger('change');
        
        function hide_related_<?php echo $d_field_id.'_'.$id_lang; ?>(parent_elem, parent_elem_hide, index)
        {
            <?php foreach($d_field_indexes as $d_selected_index=>$d_hidden_fields_list): ?>
            if(index == '<?php echo $d_selected_index; ?>')
            {
                // console.log('Hide now it all ;-)');
                <?php 
                $hidden_fields_list = explode(',', $d_hidden_fields_list);
                $generate_selector_list = array();
                $generate_selector = '';
                foreach($hidden_fields_list as $hide_field_id)
                {
                    //for standard form
                    $generate_selector_list[] = "#search_option_".$hide_field_id."_from";
                    $generate_selector_list[] = "#search_option_".$hide_field_id."_to";
                    $generate_selector_list[] = "#search_option_".$hide_field_id;
                    //for secondr form
                    $generate_selector_list[] = "[option_id='".$hide_field_id."']";
                }
                $generate_selector = implode(',', $generate_selector_list);
                ?>
                
                // empty values
                $("<?php echo $generate_selector; ?>").not('.skip-input').each( function() {
                    if(this.type=='text' || this.type=='textarea'){
                        this.value = '';
                    }
                    else if(this.type=='radio' || this.type=='checkbox'){
                        this.checked=false;
                    }
                    else if(this.type=='select-one' || this.type=='select-multiple'){
                        this.value ='';
                        if(this.value != '')this.value ='-';
                    }
                    else if(this.type == 'hidden')
                    {
                        this.value ='';
                    }
                });
                
                // hide all related
                $("<?php echo $generate_selector; ?>").each( function() {
                    if(this.type=='text' || this.type=='textarea'){
                        $(this).parent().addClass('dependenthide');
                    }
                    else if(this.type=='radio' || this.type=='checkbox'){
                        $(this).parent().parent().addClass('dependenthide');
                    }
                    else if(this.type=='select-one' || this.type=='select-multiple'){
                        $(this).parent().addClass('dependenthide');
                    }
                    else if(this.type == 'hidden')
                    {
                        $(this).parent().addClass('dependenthide');
                    }

                });
                
                // hide secondary form if no elements visible
                
                if($('form.secondary-form div:not(.dependenthide) input[option_id]').length == 0)
                {
                    $('form.secondary-form').parent().parent().addClass('dependenthide');
                }
                
            }
            <?php endforeach; ?>
        }
        
        <?php endforeach; ?>
        
        $(".search-form .TREE-GENERATOR select").trigger('change');
        
    });
    
    /* [END] Dependent fields */
        
</script>


    <script language="javascript">
                var marks=new Array();
                var _map;
    $(document).ready(function(){
        
       _map= $("#wrap-map").gmap3({
         map:{
            options:{
             <?php if(config_item('custom_map_center') === FALSE): ?>
             center: [{all_estates_center}],
             <?php else: ?>
             center: [<?php echo config_item('custom_map_center'); ?>],
             <?php endif; ?>
             zoom: {settings_zoom},
             scrollwheel: scrollWheelEnabled,
             mapTypeId: c_mapTypeId,
             mapTypeControlOptions: {
               mapTypeIds: c_mapTypeIds
             }
            }
         },
        styledmaptype:{
          id: "style1",
          options:{
            name: "<?php echo lang_check('CustomMap'); ?>"
          },
          styles: mapStyle
        },
         marker:{
            values:[
             <?php foreach($all_estates as $key=>$estate): if(!empty($estate['gps'])): ?>
                {latLng:[<?php echo _ch($estate['gps']);?>], adr:"<?php echo _ch($estate['address']);?>", options:{icon: "<?php _che($estate['icon'])?>"}, data:"<?php echo _generate_popup($estate, true); ?>"},
            <?php endif; endforeach; ?>
            ],
            cluster: clusterConfig,
            options: markerOptions,
            
        events:{
          <?php echo map_event(); ?>: function(marker, event, context){
              $(this).gmap3("get").setCenter(marker.getPosition())
              $(this).gmap3(
                        {
                            clear:"overlay",
                    center: marker.getPosition()
                        },

                        {
                            overlay:{
                                latLng: marker.getPosition(),
                                options:{
                                    content:   context.data,
                                    offset: {
                                        x:-38,
                                        y:-163
                                    }
                                }
                                
                            }
                        });
          },
          mouseout: function(){
            //var infowindow = $(this).gmap3({get:{name:"infowindow"}});
            //if (infowindow){
            //  infowindow.close();
            //}
          }
        }}});
       /* init_gmap_searchbox();*/
    });    
    </script>
    
    <script>
/* share popup */
$('document').ready(function(){
    $('.btn-share-fb').click(function(e){
        e = e || window.event
        e.preventDefault()
        var width = 600;
        var height = 300;
        window.open( 'https://www.facebook.com/sharer/sharer.php?u='+$(this).attr("data-url")+'&title='+$(this).attr("data-title")+'&display=popup&ref=plugin&src=like', '', 'width=' + width + ',height=' + height + ',left=' + (($(window).innerWidth() - width)/2) + ',top=' + (($(window).innerHeight() - height)/2) );
    })
    
    $('.btn-share-tw').click(function(e){
        e = e || window.event
        e.preventDefault()
        var width = 600;
        var height = 450;
        window.open( 'https://twitter.com/home?status='+$(this).attr("data-title")+'%20'+$(this).attr("data-url"), '', 'width=' + width + ',height=' + height + ',left=' + (($(window).innerWidth() - width)/2) + ',top=' + (($(window).innerHeight() - height)/2) );
    })
    
    $('.btn-share-google-plus').click(function(e){
        e = e || window.event
        e.preventDefault()
        var width = 500;
        var height = 400;
        window.open( 'https://plus.google.com/share?url='+$(this).attr("data-url"), '', 'width=' + width + ',height=' + height + ',left=' + (($(window).innerWidth() - width)/2) + ',top=' + (($(window).innerHeight() - height)/2) );
    })
})
/* end share popup */
$('document').ready(function(){
    reloadPaginationUniversal();
 })
            function reloadPaginationUniversal()
        {
                 
            $('.pagination-ajax-results a').click(function () { 
                var page_num = $(this).attr('href');
                var n = page_num.lastIndexOf("/"); 
                page_num = page_num.substr(n+1);
                
                var results_dom_id = '#ajax_results';
                
                $.post($(this).attr('href'), {'page_num':page_num}, function(data){
                    $(results_dom_id).html(data.print);
                    
                    reloadPaginationUniversal();
                }, "json");
                
                return false;
            });
        }

    $(document).ready(function(){
        // if results container more 1, hide other
        if($('.results_conteiner').length>1) {
            $('.results_conteiner').not(':eq('+($('.results_conteiner').length-1)+')').removeClass('results_conteiner').hide();
            $('#content-block').attr('id','');

            if(!$('#section-treefieldresult .results_conteiner').length) {
                $('#section-treefieldresult').hide();
            }
        }

    })

<?php if(config_db_item('agent_masking_enabled') == TRUE && isset($property_id) && isset($agent_id)): ?>
            // Popup form Start //
                /* visible */
                $('.hidden-agent-details,.hidden-file-details').css('display','block');
                
                $('.popup-with-form').magnificPopup({
                	type: 'inline',
                	preloader: false,
                	focus: '#name',
                                    
                	// When elemened is focused, some mobile browsers in some cases zoom in
                	// It looks not nice, so we disable it:
                	callbacks: {
                		beforeOpen: function() {
                			if($(window).width() < 700) {
                				this.st.focus = false;
                			} else {
                				this.st.focus = '#name';
                			}
                		}
                	}
                });
                
                
                $('#unhide-agent-mask').click(function(){
                    
                    var data = $('#test-form').serializeArray();
                    data.push({name: 'property_id', value: "<?php echo $property_id; ?>"});
                    data.push({name: 'agent_id', value: "<?php echo $agent_id; ?>"});
                    
                    //console.log( data );
                    $('#ajax-indicator-masking').css('display', 'inline');
                    
                    // send info to agent
                    $.post("<?php echo site_url('frontend/maskingsubmit/'.$lang_code); ?>", data,
                    function(data){
                        if(data=='successfully')
                        {
                            // Display agent details
                            $('.popup-with-form').css('display', 'none');
                            // Close popup
                            $.magnificPopup.instance.close();
                        }
                        else
                        {
                            $('.alert.hidden').css('display', 'block');
                            $('.alert.hidden').css('visibility', 'visible');
                            
                            $('#popup-form-validation').html(data);
                            
                            //console.log("Data Loaded: " + data);
                        }
                        $('#ajax-indicator-masking').css('display', 'none');
                    });

                    return false;
                });
                
            <?php endif; ?>

</script>

{settings_tracking}
