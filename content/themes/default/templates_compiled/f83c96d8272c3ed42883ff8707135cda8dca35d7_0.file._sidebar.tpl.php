<?php
/* Smarty version 4.3.2, created on 2023-10-21 19:16:19
  from '/Users/tjthouhid/Desktop/Wplocal/app/public/content/themes/default/templates/_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_653423839b1984_66505455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f83c96d8272c3ed42883ff8707135cda8dca35d7' => 
    array (
      0 => '/Users/tjthouhid/Desktop/Wplocal/app/public/content/themes/default/templates/_sidebar.tpl',
      1 => 1697889526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 10,
  ),
),false)) {
function content_653423839b1984_66505455 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="left-sidebar h-100 d-none d-lg-block">
    <ul class="main-side-nav navbar-nav left-menu">
      <!-- favorites -->
      <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>class="active" <?php }?>>
        <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in || (!$_smarty_tpl->tpl_vars['system']->value['popular_posts_enabled'] && !$_smarty_tpl->tpl_vars['system']->value['discover_posts_enabled'])) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
              <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/icon1.png">
            <?php echo __("News Feed");?>

          </a>
        <?php } else { ?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
"  <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>aria-expanded="true" <?php }?>>
              <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/icon1.png">
             <?php echo __("News Feed");?>

          </a>
         <!-- <div class='collapse <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>show<?php }?>' id="newsfeed">
            <ul>
              <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == '') {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
                  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_recent",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
                  <?php echo __("Recent Updates");?>

                </a>
              </li>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['popular_posts_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "popular") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/popular">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"popularity",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Popular Posts");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['discover_posts_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "discover") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/discover">
                    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_discover",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                    <?php echo __("Discover Posts");?>

                  </a>
                </li>
              <?php }?>
            </ul>
          </div>-->
        <?php }?>
      </li>
<!--
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "articles") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/articles">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon2.png">
             <?php echo __("My Articles");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_sell_products']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "products") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/products">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon8.png">
          <?php echo __("My Products");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_raise_funding']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "funding_requests") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/funding_requests">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"money-bag",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("My Funding");?>

          </a>
        </li>
      <?php }?>
-->
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "saved") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/saved">
              <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon3.png">
              <?php echo __("Saved Posts");?>

          </a>
        </li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['system']->value['popular_posts_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "popular") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/popular">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon4.png">
                     <?php echo __("Popular Posts");?>

                  </a>
                </li>
              <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['memories_enabled']) {?>
          <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "memories") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/memories">
              <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon5.png">
              <?php echo __("Memories");?>

            </a>
          </li>
        <?php }?>
      <?php }?>
      <!-- favorites -->

      <!-- advertising 
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_ads'] || $_smarty_tpl->tpl_vars['system']->value['wallet_enabled'] || $_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
          <li class="ptb5">
            <small class="text-muted"><?php echo mb_strtoupper((string) __("Advertising") ?? '', 'UTF-8');?>
</small>
          </li>

          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_ads']) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "ads") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/ads">
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                <?php echo __("Ads Manager");?>

              </a>
            </li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_enabled']) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "wallet") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet">
                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                <?php echo __("Wallet");?>

              </a>
            </li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
            <a href="#boosted" data-bs-toggle="collapse" <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == "boosted_posts" || $_smarty_tpl->tpl_vars['view']->value == "boosted_pages")) {?>aria-expanded="true" <?php }?>>
          
                 <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon7.png">    <?php echo __("Boosted");?>

            </a>
            <div class='collapse <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == "boosted_posts" || $_smarty_tpl->tpl_vars['view']->value == "boosted_pages")) {?>show<?php }?>' id="boosted">
              <ul>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "boosted_posts") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/boosted/posts">
                    <?php echo __("Boosted Posts");?>

                  </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
                  <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "boosted_pages") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/boosted/pages">
                      <?php echo __("Boosted Pages");?>

                    </a>
                  </li>
                <?php }?>
              </ul>
            </div>
          <?php }?>
        <?php }?>
      <?php }?>
       advertising -->

      <!-- explore
      <li class="ptb5">
        <small class="text-muted"><?php echo mb_strtoupper((string) __("explore") ?? '', 'UTF-8');?>
</small>
      </li>
 
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "people") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"find_people",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("People");?>

          </a>
        </li>
      <?php }?>
-->
      <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "pages") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon7.png">
         <?php echo __("Pages");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "groups") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups">
         <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon6.png">
            <?php echo __("Groups");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "events") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events">
                           <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon10.png">
      <?php echo __("Events");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['watch_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "watch") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/watch">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon9.png">
       <?php echo __("Watch");?>

          </a>
        </li>
      <?php }?>
<!--
      <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "blogs") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon7.png">
  <?php echo __("Blogs");?>

          </a>
        </li>
      <?php }?>
-->
      <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
       <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon8.png">
       <?php echo __("Marketplace");?>

          </a>
        </li>
      <?php }?>
<!--
      <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "funding") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/funding">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Funding");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && $_smarty_tpl->tpl_vars['system']->value['offers_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "offers") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/offers">

                 <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon7.png">
            <?php echo __("Offers");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && $_smarty_tpl->tpl_vars['system']->value['jobs_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "jobs") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/jobs">
                                     <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon5.png">
  <?php echo __("Jobs");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "forums") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"forums",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Forums");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['movies_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "movies") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movies">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"movies",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Movies");?>

          </a>
        </li>
      <?php }?>
-->
      <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "games") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games">
                     <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/rightside/Icon11.png">
     <?php echo __("Games");?>

          </a>
        </li>
      <?php }?>

     
      <!-- explore -->
    </ul>
  </div>
<style>
@media (max-width:768px){
  .ownn{
    background:white;
  }
}
</style><?php }
}
