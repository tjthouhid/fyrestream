<?php
/* Smarty version 4.3.2, created on 2023-10-08 15:22:22
  from '/home1/fyrestr4/public_html/test.fyrestream.com/content/themes/default/templates/emails/activation_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6522c92e6848e1_54483646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f1a5390488d68f72c06dd45f0ec8b5b6f964ebd' => 
    array (
      0 => '/home1/fyrestr4/public_html/test.fyrestream.com/content/themes/default/templates/emails/activation_email.txt',
      1 => 1688981284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6522c92e6848e1_54483646 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
,

<?php echo __("To complete the activation process, please follow this link");?>
:
<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/activation/<?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>


<?php echo __("Activiation Code");?>
: <?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>


<?php echo __("Welcome to");?>
 <?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
