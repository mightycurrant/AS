<?php
/* Smarty version 3.1.31, created on 2023-05-21 23:54:43
  from "tpl_body:15" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_646a9323d9a8f1_60330741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05f8bb99cae7f5f57f0441f1c827811819047666' => 
    array (
      0 => 'tpl_body:15',
      1 => '1684705806',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646a9323d9a8f1_60330741 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
	<header id="header">
	 
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
