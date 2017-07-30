<?php /* Smarty version Smarty-3.1.19, created on 2017-07-28 17:49:12
         compiled from "/Applications/MAMP/htdocs/ssm1.6/prestashop/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1970034636597b6b087fddb5-93845820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4680fa050733cbd3e36cfcb49a78727e68066e5' => 
    array (
      0 => '/Applications/MAMP/htdocs/ssm1.6/prestashop/modules/blockfacebook/blockfacebook.tpl',
      1 => 1498229116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1970034636597b6b087fddb5-93845820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597b6b08819623_35589340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597b6b08819623_35589340')) {function content_597b6b08819623_35589340($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
