<?php
/* Smarty version 4.3.2, created on 2023-10-31 09:15:19
  from '/Users/user/Desktop/Websites/fyrestream/app/public/content/themes/default/templates/__reaction_emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6540c5a745f408_19247687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c1c35ac3a7344c399eb525627b78ac428f17f72' => 
    array (
      0 => '/Users/user/Desktop/Websites/fyrestream/app/public/content/themes/default/templates/__reaction_emojis.tpl',
      1 => 1698743364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6540c5a745f408_19247687 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
