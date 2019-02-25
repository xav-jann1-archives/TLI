<!DOCTYPE html>
<html lang="fr">
	<!--head-->
	{include file="templates/head.tpl"}
	<!--head-->

	<body>

	<!--header-->
	{include file="templates/header.tpl"}
	<!--header-->

		<div class="container_inscription center-block">
		  <h1> Inscription :</h1>
		  <form>
		    <div class="form-group">
		      <label for="name">Nom:</label>
		      <input type="text" class="form-control center-block" id="name">
		    </div>
		    <div class="form-group">
		      <label for="lname">Prenom:</label>
		      <input type="text" class="form-control center-block" id="lname">
		    </div>
		    <div class="form-group">
		      <label for="Mail">Mail:</label>
		      <input type="text" class="form-control center-block" id="Mail">
		    </div>
		    <div class="form-group">
		      <label for="pwd">Mot de passe:</label>
		      <input type="password" class="form-control center-block" id="pwd">
		  </div>
		  <div class="form-group">
		      <label for="pwdc">Confimation Mot de passe:</label>
		      <input type="password" class="form-control center-block" id="pwdc">
		  </div>
		  
		    
		      <div>
		      <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">s'inscrire</button>
		  </div>
		    
		  </form>
		</div>
		<!--footer-->
		{include file="templates/footer.tpl"}
		<!--footer-->
	</body>
