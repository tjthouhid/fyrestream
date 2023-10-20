{include file='_head.tpl'}

<!-- page content -->
<div class="container mt30">
  <div class="row">
    <div class="col-md-6 col-lg-5 mx-md-auto" style="
    padding-top: 6rem;
">
      <!-- reset form -->
      <div class="js_panel">
        <div class="card-header">
          <h4 class="card-title">{__("Forgot your password?")}</h4>
          <p class="card-subtitle">{__("Enter the email address associated with your account and we will send you a link
            to reset your password.")}</p>
        </div>
        <div class="card-body pt0">
          <form class="js_ajax-forms" data-url="core/forget_password.php">
            <!-- email -->
            <div class="form-group">
              <div class="input-group">
                <input type="email" name="email" class="form-control" id="email" placeholder='{__("Email")}' required />
              </div>
            </div>
            <!-- email -->

            {if $system['reCAPTCHA_enabled']}
            <div class="form-group">
              <!-- reCAPTCHA -->
              <script src='https://www.google.com/recaptcha/api.js' async defer></script>
              <div class="g-recaptcha" data-sitekey="{$system['reCAPTCHA_site_key']}"></div>
              <!-- reCAPTCHA -->
            </div>
            {/if}

            <div class="d-grid form-group">
              <input type="hidden" name="secret" value="{$secret}">
              <button type="submit" class="btn btn-style-1 w-100">
                {__("Continue")}
              </button>
            </div>

            <!-- error -->
            <div class="alert alert-danger x-hidden"></div>
            <!-- error -->
          </form>
          <div class="mt20 text-center">
            <a href="{$system['system_url']}/" class="sign--in p-1">{__("Back to Signin")}</a>
          </div>
          <div class="mt20 text-center">
            {__("Don’t have an account?")} <a href="{$system['system_url']}/" class="text-link sign--in p-1">{__("Sign
              Up")}</a>
          </div>
        </div>
      </div>
      <!-- reset form -->
    </div>
        <div class="col-12 col-md-6 order-2 order-md-3">
      <img class="logo img-fluid"
        src="{$system['system_url']}/content/themes/{$system['theme']}/images/landing/login-hero.png" />
    </div>
  </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}