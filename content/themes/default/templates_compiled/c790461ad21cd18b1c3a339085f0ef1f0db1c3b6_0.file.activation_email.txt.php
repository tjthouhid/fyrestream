<?php
/* Smarty version 4.3.2, created on 2023-10-20 10:03:42
  from '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/emails/activation_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6532507ef14960_10528944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c790461ad21cd18b1c3a339085f0ef1f0db1c3b6' => 
    array (
      0 => '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/emails/activation_email.txt',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6532507ef14960_10528944 (Smarty_Internal_Template $_smarty_tpl) {
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
