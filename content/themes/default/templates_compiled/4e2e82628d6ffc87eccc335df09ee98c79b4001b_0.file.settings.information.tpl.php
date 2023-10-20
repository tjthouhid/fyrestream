<?php
/* Smarty version 4.3.2, created on 2023-10-15 09:41:25
  from '/home1/fyrestr4/public_html/content/themes/default/templates/settings.information.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652bb3c5518345_05655183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e2e82628d6ffc87eccc335df09ee98c79b4001b' => 
    array (
      0 => '/home1/fyrestr4/public_html/content/themes/default/templates/settings.information.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 9,
  ),
),false)) {
function content_652bb3c5518345_05655183 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"user_information",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
?>
  <?php echo __("Download Your Information");?>

</div>
<form class="js_ajax-forms" data-url="users/information.php">
  <div class="card-body">
    <div class="alert alert-info">
      <div class="text">
        <strong><?php echo __("Download Your Information");?>
</strong><br>
        <?php echo __("You can download all of it at once, or you can select only the types of information you want");?>

      </div>
    </div>
    <div class="h5 mb20 text-center">
      <?php echo __("Select which information you would like to download");?>

    </div>
    <!-- download options -->
    <div class="text-center">
      <!-- Information -->
      <input class="x-hidden input-label" type="checkbox" name="download_information" id="download_information" />
      <label class="button-label" for="download_information">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"user_information",'class'=>"main-icon",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Info");?>
</div>
      </label>
      <!-- Information -->
      <!-- Friends -->
      <input class="x-hidden input-label" type="checkbox" name="download_friends" id="download_friends" />
      <label class="button-label" for="download_friends">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Friends");?>
</div>
      </label>
      <!-- Friends -->
      <!-- Followings -->
      <input class="x-hidden input-label" type="checkbox" name="download_followings" id="download_followings" />
      <label class="button-label" for="download_followings">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"followings",'class'=>"main-icon",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Followings");?>
</div>
      </label>
      <!-- Followings -->
      <!-- Followers -->
      <input class="x-hidden input-label" type="checkbox" name="download_followers" id="download_followers" />
      <label class="button-label" for="download_followers">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"followers",'class'=>"main-icon",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Followers");?>
</div>
      </label>
      <!-- Followers -->
    </div>
    <div class="text-center">
      <!-- Pages -->
      <input class="x-hidden input-label" type="checkbox" name="download_pages" id="download_pages" />
      <label class="button-label" for="download_pages">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Pages");?>
</div>
      </label>
      <!-- Pages -->
      <!-- Groups -->
      <input class="x-hidden input-label" type="checkbox" name="download_groups" id="download_groups" />
      <label class="button-label" for="download_groups">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Groups");?>
</div>
      </label>
      <!-- Groups -->
      <!-- Events -->
      <input class="x-hidden input-label" type="checkbox" name="download_events" id="download_events" />
      <label class="button-label" for="download_events">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Events");?>
</div>
      </label>
      <!-- Events -->
      <!-- Posts -->
      <input class="x-hidden input-label" type="checkbox" name="download_posts" id="download_posts" />
      <label class="button-label" for="download_posts">
        <div class="icon">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon",'width'=>"32px",'height'=>"32px"), 0, true);
?>
        </div>
        <div class="title"><?php echo __("Posts");?>
</div>
      </label>
      <!-- Posts -->
    </div>
    <!-- download options -->

    <!-- error -->
    <div class="alert alert-danger mb0 mt20 x-hidden"></div>
    <!-- error -->

  </div>
  <div class="card-footer text-end">
    <button type="submit" class="btn btn-primary"><?php echo __("Request");?>
</button>
  </div>
</form><?php }
}
