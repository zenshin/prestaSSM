<?php /* Smarty version Smarty-3.1.19, created on 2017-07-29 18:33:14
         compiled from "/Applications/MAMP/htdocs/ssm1.6/prestashop/themes/ssm/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1961370843597b37e8f2a886-93644782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab155ab5fc14c538b70fb4377471db120d990cd5' => 
    array (
      0 => '/Applications/MAMP/htdocs/ssm1.6/prestashop/themes/ssm/index.tpl',
      1 => 1501349588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1961370843597b37e8f2a886-93644782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597b37e9004229_52256983',
  'variables' => 
  array (
    'HOOK_HOME' => 0,
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597b37e9004229_52256983')) {function content_597b37e9004229_52256983($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>
<?php }} ?>
