<?php
/* Smarty version 4.3.2, created on 2023-10-14 13:53:29
  from '/home1/fyrestr4/public_html/test.fyrestream.com/content/themes/default/templates/reset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652a9d59c86849_88795060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85f1f7658f2a9320dd8e5bf83fe4d341354ef209' => 
    array (
      0 => '/home1/fyrestr4/public_html/test.fyrestream.com/content/themes/default/templates/reset.tpl',
      1 => 1697236118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_652a9d59c86849_88795060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt30">
  <div class="row">
    <div class="col-md-6 col-lg-5 mx-md-auto" style="
    padding-top: 6rem;
">
      <!-- reset form -->
      <div class="js_panel">
        <div class="card-header">
          <h4 class="card-title"><?php echo __("Forgot your password?");?>
</h4>
          <p class="card-subtitle"><?php echo __("Enter the email address associated with your account and we will send you a link
            to reset your password.");?>
</p>
        </div>
        <div class="card-body pt0">
          <form class="js_ajax-forms" data-url="core/forget_password.php">
            <!-- email -->
            <div class="form-group">
              <div class="input-group">
                <input type="email" name="email" class="form-control" id="email" placeholder='<?php echo __("Email");?>
' required />
              </div>
            </div>
            <!-- email -->

            <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>
            <div class="form-group">
              <!-- reCAPTCHA -->
              <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js' async defer><?php echo '</script'; ?>
>
              <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
"></div>
              <!-- reCAPTCHA -->
            </div>
            <?php }?>

            <div class="d-grid form-group">
              <input type="hidden" name="secret" value="<?php echo $_smarty_tpl->tpl_vars['secret']->value;?>
">
              <button type="submit" class="btn btn-style-1 w-100">
                <?php echo __("Continue");?>

              </button>
            </div>

            <!-- error -->
            <div class="alert alert-danger x-hidden"></div>
            <!-- error -->
          </form>
          <div class="mt20 text-center">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/" class="sign--in p-1"><?php echo __("Back to Signin");?>
</a>
          </div>
          <div class="mt20 text-center">
            <?php echo __("Don’t have an account?");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/" class="text-link sign--in p-1"><?php echo __("Sign
              Up");?>
</a>
          </div>
        </div>
      </div>
      <!-- reset form -->
    </div>
        <div class="col-12 col-md-6 order-2 order-md-3">
      <img class="logo img-fluid"
        src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/landing/login-hero.png" />
    </div>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
