<?php
/* Smarty version 4.3.2, created on 2023-10-15 15:00:27
  from '/home1/fyrestr4/public_html/content/themes/default/templates/emails/forget_password_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652bfe8bd8c957_63274761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb2016736cb6515d4623dfa8274269ef87a8f6c1' => 
    array (
      0 => '/home1/fyrestr4/public_html/content/themes/default/templates/emails/forget_password_email.txt',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652bfe8bd8c957_63274761 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>


<?php echo __("To complete the reset password process, please copy this token");?>
:

<?php echo __("Token");?>
: <?php echo $_smarty_tpl->tpl_vars['reset_key']->value;?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
