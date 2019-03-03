<!DOCTYPE html>
<html lang="fr">
	<body>
		
		<div class="container_inscription center-block">
		  <h1> Inscription :</h1>
		  <form action="index.php?page=register&lang={$data['lang']}" method="post">
		    <div class="form-group">
		      <label for="name">Nom:</label>
					<input type="text" class="form-control center-block" id="name" name="name">
					{$form.error_name}
		    </div>
		    <div class="form-group">
		      <label for="lname">Prenom:</label>
					<input type="text" class="form-control center-block" id="lname" name="lname">
					{$form.error_lname}
		    </div>
		    <div class="form-group">
		      <label for="Mail">Mail:</label>
					<input type="text" class="form-control center-block" id="mail" name="mail">
					{$form.error_mail}
		    </div>
		    <div class="form-group">
		      <label for="pwd">Mot de passe:</label>
					<input type="password" class="form-control center-block" id="pwd" name="pwd">
					{$form.error_pass}
		  </div>
		  <div class="form-group">
		      <label for="pwdc">Confimation Mot de passe:</label>
		      <input type="password" class="form-control center-block" id="pwdc" name="pwdc">
		  </div>
		  
		    
		      <div>
					<input type="hidden" name="sent" value="sent">
		      <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">s'inscrire</button>
		  </div>
		    
		  </form>
		</div>
	</body>
