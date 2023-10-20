<?php
/* Smarty version 4.3.2, created on 2023-10-13 23:49:18
  from 'E:\laragon\www\sngine\content\themes\default\templates\_header.friend_requests.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6529d77e327c35_92606208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b255e4faa433144814a832e757c7b53cdce9c06' => 
    array (
      0 => 'E:\\laragon\\www\\sngine\\content\\themes\\default\\templates\\_header.friend_requests.tpl',
      1 => 1697240955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
  ),
),false)) {
function content_6529d77e327c35_92606208 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="dropdown js_live-requests">
   <a href="#" data-bs-toggle="dropdown" data-display="static">

    <span class="counter red shadow-sm rounded-pill <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_requests_counter'] == 0) {?>x-hidden<?php }?>">
      <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_requests_counter'];?>

    </span>
    <button class="nav-btn-rounded d-flex align-items-center justify-content-center" type="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path
          d="M15 14C12.33 14 7 15.33 7 18V20H23V18C23 15.33 17.67 14 15 14ZM6 10V7H4V10H1V12H4V15H6V12H9V10M15 12C16.0609 12 17.0783 11.5786 17.8284 10.8284C18.5786 10.0783 19 9.06087 19 8C19 6.93913 18.5786 5.92172 17.8284 5.17157C17.0783 4.42143 16.0609 4 15 4C13.9391 4 12.9217 4.42143 12.1716 5.17157C11.4214 5.92172 11 6.93913 11 8C11 9.06087 11.4214 10.0783 12.1716 10.8284C12.9217 11.5786 13.9391 12 15 12Z" />
      </svg>
    </button>
  </a>
  <div class="dropdown-menu dropdown-menu-end dropdown-widget js_dropdown-keepopen">
    <div class="dropdown-widget-header">
      <span class="title"><?php echo __("Friend Requests");?>
</span>
    </div>
    <div class="dropdown-widget-body">
      <div class="js_scroller">
        <!-- Friend Requests -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']) {?>
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"request"), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php } else { ?>
          <p class="text-center text-muted mt10">
            <lottie-player src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icon1.json" background="transparent"  speed="1"  style="width: 250px; height: 250px;display: block;margin-left: auto;margin-right: auto;" loop autoplay></lottie-player>
          </p>
        <?php }?>
        <!-- Friend Requests -->
      </div>
    </div>
    <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/friend_requests"><?php echo __("See All");?>
</a>
  </div>
</li><?php }
}
