<?php
/* Smarty version 3.1.33, created on 2019-03-01 22:15:33
  from '/var/www/html/TLI/pages/maladies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c79a0f5d636b7_64617849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7240582f6c161f867473348fe84bc80dc82acb4b' => 
    array (
      0 => '/var/www/html/TLI/pages/maladies.tpl',
      1 => 1551459772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/head.tpl' => 1,
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5c79a0f5d636b7_64617849 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
	
	<!--head-->
	<?php $_smarty_tpl->_subTemplateRender("file:templates/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<!--head-->

	<!--header-->
	<?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<!--header-->

	<body>
		<h1> Vos maladies </h1>
		<h2> sous titre </h2>
		<h3> sous sous titre </h3>
		
		<p>meilleur site du monde ! <br /> <!-- p pour paragraphe, br pour saut de ligne -->
		(c'est vrai) </p>

<!-- liste -->
		<ul> 
			<li> 1 </li>
			<li> 2 </li>
			<li> 3 </li>
		</ul>
		
<!-- lien -->
		<p>lien vers: <a href="acuponcture2.html"> la page 2</a> ? </p>
	<!--footer-->
	<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<!--footer-->

	</body>

</html>
<?php }
}
