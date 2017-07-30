<?php /* Smarty version Smarty-3.1.19, created on 2017-07-28 14:08:49
         compiled from "/Applications/MAMP/htdocs/ssm1.6/prestashop/admin062amg1ho/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1235680121597b3761ce8768-61268184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e759b907c83bc29b3c66862b31381de71c43443' => 
    array (
      0 => '/Applications/MAMP/htdocs/ssm1.6/prestashop/admin062amg1ho/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1235680121597b3761ce8768-61268184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597b3761cf97f2_61184043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597b3761cf97f2_61184043')) {function content_597b3761cf97f2_61184043($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
