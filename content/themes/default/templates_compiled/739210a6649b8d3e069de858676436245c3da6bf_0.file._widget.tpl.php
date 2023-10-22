<?php
/* Smarty version 4.3.2, created on 2023-10-21 19:16:19
  from '/Users/tjthouhid/Desktop/Wplocal/app/public/content/themes/default/templates/_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65342383b53450_52867602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '739210a6649b8d3e069de858676436245c3da6bf' => 
    array (
      0 => '/Users/tjthouhid/Desktop/Wplocal/app/public/content/themes/default/templates/_widget.tpl',
      1 => 1697889526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65342383b53450_52867602 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgets']->value) {?>
  <!-- Widgets -->
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
    <div class="card">
      <div class="card-header">
        <strong><?php ob_start();
echo $_smarty_tpl->tpl_vars['widget']->value['title'];
$_prefixVariable2 = ob_get_clean();
echo __($_prefixVariable2);?>
</strong>
      </div>
      <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['widget']->value['code'];?>
</div>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <!-- Widgets -->
<?php }
}
}
