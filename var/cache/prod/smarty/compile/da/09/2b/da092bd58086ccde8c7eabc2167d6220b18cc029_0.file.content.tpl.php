<?php
/* Smarty version 3.1.33, created on 2019-04-23 01:42:30
  from 'C:\wamp64\www\prestashop\admin202nfwfmw\themes\default\template\controllers\cms_content\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbe89a65a77b2_39648546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da092bd58086ccde8c7eabc2167d6220b18cc029' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin202nfwfmw\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1554777380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbe89a65a77b2_39648546 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	<?php echo '</script'; ?>
>
<?php }
}
}
