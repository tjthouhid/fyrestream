<?php
/* Smarty version 4.3.2, created on 2023-10-10 22:05:19
  from 'E:\laragon\www\sngine\content\themes\default\templates\_no_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6525ca9fc20c90_65145783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e93641bf5918fb6f227c17876bf4df47edc92166' => 
    array (
      0 => 'E:\\laragon\\www\\sngine\\content\\themes\\default\\templates\\_no_data.tpl',
      1 => 1685400794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_6525ca9fc20c90_65145783 (Smarty_Internal_Template $_smarty_tpl) {
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
