<?php
/* Smarty version 3.1.33, created on 2019-03-18 11:23:56
  from '/var/www/html/TLI/pages/templates/pathos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8f71bc4e06b5_19272753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e4bcf047474afc93ced321728e55757b66263de' => 
    array (
      0 => '/var/www/html/TLI/pages/templates/pathos.tpl',
      1 => 1552904399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pages/templates/popup_connexion.tpl' => 1,
    'file:pages/templates/menu.tpl' => 1,
  ),
),false)) {
function content_5c8f71bc4e06b5_19272753 (Smarty_Internal_Template $_smarty_tpl) {
?><body>	
		
	<div class="container_pathologies">
		<h1>Liste des Pathologies</h1>
		<!-- Button trigger modal -->
		<!--popup-->
		<?php $_smarty_tpl->_subTemplateRender("file:pages/templates/popup_connexion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<!--popup-->
	</div>
	<!--model base pour chaque pathologie-->
	<div class="info"> Voici la liste des pathologies, veuillez cliquer sur l'une d'elles pour afficher les symptomes associés.</div>
	<?php $_smarty_tpl->_subTemplateRender("file:pages/templates/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body><?php }
}
