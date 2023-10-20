<?php
/* Smarty version 4.3.2, created on 2023-10-08 18:32:19
  from '/home1/fyrestr4/public_html/test.fyrestream.com/content/themes/default/templates/__feeds_comment.text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6522f5b3d31075_87112973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8afc9d58926c43564ba27372d23c245b652bba21' => 
    array (
      0 => '/home1/fyrestr4/public_html/test.fyrestream.com/content/themes/default/templates/__feeds_comment.text.tpl',
      1 => 1647975576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6522f5b3d31075_87112973 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="comment-replace">
  <div class="comment-text js_readmore" dir="auto"><?php echo $_smarty_tpl->tpl_vars['_comment']->value['text'];?>
</div>
  <div class="comment-text-plain x-hidden"><?php echo $_smarty_tpl->tpl_vars['_comment']->value['text_plain'];?>
</div>
  <?php if ($_smarty_tpl->tpl_vars['_comment']->value['image'] != '') {?>
    <span class="text-link js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_comment']->value['image'];?>
">
      <img alt="" class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_comment']->value['image'];?>
">
    </span>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['_comment']->value['voice_note'] != '') {?>
    <audio class="js_audio" id="audio-<?php echo $_smarty_tpl->tpl_vars['_comment']->value['comment_id'];?>
" controls preload="auto" style="width: 100%; min-width: 200px;">
      <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_comment']->value['voice_note'];?>
" type="audio/mpeg">
      <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_comment']->value['voice_note'];?>
" type="audio/mp3">
      <?php echo __("Your browser does not support HTML5 audio");?>

    </audio>
  <?php }?>
</div><?php }
}
