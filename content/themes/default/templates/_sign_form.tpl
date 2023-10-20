<!-- signin -->
<div class="js_panel {if $do == 'up'}x-hidden{/if}">
  <div class="card-header">
    <h4 class="card-title">{__("Sign In to your Account")}</h4>
    <p>{__("Welcome back! please enter your detail")}</p>
  </div>
  <div class="card-body pt0">
    {if isset($highlight)}<div class="alert alert-warning">{$highlight}</div>{/if}
    <form class="js_ajax-forms" data-url="core/signin.php" method="POST">
      <!-- username or email -->
      <div class="mt-3">
        <label for="email" class="form-label mb-1">Email or Username</label>
        <input type="text" name="username_email" class="form-control" id="email" placeholder="Enter your email"
          value="{$user_profile->email}" required />
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
          <label class="form-check-label" for="remember">{__("Remember me")}</label>
        </div>
        <div class="col-12 col-lg-6 mb10">
          <a class="float-end sign--in p-1" href="{$system['system_url']}/reset"
            class="js_toggle-panel text-link">{__("Forgotten password?")}</a>
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
    {if $system['social_login_enabled']}
    {if $system['facebook_login_enabled'] || $system['google_login_enabled'] || $system['twitter_login_enabled'] ||
    $system['linkedin_login_enabled'] || $system['vkontakte_login_enabled'] || $system['wordpress_login_enabled']}
    <div class="hr-heading mt5 mb10">
      <div class="hr-heading-text">
        {__("or")}
      </div>
    </div>
    <div class="text-center">
      {if $system['facebook_login_enabled']}
      <a href="{$system['system_url']}/connect/facebook" class="btn btn-sm btn-rounded btn-social-icon btn-facebook">
        <i class="fab fa-facebook-f"></i>
      </a>
      {/if}
      {if $system['google_login_enabled']}
      <a href="{$system['system_url']}/connect/google" class="btn btn-sm btn-rounded btn-social-icon btn-google">
        <i class="fab fa-google"></i>
      </a>
      {/if}
      {if $system['twitter_login_enabled']}
      <a href="{$system['system_url']}/connect/twitter" class="btn btn-sm btn-rounded btn-social-icon btn-twitter">
        <i class="fab fa-twitter"></i>
      </a>
      {/if}
      {if $system['linkedin_login_enabled']}
      <a href="{$system['system_url']}/connect/linkedin" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin">
        <i class="fab fa-linkedin"></i>
      </a>
      {/if}
      {if $system['vkontakte_login_enabled']}
      <a href="{$system['system_url']}/connect/vkontakte" class="btn btn-sm btn-rounded btn-social-icon btn-vk">
        <i class="fab fa-vk"></i>
      </a>
      {/if}
      {if $system['wordpress_login_enabled']}
      <a href="{$system['system_url']}/connect/wordpress" class="btn btn-sm btn-rounded btn-social-icon btn-wordpress">
        <i class="fab fa-wordpress"></i>
      </a>
      {/if}

    </div>
    {/if}
    {/if}
    {if $system['registration_enabled']}
    <div class="mt30 text-center">
      {__("Don’t have an account?")} <a href="{$system['system_url']}/signup"
        class="js_toggle-panel text-link sign--in p-1">{__("Sign Up")}</a>
    </div>
    {/if}
  </div>
</div>
<!-- signin -->

<!-- signup -->
<div class="js_panel {if $do != 'up'}x-hidden{/if}">
  <!-- <div class="col-12 col-md-5 pt-5 px-4 pb-4 order-3 order-md-2"> -->
  <h1 class="primary--headline">Sign Up ✌</h1>
  <p class="sub--text">Enter details to create your account</p>
  {if $system['invitation_enabled']}
  <!-- invitation code -->
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-text bg-transparent"><i class="fas fa-handshake fa-fw"></i></span>
      <input name="invitation_code" type="text" class="form-control" placeholder='{__("Invitation Code")}'
        value="{$invitation_code}" required>
    </div>
  </div>
  <!-- invitation code -->
  {/if}
  <!-- FORM START -->
  <form class="mt-4 js_ajax-forms" data-url="core/signup.php" method="POST">
    {if $system['invitation_enabled']}
    <!-- invitation code -->
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-text bg-transparent"><i class="fas fa-handshake fa-fw"></i></span>
        <input name="invitation_code" type="text" class="form-control" placeholder='{__("Invitation Code")}'
          value="{$invitation_code}" required>
      </div>
    </div>
    <!-- invitation code -->
    {/if}
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
    {if $system['activation_enabled'] && $system['activation_type'] == "sms"}
    <!-- phone -->
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-text bg-transparent"><i class="fas fa-phone fa-fw"></i></span>
        <input name="phone" type="text" class="form-control" placeholder='{__("Phone number (e.g: +1234567890)")}'
          required>
      </div>
    </div>
    <!-- phone -->
    {/if}
    <div class="mt-3">
      <label for="password" class="form-label mb-1">New Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password" />
      <div class="password-icon"></div>
    </div>
    {if $custom_fields}
    {include file='__custom_fields.tpl' _custom_fields=$custom_fields _registration=true}
    {/if}

    {if $system['age_restriction']}
    <!-- birthdate -->
    <div class="mt-3">
      <label for="dob" class="form-label mb-1">Date of Birth</label>
      <div class="d-flex gap-3">
        <div class="col">
          <select class="form-select" name="birth_month">
            <option value="none">{__("Month")}</option>
            <option {if $user->_data['user_birthdate_parsed']['month'] == '1'}selected{/if} value="1">{__("Jan")}
            </option>
            <option {if $user->_data['user_birthdate_parsed']['month'] == '2'}selected{/if} value="2">{__("Feb")}
            </option>
            <option {if $user->_data['user_birthdate_parsed']['month'] == '3'}selected{/if} value="3">{__("Mar")}
            </option>
            <option {if $user->_data['user_birthdate_parsed']['month'] == '4'}selected{/if} value="4">{__("Apr")}
            </option>
            <option {if $user->_data['user_birthdate_parsed']['month'] == '5'}selected{/if} value="5">{__("May")}
            </option>
            <option {if $user->_data['user_birthdate_parsed']['month'] == '6'}selected{/if} value="6">{__("Jun")}
            </option>
            <option {if $user->_data['user_birthdate_parsed']['month'] == '7'}selected{/if} value="7">{__("Jul")}
            </option>
            <option {if $user->_data['user_birthdate_parsed']['month'] == '8'}selected{/if} value="8">{__("Aug")}
            </option>
            <option {if $user->_data['user_birthdate_parsed']['month'] == '9'}selected{/if} value="9">{__("Sep")}
            </option>
            <option {if $user->_data['user_birthdate_parsed']['month'] == '10'}selected{/if}
              value="10">{__("Oct")}</option>
            <option {if $user->_data['user_birthdate_parsed']['month'] == '11'}selected{/if}
              value="11">{__("Nov")}</option>
            <option {if $user->_data['user_birthdate_parsed']['month'] == '12'}selected{/if}
              value="12">{__("Dec")}</option>
          </select>
        </div>
        <div class="col">
          <select class="form-select" name="birth_day">
            <option value="none">{__("Day")}</option>
            {for $i=1 to 31}
            <option {if $user->_data['user_birthdate_parsed']['day'] == $i}selected{/if} value="{$i}">{$i}
            </option>
            {/for}
          </select>
        </div>
        <div class="col">
          <select class="form-select" name="birth_year">
            <option value="none">{__("Year")}</option>
            {for $i=1905 to 2023}
            <option {if $user->_data['user_birthdate_parsed']['year'] == $i}selected{/if} value="{$i}">{$i}
            </option>
            {/for}
          </select>
        </div>
      </div>
    </div>
    <!-- birthdate -->
    {/if}
    <div class="mt-3">
      <label for="Gender" class="form-label mb-1">Gender</label>
      <select class="form-control" name="gender" required>
        {foreach $genders as $gender}
        <option value="{$gender['gender_id']}">{$gender['gender_name']}</option>
        {/foreach}
      </select>
      <div class="dropdown-icon"></div>
    </div>

    <!-- privacy & terms consent -->
    <div class="mt-3">
      <input type="checkbox" class="" name="privacy_agree" id="privacy_agree">
      <label class="form-check-label" for="privacy_agree">
        {__("By creating your account, you agree to our")} <a href="{$system['system_url']}/static/terms"
          target="_blank">{__("Terms")}</a> & <a href="{$system['system_url']}/static/privacy"
          target="_blank">{__("Privacy Policy")}</a>
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
 
  <!-- BORDER CONTAINER END -->
 
  <div class="mt-4 d-flex align-items-center justify-content-center">
    <a href="#" class="have--account p-1">Already have an account?</a>
    <a href="#" class="js_toggle-panel text-link sign--in p-1">Sign In</a>
  </div>
  <!-- </div> -->

</div>
<!-- signup -->