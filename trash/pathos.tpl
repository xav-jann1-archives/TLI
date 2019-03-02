<!DOCTYPE html>
<html>
	<!--head-->
	{include file="templates/head.tpl"}
	<!--head-->

	<body>

		<!--header-->
		{include file="templates/header.tpl"}
		<!--header-->
		
		<!--{include file="templates/menu.tpl"}-->
<div class="container_pathologies">
<h1>Liste des Pathologies</h1>
<div class="info"> Veuillez cliquer sur le nom de la pathologies pour voir les symptômes associés</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Pop up bloquante de connexion
</button>

		<!--popup-->
		{include file="templates/popup_connexion.tpl"}
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

	
<!--model base pour chaque pathologie-->
		<!--footer-->
		{include file="templates/footer.tpl"}
		<!--footer-->
	</body>

</html>
