<?php
/* Smarty version 3.1.33, created on 2019-03-01 18:23:34
  from '/var/www/html/TLI/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c796a968dc4f8_86864116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c00dc5446502a1a6bb0c82293392c84ec5b20819' => 
    array (
      0 => '/var/www/html/TLI/templates/header.tpl',
      1 => 1551459772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c796a968dc4f8_86864116 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
		
		<nav class="navbar sticky-top navbar-default navbar-expand-sm navbar-light bg-light">
			<div class="container-fluid">
			<!-- Pour que le menu soit responsive on utilise collapse:-->
		 	<button type="button" class="navbar-toggler hidden-md-up pull-right" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-controls="Toggle navigation">☰
		              <span class="sr-only"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		    </button>
		    <!-- Pour que le menu soit responsive:-->
	 
		    <a class="navbar-brand" href="acuponcture.php">
		  	<img src="img/logo.png" alt="logoacuponcture" id=logo class="d-inline-block align-top img-responsive" /></a>
		 
		  <div class="collapse navbar-collapse" id="navbarNav">

		    <ul class="navbar-nav ">
		      <li class="nav-item">
		        <a class="nav-link" href="acuponcture.php">Accueil</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="pathos.php">Pathologies</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="recherche.php">Recherche</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="compte.php">Compte</a>
		      </li>
		    </ul>
		  </div>

			<form class="form-inline">
			<label for="mail">@:</label>
				<input class="form-control mr-sm-2" type="text" placeholder="Mail Address" aria-label="Mail Address"  id="mail">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">log in</button>
			</form>
			</div>
		</nav>	
</header>
<?php }
}
