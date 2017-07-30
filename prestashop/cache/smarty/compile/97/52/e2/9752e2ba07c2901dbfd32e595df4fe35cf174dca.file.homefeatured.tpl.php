<?php /* Smarty version Smarty-3.1.19, created on 2017-07-28 17:49:13
         compiled from "/Applications/MAMP/htdocs/ssm1.6/prestashop/themes/ssm/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1429502498597b6b091e59c6-69443483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9752e2ba07c2901dbfd32e595df4fe35cf174dca' => 
    array (
      0 => '/Applications/MAMP/htdocs/ssm1.6/prestashop/themes/ssm/modules/homefeatured/homefeatured.tpl',
      1 => 1501246707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1429502498597b6b091e59c6-69443483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597b6b09204805_57583249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597b6b09204805_57583249')) {function content_597b6b09204805_57583249($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
