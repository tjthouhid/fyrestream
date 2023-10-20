<li class="dropdown js_live-messages">
   <a href="#" data-bs-toggle="dropdown" data-display="static">

    <span class="counter red shadow-sm rounded-pill {if $user->_data['user_live_messages_counter'] == 0}d-none{/if}">
      {$user->_data['user_live_messages_counter']}
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
      <span class="title">{__("Messages")}</span>
      <a class="float-end text-link js_chat-new" href="{$system['system_url']}/messages/new">{__("Send a New Message")}</a>
    </div>
    <div class="dropdown-widget-body">
      <div class="js_scroller">
        {if $user->_data['conversations']}
          <ul>
            {foreach $user->_data['conversations'] as $conversation}
              {include file='__feeds_conversation.tpl'}
            {/foreach}
          </ul>
        {else}
          <p class="text-center text-muted mt10">
            <lottie-player src="{$system['system_url']}/content/themes/{$system['theme']}/images/icon3.json" background="transparent"  speed="1"  style="width: 250px; height: 250px;display: block;margin-left: auto;margin-right: auto;" loop autoplay></lottie-player>
          </p>
        {/if}
      </div>
    </div>
    <a class="dropdown-widget-footer" href="{$system['system_url']}/messages">{__("See All")}</a>
  </div>
</li>