<?php
/* Smarty version 3.1.31, created on 2023-05-21 23:54:37
  from "tpl_body:16" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_646a931d6678f0_09096502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '227252b7eb9e6523479cb6b15b7e203722468b14' => 
    array (
      0 => 'tpl_body:16',
      1 => '1684705821',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646a931d6678f0_09096502 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_sitename')) require_once 'C:\\xampp\\htdocs\\cmscms\\lib\\plugins\\function.sitename.php';
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
		<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
	</section>
</body>

</html><?php }
}
