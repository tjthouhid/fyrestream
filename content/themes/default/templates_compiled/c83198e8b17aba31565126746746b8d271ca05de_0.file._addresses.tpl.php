<?php
/* Smarty version 4.3.2, created on 2023-10-14 14:04:50
  from '/home1/fyrestr4/public_html/test.fyrestream.com/content/themes/default/templates/_addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652aa002851492_39413700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c83198e8b17aba31565126746746b8d271ca05de' => 
    array (
      0 => '/home1/fyrestr4/public_html/test.fyrestream.com/content/themes/default/templates/_addresses.tpl',
      1 => 1688838762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_652aa002851492_39413700 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="payment-plans">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address');
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
?>
    <div class="payment-plan">
      <div class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['address']->value['address_title'];?>
</div>
      <div><?php echo $_smarty_tpl->tpl_vars['address']->value['address_details'];?>
</div>
      <div><?php echo $_smarty_tpl->tpl_vars['address']->value['address_city'];?>
</div>
      <div><?php echo $_smarty_tpl->tpl_vars['address']->value['address_country'];?>
</div>
      <div><?php echo $_smarty_tpl->tpl_vars['address']->value['address_zip_code'];?>
</div>
      <div><?php echo $_smarty_tpl->tpl_vars['address']->value['address_phone'];?>
</div>
      <div class="mt10 row g-1">
        <div class="col-12 <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>col-md-8<?php } else { ?>col-md-9<?php }?> mb5">
          <div class="d-grid">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="users/addresses.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['address']->value['address_id'];?>
" class="text-link ml10">
              <?php echo __("Edit");?>

            </button>
          </div>
        </div>
        <div class="col-12 <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>col-md-4<?php } else { ?>col-md-3<?php }?>">
          <div class="d-grid">
            <button type="button" class="btn btn-sm btn-light js_address-deleter" data-id="<?php echo $_smarty_tpl->tpl_vars['address']->value['address_id'];?>
">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete",'class'=>"danger-icon",'width'=>"18px",'height'=>"18px"), 0, true);
?>
            </button>
          </div>
        </div>
      </div>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <div data-toggle="modal" data-url="users/addresses.php?do=add" class="payment-plan new address">
    <i class="fa fa-plus mr5"></i>
    <?php echo __("Add New");?>

  </div>
</div><?php }
}
