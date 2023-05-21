<?php
/* Smarty version 3.1.31, created on 2023-05-21 23:54:37
  from "tpl_top:16" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_646a931d5ce185_30700966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6533c690b6ee9196575de36effc10a9be07641f5' => 
    array (
      0 => 'tpl_top:16',
      1 => '1684705821',
      2 => 'tpl_top',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646a931d5ce185_30700966 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'C:\\xampp\\htdocs\\cmscms\\lib\\plugins\\function.cms_get_language.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
"><?php }
}
