<?php
/* Smarty version 4.3.2, created on 2023-10-31 09:14:39
  from '/Users/user/Desktop/Websites/fyrestream/app/public/content/themes/default/templates/_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6540c57f4226b2_87811929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a70f8cd18a58dd825667c648ac9e6e8e28aa21d9' => 
    array (
      0 => '/Users/user/Desktop/Websites/fyrestream/app/public/content/themes/default/templates/_footer.tpl',
      1 => 1698743364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_ads.tpl' => 1,
    'file:_js_files.tpl' => 1,
    'file:_js_templates.tpl' => 1,
  ),
),false)) {
function content_6540c57f4226b2_87811929 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- ads -->
<?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_ads'=>$_smarty_tpl->tpl_vars['ads_master']->value['footer'],'_master'=>true), 0, false);
?>
<!-- ads -->



</div>
<!-- main wrapper -->

<!-- Dependencies CSS [Twemoji-Awesome] -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zamblektech/twemoji-amazing@latest/twemoji-amazing.css">
<!-- Dependencies CSS [Twemoji-Awesome] -->

<!-- JS Files -->
<?php $_smarty_tpl->_subTemplateRender('file:_js_files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- JS Files -->

<!-- JS Templates -->
<?php $_smarty_tpl->_subTemplateRender('file:_js_templates.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- JS Templates -->

<!-- Footer Custom JavaScript -->

<!-- Footer Custom JavaScript -->

<!-- Analytics Code -->
<?php if ($_smarty_tpl->tpl_vars['system']->value['analytics_code']) {
echo html_entity_decode($_smarty_tpl->tpl_vars['system']->value['analytics_code'],ENT_QUOTES);
}?>
<!-- Analytics Code -->

<!-- Sounds -->
<?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
  <!-- Notification -->
  <audio id="notification-sound" preload="auto">
    <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/notification.mp3" type="audio/mpeg">
  </audio>
  <!-- Notification -->
  <!-- Chat -->
  <audio id="chat-sound" preload="auto">
    <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/chat.mp3" type="audio/mpeg">
  </audio>
  <!-- Chat -->
  <!-- Call -->
  <audio id="chat-calling-sound" preload="auto" loop="true">
    <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/calling.mp3" type="audio/mpeg">
  </audio>
  <!-- Call -->
  <!-- Video -->
  <audio id="chat-ringing-sound" preload="auto" loop="true">
    <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/ringing.mp3" type="audio/mpeg">
  </audio>
  <!-- Video -->
<?php }?>
<!-- Sounds -->

</body>

</html><?php }
}
