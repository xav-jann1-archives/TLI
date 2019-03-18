<!DOCTYPE html>
<html lang="fr">
	<body>
	<!--  [ Inscription ou connexion ] -->
		{if !isset($session.name)}
		<div class="container_inscription center-block">
		  <h1> Inscription :</h1>
		  <form action="index.php?page=register&lang={$data['lang']}" method="post">
		    <div class="form-group">
		      <label for="name">Nom:</label>
					<input type="text" class="form-control center-block" id="name" name="name" pattern="/^(?=.*[A-z])\S{2,32}$/" required>
					{$form.error_name}
		    </div>
		    <div class="form-group">
		      <label for="lname">Prenom:</label>
					<input type="text" class="form-control center-block" id="lname" name="lname" pattern="/^(?=.*[A-z])\S{2,32}$/" required>
					{$form.error_lname}
		    </div>
		    <div class="form-group">
		      <label for="Mail">Mail:</label>
					<input type="email" class="form-control center-block" id="mail" name="mail" required>
					{$form.error_mail}
		    </div>
		    <div class="form-group">
		      <label for="pwd">Mot de passe:</label>
					<input type="password" class="form-control center-block" id="pwd" name="pwd" pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])\S{8,32}$/" required>
					{$form.error_pass}
		  </div>
		  <div class="form-group">
		      <label for="pwdc">Confimation Mot de passe:</label>
		      <input type="password" class="form-control center-block" id="pwdc" name="pwdc" pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])\S{8,32}$/" required>
		  </div>
		  
		      <div>
					<input type="hidden" name="sent" value="sent">
		      <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">s'inscrire</button>
		  </div>
		    
		  </form>
		</div>
		{/if}

<!--  [ Information Compte si connecte ] -->
		{if isset($session.name)}
	<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom de compte</label>
      <input type="name" class="form-control" placeholder={$session.name} readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">Prenom</label>
      <input type="password" class="form-control" placeholder={$session.name} readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Addresse</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
		{/if}
	</body>
