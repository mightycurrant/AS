<?php
/* Smarty version 3.1.31, created on 2023-06-15 20:28:45
  from "tpl_body:14" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648b585de7aaa0_73759690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '650460e1799b95e04d87ae3036cb2c53a06b88df' => 
    array (
      0 => 'tpl_body:14',
      1 => '1686082628',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648b585de7aaa0_73759690 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_sitename')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.title.php';
?>
<body>
	<header id="header">
		<h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
	</header>

	<nav id="menu">
		<?php echo Navigator::function_plugin(array(),$_smarty_tpl);?>

	</nav>

	<section id="content">
		<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
		<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
	</section>
</body>

</html><?php }
}
