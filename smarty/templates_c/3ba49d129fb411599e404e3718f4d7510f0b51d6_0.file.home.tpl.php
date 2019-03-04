<?php
/* Smarty version 3.1.33, created on 2019-03-01 19:50:46
  from '/var/www/html/TLI/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c797f06478a91_97560378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ba49d129fb411599e404e3718f4d7510f0b51d6' => 
    array (
      0 => '/var/www/html/TLI/templates/home.tpl',
      1 => 1551466236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c797f06478a91_97560378 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<div class="corps">
		 <h1> Bienvenue sur le site d'acupunture </h1>
		 <h2> sous titre </h2>
		 <h3> sous sous titre </h3>
		
		<p>meilleur site du monde ! <br /> <!-- p pour paragraphe, br pour saut de ligne -->
		(c'est vrai) </p>

		<div class="container1 center-block">
		  <h2>Connectez-vous :</h2>
		  <form>
		    <div class="form-group">
		      <label for="usr">Name:</label>
		      <input type="text" class="form-control center-block" id="usr">
		    </div>
		    <div class="form-group">
		      <label for="pwd">Password:</label>
		      <input type="password" class="form-control center-block" id="pwd">
		     </div>
		     <div>
		      <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">se connecter</button>
		      <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">s'inscrire</button>
		    </div>
		  </form>
		  
		</div>
<!-- liste -->
		<ul> 
			<li> pathologie 1 </li>
			<li> pathologie 2 </li>
			<li> pathologie 3 </li>
		</ul>
		
<!-- lien -->
		<p>lien vers: <a href="acuponcture2.html"> la page 2</a> ? </p>

		<a href="maladies.html" class="btn btn-primary btn-lg active" role="button" title="Vos maladies">Vos maladies</a>
		<a href="err404.html" class="btn btn-primary btn-lg active" role="button" title="Page 404">Page 404</a>		
		</div><?php }
}
