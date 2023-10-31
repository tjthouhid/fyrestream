<?php
/* Smarty version 4.3.2, created on 2023-10-31 09:15:19
  from '/Users/user/Desktop/Websites/fyrestream/app/public/content/themes/default/templates/_ads_campaigns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6540c5a74e2e77_58962368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc4d0a10744cd1cc827cb54dff869d3188ebacff' => 
    array (
      0 => '/Users/user/Desktop/Websites/fyrestream/app/public/content/themes/default/templates/_ads_campaigns.tpl',
      1 => 1698743364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6540c5a74e2e77_58962368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/user/Desktop/Websites/fyrestream/app/public/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['ads_campaigns']->value) {?>
  <!-- ads campaigns -->
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ads_campaigns']->value, 'campaign');
$_smarty_tpl->tpl_vars['campaign']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campaign']->value) {
$_smarty_tpl->tpl_vars['campaign']->do_else = false;
?>
    <div class="card">
      <div class="card-header bg-transparent">
        <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo __("Sponsored");?>

      </div>
      <div class="card-body <?php if ($_smarty_tpl->tpl_vars['campaign']->value['campaign_bidding'] == 'click') {?>js_ads-click-campaign<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_id'];?>
">
        <a href="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_url'];?>
" target="_blank">
          <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_image'];?>
">
        </a>
        <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_title'] || $_smarty_tpl->tpl_vars['campaign']->value['ads_description']) {?>
          <div class="ptb5 plr10">
            <p class="ads-title">
              <a href="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_title'];?>
</a>
            </p>
            <p class="ads-descrition">
              <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['campaign']->value['ads_description'],200);?>

            </p>
          </div>
        <?php }?>
      </div>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <!-- ads campaigns -->
<?php }
}
}
