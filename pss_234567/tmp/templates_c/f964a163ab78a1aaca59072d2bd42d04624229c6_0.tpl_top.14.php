<?php
/* Smarty version 3.1.31, created on 2023-06-15 20:28:45
  from "tpl_top:14" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648b585dd7aa26_80920186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f964a163ab78a1aaca59072d2bd42d04624229c6' => 
    array (
      0 => 'tpl_top:14',
      1 => '1686082628',
      2 => 'tpl_top',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648b585dd7aa26_80920186 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.cms_get_language.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
"><?php }
}
