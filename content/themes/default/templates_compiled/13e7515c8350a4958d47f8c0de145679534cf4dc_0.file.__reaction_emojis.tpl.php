<?php
/* Smarty version 4.3.2, created on 2023-10-21 19:16:19
  from '/Users/tjthouhid/Desktop/Wplocal/app/public/content/themes/default/templates/__reaction_emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65342383b21636_24217967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13e7515c8350a4958d47f8c0de145679534cf4dc' => 
    array (
      0 => '/Users/tjthouhid/Desktop/Wplocal/app/public/content/themes/default/templates/__reaction_emojis.tpl',
      1 => 1697889526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65342383b21636_24217967 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
