<?php
/* Smarty version 3.1.33, created on 2019-03-04 10:51:42
  from '/var/www/html/TLI/pages/templates/popup_connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cf52e137100_61391260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a3c427104669e6e6850df5aa9bbf005444a4a92' => 
    array (
      0 => '/var/www/html/TLI/pages/templates/popup_connexion.tpl',
      1 => 1551691386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cf52e137100_61391260 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
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
<?php }
}
