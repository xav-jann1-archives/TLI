<?php
/* Smarty version 3.1.33, created on 2019-03-18 09:56:34
  from '/var/www/html/TLI/pages/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8f5d42d7c5f3_35122306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a08fb97e9cb15befb5b24c721117025eba059fee' => 
    array (
      0 => '/var/www/html/TLI/pages/templates/register.tpl',
      1 => 1552898835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8f5d42d7c5f3_35122306 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
	<body>
	<!--  [ Inscription ou connexion ] -->
		<?php if (!isset($_smarty_tpl->tpl_vars['session']->value['name'])) {?>
		<div class="container_inscription center-block">
		  <h1> Inscription :</h1>
		  <form action="index.php?page=register&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
" method="post">
		    <div class="form-group">
		      <label for="name">Nom (qui sera le nom de connexion):</label>
					<input type="text" class="form-control center-block" id="name" name="name">
					<?php echo $_smarty_tpl->tpl_vars['form']->value['error_name'];?>

		    </div>
		    <div class="form-group">
		      <label for="lname">Prenom:</label>
					<input type="text" class="form-control center-block" id="lname" name="lname">
					<?php echo $_smarty_tpl->tpl_vars['form']->value['error_lname'];?>

		    </div>
		    <div class="form-group">
		      <label for="Mail">Mail:</label>
					<input type="text" class="form-control center-block" id="mail" name="mail">
					<?php echo $_smarty_tpl->tpl_vars['form']->value['error_mail'];?>

		    </div>
		    <div class="form-group">
		      <label for="pwd">Mot de passe:</label>
					<input type="password" class="form-control center-block" id="pwd" name="pwd">
					<?php echo $_smarty_tpl->tpl_vars['form']->value['error_pass'];?>

		  </div>
		  <div class="form-group">
		      <label for="pwdc">Confimation Mot de passe:</label>
		      <input type="password" class="form-control center-block" id="pwdc" name="pwdc">
		  </div>
		  
		    
		      <div>
					<input type="hidden" name="sent" value="sent">
		      <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">s'inscrire</button>
		  </div>
		    
		  </form>
		</div>
		<?php }?>

<!--  [ Informationation Compte si connecte ] -->
		<?php if (isset($_smarty_tpl->tpl_vars['session']->value['name'])) {?>
	<form class="container">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom de compte</label>
      <input type="name" class="form-control" placeholder=<?php echo $_smarty_tpl->tpl_vars['session']->value['name'];?>
 readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword">Prenom</label>
      <input type="lname" class="form-control" placeholder=<?php echo $_smarty_tpl->tpl_vars['session']->value['lname'];?>
 readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Adresse mail</label>
    <input type="text" class="form-control" id="inputAddress" placeholder=<?php echo $_smarty_tpl->tpl_vars['session']->value['mail'];?>
>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ville</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
		<?php }?>
	</body>
<?php }
}
