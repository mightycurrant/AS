<?php
/* Smarty version 3.1.31, created on 2023-06-15 21:54:32
  from "module_file_tpl:Gallery;edittplabout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648b6c78ef7b20_29011450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5303997e06bbc6c247cdbbd0366c45d23221b18b' => 
    array (
      0 => 'module_file_tpl:Gallery;edittplabout.tpl',
      1 => 1686078971,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648b6c78ef7b20_29011450 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pageoverflow">
<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
</div>
<?php echo $_smarty_tpl->tpl_vars['formstart']->value;?>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_templatename']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['templatename']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_version']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_about']->value;?>
:</p>
  <div class="pageinput"><?php echo $_smarty_tpl->tpl_vars['about']->value;?>
</div>
</div>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['submit']->value;
echo $_smarty_tpl->tpl_vars['cancel']->value;?>
</p>
</div>
<?php echo $_smarty_tpl->tpl_vars['formend']->value;?>

<?php }
}
