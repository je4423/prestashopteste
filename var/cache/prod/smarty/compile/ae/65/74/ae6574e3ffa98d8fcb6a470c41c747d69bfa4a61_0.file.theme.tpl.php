<?php
/* Smarty version 3.1.33, created on 2019-04-23 01:38:03
  from 'C:\wamp64\www\prestashop\modules\ps_mbo\views\templates\admin\theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbe889b0c2166_37606846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae6574e3ffa98d8fcb6a470c41c747d69bfa4a61' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_mbo\\views\\templates\\admin\\theme.tpl',
      1 => 1554778162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbe889b0c2166_37606846 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }
}
}
