<?php
/* Smarty version 4.3.2, created on 2023-10-09 16:54:44
  from '/home1/fyrestr4/public_html/test.fyrestream.com/content/themes/default/templates/ajax.live.conversations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652430540fa251_18845779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b98174c062d60767a1c4774e7a4c13040328ede7' => 
    array (
      0 => '/home1/fyrestr4/public_html/test.fyrestream.com/content/themes/default/templates/ajax.live.conversations.tpl',
      1 => 1647975804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_conversation.tpl' => 1,
  ),
),false)) {
function content_652430540fa251_18845779 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conversations']->value, 'conversation');
$_smarty_tpl->tpl_vars['conversation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conversation']->value) {
$_smarty_tpl->tpl_vars['conversation']->do_else = false;
?>
  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
