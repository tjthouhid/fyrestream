<?php
/* Smarty version 4.3.2, created on 2023-10-15 15:09:13
  from '/home1/fyrestr4/public_html/content/themes/default/templates/settings.delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652c0099ea41b9_97374061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09654fc37c3f19dc21458d5aac9d5f8c5406d102' => 
    array (
      0 => '/home1/fyrestr4/public_html/content/themes/default/templates/settings.delete.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_652c0099ea41b9_97374061 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete_user",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
echo __("Delete Account");?>

</div>
<div class="card-body">
  <div class="alert alert-warning">
    <div class="icon">
      <i class="fa fa-exclamation-triangle fa-2x"></i>
    </div>
    <div class="text pt5">
      <?php echo __("Once you delete your account you will no longer can access it again");?>

    </div>
  </div>

  <div class="text-center">
    <button class="btn btn-danger js_delete-user">
      <?php echo __("Delete My Account");?>

    </button>
  </div>
</div><?php }
}
