<!-- Modal -->
<div class="modal fade" id="connexion_modal" tabindex="-1" aria-labelledby="connexion_modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
         $(document).ready(function(){
          $("#connexion_modal").modal('show');
         });
        </script>
      <div class="modal-header">
        <h5 class="modal-title" id="connexion_modal">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container_connexion center-block">
		  <h2>Connectez-vous :</h2>
		  <form>
		    <div class="form-group">
		      <label for="usr">Name:</label>
		      <input type="text" class="form-control center-block" id="usr">
		    </div>
		    <div class="form-group">
		      <label for="pwd">Password:</label>
		      <input type="password" class="form-control center-block" id="pwd">
		     </div>
		  </form>
		  
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" type="submit">S'inscrire</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" type="submit">se connecter</button>
      </div>
    </div>
  </div>
</div>
