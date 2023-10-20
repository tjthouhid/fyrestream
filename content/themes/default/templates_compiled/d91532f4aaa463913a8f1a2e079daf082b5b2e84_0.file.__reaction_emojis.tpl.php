<?php
/* Smarty version 4.3.2, created on 2023-10-20 10:01:55
  from '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/__reaction_emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_653250130bd104_77905425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd91532f4aaa463913a8f1a2e079daf082b5b2e84' => 
    array (
      0 => '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/__reaction_emojis.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653250130bd104_77905425 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
