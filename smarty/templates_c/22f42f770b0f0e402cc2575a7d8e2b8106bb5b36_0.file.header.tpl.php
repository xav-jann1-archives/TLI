<?php
/* Smarty version 3.1.33, created on 2019-03-01 22:32:13
  from '/var/www/html/TLI/generic/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c79a4dd9ef073_50655456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22f42f770b0f0e402cc2575a7d8e2b8106bb5b36' => 
    array (
      0 => '/var/www/html/TLI/generic/header.tpl',
      1 => 1551475927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c79a4dd9ef073_50655456 (Smarty_Internal_Template $_smarty_tpl) {
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
	 
		    <a class="navbar-brand" href="index.php?page=home">
		  	<img src="img/logo.png" alt="logoacuponcture" id=logo class="d-inline-block align-top img-responsive" /></a>
		 
		  <div class="collapse navbar-collapse" id="navbarNav">

		    <ul class="navbar-nav ">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php?page=home">Accueil</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php?page=pathos">Pathologies</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php?page=recherche">Recherche</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php?page=compte">Compte</a>
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
