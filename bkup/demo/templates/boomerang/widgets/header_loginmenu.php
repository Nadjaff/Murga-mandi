<?php
/*
Widget-title: Login menu with language dropdown 
Widget-preview-image: /assets/img/widgets_preview/header_loginmenu.jpg
*/
?>
<!-- TOP HEADER --> 
    <?php _widget('custom_top_demo_geomaps_preview');?>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 login-menu">
                    <span class="aux-text">
                        {not_logged}
                            <span><i class="icon-phone"></i> {settings_phone}</span>
                            <a href="mailto:{settings_email}"><i class="icon-envelope"></i> {settings_email}</a>
                            <?php if(config_db_item('property_subm_disabled')==FALSE):  ?>
                            <a href="{front_login_url}#content"><i class="icon-user"></i> {lang_Login}</a>
                            <?php endif;?>
                        {/not_logged}
                          {is_logged_user}
                          <?php if(file_exists(APPPATH.'controllers/admin/booking.php')):?>
                            <a href="{myreservations_url}#content"><i class="icon-shopping-cart"></i> {lang_Myreservations}</a>
                          <?php endif; ?>
                            <a href="{myproperties_url}#content"><i class="icon-list"></i> {lang_Myproperties}</a>
                          <?php if(file_exists(APPPATH.'controllers/admin/savesearch.php')): ?>
                           <a href="{myresearch_url}#content-main"><i class="icon-filter"></i> {lang_Myresearch}</a> 
                          <?php endif; ?>
                          <?php if(file_exists(APPPATH.'controllers/admin/favorites.php')):?>
                            <a href="{myfavorites_url}#content"><i class="icon-star"></i> {lang_Myfavorites}</a>
                          <?php endif; ?>
                            <a href="<?php _che($mymessages_url); ?>#content"><i class="icon-envelope"></i> <?php _l('My messages'); ?></a>
                            <a href="{myprofile_url}#content"><i class="icon-user"></i> {lang_Myprofile}</a>
                            <a href="{logout_url}"><i class="icon-off"></i> {lang_Logout}</a>
                          {/is_logged_user}

                          {is_logged_other}
                            <a href="{login_url}"><i class="icon-wrench"></i> {lang_Admininterface}</a>
                            <?php if(isset($page_edit_url)&&!empty($page_edit_url)):?>
                                <a href="{page_edit_url}"><i class="icon-edit"></i> <?php echo _l('edit page');?></a>
                            <?php endif;?>
                            <?php if(isset($category_edit_url)&&!empty($category_edit_url)) :?>
                                <a href="{category_edit_url}"><i class="icon-edit"></i> <?php echo _l('edit category');?></a>
                            <?php endif;?>
                            <a href="{logout_url}"><i class="icon-off"></i> {lang_Logout}</a>
                          {/is_logged_other}
                    </span>
                    <nav class="top-header-menu">
                        <ul class="top-menu">
                            <li class="aux-languages dropdown <!-- animate-hover -->" data-animate-in="<!-- animated bounceIn -->">
                                <?php
                                     $lang_array = $this->language_m->get_array_by(array('is_frontend'=>1));
                                     if(count($lang_array) > 1):
                                 ?> 
                                <?php   
                                    $flag_icon = '';
                                    if(file_exists(FCPATH.'templates/'.$settings_template.'/assets/img/flags/'.$this->data['lang_code'].'.png'))
                                    {
                                        $flag_icon = '&nbsp; <img class="flag-icon" src="'.'assets/img/flags/'.$this->data['lang_code'].'.png" alt="" />';
                                    }

                                    ?>
                                
                                    <a href="#"><span class="language name"><?php echo $this->data['lang_code'].' '.$flag_icon;?></span></a>
                                    <?php 
                                      echo get_lang_menu($this->language_m->get_array_by(array('is_frontend'=>1)), $this->data['lang_code'], 'id="auxLanguages" class="sub-menu"');
                                    ?>
                                    <?php endif;?>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>