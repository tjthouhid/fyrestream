{if !$user->_logged_in}
<body class="{if $system['theme_mode_night']}night-mode{/if} visitor n_chat {if $page == 'index' && !$system['newsfeed_public']}index-body{/if}" {if $page == 'profile' && $system['system_profile_background_enabled'] && $profile['user_profile_background']}style="background: url({$profile['user_profile_background']}) fixed !important; background-size: 100% auto;" {/if}>
{else}
<body data-hash-tok="{$session_hash['token']}" data-hash-pos="{$session_hash['position']}" data-chat-enabled="{$user->_data['user_chat_enabled']}" class="{if $system['theme_mode_night']}night-mode{/if} {if !$system['chat_enabled']}n_chat{/if}{if $system['activation_enabled'] && !$system['activation_required'] && !$user->_data['user_activated']} n_activated{/if}{if !$system['system_live']} n_live{/if}" {if $page == 'profile' && $system['system_profile_background_enabled'] && $profile['user_profile_background']}style="background: url({$profile['user_profile_background']}) fixed !important; background-size: 100% auto;" {/if} {if $page == "share" && $url}onload="initialize_scraper()" {/if}>
{/if}
<!-- main wrapper -->
<div class="main-wrapper">
   {if !$system['system_live']}
   <!-- top-bar alert-->
   <div class="top-bar danger">
      <div class="{if $system['fluid_design']}container-fluid{else}container{/if}">
         <i class="fa fa-exclamation-triangle fa-lg pr5"></i>
         <span class="d-none d-sm-inline">{__("The system has been shutted down")}.</span>
         <span>{__("Turn it on from")}</span> <a href="{$system['system_url']}/admincp/settings">{__("Admin Panel")}</a>
      </div>
   </div>
   <!-- top-bar alert-->
   {/if}
   <!-- main-header -->
   {if $page != "index" || ($user->_logged_in || $system['newsfeed_public'])}
   <div class="main-header" {if $system['fluid_design']}style="padding-right: 0;" {/if}>
   <div class="{if $system['fluid_design']}container-fluid{else}container{/if}">
      <div class="row">
         <div class="{if !$user->_logged_in}col-6{/if} col-md-4 col-lg-1 {if $user->_logged_in}d-none d-md-block{/if}">
            <!-- logo-wrapper -->
            <div class="logo-wrapper">
               {if !$user->_logged_in && $system['newsfeed_public']}
               <!-- menu-icon -->
               <a href="#" data-bs-toggle="sg-offcanvas" class="menu-icon d-block d-md-none">
               {include file='__svg_icons.tpl' icon="header-menu" class="header-icon" width="20px" height="20px"}
               </a>
               <!-- menu-icon -->
               {/if}
               <!-- logo -->
               <a href="{$system['system_url']}" class="logo {if !$user->_logged_in && $system['newsfeed_public']}with-menu-icon{/if}">
                  {if $system['system_logo']}
                  <img class="logo-light img-fluid" src="{$system['system_url']}/content/themes/{$system['theme']}/images/logo.png" alt="{__($system['system_title'])}" title="{__($system['system_title'])}">
                  {if !$system['system_logo_dark']}
                  <img class="logo-dark img-fluid" src="{$system['system_url']}/content/themes/{$system['theme']}/images/logo.png" alt="{__($system['system_title'])}" title="{__($system['system_title'])}">
                  {else}
                  <img class="logo-dark img-fluid" src="{$system['system_url']}/content/themes/{$system['theme']}/images/logo.png" alt="{$system['system_title']}" title="{__($system['system_title'])}">
                  {/if}
                  {else}
                  <img class="img-fluid" src="{$system['system_url']}/content/themes/{$system['theme']}/images/logo.png" alt="{__($system['system_title'])}" title="{__($system['system_title'])}">
                  {/if}
               </a>
               <!-- logo -->
            </div>
            <!-- logo-wrapper -->
         </div>
         <div class="{if !$user->_logged_in}col-6{/if} col-md-8 col-lg-3 d-none d-md-block" >
            <div class="row">
               <div class="col-md-5 col-lg-12">
                  {if $user->_logged_in || (!$user->_logged_in && $system['system_public']) }
                  {include file='_header.search.tpl'}
                  {/if}
               </div>
            </div>
         </div>
         <div class="{if !$user->_logged_in}col-6{/if} col-md-8 col-lg-8">
            <div class="row">
               <div class="col-md-7 col-lg-5 d-nones">
                  <!-- search-wrapper -->
                  <!-- navbar-wrapper -->
                  <div class="navbar-wrapper">      
                  <?php
                       print_r ($system);
                  ?>
                     <ul style="
                        margin-left: -50px;
                        ">
                        {if $user->_logged_in}
                        <!-- friend requests -->
                        <li class="dropdown">
                           <a href="{$system['system_url']}">
                              <button type="button" class="nav-btn{if $smarty.server.REQUEST_URI == '/'} active{/if}">
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
                           <a href="{$system['system_url']}/groups">
                              <button type="button" class="nav-btn{if $smarty.server.REQUEST_URI == '/groups'} active{/if}">
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
                           <a href="{$system['system_url']}/watch">
                              <button type="button" class="nav-btn{if $smarty.server.REQUEST_URI == '/memories'} active{/if}">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path
                                       d="M16 2.66663C8.63996 2.66663 2.66663 8.63996 2.66663 16C2.66663 23.36 8.63996 29.3333 16 29.3333C23.36 29.3333 29.3333 23.36 29.3333 16C29.3333 8.63996 23.36 2.66663 16 2.66663ZM16 26.6666C10.12 26.6666 5.33329 21.88 5.33329 16C5.33329 10.12 10.12 5.33329 16 5.33329C21.88 5.33329 26.6666 10.12 26.6666 16C26.6666 21.88 21.88 26.6666 16 26.6666ZM8.66663 23.3333L18.68 18.68L23.3333 8.66663L13.32 13.32L8.66663 23.3333ZM16 14.5333C16.8133 14.5333 17.4666 15.1866 17.4666 16C17.4666 16.8133 16.8133 17.4666 16 17.4666C15.1866 17.4666 14.5333 16.8133 14.5333 16C14.5333 15.1866 15.1866 14.5333 16 14.5333Z" />
                                 </svg>
                              </button>
                           </a>
                        </li>
                        <li class="dropdown">
                           <a href="{$system['system_url']}/saved">
                              <button type="button" class="nav-btn{if $smarty.server.REQUEST_URI == '/saved-posts'} active{/if}">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path
                                       d="M22.6666 24L16 21.0933L9.33329 24V6.66667H22.6666M22.6666 4H9.33329C8.62605 4 7.94777 4.28095 7.44767 4.78105C6.94758 5.28115 6.66663 5.95942 6.66663 6.66667V28L16 24L25.3333 28V6.66667C25.3333 5.95942 25.0523 5.28115 24.5522 4.78105C24.0521 4.28095 23.3739 4 22.6666 4Z" />
                                 </svg>
                              </button>
                           </a>
                        </li>
                        <!-- notifications -->
                        {/if}
                     </ul>
                  </div>
                  <!-- navbar-wrapper -->
                  <!-- search-wrapper -->
               </div>
               <div class="col-md-5 col-lg-7">
                  <!-- navbar-wrapper -->
                  <div class="navbar-wrapper" style="
    margin-top: 12px;
    margin-left: 15px;
">
                     <ul>
                        {if $user->_logged_in}
                        <!-- bars -->
                        <li class="d-block d-md-none">
                           <a href="#" data-bs-toggle="sg-offcanvas">
                           {include file='__svg_icons.tpl' icon="header-menu" class="header-icon" width="20px" height="20px"}
                           </a>
                        </li>
                        <!-- bars -->
                        <!-- home -->
                        <li class="d-block d-md-none">
                           <a href="{$system['system_url']}">
                           {include file='__svg_icons.tpl' icon="header-home" class="header-icon" width="24px" height="24px"}
                           </a>
                        </li>
                        <!-- home -->
                        {if $user->_data['can_add_stories'] || $user->_data['can_write_articles'] || $user->_data['can_sell_products'] || $user->_data['can_raise_funding'] || $user->_data['can_create_ads'] || $user->_data['can_create_pages'] || $user->_data['can_create_groups'] || $user->_data['can_create_events']}
                        <!-- add -->
                        <li class="d-none d-xxl-block dropdown">
                           <a href="#" data-bs-toggle="dropdown" data-display="static">
                           {include file='__svg_icons.tpl' icon="header-plus" class="header-icon" width="24px" height="24px"}
                           </a>
                           <div class="dropdown-menu dropdown-menu-end">
                              {if $user->_data['can_add_stories']}
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/story.php?do=create">
                                 {include file='__svg_icons.tpl' icon="24_hours" class="main-icon mr10" width="24px" height="24px"}
                                 {__("Create Story")}
                              </div>
                              {/if}
                              {if $user->_data['can_write_articles']}
                              <a class="dropdown-item" href="{$system['system_url']}/blogs/new">
                              {include file='__svg_icons.tpl' icon="articles" class="main-icon mr10" width="24px" height="24px"}
                              {__("Create Blog")}
                              </a>
                              {/if}
                              {if $user->_data['can_sell_products']}
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/product.php?do=create">
                                 {include file='__svg_icons.tpl' icon="products" class="main-icon mr10" width="24px" height="24px"}
                                 {__("Create Product")}
                              </div>
                              {/if}
                              {if $user->_data['can_raise_funding']}
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/funding.php?do=create">
                                 {include file='__svg_icons.tpl' icon="funding" class="main-icon mr10" width="24px" height="24px"}
                                 {__("Create Funding")}
                              </div>
                              {/if}
                              {if $user->_data['can_create_ads']}
                              <a class="dropdown-item" href="{$system['system_url']}/ads/new">
                              {include file='__svg_icons.tpl' icon="ads" class="main-icon mr10" width="24px" height="24px"}
                              {__("Create Ads")}
                              </a>
                              {/if}
                              {if $user->_data['can_create_pages']}
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="pages_groups_events/add.php?type=page">
                                 {include file='__svg_icons.tpl' icon="pages" class="main-icon mr10" width="24px" height="24px"}
                                 {__("Create Page")}
                              </div>
                              {/if}
                              {if $user->_data['can_create_groups']}
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="pages_groups_events/add.php?type=group">
                                 {include file='__svg_icons.tpl' icon="groups" class="main-icon mr10" width="24px" height="24px"}
                                 {__("Create Group")}
                              </div>
                              {/if}
                              {if $user->_data['can_create_events']}
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="pages_groups_events/add.php?type=event">
                                 {include file='__svg_icons.tpl' icon="events" class="main-icon mr10" width="24px" height="24px"}
                                 {__("Create Event")}
                              </div>
                              {/if}
                           </div>
                        </li>
                        <!-- add -->
                        {/if}
                        <!-- friend requests -->
                        {include file='_header.friend_requests.tpl'}
                        <!-- friend requests -->
                        <!-- messages -->
                        {include file='_header.messages.tpl'}
                        <!-- messages -->
                        <!-- notifications -->
                        {include file='_header.notifications.tpl'}
                        <!-- notifications -->
                        <!-- search -->
                        <li class="d-block d-md-none">
                           <a href="{$system['system_url']}/search">
                           {include file='__svg_icons.tpl' icon="header-search" class="header-icon" width="24px" height="24px"}
                           </a>
                        </li>
                        <!-- search -->
                        <!-- user-menu -->
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle user-menu" data-bs-toggle="dropdown" data-display="static">
                           <img src="{$user->_data['user_picture']}">
                           <span>{$user->_data['name']}</span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="{$system['system_url']}/{$user->_data['user_name']}">
                              <img class="rounded-circle mr10" src="{$user->_data.user_picture}" width="20px" height="20px">
                              <span>{$user->_data['name']}</span>
                              </a>
                              {if $system['switch_accounts_enabled']}
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="#account-switcher">
                                 {include file='__svg_icons.tpl' icon="accounts_switcher" class="main-icon mr10" width="20px" height="20px"}
                                 {__("Switch Accounts")}
                              </div>
                              {/if}
                              <div class="dropdown-divider"></div>
                              {if $system['packages_enabled'] && !$user->_data['user_subscribed']}
                              <a class="dropdown-item" href="{$system['system_url']}/packages">
                              {include file='__svg_icons.tpl' icon="membership" class="main-icon mr10" width="20px" height="20px"}
                              {__("Upgrade to Pro")}
                              </a>
                              {/if}
                              {if $system['points_enabled'] || $system['wallet_enabled'] || $user->_data['can_raise_funding'] || ($user->_data['can_monetize_content'] && $user->_data['user_monetization_enabled'])}
                              {if $system['points_enabled']}
                              <a class="dropdown-item" href="{$system['system_url']}/settings/points">
                              {include file='__svg_icons.tpl' icon="points" class="main-icon mr10" width="20px" height="20px"}
                              {__("Points")}: <span class="badge bg-light text-primary">{$user->_data['user_points']}</span>
                              </a>
                              {/if}
                              {if $system['wallet_enabled']}
                              <a class="dropdown-item" href="{$system['system_url']}/wallet">
                              {include file='__svg_icons.tpl' icon="wallet" class="main-icon mr10" width="20px" height="20px"}
                              {__("Wallet")}: <span class="badge bg-light text-primary">{print_money($user->_data['user_wallet_balance']|number_format:2)}</span>
                              </a>
                              {/if}
                              {if $user->_data['can_sell_products']}
                              <a class="dropdown-item" href="{$system['system_url']}/settings/market">
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="20" height="20" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ff7600" d="m29.241 10.407-2.803-6.583a2.996 2.996 0 0 0-2.76-1.825H8.525a3.004 3.004 0 0 0-2.736 1.769l-2.968 6.594c-.809 1.405-.382 3.195.969 4.017.067.041.14.071.209.108v12.512c0 1.654 1.346 3 3 3H25c1.654 0 3-1.346 3-3V14.487c.082-.044.167-.081.246-.131 1.305-.812 1.743-2.572.995-3.949zM18 28v-5h4v5zm8-1c0 .551-.449 1-1 1h-1v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H7c-.551 0-1-.449-1-1V15a4.24 4.24 0 0 0 3.094-1.334c1.094 1 2.559 1.503 4.026 1.327 1.305-.158 2.258-.811 2.879-1.416.622.604 1.575 1.257 2.879 1.416.194.023.388.035.582.035 1.265 0 2.495-.495 3.444-1.362A4.24 4.24 0 0 0 25.998 15v12zm1.188-14.341a2.246 2.246 0 0 1-3.265-1.044 1.001 1.001 0 0 0-.843-.612.985.985 0 0 0-.93.47c-.666 1.074-1.858 1.672-3.029 1.534-1.417-.172-2.18-1.383-2.263-1.521a.999.999 0 0 0-1.716 0c-.083.138-.845 1.349-2.263 1.521-1.175.139-2.364-.46-3.029-1.534a.981.981 0 0 0-.93-.47.999.999 0 0 0-.843.612 2.244 2.244 0 0 1-3.246 1.056c-.423-.257-.544-.867-.264-1.331a.896.896 0 0 0 .056-.106l2.99-6.645c.161-.358.519-.589.912-.589h15.152c.402 0 .763.239.92.608l2.823 6.631a.776.776 0 0 0 .052.104c.264.463.137 1.053-.285 1.316z" data-original="#0c474d"></path><path fill="#ff7600" d="M12 19H9a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2z" data-original="#3cacb6" class=""></path></g></svg>
                              {__("Marketplace")}: <span class="badge bg-light text-primary">{print_money($user->_data['user_market_balance']|number_format:2)}</span>
                              </a>
                              {/if}
                              {if $user->_data['can_raise_funding']}
                              <a class="dropdown-item" href="{$system['system_url']}/settings/funding">
                              {include file='__svg_icons.tpl' icon="funding" class="main-icon mr10" width="20px" height="20px"}
                              {__("Funding")}: <span class="badge bg-light text-primary">{print_money($user->_data['user_funding_balance']|number_format:2)}</span>
                              </a>
                              {/if}
                              {if $user->_data['can_monetize_content'] && $user->_data['user_monetization_enabled']}
                              <a class="dropdown-item" href="{$system['system_url']}/settings/monetization">
                              {include file='__svg_icons.tpl' icon="monetization" class="main-icon mr10" width="20px" height="20px"}
                              {__("Monetization")}: <span class="badge bg-light text-primary">{print_money($user->_data['user_monetization_balance']|number_format:2)}</span>
                              </a>
                              {/if}
                              <div class="dropdown-divider"></div>
                              {/if}
                              <a class="dropdown-item" href="{$system['system_url']}/settings">
                              {include file='__svg_icons.tpl' icon="settings" class="main-icon mr10" width="20px" height="20px"}
                              {__("Settings")}
                              </a>
                              {if $user->_is_admin}
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{$system['system_url']}/admincp">
                              {include file='__svg_icons.tpl' icon="admin_panel" class="main-icon mr10" width="20px" height="20px"}
                              {__("Admin Panel")}
                              </a>
                              {elseif $user->_is_moderator}
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{$system['system_url']}/modcp">
                              {include file='__svg_icons.tpl' icon="admin_panel" class="main-icon mr10" width="20px" height="20px"}{__("Moderator Panel")}
                              </a>
                              {/if}
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{$system['system_url']}/signout/?cache={$secret}">
                              {include file='__svg_icons.tpl' icon="logout" class="main-icon mr10" width="20px" height="20px"}
                              {__("Log Out")}
                              </a>
                              <div class="dropdown-divider"></div>
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="#keyboard-shortcuts">
                                 {include file='__svg_icons.tpl' icon="keyboard" class="main-icon mr10" width="20px" height="20px"}
                                 {__("Keyboard Shortcuts")}
                              </div>
                              {if $system['themes'] && count($system['themes']) > 1}
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="#theme-switcher">
                                 {include file='__svg_icons.tpl' icon="themes_switcher" class="main-icon mr10" width="20px" height="20px"}
                                 {__("Theme Switcher")}
                              </div>
                              {/if}
                              {if $system['system_theme_mode_select']}
                              {if $system['theme_mode_night']}
                              <div class="dropdown-item pointer js_theme-mode" data-mode="day">
                                 {include file='__svg_icons.tpl' icon="dark_light" class="main-icon mr10" width="20px" height="20px"}
                                 <span class="js_theme-mode-text">{__("Day Mode")}</span>
                              </div>
                              {else}
                              <div class="dropdown-item pointer js_theme-mode" data-mode="night">
                                 {include file='__svg_icons.tpl' icon="dark_light" class="main-icon mr10" width="20px" height="20px"}
                                 <span class="js_theme-mode-text">{__("Night Mode")}</span>
                              </div>
                              {/if}
                              {/if}
                           </div>
                        </li>
                        <!-- user-menu -->
                        {else}
                        <li class="dropdown float-end">
                           <a href="#" class="dropdown-toggle user-menu" data-bs-toggle="dropdown" data-display="static">
                           <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/blank_profile_male.png">
                           <span>{__("Join")}</span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="{$system['system_url']}/signin">
                              {include file='__svg_icons.tpl' icon="login" class="main-icon mr10" width="20px" height="20px"}
                              {__("Sign In")}
                              </a>
                              {if $system['registration_enabled']}
                              <a class="dropdown-item" href="{$system['system_url']}/signup">
                              {include file='__svg_icons.tpl' icon="user_add" class="main-icon mr10" width="20px" height="20px"}
                              {__("Sign Up")}
                              </a>
                              {/if}
                              {if ($system['themes'] && count($system['themes']) > 1) || $system['system_theme_mode_select']}
                              <div class="dropdown-divider"></div>
                              {/if}
                              {if $system['themes'] && count($system['themes']) > 1}
                              <div class="dropdown-item pointer" data-toggle="modal" data-url="#theme-switcher">
                                 {include file='__svg_icons.tpl' icon="themes_switcher" class="main-icon mr10" width="20px" height="20px"}
                                 {__("Theme Switcher")}
                              </div>
                              {/if}
                              {if $system['system_theme_mode_select']}
                              {if $system['theme_mode_night']}
                              <div class="dropdown-item pointer js_theme-mode" data-mode="day">
                                 {include file='__svg_icons.tpl' icon="dark_light" class="main-icon mr10" width="20px" height="20px"}
                                 <span class="js_theme-mode-text">{__("Day Mode")}</span>
                              </div>
                              {else}
                              <div class="dropdown-item pointer js_theme-mode" data-mode="night">
                                 {include file='__svg_icons.tpl' icon="dark_light" class="main-icon mr10" width="20px" height="20px"}
                                 <span class="js_theme-mode-text">{__("Night Mode")}</span>
                              </div>
                              {/if}
                              {/if}
                           </div>
                        </li>
                        {/if}
                     </ul>
                  </div>
                  <!-- navbar-wrapper -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
{/if}
<!-- main-header -->
<!-- ads -->
{include file='_ads.tpl' _ads=$ads_master['header'] _master=true}
<!-- ads -->
<style>

   .main-header .logo{
   display:flex;
   }
   .main-header .logo-wrapper{
   padding-right:0px;
   }
   .main-header .logo img{
   margin-top:10px;
   }
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
   .header-icon{
   width: 65%;
   height: auto;
   margin-top: -6px;
   }
   @media (min-width: 768px){
   .navbar-wrapper .user-menu>img {
   height: 52px !important;
   width: 52px !important;
   }}
   .header-icon, .header-icon * {
   fill: #ff7600 !important;
   color: #ff7600 !important;
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
   background-image:url({$system['system_url']}/content/themes/{$system['theme']}/images/cover.jpg);
   background-size: 100% 100%;
   }
   .nav-btn svg {
   fill: black;
   }
   .navbar-wrapper > ul > li > a {
   margin-top: 0px !important;
   }

   svg {
  fill: #1c1b1f ;
}
</style>