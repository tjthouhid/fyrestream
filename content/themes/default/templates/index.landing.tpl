{include file='_head.tpl'}

<div class="container-fluid login-section pt-4 pb-4 p-md-5">
  <div class="row">
    <div class="col-12 col-md-2 order-1 order-md-1 mx-auto">
      <img class="logo img-fluid"
        src="{$system['system_url']}/content/themes/{$system['theme']}/images/logo.png"
        alt="Moments Logo" />
    </div>
    <div class="col-12 col-md-5 pt-5 px-4 pb-4 order-3 order-md-2">
      <div class="">
        {include file='_sign_form.tpl' do="in"}
        <div class="text-center">
          {if $system['play_store_badge_enabled']}
          <a href="{$system['play_store_link']}" target="_blank">
            {include file='__svg_icons.tpl' icon="playstore_badge" height="68px"}
          </a>
          {/if}
          {if $system['appgallery_badge_enabled']}
          <a href="{$system['appgallery_store_link']}" target="_blank">
            {include file='__svg_icons.tpl' icon="appgallery_badge" height="50px" class="mr10"}
          </a>
          {/if}
          {if $system['app_store_badge_enabled']}
          <a href="{$system['app_store_link']}" target="_blank">
            {include file='__svg_icons.tpl' icon="appstore_badge" height="50px"}
          </a>
          {/if}
        </div>
      </div>
    </div>
    <div class="col-12 col-md-5 order-2 order-md-3">
      <img class="logo img-fluid"
        src="{$system['system_url']}/content/themes/{$system['theme']}/images/landing/login-hero.png" />
    </div>
  </div>
</div>

{include file='_footer.tpl'}