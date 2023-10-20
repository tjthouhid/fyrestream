<?php
/* Smarty version 4.3.2, created on 2023-10-20 10:49:34
  from '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/__feeds_profile_photo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65325b3e10ad52_58318713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d8a7b5efc99160d343673c8c579eeadaca13a34' => 
    array (
      0 => '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/__feeds_profile_photo.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65325b3e10ad52_58318713 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-4 mb10">
  <div class="pg_photo pointer <?php if ($_smarty_tpl->tpl_vars['_filter']->value == "avatar") {?>js_profile-picture-change<?php } else { ?>js_profile-cover-change<?php }?>" data-id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 data-type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 data-image="<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
);">
  </div>
</div><?php }
}
