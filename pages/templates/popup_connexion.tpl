<!-- Modal -->
<div class="modal fade" id="connexion_modal" tabindex="-1" aria-labelledby="connexion_modal" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="connexion_modal">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div >
      <div class="modal-body">
      <form action="index.php?page=home&lang={$data['lang']}" method="post">
          <div class="form-group">
            {if isset($form.error)}
              {$form.error}</br>
              {/if}
              <label for="usr">Name:</label>
              <input type="text" class="form-control center-block" id="name" name='name'>
          </div>
          <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control center-block" id="pwd" name='pwd'>
          </div>
          <div class="modal-footer">
              <a href="?page=register&lang={$data.lang}" class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">s'inscrire</a>
              <input type="hidden" name='sent' value='sent'>
              <button class="btn btn-success btn-lg active my-3 my-sm-0" type="submit">se connecter</button>
              
          </div>
      </form>
    </div>
    </div>
  </div>
</div>
