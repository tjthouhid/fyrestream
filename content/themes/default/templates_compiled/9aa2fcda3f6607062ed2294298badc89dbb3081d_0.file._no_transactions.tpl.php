<?php
/* Smarty version 4.3.2, created on 2023-10-15 15:07:24
  from '/home1/fyrestr4/public_html/content/themes/default/templates/_no_transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652c002c1ad5c0_28064739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aa2fcda3f6607062ed2294298badc89dbb3081d' => 
    array (
      0 => '/home1/fyrestr4/public_html/content/themes/default/templates/_no_transactions.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_652c002c1ad5c0_28064739 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no transaction -->
<div class="text-center text-muted">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"transaction",'class'=>"mb20",'width'=>"56px",'height'=>"56px"), 0, false);
?>
  <div class="text-md">
    <span class="no-data"><?php echo __("Looks like you don't have any transaction yet");?>
</span>
  </div>
</div>
<!-- no transaction --><?php }
}
