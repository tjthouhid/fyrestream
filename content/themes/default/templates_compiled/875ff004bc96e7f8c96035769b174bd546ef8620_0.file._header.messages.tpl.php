<?php
/* Smarty version 4.3.2, created on 2023-10-20 10:41:56
  from '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/_header.messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_653259746088f8_94217981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '875ff004bc96e7f8c96035769b174bd546ef8620' => 
    array (
      0 => '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/_header.messages.tpl',
      1 => 1697798265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_conversation.tpl' => 1,
  ),
),false)) {
function content_653259746088f8_94217981 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="dropdown js_live-messages">
   <a href="#" data-bs-toggle="dropdown" data-display="static">

    <span class="counter red shadow-sm rounded-pill <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_messages_counter'] == 0) {?>d-none<?php }?>">
      <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_messages_counter'];?>

    </span>
    <button class="nav-btn-rounded d-flex align-items-center justify-content-center" type="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path
          d="M5.683 18.418C3.436 16.722 2 14.14 2 11.248C2 6.14 6.477 2 12 2C17.523 2 22 6.14 22 11.248C22 16.355 17.523 20.496 12 20.496C10.999 20.4969 10.0027 20.3582 9.04 20.084L5.683 21.975V18.418ZM10.933 8.715L5.539 14.375L10.447 11.705L13.012 14.375L18.374 8.715L13.521 11.337L10.933 8.715Z" />
      </svg>
    </button>

  </a>
  <div class="dropdown-menu dropdown-menu-end dropdown-widget">
    <div class="dropdown-widget-header">
      <span class="title"><?php echo __("Messages");?>
</span>
      <a class="float-end text-link js_chat-new" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new"><?php echo __("Send a New Message");?>
</a>
    </div>
    <div class="dropdown-widget-body">
      <div class="js_scroller">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['conversations']) {?>
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['conversations'], 'conversation');
$_smarty_tpl->tpl_vars['conversation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conversation']->value) {
$_smarty_tpl->tpl_vars['conversation']->do_else = false;
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php } else { ?>
          <p class="text-center text-muted mt10">
            <lottie-player src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icon3.json" background="transparent"  speed="1"  style="width: 250px; height: 250px;display: block;margin-left: auto;margin-right: auto;" loop autoplay></lottie-player>
          </p>
        <?php }?>
      </div>
    </div>
    <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages"><?php echo __("See All");?>
</a>
  </div>
</li><?php }
}
