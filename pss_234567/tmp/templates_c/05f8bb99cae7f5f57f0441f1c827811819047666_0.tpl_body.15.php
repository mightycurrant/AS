<?php
/* Smarty version 3.1.31, created on 2023-06-21 01:42:05
  from "tpl_body:15" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6492394d1306a2_91819770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05f8bb99cae7f5f57f0441f1c827811819047666' => 
    array (
      0 => 'tpl_body:15',
      1 => '1687292306',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6492394d1306a2_91819770 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_sitename')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.title.php';
?>
<body>
	<header id="header">
		<h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
	</header>

	<nav id="menu">
		<?php echo Navigator::function_plugin(array('template'=>"a_menu_main"),$_smarty_tpl);?>

	</nav>

	<section id="content">
		<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
		<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
	</section>
	
</body>

</html><?php }
}
