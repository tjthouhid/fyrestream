<?php
/* Smarty version 4.3.2, created on 2023-10-18 03:39:02
  from '/home1/fyrestr4/public_html/content/themes/default/templates/__feeds_album.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652f53560b1208_92291284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bccff416f4bf0387bd8ddb26fe93a2fa9be399d2' => 
    array (
      0 => '/home1/fyrestr4/public_html/content/themes/default/templates/__feeds_album.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f53560b1208_92291284 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-sm-6 col-md-4 col-lg-3">
  <div class="album-card">
    <?php if ($_smarty_tpl->tpl_vars['album']->value['cover']['blur']) {?><div class="x-blured"><?php }?>
      <a class="album-cover" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value['path'];?>
/album/<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['album']->value['cover']['source'];?>
);">
      </a>
      <?php if ($_smarty_tpl->tpl_vars['album']->value['cover']['blur']) {?>
    </div><?php }?>
    <div class="album-details">
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value['path'];?>
/album/<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['album']->value['title']);?>
</a>
      <div>
        <?php echo $_smarty_tpl->tpl_vars['album']->value['photos_count'];?>
 <?php echo __("photos");?>

        <div class="float-end">
          <?php if ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "me") {?>
            <i class="fa fa-lock" data-bs-toggle="tooltip" title='<?php echo __("Shared with");?>
: <?php echo __("Only Me");?>
'></i>
          <?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "friends") {?>
            <i class="fa fa-users" data-bs-toggle="tooltip" title='<?php echo __("Shared with");?>
: <?php echo __("Friends");?>
'></i>
          <?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "public") {?>
            <i class="fa fa-globe" data-bs-toggle="tooltip" title='<?php echo __("Shared with");?>
: <?php echo __("Public");?>
'></i>
          <?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "custom") {?>
            <i class="fa fa-cog" data-bs-toggle="tooltip" title='<?php echo __("Shared with");?>
 <?php echo __("Custom People");?>
'></i>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
