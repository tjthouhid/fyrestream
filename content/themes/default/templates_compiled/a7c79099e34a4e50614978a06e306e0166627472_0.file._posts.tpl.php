<?php
/* Smarty version 4.3.2, created on 2023-10-20 09:13:41
  from '/Users/usedupvc/Desktop/Sites/fyrestream/content/themes/default/templates/_posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_653244c54c4027_79721231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7c79099e34a4e50614978a06e306e0166627472' => 
    array (
      0 => '/Users/usedupvc/Desktop/Sites/fyrestream/content/themes/default/templates/_posts.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
    'file:_no_data.tpl' => 1,
  ),
),false)) {
function content_653244c54c4027_79721231 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- posts-loader -->
<div class="post x-hidden js_posts_loader">
  <div class="post-body with-loader">
    <div class="panel-effect">
      <div class="fake-effect fe-0"></div>
      <div class="fake-effect fe-1"></div>
      <div class="fake-effect fe-2"></div>
      <div class="fake-effect fe-3"></div>
      <div class="fake-effect fe-4"></div>
      <div class="fake-effect fe-5"></div>
      <div class="fake-effect fe-6"></div>
      <div class="fake-effect fe-7"></div>
      <div class="fake-effect fe-8"></div>
      <div class="fake-effect fe-9"></div>
      <div class="fake-effect fe-10"></div>
      <div class="fake-effect fe-11"></div>
    </div>
  </div>
</div>
<!-- posts-loader -->

<!-- posts staging -->
<button class="btn btn-primary rounded-pill posts-staging-btn js_view-staging-posts">
  <?php echo __("View");?>
 <span>0</span> <?php echo __("New Posts");?>

</button>

<div class="js_posts_stream_staging" style="display: none;"></div>
<!-- posts staging -->

<!-- posts stream -->
<div class="js_posts_stream" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-filter="<?php if ($_smarty_tpl->tpl_vars['_filter']->value) {
echo $_smarty_tpl->tpl_vars['_filter']->value;
} else { ?>all<?php }?>" data-country="<?php if ($_smarty_tpl->tpl_vars['selected_country']->value) {
echo $_smarty_tpl->tpl_vars['selected_country']->value['country_id'];
} else { ?>all<?php }?>" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" <?php }?>>
  <?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
    <ul>
      <!-- posts -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>$_smarty_tpl->tpl_vars['_get']->value), 0, true);
?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <!-- posts -->
    </ul>

    <!-- see-more -->
    <div class="alert alert-post see-more mb20 js_see-more js_see-more-infinite" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-filter="<?php if ($_smarty_tpl->tpl_vars['_filter']->value) {
echo $_smarty_tpl->tpl_vars['_filter']->value;
} else { ?>all<?php }?>" data-country="<?php if ($_smarty_tpl->tpl_vars['selected_country']->value) {
echo $_smarty_tpl->tpl_vars['selected_country']->value['country_id'];
} else { ?>all<?php }?>" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" <?php }?>>
      <span><?php echo __("More Stories");?>
</span>
      <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
  <?php } else { ?>
    <div class="js_posts_stream" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-filter="<?php if ($_smarty_tpl->tpl_vars['_filter']->value) {
echo $_smarty_tpl->tpl_vars['_filter']->value;
} else { ?>all<?php }?>" data-country="<?php if ($_smarty_tpl->tpl_vars['selected_country']->value) {
echo $_smarty_tpl->tpl_vars['selected_country']->value['country_id'];
} else { ?>all<?php }?>" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" <?php }?>>
      <ul>
        <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </ul>
    </div>
  <?php }?>
</div>
<!-- posts stream --><?php }
}
