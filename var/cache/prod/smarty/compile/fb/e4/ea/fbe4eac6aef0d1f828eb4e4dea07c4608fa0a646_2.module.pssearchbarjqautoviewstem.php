<?php
/* Smarty version 3.1.33, created on 2019-04-23 01:53:05
  from 'module:pssearchbarjqautoviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbe8c21c3d445_26841731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe4eac6aef0d1f828eb4e4dea07c4608fa0a646' => 
    array (
      0 => 'module:pssearchbarjqautoviewstem',
      1 => 1555989322,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbe8c21c3d445_26841731 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block search module TOP -->
<div class="search-widget align-self-center py-3" data-search-widget data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<div class="input-group">
			<input class="form-control" type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
			<button type="submit" class="btn btn-link">
				<i class="material-icons search">&#xE8B6;</i>
				<span class="d-none"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
			</button>
		</div>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }
}
