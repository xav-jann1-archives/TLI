<?php
/* Smarty version 3.1.33, created on 2019-03-02 19:21:00
  from '/var/www/html/TLI/pages/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7ac98ca47624_38346952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a08fb97e9cb15befb5b24c721117025eba059fee' => 
    array (
      0 => '/var/www/html/TLI/pages/templates/register.tpl',
      1 => 1551550855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7ac98ca47624_38346952 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
	<body>
		
		<div class="container_inscription center-block">
		  <h1> Inscription :</h1>
		  <form action="index.php?page=register&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
" method="post">
		    <div class="form-group">
		      <label for="name">Nom:</label>
					<input type="text" class="form-control center-block" id="name" name="name" value="mathou">
					<?php echo $_smarty_tpl->tpl_vars['form']->value['error_name'];?>

		    </div>
		    <div class="form-group">
		      <label for="lname">Prenom:</label>
					<input type="text" class="form-control center-block" id="lname" name="lname" value="cedric">
					<?php echo $_smarty_tpl->tpl_vars['form']->value['error_lname'];?>

		    </div>
		    <div class="form-group">
		      <label for="Mail">Mail:</label>
					<input type="text" class="form-control center-block" id="mail" name="mail" value="ced@cpe.fr">
					<?php echo $_smarty_tpl->tpl_vars['form']->value['error_mail'];?>

		    </div>
		    <div class="form-group">
		      <label for="pwd">Mot de passe:</label>
					<input type="password" class="form-control center-block" id="pwd" name="pwd" value="azertyui77">
					<?php echo $_smarty_tpl->tpl_vars['form']->value['error_pass'];?>

		  </div>
		  <div class="form-group">
		      <label for="pwdc">Confimation Mot de passe:</label>
		      <input type="password" class="form-control center-block" id="pwdc" name="pwdc" value="azertyui77">
		  </div>
		  
		    
		      <div>
					<input type="hidden" name="sent" value="sent">
		      <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">s'inscrire</button>
		  </div>
		    
		  </form>
		</div>
	</body>
<?php }
}
