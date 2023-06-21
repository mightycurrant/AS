<?php
/* Smarty version 3.1.31, created on 2023-06-15 21:47:54
  from "C:\xampp\htdocs\cmsprojekt\admin\templates\listusertags.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648b6aea215803_79371924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20c1aa835e49eb4c9e39f3894e316dc13cb8101c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cmsprojekt\\admin\\templates\\listusertags.tpl',
      1 => 1686077994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648b6aea215803_79371924 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_function_admin_icon')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\admin\\plugins\\function.admin_icon.php';
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\smarty\\plugins\\function.cycle.php';
echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
   $('a.delusertag').click(function(ev){
      ev.preventDefault();
      var _hr = $(this).attr('href');
      cms_confirm('<?php echo smarty_modifier_cms_escape(lang('confirm_deleteusertag'),'javascript');?>
').done(function(){
         window.location.href = _hr;
      })
   })
})
<?php echo '</script'; ?>
>

<div class="pagecontainer">
    <div class="pageoptions">
       <a href="<?php echo $_smarty_tpl->tpl_vars['addurl']->value;?>
"><?php echo smarty_function_admin_icon(array('icon'=>'newobject.gif'),$_smarty_tpl);?>
 <?php echo lang('addusertag');?>
</a>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
  <table class="pagetable">
     <thead>
       <tr>
         <th><?php echo lang('name');?>
</th>
         <th><?php echo lang('description');?>
</th>
	 <th class="pageicon"></th>
	 <th class="pageicon"></th>
       </tr>
     </thead>
     <tbody>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag', false, 'tag_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag_id']->value => $_smarty_tpl->tpl_vars['tag']->value) {
?>
       <?php $_smarty_tpl->_assignInScope('edit_url', "editusertag.php".((string)$_smarty_tpl->tpl_vars['urlext']->value)."&amp;userplugin_id=".((string)$_smarty_tpl->tpl_vars['tag_id']->value));
?>
       <tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_url']->value;?>
" title="<?php echo lang('editusertag');?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['tag']->value['description'];?>
</td>
	  <td>
	     <a href="<?php echo $_smarty_tpl->tpl_vars['edit_url']->value;?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif','title'=>lang('editusertag')),$_smarty_tpl);?>
</a>
	  </td>
	  <td>
	     <a class="delusertag" href="deleteuserplugin.php<?php echo $_smarty_tpl->tpl_vars['urlext']->value;?>
&amp;userplugin_id=<?php echo $_smarty_tpl->tpl_vars['tag_id']->value;?>
"><?php echo smarty_function_admin_icon(array('icon'=>'delete.gif','title'=>lang('delete')),$_smarty_tpl);?>
</a>
	  </td>
       </tr>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

     </tbody>
  </table>
<?php }
}
}
