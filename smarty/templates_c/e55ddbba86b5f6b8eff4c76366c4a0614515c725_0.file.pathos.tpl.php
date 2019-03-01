<?php
/* Smarty version 3.1.33, created on 2019-03-01 22:33:01
  from '/var/www/html/TLI/pages/pathos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c79a50d9d8b53_19897533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e55ddbba86b5f6b8eff4c76366c4a0614515c725' => 
    array (
      0 => '/var/www/html/TLI/pages/pathos.tpl',
      1 => 1551475979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/menu.tpl' => 1,
    'file:templates/popup_connexion.tpl' => 1,
  ),
),false)) {
function content_5c79a50d9d8b53_19897533 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<body>		
		<!--<?php $_smarty_tpl->_subTemplateRender("file:templates/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>-->
<div class="container_pathologies">
<h1>Liste des Pathologies</h1>
<div class="info"> Veuillez cliquer sur le nom de la pathologies pour voir les symptômes associés</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Pop up bloquante de connexion
</button>

		<!--popup-->
		<?php $_smarty_tpl->_subTemplateRender("file:templates/popup_connexion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<!--popup-->

</div>
<!--model base pour chaque pathologie-->
	<div class="container_pathologies">
		<div class="card-header" id="headingOne">
				<button class="btn btn-smbtn btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				<span class="pull-left">
							<h2>Pathologie 1</h2> </span>
			</button>
			
		</div>

		<div id="collapseOne" class="list-group collapse" aria-labelledby="headingOne">
		    <ul>
		      <li class="list-group-item">
		        Symptome1
		      </li>
		      <li class="list-group-item">
		        Symptome2
		      </li>
		      <li class="list-group-item">
		        Symptome3
		      </li>
		      <li class="list-group-item">
		        Symptome4
		      </li>
		    </ul>
	</div>

	<div class="container_pathologies">
		<div class="card-header" id="headingOne">
				<button class="btn btn-smbtn btn-block" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
				<span class="pull-left">
							<h2>Pathologie 1</h2> </span>
			</button>
			
		</div>

		<div id="collapseTwo" class="list-group collapse" aria-labelledby="headingOne">
		    <ul>
		      <li class="list-group-item">
		        Symptome1
		      </li>
		      <li class="list-group-item">
		        Symptome2
		      </li>
		      <li class="list-group-item">
		        Symptome3
		      </li>
		      <li class="list-group-item">
		        Symptome4
		      </li>
		    </ul>
	</div>
	</body>

</html>
<?php }
}
