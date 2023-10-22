<?php
/* Smarty version 4.3.2, created on 2023-10-21 19:24:12
  from '/Users/tjthouhid/Desktop/Wplocal/app/public/content/themes/default/templates/__feeds_profile_photo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6534255c2546e3_54280707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eb50e952a6b3469698654d73051e7b2baa5cbd7' => 
    array (
      0 => '/Users/tjthouhid/Desktop/Wplocal/app/public/content/themes/default/templates/__feeds_profile_photo.tpl',
      1 => 1697889526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6534255c2546e3_54280707 (Smarty_Internal_Template $_smarty_tpl) {
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
