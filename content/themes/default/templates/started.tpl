{include file='_head.tpl'}
{include file='_header.tpl'}
<!-- page content -->
<div class="{if $system['fluid_design']}container-fluid{else}container{/if} old" style="margin-top: 25px;">
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
                     <h3 class="mb5">{__("Welcome")} <span class="text-primary">{$user->_data['name']}</span></h3>
                     <p class="mb20">{__("Let's start with your photo")}</p>
                  </div>
                  <!-- profile-avatar -->
                  <div class="position-relative" style="height: 170px;">
                     <div class="profile-avatar-wrapper static">
                        <img src="{$user->_data['user_picture']}" alt="">
                        <!-- buttons -->
                        <div class="profile-avatar-change">
                           <i class="fa fa-camera js_x-uploader" data-handle="picture-user"></i>
                        </div>
                        <div class="profile-avatar-change-loader">
                           <div class="progress x-progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="profile-avatar-crop {if $user->_data['user_picture_default'] || !$user->_data['user_picture_id']}x-hidden{/if}">
                           <i class="fa fa-crop-alt js_init-crop-picture" data-image="{$user->_data['user_picture_full']}" data-handle="user" data-id="{$user->_data['user_id']}"></i>
                        </div>
                        <div class="profile-avatar-delete {if $user->_data['user_picture_default']}x-hidden{/if}">
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
                     <button id="activate-step-2" class="btn btn-primary float-end mt5">{__("Next Step")}<i class="fas fa-arrow-circle-right ml5"></i></button>
                  </div>
                  <!-- buttons -->
               </div>
               <div class="js_wizard-content x-hidden" id="step-2">
                  <div class="text-center">
                     <h3 class="mb5">{__("Update your info")}</h3>
                     <p class="mb20">{__("Share your information with our community")}</p>
                  </div>
                  <form class="js_ajax-forms" data-url="users/started.php?do=update">
                     <div class="heading-small mb20">
                        {__("Location")}
                     </div>
                     <div class="pl-md-4">
                        <div class="form-group">
                           <label class="form-label" for="country">{__("Country")}</label>
                           <select class="form-select" name="country" id="country">
                              <option value="none">{__("Select Country")}</option>
                              {foreach $countries as $country}
                              <option {if $user->_data['user_country'] == $country['country_id']}selected{/if} value="{$country['country_id']}">{$country['country_name']}</option>
                              {/foreach}
                           </select>
                        </div>
                        {if $system['location_info_enabled']}
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label class="form-label" for="city">{__("Current City")}</label>
                              <input type="text" class="form-control js_geocomplete" name="city" id="city" value="{$user->_data['user_current_city']}">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label" for="hometown">{__("Hometown")}</label>
                              <input type="text" class="form-control js_geocomplete" name="hometown" id="hometown" value="{$user->_data['user_hometown']}">
                           </div>
                        </div>
                        {/if}
                     </div>
                     {if $system['work_info_enabled']}
                     <div class="divider"></div>
                     <div class="heading-small mb20">
                        {__("Work")}
                     </div>
                     <div class="pl-md-4">
                        <div class="form-group">
                           <label class="form-label" for="work_title">{__("Work Title")}</label>
                           <input type="text" class="form-control" name="work_title" id="work_title" value="{$user->_data['user_work_title']}">
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label class="form-label" for="work_place">{__("Work Place")}</label>
                              <input type="text" class="form-control" name="work_place" id="work_place" value="{$user->_data['user_work_place']}">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label" for="work_url">{__("Work Website")}</label>
                              <input type="text" class="form-control" name="work_url" id="work_url" value="{$user->_data['user_work_url']}">
                           </div>
                        </div>
                     </div>
                     {/if}
                     {if $system['education_info_enabled']}
                     <div class="divider"></div>
                     <div class="heading-small mb20">
                        {__("Education")}
                     </div>
                     <div class="pl-md-4">
                        <div class="form-group">
                           <label class="form-label" for="edu_major">{__("Major")}</label>
                           <input type="text" class="form-control" name="edu_major" id="edu_major" value="{$user->_data['user_edu_major']}">
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label class="form-label" for="edu_school">{__("School")}</label>
                              <input type="text" class="form-control" name="edu_school" id="edu_school" value="{$user->_data['user_edu_school']}">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label" for="edu_class">{__("Class")}</label>
                              <input type="text" class="form-control" name="edu_class" id="edu_class" value="{$user->_data['user_edu_class']}">
                           </div>
                        </div>
                     </div>
                     {/if}
                     <!-- success -->
                     <div class="alert alert-success x-hidden"></div>
                     <!-- success -->
                     <!-- error -->
                     <div class="alert alert-danger x-hidden"></div>
                     <!-- error -->
                     <!-- buttons -->
                     <div class="clearfix mt20">
                        <div class="float-end">
                           <button type="submit" class="btn btn-success"><i class="fas fa-check-circle mr5"></i>{__("Save Changes")}</button>
                           <button type="button" class="btn btn-primary" id="activate-step-3">{__("Next Step")}<i class="fas fa-arrow-circle-right ml5"></i></button>
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
                     {if $new_people}
                     <ul class="row">
                        {foreach $new_people as $_user}
                        {include file='__feeds_user.tpl' _tpl="box" _connection="add"}
                        {/foreach}
                     </ul>
                     {/if}
                     <!-- new people -->
                     <!-- success -->
                     <div class="alert alert-success x-hidden"></div>
                     <!-- success -->
                     <!-- error -->
                     <div class="alert alert-danger x-hidden"></div>
                     <!-- error -->
                     <!-- buttons -->
                     <div class="clearfix mt20">
                        <button type="submit" class="btn btn-danger float-end"><i class="fas fa-check-circle mr5"></i>{__("Finish")}</button>
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
{include file='_footer.tpl'}
<script>
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
</script>
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
</style>