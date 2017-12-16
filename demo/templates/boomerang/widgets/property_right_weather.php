<?php

//API KEY, get your api key on: http://openweathermap.org/appid
$api_key = 'ace65559040c2beeeb9f7ed82657b365';

// For temperature in Fahrenheit use imperial
// For temperature in Celsius use metric
// Temperature in Kelvin is used by default, no need to use units parameter in API call
$units = 'metric';

// Any wanted symbol
$unit_symbol = '°C';

/*
 * API http://api.openweathermap.org
 * icon http://openweathermap.org/weather-conditions
 * 
 */

if(config_item('weather_enabled') === TRUE):
$_CI = & get_instance();
$_CI->load->model('weathercacher_m');

?>

<div class="panel panel-default panel-sidebar-1">
    <div class="panel-heading"><h2><?php echo _l('Weather');?></h2></div>
    <div class="panel-body text-center">

<div class="weather-box" id='weather-1'>
    
<?php if(!$_CI->weathercacher_m->check_expire_status($property_id, 'openweathermap', $lang_id)):?> 
    <?php   
    //gps
    if(strrpos($estate_data_gps,','))
        list($lat, $lon)=explode(',', $estate_data_gps);
    
    if(!empty($lat) && !empty($lon)):
    
    if(empty($units))
    {
        $units_arg = "";
    }
    else
    {
        $units_arg = "&units=$units";
    }
    
    $json_api = 'http://api.openweathermap.org/data/2.5/forecast/daily?lat='.trim($lat).'&lon='.trim($lon).'&cnt=8'.$units_arg.'&appid='.$api_key.'&lang='.$lang_code;
    ?>
    <script>
        $('document').ready(function(){
            
            // days translatable
            var days = {
                0: "<?php echo _l('cal_sunday');?>",
                1: "<?php echo _l('cal_monday');?>",
                2: "<?php echo _l('cal_tuesday');?>",
                3: "<?php echo _l('cal_wednesday');?>",
                4: "<?php echo _l('cal_thursday');?>",
                5: "<?php echo _l('cal_friday');?>",
                6: "<?php echo _l('cal_saturday');?>",
            }
            
            $.get("<?php echo $json_api;?>", function(data){
                var _data ='';
                var weather_count=0;
                if(data.list)
                $.each( data.list, function(index, value){
                   var day = new Date(value["dt"]*1000);
                   var day =day.getDay();
                    _data+='<div class="weather-item">\n\
                                <div class="date">'+days[day]+'</div>\n\
                                <div class="weather-img">\n\
                                    <img src="assets/img/weather/'+value.weather[0].icon+'.png" alt="" />\n\
                                </div>\n\
                                <div class="title"></div>\n\
                                <div class="description">'+value.weather[0].description+' </div>\n\
                                <div class=""><?php echo _l('Low');?>: '+value.temp.min+' <?php echo $unit_symbol; ?> / <?php echo _l('Hight');?>: '+value.temp.max+' <?php echo $unit_symbol; ?></div>\n\
                            </div>'
                    weather_count++;
                    if(weather_count>2)  return false;
                })
                $('.weather-box#weather-1').html(_data);
                
                /* save cache */
                data_api ={
                        'value':JSON.stringify(data),
                        'weather_api':'openweathermap',
                    }
                $.post("<?php echo site_url('api/save_weather_cache/'.$property_id.'/'.$lang_code) ;?>", data_api, 
                       function(data_api){
                });

            })
        })
    </script>
    <?php endif;?>
    
<?php else:?>
    <?php
    $weather = json_decode($_CI->weathercacher_m->get_cache($property_id, 'openweathermap', $lang_id));
    ?>
    
    <?php $weather_count=0; foreach ($weather->list as $key => $value):?>
        <div class="weather-item">
            <div class="date"><?php echo _l('cal_'.strtolower(date('l',$value->dt)));?></div>
            <div class="weather-img">
                <img src="assets/img/weather/<?php _che($value->weather[0]->icon);?>.png" alt="" />
            </div>
            <div class="title"></div>
            <div class="description"><?php _che($value->weather[0]->description);?></div>
            <div class=""><?php echo _l('Low');?>: <?php echo round($value->temp->min);?> <?php echo $unit_symbol; ?> / <?php echo _l('Hight');?>: <?php echo round($value->temp->max);?> <?php echo $unit_symbol; ?></div>
        </div>
    <?php $weather_count++;if($weather_count>2)break; endforeach;?>
    
<?php endif; ?>
</div>

    </div>
</div>

<style>

.weather-item
{
    background: white;
    margin-bottom:10px;
    padding:5px;
}

.weather-item .date
{
    font-weight: bold;
    
}

</style>

<?php endif;?>