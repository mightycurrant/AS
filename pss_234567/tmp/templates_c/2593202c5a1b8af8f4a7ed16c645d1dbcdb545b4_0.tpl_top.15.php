<?php
/* Smarty version 3.1.31, created on 2023-06-21 01:42:05
  from "tpl_top:15" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6492394d04a3a8_79706287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2593202c5a1b8af8f4a7ed16c645d1dbcdb545b4' => 
    array (
      0 => 'tpl_top:15',
      1 => '1687292306',
      2 => 'tpl_top',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6492394d04a3a8_79706287 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.cms_get_language.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
"><?php }
}
