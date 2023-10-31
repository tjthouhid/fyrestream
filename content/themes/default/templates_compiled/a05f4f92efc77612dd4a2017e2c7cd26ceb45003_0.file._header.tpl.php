<?php
/* Smarty version 4.3.2, created on 2023-10-31 09:15:19
  from '/Users/user/Desktop/Websites/fyrestream/app/public/content/themes/default/templates/_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6540c5a7009c61_71786097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a05f4f92efc77612dd4a2017e2c7cd26ceb45003' => 
    array (
      0 => '/Users/user/Desktop/Websites/fyrestream/app/public/content/themes/default/templates/_header.tpl',
      1 => 1698743364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 32,
    'file:_header.search.tpl' => 1,
    'file:_header.friend_requests.tpl' => 1,
    'file:_header.messages.tpl' => 1,
    'file:_header.notifications.tpl' => 1,
    'file:_ads.tpl' => 1,
  ),
),false)) {
function content_6540c5a7009c61_71786097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/user/Desktop/Websites/fyrestream/app/public/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
<body class="<?php if ($_smarty_tpl->tpl_vars['system']->value['theme_mode_night']) {?>night-mode<?php }?> visitor n_chat <?php if ($_smarty_tpl->tpl_vars['page']->value == 'index' && !$_smarty_tpl->tpl_vars['system']->value['newsfeed_public']) {?>index-body<?php }?>" <?php if ($_smarty_tpl->tpl_vars['page']->value == 'profile' && $_smarty_tpl->tpl_vars['system']->value['system_profile_background_enabled'] && $_smarty_tpl->tpl_vars['profile']->value['user_profile_background']) {?>style="background: url(<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_profile_background'];?>
) fixed !important; background-size: 100% auto;" <?php }?>>
<?php } else { ?>
<body data-hash-tok="<?php echo $_smarty_tpl->tpl_vars['session_hash']->value['token'];?>
" data-hash-pos="<?php echo $_smarty_tpl->tpl_vars['session_hash']->value['position'];?>
" data-chat-enabled="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['system']->value['theme_mode_night']) {?>night-mode<?php }?> <?php if (!$_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?>n_chat<?php }
if ($_smarty_tpl->tpl_vars['system']->value['activation_enabled'] && !$_smarty_tpl->tpl_vars['system']->value['activation_required'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_activated']) {?> n_activated<?php }
if (!$_smarty_tpl->tpl_vars['system']->value['system_live']) {?> n_live<?php }?>" <?php if ($_smarty_tpl->tpl_vars['page']->value == 'profile' && $_smarty_tpl->tpl_vars['system']->value['system_profile_background_enabled'] && $_smarty_tpl->tpl_vars['profile']->value['user_profile_background']) {?>style="background: url(<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_profile_background'];?>
) fixed !important; background-size: 100% auto;" <?php }?> <?php if ($_smarty_tpl->tpl_vars['page']->value == "share" && $_smarty_tpl->tpl_vars['url']->value) {?>onload="initialize_scraper()" <?php }?>>
<?php }?>
<!-- main wrapper -->
<div class="main-wrapper">
   <?php if (!$_smarty_tpl->tpl_vars['system']->value['system_live']) {?>
   <!-- top-bar alert-->
   <div class="top-bar danger">
      <div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
         <i class="fa fa-exclamation-triangle fa-lg pr5"></i>
         <span class="d-none d-sm-inline"><?php echo __("The system has been shutted down");?>
.</span>
         <span><?php echo __("Turn it on from");?>
</span> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings"><?php echo __("Admin Panel");?>
</a>
      </div>
   </div>
   <!-- top-bar alert-->
   <?php }?>
   <!-- main-header -->
   <?php if ($_smarty_tpl->tpl_vars['page']->value != "index" || ($_smarty_tpl->tpl_vars['user']->value->_logged_in || $_smarty_tpl->tpl_vars['system']->value['newsfeed_public'])) {?>
   <div class="main-header" <?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>style="padding-right: 0;" <?php }?>>
   <div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
      <div class="row g-0">
         <div class="col-md-4">
            <div class="row g-0">
               <div class="<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>col-6<?php }?> col-md-4 col-lg-4 <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>d-none d-md-block<?php }?>">
                  <!-- logo-wrapper -->
                  <div class="logo-wrapper">
                     <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['system']->value['newsfeed_public']) {?>
                     <!-- menu-icon -->
                     <a href="#" data-bs-toggle="sg-offcanvas" class="menu-icon d-block d-md-none">
                     <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-menu",'class'=>"header-icon",'width'=>"20px",'height'=>"20px"), 0, false);
?>
                     </a>
                     <!-- menu-icon -->
                     <?php }?>
                     <!-- logo -->
                     <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
" class="logo <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['system']->value['newsfeed_public']) {?>with-menu-icon<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['system_logo']) {?>
                        <img class="logo-light img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/logo.png" alt="<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
" title="<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
">
                        <?php if (!$_smarty_tpl->tpl_vars['system']->value['system_logo_dark']) {?>
                        <img class="logo-dark img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/logo.png" alt="<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
" title="<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
">
                        <?php } else { ?>
                        <img class="logo-dark img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
" title="<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
">
                        <?php }?>
                        <?php } else { ?>
                        <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/logo.png" alt="<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
" title="<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
">
                        <?php }?>
                     </a>
                     <!-- logo -->
                  </div>
                  <!-- logo-wrapper -->
               </div>
               <!-- search-wrapper -->
               <div class="<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>col-6<?php }?> col-md-8 col-lg-8 d-none d-md-block" >
                  <div class="row">
                     <div class="col-md-5 col-lg-12">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in || (!$_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['system']->value['system_public'])) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:_header.search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php }?>
                     </div>
                  </div>
               </div>
               <!-- search-wrapper -->
         </div>
         </div>
         <div class="col-md-4">
            <!-- navbar-wrapper -->
            <div class="navbar-wrapper top-nav-middle">      
               <ul>
                  <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                  <!-- friend requests -->
                  <li class="dropdown">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
                        <button type="button" class="nav-btn<?php if ($_SERVER['REQUEST_URI'] == '/') {?> active<?php }?>">
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <path
                                 d="M13.3333 25.3333V18.6666H18.6667V25.3333C18.6667 26.0666 19.2667 26.6666 20 26.6666H24C24.7333 26.6666 25.3333 26.0666 25.3333 25.3333V16H27.6C28.2133 16 28.5067 15.24 28.04 14.84L16.8933 4.79996C16.3867 4.34663 15.6133 4.34663 15.1067 4.79996L3.96001 14.84C3.50668 15.24 3.78668 16 4.40001 16H6.66668V25.3333C6.66668 26.0666 7.26668 26.6666 8.00001 26.6666H12C12.7333 26.6666 13.3333 26.0666 13.3333 25.3333Z" />
                           </svg>
                        </button>
                     </a>
                  </li>
                  <!-- friend requests -->
                  <!-- messages -->
                  <li class="dropdown">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups">
                        <button type="button" class="nav-btn<?php if ($_SERVER['REQUEST_URI'] == '/groups') {?> active<?php }?>">
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <path
                                 d="M17.4266 13.8801C18.2365 12.7485 18.672 11.3917 18.672 10.0001C18.672 8.60849 18.2365 7.25176 17.4266 6.12011C18.1846 5.60272 19.0822 5.32833 20 5.33344C21.2376 5.33344 22.4246 5.82511 23.2998 6.70028C24.175 7.57545 24.6666 8.76243 24.6666 10.0001C24.6666 11.2378 24.175 12.4248 23.2998 13.2999C22.4246 14.1751 21.2376 14.6668 20 14.6668C19.0822 14.6719 18.1846 14.3975 17.4266 13.8801ZM7.33329 10.0001C7.33329 9.07713 7.60699 8.17488 8.11977 7.40745C8.63255 6.64002 9.36138 6.04188 10.2141 5.68867C11.0668 5.33546 12.0051 5.24305 12.9104 5.42311C13.8156 5.60318 14.6471 6.04763 15.2998 6.70028C15.9524 7.35292 16.3969 8.18444 16.577 9.08969C16.757 9.99493 16.6646 10.9332 16.3114 11.786C15.9582 12.6387 15.36 13.3675 14.5926 13.8803C13.8252 14.3931 12.9229 14.6668 12 14.6668C10.7623 14.6668 9.5753 14.1751 8.70013 13.2999C7.82496 12.4248 7.33329 11.2378 7.33329 10.0001ZM9.99996 10.0001C9.99996 10.3957 10.1173 10.7824 10.337 11.1113C10.5568 11.4401 10.8691 11.6965 11.2346 11.8479C11.6 11.9992 12.0022 12.0389 12.3901 11.9617C12.7781 11.8845 13.1345 11.694 13.4142 11.4143C13.6939 11.1346 13.8844 10.7783 13.9615 10.3903C14.0387 10.0023 13.9991 9.6002 13.8477 9.23474C13.6963 8.86929 13.44 8.55693 13.1111 8.33717C12.7822 8.11741 12.3955 8.00011 12 8.00011C11.4695 8.00011 10.9608 8.21082 10.5857 8.5859C10.2107 8.96097 9.99996 9.46968 9.99996 10.0001ZM21.3333 22.6668V25.3334H2.66663V22.6668C2.66663 22.6668 2.66663 17.3334 12 17.3334C21.3333 17.3334 21.3333 22.6668 21.3333 22.6668ZM18.6666 22.6668C18.48 21.6268 16.8933 20.0001 12 20.0001C7.10663 20.0001 5.42663 21.7468 5.33329 22.6668M21.2666 17.3334C22.0838 17.9691 22.752 18.7759 23.2242 19.6973C23.6964 20.6186 23.9612 21.6322 24 22.6668V25.3334H29.3333V22.6668C29.3333 22.6668 29.3333 17.8268 21.2533 17.3334H21.2666Z" />
                           </svg>
                        </button>
                     </a>
                  </li>
                  <!-- messages -->
                  <!-- notifications -->
                  <li class="dropdown">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/watch">
                        <button type="button" class="nav-btn<?php if ($_SERVER['REQUEST_URI'] == '/memories') {?> active<?php }?>">
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <path
                                 d="M16 2.66663C8.63996 2.66663 2.66663 8.63996 2.66663 16C2.66663 23.36 8.63996 29.3333 16 29.3333C23.36 29.3333 29.3333 23.36 29.3333 16C29.3333 8.63996 23.36 2.66663 16 2.66663ZM16 26.6666C10.12 26.6666 5.33329 21.88 5.33329 16C5.33329 10.12 10.12 5.33329 16 5.33329C21.88 5.33329 26.6666 10.12 26.6666 16C26.6666 21.88 21.88 26.6666 16 26.6666ZM8.66663 23.3333L18.68 18.68L23.3333 8.66663L13.32 13.32L8.66663 23.3333ZM16 14.5333C16.8133 14.5333 17.4666 15.1866 17.4666 16C17.4666 16.8133 16.8133 17.4666 16 17.4666C15.1866 17.4666 14.5333 16.8133 14.5333 16C14.5333 15.1866 15.1866 14.5333 16 14.5333Z" />
                           </svg>
                        </button>
                     </a>
                  </li>
                  <li class="dropdown">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/saved">
                        <button type="button" class="nav-btn<?php if ($_SERVER['REQUEST_URI'] == '/saved-posts') {?> active<?php }?>">
                           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                              <path
                                 d="M22.6666 24L16 21.0933L9.33329 24V6.66667H22.6666M22.6666 4H9.33329C8.62605 4 7.94777 4.28095 7.44767 4.78105C6.94758 5.28115 6.66663 5.95942 6.66663 6.66667V28L16 24L25.3333 28V6.66667C25.3333 5.95942 25.0523 5.28115 24.5522 4.78105C24.0521 4.28095 23.3739 4 22.6666 4Z" />
                           </svg>
                        </button>
                     </a>
                  </li>
                  <!-- notifications -->
                  <?php }?>
               </ul>
            </div>
            <!-- navbar-wrapper -->
                
         </div>
         <div class="col-md-4">
            <div class="row">
               <div class="col-md-12 col-lg-12">
                  <!-- navbar-wrapper -->
                  <div class="navbar-wrapper top-nav-right">
                     <ul>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                        <!-- bars -->
                        <li class="d-block d-md-none">
                           <a href="#" data-bs-toggle="sg-offcanvas">
                           <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-menu",'class'=>"header-icon",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                           </a>
                        </li>
                        <!-- bars -->
                        <!-- home -->
                        <li class="d-block d-md-none">
                           <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
                           <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-home",'class'=>"header-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                           </a>
                        </li>
                        <!-- home -->
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_stories'] || $_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles'] || $_smarty_tpl->tpl_vars['user']->value->_data['can_sell_products'] || $_smarty_tpl->tpl_vars['user']->value->_data['can_raise_funding'] || $_smarty_tpl->tpl_vars['user']->value->_data['can_create_ads'] || $_smarty_tpl->tpl_vars['user']->value->_data['can_create_pages'] || $_smarty_tpl->tpl_vars['user']->value->_data['can_create_groups'] || $_smarty_tpl->tpl_vars['user']->value->_data['can_create_events']) {?>
                        <!-- add -->
                        <li class="d-none d-xxl-block dropdown">
                           <a href="#" data-bs-toggle="dropdown" data-display="static">
                           <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-plus",'class'=>"header-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                           </a>
                           <div class="dropdown-menu dropdown-menu-end">
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_add_stories']) {?>
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/story.php?do=create">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"24_hours",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                                 <?php echo __("Create Story");?>

                              </div>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/new">
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"articles",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                              <?php echo __("Create Blog");?>

                              </a>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_sell_products']) {?>
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/product.php?do=create">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                                 <?php echo __("Create Product");?>

                              </div>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_raise_funding']) {?>
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/funding.php?do=create">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                                 <?php echo __("Create Funding");?>

                              </div>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_ads']) {?>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/ads/new">
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                              <?php echo __("Create Ads");?>

                              </a>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_pages']) {?>
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="pages_groups_events/add.php?type=page">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                                 <?php echo __("Create Page");?>

                              </div>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_groups']) {?>
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="pages_groups_events/add.php?type=group">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                                 <?php echo __("Create Group");?>

                              </div>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_events']) {?>
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="pages_groups_events/add.php?type=event">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                                 <?php echo __("Create Event");?>

                              </div>
                              <?php }?>
                           </div>
                        </li>
                        <!-- add -->
                        <?php }?>
                        <!-- friend requests -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_header.friend_requests.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <!-- friend requests -->
                        <!-- messages -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_header.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <!-- messages -->
                        <!-- notifications -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_header.notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <!-- notifications -->
                        <!-- search -->
                        <li class="d-block d-md-none">
                           <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search">
                           <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-search",'class'=>"header-icon",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                           </a>
                        </li>
                        <!-- search -->
                        <!-- user-menu -->
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle user-menu" data-bs-toggle="dropdown" data-display="static">
                              <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
">
                              <span><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
</span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
">
                                 <img class="rounded-circle mr10" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" width="20px" height="20px">
                                 <span><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
</span>
                              </a>
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['switch_accounts_enabled']) {?>
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="#account-switcher">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"accounts_switcher",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <?php echo __("Switch Accounts");?>

                              </div>
                              <?php }?>
                              <div class="dropdown-divider"></div>
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"membership",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <?php echo __("Upgrade to Pro");?>

                              </a>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['points_enabled'] || $_smarty_tpl->tpl_vars['system']->value['wallet_enabled'] || $_smarty_tpl->tpl_vars['user']->value->_data['can_raise_funding'] || ($_smarty_tpl->tpl_vars['user']->value->_data['can_monetize_content'] && $_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_enabled'])) {?>
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['points_enabled']) {?>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/points">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"points",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                              <?php echo __("Points");?>
: <span class="badge bg-light text-primary"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_points'];?>
</span>
                              </a>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_enabled']) {?>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <?php echo __("Wallet");?>
: <span class="badge bg-light text-primary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_wallet_balance'],2));?>
</span>
                              </a>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_sell_products']) {?>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/market">
                                 <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="20" height="20" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ff7600" d="m29.241 10.407-2.803-6.583a2.996 2.996 0 0 0-2.76-1.825H8.525a3.004 3.004 0 0 0-2.736 1.769l-2.968 6.594c-.809 1.405-.382 3.195.969 4.017.067.041.14.071.209.108v12.512c0 1.654 1.346 3 3 3H25c1.654 0 3-1.346 3-3V14.487c.082-.044.167-.081.246-.131 1.305-.812 1.743-2.572.995-3.949zM18 28v-5h4v5zm8-1c0 .551-.449 1-1 1h-1v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H7c-.551 0-1-.449-1-1V15a4.24 4.24 0 0 0 3.094-1.334c1.094 1 2.559 1.503 4.026 1.327 1.305-.158 2.258-.811 2.879-1.416.622.604 1.575 1.257 2.879 1.416.194.023.388.035.582.035 1.265 0 2.495-.495 3.444-1.362A4.24 4.24 0 0 0 25.998 15v12zm1.188-14.341a2.246 2.246 0 0 1-3.265-1.044 1.001 1.001 0 0 0-.843-.612.985.985 0 0 0-.93.47c-.666 1.074-1.858 1.672-3.029 1.534-1.417-.172-2.18-1.383-2.263-1.521a.999.999 0 0 0-1.716 0c-.083.138-.845 1.349-2.263 1.521-1.175.139-2.364-.46-3.029-1.534a.981.981 0 0 0-.93-.47.999.999 0 0 0-.843.612 2.244 2.244 0 0 1-3.246 1.056c-.423-.257-.544-.867-.264-1.331a.896.896 0 0 0 .056-.106l2.99-6.645c.161-.358.519-.589.912-.589h15.152c.402 0 .763.239.92.608l2.823 6.631a.776.776 0 0 0 .052.104c.264.463.137 1.053-.285 1.316z" data-original="#0c474d"></path><path fill="#ff7600" d="M12 19H9a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2z" data-original="#3cacb6" class=""></path></g></svg>
                                 <?php echo __("Marketplace");?>
: <span class="badge bg-light text-primary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_market_balance'],2));?>
</span>
                              </a>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_raise_funding']) {?>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/funding">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <?php echo __("Funding");?>
: <span class="badge bg-light text-primary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_funding_balance'],2));?>
</span>
                              </a>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_monetize_content'] && $_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_enabled']) {?>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/monetization">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <?php echo __("Monetization");?>
: <span class="badge bg-light text-primary"><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_balance'],2));?>
</span>
                              </a>
                              <?php }?>
                              <div class="dropdown-divider"></div>
                              <?php }?>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <?php echo __("Settings");?>

                              </a>
                              <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"admin_panel",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <?php echo __("Admin Panel");?>

                              </a>
                              <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->_is_moderator) {?>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/modcp">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"admin_panel",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
echo __("Moderator Panel");?>

                              </a>
                              <?php }?>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signout/?cache=<?php echo $_smarty_tpl->tpl_vars['secret']->value;?>
">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"logout",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <?php echo __("Log Out");?>

                              </a>
                              <div class="dropdown-divider"></div>
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="#keyboard-shortcuts">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"keyboard",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <?php echo __("Keyboard Shortcuts");?>

                              </div>
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['themes'] && count($_smarty_tpl->tpl_vars['system']->value['themes']) > 1) {?>
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="#theme-switcher">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"themes_switcher",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <?php echo __("Theme Switcher");?>

                              </div>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['system_theme_mode_select']) {?>
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['theme_mode_night']) {?>
                              <div class="dropdown-item pointer js_theme-mode" data-mode="day">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"dark_light",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <span class="js_theme-mode-text"><?php echo __("Day Mode");?>
</span>
                              </div>
                              <?php } else { ?>
                              <div class="dropdown-item pointer js_theme-mode" data-mode="night">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"dark_light",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <span class="js_theme-mode-text"><?php echo __("Night Mode");?>
</span>
                              </div>
                              <?php }?>
                              <?php }?>
                           </div>
                        </li>
                        <!-- user-menu -->
                        <?php } else { ?>
                        <li class="dropdown float-end">
                           <a href="#" class="dropdown-toggle user-menu" data-bs-toggle="dropdown" data-display="static">
                           <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/blank_profile_male.png">
                           <span><?php echo __("Join");?>
</span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin">
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"login",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                              <?php echo __("Sign In");?>

                              </a>
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_enabled']) {?>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup">
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"user_add",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                              <?php echo __("Sign Up");?>

                              </a>
                              <?php }?>
                              <?php if (($_smarty_tpl->tpl_vars['system']->value['themes'] && count($_smarty_tpl->tpl_vars['system']->value['themes']) > 1) || $_smarty_tpl->tpl_vars['system']->value['system_theme_mode_select']) {?>
                              <div class="dropdown-divider"></div>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['themes'] && count($_smarty_tpl->tpl_vars['system']->value['themes']) > 1) {?>
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="#theme-switcher">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"themes_switcher",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <?php echo __("Theme Switcher");?>

                              </div>
                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['system_theme_mode_select']) {?>
                              <?php if ($_smarty_tpl->tpl_vars['system']->value['theme_mode_night']) {?>
                              <div class="dropdown-item pointer js_theme-mode" data-mode="day">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"dark_light",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <span class="js_theme-mode-text"><?php echo __("Day Mode");?>
</span>
                              </div>
                              <?php } else { ?>
                              <div class="dropdown-item pointer js_theme-mode" data-mode="night">
                                 <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"dark_light",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), 0, true);
?>
                                 <span class="js_theme-mode-text"><?php echo __("Night Mode");?>
</span>
                              </div>
                              <?php }?>
                              <?php }?>
                           </div>
                        </li>
                        <?php }?>
                     </ul>
                  </div>
                  <!-- navbar-wrapper -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php }?>
<!-- main-header -->
<!-- ads -->
<?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_ads'=>$_smarty_tpl->tpl_vars['ads_master']->value['header'],'_master'=>true), 0, false);
?>
<!-- ads -->
<style>

   
   
   .switch .slider:before {
   height: 15px !important;
   width: 15px !important;
   }
   .switch {
   display: inline-block;
   height: 20px;
   margin: 0;
   position: relative;
   width: 50px;
   }
   
   .navbar-wrapper{
   width: 100%;
   }
 
   
   
   a {
   color: black;
   }
   .text-primary {
   --bs-text-opacity: 1;
   color: #ff7600 !important;
   }
   :root, [data-bs-theme=light]{
   --bs-primary-rgb:#ff7600 !important;
   }
   @media (max-width: 768px){
   .iconsss{
   width:auto !important;
   height:auto !important;
   }
   .navbar-wrapper{
   width:100%;
   }
   .d-nones{
   display:none;
   }
   }
   .profile-cover-wrapper{
   background-image:url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/cover.jpg);
   background-size: 100% 100%;
   }
  
   

   
</style>
<?php }
}
