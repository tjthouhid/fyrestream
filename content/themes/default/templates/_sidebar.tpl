<div class="left-sidebar h-100 d-none d-lg-block">
    <ul class="main-side-nav navbar-nav left-menu">
      <!-- favorites -->
      <li {if $page == "index" && ($view == "" || $view == "discover" || $view == "popular")}class="active" {/if}>
        {if !$user->_logged_in || (!$system['popular_posts_enabled'] && !$system['discover_posts_enabled'])}
          <a href="{$system['system_url']}">
              <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/icon1.png">
            {__("News Feed")}
          </a>
        {else}
          <a href="{$system['system_url']}"  {if $page == "index" && ($view == "discover" || $view == "popular")}aria-expanded="true" {/if}>
              <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/icon1.png">
             {__("News Feed")}
          </a>
         <!-- <div class='collapse {if $page == "index" && ($view == "discover" || $view == "popular")}show{/if}' id="newsfeed">
            <ul>
              <li {if $page == "index" && $view == ""}class="active" {/if}>
                <a href="{$system['system_url']}">
                  {include file='__svg_icons.tpl' icon="posts_recent" class="main-icon mr10" width="24px" height="24px"}
                  {__("Recent Updates")}
                </a>
              </li>
              {if $system['popular_posts_enabled']}
                <li {if $page == "index" && $view == "popular"}class="active" {/if}>
                  <a href="{$system['system_url']}/popular">
                    {include file='__svg_icons.tpl' icon="popularity" class="main-icon mr10" width="24px" height="24px"}
                    {__("Popular Posts")}
                  </a>
                </li>
              {/if}
              {if $system['discover_posts_enabled']}
                <li {if $page == "index" && $view == "discover"}class="active" {/if}>
                  <a href="{$system['system_url']}/discover">
                    {include file='__svg_icons.tpl' icon="posts_discover" class="main-icon mr10" width="24px" height="24px"}
                    {__("Discover Posts")}
                  </a>
                </li>
              {/if}
            </ul>
          </div>-->
        {/if}
      </li>
<!--
      {if $user->_data['can_write_articles']}
        <li {if $page == "index" && $view == "articles"}class="active" {/if}>
          <a href="{$system['system_url']}/articles">
                <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon2.png">
             {__("My Articles")}
          </a>
        </li>
      {/if}

      {if $user->_data['can_sell_products']}
        <li {if $page == "index" && $view == "products"}class="active" {/if}>
          <a href="{$system['system_url']}/products">
                <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon8.png">
          {__("My Products")}
          </a>
        </li>
      {/if}

      {if $user->_data['can_raise_funding']}
        <li {if $page == "index" && $view == "funding_requests"}class="active" {/if}>
          <a href="{$system['system_url']}/funding_requests">
            {include file='__svg_icons.tpl' icon="money-bag" class="main-icon mr10" width="24px" height="24px"}
            {__("My Funding")}
          </a>
        </li>
      {/if}
-->
      {if $user->_logged_in}
        <li {if $page == "index" && $view == "saved"}class="active" {/if}>
          <a href="{$system['system_url']}/saved">
              <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon3.png">
              {__("Saved Posts")}
          </a>
        </li>
      {/if}
      {if $system['popular_posts_enabled']}
                <li {if $page == "index" && $view == "popular"}class="active" {/if}>
                  <a href="{$system['system_url']}/popular">
                 <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon4.png">
                     {__("Popular Posts")}
                  </a>
                </li>
              {/if}

      {if $user->_logged_in}
        {if $system['memories_enabled']}
          <li {if $page == "index" && $view == "memories"}class="active" {/if}>
            <a href="{$system['system_url']}/memories">
              <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon5.png">
              {__("Memories")}
            </a>
          </li>
        {/if}
      {/if}
      <!-- favorites -->

      <!-- advertising 
      {if $user->_logged_in}
        {if $user->_data['can_create_ads'] || $system['wallet_enabled'] || $system['packages_enabled']}
          <li class="ptb5">
            <small class="text-muted">{__("Advertising")|upper}</small>
          </li>

          {if $user->_data['can_create_ads']}
            <li {if $page == "ads"}class="active" {/if}>
              <a href="{$system['system_url']}/ads">
                {include file='__svg_icons.tpl' icon="ads" class="main-icon mr10" width="24px" height="24px"}
                {__("Ads Manager")}
              </a>
            </li>
          {/if}

          {if $system['wallet_enabled']}
            <li {if $page == "wallet"}class="active" {/if}>
              <a href="{$system['system_url']}/wallet">
                {include file='__svg_icons.tpl' icon="wallet" class="main-icon mr10" width="24px" height="24px"}
                {__("Wallet")}
              </a>
            </li>
          {/if}

          {if $system['packages_enabled']}
            <a href="#boosted" data-bs-toggle="collapse" {if $page == "index" && ($view == "boosted_posts" || $view == "boosted_pages")}aria-expanded="true" {/if}>
          
                 <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon7.png">    {__("Boosted")}
            </a>
            <div class='collapse {if $page == "index" && ($view == "boosted_posts" || $view == "boosted_pages")}show{/if}' id="boosted">
              <ul>
                <li {if $page == "index" && $view == "boosted_posts"}class="active" {/if}>
                  <a href="{$system['system_url']}/boosted/posts">
                    {__("Boosted Posts")}
                  </a>
                </li>
                {if $system['pages_enabled']}
                  <li {if $page == "index" && $view == "boosted_pages"}class="active" {/if}>
                    <a href="{$system['system_url']}/boosted/pages">
                      {__("Boosted Pages")}
                    </a>
                  </li>
                {/if}
              </ul>
            </div>
          {/if}
        {/if}
      {/if}
       advertising -->

      <!-- explore
      <li class="ptb5">
        <small class="text-muted">{__("explore")|upper}</small>
      </li>
 
      {if $user->_logged_in}
        <li {if $page == "people"}class="active" {/if}>
          <a href="{$system['system_url']}/people">
            {include file='__svg_icons.tpl' icon="find_people" class="main-icon mr10" width="24px" height="24px"}
            {__("People")}
          </a>
        </li>
      {/if}
-->
      {if $system['pages_enabled']}
        <li {if $page == "pages"}class="active" {/if}>
          <a href="{$system['system_url']}/pages">
                 <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon7.png">
         {__("Pages")}
          </a>
        </li>
      {/if}

      {if $system['groups_enabled']}
        <li {if $page == "groups"}class="active" {/if}>
          <a href="{$system['system_url']}/groups">
         <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon6.png">
            {__("Groups")}
          </a>
        </li>
      {/if}

      {if $system['events_enabled']}
        <li {if $page == "events"}class="active" {/if}>
          <a href="{$system['system_url']}/events">
                           <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon10.png">
      {__("Events")}
          </a>
        </li>
      {/if}

      {if $system['watch_enabled']}
        <li {if $page == "index" && $view == "watch"}class="active" {/if}>
          <a href="{$system['system_url']}/watch">
                                <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon9.png">
       {__("Watch")}
          </a>
        </li>
      {/if}
<!--
      {if $system['blogs_enabled']}
        <li {if $page == "blogs"}class="active" {/if}>
          <a href="{$system['system_url']}/blogs">
                                    <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon7.png">
  {__("Blogs")}
          </a>
        </li>
      {/if}
-->
      {if $system['market_enabled']}
        <li>
          <a href="{$system['system_url']}/market">
       <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon8.png">
       {__("Marketplace")}
          </a>
        </li>
      {/if}
<!--
      {if $system['funding_enabled']}
        <li {if $page == "funding"}class="active" {/if}>
          <a href="{$system['system_url']}/funding">
            {include file='__svg_icons.tpl' icon="funding" class="main-icon mr10" width="24px" height="24px"}
            {__("Funding")}
          </a>
        </li>
      {/if}

      {if $system['pages_enabled'] && $system['offers_enabled']}
        <li {if $page == "offers"}class="active" {/if}>
          <a href="{$system['system_url']}/offers">

                 <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon7.png">
            {__("Offers")}
          </a>
        </li>
      {/if}

      {if $system['pages_enabled'] && $system['jobs_enabled']}
        <li {if $page == "jobs"}class="active" {/if}>
          <a href="{$system['system_url']}/jobs">
                                     <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon5.png">
  {__("Jobs")}
          </a>
        </li>
      {/if}

      {if $system['forums_enabled']}
        <li {if $page == "forums"}class="active" {/if}>
          <a href="{$system['system_url']}/forums">
            {include file='__svg_icons.tpl' icon="forums" class="main-icon mr10" width="24px" height="24px"}
            {__("Forums")}
          </a>
        </li>
      {/if}

      {if $system['movies_enabled']}
        <li {if $page == "movies"}class="active" {/if}>
          <a href="{$system['system_url']}/movies">
            {include file='__svg_icons.tpl' icon="movies" class="main-icon mr10" width="24px" height="24px"}
            {__("Movies")}
          </a>
        </li>
      {/if}
-->
      {if $system['games_enabled']}
        <li {if $page == "games"}class="active" {/if}>
          <a href="{$system['system_url']}/games">
                     <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/rightside/Icon11.png">
     {__("Games")}
          </a>
        </li>
      {/if}

     
      <!-- explore -->
    </ul>
  </div>
<style>
@media (max-width:768px){
  .ownn{
    background:white;
  }
}
</style>