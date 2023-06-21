<?php
/* Smarty version 3.1.31, created on 2023-06-21 01:52:38
  from "content:content_en" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64923bc6162091_92416468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62e936251e4799749e89fa9828a0ee7332eb5816' => 
    array (
      0 => 'content:content_en',
      1 => 1687305112,
      2 => 'content',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64923bc6162091_92416468 (Smarty_Internal_Template $_smarty_tpl) {
echo Gallery::function_plugin(array('dir'=>'photos'),$_smarty_tpl);?>

<?php echo News::function_plugin(array('number'=>"5",'detailpage'=>"szczegoly-aktualnosci"),$_smarty_tpl);
}
}
