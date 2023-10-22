<?php
/* Smarty version 4.3.2, created on 2023-10-21 12:02:51
  from '/Users/tjthouhid/Desktop/Wplocal/app/public/content/themes/default/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6533bdeb30a275_87149638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c166722d472af5b945cca2654d37b04bc8628ea0' => 
    array (
      0 => '/Users/tjthouhid/Desktop/Wplocal/app/public/content/themes/default/templates/index.tpl',
      1 => 1697889526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.landing.tpl' => 1,
    'file:index.newsfeed.tpl' => 1,
  ),
),false)) {
function content_6533bdeb30a275_87149638 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in && !$_smarty_tpl->tpl_vars['system']->value['newsfeed_public']) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:index.landing.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
  <?php $_smarty_tpl->_subTemplateRender('file:index.newsfeed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
