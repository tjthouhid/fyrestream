<?php
/* Smarty version 4.3.2, created on 2023-10-21 19:33:25
  from '/Users/tjthouhid/Desktop/Wplocal/app/public/content/themes/default/templates/_no_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_653427851903c3_05065970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210593b4db6c4206843be485b0fdadff86af360b' => 
    array (
      0 => '/Users/tjthouhid/Desktop/Wplocal/app/public/content/themes/default/templates/_no_data.tpl',
      1 => 1697889526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_653427851903c3_05065970 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no data -->
<div class="text-center text-muted">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"80px",'height'=>"80px"), 0, false);
?>
  <div class="text-md">
    <span class="no-data"><?php echo __("No data to show");?>
</span>
  </div>
</div>
<!-- no data --><?php }
}
