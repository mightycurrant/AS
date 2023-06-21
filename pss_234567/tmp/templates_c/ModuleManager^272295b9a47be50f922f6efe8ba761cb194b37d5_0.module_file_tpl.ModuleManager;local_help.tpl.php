<?php
/* Smarty version 3.1.31, created on 2023-06-16 22:47:59
  from "module_file_tpl:ModuleManager;local_help.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648cca7f90aa08_45430960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '272295b9a47be50f922f6efe8ba761cb194b37d5' => 
    array (
      0 => 'module_file_tpl:ModuleManager;local_help.tpl',
      1 => 1686078006,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648cca7f90aa08_45430960 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['force_english']->value)) {?>
	<div class="pagewarning"><?php echo $_smarty_tpl->tpl_vars['ModuleManager']->value->Lang('help_forceenglish');?>
</div>
<?php }?>

<div class="pageheader">
	<?php if (isset($_smarty_tpl->tpl_vars['friendly_name']->value) && $_smarty_tpl->tpl_vars['friendly_name']->value != '') {?>
		<?php echo $_smarty_tpl->tpl_vars['friendly_name']->value;?>
 <em>(<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
)</em>
	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>

	<?php }?>

	<span class="helptext">
		<?php if (isset($_smarty_tpl->tpl_vars['englang_url']->value)) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['englang_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['englang_text']->value;?>
</a>&nbsp;
		<?php } elseif (isset($_smarty_tpl->tpl_vars['mylang_url']->value)) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['mylang_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['mylang_text']->value;?>
</a>&nbsp;
		<?php }?>
	</span>
</div>

<?php echo $_smarty_tpl->tpl_vars['help_page']->value;?>

<?php }
}
