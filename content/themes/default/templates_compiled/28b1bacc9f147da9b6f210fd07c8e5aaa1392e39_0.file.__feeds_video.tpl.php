<?php
/* Smarty version 4.3.2, created on 2023-10-17 19:59:36
  from '/home1/fyrestr4/public_html/content/themes/default/templates/__feeds_video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652ee7a8331bb2_69157208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28b1bacc9f147da9b6f210fd07c8e5aaa1392e39' => 
    array (
      0 => '/home1/fyrestr4/public_html/content/themes/default/templates/__feeds_video.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652ee7a8331bb2_69157208 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-6 col-md-4 col-lg-3">
  <a class="pg_video" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['video']->value['post_id'];?>
">
    <video>
      <?php if (empty($_smarty_tpl->tpl_vars['video']->value['source_240p']) && empty($_smarty_tpl->tpl_vars['video']->value['source_360p']) && empty($_smarty_tpl->tpl_vars['video']->value['source_480p']) && empty($_smarty_tpl->tpl_vars['video']->value['source_720p']) && empty($_smarty_tpl->tpl_vars['video']->value['source_1080p']) && empty($_smarty_tpl->tpl_vars['video']->value['source_1440p']) && empty($_smarty_tpl->tpl_vars['video']->value['source_2160p'])) {?>
        <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source'];?>
" type="video/mp4">
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['video']->value['source_240p']) {?>
        <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source_240p'];?>
" type="video/mp4" label="240p" res="240">
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['video']->value['source_360p']) {?>
        <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source_360p'];?>
" type="video/mp4" label="360p" res="360">
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['video']->value['source_480p']) {?>
        <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source_480p'];?>
" type="video/mp4" label="480p" res="480">
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['video']->value['source_720p']) {?>
        <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source_720p'];?>
" type="video/mp4" label="720p" res="720">
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['video']->value['source_1080p']) {?>
        <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source_1080p'];?>
" type="video/mp4" label="1080p" res="1080">
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['video']->value['source_1440p']) {?>
        <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source_1440p'];?>
" type="video/mp4" label="1440p" res="1440">
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['video']->value['source_2160p']) {?>
        <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['video']->value['source_2160p'];?>
" type="video/mp4" label="2160p" res="2160">
      <?php }?>
    </video>
    <div class="play-button"><i class="fa fa-play fa-2x"></i></div>
  </a>
</div><?php }
}
