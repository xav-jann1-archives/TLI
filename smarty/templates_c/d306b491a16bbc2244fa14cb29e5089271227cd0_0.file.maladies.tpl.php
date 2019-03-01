<?php
/* Smarty version 3.1.33, created on 2019-03-01 19:58:46
  from '/var/www/html/TLI/templates/maladies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7980e6c85fd0_95439937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd306b491a16bbc2244fa14cb29e5089271227cd0' => 
    array (
      0 => '/var/www/html/TLI/templates/maladies.tpl',
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
function content_5c7980e6c85fd0_95439937 (Smarty_Internal_Template $_smarty_tpl) {
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
