<li class="dropdown js_live-requests">
   <a href="#" data-bs-toggle="dropdown" data-display="static">

    <span class="counter red shadow-sm rounded-pill {if $user->_data['user_live_requests_counter'] == 0}x-hidden{/if}">
      {$user->_data['user_live_requests_counter']}
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
      <span class="title">{__("Friend Requests")}</span>
    </div>
    <div class="dropdown-widget-body">
      <div class="js_scroller">
        <!-- Friend Requests -->
        {if $user->_data['friend_requests']}
          <ul>
            {foreach $user->_data['friend_requests'] as $_user}
              {include file='__feeds_user.tpl' _tpl="list" _connection="request"}
            {/foreach}
          </ul>
        {else}
          <p class="text-center text-muted mt10">
            <lottie-player src="{$system['system_url']}/content/themes/{$system['theme']}/images/icon1.json" background="transparent"  speed="1"  style="width: 250px; height: 250px;display: block;margin-left: auto;margin-right: auto;" loop autoplay></lottie-player>
          </p>
        {/if}
        <!-- Friend Requests -->
      </div>
    </div>
    <a class="dropdown-widget-footer" href="{$system['system_url']}/people/friend_requests">{__("See All")}</a>
  </div>
</li>