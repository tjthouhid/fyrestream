<?php
/* Smarty version 4.3.2, created on 2023-10-20 10:01:54
  from '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/ajax.search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65325012977764_22538385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '289b1f227b9ade64889b8cb7c7e9a1552c9065a8' => 
    array (
      0 => '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/ajax.search.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
  ),
),false)) {
function content_65325012977764_22538385 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="js_scroller">
  <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['result']->value['type'] == "user") {?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_user'=>$_smarty_tpl->tpl_vars['result']->value,'_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['result']->value['connection'],'_search'=>true), 0, true);
?>

      <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "page") {?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_page'=>$_smarty_tpl->tpl_vars['result']->value,'_tpl'=>"list",'_search'=>true), 0, true);
?>

      <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "group") {?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_group'=>$_smarty_tpl->tpl_vars['result']->value,'_tpl'=>"list",'_search'=>true), 0, true);
?>

      <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type'] == "event") {?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_event'=>$_smarty_tpl->tpl_vars['result']->value,'_tpl'=>"list",'_search'=>true), 0, true);
?>

      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div><?php }
}
