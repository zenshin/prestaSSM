<?php /* Smarty version Smarty-3.1.19, created on 2017-07-28 14:04:15
         compiled from "/Applications/MAMP/htdocs/ssm1.6/prestashop/admin/themes/default/template/controllers/cart_rules/product_rule_group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1342229728597b283f2e9b99-06503881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d716e115a766deebede32a60e15180f3e58ed99' => 
    array (
      0 => '/Applications/MAMP/htdocs/ssm1.6/prestashop/admin/themes/default/template/controllers/cart_rules/product_rule_group.tpl',
      1 => 1498229114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1342229728597b283f2e9b99-06503881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_rule_group_id' => 0,
    'product_rule_group_quantity' => 0,
    'product_rules' => 0,
    'product_rule' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597b283f34c9d3_79978398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597b283f34c9d3_79978398')) {function content_597b283f34c9d3_79978398($_smarty_tpl) {?><tr id="product_rule_group_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_tr">
	<td>
		<a class="btn btn-default" href="javascript:removeProductRuleGroup(<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
);">
			<i class="icon-remove text-danger"></i>
		</a>
	</td>
	<td>


		<div class="form-group">
			<label class="control-label col-lg-4"><?php echo smartyTranslate(array('s'=>'The cart must contain at least'),$_smarty_tpl);?>
</label>
			<div class="col-lg-1">
				<input type="hidden" name="product_rule_group[]" value="<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
" />
				<input class="form-control" type="text" name="product_rule_group_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_quantity" value="<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_quantity']->value);?>
" />
			</div>
			<div class="col-lg-7">
				<label  class="control-label pull-left"><?php echo smartyTranslate(array('s'=>'product(s) matching the following rules:'),$_smarty_tpl);?>
</label>
			</div>
		</div>



		<div class="form-group">

			<label class="control-label col-lg-4"><?php echo smartyTranslate(array('s'=>'Add a rule concerning'),$_smarty_tpl);?>
</label>
			<div class="col-lg-4">
				<select class="form-control" id="product_rule_type_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
">
					<option value=""><?php echo smartyTranslate(array('s'=>'-- Choose --'),$_smarty_tpl);?>
</option>
					<option value="products"><?php echo smartyTranslate(array('s'=>'Products'),$_smarty_tpl);?>
</option>
					<option value="attributes"><?php echo smartyTranslate(array('s'=>'Attributes'),$_smarty_tpl);?>
</option>
					<option value="categories"><?php echo smartyTranslate(array('s'=>'Categories'),$_smarty_tpl);?>
</option>
					<option value="manufacturers"><?php echo smartyTranslate(array('s'=>'Manufacturers'),$_smarty_tpl);?>
</option>
					<option value="suppliers"><?php echo smartyTranslate(array('s'=>'Suppliers'),$_smarty_tpl);?>
</option>
				</select>
			</div>
			<div class="col-lg-4">
				<a class="btn btn-default" href="javascript:addProductRule(<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
);">
					<i class="icon-plus-sign"></i>
					<?php echo smartyTranslate(array('s'=>"Add"),$_smarty_tpl);?>

				</a>
			</div>

		</div>

		<?php echo smartyTranslate(array('s'=>'The product(s) are matching one of these:'),$_smarty_tpl);?>

		<table id="product_rule_table_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
" class="table table-bordered">
			<?php if (isset($_smarty_tpl->tpl_vars['product_rules']->value)&&count($_smarty_tpl->tpl_vars['product_rules']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['product_rule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_rule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_rules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_rule']->key => $_smarty_tpl->tpl_vars['product_rule']->value) {
$_smarty_tpl->tpl_vars['product_rule']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['product_rule']->value;?>

				<?php } ?>
			<?php }?>
		</table>

	</td>
</tr>
<?php }} ?>
