<?php
/* Smarty version 4.3.2, created on 2023-10-20 09:12:07
  from '/Users/usedupvc/Desktop/Sites/fyrestream/content/themes/default/templates/_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65324467cb2a56_87753681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bf837c25fc7e5006f076c54346766b4faf5e24f' => 
    array (
      0 => '/Users/usedupvc/Desktop/Sites/fyrestream/content/themes/default/templates/_head.tpl',
      1 => 1697313152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.css.tpl' => 1,
  ),
),false)) {
function content_65324467cb2a56_87753681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/usedupvc/Desktop/Sites/fyrestream/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!doctype html>

<html data-lang="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['code'];?>
" <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "RTL") {?> dir="RTL" <?php }?>>

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Sngine">
    <meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_version'];?>
">

    <!-- Title -->
    <title>Fyrestream</title>
    <!-- Title -->

    <!-- Meta -->
    <meta name="description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_description']->value,300);?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_keywords'];?>
">
    <!-- Meta -->

    <!-- OG-Meta -->
    <meta property="og:title" content="Fyrestream" />
    <meta property="og:description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_description']->value,300);?>
" />
    <meta property="og:site_name" content="<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
" />
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['page_image']->value;?>
" />
    <!-- OG-Meta -->

    <!-- Twitter-Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Fyrestream" />
    <meta name="twitter:description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_description']->value,300);?>
" />
    <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['page_image']->value;?>
" />
    <!-- Twitter-Meta -->

    <!-- Favicon -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_favicon_default']) {?>
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/logo.png" />
    <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['system_favicon']) {?>
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/logo.png" />
    <?php }?>
    <!-- Favicon -->

    <!-- Fonts [Poppins|Font-Awesome] -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts [Poppins|Font-Awesome] -->

    <!-- CSS -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "LTR") {?>
  <link href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type='text/css'
    href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/style.min.css">
  <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/login.css">
  <link rel="stylesheet" type='text/css'
    href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/style_attached.css">
  <?php } else { ?>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/bootstrap/dist/css/bootstrap.rtl.min.css">
  <link rel="stylesheet" type='text/css'
    href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/css/style.rtl.min.css">
  <?php }?>
    <!-- CSS -->

    <!-- CSS Customized -->
    <?php $_smarty_tpl->_subTemplateRender('file:_head.css.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- CSS Customized -->

    <!-- Header Custom JavaScript -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['custome_js_header']) {?>
      <?php echo '<script'; ?>
>
        <?php echo html_entity_decode($_smarty_tpl->tpl_vars['system']->value['custome_js_header'],ENT_QUOTES);?>

      <?php echo '</script'; ?>
>
    <?php }?>
    <!-- Header Custom JavaScript -->
    <?php echo '<script'; ?>
 src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"><?php echo '</script'; ?>
>
</head><?php }
}
