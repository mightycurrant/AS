<?php
/* Smarty version 3.1.31, created on 2023-06-16 22:44:14
  from "cms_template:22" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648cc99e6f5ea3_21906218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '500b128b13026d6f306fcde67c1918c5699a2bf5' => 
    array (
      0 => 'cms_template:22',
      1 => '1686858036',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648cc99e6f5ea3_21906218 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.cms_get_language.php';
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_metadata')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.cms_stylesheet.php';
?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head>

<body>
	<header id="header">
		<h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
	</header>

	<nav id="menu">
		
	</nav>

	<section id="content">
		
	</section>
</body>

</html><?php }
}
