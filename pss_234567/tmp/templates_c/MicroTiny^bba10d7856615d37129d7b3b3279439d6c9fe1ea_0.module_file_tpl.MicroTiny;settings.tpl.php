<?php
/* Smarty version 3.1.31, created on 2023-06-15 21:48:01
  from "module_file_tpl:MicroTiny;settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648b6af134bcf5_83770913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bba10d7856615d37129d7b3b3279439d6c9fe1ea' => 
    array (
      0 => 'module_file_tpl:MicroTiny;settings.tpl',
      1 => 1686078005,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648b6af134bcf5_83770913 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_cms_function_cms_action_url')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.cms_action_url.php';
if (!is_callable('smarty_function_admin_icon')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\admin\\plugins\\function.admin_icon.php';
?>
<fieldset>
  <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->lang('prompt_profiles');?>
</legend>
  <table class="pagetable">
    <thead>
      <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
</th>
        <th class="pageicon"></th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profiles']->value, 'profile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
?>
        <?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_editprofile','profile'=>$_smarty_tpl->tpl_vars['profile']->value['name'],'assign'=>'edit_url'),$_smarty_tpl);?>

      <tr>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_edit_profile');?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['label'];?>
</a></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_url']->value;?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_edit_profile')),$_smarty_tpl);?>
</a></td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </tbody>
  </table>
</fieldset>
<?php }
}
