<?php
/* Smarty version 3.1.31, created on 2023-06-21 21:07:55
  from "module_db_tpl:Gallery;CycleProjekt" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64934a8b95e597_69557967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '600c1297adeb2d538f08a581a92b9e56a9c90273' => 
    array (
      0 => 'module_db_tpl:Gallery;CycleProjekt',
      1 => 1687374382,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64934a8b95e597_69557967 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="slides">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
	<?php if (!$_smarty_tpl->tpl_vars['image']->value->isdir) {?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" />
	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div>
<div id="caption">&nbsp;</div><?php }
}
