<?php
/* Smarty version 3.1.31, created on 2023-06-15 21:43:09
  from "module_file_tpl:TinyMCE;defaultadmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648b69cdc632d6_95449307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ca5eefe34f44c8c6a98645a4bd8329af1bc9b13' => 
    array (
      0 => 'module_file_tpl:TinyMCE;defaultadmin.tpl',
      1 => 1686078238,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
    'module_file_tpl:TinyMCE;admin_profileslist.tpl' => 1,
  ),
),false)) {
function content_648b69cdc632d6_95449307 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_cms_function_cms_action_url')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.cms_action_url.php';
if (!is_callable('smarty_function_admin_icon')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\admin\\plugins\\function.admin_icon.php';
?>


<div class="pagecontainer">

	<a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_editprofile'),$_smarty_tpl);?>
">
		<?php echo smarty_function_admin_icon(array('icon'=>'newobject.gif'),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('new_profile');?>

	</a>

	<?php $_smarty_tpl->_subTemplateRender('module_file_tpl:TinyMCE;admin_profileslist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 8, false);
?>




</div>
<?php }
}
