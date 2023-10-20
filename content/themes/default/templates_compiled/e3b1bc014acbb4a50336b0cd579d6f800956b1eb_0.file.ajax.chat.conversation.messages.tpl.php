<?php
/* Smarty version 4.3.2, created on 2023-10-14 22:57:36
  from '/home1/fyrestr4/public_html/content/themes/default/templates/ajax.chat.conversation.messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652b1ce0d37a14_54891468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3b1bc014acbb4a50336b0cd579d6f800956b1eb' => 
    array (
      0 => '/home1/fyrestr4/public_html/content/themes/default/templates/ajax.chat.conversation.messages.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.chat.messages.tpl' => 1,
  ),
),false)) {
function content_652b1ce0d37a14_54891468 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['conversation']->value['total_messages'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
  <!-- see-more -->
  <div class="alert alert-chat see-more small js_see-more" data-id=<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
 data-get="messages">
    <span><?php echo __("Loading Older Messages");?>
</span>
    <div class="loader loader_small x-hidden"></div>
  </div>
  <!-- see-more -->
<?php }?>

<ul>
  <?php $_smarty_tpl->_subTemplateRender('file:ajax.chat.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messages'=>$_smarty_tpl->tpl_vars['conversation']->value['messages']), 0, false);
?>
</ul><?php }
}
