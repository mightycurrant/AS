<?php
/* Smarty version 4.1.0, created on 2023-04-28 20:26:39
  from 'C:\xampp\htdocs\projektMiloszLesiak\app\views\AlbumListFullPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644c0fdf4d6786_88237602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e316aaa90e231836e4d3c62887d6a8cf17ba7808' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektMiloszLesiak\\app\\views\\AlbumListFullPage.tpl',
      1 => 1682706397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AlbumListTable.tpl' => 1,
  ),
),false)) {
function content_644c0fdf4d6786_88237602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_397540098644c0fdf4c6470_20559518', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_298844099644c0fdf4c7242_66772743', 'content');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1694718328644c0fdf4d62a1_25272658', 'bottom');
?>

</div>
</div>
</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_397540098644c0fdf4c6470_20559518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_397540098644c0fdf4c6470_20559518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="main">
	<div class="header">
		<h1>CEDE</h1>
		<h2>Płyty muzyczne</h2>
	</div>

<?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_298844099644c0fdf4c7242_66772743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_298844099644c0fdf4c7242_66772743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="content">
	<h2 class="content-subhead">Gatunek</h2>
	<div class="bottom-margin">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
albumList">
		<legend>Opcje wyszukiwania</legend>
		<fieldset>
			<input id="searchform" type="text" placeholder="Tytuł albumu" name="sf_tytul_albumu" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->tytul_albumu;?>
" /><br />
			<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
		</fieldset>
		</form>
	</div>

	<?php if (\core\RoleUtils::inRole("admin")) {?>
	<div class="bottom-margin">
	<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
albumNew">Dodaj album</a>
	</div>	
	<?php }?>
	<div id="table">
	<?php $_smarty_tpl->_subTemplateRender("file:AlbumListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_pages'] > 1) {?>
		<div>
			<?php if ($_smarty_tpl->tpl_vars['pagination']->value['has_previous_page']) {?>
				<a class="pure-button" href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['previous_page_link'];?>
">&laquo; Poprzednia strona</a>
			<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, range(1,$_smarty_tpl->tpl_vars['pagination']->value['total_pages']), 'page_number');
$_smarty_tpl->tpl_vars['page_number']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page_number']->value) {
$_smarty_tpl->tpl_vars['page_number']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['page_number']->value == $_smarty_tpl->tpl_vars['pagination']->value['current_page']) {?>
					<span class="pure-button" disabled=""><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
				<?php } else { ?>
					<a class="pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
tab?page=<?php echo $_smarty_tpl->tpl_vars['page_number']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page_number']->value;?>
</a>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<br><br>
			<?php if ($_smarty_tpl->tpl_vars['pagination']->value['has_next_page']) {?>
				<a class="pure-button" href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next_page_link'];?>
">Następna strona &raquo;</a>
			<?php }?>
		</div>
	<?php }?>
	<?php
}
}
/* {/block 'content'} */
/* {block 'bottom'} */
class Block_1694718328644c0fdf4d62a1_25272658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_1694718328644c0fdf4d62a1_25272658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	 <?php
}
}
/* {/block 'bottom'} */
}
