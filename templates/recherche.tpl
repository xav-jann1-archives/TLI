<!DOCTYPE html>
<html>
	<!--head-->
	{include file="templates/head.tpl"}
	<!--head-->
	<body>
		<title>Recherche Pathologie</title>
	
		<!--header-->
		{include file="templates/header.tpl"}
		<!--header-->
		 
		

		<div class="container_recherches">
		  <h2> critères :</h2>
		  <form>
		    <div class="form-group">
		      <label for="Méridien">Méridien:</label>
		      <input type="text" class="form-control center-block" id="méridien">
		    </div>
		    <div class="form-group">
		      <label for="type">Type de pathologie:</label>
		      <input type="text" class="form-control center-block" id="type">
		    </div>
		    <div class="form-group">
		      <label for="caractéristiques">Caractéristiques:</label>
		      <input type="text" class="form-control center-block" id="caractéristiques">
		    </div>
		    
		  
		    
		      <div>
		      <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">Valider</button>
		  </div>
		    
		  </form>
		</div>
		<!--footer-->
		{include file="templates/footer.tpl"}
		<!--footer-->

	</body>

