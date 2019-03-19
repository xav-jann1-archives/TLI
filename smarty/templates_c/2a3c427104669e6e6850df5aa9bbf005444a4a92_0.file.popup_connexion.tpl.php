<?php
/* Smarty version 3.1.33, created on 2019-03-19 19:29:38
  from '/var/www/html/TLI/pages/templates/popup_connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c91351214dc22_85468047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a3c427104669e6e6850df5aa9bbf005444a4a92' => 
    array (
      0 => '/var/www/html/TLI/pages/templates/popup_connexion.tpl',
      1 => 1553020136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c91351214dc22_85468047 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
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
      <form action="index.php?page=home&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
" method="post">
          <div class="form-group">
            <?php if (isset($_smarty_tpl->tpl_vars['form']->value['error'])) {?>
              <?php echo $_smarty_tpl->tpl_vars['form']->value['error'];?>
</br>
              <?php }?>
              <label for="usr">Nom:</label>
              <input type="text" class="form-control center-block" id="name" name='name'>
          </div>
          <div class="form-group">
              <label for="pwd">Mot de Passe:</label>
              <input type="password" class="form-control center-block" id="pwd" name='pwd'>
          </div>
          <div class="modal-footer">
              <a href="?page=register&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
" class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">s'inscrire</a>
              <input type="hidden" name='sent' value='sent'>
              <button class="btn btn-success btn-lg active my-3 my-sm-0" type="submit">se connecter</button>
              
          </div>
      </form>
    </div>
    </div>
  </div>
</div>
<?php }
}
