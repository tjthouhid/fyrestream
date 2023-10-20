<?php
/* Smarty version 4.3.2, created on 2023-10-20 10:01:57
  from '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/_no_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65325015f18e50_96235065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09a8360303869f74f51b16ae851290a4a9d0015a' => 
    array (
      0 => '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/_no_data.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_65325015f18e50_96235065 (Smarty_Internal_Template $_smarty_tpl) {
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
