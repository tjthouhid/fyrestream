<?php
/* Smarty version 4.3.2, created on 2023-10-14 19:56:17
  from '/home1/fyrestr4/public_html/content/themes/default/templates/__reaction_emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652af261b1c5e5_51337223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bd53d82d48bfc6b5e90711a06386f24f58d4628' => 
    array (
      0 => '/home1/fyrestr4/public_html/content/themes/default/templates/__reaction_emojis.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652af261b1c5e5_51337223 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
