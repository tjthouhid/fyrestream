<?php
/* Smarty version 4.3.2, created on 2023-10-20 10:13:42
  from '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/_header.notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_653252d64c78e7_53538995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffea741ac5c1334e4da5a76114b65bb88fd437e3' => 
    array (
      0 => '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/_header.notifications.tpl',
      1 => 1697796767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_notification.tpl' => 1,
  ),
),false)) {
function content_653252d64c78e7_53538995 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="dropdown js_live-notifications">
  <a href="#" data-bs-toggle="dropdown" data-display="static">
    <span class="counter red shadow-sm rounded-pill <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_notifications_counter'] == 0) {?>d-none<?php }?>">
      <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_notifications_counter'];?>

    </span>
    <button class="nav-btn-rounded active d-flex align-items-center justify-content-center" type="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M17 10C17.4582 10 17.902 9.93836 18.3236 9.82292L18.6652 12.8385C18.7509 13.595 19.0575 14.3069 19.5445 14.88C20.5779 16.0964 19.7392 18 18.1699 18H5.83014C4.26081 18 3.42209 16.0964 4.45549 14.88C4.94246 14.3069 5.24906 13.595 5.33476 12.8385L5.67964 9.79403C6.05382 6.49085 8.77095 4 12 4C12.0333 4 12.0666 4.00027 12.0999 4.00079C12.0344 4.32366 12 4.65782 12 5C12 7.76142 14.2386 10 17 10ZM14.9721 20.0715C14.5147 21.1992 13.3565 22 12 22C10.6435 22 9.48526 21.1992 9.02789 20.0715C9.00883 20.0245 9 19.974 9 19.9233C9 19.6895 9.18951 19.5 9.42329 19.5H14.5767C14.8105 19.5 15 19.6895 15 19.9233C15 19.974 14.9912 20.0245 14.9721 20.0715Z" />
        <circle cx="17" cy="5" r="3" />
      </svg>
    </button>
  </a>
  <div class="dropdown-menu dropdown-menu-end dropdown-widget js_dropdown-keepopen">
    <div class="dropdown-widget-header">
      <span class="title"><?php echo __("Notifications");?>
</span>

      <label class="switch sm float-end" for="notifications_sound">
        <input type="checkbox" class="js_notifications-sound-toggle" name="notifications_sound" id="notifications_sound" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['notifications_sound']) {?>checked<?php }?>>
        <span class="slider round"></span>
      </label>
      <div class="float-end mr5">
        <?php echo __("Sound");?>

      </div>
    </div>
    <div class="dropdown-widget-body">
      <div class="js_scroller">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['notifications']) {?>
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['notifications'], 'notification');
$_smarty_tpl->tpl_vars['notification']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->do_else = false;
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php } else { ?>
          <p class="text-center text-muted mt10">
            <lottie-player src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icon2.json" background="transparent"  speed="1"  style="width: 250px; height: 250px;display: block;margin-left: auto;margin-right: auto;" loop autoplay></lottie-player>
            
          </p>
        <?php }?>
      </div>
    </div>
    <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/notifications"><?php echo __("See All");?>
</a>
  </div>
</li><?php }
}
