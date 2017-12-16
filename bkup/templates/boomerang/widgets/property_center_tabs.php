<!-- PROPERTY DESCRIPTION -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tabs-framed boxed">
                                    <ul class="tabs clearfix">
                                        <li class="active"><a href="#tab-1" data-toggle="tab"><?php _l('Additional details');?></a></li>
                                        <li><a href="#tab-map" data-toggle="tab" data-type="gmap"><?php _l('Map');?></a></li>
                                        <?php if(!empty($estate_data_option_36)): ?>
                                        <!--<li><a href="#tab-mortgage" data-toggle="tab" data-type="gmap"><?php _l('Mortgage'); ?></a></li>-->
                                        <?php endif; ?>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-1">
                                            <div class="tab-body">
                                                <div class="section-title-wr">
                                                    <h3 class="section-title left">{lang_Description}</h3>
                                                </div>
                                                <p>
                                                    <?php _che($estate_data_option_17, '<p class="alert alert-success">'.lang_check('Not available').'</p>'); ?>
                                                </p>
                                                <?php if(false): ?>
                                                <div class="section-title-wr">
                                                    <h3 class="section-title left">Additional details</h3>
                                                </div>
                                                <table class="table table-bordered table-striped table-hover table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Property Size:</strong> 2300 Sq Ft</td>
                                                            <td><strong>Lot size:</strong> 5000 Sq Ft</td>
                                                            <td><strong>Price:</strong> $23000</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Rooms:</strong> 5</td>
                                                            <td><strong>Bedrooms:</strong> 4</td>
                                                            <td><strong>Bathrooms:</strong> 2</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Garages:</strong> 2</td>
                                                            <td><strong>Roofing:</strong> New</td>
                                                            <td><strong>Structure Type:</strong> Bricks</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Year built:</strong> 1991</td>
                                                            <td><strong>Available from:</strong> 1 August 2014</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <?php endif;?>
                                                

                                                <?php if(isset($category_options_21) && $category_options_count_21>0): ?>
                                                <h3 class="page-header">{options_name_21}</h3>
                                                <div class="property-amenities clearfix">
                                                    <ul>
                                                        {category_options_21}
                                                        {is_checkbox}
                                                        <li class="col-xs-6 col-sm-3">
                                                        <i class="fa fa-check ok"></i>&nbsp;&nbsp;{option_name}&nbsp;&nbsp;{icon}
                                                        </li>
                                                        {/is_checkbox}
                                                        {/category_options_21}

                                                    </ul>
                                                </div><!-- /.property-amenities -->
                                                <?php endif; ?>

                                                <?php if(isset($category_options_52) && $category_options_count_52>0): ?>
                                                <h3 class="page-header">{options_name_52}</h3>
                                                <div class="property-amenities clearfix">
                                                    <ul>
                                                        {category_options_52}
                                                        {is_checkbox}
                                                        <li class="col-xs-6 col-sm-3">
                                                        <i class="fa fa-check ok"></i>&nbsp;&nbsp;{option_name}&nbsp;&nbsp;{icon}
                                                        </li>
                                                        {/is_checkbox}
                                                        {/category_options_52}
                                                    </ul>
                                                </div><!-- /.property-amenities -->
                                                <?php endif; ?>

                                                <?php if(isset($category_options_43) && $category_options_count_43>0): ?>
                                                <h3 class="page-header">{options_name_43}</h3>
                                                <div class="property-amenities clearfix">
                                                    <ul>
                                                        {category_options_43}
                                                        {is_text}
                                                        <li class="col-xs-6 col-sm-3">
                                                        <i class="fa fa-check ok"></i>{icon} {option_name}:&nbsp;&nbsp;{option_prefix}{option_value}{option_suffix}
                                                        </li>
                                                        {/is_text}
                                                        {/category_options_43}

                                                    </ul>
                                                </div><!-- /.property-amenities -->
                                                <?php endif; ?>
                                                
                                            </div> 
                                        </div>

                                        <div class="tab-pane fade" id="tab-map">
                                            <div class="tab-body">
                                                <?php _widget('custom_property_center_map');?>
                                            </div>
                                        </div>
                                       <div class="tab-pane fade" id="tab-mortgage">
                                            <div class="tab-body">
                                                <?php _widget('right_mortgage');?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>