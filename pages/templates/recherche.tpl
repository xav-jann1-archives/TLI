	<body>
		<title>Recherche Pathologie</title>
		{if isset($session.name)}
		<div class="container_recherches">
		  <h2> critères :</h2>
		  <form action="index.php?page=recherche&lang={$data['lang']}" method="post">
		    <div class="form-group">
		      <label for="Symptome">Symptome:</label>
		      <input type="text" class="form-control center-block" id="symptome" name="symptome" placeholder={$symp}>
		    </div>
		    <div class="form-group">
		      <label for="Pathologie">Pathologie:</label>
		      <input type="text" class="form-control center-block" id="pathologie" name="pathologie" placeholder={$patho}>
		    </div>		    
		      <div>
		      <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">Valider</button>
		  </div>
		  </form>
		</div>

		{if isset($tableau)}
		<div class="info">Résultat de la recherche</div>
		{include file="pages/templates/menu.tpl"}
		{/if}
		{else}
		<div class="deny">Vous devez vous connecter pour acceder à la recherche.</br>
		<button class="btn btn-success my-2 my-sm-0 btn-lg" data-toggle="modal" data-target="#connexion_modal">Log in</button>
		</div>
		{/if}
	</body>