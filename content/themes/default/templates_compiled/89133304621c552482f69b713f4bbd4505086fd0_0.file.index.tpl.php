<?php
/* Smarty version 4.3.2, created on 2023-10-31 09:14:39
  from '/Users/user/Desktop/Websites/fyrestream/app/public/content/themes/default/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6540c57f38a531_96608292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89133304621c552482f69b713f4bbd4505086fd0' => 
    array (
      0 => '/Users/user/Desktop/Websites/fyrestream/app/public/content/themes/default/templates/index.tpl',
      1 => 1698743364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.landing.tpl' => 1,
    'file:index.newsfeed.tpl' => 1,
  ),
),false)) {
function content_6540c57f38a531_96608292 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in && !$_smarty_tpl->tpl_vars['system']->value['newsfeed_public']) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:index.landing.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
  <?php $_smarty_tpl->_subTemplateRender('file:index.newsfeed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
