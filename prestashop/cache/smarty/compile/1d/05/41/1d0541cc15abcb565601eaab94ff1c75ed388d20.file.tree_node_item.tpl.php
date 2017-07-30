<?php /* Smarty version Smarty-3.1.19, created on 2017-07-28 14:04:35
         compiled from "/Applications/MAMP/htdocs/ssm1.6/prestashop/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:661088627597b28535a3690-97744664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d0541cc15abcb565601eaab94ff1c75ed388d20' => 
    array (
      0 => '/Applications/MAMP/htdocs/ssm1.6/prestashop/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '661088627597b28535a3690-97744664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597b28535c7709_98887930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597b28535c7709_98887930')) {function content_597b28535c7709_98887930($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
