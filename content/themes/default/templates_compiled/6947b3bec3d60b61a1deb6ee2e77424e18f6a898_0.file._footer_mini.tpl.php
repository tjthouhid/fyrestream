<?php
/* Smarty version 4.3.2, created on 2023-10-20 10:01:55
  from '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/_footer_mini.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65325013157a99_91833037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6947b3bec3d60b61a1deb6ee2e77424e18f6a898' => 
    array (
      0 => '/Users/usedupvc/Local Sites/fyrestream/app/public/content/themes/default/templates/_footer_mini.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65325013157a99_91833037 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mini-footer mtb20 plr10">
  <div class="copyrights dropdown">
    <span class="mr5">&copy; <?php echo date('Y');?>
 Fyrestream</span>
    <!-- language -->
    <a href="#" class="language-dropdown" data-bs-toggle="dropdown">
      <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['flag'];?>
">
      <span><?php echo $_smarty_tpl->tpl_vars['system']->value['language']['title'];?>
</span>
    </a>
    <div class="dropdown-menu dropdown-menu-end">
      <div class="js_scroller">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value['languages'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
          <a class="dropdown-item" href="?lang=<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
">
            <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->tpl_vars['language']->value['flag'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>

          </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
    <!-- language -->
  </div>
  <ul class="links">
    <?php if ($_smarty_tpl->tpl_vars['static_pages']->value) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static_page');
$_smarty_tpl->tpl_vars['static_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->do_else = false;
?>
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
            <?php echo __($_smarty_tpl->tpl_vars['static_page']->value['page_title']);?>

          </a>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/contacts">
          <?php echo __("Contact Us");?>

        </a>
      </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory">
          <?php echo __("Directory");?>

        </a>
      </li>
    <?php }?>
  </ul>
</div><?php }
}
