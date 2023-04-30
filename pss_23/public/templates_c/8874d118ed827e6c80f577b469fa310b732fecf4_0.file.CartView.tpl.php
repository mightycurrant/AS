<?php
/* Smarty version 4.1.0, created on 2023-04-28 19:43:38
  from 'C:\xampp\htdocs\projektMiloszLesiak\app\views\CartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644c05ca73c066_44954400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8874d118ed827e6c80f577b469fa310b732fecf4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektMiloszLesiak\\app\\views\\CartView.tpl',
      1 => 1675177528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644c05ca73c066_44954400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1860626805644c05ca701715_65861541', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1278014856644c05ca702006_30965441', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1436821648644c05ca73baf9_42524648', 'bottom');
?>

</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1860626805644c05ca701715_65861541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1860626805644c05ca701715_65861541',
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
class Block_1278014856644c05ca702006_30965441 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1278014856644c05ca702006_30965441',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
<div class="pure-u-1-4"><img class="pure-img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/images/cdsymbol.png"><p><?php
$__section_customer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['plyta_id']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_total = $__section_customer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total !== 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?><p><?php echo $_smarty_tpl->tpl_vars['r']->value["nazwa_zespolu"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["tytul_albumu"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["rok_wydania"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["gatunek"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["formatt"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["cena"];?>
 zł <br></p><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
cartDelete/<?php echo $_smarty_tpl->tpl_vars['r']->value['plyta_id'];?>
">Usuń</a><?php
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
/* {/block 'content'} */
/* {block 'bottom'} */
class Block_1436821648644c05ca73baf9_42524648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_1436821648644c05ca73baf9_42524648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 
<?php
}
}
/* {/block 'bottom'} */
}
