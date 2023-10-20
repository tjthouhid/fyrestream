<?php
/* Smarty version 4.3.2, created on 2023-10-14 20:49:34
  from '/home1/fyrestr4/public_html/content/themes/default/templates/sign.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652afede1bf456_19663535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a42c36474dee00c3d75b97c08721274c9a8d06c' => 
    array (
      0 => '/home1/fyrestr4/public_html/content/themes/default/templates/sign.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sign_form.tpl' => 1,
    'file:__svg_icons.tpl' => 3,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_652afede1bf456_19663535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-2 order-1 order-md-1 mx-auto">
      <img class="logo img-fluid"
        src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/moments logo.svg"
        alt="Moments Logo" />
    </div>
    <div class="col-12 col-md-5 pt-5 px-4 pb-4 order-3 order-md-2">
      <div class="">
        <?php $_smarty_tpl->_subTemplateRender('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('do'=>"up"), 0, false);
?>
        <div class="text-center">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['play_store_badge_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['play_store_link'];?>
" target="_blank">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"playstore_badge",'height'=>"68px"), 0, false);
?>
          </a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['appgallery_badge_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['appgallery_store_link'];?>
" target="_blank">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appgallery_badge",'height'=>"50px",'class'=>"mr10"), 0, true);
?>
          </a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['app_store_badge_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['app_store_link'];?>
" target="_blank">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appstore_badge",'height'=>"50px"), 0, true);
?>
          </a>
          <?php }?>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-5 order-2 order-md-3">
      <img class="logo img-fluid"
        src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/login-hero.png" />
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
