<?php
/* Smarty version 4.3.2, created on 2023-10-14 20:53:15
  from '/home1/fyrestr4/public_html/content/themes/default/templates/started.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652affbbe67792_33181821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad83d1e6924974ceae60e888c33f8d62d62c6405' => 
    array (
      0 => '/home1/fyrestr4/public_html/content/themes/default/templates/started.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_652affbbe67792_33181821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> old" style="margin-top: 25px;">
   <div class="row">
      <div class="col-12 col-md-10 mx-md-auto">
         <div class="card shadow">
            <div class="card-body naw">
               <div class="row" style="
                  padding: 15px;
                  ">
                  <div class="col-md-8 registration-steps">
                     <h2>Add a photo.</h2>
                     <h4>Show your unique personality and style.</h4>
                  </div>
                  <div class="col-md-4">
                     <div class="line">
                        <div class="line_sec"></div>
                        <ul class="nav nav-pills nav-fill nav-started mb30 js_wizard-steps">
                           <li class="nav-item">
                              <a class=" active" href="#step-1">
                                 <div class="dot one"><i class="fa fa-camera" style="margin-top: 7px;" aria-hidden="true"></i></div>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class=" disabled" href="#step-2">
                                 <div class="dot two">
                                    <i class="fa fa-compass" style="margin-top: 7px;color: black;" aria-hidden="true"></i>
                                 </div>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class=" disabled" href="#step-3">
                                 <div class="dot three">
                                    <i class="fa fa-user-plus" style="margin-top: 7px;color: black;" aria-hidden="true"></i>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="steps">
                        <div class="step step-one">Media</div>
                        <div class="step step-two">Info</div>
                        <div class="step step-three">Follow</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card shadow">
            <div class="card-body">
               <!-- nav -->
               <!-- nav -->
               <!-- tabs -->
               <div class="js_wizard-content" id="step-1">
                  <h2 style="border-bottom: 1px solid #e3e3e3;padding-bottom: 17px;padding-left: 14px;font-size: 20px;font-weight: 700;margin-top: 0px;">Upload Photo</h2>
                  <div class="text-center">
                     <h3 class="mb5"><?php echo __("Welcome");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
</span></h3>
                     <p class="mb20"><?php echo __("Let's start with your photo");?>
</p>
                  </div>
                  <!-- profile-avatar -->
                  <div class="position-relative" style="height: 170px;">
                     <div class="profile-avatar-wrapper static">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="">
                        <!-- buttons -->
                        <div class="profile-avatar-change">
                           <i class="fa fa-camera js_x-uploader" data-handle="picture-user"></i>
                        </div>
                        <div class="profile-avatar-change-loader">
                           <div class="progress x-progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="profile-avatar-crop <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_picture_default'] || !$_smarty_tpl->tpl_vars['user']->value->_data['user_picture_id']) {?>x-hidden<?php }?>">
                           <i class="fa fa-crop-alt js_init-crop-picture" data-image="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture_full'];?>
" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
"></i>
                        </div>
                        <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_picture_default']) {?>x-hidden<?php }?>">
                           <i class="fa fa-trash js_delete-picture" data-handle="picture-user"></i>
                        </div>
                        <!-- buttons -->
                     </div>
                  </div>
                  <!-- profile-avatar -->
                  <!-- buttons -->
                  <div class="clearfix mt20" style="
                     border-top: 1px solid #eaeaea;
                     ">
                     <button id="activate-step-2" class="btn btn-primary float-end mt5"><?php echo __("Next Step");?>
<i class="fas fa-arrow-circle-right ml5"></i></button>
                  </div>
                  <!-- buttons -->
               </div>
               <div class="js_wizard-content x-hidden" id="step-2">
                  <div class="text-center">
                     <h3 class="mb5"><?php echo __("Update your info");?>
</h3>
                     <p class="mb20"><?php echo __("Share your information with our community");?>
</p>
                  </div>
                  <form class="js_ajax-forms" data-url="users/started.php?do=update">
                     <div class="heading-small mb20">
                        <?php echo __("Location");?>

                     </div>
                     <div class="pl-md-4">
                        <div class="form-group">
                           <label class="form-label" for="country"><?php echo __("Country");?>
</label>
                           <select class="form-select" name="country" id="country">
                              <option value="none"><?php echo __("Select Country");?>
</option>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                              <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_country'] == $_smarty_tpl->tpl_vars['country']->value['country_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
                              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                           </select>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['location_info_enabled']) {?>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label class="form-label" for="city"><?php echo __("Current City");?>
</label>
                              <input type="text" class="form-control js_geocomplete" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_current_city'];?>
">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label" for="hometown"><?php echo __("Hometown");?>
</label>
                              <input type="text" class="form-control js_geocomplete" name="hometown" id="hometown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_hometown'];?>
">
                           </div>
                        </div>
                        <?php }?>
                     </div>
                     <?php if ($_smarty_tpl->tpl_vars['system']->value['work_info_enabled']) {?>
                     <div class="divider"></div>
                     <div class="heading-small mb20">
                        <?php echo __("Work");?>

                     </div>
                     <div class="pl-md-4">
                        <div class="form-group">
                           <label class="form-label" for="work_title"><?php echo __("Work Title");?>
</label>
                           <input type="text" class="form-control" name="work_title" id="work_title" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_title'];?>
">
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label class="form-label" for="work_place"><?php echo __("Work Place");?>
</label>
                              <input type="text" class="form-control" name="work_place" id="work_place" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_place'];?>
">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label" for="work_url"><?php echo __("Work Website");?>
</label>
                              <input type="text" class="form-control" name="work_url" id="work_url" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_url'];?>
">
                           </div>
                        </div>
                     </div>
                     <?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['system']->value['education_info_enabled']) {?>
                     <div class="divider"></div>
                     <div class="heading-small mb20">
                        <?php echo __("Education");?>

                     </div>
                     <div class="pl-md-4">
                        <div class="form-group">
                           <label class="form-label" for="edu_major"><?php echo __("Major");?>
</label>
                           <input type="text" class="form-control" name="edu_major" id="edu_major" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_major'];?>
">
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label class="form-label" for="edu_school"><?php echo __("School");?>
</label>
                              <input type="text" class="form-control" name="edu_school" id="edu_school" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_school'];?>
">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label" for="edu_class"><?php echo __("Class");?>
</label>
                              <input type="text" class="form-control" name="edu_class" id="edu_class" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_class'];?>
">
                           </div>
                        </div>
                     </div>
                     <?php }?>
                     <!-- success -->
                     <div class="alert alert-success x-hidden"></div>
                     <!-- success -->
                     <!-- error -->
                     <div class="alert alert-danger x-hidden"></div>
                     <!-- error -->
                     <!-- buttons -->
                     <div class="clearfix mt20">
                        <div class="float-end">
                           <button type="submit" class="btn btn-success"><i class="fas fa-check-circle mr5"></i><?php echo __("Save Changes");?>
</button>
                           <button type="button" class="btn btn-primary" id="activate-step-3"><?php echo __("Next Step");?>
<i class="fas fa-arrow-circle-right ml5"></i></button>
                        </div>
                     </div>
                     <!-- buttons -->
                  </form>
               </div>
               <div class="js_wizard-content x-hidden" id="step-3">
                  <div class="text-center">
                  
                  </div>
                  <form class="js_ajax-forms neww" data-url="users/started.php?do=finish">
                     <!-- new people -->
                     <?php if ($_smarty_tpl->tpl_vars['new_people']->value) {?>
                     <ul class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_people']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>"add"), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                     </ul>
                     <?php }?>
                     <!-- new people -->
                     <!-- success -->
                     <div class="alert alert-success x-hidden"></div>
                     <!-- success -->
                     <!-- error -->
                     <div class="alert alert-danger x-hidden"></div>
                     <!-- error -->
                     <!-- buttons -->
                     <div class="clearfix mt20">
                        <button type="submit" class="btn btn-danger float-end"><i class="fas fa-check-circle mr5"></i><?php echo __("Finish");?>
</button>
                     </div>
                     <!-- buttons -->
                  </form>
               </div>
               <!-- tabs -->
            </div>
         </div>
      </div>
   </div>
</div>
<!-- page content -->
<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
>
   $(function() {
   
     var wizard_steps = $('.js_wizard-steps li a');
     var wizard_content = $('.js_wizard-content');
   
     wizard_content.hide();
   
     wizard_steps.click(function(e) {
       e.preventDefault();
       var $target = $($(this).attr('href'));
       if (!$(this).hasClass('disabled')) {
         wizard_steps.removeClass('active');
         $(this).addClass('active');
         wizard_content.hide();
         $target.show();
       }
     });
   
     $('.js_wizard-steps li a.active').trigger('click');
   
     $('#activate-step-2').on('click', function(e) {
       $('.js_wizard-steps li:eq(1) a').removeClass('disabled');
       $('.js_wizard-steps li a[href="#step-2"]').trigger('click');
     });
   
     $('#activate-step-3').on('click', function(e) {
       $('.js_wizard-steps li:eq(2) a').removeClass('disabled');
       $('.js_wizard-steps li a[href="#step-3"]').trigger('click');
     });
   
   });
<?php echo '</script'; ?>
>
<style>
   .registration-steps {
   margin-bottom: 0px;
   }
   .registration-steps h2 {
   font-size: 20px;
   margin-bottom: 0px;
   font-weight: 700;
   }
   .registration-steps h4 {
   font-size: 15px;
   }
   .line {
   width: 100%;
   height: 3px;
   background: #ddd;
   position: relative;
   border-radius: 8px;
   margin-bottom: 15px;
   }
   .start_up .steps {
   margin-top: 25px;
   }
   .steps {
   margin-bottom: 10px;
   position: relative;
   height: 20px;
   }
   .line_sec {
   width: 0;
   }
   .one {
   left: 0;
   }
   .step-one-active .dot.one {
   background: #FA8622;
   color: #fff;
   transform: translate(0px, -50%);
   }
   .dot {
   width: 30px;
   height: 30px;
   }
   .two {
   left: 50%;
   }
   .three {
   right: -15px;
   transform: translate(0, -50%);
   }
   .steps > div.step-two {
   left: 50%;
   }
   .dot .one {
   background: #FA8622;
   color: #fff;
   transform: translate(0px, -50%);
   }
   .steps > div.step-three {
   left: auto;
   right: -4%;
   transform: none;
   }
   .start_up .steps > div.step-three {
   right: 0;
   }
   .steps > div {
   position: absolute;
   top: 10px;
   transform: translate(-50%);
   height: 20px;
   display: inline-block;
   text-align: center;
   transition: .3s all ease;
   color: #aeaeae;
   font-size: 14.5px;
   font-weight: bold;
   display: block;
   }
   .steps > div.step-one {
   left: 0;
   color: #b4b4b4;
   }
   .line {
   width: 100%;
   height: 3px;
   background: #ddd;
   position: relative;
   border-radius: 8px;
   margin-bottom: 15px;
   }
   .dot {
   position: absolute;
   top: 50%;
   width: 30px;
   height: 30px;
   background: #e0e0e0;
   border-radius: 50%;
   transition: .3s all ease;
   transform: translate(-50%, -50%);
   text-align: center;
   }
   .mt5{
   margin-top:5px;
   }
   @media (min-width: 1200px){
   .old{
   max-width: 1140px !important;
   }}
   @media (max-width:765px){
   .col-md-4{
   margin-top: 20px;
   padding-left: 20px;
   padding-right: 20px;
   }
   }
   .js_wizard-content{
   padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
   }
</style><?php }
}
