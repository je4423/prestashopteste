<?php
/* Smarty version 3.1.33, created on 2019-04-23 01:53:04
  from 'C:\wamp64\www\prestashop\themes\classic-rocket\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbe8c202a3618_71625884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dd10d74c505cd7bd88e00280ec74e37fb0426fa' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic-rocket\\templates\\_partials\\header.tpl',
      1 => 1555989323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbe8c202a3618_71625884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7300058645cbe8c20262dc3_11396801', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11106885005cbe8c2026e3f2_90338327', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3101738715cbe8c2027db82_93903722', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_7300058645cbe8c20262dc3_11396801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_7300058645cbe8c20262dc3_11396801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_11106885005cbe8c2026e3f2_90338327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_11106885005cbe8c2026e3f2_90338327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav border-bottom">
    <div class="container header__container">
      <div class="row d-none d-md-flex align-items-center">
        <div class="col-md-4">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

        </div>
        <div class="col-md-8 d-flex align-items-center justify-content-end right-nav">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

        </div>
      </div>
      <div class="d-md-none d-flex justify-content-between align-items-center w-100 mobile no-gutters">
        <div class="col-4">
          <button id="menu-icon" class="btn" data-toggle="modal" data-target="#mobile_top_menu_wrapper">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </button>
        </div>
        <div class="col-4">
          <div class="top-logo text-center" id="_mobile_logo"></div>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-end right-nav">
          <div id="_mobile_user_info"></div>
          <div id="_mobile_cart" class="mobile-cart"></div>
        </div>

      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_3101738715cbe8c2027db82_93903722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_3101738715cbe8c2027db82_93903722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top border-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-2 d-none d-md-block" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
        <div class="col-md-10 col-sm-12 d-flex justify-content-between position-static">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

        </div>
      </div>
    </div>
  </div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
