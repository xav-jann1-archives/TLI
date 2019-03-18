<?php
/* Smarty version 3.1.33, created on 2019-03-18 11:46:39
  from '/var/www/html/TLI/pages/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8f770fd802e9_30908746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3038e957b8ca4a86e6a0335db53f179471b4615' => 
    array (
      0 => '/var/www/html/TLI/pages/templates/home.tpl',
      1 => 1552905994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8f770fd802e9_30908746 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="corps">
    <?php if (!isset($_smarty_tpl->tpl_vars['session']->value['name'])) {?>
    <div class="container center-block">
        <h1>Bienvenue sur le Site d'acupuncture !</h1>
        <h2>Vous trouverez tous ce qu'il faut savoir sur les pathologies et leurs symptômes</h2>
        <img class="img-fluid rounded-circle" src="img/aiguille1.jpg" alt="image acupuncture" />
        <h2> <button class="btn btn-outline-info btn-lg" data-toggle="modal" data-backdrop="static" data-target="#connexion_modal">Connectez-vous</button> pour avoir accès à tous le site.</h2>
        <!--<form action="index.php?page=home&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
" method="post">
            <div class="form-group">
                <?php echo $_smarty_tpl->tpl_vars['form']->value['error'];?>
</br>
                <label for="usr">Name:</label>
                <input type="text" class="form-control center-block" id="name" name='name'>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control center-block" id="pwd" name='pwd'>
            </div>
            <div>
                <input type="hidden" name='sent' value='sent'>
                <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">se connecter</button>
                <button class="btn btn-primary btn-lg active my-3 my-sm-0" type="submit">s'inscrire</button>
            </div>
        </form>
    -->
    </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['session']->value['name'])) {?>
    <div class="container">
    <h1>Bienvenue Docteur <?php echo $_smarty_tpl->tpl_vars['session']->value['name'];?>
</h1> 
    <img class="rounded mx-auto d-block" src="img/footer.jpg" alt="image acupuncture" />
    <blockquote class="blockquote text-center">
            <p class="mb-0">"La santé est le trésor le plus précieux et le plus facile à perdre. C'est cependant le plus mal gardé.".</p>
            <div class="blockquote-footer">Chauvot de Bauchêne </div>
    </blockquote>
    <h2 class="text-center"> Vous pouvez désomais faire des <a href="?page=recherche&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
">recherches</a>.</h2>
    </div>
    <?php }?>
</div><?php }
}
