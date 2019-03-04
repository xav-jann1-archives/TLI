<?php
/* Smarty version 3.1.33, created on 2019-03-04 10:51:28
  from '/var/www/html/TLI/pages/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cf520b32715_19752588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3038e957b8ca4a86e6a0335db53f179471b4615' => 
    array (
      0 => '/var/www/html/TLI/pages/templates/home.tpl',
      1 => 1551691386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cf520b32715_19752588 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="corps">
    <h1> Bienvenue sur le site d'acupunture </h1>
    <h2> sous titre </h2>
    <h3> sous sous titre </h3>

    <p>meilleur site du monde ! <br />
        (c'est vrai) </p>
    <?php if (!isset($_smarty_tpl->tpl_vars['session']->value['name'])) {?>
    <div class="container1 center-block">
        <h2>Connectez-vous :</h2>
        <form action="index.php?page=home&lang=<?php echo $_smarty_tpl->tpl_vars['data']->value['lang'];?>
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

    </div>
    <?php }?>
    <!-- liste -->
    <ul>
        <li> pathologie 1 </li>
        <li> pathologie 2 </li>
        <li> pathologie 3 </li>
    </ul>

    <!-- lien -->
    <p>lien vers: <a href="acuponcture2.html"> la page 2</a> ? </p>

    <a href="maladies.html" class="btn btn-primary btn-lg active" role="button" title="Vos maladies">Vos maladies</a>
    <a href="err404.html" class="btn btn-primary btn-lg active" role="button" title="Page 404">Page 404</a>
</div><?php }
}
