<?php
/* Smarty version 4.3.2, created on 2023-10-20 09:13:41
  from '/Users/usedupvc/Desktop/Sites/fyrestream/content/themes/default/templates/__reaction_emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_653244c56511b4_53800356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94996d7c6dfa60202651a8de407cae0d6bbbd3bd' => 
    array (
      0 => '/Users/usedupvc/Desktop/Sites/fyrestream/content/themes/default/templates/__reaction_emojis.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653244c56511b4_53800356 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
