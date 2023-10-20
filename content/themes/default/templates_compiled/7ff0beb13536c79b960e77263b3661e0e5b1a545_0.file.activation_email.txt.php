<?php
/* Smarty version 4.3.2, created on 2023-10-11 20:54:40
  from 'E:\laragon\www\sngine\content\themes\default\templates\emails\activation_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65270b90b465a0_27053200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ff0beb13536c79b960e77263b3661e0e5b1a545' => 
    array (
      0 => 'E:\\laragon\\www\\sngine\\content\\themes\\default\\templates\\emails\\activation_email.txt',
      1 => 1688981284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65270b90b465a0_27053200 (Smarty_Internal_Template $_smarty_tpl) {
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
