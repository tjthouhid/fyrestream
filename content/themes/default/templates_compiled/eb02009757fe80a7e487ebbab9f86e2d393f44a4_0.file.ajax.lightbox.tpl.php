<?php
/* Smarty version 4.3.2, created on 2023-10-15 07:52:26
  from '/home1/fyrestr4/public_html/content/themes/default/templates/ajax.lightbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652b9a3a0a8dc0_65334547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb02009757fe80a7e487ebbab9f86e2d393f44a4' => 
    array (
      0 => '/home1/fyrestr4/public_html/content/themes/default/templates/ajax.lightbox.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post_photo.tpl' => 1,
  ),
),false)) {
function content_652b9a3a0a8dc0_65334547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('post', $_smarty_tpl->tpl_vars['photo']->value['post']);?>

<div class="lightbox-post" data-id="<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {
echo $_smarty_tpl->tpl_vars['post']->value['post_id'];
} else {
echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];
}?>">
  <div class="js_scroller" data-slimScroll-height="100%">
    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_lightbox'=>true), 0, false);
?>
  </div>
</div><?php }
}
