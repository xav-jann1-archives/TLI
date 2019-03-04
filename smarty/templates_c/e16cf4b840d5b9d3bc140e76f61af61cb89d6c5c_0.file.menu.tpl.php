<?php
/* Smarty version 3.1.33, created on 2019-03-04 10:51:42
  from '/var/www/html/TLI/pages/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cf52e1304a1_38746770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e16cf4b840d5b9d3bc140e76f61af61cb89d6c5c' => 
    array (
      0 => '/var/www/html/TLI/pages/templates/menu.tpl',
      1 => 1551691386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cf52e1304a1_38746770 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="select">
<ul>
	<!--smarty-->
	<?php $_smarty_tpl->_assignInScope('prec', "null");?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableau']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
	<?php if ($_smarty_tpl->tpl_vars['prec']->value == "null") {?>
		<li>
			<button>
				<div>
						<h3><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</h3>
						<ul>
							<li><h4><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</h4></li>
	<?php } elseif ($_smarty_tpl->tpl_vars['i']->value[0] == $_smarty_tpl->tpl_vars['prec']->value) {?>
		<li><h4><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</h4></li>
    <?php } else { ?>
		</ul></div></button></li>
		<li>
				<button>
					<div>
							<h3><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</h3>
							<ul>
								<li><h4><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</h4></li>
	<?php }?>
	<?php $_smarty_tpl->_assignInScope('prec', $_smarty_tpl->tpl_vars['i']->value[0]);?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul></div></button></li>
	<!--smarty-->
</ul>
</div>
<?php }
}
