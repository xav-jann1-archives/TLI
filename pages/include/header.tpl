<header>
		
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
				
		    <a class="navbar-brand" href="?page=home&lang={$data.lang}">
		  	<img src="img/logo.png" alt="logoacuponcture" id=logo class="d-inline-block align-top img-responsive" /></a>
		 
		  <div class="collapse navbar-collapse" id="navbarNav">

		    <ul class="navbar-nav ">
		      <li class="nav-item">
		        <a class="nav-link" href="?page=home&lang={$data.lang}">Accueil</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="?page=pathos&lang={$data.lang}">Pathologies</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="?page=recherche&lang={$data.lang}">Recherche</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="?page=register&lang={$data.lang}">Compte</a>
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
