<?php
/* Smarty version 3.1.31, created on 2023-06-21 20:33:53
  from "cms_template:a_news_summary" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64934291b8f7d9_36309434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd215feecc76d76024c97e4282dba6312fdea58d5' => 
    array (
      0 => 'cms_template:a_news_summary',
      1 => '1687372247',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64934291b8f7d9_36309434 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\cmsprojekt\\lib\\plugins\\modifier.cms_escape.php';
?>
<div class="l-content">
        <div class="information pure-g">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
    
        
            <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
" title="<?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>
"></a>
        
        <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
        	<div class="pure-u-1 pure-u-md-1-2">
        		<?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

        	
        
        	
        		[<?php echo $_smarty_tpl->tpl_vars['entry']->value->morelink;?>
]
        	
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?>
        	<div class="l-box">>
        		<?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

        	</div>
        <?php }?>
    
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div></div>
<?php if ($_smarty_tpl->tpl_vars['pagecount']->value > 1) {?>
    <p>
        <?php if ($_smarty_tpl->tpl_vars['pagenumber']->value > 1) {?>
            <?php echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
&nbsp;
        <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['pagetext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['oftext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['pagenumber']->value < $_smarty_tpl->tpl_vars['pagecount']->value) {?>
            &nbsp;<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

        <?php }?>
    </p>
<?php }?>
<!-- End News Display Template --><?php }
}
