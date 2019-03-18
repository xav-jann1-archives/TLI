<?php
/* Smarty version 3.1.33, created on 2019-03-18 11:23:56
  from '/var/www/html/TLI/pages/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8f71bc4f16e7_29984933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e16cf4b840d5b9d3bc140e76f61af61cb89d6c5c' => 
    array (
      0 => '/var/www/html/TLI/pages/templates/menu.tpl',
      1 => 1552904399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8f71bc4f16e7_29984933 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container_pathologies">
	<!--smarty-->
	<?php $_smarty_tpl->_assignInScope('prec', "null");?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableau']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
	<?php if ($_smarty_tpl->tpl_vars['prec']->value == "null") {?>
		<div class="card-header" id="headingOne">
				<button class="btn btn-smbtn btn-block" data-toggle="collapse" data-target=<?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value[2];
$_prefixVariable1 = ob_get_clean();
echo ('#').($_prefixVariable1);?>
 aria-expanded="false" aria-controls=<?php echo $_smarty_tpl->tpl_vars['i']->value[2];?>
>
				<span class="pull-left">
							<h2><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</h2> </span>
			</button>
			
		</div>

		<div id=<?php echo $_smarty_tpl->tpl_vars['i']->value[2];?>
 class="list-group collapse" aria-labelledby="headingOne">
		    <ul>
		      <li class="list-group-item">
		        <?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>

			  </li>
	<?php } elseif ($_smarty_tpl->tpl_vars['i']->value[0] == $_smarty_tpl->tpl_vars['prec']->value) {?>
			  <li class="list-group-item">
		        <?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>

			  </li>
	<?php } else { ?>
		    </ul></div>
			<div class="card-header" id="headingOne">
				<button class="btn btn-smbtn btn-block" data-toggle="collapse" data-target=<?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value[2];
$_prefixVariable2 = ob_get_clean();
echo ('#').($_prefixVariable2);?>
 aria-expanded="false" aria-controls=<?php echo $_smarty_tpl->tpl_vars['i']->value[2];?>
>
				<span class="pull-left">
							<h2><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</h2> </span>
			</button>
			
		</div>

		<div id=<?php echo $_smarty_tpl->tpl_vars['i']->value[2];?>
 class="list-group collapse" aria-labelledby="headingOne">
		    <ul>
		      <li class="list-group-item">
		        <?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>

			  </li>
	<?php }?>
	<?php $_smarty_tpl->_assignInScope('prec', $_smarty_tpl->tpl_vars['i']->value[0]);?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul></div>
	<!--smarty-->
</div><?php }
}
