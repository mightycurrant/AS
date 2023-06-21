<?php
/* Smarty version 3.1.31, created on 2023-06-16 23:37:37
  from "module_file_tpl:DesignManager;admin_import_design.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648cd621769d59_15866102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd364546fbc2519d47f9a4e1d4a29a09f4bcdff70' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_import_design.tpl',
      1 => 1686078003,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648cd621769d59_15866102 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_form_start')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_admin_icon')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\admin\\plugins\\function.admin_icon.php';
if (!is_callable('smarty_function_form_end')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.form_end.php';
echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
  $('.helpicon').click(function(){
    var x = $(this).attr('name');
    $('#'+x).dialog();
  });
});
<?php echo '</script'; ?>
>

<h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('import_design_step1');?>
</h3>

<?php echo smarty_function_form_start(array(),$_smarty_tpl);?>

<div class="pageinfo"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('info_import_xml_step1');?>
</div>

<div class="pageoverflow">
  <p class="pagetext"><label for="import_xml_file"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_import_xml_file');?>
:</label></p>
  <p class="pageinput">
    <input type="file" id="import_xml_file" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
import_xml_file" size="50"/>
    <?php echo smarty_function_admin_icon(array('name'=>'help_import_xml_file','icon'=>'info.gif','class'=>'helpicon'),$_smarty_tpl);?>

  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
next1" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('next');?>
"/>
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
"/>
  </p>
</div>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>


<div style="display: none;"><div id="help_import_xml_file" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_help');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('help_import_xml_file');?>
</div></div><?php }
}
