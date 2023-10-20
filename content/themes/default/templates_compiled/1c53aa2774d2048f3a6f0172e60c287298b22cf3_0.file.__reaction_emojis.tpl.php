<?php
/* Smarty version 4.3.2, created on 2023-10-10 22:12:55
  from 'E:\laragon\www\sngine\content\themes\default\templates\__reaction_emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6525cc67054583_56057874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c53aa2774d2048f3a6f0172e60c287298b22cf3' => 
    array (
      0 => 'E:\\laragon\\www\\sngine\\content\\themes\\default\\templates\\__reaction_emojis.tpl',
      1 => 1667424620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6525cc67054583_56057874 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
