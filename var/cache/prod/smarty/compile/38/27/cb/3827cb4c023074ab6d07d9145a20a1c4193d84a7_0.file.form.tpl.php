<?php
/* Smarty version 3.1.33, created on 2019-04-23 01:35:11
  from 'C:\wamp64\www\prestashop\admin202nfwfmw\themes\default\template\controllers\categories\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbe87ef7b7598_30624721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3827cb4c023074ab6d07d9145a20a1c4193d84a7' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin202nfwfmw\\themes\\default\\template\\controllers\\categories\\helpers\\form\\form.tpl',
      1 => 1554777380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbe87ef7b7598_30624721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1715172785cbe87ef6d15b6_55082039', "script");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21442369065cbe87ef6dab33_82306719', "input");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14047613155cbe87ef770a96_62717353', "description");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19144738095cbe87ef7a0058_32377028', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "script"} */
class Block_1715172785cbe87ef6d15b6_55082039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1715172785cbe87ef6d15b6_55082039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	var ps_force_friendly_product = false;
<?php
}
}
/* {/block "script"} */
/* {block "input"} */
class Block_21442369065cbe87ef6dab33_82306719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_21442369065cbe87ef6dab33_82306719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == "link_rewrite") {?>
		<?php echo '<script'; ?>
 type="text/javascript">
		<?php if (isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }?>
		<?php echo '</script'; ?>
>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }?>
	<?php if (($_smarty_tpl->tpl_vars['input']->value['name'] == 'active')) {?>
		<div class="col-lg-12">
			<div class="help-block">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you want a category to appear in the menu of your shop, go to [1]Modules > Modules Manager.[/1] Then, configure your menu module.','sprintf'=>array('[1]'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModulesSf'))."\" class=\"_blank\">",'[/1]'=>'</a>'),'d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>

			</div>
		</div>
	<?php }?>
	<?php if (in_array($_smarty_tpl->tpl_vars['input']->value['name'],array('image','thumb'))) {?>
		<div class="col-lg-6">
			<div class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended dimensions (for the default theme): %1spx x %2spx','sprintf'=>array($_smarty_tpl->tpl_vars['input']->value['format']['width'],$_smarty_tpl->tpl_vars['input']->value['format']['height']),'d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>

			</div>
		</div>
	<?php }
}
}
/* {/block "input"} */
/* {block "description"} */
class Block_14047613155cbe87ef770a96_62717353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'description' => 
  array (
    0 => 'Block_14047613155cbe87ef770a96_62717353',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if (($_smarty_tpl->tpl_vars['input']->value['name'] == 'groupBox')) {?>
		<div class="alert alert-info">
			<h4><?php echo $_smarty_tpl->tpl_vars['input']->value['info_introduction'];?>
</h4>
			<p><?php echo $_smarty_tpl->tpl_vars['input']->value['unidentified'];?>
<br />
			<?php echo $_smarty_tpl->tpl_vars['input']->value['guest'];?>
<br />
			<?php echo $_smarty_tpl->tpl_vars['input']->value['customer'];?>
</p>
		</div>
	<?php }
}
}
/* {/block "description"} */
/* {block "input_row"} */
class Block_19144738095cbe87ef7a0058_32377028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_19144738095cbe87ef7a0058_32377028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if (($_smarty_tpl->tpl_vars['input']->value['name'] == 'thumbnail')) {?>
		<?php echo $_smarty_tpl->tpl_vars['displayBackOfficeCategory']->value;?>

	<?php }
}
}
/* {/block "input_row"} */
}
