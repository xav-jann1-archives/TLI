<?php
/* Smarty version 3.1.33, created on 2019-03-01 22:34:25
  from '/var/www/html/TLI/pages/compte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c79a561d7f969_84496319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de7e449f3036c0e0451f8eba58b5137ee4c62665' => 
    array (
      0 => '/var/www/html/TLI/pages/compte.tpl',
      1 => 1551476060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c79a561d7f969_84496319 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
	<body>
		<div class="container_inscription center-block">
		  <h1> Inscription :</h1>
		  <form action="log.php" method="post">
		    <div class="form-group">
		      <label for="name">Nom:</label>
		      <input type="text" class="form-control center-block" id="name" name="name">
		    </div>
		    <div class="form-group">
		      <label for="lname">Prenom:</label>
		      <input type="text" class="form-control center-block" id="lname" name="lname">
		    </div>
		    <div class="form-group">
		      <label for="Mail">Mail:</label>
		      <input type="text" class="form-control center-block" id="Mail" name="Mail">
		    </div>
		    <div class="form-group">
		      <label for="pwd">Mot de passe:</label>
		      <input type="password" class="form-control center-block" id="pwd" name="pwd">
		  </div>
		  <div class="form-group">
		      <label for="pwdc">Confimation Mot de passe:</label>
		      <input type="password" class="form-control center-block" id="pwdc" name="pwdc">
		  </div>
		  
		    
		      <div>
		      <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">s'inscrire</button>
		  </div>
		    
		  </form>
		</div>
	</body>
<?php }
}
