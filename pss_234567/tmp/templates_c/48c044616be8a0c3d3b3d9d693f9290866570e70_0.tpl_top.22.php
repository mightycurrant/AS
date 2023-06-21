<?php
/* Smarty version 3.1.31, created on 2023-06-17 01:15:12
  from "tpl_top:22" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648ced00c591f9_09921649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48c044616be8a0c3d3b3d9d693f9290866570e70' => 
    array (
      0 => 'tpl_top:22',
      1 => '1686957225',
      2 => 'tpl_top',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648ced00c591f9_09921649 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.cms_get_language.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
"><?php }
}
