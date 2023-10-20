<?php
/* Smarty version 4.3.2, created on 2023-10-13 22:21:01
  from 'E:\laragon\www\sngine\content\themes\default\templates\_sign_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6529c2cd326dc2_98643062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1210972f3bbdfc33b45a66d2100ee503d9f9eb89' => 
    array (
      0 => 'E:\\laragon\\www\\sngine\\content\\themes\\default\\templates\\_sign_form.tpl',
      1 => 1697235659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_6529c2cd326dc2_98643062 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- signin -->
<div class="js_panel <?php if ($_smarty_tpl->tpl_vars['do']->value == 'up') {?>x-hidden<?php }?>">
  <div class="card-header">
    <h4 class="card-title"><?php echo __("Sign In to your Account");?>
</h4>
    <p><?php echo __("Welcome back! please enter your detail");?>
</p>
  </div>
  <div class="card-body pt0">
    <?php if ((isset($_smarty_tpl->tpl_vars['highlight']->value))) {?><div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['highlight']->value;?>
</div><?php }?>
    <form class="js_ajax-forms" data-url="core/signin.php" method="POST">
      <!-- username or email -->
      <div class="mt-3">
        <label for="email" class="form-label mb-1">Email or Username</label>
        <input type="text" name="username_email" class="form-control" id="email" placeholder="Enter your email"
          value="<?php echo $_smarty_tpl->tpl_vars['user_profile']->value->email;?>
" required />
      </div>
      <div class="mt-3">
        <label for="password" class="form-label mb-1">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password"
          required />
        <div class="password-icon"></div>
      </div>
      <div class="row mt-3">
        <div class="col-12 col-lg-6 mb10">
          <input type="checkbox" class="form-check-input checkbox" name="remember" id="remember">
          <label class="form-check-label" for="remember"><?php echo __("Remember me");?>
</label>
        </div>
        <div class="col-12 col-lg-6 mb10">
          <a class="float-end sign--in p-1" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/reset"
            class="js_toggle-panel text-link"><?php echo __("Forgotten password?");?>
</a>
        </div>
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-style-1 w-100">
          Sign In
        </button>
      </div>
      <!-- submit -->
      <!-- error -->
      <div class="alert alert-danger mt15 mb0 x-hidden"></div>
      <!-- error -->
    </form>
    <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
    <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['wordpress_login_enabled']) {?>
    <div class="hr-heading mt5 mb10">
      <div class="hr-heading-text">
        <?php echo __("or");?>

      </div>
    </div>
    <div class="text-center">
      <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook" class="btn btn-sm btn-rounded btn-social-icon btn-facebook">
        <i class="fab fa-facebook-f"></i>
      </a>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google" class="btn btn-sm btn-rounded btn-social-icon btn-google">
        <i class="fab fa-google"></i>
      </a>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter" class="btn btn-sm btn-rounded btn-social-icon btn-twitter">
        <i class="fab fa-twitter"></i>
      </a>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin">
        <i class="fab fa-linkedin"></i>
      </a>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte" class="btn btn-sm btn-rounded btn-social-icon btn-vk">
        <i class="fab fa-vk"></i>
      </a>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['system']->value['wordpress_login_enabled']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/wordpress" class="btn btn-sm btn-rounded btn-social-icon btn-wordpress">
        <i class="fab fa-wordpress"></i>
      </a>
      <?php }?>

    </div>
    <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_enabled']) {?>
    <div class="mt30 text-center">
      <?php echo __("Don’t have an account?");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup"
        class="js_toggle-panel text-link sign--in p-1"><?php echo __("Sign Up");?>
</a>
    </div>
    <?php }?>
  </div>
</div>
<!-- signin -->

<!-- signup -->
<div class="js_panel <?php if ($_smarty_tpl->tpl_vars['do']->value != 'up') {?>x-hidden<?php }?>">
  <!-- <div class="col-12 col-md-5 pt-5 px-4 pb-4 order-3 order-md-2"> -->
  <h1 class="primary--headline">Sign Up ✌</h1>
  <p class="sub--text">Enter details to create your account</p>
  <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_enabled']) {?>
  <!-- invitation code -->
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-text bg-transparent"><i class="fas fa-handshake fa-fw"></i></span>
      <input name="invitation_code" type="text" class="form-control" placeholder='<?php echo __("Invitation Code");?>
'
        value="<?php echo $_smarty_tpl->tpl_vars['invitation_code']->value;?>
" required>
    </div>
  </div>
  <!-- invitation code -->
  <?php }?>
  <!-- FORM START -->
  <form class="mt-4 js_ajax-forms" data-url="core/signup.php" method="POST">
    <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_enabled']) {?>
    <!-- invitation code -->
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-text bg-transparent"><i class="fas fa-handshake fa-fw"></i></span>
        <input name="invitation_code" type="text" class="form-control" placeholder='<?php echo __("Invitation Code");?>
'
          value="<?php echo $_smarty_tpl->tpl_vars['invitation_code']->value;?>
" required>
      </div>
    </div>
    <!-- invitation code -->
    <?php }?>
    <div class="row gap-15">
      <div class="col-md-6 px-0">
        <label for="firstName" class="form-label mb-1">First Name</label>
        <input type="text" name="first_name" class="form-control" id="firstName" placeholder="Enter your first name" />
      </div>

      <div class="col-md-6 px-0 pl-15 pl-m-0 mt-m-16">
        <label for="lastName" class="form-label mb-1">Last Name</label>
        <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Enter your last name" />
      </div>
    </div>
    <div class="mt-3">
      <label for="username" class="form-label mb-1">Username</label>
      <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username" />
    </div>
    <div class="mt-3">
      <label for="email" class="form-label mb-1">E-mail or Phone Number</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email" />
    </div>
    <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_enabled'] && $_smarty_tpl->tpl_vars['system']->value['activation_type'] == "sms") {?>
    <!-- phone -->
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-text bg-transparent"><i class="fas fa-phone fa-fw"></i></span>
        <input name="phone" type="text" class="form-control" placeholder='<?php echo __("Phone number (e.g: +1234567890)");?>
'
          required>
      </div>
    </div>
    <!-- phone -->
    <?php }?>
    <div class="mt-3">
      <label for="password" class="form-label mb-1">New Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password" />
      <div class="password-icon"></div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['system']->value['age_restriction']) {?>
    <!-- birthdate -->
    <div class="mt-3">
      <label for="dob" class="form-label mb-1">Date of Birth</label>
      <div class="d-flex gap-3">
        <div class="col">
          <select class="form-select" name="birth_month">
            <option value="none"><?php echo __("Month");?>
</option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Jan");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Feb");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Mar");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Apr");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("May");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Jun");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Jul");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Aug");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Sep");?>

            </option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?>
              value="10"><?php echo __("Oct");?>
</option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?>
              value="11"><?php echo __("Nov");?>
</option>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?>
              value="12"><?php echo __("Dec");?>
</option>
          </select>
        </div>
        <div class="col">
          <select class="form-select" name="birth_day">
            <option value="none"><?php echo __("Day");?>
</option>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>

            </option>
            <?php }
}
?>
          </select>
        </div>
        <div class="col">
          <select class="form-select" name="birth_year">
            <option value="none"><?php echo __("Year");?>
</option>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2023+1 - (1905) : 1905-(2023)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>

            </option>
            <?php }
}
?>
          </select>
        </div>
      </div>
    </div>
    <!-- birthdate -->
    <?php }?>
    <div class="mt-3">
      <label for="Gender" class="form-label mb-1">Gender</label>
      <select class="form-control" name="gender" required>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['gender']->value['gender_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gender']->value['gender_name'];?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
      <div class="dropdown-icon"></div>
    </div>

    <!-- privacy & terms consent -->
    <div class="mt-3">
      <input type="checkbox" class="" name="privacy_agree" id="privacy_agree">
      <label class="form-check-label" for="privacy_agree">
        <?php echo __("By creating your account, you agree to our");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/terms"
          target="_blank"><?php echo __("Terms");?>
</a> & <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/privacy"
          target="_blank"><?php echo __("Privacy Policy");?>
</a>
      </label>
    </div>
    <!-- privacy & terms consent -->
    <div class="mt-4">
      <button type="submit" class="btn btn-style-1 w-100">
        Sign Up
      </button>
    </div>
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
  </form>
  <!-- FORM END -->
  <!-- BORDER CONTAINER START -->
  <div class="border-container mt-4">
    <div class="left-border"></div>
    <div class="text">Or</div>
    <div class="right-border"></div>
  </div>
  <!-- BORDER CONTAINER END -->
  <div class="mt-4">
    <button type="submit" class="btn btn-style-2 w-100">
      <div class="google-icon"></div>
      Sign up with Google
    </button>
  </div>
  <div class="mt-4 d-flex align-items-center justify-content-center">
    <a href="#" class="have--account p-1">Already have an account?</a>
    <a href="#" class="js_toggle-panel text-link sign--in p-1">Sign In</a>
  </div>
  <!-- </div> -->

</div>
<!-- signup --><?php }
}
