<?php
/* Smarty version 3.1.31, created on 2023-06-16 22:49:57
  from "C:\xampp\htdocs\cmsprojekt\admin\themes\OneEleven\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648ccaf5bacd64_08944125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa8e43e1ed16bde64ff213cdd68e886938a0cdd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cmsprojekt\\admin\\themes\\OneEleven\\templates\\footer.tpl',
      1 => 1686077995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648ccaf5bacd64_08944125 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_version')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.cms_version.php';
if (!is_callable('smarty_function_cms_versionname')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\function.cms_versionname.php';
?>
<footer id="oe_footer" class="cf"><div class="footer-left"><small class="copyright">Copyright &copy; <a rel="external" href="http://www.cmsmadesimple.org">CMS Made Simple&trade; <?php echo smarty_function_cms_version(array(),$_smarty_tpl);?>
 &ldquo;<?php echo smarty_function_cms_versionname(array(),$_smarty_tpl);?>
&rdquo;</a></small></div><div class="footer-right cf"><ul class="links"><li><a href="https://docs.cmsmadesimple.org/" rel="external" title="<?php echo lang('documentation');?>
"><?php echo lang('documentation');?>
</a></li><li><a href="https://forum.cmsmadesimple.org/" rel="external" title="<?php echo lang('forums');?>
"><?php echo lang('forums');?>
</a></li><li><a href="http://www.cmsmadesimple.org/about-link/" rel="external" title="<?php echo lang('about');?>
"><?php echo lang('about');?>
</a></li><li><a href="http://www.cmsmadesimple.org/about-link/about-us/" rel="external" title="<?php echo lang('team');?>
"><?php echo lang('team');?>
</a></li></ul></div></footer><?php }
}
