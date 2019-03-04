<body>		
<div class="container_pathologies">
<h1>Liste des Pathologies</h1>
		<div class="container_recherches">
		  <h2> critères :</h2>
		  <form>
		    <div class="form-group">
		      <label for="Symptome">Symptome:</label>
		      <input type="text" class="form-control center-block" id="Symptome">
		    </div>
		    <div class="form-group">
		      <label for="Pathologie">Pathologie:</label>
		      <input type="text" class="form-control center-block" id="Pathologie">
		    </div>
		    <div>
		      <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">Valider</button>
		     </div>
		    
		  </form>
		</div>
<div class="info"> Veuillez cliquer sur le nom de la pathologies pour voir les symptômes associés</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Pop up bloquante de connexion
</button>

		<!--popup-->
		{include file="pages/templates/popup_connexion.tpl"}
		<!--popup-->

</div>
<!--model base pour chaque pathologie-->
	{include file="pages/templates/menu.tpl"}
</body>